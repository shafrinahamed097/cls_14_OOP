<?php 

// Inheritance

class Father{
    public function print100(){ 

        for($i=0; $i<=100; $i++){
            echo "$i" ."\n" ;
        }
    }
}

class Son extends Father{

}

$SonObj = new Son();
$SonObj->print100();