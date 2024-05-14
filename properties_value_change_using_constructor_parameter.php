<?php

// Declare Class 
class car{

    public function __construct($newColor){
        $this->carColor = $newColor;

    }
    public $carColor = "red";
}

$newCar = new car("green");
echo $newCar->carColor;

// declare object