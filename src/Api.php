<?php

namespace iGap;

use Exception;
use Google\Protobuf\Internal\Message;
use GuzzleHttp\Promise\Promise;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Proto\Request;
use Proto\Response;
use Ratchet\Client\WebSocket;
use React\EventLoop\LoopInterface;
use React\Socket\Connector;

class Api
{

    const ACTION_CONNECTION_SYMMETRIC_KEY = 2;
    const ACTION_HEARTBEAT = 3;
    const ACTION_USER_REGISTER = 100;
    const ACTION_USER_VERIFY = 101;
    const ACTION_USER_LOGIN = 102;
    const ACTION_USER_PROFILE_SET_EMAIL = 103;
    const ACTION_USER_PROFILE_SET_GENDER = 104;
    const ACTION_USER_PROFILE_SET_NICKNAME = 105;
    const ACTION_USER_CONTACTS_IMPORT = 106;
    const ACTION_USER_CONTACTS_GET_LIST = 107;
    const ACTION_USER_CONTACTS_DELETE = 108;
    const ACTION_USER_CONTACTS_EDIT = 109;
    const ACTION_USER_PROFILE_GET_EMAIL = 110;
    const ACTION_USER_PROFILE_GET_GENDER = 111;
    const ACTION_USER_PROFILE_GET_NICKNAME = 112;
    const ACTION_USER_AVATAR_ADD = 114;
    const ACTION_USER_AVATAR_DELETE = 115;
    const ACTION_USER_AVATAR_GET_LIST = 116;
    const ACTION_USER_INFO = 117;
    const ACTION_USER_GET_DELETE_TOKEN = 118;
    const ACTION_USER_DELETE = 119;
    const ACTION_USER_PROFILE_SET_SELF_REMOVE = 120;
    const ACTION_USER_PROFILE_GET_SELF_REMOVE = 121;
    const ACTION_USER_PROFILE_CHECK_USERNAME = 122;
    const ACTION_USER_PROFILE_UPDATE_USERNAME = 123;
    const ACTION_USER_UPDATE_STATUS = 124;
    const ACTION_USER_SESSION_GET_ACTIVE_LIST = 125;
    const ACTION_USER_SESSION_TERMINATE = 126;
    const ACTION_USER_SESSION_LOGOUT = 127;
    const ACTION_USER_CONTACTS_BLOCK = 128;
    const ACTION_USER_CONTACTS_UNBLOCK = 129;
    const ACTION_USER_CONTACTS_GET_BLOCKED_LIST = 130;
    const ACTION_USER_TWO_STEP_VERIFICATION_GET_PASSWORD_DETAIL = 131;
    const ACTION_USER_TWO_STEP_VERIFICATION_VERIFY_PASSWORD = 132;
    const ACTION_USER_TWO_STEP_VERIFICATION_SET_PASSWORD = 133;
    const ACTION_USER_TWO_STEP_VERIFICATION_UNSET_PASSWORD = 134;
    const ACTION_USER_TWO_STEP_VERIFICATION_CHECK_PASSWORD = 135;
    const ACTION_USER_TWO_STEP_VERIFICATION_VERIFY_RECOVERY_EMAIL = 136;
    const ACTION_USER_TWO_STEP_VERIFICATION_CHANGE_RECOVERY_EMAIL = 137;
    const ACTION_USER_TWO_STEP_VERIFICATION_REQUEST_RECOVERY_TOKEN = 138;
    const ACTION_USER_TWO_STEP_VERIFICATION_RECOVER_PASSWORD_BY_TOKEN = 139;
    const ACTION_USER_TWO_STEP_VERIFICATION_RECOVER_PASSWORD_BY_ANSWERS = 140;
    const ACTION_USER_TWO_STEP_VERIFICATION_CHANGE_RECOVERY_QUESTION = 141;
    const ACTION_USER_TWO_STEP_VERIFICATION_CHANGE_HINT = 142;
    const ACTION_USER_TWO_STEP_VERIFICATION_RESEND_VERIFY_EMAIL = 146;
    const ACTION_USER_PRIVACY_GET_RULE = 143;
    const ACTION_USER_PRIVACY_SET_RULE = 144;
    const ACTION_USER_VERIFY_NEW_DEVICE = 145;
    const ACTION_USER_PROFILE_SET_BIO = 147;
    const ACTION_USER_PROFILE_GET_BIO = 148;
    const ACTION_USER_REPORT = 149;
    const ACTION_CHAT_GET_ROOM = 200;
    const ACTION_CHAT_SEND_MESSAGE = 201;
    const ACTION_CHAT_UPDATE_STATUS = 202;
    const ACTION_CHAT_EDIT_MESSAGE = 203;
    const ACTION_CHAT_DELETE_MESSAGE = 204;
    const ACTION_CHAT_CLEAR_MESSAGE = 205;
    const ACTION_CHAT_DELETE = 206;
    const ACTION_CHAT_UPDATE_DRAFT = 207;
    const ACTION_CHAT_GET_DRAFT = 208;
    const ACTION_CHAT_CONVERT_TO_GROUP = 209;
    const ACTION_CHAT_SET_ACTION = 210;
    const ACTION_GROUP_CREATE = 300;
    const ACTION_GROUP_ADD_MEMBER = 301;
    const ACTION_GROUP_ADD_ADMIN = 302;
    const ACTION_GROUP_ADD_MODERATOR = 303;
    const ACTION_GROUP_CLEAR_MESSAGE = 304;
    const ACTION_GROUP_EDIT = 305;
    const ACTION_GROUP_KICK_ADMIN = 306;
    const ACTION_GROUP_KICK_MEMBER = 307;
    const ACTION_GROUP_KICK_MODERATOR = 308;
    const ACTION_GROUP_LEFT = 309;
    const ACTION_GROUP_SEND_MESSAGE = 310;
    const ACTION_GROUP_UPDATE_STATUS = 311;
    const ACTION_GROUP_AVATAR_ADD = 312;
    const ACTION_GROUP_AVATAR_DELETE = 313;
    const ACTION_GROUP_AVATAR_GET_LIST = 314;
    const ACTION_GROUP_UPDATE_DRAFT = 315;
    const ACTION_GROUP_GET_DRAFT = 316;
    const ACTION_GROUP_GET_MEMBER_LIST = 317;
    const ACTION_GROUP_DELETE = 318;
    const ACTION_GROUP_SET_ACTION = 319;
    const ACTION_GROUP_DELETE_MESSAGE = 320;
    const ACTION_GROUP_CHECK_USERNAME = 321;
    const ACTION_GROUP_UPDATE_USERNAME = 322;
    const ACTION_GROUP_REMOVE_USERNAME = 323;
    const ACTION_GROUP_REVOKE_LINK = 324;
    const ACTION_GROUP_EDIT_MESSAGE = 325;
    const ACTION_GROUP_PIN_MESSAGE = 326;
    const ACTION_CHANNEL_CREATE = 400;
    const ACTION_CHANNEL_ADD_MEMBER = 401;
    const ACTION_CHANNEL_ADD_ADMIN = 402;
    const ACTION_CHANNEL_ADD_MODERATOR = 403;
    const ACTION_CHANNEL_DELETE = 404;
    const ACTION_CHANNEL_EDIT = 405;
    const ACTION_CHANNEL_KICK_ADMIN = 406;
    const ACTION_CHANNEL_KICK_MEMBER = 407;
    const ACTION_CHANNEL_KICK_MODERATOR = 408;
    const ACTION_CHANNEL_LEFT = 409;
    const ACTION_CHANNEL_SEND_MESSAGE = 410;
    const ACTION_CHANNEL_DELETE_MESSAGE = 411;
    const ACTION_CHANNEL_AVATAR_ADD = 412;
    const ACTION_CHANNEL_AVATAR_DELETE = 413;
    const ACTION_CHANNEL_AVATAR_GET_LIST = 414;
    const ACTION_CHANNEL_UPDATE_DRAFT = 415;
    const ACTION_CHANNEL_GET_DRAFT = 416;
    const ACTION_CHANNEL_GET_MEMBER_LIST = 417;
    const ACTION_CHANNEL_CHECK_USERNAME = 418;
    const ACTION_CHANNEL_UPDATE_USERNAME = 419;
    const ACTION_CHANNEL_REMOVE_USERNAME = 420;
    const ACTION_CHANNEL_REVOKE_LINK = 421;
    const ACTION_CHANNEL_UPDATE_SIGNATURE = 422;
    const ACTION_CHANNEL_GET_MESSAGES_STATS = 423;
    const ACTION_CHANNEL_ADD_MESSAGE_REACTION = 424;
    const ACTION_CHANNEL_EDIT_MESSAGE = 425;
    const ACTION_CHANNEL_UPDATE_REACTION_STATUS = 426;
    const ACTION_CHANNEL_PIN_MESSAGE = 427;
    const ACTION_INFO_LOCATION = 500;
    const ACTION_INFO_COUNTRY = 501;
    const ACTION_INFO_TIME = 502;
    const ACTION_INFO_PAGE = 503;
    const ACTION_INFO_WALLPAPER = 504;
    const ACTION_CLIENT_CONDITION = 600;
    const ACTION_CLIENT_GET_ROOM_LIST = 601;
    const ACTION_CLIENT_GET_ROOM = 602;
    const ACTION_CLIENT_GET_ROOM_HISTORY = 603;
    const ACTION_CLIENT_GET_ROOM_MESSAGE = 604;
    const ACTION_CLIENT_SEARCH_ROOM_HISTORY = 605;
    const ACTION_CLIENT_RESOLVE_USERNAME = 606;
    const ACTION_CLIENT_CHECK_INVITE_LINK = 607;
    const ACTION_CLIENT_JOIN_BY_INVITE_LINK = 608;
    const ACTION_CLIENT_JOIN_BY_USERNAME = 609;
    const ACTION_CLIENT_SUBSCRIBE_TO_ROOM = 610;
    const ACTION_CLIENT_UNSUBSCRIBE_FROM_ROOM = 611;
    const ACTION_CLIENT_SEARCH_USERNAME = 612;
    const ACTION_CLIENT_COUNT_ROOM_HISTORY = 613;
    const ACTION_CLIENT_MUTE_ROOM = 614;
    const ACTION_CLIENT_PIN_ROOM = 615;
    const ACTION_CLIENT_ROOM_REPORT = 616;
    const ACTION_CLIENT_REGISTER_DEVICE = 617;
    const ACTION_FILE_UPLOAD_OPTION = 700;
    const ACTION_FILE_UPLOAD_INIT = 701;
    const ACTION_FILE_UPLOAD = 702;
    const ACTION_FILE_UPLOAD_STATUS = 703;
    const ACTION_FILE_INFO = 704;
    const ACTION_FILE_DOWNLOAD = 705;
    const ACTION_QR_CODE_JOIN = 800;
    const ACTION_QR_CODE_RESOLVE = 801;
    const ACTION_QR_CODE_NEW_DEVICE = 802;
    const ACTION_QR_CODE_ADD_CONTACT = 803;
    const ACTION_QR_CODE_ADD_ME = 804;
    const ACTION_SIGNALING_GET_CONFIGURATION = 900;
    const ACTION_SIGNALING_OFFER = 901;
    const ACTION_SIGNALING_RINGING = 902;
    const ACTION_SIGNALING_ACCEPT = 903;
    const ACTION_SIGNALING_CANDIDATE = 904;
    const ACTION_SIGNALING_LEAVE = 905;
    const ACTION_SIGNALING_SESSION_HOLD = 906;
    const ACTION_SIGNALING_GET_LOG = 907;
    const ACTION_SIGNALING_CLEAR_LOG = 908;
    const ACTION_SIGNALING_RATE = 909;
    const ACTION_GEO_GET_REGISTER_STATUS = 1000;
    const ACTION_GEO_REGISTER = 1001;
    const ACTION_GEO_UPDATE_POSITION = 1002;
    const ACTION_GEO_GET_COMMENT = 1003;
    const ACTION_GEO_UPDATE_COMMENT = 1004;
    const ACTION_GEO_GET_NEARBY_DISTANCE = 1005;
    const ACTION_GEO_GET_NEARBY_COORDINATE = 1006;
    const ACTION_GEO_GET_CONFIGURATION = 1007;


