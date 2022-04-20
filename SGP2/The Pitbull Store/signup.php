<!-- signup session starts  -->
<?php
    include("connection.php");
    include("functions.php");


    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted
        $first_name = $_POST['first_name'];
        $mobile_num = $_POST['mobile_num'];
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
        $password2 = $_POST['password2'];
        $email = $_POST['email'];   

        if($_POST["password"] !== $_POST["password2"])
        {
        $message = "Password does not match try again.";
  echo "<script type='text/javascript'>alert('$message');</script>";
        }

        elseif(!empty($user_name) && !empty($first_name)  && !empty($password) && !empty($email) && !empty($mobile_num))
        {

            //save to database
            $user_id = random_num(20);
            $query = "insert into users (user_id,user_name,first_name,mobile_num,password,email,password2) values ('$user_id','$user_name','$first_name','$mobile_num','$password','$email',$password2)";

            mysqli_query($con, $query);

            header("Location: login.php");
            die;
        }
        
         else {
            $message = "Please enter some valid information!";
  echo "<script type='text/javascript'>alert('$message');</script>";
            
        }
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
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!-- font awesome cdn link  -->
    <script src="https://kit.fontawesome.com/533c342336.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
        <link rel="stylesheet" href="css/icomoon.css">




    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/signup.css">
    <style>
        .home {
  min-height: 750px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: end;
      -ms-flex-pack: end;
          justify-content: flex-end;
  background: url(image/signup.jpg) no-repeat;
            
     object-fit:cover;
    background-position: center;
    position: relative;
}   
    </style>

</head>
<body style="width: 100% !important;">
    
<!-- header section starts  -->
<header class="header">

    <a href="index.php" class="logo"> <i class="fas fa-paw"></i> Pitbull Store</a>

    <nav class="navbar">

        <a href="index.php">home</a>
        <a href="shop.php">Shop</a>
        <a href="services.php">Services</a>
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
    
    </nav>

    <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <a href="login.php" class="fas fa-shopping-cart"></a>
        <div class="fas fa-user" id="login-btn"></div>
    </div>

    

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" style="width: 100%;" id="home">

    <form method="POST" class="register-form" id="register-form" style="width: 40%;height: auto;display: inline-block;">
        <h3 style="padding-bottom: 010px;">Sign Up</h3>
                            <div class="form-group">
                                <label style="padding-left: 2%;"  for="first_name"><i class="fa-solid fa-user"></i></label>
                                <input type="text" name="first_name" id="first_name" placeholder="Full Name"/>
                            
                                <label style="padding-left: 15%;" for="name"><i class="fa fa-user-circle-o" aria-hidden="true"></i></label>
                                <input type="text" name="user_name" id="user_name" placeholder="UserName"/>
                            </div>
                            <div class="form-group">
                                <label style="padding-left: 2%;"   for="mobile_num"><i class="fa fa-phone" aria-hidden="true"></i></label>
                                <input type="text" name="mobile_num" id="mobile_num" placeholder="Mobile Number"/>
                            
                                <label style="padding-left: 15%;" for="email"><i class="fa fa-envelope" aria-hidden="true"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label style="padding-left: 2%;" for="pass"><i class="fa fa-key" aria-hidden="true"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password"/>
                            
                                <label style="padding-left: 15%;" for="re-pass"><i class="fa fa-key" aria-hidden="true"></i></label>
                                <input type="password" name="password2" id="password2" placeholder="Repeat your password"/>
                            </div>
                            <div class="temp11" style="padding-left: 15%;">
                                <button style="width:350px;padding-left:;" type="submit"  name="signin" id="signin" class="form-submit" >Register</button>
                            </div>
                            <div class="social" style="padding-left:30%;">
                                
                                <div class="fb"><a href="login.php"> Login</div></a>
                        
                        </form>  
      

</section> 

<section class="footer" >


 

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