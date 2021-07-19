<?php

class observable{
    private $observers=array();
    public function register($object){
        if($object instanceof observer){
            $this->observers[]=$object;
        }else{
            echo "object should be implements observer interface...<br>";
        }




    }


    public function statechange(){
        foreach($this->observers as $ovserver){
            $ovserver->message();
        }
    }
}

?>