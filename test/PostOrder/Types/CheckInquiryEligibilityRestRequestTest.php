<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\PostOrder\Types;
use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\PostOrder\Types\CheckInquiryEligibilityRestRequest;

class CheckInquiryEligibilityRestRequestTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new CheckInquiryEligibilityRestRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\CheckInquiryEligibilityRestRequest', $this->obj);
    }

    public function testExtendsCheckInquiryEligibilityRequest()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\CheckInquiryEligibilityRequest', $this->obj);
    }
}
