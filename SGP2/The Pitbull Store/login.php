<?php
session_start();
    include("connection.php");
    include("functions.php");

    //Saving the value to the database
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];

        //Checking the username and password entered by the user
        if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
        {

            //read from database
            $query = "select * from users where user_name = '$user_name' limit 1";
            $result = mysqli_query($con, $query);

            if($result)
            {
                if($result && mysqli_num_rows($result) > 0)
                {

                    $user_data = mysqli_fetch_assoc($result);
                    
                    if($user_data['password'] === $password)
                    {

                        $_SESSION['user_id'] = $user_data['user_id'];
                        header("Location: index.php");
                        die;
                    }
                }
            }
            
           $message = "Username or Password incorrect.Try again.";
           echo "<script type='text/javascript'>alert('$message');</script>";
        }
        
        else
        {
            $message = "Username or Password incorrect.Try again.";
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

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/loginstyle.css">
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
  background: url(image/login1.jpg) no-repeat;
  background-position: center;
  background-size: cover;
  position: relative;
}
    </style>

</head>
<body>
    
<!-- header section starts  -->
<?php include_once 'header.php';?>


<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

     
        <form method="POST" class="register-form" id="login-form">
            <h3>Login Here</h3>

            <label style="padding-left: 10px !important;" for="user_name">Username</label>
            <input style="padding-left: 12px; margin-left: 10px !important; padding-right: 10px !important;" type="text" name="user_name" id="user_name" placeholder="Username"/>

            <label style="padding-left: 10px !important;" for="password">Password</label>
            <input  style="padding-left: 12px; margin-left: 10px !important; padding-right: 10px !important;" type="password" name="password" id="password" placeholder="Password"/>
    
            <button style="margin-left: 20px;width:350px; " type="submit"  name="signin" id="signin" class="form-submit" >Log In</button>
            <div class="social" style="padding-left: 24%;">
            <div class="fb"><a href="signup.php">  Sign up</a></div>
            </div>
        </form>
    
    

</section>



<section class="footer">

    

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