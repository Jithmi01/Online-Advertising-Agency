<?php
require_once 'include/dbh.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
<title> log in </title>
<link rel="stylesheet" href="style/login.css">
<style>
	body{
	background:url(images/bacground.jpg);
	background-repeat:no-repeat;
	background-size:100%;

}
</style>
</head>


<body>
<!--header section starts -->

<header>
	<h2 class="logo">Navia Vision</h2>
	<nav class="navigation">
		<a href="home.php">Home</a>
		<a href="about.html">About</a>
		<a href="profile.php">Profile</a>
		<a href="contac.html">Contact</a>
		<button class="btnLogin" onclick="gotologin()">Login</button>
		<button class="btnreg" onclick="gotoregister()">Register</button>
		
	</nav>
   </header>
   <script>
            function gotologin()
            {
                window.location.href="login.php";
            }
            </script>

            <script>
            function gotoregister()
            {
                window.location.href="register.php";
            }
            </script>

<!--header section ends-->

<div class="loginbox">
<div class="form-login">	
	<h2> Log In </h2>
</div>
	<form action="include/login.inc.php" method="POST">
<div class="inputbox">	
	<span class="icon"> </span>
	<input type="text" placeholder="email or username" name="email_username" required />

</div>
	<br>
<div class="inputbox">	
	<input type="password" placeholder="password" name="password" required />
	
</div>	
<br> 
	<button class="loginbttn" type="submit" name="login"> LOG IN </button>
<br>
<div class="remember">
<br>
<a href="#"> forgot password </a>
</div>
		<div class="registerlink"><br>
		
<span> not registered ? </span> <a href="register.html"> click here </a>

		</div>
	</form>
</div>


</body>

</html>
