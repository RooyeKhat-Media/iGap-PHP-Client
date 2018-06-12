<?php

namespace iGap\handlers\Connection;

use Exception;
use iGap\Api;
use iGap\handlers\Handler;
use Proto\ConnectionSecuringResponse;
use Proto\ConnectionSymmetricKey;
use Proto\Heartbeat;

class Securing implements Handler
{
    const EMBEDDED_PEM = <<<'PEM'
-----BEGIN PUBLIC KEY-----
MIIBIjANBgk qhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAo+inlAfd8Qior8IMKaJ+
BREJcEc9J9RhHgh6g/LvHKsnMaiEbAL70jQBQTLpCRu5Cnpj20+isOi++Wtf/pIP
FdJbD/1H+5jS+ja0RA6unp93DnBuYZ2JjV60vF3Ynj6F4Vr1ts5Xg5dJlEaOcOO2
YzOU97ZGP0ozrXIT5S+Y0BC4M9ieQmlGREzt3UZlTBbyUYPS4mMFh88YcT3QTiTA
k897qlJLxkYxVyAgwAD/0ihmWEkBQe9IxwVT/x5/QbixGSl4Zvd+5d+9sTZcSZQS
iJInT4E6DcmgAVYu5jFMWJDTEuurOQZ1W4nbmGyoY1bZXaFoiMPfzy72VIddkoHg
mwIDAQAB
-----END PUBLIC KEY-----
PEM;

    private $_heartbeatTimer;

    /**
     * Securing constructor.
     * @param ConnectionSecuringResponse $response
     * @param null $request
     * @throws Exception
     */
    public function __construct($response, $request)
    {
        $symmetricKey = openssl_random_pseudo_bytes($response->getSymmetricKeyLength(), $cryptoStrong);
        if (!$cryptoStrong)
            throw new Exception;

        Api::getInstance()->setSymmetricKey($symmetricKey);

        if ($this->_heartbeatTimer !== null) {
            Api::getInstance()->getLoop()->cancelTimer($this->_heartbeatTimer);
            $this->_heartbeatTimer = null;
        }

        $this->_heartbeatTimer = Api::getInstance()->getLoop()->addPeriodicTimer(
            $response->getHeartbeatInterval(),
            function () {
                Api::getInstance()->invoke(
                    Api::ACTION_HEARTBEAT,
                    new Heartbeat()
                );
            }
        );

        $key = $this->_public_encrypt($symmetricKey, $response->getPublicKey());

        $secureKey = '';
        while (strlen($key)) {
            $secureKey .= $this->_public_encrypt(
                substr($key, 0, $response->getSecondaryChunkSize()),
                self::EMBEDDED_PEM
            );
            $key = substr($key, $response->getSecondaryChunkSize());
        }

        $connectionSymmetricKey = new ConnectionSymmetricKey();
        $connectionSymmetricKey->setSymmetricKey($secureKey);
        $connectionSymmetricKey->setVersion(2);

        Api::getInstance()->invoke(
            Api::ACTION_CONNECTION_SYMMETRIC_KEY,
            $connectionSymmetricKey
        );
    }

    /**
     * Encrypts data with public key
     * @param string $plaintext
     * @param string $publicKey
     * @return bool
     */
    private function _public_encrypt($plaintext, $publicKey)
    {
        $success = openssl_public_encrypt(
            $plaintext,
            $encryptedData,
            openssl_pkey_get_public($publicKey)
        );
        if (!$success)
            return false;

        return $encryptedData;
    }

}