<?php

use PHPUnit\Framework\TestCase;

class QueueTest extends TestCase
{
    public function testNewQueueIsEmpty()
    {
        $queue = new Queue();

        $this->assertEquals(0, $queue->getCount());

        return $queue;
    }

    /**
     * @depends testNewQueueIsEmpty
     */
    public function testItemIsAdded2Queue(Queue $queue)
    {
        $queue->push('penis');

        $this->assertEquals(1, $queue->getCount());

        return $queue;
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
