<!DOCTYPE html>
<html>
<head>
<title>Update profile-Online Advertising Agency</title>

<style>

body{
	background-image:url("images/updatebg.jpg");
}

h3{
	color:white;
}

.submit{
	background:black;
	color:yellow;
	width: 200px;
	height: 100px;
	font-size:20px;
	font-style:bold;
}
.modify{
	color:yellow;
}		

.reset{
	background:gray;
	color:yellow;
	width:200px;
	height:100px;
	font-size:20px;
}

</style>

</head>
<body>
<form align="center" method="POST" action="include/updateProfile.php">
<hr>
<h1 class="modify">MODIFICATION</h1>
<hr>
<p class="spacing" style="line-height:5px;"><h3>FirstName LastName</p><input type="text" name="first_name" placeholder="Anuji" style="width:10%;margin-right:35px">
<input type="text" class="text" name="last_name" placeholder="Thrimanna" style="width:10%;margin-right:20px"><br><br>

<h3>Email</h3><br><input type="text" class="text" name="email" placeholder="characters@characters.domain" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" style="width:23.5%;margin-right:20px"><br><br>

<h3>Phone No</h3><br><input type="text" class="text" name="phone_no" placeholder="0703928678" pattern="[0-9]{10}"required style="width:23.5%;margin-right:20px"><br><br>


<h3>Bio</h3><br><textarea name="bio" rows="8" cols="40" placeholder="I'm Anuji and my details should be as above mentioned......"></textarea><br><br><br>

<input type="submit"  class="reset" value="submit modification" style="width:200px;height:100px;" name="submit"><br><br>
</form>
<hr>
</body>
</html>