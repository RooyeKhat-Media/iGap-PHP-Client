#!/usr/bin/php
<?php

use GuzzleHttp\Promise\RejectedPromise;
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

$userRegister = new \Proto\UserRegister();
$userRegister->setCountryCode(getInput('Enter your country ISO code'));
$userRegister->setPhoneNumber(getInput('Enter your phone number'));

Api::getInstance()->invoke(
    Api::ACTION_USER_REGISTER,
    $userRegister
)->then(function (\Proto\UserRegisterResponse $userRegisterResponse) {
    $userVerify = new \Proto\UserVerify();
    $userVerify->setCode(getInput('Enter verification code'));
    $userVerify->setUsername($userRegisterResponse->getUsername());

    return Api::getInstance()->invoke(
        Api::ACTION_USER_VERIFY,
        $userVerify
    );
})->then(function (\Proto\UserVerifyResponse $userVerifyResponse) {
    if ($userVerifyResponse->getNewUser()) {
        $login = new \Proto\UserLogin();
        $login->setToken($userVerifyResponse->getToken());
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

        return Api::getInstance()->invoke(
            Api::ACTION_USER_LOGIN,
            $login
        )->then(function () {
            $nickname = new \Proto\UserProfileSetNickname();
            $nickname->setNickname(getInput('Enter nickname'));
            return Api::getInstance()->invoke(
                Api::ACTION_USER_PROFILE_SET_NICKNAME,
                $nickname
            );
        })->then(function () use ($userVerifyResponse) {
            return $userVerifyResponse->getToken();
        });
    }
    return $userVerifyResponse->getToken();
}, function (\Proto\ErrorResponse $error) {
    if ($error->getMajorCode() === 184) {
        $password = new \Proto\UserTwoStepVerificationVerifyPassword();
        $password->setPassword(getInput('Enter your password'));

        return Api::getInstance()->invoke(
            Api::ACTION_USER_TWO_STEP_VERIFICATION_VERIFY_PASSWORD,
            $password
        )->then(function (\Proto\UserTwoStepVerificationVerifyPasswordResponse $response) {
            return $response->getToken();
        });
    }

    return new RejectedPromise($error);
})->then(function ($token) {
    if (file_put_contents(__DIR__ . '/login.token', $token) === false) {
        throw new Exception('Cannot save data');
    }
    echo "Successfully logged in\n";
}, function (\Proto\ErrorResponse $error) {
    echo 'Error #' . $error->getMajorCode() . '.' . $error->getMinorCode() . "\n";
});

$loop->run();