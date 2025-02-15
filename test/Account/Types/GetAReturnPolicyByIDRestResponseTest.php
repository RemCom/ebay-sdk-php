<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Account\Types;
use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Account\Types\GetAReturnPolicyByIDRestResponse;

class GetAReturnPolicyByIDRestResponseTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new GetAReturnPolicyByIDRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Account\Types\GetAReturnPolicyByIDRestResponse', $this->obj);
    }

    public function testExtendsReturnPolicy()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Account\Types\ReturnPolicy', $this->obj);
    }
}
