<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\BulkDataExchange\Enums;
use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\BulkDataExchange\Enums\IncludeListingType;

class IncludeListingTypeTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new IncludeListingType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\BulkDataExchange\Enums\IncludeListingType', $this->obj);
    }
}
