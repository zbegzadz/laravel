<?php

class Vehicle {

    public string $brand;
    public int $speed;


    public function __construct($brand, $speed){

        $this->brand = $brand;
        $this->speed = $speed;

    }

    public function printInfo() {

        echo "Brand: " . $this->brand . "<br>";
        echo "Speed: " . $this->speed . "<br>";

    }
}

class Car extends Vehicle {

    public int $numberOfDoors;

    public function __construct($brand, $speed, $numberOfDoors) {

        parent::__construct($brand, $speed, $numberOfDoors);

        $this->numberOfDoors = $numberOfDoors;

    }

    public function printInfo() {
        parent::printInfo();

        echo "Number of doors: " . $this->numberOfDoors . "<br>";
    

    }
}


$car1 = new Car("Opel",180, 4);
$car2 = new Car("Lamborghini", 220, 2);
$car3 = new Car("BMW", 200, 4);



$car1->printInfo();
$car2->printInfo();
$car3->printInfo();


?>