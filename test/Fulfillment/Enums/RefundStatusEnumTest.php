<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Fulfillment\Enums;
use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Fulfillment\Enums\RefundStatusEnum;

class RefundStatusEnumTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new RefundStatusEnum();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Fulfillment\Enums\RefundStatusEnum', $this->obj);
    }
}
