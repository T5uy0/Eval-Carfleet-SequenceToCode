<?php

require_once 'Driver.php';
require_once 'Delivery.php';
require_once 'Truck.php'

class TruckDriver extends Driver
{
    private string $licenceHazardous;

    public function prepareDelivery(Delivery $delivery,Truck $truck)
    {
        if($delivery->getType == 'hazardous') {
            $this->securityCheck($truck);
        }
        return;
    }

    public function securityCheck (Truck $truck)
    {
        if ($this->licenceHazardous <= $this->getTodayDate) {
            if ($truck->getTypeHazardous == true) {
                return;
            } else {
                throw new \Exception("TruckHazardousMaterialException");
            }
        } else {
            throw new \Exception("TruckHazardousLicenseException");
        }
    }

    public function getTodayDate (): string
    {
        // code pour recup la date d'ajourd'hui
    }
}