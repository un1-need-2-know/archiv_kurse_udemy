<?php

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testReturnsFullName()
    {
        $user = new User();

        $user->first_name = 'Hans';
        $user->name = 'Wurst';

        $this->assertEquals('Hans Wurst', $user->getFullName());
    }

    public function testFullNameisEmptyByDefault()
    {
        $user = new User();

        $this->assertEquals('', $user->getFullName());
    }

    /**
     * @test
     */
    public function first_name_is_only_set()
    {
        $user = new User();

        $user->first_name = 'Hans';

        $this->assertEquals('Hans', $user->getFullName());
    }
}
