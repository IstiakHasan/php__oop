<?php

class php{
public static function framework(){  //static likhle object call na kore print kora jai
    echo "CakePhp is a framework.<br>";
    
    
}
    public function getframework(){
        self::framework();  //self:: bebohar koreci statuc method ta k call korar jonno
         //static::framework(); aita sob theke valo way 
    }
}


?>