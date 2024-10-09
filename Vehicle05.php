<?php

class Vehicle {
    public static $VehicleColor = 'Black';
}

class Bus extends Vehicle {

}

class Car extends Vehicle {

}

$car = new Car("Batmobile", 350, 3.17);
$bus = new Bus("School Bus", 120, 15000);

echo "Car Color: " . Car::$VehicleColor . "<br>";
echo "Bus Color: " . Bus::$VehicleColor . "<br>";

?>