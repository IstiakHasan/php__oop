<?php

/*
spl_autoload_register(function($cls){
    include "classes/".$cls.".php"; 
    
});
*/

include "classes/java.php";
include "classes/php.php";
include "classes/ruby.php";



use delowar\live\ruby as ru;//alyus hisabe bebohar kora jai
new delowar\java();
new delowar\php();
//new delowar\live\ruby();
new ru();//alyus diye call kora hoyeche

echo HTML;
echo delowar\css;//namespace ta bole dite hbe
delowar\coding();//namespace ta bole dite hbe 

?>