<?php

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testReturnsFullName()
    {
        require_once 'User.php';

        $user = new User;

        $user->first_name = 'Hans';
        $user->name = 'Wurst';

        $this->assertEquals('Hans Wurst', $user->getFullName());
    }
}
