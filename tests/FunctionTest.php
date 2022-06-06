<?php

use PHPUnit\Framework\TestCase;

class FunctionTest extends TestCase
{
    public function testAdditionReturnsCorrectResult()
    {
        require_once 'functions.php';

        $this->assertEquals(3, addition(1, 2));
        $this->assertEquals(5, addition(3, 2));
    }

    public function testAdditionDoesNotReturnsCorrectResult()
    {
        require_once 'functions.php';

        $this->assertNotEquals(4, addition(1, 2));
    }
}
