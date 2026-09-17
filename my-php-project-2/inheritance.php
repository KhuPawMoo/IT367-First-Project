<?php
class Vehicle {

    public function __construct(protected string $brand, protected int $wheels) {

    }
    public function describe() {
        // Describe the vehicle
        return "This {$this->brand} with {$this->wheels} wheels";
    }
    public function honk() {
        // Honk the vehicle
        return "Beeeep!";
    }
}

class Car extends Vehicle {
    public function hitBrake() {
        return "Let's hit the brake";
    }
    
    public function describe() {
        // Use the parent describe method and add additional information
        return parent::describe() . " and it is a car";
    }
}

class Motorbike extends Vehicle {
    public function jump() {
        return "Jumping...";
    }
}

class ExoticCar extends Car {
    public function drifting() {
        return "It is drifting";
    }

    public function honk() {
        // Override the honk method from vehicle class
        return "HOOONK!";
    }
}

$vehicle1 = new Vehicle("Toyota", 4);
$vehicle1->describe();
$vehicle2 = new Vehicle("Volvo", 4);
$vehicle2->describe();
$vehicle3 = new Vehicle("Honda", 2);
$vehicle4 = new Vehicle("Lyfan", 3);
$vehicle5 = new Vehicle("Mazda", 4);

$car1 = new Car("Mitsubichi", 4);
$car1->describe();
$car2 = new Car("Chevrolet", 2);

$motor1 = new Motorbike("Yamaha", 2);
$motor1->describe();
$motor2 = new Motorbike("Suzuki", 2);

$exotic1 = new ExoticCar("Lamborghini", 4);
$exotic1->honk(); //HOOONK!

var_dump($vehicle1 instanceof Vehicle); // true
var_dump($car1 instanceof Vehicle); // true
var_dump($motor1 instanceof Vehicle); // true
var_dump($exotic1 instanceof Vehicle); // true
var_dump($exotic1 instanceof Car); // true
var_dump($exotic1 instanceof Motorbike); // false
