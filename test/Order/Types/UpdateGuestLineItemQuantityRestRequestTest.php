<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Order\Types;
use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Order\Types\UpdateGuestLineItemQuantityRestRequest;

class UpdateGuestLineItemQuantityRestRequestTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new UpdateGuestLineItemQuantityRestRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Order\Types\UpdateGuestLineItemQuantityRestRequest', $this->obj);
    }

    public function testExtendsUpdateQuantity()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Order\Types\UpdateQuantity', $this->obj);
    }
}
