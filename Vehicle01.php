<?php

class Vehicle {
    public $name;
    public $speed;
    public $mileage;

    public function __construct($name, $speed, $mileage) {
        $this->name = $name;
        $this->speed = $speed;
        $this->mileage = $mileage;
    }

    public function displayVehicleInfo() {
        echo "Name:  $this->name <br>";
        echo "Speed:  $this->speed <br>";
        echo "Mileage: $this->mileage <br>";
    }
}

$vehicle = new Vehicle("Batmobile", 350, 3.17);
$vehicle->displayVehicleInfo();

?>