<?php

spl_autoload_register(function($cls){
 include "classes/".$cls.".php";

});






$db=new database();
$db->setdriver("mysql");
$db->connect("","","","");













?>