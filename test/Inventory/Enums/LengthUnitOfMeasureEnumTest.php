<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Inventory\Enums;
use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Inventory\Enums\LengthUnitOfMeasureEnum;

class LengthUnitOfMeasureEnumTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new LengthUnitOfMeasureEnum();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Inventory\Enums\LengthUnitOfMeasureEnum', $this->obj);
    }
}
