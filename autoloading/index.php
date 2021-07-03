<?php



spl_autoload_register(function($cls_name){ //most popular uses method 
    include "classes/".$cls_name.".php";


});
/*

function __autoload($cls_name){ //$cls_name is a peramiter that hold the class name
   // echo "$cls_name";
    include "classes/".$cls_name.".php";
}
*/

$java=new java;
$php=new php;
$js=new js;

?>