    /**
     * @var array
     */
    const RESPONSE_ACTION_MAP = [
        //System
        0 => 'Error',
        30001 => 'Connection.Securing',
        30002 => 'Connection.SymmetricKey',
        30003 => 'Heartbeat',

        //User
        30100 => 'User.Register',
        30101 => 'User.Verify',
        30102 => 'User.Login',
        30103 => 'User.Profile.SetEmail',
        30104 => 'User.Profile.SetGender',
        30105 => 'User.Profile.SetNickname',
        30106 => 'User.Contacts.Import',
        30107 => 'User.Contacts.GetList',
        30108 => 'User.Contacts.Delete',
        30109 => 'User.Contacts.Edit',
        30110 => 'User.Profile.GetEmail',
        30111 => 'User.Profile.GetGender',
        30112 => 'User.Profile.GetNickname',
        30114 => 'User.Avatar.Add',
        30115 => 'User.Avatar.Delete',
        30116 => 'User.Avatar.GetList',
        30117 => 'User.Info',
        30118 => 'User.GetDeleteToken',
        30119 => 'User.Delete',
        30120 => 'User.Profile.SetSelfRemove',
        30121 => 'User.Profile.GetSelfRemove',
        30122 => 'User.Profile.CheckUsername',
        30123 => 'User.Profile.UpdateUsername',
        30124 => 'User.UpdateStatus',
        30125 => 'User.Session.GetActiveList',
        30126 => 'User.Session.Terminate',
        30127 => 'User.Session.Logout',
        30128 => 'User.Contacts.Block',
        30129 => 'User.Contacts.Unblock',
        30130 => 'User.Contacts.GetBlockedList',
        30131 => 'User.TwoStepVerification.GetPasswordDetail',
        30132 => 'User.TwoStepVerification.VerifyPassword',
        30133 => 'User.TwoStepVerification.SetPassword',
        30134 => 'User.TwoStepVerification.UnsetPassword',
        30135 => 'User.TwoStepVerification.CheckPassword',
        30136 => 'User.TwoStepVerification.VerifyRecoveryEmail',
        30137 => 'User.TwoStepVerification.ChangeRecoveryEmail',
        30138 => 'User.TwoStepVerification.RequestRecoveryToken',
        30139 => 'User.TwoStepVerification.RecoverPasswordByToken',
        30140 => 'User.TwoStepVerification.RecoverPasswordByAnswers',
        30141 => 'User.TwoStepVerification.ChangeRecoveryQuestion',
        30142 => 'User.TwoStepVerification.ChangeHint',
        30146 => 'User.TwoStepVerification.ResendVerifyEmail',
        30143 => 'User.Privacy.GetRule',
        30144 => 'User.Privacy.SetRule',
        30145 => 'User.VerifyNewDevice',
        30147 => 'User.Profile.SetBio',
        30148 => 'User.Profile.GetBio',
        30149 => 'User.Report',

        //Chat
        30200 => 'Chat.GetRoom',
        30201 => 'Chat.SendMessage',
        30202 => 'Chat.UpdateStatus',
        30203 => 'Chat.EditMessage',
        30204 => 'Chat.DeleteMessage',
        30205 => 'Chat.ClearMessage',
        30206 => 'Chat.Delete',
        30207 => 'Chat.UpdateDraft',
        30208 => 'Chat.GetDraft',
        30209 => 'Chat.ConvertToGroup',
        30210 => 'Chat.SetAction',

        //Group
        30300 => 'Group.Create',
        30301 => 'Group.AddMember',
        30302 => 'Group.AddAdmin',
        30303 => 'Group.AddModerator',
        30304 => 'Group.ClearMessage',
        30305 => 'Group.Edit',
        30306 => 'Group.KickAdmin',
        30307 => 'Group.KickMember',
        30308 => 'Group.KickModerator',
        30309 => 'Group.Left',
        30310 => 'Group.SendMessage',
        30311 => 'Group.UpdateStatus',
        30312 => 'Group.Avatar.Add',
        30313 => 'Group.Avatar.Delete',
        30314 => 'Group.Avatar.GetList',
        30315 => 'Group.UpdateDraft',
        30316 => 'Group.GetDraft',
        30317 => 'Group.GetMemberList',
        30318 => 'Group.Delete',
        30319 => 'Group.SetAction',
        30320 => 'Group.DeleteMessage',
        30321 => 'Group.CheckUsername',
        30322 => 'Group.UpdateUsername',
        30323 => 'Group.RemoveUsername',
        30324 => 'Group.RevokeLink',
        30325 => 'Group.EditMessage',
        30326 => 'Group.PinMessage',

        //Channel
        30400 => 'Channel.Create',
        30401 => 'Channel.AddMember',
        30402 => 'Channel.AddAdmin',
        30403 => 'Channel.AddModerator',
        30404 => 'Channel.Delete',
        30405 => 'Channel.Edit',
        30406 => 'Channel.KickAdmin',
        30407 => 'Channel.KickMember',
        30408 => 'Channel.KickModerator',
        30409 => 'Channel.Left',
        30410 => 'Channel.SendMessage',
        30411 => 'Channel.DeleteMessage',
        30412 => 'Channel.Avatar.Add',
        30413 => 'Channel.Avatar.Delete',
        30414 => 'Channel.Avatar.GetList',
        30415 => 'Channel.UpdateDraft',
        30416 => 'Channel.GetDraft',
        30417 => 'Channel.GetMemberList',
        30418 => 'Channel.CheckUsername',
        30419 => 'Channel.UpdateUsername',
        30420 => 'Channel.RemoveUsername',
        30421 => 'Channel.RevokeLink',
        30422 => 'Channel.UpdateSignature',
        30423 => 'Channel.GetMessagesStats',
        30424 => 'Channel.AddMessageReaction',
        30425 => 'Channel.EditMessage',
        30426 => 'Channel.UpdateReactionStatus',
        30427 => 'Channel.PinMessage',

        //Info
        30500 => 'Info.Location',
        30501 => 'Info.Country',
        30502 => 'Info.Time',
        30503 => 'Info.Page',
        30504 => 'Info.Wallpaper',

        //Client
        30600 => 'Client.Condition',
        30601 => 'Client.GetRoomList',
        30602 => 'Client.GetRoom',
        30603 => 'Client.GetRoomHistory',
        30604 => 'Client.GetRoomMessage',
        30605 => 'Client.SearchRoomHistory',
        30606 => 'Client.ResolveUsername',
        30607 => 'Client.CheckInviteLink',
        30608 => 'Client.JoinByInviteLink',
        30609 => 'Client.JoinByUsername',
        30610 => 'Client.SubscribeToRoom',
        30611 => 'Client.UnsubscribeFromRoom',
        30612 => 'Client.SearchUsername',
        30613 => 'Client.CountRoomHistory',
        30614 => 'Client.MuteRoom',
        30615 => 'Client.PinRoom',
        30616 => 'Client.RoomReport',
        30617 => 'Client.RegisterDevice',

        //File
        30700 => 'File.Upload.Option',
        30701 => 'File.Upload.Init',
        30702 => 'File.Upload',
        30703 => 'File.Upload.Status',
        30704 => 'File.Info',
        30705 => 'File.Download',

        //QrCode
        30800 => 'QrCode.Join',
        30801 => 'QrCode.Resolve',
        30802 => 'QrCode.NewDevice',
        30803 => 'QrCode.AddContact',
        30804 => 'QrCode.AddMe',

        //Signaling
        30900 => 'Signaling.GetConfiguration',
        30901 => 'Signaling.Offer',
        30902 => 'Signaling.Ringing',
        30903 => 'Signaling.Accept',
        30904 => 'Signaling.Candidate',
        30905 => 'Signaling.Leave',
        30906 => 'Signaling.SessionHold',
        30907 => 'Signaling.GetLog',
        30908 => 'Signaling.ClearLog',
        30909 => 'Signaling.Rate',

        //Geo
        31000 => 'Geo.GetRegisterStatus',
        31001 => 'Geo.Register',
        31002 => 'Geo.UpdatePosition',
        31003 => 'Geo.GetComment',
        31004 => 'Geo.UpdateComment',
        31005 => 'Geo.GetNearbyDistance',
        31006 => 'Geo.GetNearbyCoordinate',
        31007 => 'Geo.GetConfiguration',

        //Push
        60000 => 'Push.LoginToken',
        60001 => 'Push.TwoStepVerification',
        60002 => 'Push.UserInfoExpired',
        60003 => 'Push.RateSignaling',

    ];

