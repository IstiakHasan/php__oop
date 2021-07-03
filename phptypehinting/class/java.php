<?php


class java{

    public $fromphp;
    function __construct(php $value){// "php hocce class name  R $value  diye value ta nicchi
        $this->fromphp=$value;// $fromphp te php class er value initialize korlam 
        $this->fromphp->framework();
        $this->fromphp->cms();
    }
}