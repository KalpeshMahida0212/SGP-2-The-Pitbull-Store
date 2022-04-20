<?php 
session_start();

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);

   ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Pitbull Store</title>
    <link rel="icon" sizes="114x114" href="image/logo.png">
    <!-- font awesome cdn link  -->
    <script src="https://kit.fontawesome.com/533c342336.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.2.4/css/simple-line-icons.min.css'>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/shop.css">
    <style>
        .home {
  min-height: 100vh;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: end;
      -ms-flex-pack: end;
          justify-content: flex-end;
  background: url(image/homee.jpg) no-repeat;
  background-position: center;
  background-size: cover;
  position: relative;
}
    </style>

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="index.php" class="logo"> <i class="fas fa-paw"></i> Pitbull Store</a>

    <nav class="navbar">
        <div class='mini'>
            <p class='products'>Empty</p>
            <p class='names'></p>
            <p class='miniprice'></p>
        </div>

        <a href="index.php">home</a>
        <a href="shop.php">Shop</a>
        <a href="services.php">Services</a>
        <a href="Subscriptions.php">Subscriptions</a>
        <a href="contact.php">Contact</a>
        <a href="about.php">About</a>
        <a href="blog.php">Blog</a>
        <div class="menu-container" style="margin-left: 65px;">
        <div class="menu-icon">
        <a href="#plan">Language</a>
          <div class="menu-list">
            <nav id="menu-nav">
              <a href="#">English</a>
              <a href="#">Hindi</a>
            </nav>
          </div>
        </div>
        </div>
        <a href="logout.php" style="margin-left:-7px">Logout</a>
    </nav>
    <div class="icons">
        <div class='cart icon-basket'><span class='number'>1</span>
     <div class="fas fa-user" style="padding-left: 10px !important;" id="login-btn"></div>
    </div>
</div>
</header>
<section class="home" id="home">

    <div class="content">
        <h3 style="color: white; font-size: 10em;">Shop</h3>
    
         
    </div>

    <img style="position: absolute;bottom: ;left: 0;width: 100%;height: 12rem;" src="image/bottom_wave.png" class="wave" alt="">

</section>
            
        <section class="shop" id="shop">

        <h1 class="heading"> our <span> products </span> </h1>

        <div class="box-container">

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                
            </div>
            <div class="image">
                <img src="image/product_01.jpg" alt="">
            </div>
            <div class="content">
                <h3 class='header1'>air-dried food</h3>
                <div class='btn' a href><a href="payment1.php"> Buy Now</div></a>
                <p class="price"> Rs.599/- </p>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                
            </div>
            <div class="image">
                <img src="image/product_02.jpg" alt="">
            </div>
            <div class="content">
                <h3 class='header1'>air-dried food</h3>
                <div class='btn' a href><a href="payment1.php"> Buy Now</div></a>
                <p class="price"> Rs.599/- </p>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                
            </div>
            <div class="image">
                <img src="image/product_03.jpg" alt="">
            </div>
            <div class="content">
                <h3 class='header1'>air-dried food</h3>
                <div class='btn' a href><a href="payment1.php"> Buy Now</div></a>
                <p class="price"> Rs.599/- </p>
            </div>
        </div>
        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                
            </div>
            <div class="image">
                <img src="image/product_04.jpg" alt="">
            </div>
            <div class="content">
                <h3 class='header1'>air-dried food</h3>
                <div class='btn' a href><a href="payment1.php"> Buy Now</div></a>
                <p class="price"> Rs.599/- </p>
            </div>
        </div>
        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                
            </div>
            <div class="image">
                <img src="image/product_05.jpg" alt="">
            </div>
            <div class="content">
                <h3 class='header1'>air-dried food</h3>
                <div class='btn' a href><a href="payment1.php"> Buy Now</div></a>
                <p class="price"> Rs.599/- </p>
            </div>
        </div>
        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                
            </div>
            <div class="image">
                <img src="image/product_06.jpg" alt="">
            </div>
            <div class="content">
                <h3 class='header1'>air-dried food</h3>
                <div class='btn' a href><a href="payment1.php"> Buy Now</div></a>
                <p class="price"> Rs.599/- </p>
            </div>
        </div>
        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                
            </div>
            <div class="image">
                <img src="image/product_01.jpg" alt="">
            </div>
            <div class="content">
                <h3 class='header1'>air-dried food</h3>
                <div class='btn' a href><a href="payment1.php"> Buy Now</div></a>
                <p class="price"> Rs.599/- </p>
            </div>
        </div>
        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                
            </div>
            <div class="image">
                <img src="image/product_02.jpg" alt="">
            </div>
            <div class="content">
                <h3 class='header1'>air-dried food</h3>
                <div class='btn' a href><a href="payment1.php"> Buy Now</div></a>
                <p class="price"> Rs.599/- </p>
            </div>
        </div>

        
    </div>
    <div class='quickviewContainer'>
  <div class='close'></div>
  <h2 class='headline'></h2>
  <p class='description'></p>
  <img src="image/product_01.jpg">
  <img src="image/product_02.jpg">
  <img src="image/product_03.jpg">
</div>
    </section>





<section class="footer">

    <img src="image/top_wave.png" alt="">

    <div class="share">
        <a href="#" class="btn"> <i class="fab fa-facebook-f"></i> facebook </a>
        <a href="#" class="btn"> <i class="fab fa-twitter"></i> twitter </a>
        <a href="#" class="btn"> <i class="fab fa-instagram"></i> instagram </a>
        
    </div>

    <div class="credit"> created with <i class="fa-solid fa-heart"></i> by <span>The Pitbull Store</span> | all rights reserved! </div>

</section>

<!-- custom js file link  -->
<script  src="js/shop.js"></script>
<script src="js/script.js"></script>


</body>
</html>