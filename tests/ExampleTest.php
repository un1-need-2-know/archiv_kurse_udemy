<?php

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase 
{
    public function testAddingOnePlusTwoResultIsThree()
    {
        $this->assertEquals(3, 1+2);
    }
}