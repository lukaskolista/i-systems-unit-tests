<?php

namespace MyShop\Tests;

use MyShop\SimpleClass;

class SimpleClassTest extends \PHPUnit_Framework_TestCase
{
    public function testGetTrue()
    {
        $simpleClass = new SimpleClass();

        $true = $simpleClass->getTrue();

        $this->assertTrue($true);
    }
}