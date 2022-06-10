<?php

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testReturnsFullName()
    {
        require_once 'User.php';

        $user = new User();

        $user->first_name = 'Hans';
        $user->name = 'Wurst';

        $this->assertEquals('Hans Wurst', $user->getFullName());
    }

    public function testFullNameisEmptyByDefault()
    {
        require_once 'User.php';

        $user = new User();

        $this->assertEquals('', $user->getFullName());
    }

    public function testFirstNameIsOnlySet()
    {
        require_once 'User.php';

        $user = new User();

        $user->first_name = 'Hans';

        $this->assertEquals('Hans', $user->getFullName());
    }
}
