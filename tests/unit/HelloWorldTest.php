<?php

use PHPUnit\Framework\TestCase;

class HelloWorldTest extends TestCase
{
    public function testCheckFirstTestOnDrone()
    {
        $out = 'Hello World';

        $this->assertEquals('Hello World', $out);
    }
}