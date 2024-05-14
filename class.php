<?php

// Declare a Class

class car{
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

