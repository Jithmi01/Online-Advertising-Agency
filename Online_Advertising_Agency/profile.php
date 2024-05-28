<?php
require_once 'include/dbh.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>User profile-Online Advertising Agency</title>
<style>

body{
background-image:url("images/profilebg.jpg");
background-repeat:no-repeat;
background-size:cover;
}

.box{
width:400px;
height:780px;
position: relative;
left:650px;
box-shadow:1px 8px 7px 1px rgba(0,0,0,1);

}

h2{
text-align:center;
font-family:Arial black;
color:black;
}

.logo{
display:block;
margin-left:auto;
margin-right:auto;
}

Div{
text-align:center;
}

.username{
line-height:0px;
}

.Jdate{
line-height:0px;
}

.Lplan{
line-height:0px;
}

.button{
background-color:white;
height:35px;
color:white;
background-color:darkgray;
font-size:20px;
}
.button:hover{
    background:blue;
    box-shadow:0px 2px 7px 0px rgba(0,0,0,0.6);
    margin-left:20px;
}



</style>
</head>
<body>


<script src="script/editPhoto.js"></script>

<div class="box">
<h2>My Profile</h2>
<img class="logo" src="images/profile.png">

<table>

<?php
/*

//retrieve(READ in CRUD) data from database

$sql = "SELECT user_name FROM profile";

$result = $connection->query($sql);

if($result->num_rows>0)
{
while($row=$result->fetch_assoc())
{
echo "<tr>
 <td>".$row["user_name"]."</td>
 </tr>";
//return it's a validated one
}  
} else {
echo "Empty row"; // Display "Empty row" message if not matched
}

echo "</table>"; // End the table
$connection->close();
*/
?>

<h3 class="Jdate">Join Date</h3><br>12.05.2023<br>
<h3 class="Lplan">License Plan</h3><br>Basic<br><br>
<button onclick="insert()" class="button">Insert current profile Details</button><br><br>
<button onclick="updateProfile()" class="button">Update profile details</button><br><br>
<button class="button">Change Password</button><br><br>
<button class="button">Chat with us</button><br><br>
<button class="button">payment option</button><br><br>
<button class="button">Licenece Plans</button><br><br>
<button class="button">History</button><br><br>
<button class="button">My reviews</button><br><br>

</div>
<script>
function updateProfile(){

window.location.href="update.php";
}
function insert(){
 window.location.href="insertProfile.php";
}
</script>

</body>
</html>