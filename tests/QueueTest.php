<?php

use PHPUnit\Framework\TestCase;

class QueueTest extends TestCase
{
    protected $queue;

    protected function setUp(): void
    {
        $this->queue = new Queue();
    }

    public static function setUpBeforeClass(): void
    {
        #code ...
    }

    protected function tearDown(): void
    {
        unset($this->queue);
    }

    public static function tearDownBeforeClass(): void
    {
        #code ...        
    }

    public function testNewQueueIsEmpty()
    {
        $this->assertEquals(0, $this->queue->getCount());
    }

    public function testItemIsAdded2Queue()
    {
        $this->queue->push('penis');

        $this->assertEquals(1, $this->queue->getCount());
    }

    public function testItemIsRemovedFromQueue()
    {
        $this->queue->push('penis');
        $item = $this->queue->pop();

        $this->assertEquals(0, $this->queue->getCount());
        $this->assertEquals('penis', $item);
    }

    public function testAnItemIsRemovedFromTheStartOfQueue()
    {
        $this->queue->push('penis');
        $this->queue->push('boobs');

        $this->assertEquals('penis', $this->queue->pop());
    }
}
