<?php
spl_autoload_register(function($class){

include "class/".$class.".php";


});
//$php =new php;
//new java($php);// php.php file er object ta pass kore ditey hbe 
new java(new php); // short kore likhlam 

?>