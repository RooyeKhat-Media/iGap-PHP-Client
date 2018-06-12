#!/usr/bin/php
<?php

use iGap\Api;
use React\EventLoop\Factory;
use React\Socket\Connector;

require_once(__DIR__ . '/../../vendor/autoload.php');

function getInput($msg)
{
    echo "$msg : ";
    return trim(fgets(STDIN));
}

$loop = Factory::create();
$connector = new Connector($loop, [
    'dns' => '8.8.8.8',
    'timeout' => 10
]);

Api::init($loop, $connector);

$token = file_get_contents(__DIR__ . '/login.token');
if ($token === false) {
    throw new Exception('You must register to run this example');
}

$login = new \Proto\UserLogin();
$login->setToken($token);
$login->setAppName('iGap-PHP-Client');
$login->setAppId(11);
$login->setAppBuildVersion(1);
$login->setAppVersion('1.0.0');
$login->setPlatform(
    strtoupper(substr(PHP_OS, 0, 3)) === 'WIN' ? \Proto\Platform::WINDOWS : \Proto\Platform::LINUX
);
$login->setPlatformVersion('0');
$login->setDevice(\Proto\Device::PC);
$login->setDeviceName('UNKNOWN_DEVICE');
$login->setLanguage(\Proto\Language::EN_US);

Api::getInstance()->invoke(
    Api::ACTION_USER_LOGIN,
    $login
)->then(function () {
    $getRoom = new \Proto\ClientGetRoom();
    $getRoom->setRoomId(getInput('Enter roomId'));

    return Api::getInstance()->invoke(
        Api::ACTION_CLIENT_GET_ROOM,
        $getRoom
    )->then(function (\Proto\ClientGetRoomResponse $response) {
        switch ($response->getRoom()->getType()) {
            case \Proto\Room_Type::CHAT:
                $sendMessageActionId = Api::ACTION_CHAT_SEND_MESSAGE;
                $sendMessagePayload = new \Proto\ChatSendMessage();
                break;
            case \Proto\Room_Type::GROUP:
                $sendMessageActionId = Api::ACTION_GROUP_SEND_MESSAGE;
                $sendMessagePayload = new \Proto\GroupSendMessage();
                break;
            case \Proto\Room_Type::CHANNEL:
                $sendMessageActionId = Api::ACTION_CHANNEL_SEND_MESSAGE;
                $sendMessagePayload = new \Proto\ChannelSendMessage();
                break;
            default:
                throw new Exception('Unsupported room type');
        }

        $sendMessagePayload->setMessageType(\Proto\RoomMessageType::TEXT);
        $sendMessagePayload->setRoomId($response->getRoom()->getId());
        $sendMessagePayload->setMessage(getInput('Enter your message'));
        return Api::getInstance()->invoke(
            $sendMessageActionId,
            $sendMessagePayload
        );
    });

})->otherwise(function (\Proto\ErrorResponse $error) {
    echo 'Error #' . $error->getMajorCode() . '.' . $error->getMinorCode() . "\n";
});

$loop->run();