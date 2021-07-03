<?php

spl_autoload_register(function($cls_name){

  include "classes/".$cls_name.".php";

});
$cal =new calculation;
echo "Result is: ".$cal->getValue(3,5)->getResult();

?>