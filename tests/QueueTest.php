<?php

use PHPUnit\Framework\TestCase;

class QueueTest extends TestCase
{
    protected $queue;

    protected function setUp(): void
    {
        $this->queue = new Queue();
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

    /**
     * @depends testItemIsAdded2Queue
     */
    public function testItemIsRemovedFromQueue(Queue $queue)
    {
        $item = $queue->pop();

        $this->assertEquals(0, $queue->getCount());
        $this->assertEquals('penis', $item);
    }
}
