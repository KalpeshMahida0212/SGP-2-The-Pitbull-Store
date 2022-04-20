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
        <h3 class="lang" key="n6" style="color: white; font-size: 10em;">Vaccine</h3>
    
         
    </div>

    <img style="position: absolute;bottom: ;left: 0;width: 100%;height: 12rem;" src="image/bottom_wave.png" class="wave" alt="">

</section>
       
       <!-- home section ends -->
       <section class="plan" id="plan">

           <h1 class="heading"> choose a <span>type</span> </h1>
       
           <div class="box-container">
       
               <div class="box">
                   <h3 class="title">pet care</h3>
                   <h3 class="day"> For Small Dogs </h3>
                   <i class="fas fa-paw icon"></i>
                   <div class="list">
                       <p> 6 — 8 weeks <span class="fas fa-check"> Distemper, parvovirus</span> </p>
                       <p> 10 — 12 weeks <span class="fas fa-check"> DHPP</span> </p>
                       <p> 12 — 16 months <span class="fas fa-check"> DHPP, rabies</span> </p>
                       <p> 16 — 18 weeks <span class="fas fa-check"> DHPP, rabies</span> </p>
                   </div>
                   <div class="amount"><span>Rs.</span>3999/-</div>
                   <a href="payment3999.php" class="btn"> choose plan </a>
               </div>
       
               <div class="box">
                   <h3 class="title">pet care</h3>
                   <h3 class="day"> For Big Dogs </h3>
                   <i class="fas fa-dog icon"></i>
                   <div class="list">
                       <p> 6 — 8 weeks <span class="fas fa-check">  canine distemper virus</span>  </p>
                       <p> 10 — 12 weeks <span class="fas fa-check">  canine parvovirus</span>  </p>
                       <p> 12 — 16 months <span class="fas fa-check">  canine adenovirus-2 </span> </p>
                       <p> 16 — 18 weeks <span class="fas fa-check">  rabies virus</span> </p>
                   </div>
                   <div class="amount"><span>Rs.</span>9999/-</div>
                   <a href="payment9999.php" class="btn"> choose plan </a>
               </div>
       
               <div class="box">
                   <h3 class="title">pet care</h3>
                   <h3 class="day"> Optional Vaccines </h3>
                   <i class="fas fa-syringe icon"></i>
                   <div class="list">
                       <p> 6 — 8 weeks <span class="fas fa-check"> Bordetella</span> </p>
                       <p> 10 — 12 weeks <span class="fas fa-check"> Influenza, Leptospirosis</span> </p>
                       <p> 12 — 16 months <span class="fas fa-check"> Lyme disease</span> </p>
                       <p> 16 — 18 weeks <span class="fas fa-check"> Coronavirus, Leptospirosis</span> </p>
                   </div>
                   <div class="amount"><span>Rs.</span>499/-</div>
                   <a href="payment499.php" class="btn"> choose plan </a>
               </div>
       
           </div>
       
       </section>
       
       <!-- plan section ends -->
        </section>
       <section class="footer">

           <img src="image/top_wave.png" alt="">
       
           <div class="share">
               <a href="#" class="btn"> <i class="fab fa-facebook-f"></i> facebook </a>
               <a href="#" class="btn"> <i class="fab fa-twitter"></i> twitter </a>
               <a href="#" class="btn"> <i class="fab fa-instagram"></i> instagram </a>
               <a href="#" class="btn"> <i class="fab fa-linkedin"></i> linkedin </a>
               <a href="#" class="btn"> <i class="fab fa-pinterest"></i> pinterest </a>
           </div>
       
           <div class="credit"> created by <span> mr. web designer </span> | all rights reserved! </div>
       
       </section>
       
       <script src="js/script.js"></script>
</body>
</html>

