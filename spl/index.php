<?php
$arr=array("Html","Php","Java","Js");
$ai=new arrayiterator($arr);
//$ai->append("pyhon");// new array property add korlam 
//$limit=new limititerator($ai,0,2);//limit kore dawear jonno
//echo $ai->current()."<br>";
//echo $ai->next();
//echo $ai->current()."<br>";
//echo $ai->next();
//echo $ai->current()."<br>";
//echo $ai->next();
//echo $ai->current();
$ci=new cachingiterator($ai);

foreach($ci as $value){
    echo $value;
    if($ci->hasNext()){
        echo ", ";
    }
    
}




//
//foreach($limit as $value){
//    
//    echo $value."<br>";
//}


?>