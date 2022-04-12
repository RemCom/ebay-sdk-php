<?php
namespace DTS\eBaySDK\Test\Mocks;
use PHPUnit\Framework\TestCase;
use DTS\eBaySDK\StatusCodeTrait;

class StatusCode
{
    use StatusCodeTrait;

    public function __construct($statusCode)
    {
        $this->statusCode = $statusCode;
    }
}
