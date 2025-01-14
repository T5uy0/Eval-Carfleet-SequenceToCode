<?php

include 'Person.php';

class Driver extends Person
{
    private ?Vehicle $currentVehicle = null;

    public function __construct(string $email)
    {
        parent::__construct($email);
    }

    /**
     * STEP 1.3
     */
    public function takeAVehicle(Vehicle $vehicle): void
    {
        if ($this->currentVehicle !== null) {
            throw new \Exception("Driver is not available");
        }
        $this->currentVehicle = $vehicle;
    }
}
