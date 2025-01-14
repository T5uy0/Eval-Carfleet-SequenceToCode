<?php

class Person
{
    private string $email;

    public function __construct(string $email)
    {
        $this->email = $email;
    }

    public function getEmailAddress()
    {
        return $this->email;
    }
}
