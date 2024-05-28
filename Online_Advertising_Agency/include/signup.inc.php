<?php
if(isset($_POST["submit"])){
    $username = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $emails = $_POST["email"];
    $pwd = $_POST["password"];
    $pwdRepeat = $_POST["confirmpassword"];

   require_once 'dbh.inc.php';
   require_once 'function.inc.php';
   

    $emptyInput = emptyInputSignup($username,$lastname,$emails,$pwd,$pwdRepeat);
    $invalidUid = invalidUid($username);
    $invalidEmail = invalidEmail($emails);
    $pwsMatch = pwdMathch($pwd , $pwdRepeat);
    $uidExists = uidExists($connection, $username ,$emails);

    if($emptyInput !== false){
        header("Location:../login.php?error=emptuinput");
        exit();
    }
    if($invalidUid !== false){
        header("Location:../login.php?error=invaliduid");
        exit();
    }
    if($invalidEmail !== false){
        header("Location:../login.php?error=invalidemail");
        exit();
    }
    if($pwsMatch !== false){
        header("Location:../login.php?error=passworddontmatch");
        exit();
    }
    if($uidExists !== false){
        header("Location:../login.php?error=usernametaken");
        exit();
    }

    createUser($connection,$username,$lastname,$emails,$pwd);

    
}
else{
    header('Location:../register.php');
    exit();
}
