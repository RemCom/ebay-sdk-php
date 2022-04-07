<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Feedback\Types;
use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Feedback\Types\GetDSRSummaryRequest;

class GetDSRSummaryRequestTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new GetDSRSummaryRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Feedback\Types\GetDSRSummaryRequest', $this->obj);
    }

    public function testExtendsBaseServiceRequest()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Feedback\Types\BaseServiceRequest', $this->obj);
    }
}
