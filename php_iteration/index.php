<?php

spl_autoload_register(function($cls){
    
    include "class/".$cls.".php";
    
    
});



$class=new person;
foreach($class as $key=>$value){
    echo "<pre>";
    echo "$key=>$value";
    echo "</pre>";
}
$class->itera();

?>