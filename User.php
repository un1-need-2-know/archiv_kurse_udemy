<?php

class User
{
    public $first_name;

    public $name;

    public function getFullName()
    {
        return trim($this->first_name . ' ' . $this->name);
    }

}
