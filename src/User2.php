<?php

class User2
{
    public $email;

    public function __construct(string $email)
    {
        $this->email = $email;
    }

    public function notify(string $message)
    {
        return Mailer::send($this->email, $message);
    }
}
