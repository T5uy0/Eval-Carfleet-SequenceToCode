<?php

require_once 'Driver.php';
require_once 'Delivery.php';
require_once 'Truck.php'

class Truck extends Vehicle
{
    private bool $typeHazardous;

    public function getHazardous(): bool
    {
        return $this->typeHazardous;
    }
}