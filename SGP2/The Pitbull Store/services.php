<!-- services section starts  -->
<link rel="stylesheet" href="css/style.css">
 <!-- font awesome cdn link  -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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
<?php include_once 'header.php';?>
<section class="home" id="home">

    <div class="content">
        <h3 style="color: white; font-size: 10em;">Services</h3>
    
         
    </div>

    <img style="position: absolute;bottom: ;left: 0;width: 100%;height: 12rem;" src="image/bottom_wave.png" class="wave" alt="">

</section>

        
        <!-- home section ends -->
        <section class="services" id="services">

    <h1 class="heading"> our <span>services</span> </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-dog"></i>
            <h3>dog boarding</h3>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <i class="fas fa-cat"></i>
            <h3>cat boarding</h3>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <i class="fas fa-bath"></i>
            <h3>spa & grooming</h3>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <i class="fas fa-drumstick-bite"></i>
            <h3>healthy meal</h3>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <i class="fas fa-baseball-ball"></i>
            <h3>activity exercise</h3>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <i class="fas fa-heartbeat"></i>
            <h3>health care</h3>
            <a href="#" class="btn">read more</a>
        </div>
       
        <div class="box">
            <i class="fas fa-envelope"></i>
            <h3>News Letter</h3>
            <a href="#" class="btn">read more</a>
        </div>
        
        <div class="box">
            <i class="fas fa-bone"></i>
            <h3>Train</h3>
            <a href="#" class="btn">read more</a>
        </div>
    </div>
    
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
<!-- services section ends -->
