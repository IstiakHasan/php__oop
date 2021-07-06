<?php
 spl_autoload_register(function($cls){
     
     include  "Robin/".$cls.".php";
     
 });



$pro=new Programming();
$ser=serialize($pro);
//echo $ser;
file_put_contents("Programming.txt",$ser);//file create holo akta 
//echo $ser;
$getcont=file_get_contents("Programming.txt");
$unser=unserialize($getcont);
echo "<pre>";
print_r($unser);
echo "</pre>";



?>