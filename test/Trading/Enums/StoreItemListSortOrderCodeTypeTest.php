<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Trading\Enums;
use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Trading\Enums\StoreItemListSortOrderCodeType;

class StoreItemListSortOrderCodeTypeTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new StoreItemListSortOrderCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\StoreItemListSortOrderCodeType', $this->obj);
    }
}
