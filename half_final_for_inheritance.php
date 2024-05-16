<?php 

class Father{
 final public function Car(){
    for($i = 1; $i < 3; $i++){
        echo $i ."\n";
    
    }
}

    public function Building(){
        for($i = 0; $i < 3; $i++){
            echo $i ."\n";
        
        }
    }
}


class Son extends Father{
 
    final public function Car(){
        for($i = 1; $i < 3; $i++){
            echo $i ."\n";
        
        }
    }

    
    public function Building(){
        for($i = 0; $i < 3; $i++){
            echo $i ."\n";
        
        }
    }
    

}

$ObjSon = new Son();
$ObjSon->Building();
// output: 0,1,2

$ObjSon->Car();
// output:  Cannot override final method Father::Car()

