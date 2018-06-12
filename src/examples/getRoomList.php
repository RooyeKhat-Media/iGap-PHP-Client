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

function getRoomList($offset, $limit)
{
    $getRoomList = new \Proto\ClientGetRoomList();

    $pagination = new \Proto\Pagination();
    $pagination->setOffset($offset);
    $pagination->setLimit($limit);
    $getRoomList->setPagination($pagination);

    return Api::getInstance()->invoke(
        Api::ACTION_CLIENT_GET_ROOM_LIST,
        $getRoomList
    );
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
    $offset = 0;
    $limit = 10;

    return getRoomList($offset, $limit)
        ->then(function (\Proto\ClientGetRoomListResponse $response) use ($offset, $limit) {
            if ($response->getRooms()->count() !== 0) {

                /** @var \Proto\Room $room */
                foreach ($response->getRooms()->getIterator() as $room) {
                    echo 'RoomId : ' . $room->getId() . "\n";
                    echo $room->serializeToJsonString() . "\n\n";
                    sleep(1);
                }

                $offset += $response->getRooms()->count();
                return getRoomList($offset, $limit);
            }
        });
})->otherwise(function (\Proto\ErrorResponse $error) {
    echo 'Error #' . $error->getMajorCode() . '.' . $error->getMinorCode() . "\n";
});

$loop->run();