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

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
     <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!-- Flexslider  -->
    <link rel="stylesheet" href="css/flexslider.css">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    
    <!-- Date Picker -->
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <!-- Flaticons  -->
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
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
<body style=  "background: url(image/tempp.jpg) no-repeat;">
    
<!-- header section starts  -->

<header class="header">

    <a href="index.php" class="logo"> <i class="fas fa-paw"></i> Pitbull Store</a>

    <nav class="navbar">

        <a href="index.php">home</a>
        <a href="#about">Shop</a>
        <a href="#shop">Services</a>
        <a href="#services">Contact</a>
        <a href="#plan">About</a>
        <a href="#plan">Blog</a>
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
        <div class="fas fa-bars" id="menu-btn"></div>
        <a href="login.php" class="fas fa-shopping-cart"></a>
        <div class="fas fa-user" style="padding-left: 10px !important;" id="login-btn"></div>
    </div>

    

    



</header>
<section class="home" id="home">

    <div class="content">
        <h3 style="color: white; font-size: 10em;"><?php echo $user_data['user_name']; ?></h3>
    
         
    </div>

    <img style="position: absolute;bottom: ;left: 0;width: 100%;height: auto;" src="image/bottom_wave.png" class="wave" alt="">
    
</section>
    
<!-- Content  -->

 <div class="container-fluid">

                    <div class="row" >
                    <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                        
                  <div class="container-login" style="margin-left: -80px; margin-top:50px;height:550px;background-image: url(image/tempp.jpg); ">
                    <div class="signup-content" style="margin-left: 200px;">
                    <div class="signup-form">
                        <h1 class="form-title lang" key="acin" >Account Information</h1>
                        <form class="register-form" id="">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account-circle"></i></label>
                                <input  placeholder="<?php echo $user_data['user_name']; ?>"readonly>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="email" name="email" id="email" placeholder="<?php echo $user_data['first_name']; ?>"readonly>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-smartphone-android"></i></label>
                                <input placeholder="<?php echo $user_data['mobile_num']; ?>"readonly>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="<?php echo $user_data['email']; ?>"readonly>
                            </div>          
                        </form>
                    </div>
                    
                </div>
            </div>
            </div>       

                    </div>
                </div>

<br><br><br>



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
<script src="js/script.js"></script>

</body>
</html>