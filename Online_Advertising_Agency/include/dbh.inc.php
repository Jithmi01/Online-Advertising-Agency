<?php
//database connection
$servername="localhost";
$username="root";
$password="";
$database="onlineadvertisingagency";

$connection=new mysqli($servername,$username,$password,$database);


if($connection->connect_error){
die("Connection error");
}

