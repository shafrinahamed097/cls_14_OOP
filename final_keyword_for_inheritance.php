<?php 

final class Father{
    public function print100(){
        for($i = 0; $i < 10; $i++){
            echo "$i" ."\n";
    }
}

}

class Son extends Father{

}

$ObjSon = new Son();
$ObjSon->print100();
// Output: Class Son cannot extend final class Father