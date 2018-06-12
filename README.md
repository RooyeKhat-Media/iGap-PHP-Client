[![PRs Welcome](https://img.shields.io/badge/PRs-welcome-brightgreen.svg)](https://github.com/RooyeKhat-Media/iGap-PHP-Client/pulls)
[![GitHub top language](https://img.shields.io/github/languages/top/RooyeKhat-Media/iGap-PHP-Client.svg)](#)
[![GitHub repo size in bytes](https://img.shields.io/github/repo-size/RooyeKhat-Media/iGap-PHP-Client.svg)](#)
[![GNU LESSER GENERAL PUBLIC LICENSE](https://img.shields.io/github/license/RooyeKhat-Media/iGap-PHP-Client.svg)](LICENSE)

An official iGap PHP client

## Installation

The recommended way to install iGap-PHP-Client is through
[Composer](http://getcomposer.org).

```bash
# Install Composer
curl -sS https://getcomposer.org/installer | php
```

Next, run the Composer command to install the latest stable version of iGap-PHP-Client:

```bash
composer require rooyekhat/igap-php-client
```

After installing, you need to require Composer's autoloader:

```php
require 'vendor/autoload.php';
```

You can then later update iGap-PHP-Client using composer:

 ```bash
composer update
 ```
 
**protobuf** module is required , follow https://github.com/google/protobuf/tree/master/php

## Quickstart example
Once installed, you can use the following code to send some requests:
```php
$loop = React\EventLoop\Factory::create();
$connector = new React\Socket\Connector($loop, [
    'dns' => '8.8.8.8',
    'timeout' => 10
]);

iGap\Api::init($loop, $connector);

$userRegister = new \Proto\UserRegister();
$userRegister->setCountryCode('IR');
$userRegister->setPhoneNumber('912xxxxxxx');

iGap\Api::getInstance()->invoke(
    iGap\Api::ACTION_USER_REGISTER,
    $userRegister
);

$loop->run();
```
See also the [**examples**](src/examples).

## API documentation
iGap API manuals: https://github.com/RooyeKhat-Media/iGap-API

Protocol buffers files : https://github.com/RooyeKhat-Media/iGap-API/tree/master/app/assets/proto

## Partner
**[RooyeKhat Media](https://rooyekhat.co/en)** was founded in 2015 aiming to create communicative and informative platforms supported by Internet and network on the basis of modern technology. We focus on the fields of designing, programming, supporting communicative and media software on mobile phones and tablets.

## Licence
iGap-PHP-Client is released under the [GNU Lesser General Public License](LICENSE)

![GNU LESSER GENERAL PUBLIC LICENSE - Version 3](https://www.gnu.org/graphics/lgplv3-147x51.png)