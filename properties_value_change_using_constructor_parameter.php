<?php

// Declare Class 
class car{

    public function __construct($newColor){
        $this->carColor = $newColor;

    }
    public $carColor = "red";
}

// declare object
$newCar = new car("green");
echo $newCar->carColor;

