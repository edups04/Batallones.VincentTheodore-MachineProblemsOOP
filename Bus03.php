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

class Bus extends Vehicle {

}

$bus = new Bus("Double Decker Bus", 50, 6);
$bus->displayVehicleInfo(); 

?>