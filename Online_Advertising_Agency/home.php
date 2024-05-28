<?php
    session_start();
?>
<html>
<head>
<link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
<link rel="stylesheet" href="style/style.css">

        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

        <style>
            .footer {
                background: url("images/ft.jpg") no-repeat;
                background-size: cover;
                background-position: center;
}
.contactusbox{
    height:410px;
    margin-left:670px;
    margin-bottom:300px;
    font-size:20px;
    background-color:grey;
    background-size:cover;
    width:325px;
}
.inputbox{
    margin:10px;
    weight:300px;
    height:40px;
    border:2px solid black;
    width:305px;
    padding-left:10px;
}
.textarea{
    weight:300px;
    height:200px;
    border:2px solid black;
    margin:10px;
}
.submit{
    margin-left:130px;
    padding:10px;
    margin-bottom:20px;
}
.ask_me{
    font-size:30px;
    margin-left:770px;
}

        </style>
        
</head>
    <body>

        

        <!--header section starts -->

        <section class="header">

            <a href="home.html" class="logo">Navia Vision</a>

            <nav class="navbar">
                <a href="home.php">Home</a>
                <a href="about.html">About</a>
                <a href="profile.php">Profile</a>
                <a href="contactus.php">Contact</a>
                <?php
if(isset($_SESSION["username"])){
    echo '<a href="include/logout.inc.php"><button class="but1" onclick = "gotologin()">Log-Out</button></a>';
}else{
    echo '<a href="login.php" class="but1"><button class="but1" onclick = "gotologin()">Login</button></a>';
}?>
    
                <button class="but1" onclick = "gotoregister()">Register</button>


            </nav>

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

            

        </section>

        <!--header section ends-->

        <!--home section starts-->

        <section class="home">

            <div class="swiper home-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide slide" style="background:url(images/bc1.jpg) no-repeat">
                        <div class="content">
                            <span>Most creative international site</span>
                            <h3>Discover your agent</h3>
                            <a href="category.html" class="btn "> Discover more </a>
                        </div>
                    </div>

                    <div class="swiper-slide slide" style="background:url(images/bc2.jpg) no-repeat">
                        <div class="content">
                            <span>Most creative international site</span>
                            <h3>Design creative advertisement</h3>
                            <a href="category.html" class="btn "> Discover more </a>
                        </div>
                    </div>

                    <div class="swiper-slide slide" style="background:url(images/bc3.jpg) no-repeat">
                        <div class="content">
                            <span>Most creative international site</span>
                            <h3>get reliable service</h3>
                            <a href="category.html" class="btn "> Discover more </a>
                        </div>
                    </div>

                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </section>

        <!--home section ends-->

        <!--home most popular category starts-->

        <section class="home-category">
            <h1 class="heading-title">Most Popular Categories</h1>

            <div class="pop-container">
                <div class="pop">
                    <div class="image">
                        <img src="images/c2.jpg">

                    </div>
                    <div class="content">
                        <h3><a href="#" class="btn">Instagram Ads </a></h3>
                    </div>
                </div>

                <div class="pop">
                    <div class="image">
                        <img src="images/c3.jpg">

                    </div>
                    <div class="content">
                        <h3><a href="#"class="btn">YouTube Ads </a></h3>
                    </div>
                </div>

                <div class="pop">
                    <div class="image">
                        <img src="images/c1.jpg">

                    </div>
                    <div class="content">
                        <h3><a href="#"class="btn">Facebook Ads </a></h3>
                    </div>
                </div>

                
            </div>

            <div class="lode-more"><a href="packge.html" class="btn">See more</a></div>

        </section>


        <!--home most popular category ends-->

            <!--Ask me starts-->


  <h3 class="ask_me">Ask me</h3>

  <form action="include/contactus.inc.php" method="POST" class="contactusbox">
    <input type="text" id="name" name="uname" required class="inputbox" placeholder="Full Name"><br>

    <input type="email" id="email" name="uemail" required class="inputbox" placeholder="Email"><br>

    <label for="message">Your Message</label><br>
    <textarea id="message" name="discription" rows="5" cols="40" required class="textarea"></textarea><br>

    <input type="submit" value="Submit" class="submit">
  </form>



       <!--Ask me ends -->




        <!--footer section starts -->

        <section class="footer">
            <div class="box-cont">

                <div class="box">
                    <h3>Quick Links</h3>
                    <a href="home.php"> <i class="b"></i>home</a>
                    <a href="about.html"> <i class="b"></i>about</a>
                    <a href="category.html"> <i class="b"></i>category</a>
                    <a href="contactus.php"> <i class="b"></i>contact</a>
                </div>

                <div class="box">
                    <h3>Follow us</h3>
                    <a href="#"> <i class="a"></i>facebook</a>
                    <a href="#"> <i class="a"></i>twitter</a>
                    <a href="#"> <i class="a"></i>instagram</a>
                    <a href="#"> <i class="a"></i>youtube</a>
                </div>
            </div>
           
            

            <div class="credit">|2023 @ Navia Vision -All rights reserved|</div>

        </section>

        <!--footer section ends-->
       <script> // JavaScript source code
const swiper = new Swiper('.swiper', {
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
   
    loop: true,

    
    pagination: {
        el: '.swiper-pagination',
        cancelIdleCallback: true,
    },

    
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    
});
        
</script>
    </body>

</html>