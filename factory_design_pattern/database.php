<?php
class database{
    public $driver;
    public $link;


    public function setdriver($driver){
        $this->driver=$driver;

    }
    public function  connect(){


        if($this->driver==="mysql"){
            $mngmysql=new ManageMyspl()
         $mngmysql->setHost($host);
         $mngmysql->setdb($db);
         $mngmysql->setuser($user);
         $mngmysql->setpass($pass);
        $this->link= $mngmysql->connect();


        }elseif($this->driver=="splite"){
            $mngmsqite=new ManageMyspl()
$mngmsqite->setHost($host);
$mngmsqite->setdb($db);
$mngmsqite->setuser($user);
$mngmsqite->setpass($pass);
$this->link=$mngmsqite->connect();

        }

    }
}
?>