    /**
     * @var LoopInterface
     */
    private static $_loop;
    /**
     * @var Connector
     */
    private static $_connector;

    /**
     * @var Api
     */
    private static $_instance;

    /**
     * @var WebSocket
     */
    private $_client;

    /**
     * @var bool
     */
    private $_isSecure = false;

    /**
     * @var Promise
     */
    private $_securePromise;

    /**
     * @var string|null
     */
    private $_symmetricKey;

    /**
     * @var string|null
     */
    private $_symmetricMethod;

    /**
     * @var int|null
     */
    private $_symmetricIvSize;

    /**
     * @var Logger
     */
    private $_logger;

    private $_running = [];

    /**
     * Initialize
     * @param LoopInterface $loop
     * @param Connector $connector
     * @throws Exception
     */
    public static function init(LoopInterface $loop, Connector $connector)
    {
        if (self::$_loop)
            throw new Exception('Initialized before');

        self::$_loop = $loop;
        self::$_connector = $connector;
    }

    /**
     * gets the instance via lazy initialization (created on first usage)
     */
    public static function getInstance()
    {
        if (!self::$_loop)
            throw new Exception('Not initialized');

        if (null === static::$_instance) {
            static::$_instance = new static();
        }
        return static::$_instance;
    }

    /**
     * is not allowed to call from outside to prevent from creating multiple instances,
     * to use the api, you have to obtain the instance from Api::getInstance() instead
     */
    private function __construct()
    {
        $this->_securePromise = new Promise();

        $logger = new Logger('iGap');
        $logger->pushHandler(new StreamHandler('php://stdout', Logger::DEBUG));
        $this->setLogger($logger);

        $connector = new \Ratchet\Client\Connector(self::$_loop, self::$_connector);

        $connector('wss://secure.igap.net/hybrid/')->done(function (WebSocket $client) {
            $this->_client = $client;
            $this->_client->on('message', function ($data) {

                if ($this->_isSecure) {
                    $data = $this->_decrypt($data);
                }

                $unpacked = @unpack('vactionId/a*payload', $data);
                if ($unpacked === false)
                    throw new Exception('Cannot unpack data');

                if (array_key_exists($unpacked['actionId'], static::RESPONSE_ACTION_MAP)) {
                    $this->_logger->debug('Received ' . static::RESPONSE_ACTION_MAP[$unpacked['actionId']]);
                    $protobufMessageClass = 'Proto\\' . str_replace('.', '', static::RESPONSE_ACTION_MAP[$unpacked['actionId']]) . 'Response';
                    if (!class_exists($protobufMessageClass))
                        throw new Exception("Class '$protobufMessageClass' is not found");

                    try {
                        /* @var Message $protobufMessage */
                        $protobufMessage = new $protobufMessageClass;
                        $protobufMessage->mergeFromString($unpacked['payload']);

                        /** @var Response $res */
                        /** @noinspection PhpUndefinedMethodInspection */
                        $res = $protobufMessage->getResponse();
                        try {
                            if ($res->getId()) {
                                $requestPromise = $this->_running[$res->getId()];
                                if ($requestPromise) {
                                    try {
                                        if ($unpacked['actionId'] === 0)
                                            $requestPromise->reject($protobufMessage);
                                        else
                                            $requestPromise->resolve($protobufMessage);
                                    } finally {
                                        unset($this->_running[$res->getId()]);
                                        \GuzzleHttp\Promise\queue()->run();
                                    }
                                }
                            }
                        } finally {
                            $handlerClass = 'iGap\\handlers\\' . str_replace('.', '\\', static::RESPONSE_ACTION_MAP[$unpacked['actionId']]);
                            if (class_exists($handlerClass)) {
                                new $handlerClass($protobufMessage, isset($requestPromise) ? $requestPromise : null);
                            } else
                                $this->_logger->warning("Handler class $handlerClass is not found");
                        }
                    } catch (Exception $e) {
                        $this->_logger->error($e->getMessage(), [$e]);
                    }
                } else {
                    $this->_logger->warning("Unknown action id ${$unpacked['actionId']}");
                }
            });
            $this->_client->on('close', function ($code = null, $reason = null) {
                throw new Exception("Connection closed ({$code} - {$reason})");
            });
        });
    }

