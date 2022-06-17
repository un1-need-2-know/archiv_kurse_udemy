<?php

use Mockery\Adapter\Phpunit\MockeryTestCase;

class ExampleTest extends MockeryTestCase
{
    public function testAddingOnePlusTwoResultIsThree()
    {
        $this->assertEquals(3, 1 + 2);
    }
}
