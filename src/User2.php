<?php

class User2
{
    public $email;

    protected $mailer;

    public function setMailer(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function __construct(string $email)
    {
        $this->email = $email;
    }

    public function notify(string $message)
    {
        return call_user_func([Mailer::class, 'send'], $this->email, $message);
    }
}
