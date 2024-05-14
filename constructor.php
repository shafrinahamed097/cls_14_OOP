<?php

// Declare a Class

class car{

    // Declare Constructor

    /*
    1. He can take parameter
    2. He execute automatically
    3. He can not return anything

    */
    public function __construct(){
        echo "Auto Light on, Auto Sensor On, Auto Pilot On\n";
    }
    public $color="blue";

    public function drive(){
        echo "I'm driving";
    }
     public function washing(){
         echo "I'm washing";    
     }

}

// Create an Object

$newCar = new car();
echo $newCar->color ."\n";
echo $newCar->drive() ."\n";

