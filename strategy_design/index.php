<?php

spl_autoload_register(function($cls){
include "classes/".$cls.".php";
});


$user=new user();
$msg=$user->getMsg();



switch($msg){
    case 'email':
        $objmsg=new sendEmail();
        break;
        case 'sms':
            $objmsg=new sendSms();
            break;
            case 'fax':
                $objmsg=new sendFax();
                break;
}



?>