<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Inventory\Types;
use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Inventory\Types\GetInventoryItemRestRequest;

class GetInventoryItemRestRequestTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new GetInventoryItemRestRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Inventory\Types\GetInventoryItemRestRequest', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
