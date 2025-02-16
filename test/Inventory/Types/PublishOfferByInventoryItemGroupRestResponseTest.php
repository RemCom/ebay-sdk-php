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
use DTS\eBaySDK\Inventory\Types\PublishOfferByInventoryItemGroupRestResponse;

class PublishOfferByInventoryItemGroupRestResponseTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new PublishOfferByInventoryItemGroupRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Inventory\Types\PublishOfferByInventoryItemGroupRestResponse', $this->obj);
    }

    public function testExtendsPublishResponse()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Inventory\Types\PublishResponse', $this->obj);
    }
}
