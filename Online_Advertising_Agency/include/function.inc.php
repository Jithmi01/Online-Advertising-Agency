<?php
function emptyInputSignup($username,$lastname,$emails,$pwd,$pwdRepeat){
    $result;
    if(empty($username) || empty($lastname) || empty($emails) || empty($pwd) || empty($pwdRepeat)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}
function invalidUid($username){
    $result;
    if(!preg_match("/^[a-zA-Z0-9]*$/",$username)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}function invalidEmail($emails){
    $result;
    if(!filter_var($emails, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function pwdMathch($pwd , $pwdRepeat){
    $result;
    if($pwd !== $pwdRepeat){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}
function uidExists($connection, $username ,$emails){
    $sql ="SELECT * FROM signup WHERE firstname =? OR useremail=?;";
    $stmt = mysqli_stmt_init($connection);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("Location:../login.php?error=stmtfaild");
        exit();
    }
    mysqli_stmt_bind_param($stmt,"ss",$username,$emails);
    mysqli_stmt_execute($stmt);
    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }else{
       return false; 
    }
    mysqli_stmt_close($stmt);
}
function createUser($connection,$username,$lastname,$emails,$pwd){
    $sql ="INSERT INTO signup(firstname,lastname,useremail,upassword)VALUES(?,?,?,?);";
    $stmt = mysqli_stmt_init($connection);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("Location:../register.php?error=stmtfaild");
        exit();
    }
    $hashedPwd = password_hash($pwd,PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt,"ssss",$username,$lastname,$emails,$hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("Location:../login.php?error=none");
    exit();
}

function emptyInputLogin($username,$pwd){
    $result;
    if(empty($username) || empty($pwd)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}


function loginUser($connection,$username,$pwd){
    $uidExists = uidExists($connection, $username ,$username);
    if($uidExists === false){
        //echo implode("",$uidExists) ;
       header("Location:../register.php?error=wrognlogin2");
        exit();
    }

    $pwdhashed = $uidExists["upassword"];
    $checkpwd = password_verify($pwd,$pwdhashed);

    if($checkpwd === false){
        header("Location:../register.php?error=wrognlogin1");
        exit();
    }
    else if($checkpwd === true){
        session_start();
        $_SESSION["userid"] = $uidExists["userid"];
        $_SESSION["useruid"] = $uidExists["firstname"];
        $_SESSION["username"] = $uidExists["firstname"];
        header ("location:../home.php");
        exit();
    }
}
