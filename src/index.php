<?php

include 'Enterprise.php';
include 'Driver.php';
include 'Vehicle.php';
require_once 'Delivery.php'

try {
    $enterprise = new Enterprise();

    $driver = new Driver("schumacher@example.com");

    $vehicle = new Vehicle("mick47");

    $enterprise->assignVehicleToDriver($vehicle->getChassisNumber(), $driver->getEmailAddress());

    $delivery = new Delivery('hazardous');

    echo "Vehicle assigned successfully!";
} catch (\Exception $e) {
    echo "Error: " . $e->getMessage();
}
