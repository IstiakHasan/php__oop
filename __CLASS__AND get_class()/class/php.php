<?php

abstract class php{
    
    public function framework(){
        echo "Base class constant and class name ->".__CLASS__."<br>";
        echo "Base class function and class name->".get_class($this)."<br>";
    }
}


?>