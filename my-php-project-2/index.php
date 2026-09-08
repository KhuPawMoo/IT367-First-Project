<?php
class Person {

    public $name;
    public $skinColor;
    public $dayOfCreation;
    public $ability;
    private $id;
    private $lifeSpan;

    public functin generateId($id) {
        $this->id = $id;
    }

    public function walk() {

    }
    public function fight() {

    }
    public function kill() {

    }
    public function jump() {

    }
    public function run() {

    }
    public function stop() {

    }
    public function eat() {

    }
    public function sleep() {

    }
    


}

//object -> instance of the class

$User1 = new Person();

$User1->name = "Khu";
$User1->skinColor = "Brown";

$date = new DateTime('2026-06-10');
$User1->dayOfCreation = $date;

$Player1 = new Person();
$Player1->name = "Merilyn";
$Player1->generateId(147);

$Player2 = new Person();
$Player2->name = "Ahtuutu";
$Player2->generateId(741);