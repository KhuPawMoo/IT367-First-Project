<?php
abstract class Vehicle {
    public function __construct(protected string $brand) {}
    abstract public function honk();
    // public function drive() {
        
    // }
}

class Car extends Vehicle {
    public function honk() {
        return "HONK!\n";
    }
}

class Motorbike extends Vehicle {
    public function honk() {
        return "Beep!\n";
    }
}

class Truck extends Vehicle {
    public function honk() {
        return "HOOONK!\n";
    }
}

class Bulldozer extends Vehicle {
    public function honk() {
        return "HOOOOOONK!\n";
    }
}

class ExoticCar extends Car {
}

function startAllVehicles (...$vehicles): void {
    foreach ($vehicles as $vehicle) {
        echo $vehicle->honk();
    }
}

startAllVehicles(
    new Car("Toyota"),
    new Motorbike("Yamaha"),
    new Truck("Volvo"),
    new Bulldozer("Caterpillar"),
);

class TukTuk extends Vehicle {
    public function honk() {
        return "Bip Bip!\n";
    }
}

startAllVehicles(
    new TukTuk("Bajaj"),
);

class Train extends Vehicle {
    public function honk() {
        return "Choo Choo!\n";
    }
}

startAllVehicles(
    new Train("BTS"),
);