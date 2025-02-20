<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Merchandising\Types;
use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Merchandising\Types\BaseMerchandisingServiceResponse;

class BaseMerchandisingServiceResponseTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new BaseMerchandisingServiceResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Merchandising\Types\BaseMerchandisingServiceResponse', $this->obj);
    }

    public function testExtendsBaseServiceResponse()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Merchandising\Types\BaseServiceResponse', $this->obj);
    }
}
