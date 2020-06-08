<?php

require "Bike.php";
require "Car.php";
require "Truck.php";
require "MotorWay.php";
require "Skateboard.php";
require "PedestrianWay.php";
require "ResidentialWay.php";


$car = new Car('green', 4, 4, 'electric');

$bike = new Bike('green', 4);


$pedestr = new PedestrianWay($bike);
$pedestr->addVehicule($bike);
var_dump($pedestr->getCurrentVehicles());

$motorway = new MotorWay($car);
$motorway->addVehicule($car);
var_dump($motorway->getCurrentVehicles());

