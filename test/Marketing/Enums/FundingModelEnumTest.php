<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Marketing\Enums;
use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Marketing\Enums\FundingModelEnum;

class FundingModelEnumTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new FundingModelEnum();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Marketing\Enums\FundingModelEnum', $this->obj);
    }
}
