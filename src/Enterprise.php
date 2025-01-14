<?php

class Enterprise
{
    private array $drivers = [];

    private array $vehicles = [];

    /**
     * STEP 1.2
     */
    public function assignVehicleToDriver(string $chassisNumber, string $driverEmailAddress): void
    {
        $driver = $this->getDriverByEmailAddress($driverEmailAddress);

        $vehicle = $this->getVehicleByChassisNumber($chassisNumber);

        $driver->takeAVehicle($vehicle);

        
    }

    /**
     * STEP 1.2
     */
    private function getVehicleByChassisNumber(string $chassisNumber): Vehicle
    {
        foreach ($this->vehicles as $vehicle) {
            if ($vehicle->getChassisNumber() === $chassisNumber) {
                return $vehicle;
            }
        }
        throw new \Exception("Vehicle with chassis number $chassisNumber not found.");
    }

    /**
     * STEP 1.1
     */
    private function getDriverByEmailAddress(string $driverEmailAdress): Driver
    {
        foreach ($this->drivers as $driver) {
            if ($driver->getEmailAddress() === $driverEmailAdress) {
                return $driver;
            }
        }
        throw new \Exception("Driver with email $driverEmailAdress not found.");
    }
}
