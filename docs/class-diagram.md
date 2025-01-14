# Diagramme de class

```mermaid
---
title: Class Diagram
---
classDiagram
    note "Project: UML1-SequenteToCode
    Title: SequenteToCode Class Diagram
    Author: SCHNEIDER Julien
    Date: 14/01/25
    Version: 1.2"

    class Driver {
        +currentVehicle : Vehicle

        +takeAVehicle(vehicle:Vehicle) void
    }

    class TruckDriver {
        - licenceHazardous : bool
        + prepareDelivery(delivery : Delivery, truck Truck) void
        + securityCheck(truck : Truck) void
        + ~get~getTodayDate : string
    }
    

    class Person {
        -email : string
        +Person(email : string)
        +~get~getEmailAddress() : string
    }

    class Vehicle {
        -chassisNumber : string

        +Vehicle(chassisNumber:string)
        +~get~getChassisNumber() : string
    }

    class Truck {
        + ~get~Hazardous() : bool
    }

    class Delivery {
        - type : string
        + Delivery(type : string)
    }

    class Enterprise {
        -driver : Driver[]
        -vehicles : Vehicle[]


        -~get~getVehicleByChassisNumber(chassisNumber:string) Vehicle
        -~get~getDriverByEmailAddress(driverEmailAdress:string) Driver
        +assignVehicleToDriver(chassisNumber:string, driverEmailAdress:string) void
    }

    class DriverNotFoundException { }

    class VehicleNotFoundException { }

    class DriverNotAvailableException { }

Truck --|> Vehicle
    Enterprise o-- Vehicle
    Enterprise o-- Driver
    Delivery o-- TruckDriver
    Driver --|> Person
    Driver ..> Vehicle
    TruckDriver --|> Driver
    

    DriverNotAvailableException -- Driver : throw exception
    DriverNotFoundException -- Enterprise : throw exception
    VehicleNotFoundException -- Enterprise : throw exception
```
