<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\ResolutionCaseManagement\Types;
use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\ResolutionCaseManagement\Types\InitialBuyerExpectationDetailType;

class InitialBuyerExpectationDetailTypeTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new InitialBuyerExpectationDetailType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\ResolutionCaseManagement\Types\InitialBuyerExpectationDetailType', $this->obj);
    }

    public function testExtendsEnumerationDetailType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\ResolutionCaseManagement\Types\EnumerationDetailType', $this->obj);
    }
}
