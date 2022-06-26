<?php

use PHPUnit\Framework\TestCase;

class AbstractPersonTest extends TestCase
{
    public function testNameAndTitleIsReturned()
    {
        $person = new AbstractPerson('Green');

        $this->assertEquals('Dr. Green', $person->getNameAndTitle());
    }
}
