<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Shopping\Types;
use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Shopping\Types\GeteBayTimeResponseType;

class GeteBayTimeResponseTypeTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new GeteBayTimeResponseType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Shopping\Types\GeteBayTimeResponseType', $this->obj);
    }

    public function testExtendsAbstractResponseType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Shopping\Types\AbstractResponseType', $this->obj);
    }
}
