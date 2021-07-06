<?php



class person{
    
    public $Name="Ariful";   //property nilam 
    public $age="18";
    public $skill="Blogging";
    private $Email="arigul@gmial.com";
    protected $password="21341253";
    
    function itera(){
         echo "inside class<br>";
          foreach($this as $key=>$value){
          echo "<pre>";
          echo "$key=>$value";
           echo "</pre>";
    }
    }
}




?>