    /**
     * prevent the instance from being cloned (which would create a second instance of it)
     */
    private function __clone()
    {
    }

    /**
     * prevent from being unserialized (which would create a second instance of it)
     */
    private function __wakeup()
    {
    }

    /**
     * @return LoopInterface
     */
    public function getLoop()
    {
        return self::$_loop;
    }

    public function setAsSecure()
    {
        if (!$this->_isSecure) {
            $this->_isSecure = true;
            $this->_securePromise->resolve(true);
            \GuzzleHttp\Promise\queue()->run();
        }
    }

    /**
     * @param null|string $symmetricKey
     */
    public function setSymmetricKey($symmetricKey)
    {
        $this->_symmetricKey = $symmetricKey;
    }

    /**
     * @param null|string $symmetricMethod
     */
    public function setSymmetricMethod($symmetricMethod)
    {
        $this->_symmetricMethod = $symmetricMethod;
    }

    /**
     * @param int|null $symmetricIvSize
     */
    public function setSymmetricIvSize($symmetricIvSize)
    {
        $this->_symmetricIvSize = $symmetricIvSize;
    }

    /**
     * @return Logger
     */
    public function getLogger()
    {
        return $this->_logger;
    }

    /**
     * @param Logger $logger
     */
    public function setLogger($logger)
    {
        $this->_logger = $logger;
    }

