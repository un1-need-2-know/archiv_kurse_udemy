<?php

use PHPUnit\Framework\TestCase;

class MockTest extends TestCase
{
    public function testMock()
    {
        $mock = $this->createMock(Mailer::class);

        $mock->method('sendMessage')->willReturn(true);

        $this->assertTrue($mock->sendMessage('penis@pump.it.up','Hello Big Boy'));
    }
}
