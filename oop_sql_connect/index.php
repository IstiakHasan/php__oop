<?php

$db=new mysqli("localhost","root","","userdata");



if(mysqli_connect_errno()){
    echo " connection fail....";
    exit();
}else{
 echo "connection successfull....";
}


//$sql="select*from tbl_user";//select query
$sql="update tbl_user SET skill='java,php' where id='1'";//update data
$result=$db->query($sql);

/* $result=$db->query($sql);
while($data=$result->fetch_object()){
    echo "<pre>" ;
    echo  $data->skill."<br>";
    echo "</pre>";
} */

?>