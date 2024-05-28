<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" Content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Registration page</title>
        <link rel="stylesheet" href="style/register-singup.css">
<style>
    body{
    background-image: url('images/final.jpg');
    background-position: right top;
    overflow-x: hidden;
    min-height: 100vh;
    width:100vw;
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

        <!--form section start-->
        <div class="form">
            <form action="include/signup.inc.php" mathod="Post">
                <h2 class="head"><b>User Register</b></h2><br>
                <div class="form-group">
                <label>First name:</label>
                </div>
                <div class="form-group">
                <input type="text" name="firstname"  required><br>
                </div>
                <div class="form-group">
                <label>Last name:</label>
                <input type="text" name="lastname"  required><br>
                </div>
                <div class="form-group">
                <label>Email:</label>
                <input type="text" name="email" required><br>
                </div>
                <div class="form-group">
                <label>Password</label>
                </div>
                <div class="form-group">
                <input type="text" name="password"  required><br>
                </div>
                <div class="form-group">
                    <label>Confirm Password:</label>
                <input type="text" name="confirmpassword" required><br>
                </div>
               <div class="reg">
                <button type="submit" name="submit">Register</button>
                </div>
            </form>
        </div>

        <!--form section end-->

        <!--text box section-->
        <div class="box-a">
            <div class="text-box">
            <h2><b>WElCOME TO NAVIA VISION,<h3>WHERE SUCCESS IS JUST A CLICK AWAY..</h3></b></h2></div>
            <p><b>We are glad you are here at our Navia Vision online advertising agency, where your digital
                dreams become reality! We are an innovative and dedicated team that assists your business in
                a fast-forward way.
                At our agency, we create customized campaigns that are suited to your particular business
                projects, and we have the expertise of advertisement creators to take you to new heights,
                whether you are an established company.
                Contact us today. We can build a digital presence that distinguishes you from the competition
                and engages your target market.</b><br><br>
              </p>
             <h4>Already registered? <a href="www.singin.com">Sing in here</a></h4>
            </div>
            <!--text box section end-->
           
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