<?php
spl_autoload_register(function($class_name){

    include "class/".$class_name.".php";


});


$cal=new calculation;
$nums=array(
    array('Number one',10,20),
    array('Number two',20,20)
);
$cal->getValue($nums);




?>