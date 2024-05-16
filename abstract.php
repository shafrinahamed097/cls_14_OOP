<?php 


abstract class Father{
    public function print100(){
        for($i = 0; $i <= 100; $i++){
            echo "$i" ."\n";
    }
}

}

class Son extends Father{

    public function demo(){
        parent::print100();
    }
}

$ObjFather = new Father();
$ObjFather->print100();

/*

Abstract classes and methods are when the parent class has a named method,
but need its child class(es) to fill out the tasks. An abstract class is a 
class that contains abstract method is method that is declared, but not implemented
in the code.


*/
