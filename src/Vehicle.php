<?php

class Vehicle
{
    private string $chassisNumber;

    public function __construct(string $chassisNumber)
    {
        $this->chassisNumber = $chassisNumber;
    }

    public function getChassisNumber(): string
    {
        return $this->chassisNumber;
    }
}
