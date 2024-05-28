<?php 

include "dbh.inc.php";
    
$username =$_POST['uname'];
$email = $_POST['uemail'];
$description =$_POST['discription'];

$sql = "insert into contactus(name,email,description) values(?,?,?)";
$statment = $connection->prepare($sql);

$statment->bind_param("sss",$username,$email,$description);

if($statment->execute()){
    header('Location:../home.php');
}
else{
    echo 'insert data error';
}