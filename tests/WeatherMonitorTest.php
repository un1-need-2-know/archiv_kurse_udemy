<?php

use PHPUnit\Framework\TestCase;

class WeatherMonitorTest extends TestCase
{
    public function tearDown(): void
    {
        Mockery::close();
    }

    public function testCorrectAverageIsReturnedByUnitTest()
    {
        $service = $this->createMock(TemperatureService::class);

        $map = [
            ['00:00', 0],
            ['12:00', 84]
        ];

        $service->expects($this->exactly(2))
                ->method('getTemperature')
                ->will($this->returnValueMap($map));

        $weather = new WeatherMonitor($service);

        $this->assertEquals(42, $weather->getAverageTemperature('00:00', '12:00'));        
    }

    public function testCorrectAverageIsReturnedByMockery()
    {
        $service = Mockery::mock(TemperatureService::class);

        $service->shouldReceive('getTemperature')->once()->with('00:00')->andReturn(0);
        $service->shouldReceive('getTemperature')->once()->with('12:00')->andReturn(84);

        $weather = new WeatherMonitor($service);

        $this->assertEquals(42, $weather->getAverageTemperature('00:00', '12:00'));        
    }
}
