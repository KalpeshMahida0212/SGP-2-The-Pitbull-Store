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
<body>
    
<!-- header section starts  -->

<?php include_once 'header.php';?>
<section class="home" id="home">

    <div class="content">
        <h3 style="color: white; font-size: 6em;">Contact Us</h3>
    
         
    </div>

    <img style="position: absolute;bottom: ;left: 0;width: 100%;height: 12rem;" src="image/bottom_wave.png" class="wave" alt="">

</section>
    
<div id="Beyonsky-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 animate-box">
                    <p style="font-size: 50px;" class="lang" key="cs2">Get in Touch</p>
                        <form method="POST1" class="register-form" id="register-form">
                            <div class="row form-group">
                                <div class="col-md-6 padding-bottom">
                                
                                <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Firstname"/>
                                </div>
                                <div class="col-md-6">
                                
                                <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last name"/>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                
                                <input type="text" class="form-control" name="email" id="email" placeholder="Email"/>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"/>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                
                                <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Say something about us"></textarea>
                                </div>
                            </div>

                            <div class="form-group form-button" style="margin-top: -50px;"><br><br>
                                <input type="submit" name="signup" id="signup" class="form-submit btn btn-primary" value="Submit"/>
                            </div>
                        </form>     
                    </div>

                    <!-- Contact Information below the form -->
                    <div class="col-md-10 col-md-offset-1 animate-box">
                        <center><h3 class="lang" key="cs8">Contact Information</h3></center>
                        <div class="row contact-info-wrap">
                            <div class="col-md-3">
                                <p><span><i class="icon-location"></i></span> Suite 721 Mumbai BOM 400001 <br></p>
                            </div>
                            <div class="col-md-3">
                                <p><span><i class="icon-phone3"></i></span> <a href="#"> +91 7016 801 305</a></p>
                            </div>
                            <div class="col-md-3">
                                <p><span><i class="icon-paperplane"></i></span> <a href="mailto:info@pitbullstore.com">Pitbullstoreinfo.com</a></p>
                            </div>
                            <div class="col-md-3">
                                <p><span><i class="icon-globe"></i></span><a href="#">Pitbullstore.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>







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