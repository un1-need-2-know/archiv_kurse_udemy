<?php

use PHPUnit\Framework\TestCase;

class MailerTest extends TestCase
{
    public function testSendMessageReturnsTrue()
    {
        $this->assertTrue(Mailer::send('penis@pump.it.up', 'Boobs'));
    }

    public function testInvalidArgumentExceptionIfMailIsEmpty()
    {
        $this->expectException(InvalidArgumentException::class);

        Mailer::send('', 'Boobs');
    }
}
