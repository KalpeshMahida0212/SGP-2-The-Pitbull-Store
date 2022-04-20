<?php 
session_start();

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);

   ?>
   <!--Saving the value to the database-->
   <?php
     if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted

        $user_name = $user_data['user_name'];
        $email = $_POST['email'];
       

       
            //save to database
           
            $query = "insert into newsletter (user_name,email) values ('$user_name','$email')";

            mysqli_query($con, $query);

             $message = "Your Response has been Recorded!";
  echo "<script type='text/javascript'>alert('$message');</script>";
  header("Location: index.php");

            die;
        }
        else{

        }
        
    
   
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
<!-- header section starts  -->


<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3 style="color: white">hi <span><?php echo $user_data['user_name']; ?>, welcome to The Pitbull Store</span> </h3>
        <a href="#" class="btn">shop now</a>
         
    </div>

    <img style="position: absolute;bottom: ;left: 0;width: 100%;height: 12rem;" src="image/bottom_wave.png" class="wave" alt="">

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <div class="image">
        <img src="image/unique.jpg" alt="">
    </div>

    <div class="content">
        <h3><span>Pitbull Store</span> India </h3>
        <p>Pitbull Store is the name that visions to comfort pets and pet parents by catering the market of pet essentials. We aim to reach at every doorstep around the globe & serve our cuddle buddies the best quality products. Our supplies range from all kinds of Food to Grooming,Clothing, Accessories, Utilities, Travel Gears & Innovative Toys. We aim to deliver what our pets crave for rather than what we want to serve. So, we make sure that our pet supplies fulfil all the standards of quality checks and protocols so that there’s no stop to joy in our little one’s life.</p>
        <a href="about.php" class="btn">read more</a>
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
        <p>Many vaccines can be given to pets as young as 6 weeks old, so talk to your vet about setting up the best vaccination schedule for your  dog or pup.</p>
        <div class="amount">Rs.2000-5000/-</div>
        <a href="vaccine.php"> <img src="image/shop_now_dog.png" alt=""> </a>
    </div>
 
</div>

<div class="cat-food">

    <div class="content">
        <h3> <span>Subscriptions</span></h3>
        <p>Subscribe with us to get all the essential facilities , which will keep owners like you carefree and your pets stressfree.</p>
        <div class="amount">Rs.499 - 9999/-</div>
        <a href="Subscriptions.PHP"> <img src="image/shop_now_dog.png" alt=""> </a>
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
            <i class="fas fa-heartbeat"></i>
            <h3>health care</h3>
            <a href="#" class="btn">read more</a>
        </div>

    </div>

</section>

<!-- services section ends -->







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