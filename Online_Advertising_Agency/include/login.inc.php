<?php
if(isset($_POST["login"])){
    $username = $_POST["email_username"];
    $pwd = $_POST["password"];

    require_once 'dbh.inc.php';
    require_once 'function.inc.php';

    if(emptyInputLogin($username,$pwd)!== false){
        exit();
    }

    loginUser($connection,$username,$pwd);
}
else{
    header('Location:../login.php');
    exit();
}