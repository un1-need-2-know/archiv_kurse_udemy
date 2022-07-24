<?php

use PHPUnit\Framework\TestCase;

class User2Test extends TestCase
{
    public function tearDown(): void
    {
        Mockery::close();
    }

    /**
     * @runInSeparateProcess
     * @preserveGlobalState disabled
     */
    public function testNotifyReturnsTrue()
    {
        $user = new User2('penis@pump.it.up');

        $mock = Mockery::mock('alias:Mailer');

        $mock->shouldReceive('send')
            ->once()
            ->with($user->email, 'Boobs')
            ->andReturn(true);

        $user->setMailer($mock);

        $this->assertTrue($user->notify('Boobs'));
    }
}
