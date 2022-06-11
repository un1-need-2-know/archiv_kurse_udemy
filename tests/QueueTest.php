<?php

use PHPUnit\Framework\TestCase;

class QueueTest extends TestCase
{
    protected static $queue;

    protected function setUp(): void
    {
        static::$queue->clear();
    }

    public static function setUpBeforeClass(): void
    {
        static::$queue = new Queue();
    }

    protected function tearDown(): void
    {
        //unset($this->queue);
    }

    public static function tearDownBeforeClass(): void
    {
        static::$queue = null;
    }

    public function testNewQueueIsEmpty()
    {
        $this->assertEquals(0, static::$queue->getCount());
    }

    public function testItemIsAdded2Queue()
    {
        static::$queue->push('penis');

        $this->assertEquals(1, static::$queue->getCount());
    }

    public function testItemIsRemovedFromQueue()
    {
        static::$queue->push('penis');
        $item = static::$queue->pop();

        $this->assertEquals(0, static::$queue->getCount());
        $this->assertEquals('penis', $item);
    }

    public function testAnItemIsRemovedFromTheStartOfQueue()
    {
        static::$queue->push('penis');
        static::$queue->push('boobs');

        $this->assertEquals('penis', static::$queue->pop());
    }

    public function testMaxNumberOfItemsCanBeAdded()
    {
        for ($i = 0; $i < Queue::MAX_ITEMS; $i++) {
            static::$queue->push($i);
        }
        $this->assertEquals(Queue::MAX_ITEMS, static::$queue->getCount());

    }

    public function testMaxNumberPlusOneOfItemsCanBeAdded()
    {
        for ($i = 0; $i < Queue::MAX_ITEMS; $i++) {
            static::$queue->push($i);
        }

        $this->expectException(QueueExeption::class);
        
        static::$queue->push('penis');
    }
}
