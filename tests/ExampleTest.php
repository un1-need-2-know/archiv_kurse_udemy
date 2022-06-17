<?php

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function tearDown(): void
    {
        Mockery::close();
    }

    public function testAddingOnePlusTwoResultIsThree()
    {
        $this->assertEquals(3, 1 + 2);
    }
}
