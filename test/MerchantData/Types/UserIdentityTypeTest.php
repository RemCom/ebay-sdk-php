<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\MerchantData\Types;
use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\MerchantData\Types\UserIdentityType;

class UserIdentityTypeTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new UserIdentityType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Types\UserIdentityType', $this->obj);
    }

    public function testExtendsStringType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\StringType', $this->obj);
    }
}
