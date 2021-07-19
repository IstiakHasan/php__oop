<?php

spl_autoload_register(function($cls){

include "classes/".$cls.".php";


});

$obj=new observable();
$sk=new skype();
$gt=new gtalk();
$s=new stdClass();


$obj->register($sk);
$obj->register($gt);
$obj->register($s);
$obj->statechange();




?>