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
use DTS\eBaySDK\Fulfillment\Enums\CancelStateEnum;

class CancelStateEnumTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new CancelStateEnum();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Fulfillment\Enums\CancelStateEnum', $this->obj);
    }
}
