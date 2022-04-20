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
<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
    
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

    <!-- Theme style  -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>

    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->



    <script src="jquery-3.2.1.m.js"></script>
    <script src="js/bootstrap.js"></script>
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
        <h3 class="lang" key="n6" style="color: white; font-size: 10em;">About</h3>
    
         
    </div>

    <img style="position: absolute;bottom: ;left: 0;width: 100%;height: 12rem;" src="image/bottom_wave.png" class="wave" alt="">

</section>
    
<!-- Content  -->
<div id="Beyonsky-about">
            <div class="container">
                <div class="row">
                    <div class="about-flex">
                        <div class="col-one-forth aside-stretch animate-box">
                            <div class="row">
                                <div class="col-md-12">
                                

                                    
                                </div>
                            </div>
                        </div>
<!------------------------------------------------------------------History of our website---------------------------------------------->
                        <div class="col-three-forth animate-box">
                            <h2 class="lang" key="hist">History</h2>
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="lang" key="abt2">ur Vision
Our dreams are alike in terms of adorning our four-legged family. To take it further, we envision an approach that’s paw-some in its own ways. Happiness, comfort & support, these are our royalties, our pillars on which we stand to be there for our pet's every need. We feel paw-sitive to be able to build a society for our pets and create the world a better place for them.

Our Mission
We are the strong support for pet parents whose dream matches with ours. And our world relies on providing the best to our pets therefore, we cater to the sectors like grooming, accessories, food and more for our four-legged family. Our pet first approach makes us work longer and better and we are surely on the right path. It feels paw-some to even talk about pets. Even best to work for them. </p>

                                    

                                    <div class="row row-pb-sm">
                                        <div class="col-md-6">
                                            <img style="border-radius: 50%;" class="img-responsive" src="image/21.jpg" alt="">
                                        </div>
                                        <div class="col-md-6">
                                            <p class="lang" key="abt3">Cares Like a Parent
We love the way your little one loves you
We crave to see our dears healthy & work our ways to keep it like that
Just like a parent to your pet, we’ll make their lives cheerful 
We’ll keep on creating products that will make your life easier and theirs happier
Click Away Delivery
We cater to the deliveries across Pan-India
We refuse the no-show game, committed to being punctual
You can track your deliverables at any time you want
We dig to that excited face when your Dear Pet products arrive
With You Like a Pen-Pal
First-time parents or experienced, here we are to answer all your queries
We care less about the money & more about the pets
An affordable range that fulfils your pet’s every necessity
Our online pet store is now open, explore from the shortlisted range</p>
                                            
                                        </div>
                                    </div>
                                </div>
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
    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="js/jquery.waypoints.min.js"></script>
    <!-- Flexslider -->
    <script src="js/jquery.flexslider-min.js"></script>
    <!-- Owl carousel -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- Magnific Popup -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>
    <!-- Date Picker -->
    <script src="js/bootstrap-datepicker.js"></script>
    <!-- Stellar Parallax -->
    <script src="js/jquery.stellar.min.js"></script>
    <!-- Main -->
    <script src="js/main.js"></script>
    <script src="js/script.js"></script>

</body>
</html>