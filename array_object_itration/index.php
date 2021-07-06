<?php

$arr=array("Html","Css","php","JavaScript");

$coding= new arrayobject($arr);//arrayobject is a method
$coding->append("Java");

$iterator=$coding->getIterator();//getIterator is a method
while($iterator->valid()){
    
    echo $iterator->current()."<br>";//current() is a method
    $iterator->next();//next() is a method
}


?>