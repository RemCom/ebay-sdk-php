<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Feedback\Enums;
use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\Feedback\Enums\ErrorSeverity;

class ErrorSeverityTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new ErrorSeverity();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Feedback\Enums\ErrorSeverity', $this->obj);
    }
}
