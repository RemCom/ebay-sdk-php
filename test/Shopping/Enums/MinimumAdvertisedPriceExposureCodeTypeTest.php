<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Shopping\Enums;
use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Shopping\Enums\MinimumAdvertisedPriceExposureCodeType;

class MinimumAdvertisedPriceExposureCodeTypeTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new MinimumAdvertisedPriceExposureCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Shopping\Enums\MinimumAdvertisedPriceExposureCodeType', $this->obj);
    }
}
