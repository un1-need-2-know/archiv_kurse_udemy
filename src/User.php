<?php

class User
{
    public $first_name;

    public $name;

    public $email;

    public function getFullName()
    {
        return trim($this->first_name.' '.$this->name);
    }

    public function notify($message)
    {
        $mailer = new Mailer;

        return $mailer->sendMessage($this->email, $message);
    }
}
