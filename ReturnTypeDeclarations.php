<?php

//declare(strict_types=1);

Class Car {

}

Class Sedan extends Car {

}

Interface ICar {
    public function getVehicleType(string $vehicle) : Car;
}

class Toyota implements ICar {
    public function getVehicleType(string $vehicle) : Car
    {
        return new Sedan;
    }
}

$lexus = new Toyota();
$lexus->getVehicleType('lexus');

//declare return type of method
function sum(int $a, int $b) : int {
    return $a + $b;
}

$result = sum(1,2);

var_dump($result);