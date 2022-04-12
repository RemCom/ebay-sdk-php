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
use DTS\eBaySDK\Trading\Types\BestOfferCounterEnabledDefinitionType;

class BestOfferCounterEnabledDefinitionTypeTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new BestOfferCounterEnabledDefinitionType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\BestOfferCounterEnabledDefinitionType', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
