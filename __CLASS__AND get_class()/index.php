<?php
spl_autoload_register(function($class){
    
   include "class/".$class.".php"; 
    
});


class phpChild extends php{
    
    
    public function cms(){
        echo "child class constant and class name ->".__CLASS__."<br>";
        echo "child class function and class name ->".get_class($this)."<br>";
    }
    public function ourMethod(){
        parent::framework();
    }
}

$php =new phpChild();
$php->framework();
echo "<hr>";
$php->cms();
echo "<hr>";
$php->ourMethod();


?>