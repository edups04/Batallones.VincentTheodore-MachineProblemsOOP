<?php

class Vehicle {
    public $seating_capacity;

    public function __construct($seating_capacity) {
        $this->seating_capacity = $seating_capacity;
    }

    public function fare() {
        return $this->seating_capacity * 100;
    }
}

class Bus extends Vehicle {
    public function fare() {
        $total_fare = $this->seating_capacity * 100;
        return $total_fare + ($total_fare * 0.1);
    }
}

$bus = new Bus(50);
echo "Total Bus fare is: " . $bus->fare();

?>