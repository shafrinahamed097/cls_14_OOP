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
