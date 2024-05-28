<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" >
    <title>Document</title>
    <meta name="viewport" content=" width=device-width,initial-scale=1.0" >
    <link rel="stylesheet" href="style/contactus.css">
   

    <style>
        body{
    background-image:url("images/mountain.jpg");
    margin:0;
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
		<a href="contacus.hphp">Contact</a>
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

    <div id="overlay">
        <from action="include/contactus.inc.php" method="post">
            <h1>Contact us</h1>

            <label for="name">Name:</label>
            <input type="text" id="name" placeholder="your name" name ="uname">
            <small class="error"></small>

            <label for="email">Email:</label>
            <input type="text" id="Email" placeholder="your email" name ="uemail">
            <small class="error"></small>

            <label for="message">Message:</label>
            <textarea id="message" placeholder="your message " rows="6" name ="discription"></textarea>
            <small class="error"></small>

            <div class="center">
                <input type="submit" value="Send Message" name ="submit" onclick="alert('Successfully send message !')">
                <p id="success"></p>
            </div>
        </from>
    </div>
    <!--footer section starts -->

<section class="footer">
    <div class="box-container">

        <div class="box">
            <h3>Quick Links</h3>
            <a href="home.php"> <i class="fas fa-angle-right"></i>Home</a>
            <a href="about.html"> <i class="fas fa-angle-right"></i>About</a>
            <a href="category.html"> <i class="fas fa-angle-right"></i>Categories</a>
            <a href="contactus.php"> <i class="fas fa-angle-right"></i>Contact</a>
        </div>

        <div class="box">
            <h3>Follow us</h3>
            <a href="#"> <i class="fas fa-facebook"></i>Facebook</a>
            <a href="#"> <i class="fas fa-twitter"></i>Twitter</a>
            <a href="#"> <i class="fas fa-instagram"></i>Instagram</a>
            <a href="#"> <i class="fas fa-youtube"></i>Youtube</a>
        </div>
    </div>
   
    

    <div class="credit">|2023 @ Navia Vision -All rights reserved|</div>

</section>

<!--footer section ends-->


</body>
</html>