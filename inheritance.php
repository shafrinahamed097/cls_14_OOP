<?php 

// Inheritance
// Overriding
// Parent Keyword 

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

// Overriding

class Son1 extends Father{
    public function print100(){ 
        for($i=0; $i<=100; $i+=10){
            echo "$i" ."\n" ;
        }
    }
}

$SonObj1 = new Son1();
$SonObj1->print100();

// Parents Keyword = The parent keyword refers to the parent class of the current class.
// It can be used to access properties and methods of the parent class.

class Son2 extends Father{
    public function demo(){
        parent::print100();

    }
}

$SonObj2 = new Son2();
$SonObj2->demo();

