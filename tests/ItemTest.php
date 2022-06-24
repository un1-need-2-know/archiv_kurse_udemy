<?php

use PHPUnit\Framework\TestCase;

class ItemTest extends TestCase
{
    public function testDescriptionIsNotEmpty()
    {
        $item = new Item();

        $this->assertNotEmpty($item->getDescription());
    }

    public function testIDisAnInt()
    {
        $item = new ItemChild();

        $this->assertIsInt($item->getID());
    }

    public function testTokenisAnString()
    {
        $item = new ItemChild();

        $this->assertIsString($item->getToken());
    }
}
