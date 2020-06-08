<?php
require_once "Vehicle.php";

class Car extends Vehicle
{
    /**
     * @var integer
    */
    protected $nbWheels;
    /**
     * @var integer
    */
    protected $currentSpeed;
    /**
     * @var string
     */
    protected $color;

    /**
     * @var integer
    */
    protected $nbSeats;
    /**
     * @var string
    */
    protected $energy;
    /**
     * @var integer
    */
    protected $energyLevel;


}