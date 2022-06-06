<?php

class User
{
    public $first_name;

    public $name;

    public function getFullName()
    {
        return $this->first_name . ' ' . $this->name;
    }

}
