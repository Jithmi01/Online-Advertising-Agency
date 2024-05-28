<?php
include 'dbh.inc.php';

//Retrieve(READ in CRUD)data from database

$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];
$phone_no=$_POST['phone_no'];
$bio=$_POST['bio'];

//Insert data(CREATE in CRUD)

$sql = "INSERT INTO profile(first_name,last_name,email,phone_no,bio) VALUES (?,?,?,?,?)";
$statment = $connection->prepare($sql);

$statment->bind_param("sssis",$first_name,$last_name,$email,$phone_no,$bio);

//validation
if($statment->execute()){
    header('Location:../profile.php');
}
else{
    echo 'insert data error';
}