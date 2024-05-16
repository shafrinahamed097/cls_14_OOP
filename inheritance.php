<?php 

// Inheritance
// Overriding

class Father{
    public function print100(){ 

        for($i=0; $i<=100; $i++){
            echo "$i" ."\n" ;
        }
    }
}

class Son extends Father{

    public function print100(){ 

        for($i=0; $i<=100; $i=$i+10){
            echo "$i" ."\n" ;
    }
}


}

$SonObj = new Son();
$SonObj->print100();