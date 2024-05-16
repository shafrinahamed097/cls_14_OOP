<?php 

// Constructor for inheritance

class Father{
    public function __construct(){
        echo "This is Father Constructor";
    }
}

class Son extends Father{
}

$SobObj = new Son();
