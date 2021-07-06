<?php
class language{
    
    
    
    private $category;
    private $framework;
    
    
    
    function setCat($a){
        $this->category=$a;
    }
    function getCat(){
        return $this->category;
    }
    function setframework($b){
        $this->framework=$b;
    }
    function getframework(){
        return $this->framework;
    }
}


?>