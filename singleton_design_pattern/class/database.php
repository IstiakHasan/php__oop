<?php
class database{
    private static $instance;
    public function __construct(){
        if(!self::$instance){
            self::$instance=$this;
            echo "Created new one.<br>";//first obosthai empty cilo , kinto porer bar empty cilo na
            return self::$instance;

        }else{

            echo "old one instance.<br>";
            return self::$instance;

        }
    }
}

?>