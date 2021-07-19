<?php
spl_autoload_register(function($clas){

include "class/".$clas.".php";




});


new database();
new database();
new database();
new database();
new database();

?>