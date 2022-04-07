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
use DTS\eBaySDK\PostOrder\Types\GetReturnFilesRestResponse;

class GetReturnFilesRestResponseTest extends TestCase
{
    private $obj;

    protected function setUp(): void
    {
        $this->obj = new GetReturnFilesRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\GetReturnFilesRestResponse', $this->obj);
    }

    public function testExtendsGetFileResponse()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\GetFileResponse', $this->obj);
    }
}
