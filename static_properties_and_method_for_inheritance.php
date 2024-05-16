<?php

class MyGadgets{

    public function Chata(){
        echo "I'm Chata";

    }

    public function HandWash(){
        echo "I'm HandWash";

    }

    public static function DSLR(){
        echo "I'm DSLR";

    }

    public function Mobile(){

        echo "I'm Mobile";

    }
}

MyGadgets::DSLR();
// Output: I'm DSLR

/*
The Static keyword is used to create methods that will exits independently of any
instances created for the class.

*/