<?php

use PHPUnit\Framework\TestCase;

class MockTest extends TestCase
{
    public function testMock()
    {
        $mailer = new Mailer();

        $this->assertTrue($mailer->sendMessage('penis@pump.it.up','Hello Big Boy'));
    }
}
