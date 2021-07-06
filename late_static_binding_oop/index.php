
<?php

spl_autoload_register(function($class){
   include "class/".$class.".php";
    
});

$php=new php();
$php->getframework();





?>