    public function invoke($actionId, Message $payload)
    {
        if (in_array($actionId, [
            self::ACTION_CONNECTION_SYMMETRIC_KEY,
            self::ACTION_HEARTBEAT,
        ])) {
            return $this->_invoke($actionId, $payload);
        } else {
            return $this->_securePromise->then(function () use ($actionId, $payload) {
                return $this->_invoke($actionId, $payload);
            });
        }
    }

    private function _invoke($actionId, Message $payload)
    {
        $this->_logger->debug("Invoke action Id #$actionId");
        if (30000 < $actionId)
            throw new Exception("Invalid actionId #$actionId");

        $request = new Request();
        $request->setId($this->generateRequestId());

        /** @noinspection PhpUndefinedMethodInspection */
        $payload->setRequest($request);

        $promise = new Promise();
        try {
            $data = pack('va*', $actionId, $payload->serializeToString());

            if ($this->_isSecure) {
                $data = $this->_encrypt($data);
            }
            $this->_client->send($data);

            $this->_running[$request->getId()] = $promise;
        } catch (Exception $e) {
            $promise->reject($e);
        }
        return $promise;
    }

    private function _encrypt($data)
    {
        if (!$this->_isSecure)
            throw new Exception('Connection is not secure');

        $iv = openssl_random_pseudo_bytes($this->_symmetricIvSize, $cryptoStrong);
        if (!$cryptoStrong)
            throw new Exception;

        $method = $this->_symmetricMethod;
        $encryptedData = openssl_encrypt($data, $method, $this->_symmetricKey, OPENSSL_RAW_DATA, $iv);
        if ($encryptedData === false)
            throw new Exception('Cannot encrypt data');

        return $iv . $encryptedData;
    }

    private function _decrypt($data)
    {
        if (!$this->_isSecure)
            throw new Exception('Connection is not secure');

        if (strlen($data) < $this->_symmetricIvSize + 1)
            throw new Exception('Invalid data');

        $decryptedData = openssl_decrypt(
            substr($data, $this->_symmetricIvSize), $this->_symmetricMethod, $this->_symmetricKey,
            OPENSSL_RAW_DATA,
            substr($data, 0, $this->_symmetricIvSize)
        );
        if ($decryptedData === false)
            throw new Exception('Cannot decrypt data');

        return $decryptedData;
    }

    protected function generateRequestId()
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $result = '';
        for ($i = 0; $i < 10; $i++) {
            $result .= $characters[mt_rand(0, $charactersLength - 1)];
        }
        return $result;
    }
}