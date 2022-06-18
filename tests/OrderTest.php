<?php

use PHPUnit\Framework\TestCase;

class OrderTest extends TestCase
{
    public function tearDown(): void
    {
        Mockery::close();
    }

    public function testOrderIsProcessedUsingAMock()
    {

        $order = new Order(5, 0.15);

        $this->assertEquals(0.75, $order->amount);

        $gateway_mock = Mockery::mock('PaymentGateway');

        $gateway_mock->shouldReceive('charge')->once()->with(0.75);

        $order->process($gateway_mock);
    }

}
