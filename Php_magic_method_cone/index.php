<?php

spl_autoload_register(function($cls){
    
    include "class/".$cls.".php";
    
});



$java=new language();
$java->setCat("OOP");
$java->setframework("Spring");


$php=clone $java; //object cloneing
$php->setframework("codeIgniter");



echo $java->getCat()."<br>";
echo $java->getframework()."<br>";


echo $php->getCat()."<br>";
echo $php->getframework();


?>