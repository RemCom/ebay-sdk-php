<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Trading\Types;
use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Trading\Types\VerifyAddSecondChanceItemRequestType;

class VerifyAddSecondChanceItemRequestTypeTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new VerifyAddSecondChanceItemRequestType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\VerifyAddSecondChanceItemRequestType', $this->obj);
    }

    public function testExtendsAbstractRequestType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\AbstractRequestType', $this->obj);
    }
}
