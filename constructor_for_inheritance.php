<?php 

// Constructor for inheritance

class Father{
    public function __construct(){
        echo "This is Father Constructor" ."\n";
    }
}

class Son extends Father{
}

$SobObj = new Son();

class Son1 extends Father{

    public function __construct(){
        echo "This is Son1 Constructor";
    }
}

$SobObj1 = new Son1();


