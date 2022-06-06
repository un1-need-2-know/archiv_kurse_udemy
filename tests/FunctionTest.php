<?php

use PHPUnit\Framework\TestCase;

class FunctionTest extends TestCase
{
    public function testAdditionReturnsCorrectResult()
    {
        require 'functions.php';

        $this->assertEquals(3, addition(1, 2));
    }
}
