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
  background: url(image/home.jpg) no-repeat;
  background-position: center;
  background-size: cover;
  position: relative;
}
    </style>

</head>
<body>
    
<!-- header section starts  -->
<?php include_once 'navbar.php';?>



<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3> <span>hi</span> UserName, welcome to The Pitbull Store </h3>
        <a href="#" class="btn">shop now</a>
         
    </div>

    <img src="image/bottom_wave.png" class="wave" alt="">

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <div class="image">
        <img src="image/unique.jpg" alt="">
    </div>

    <div class="content">
        <h3><span>UNIQUE </span> AND <span> ORIGINAL</span></h3>
        <p>Pitbull store is a unique marketplace where you can find one of a kind products to pamper your pet friend.</p>
        <a href="#" class="btn">read more</a>
    </div>

</section>

<!-- about section ends -->

<!-- dog and cat food banner section starts -->

<div class="dog-food">

    <div class="image">
        <img src="image/vaccine.jpg" alt="">
    </div>

    <div class="content">
        <h3> <span>Vaccinations</span></h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat iure illo, repudiandae rem porro sunt.</p>
        <div class="amount">$15.00 - $30.00</div>
        <a href="#"> <img src="image/shop_now_dog.png" alt=""> </a>
    </div>

</div>

<div class="cat-food">

    <div class="content">
        <h3> <span>Subscriptions</span></h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat iure illo, repudiandae rem porro sunt.</p>
        <div class="amount">$15.00 - $30.00</div>
        <a href="#"> <img src="image/shop_now_dog.png" alt=""> </a>
    </div>

    <div class="image">
        <img src="image/grooming.jpg" alt="">
    </div>

</div>

<!-- dog and cat food banner section ends -->
<!-- services section starts  -->

<section class="services" id="services">

    <h1 class="heading"> our <span>services</span> </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-dog"></i>
            <h3>dog boarding</h3>
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

    </div>

</section>

<!-- services section ends -->
<?php include_once 'footer.php';?>








<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>