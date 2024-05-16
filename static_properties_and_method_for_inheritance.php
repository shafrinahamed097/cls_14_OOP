<?php

class MyGadgets{

    public function Chata(){
        echo "I'm Chata";

    }

    public function HandWash(){
        echo "I'm HandWash";

    }
    
    public static $myDSLRCameraName="Canon200D";
    public static function DSLR(){
        echo "I'm DSLR" ."\n";
        echo self::$myDSLRCameraName;

    }

    public function Mobile(){

        echo "I'm Mobile";

    }
}

MyGadgets::DSLR();
// Output: I'm DSLR
// Canon200D

/*
The Static keyword is used to create methods that will exits independently of any
instances created for the class.

*/