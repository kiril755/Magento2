<?php

namespace LaminasTest\OAuth\Signature;

use Laminas\OAuth\Signature;
use PHPUnit\Framework\TestCase;

class HMACTest extends TestCase
{
    public function testSignatureWithoutAccessSecretIsHashedWithConsumerSecret()
    {
        $params = [
            'oauth_version' => '1.0',
            'oauth_consumer_key' => 'dpf43f3p2l4k3l03',
            'oauth_signature_method' => 'HMAC-SHA1',
            'oauth_timestamp' => '1191242090',
            'oauth_nonce' => 'hsu94j3884jdopsl',
            'oauth_version' => '1.0'
        ];
        $signature = new Signature\Hmac('1234567890', null, 'SHA1');
        $this->assertEquals('XYkaERjLVjp2yP/klDCGQ+hZ2So=', $signature->sign($params));
    }

    public function testSignatureWithAccessSecretIsHashedWithConsumerAndAccessSecret()
    {
        $params = [
            'oauth_version' => '1.0',
            'oauth_consumer_key' => 'dpf43f3p2l4k3l03',
            'oauth_signature_method' => 'HMAC-SHA1',
            'oauth_timestamp' => '1191242090',
            'oauth_nonce' => 'hsu94j3884jdopsl',
            'oauth_version' => '1.0'
        ];
        $signature = new Signature\Hmac('1234567890', '0987654321', 'SHA1');
        $this->assertEquals('b0J6H0jCEo+tvzVJy2G615sM6/M=', $signature->sign($params));
    }
}
