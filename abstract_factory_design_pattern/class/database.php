<?php

abstract class database{
    public function connect();
    public function query();
    public function insertid();

    public function sethost($host){
        //set database  here....
    }
public function setdb($db){
    //set database  here....
}

public function setuser($user){
    //set user name
}
public function setpass($pass){
    //set your pass
}




}
?>