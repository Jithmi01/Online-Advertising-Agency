<!DOCTYPE html>
<html>
<head>
<title>insert profile-Online Advertising Agency</title>
<link rel="stylesheet" href="style/insertProfile.css">
<script src="script/insertProfile.js"></script>
<script src="insertProfile.js"></script>
<style>
    <style>
.spacing{
	word-spacing:1050px;
}

body{
	background-image:url("images/insertbg.jpg");
}

h3{
	color:white;
}

.submit{
	background:black;
	color:red;
	width: 200px;
	height: 50px;
	font-size:20px;
	font-style:bold;
	margin-top:10px;	
}

.delete{
	background:black;
	color:yellow;
	width: 200px;
	height: 50px;
	font-size:20px;
	font-style:bold;
	margin-left:750px;
	margin-top:10px;
}


.text{
	height:20px;
}

</style>
</head>
<body>
<form align="center" method="POST" action="include/insertProfile.inc.php">
<hr>
<p class="spacing" style="line-height:5px;"><h3>FirstName LastName</h3></p><input type="text"  class="text" name="first_name" placeholder="Anuji" style="width:10%;margin-right:35px">
<input type="text" class="text" name="last_name" placeholder="Thrimanna" style="width:10%;margin-right:20px"><br><br>

<h3>Email</h3><br><input type="text" class="text" name="email" placeholder="characters@characters.domain" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" style="width:23.5%;margin-right:20px"><br><br>

<h3>Phone No</h3><br><input type="text" class="text" name="phone_no" placeholder="0703928678" pattern="[0-9]{10}"required style="width:23.5%;margin-right:20px"><br><br>


<h3>Bio</h3><br><textarea name="bio" rows="8" cols="40" placeholder="I'm Anuji and my details should be as above mentioned......"></textarea><br><br><br>

<input type="submit" class="submit" value="submit" style="width:10%">
</form>

<form method="POST" action ="delete.php">
<input type= "reset" class="delete" value="delete" style="width:10%">
</form>
<hr>

</body>
</html>