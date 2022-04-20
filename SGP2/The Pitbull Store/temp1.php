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
<!-- partial:index.partial.html -->
<nav>
  <div class='mini'>
    <p class='products'>Empty</p>
    <p class='names'></p>
    <p class='miniprice'></p>
  </div>
  <ul>
    <li>Home</li>
    <li>Webshop</li>
    <li>Contact</li>
  </ul>
  <div class='cart icon-basket'>
    <span class='number'>1</span>
  </div>
</nav>
<div class='container'>
  
  <div class='product'>
    <img src="image/product_02.jpg">
    <h2 class='header'>Product Name111</h2>
    <p class='description'>Pedigree is a complete and balanced food for your dog baby. Made with high quality ingredients, Pedigree provides puppies the 5 Signs of Good Health healthy skin and coat, strong bones and teeth, healthy digestive system, strong muscles and stronger immune system.</p>
    <p class='price'>231,-</p>
    <div class='btn'>Add to cart</div>
    <div class='quickview'>Quickview</div>
  </div>
  <div class='product'>
    <img src="image/product_03.jpg">
    <h2 class='header'>Product Name</h2>
    <p class='description'>Pedigree is a complete and balanced food for your dog baby. Made with high quality ingredients, Pedigree provides puppies the 5 Signs of Good Health healthy skin and coat, strong bones and teeth, healthy digestive system, strong muscles and stronger immune system.</p>
    <p class='price'>231,-</p>
    <div class='btn'>Add to cart</div>
    <div class='quickview'>Quickview</div>
  </div>
  <div class='product'>
    <img src="image/product_04.jpg">
    <h2 class='header'>Product Name</h2>
    <p class='description'>Pedigree is a complete and balanced food for your dog baby. Made with high quality ingredients, Pedigree provides puppies the 5 Signs of Good Health healthy skin and coat, strong bones and teeth, healthy digestive system, strong muscles and stronger immune system.</p>
    <p class='price'>231,-</p>
    <div class='btn'>Add to cart</div>
    <div class='quickview'>Quickview</div>
  </div>
  <div class='product'>
    <img src="image/product_05.jpg">
    <h2 class='header'>Product Name</h2>
    <p class='description'>Pedigree is a complete and balanced food for your dog baby. Made with high quality ingredients, Pedigree provides puppies the 5 Signs of Good Health healthy skin and coat, strong bones and teeth, healthy digestive system, strong muscles and stronger immune system.</p>
    <p class='price'>231,-</p>
    <div class='btn'>Add to cart</div>
    <div class='quickview'>Quickview</div>
  </div>
  <div class='product'>
    <img src="image/product_06.jpg">
    <h2 class='header'>Product Name</h2>
    <p class='description'>Pedigree is a complete and balanced food for your dog baby. Made with high quality ingredients, Pedigree provides puppies the 5 Signs of Good Health healthy skin and coat, strong bones and teeth, healthy digestive system, strong muscles and stronger immune system.</p>
    <p class='price'>231,-</p>
    <div class='btn'>Add to cart</div>
    <div class='quickview'>Quickview</div>
  </div>
  <div class='product'>
    <img src="image/product_01.jpg">
    <h2 class='header'>Product Name</h2>
    <p class='description'>Pedigree is a complete and balanced food for your dog baby. Made with high quality ingredients, Pedigree provides puppies the 5 Signs of Good Health healthy skin and coat, strong bones and teeth, healthy digestive system, strong muscles and stronger immune system.</p>
    <p class='price'>231,-</p>
    <div class='btn'>Add to cart</div>
    <div class='quickview'>Quickview</div>
  </div>
  <div class='product'>
    <img src="image/product_02.jpg">
    <h2 class='header'>Product Name</h2>
    <p class='description'>Pedigree is a complete and balanced food for your dog baby. Made with high quality ingredients, Pedigree provides puppies the 5 Signs of Good Health healthy skin and coat, strong bones and teeth, healthy digestive system, strong muscles and stronger immune system.</p>
    <p class='price'>231,-</p>
    <div class='btn'>Add to cart</div>
    <div class='quickview'>Quickview</div>
  </div>
  <div class='product'>
    <img src="image/product_03.jpg">
    <h2 class='header'>Product Name</h2>
    <p class='description'>Pedigree is a complete and balanced food for your dog baby. Made with high quality ingredients, Pedigree provides puppies the 5 Signs of Good Health healthy skin and coat, strong bones and teeth, healthy digestive system, strong muscles and stronger immune system.</p>
    <p class='price'>231,-</p>
    <div class='btn'>Add to cart</div>
    <div class='quickview'>Quickview</div>
  </div>
  <div class='product'>
    <img src="image/product_04.jpg">
    <h2 class='header'>Product Name</h2>
    <p class='description'>Pedigree is a complete and balanced food for your dog baby. Made with high quality ingredients, Pedigree provides puppies the 5 Signs of Good Health healthy skin and coat, strong bones and teeth, healthy digestive system, strong muscles and stronger immune system.</p>
    <p class='price'>231,-</p>
    <div class='btn'>Add to cart</div>
    <div class='quickview'>Quickview</div>
  </div>
  <div class='product'>
    <img src="image/product_05.jpg">
    <h2 class='header'>Product Name</h2>
    <p class='description'>Pedigree is a complete and balanced food for your dog baby. Made with high quality ingredients, Pedigree provides puppies the 5 Signs of Good Health healthy skin and coat, strong bones and teeth, healthy digestive system, strong muscles and stronger immune system.</p>
    <p class='price'>231,-</p>
    <div class='btn'>Add to cart</div>
    <div class='quickview'>Quickview</div>
  </div>
  <div class='product'>
    <img src="image/product_06.jpg">
    <h2 class='header'>Product Name</h2>
    <p class='description'>Pedigree is a complete and balanced food for your dog baby. Made with high quality ingredients, Pedigree provides puppies the 5 Signs of Good Health healthy skin and coat, strong bones and teeth, healthy digestive system, strong muscles and stronger immune system.</p>
    <p class='price'>231,-</p>
    <div class='btn'>Add to cart</div>
    <div class='quickview'>Quickview</div>
  </div>
  <div class='product'>
    <img src="image/cat_food.png">
    <h2 class='header'>Product Name</h2>
    <p class='description'>Pedigree is a complete and balanced food for your dog baby. Made with high quality ingredients, Pedigree provides puppies the 5 Signs of Good Health healthy skin and coat, strong bones and teeth, healthy digestive system, strong muscles and stronger immune system.</p>
    <p class='price'>231,-</p>
    <div class='btn'>Add to cart</div>
    <div class='quickview'>Quickview</div>
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
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
  <script  src="js/shop.js"></script>
  <section class="footer">

    <img src="image/top_wave.png" alt="">

    <div class="share">
        <a href="#" class="btn"> <i class="fab fa-facebook-f"></i> facebook </a>
        <a href="#" class="btn"> <i class="fab fa-twitter"></i> twitter </a>
        <a href="#" class="btn"> <i class="fab fa-instagram"></i> instagram </a>
        <a href="#" class="btn"> <i class="fab fa-linkedin"></i> linkedin </a>
        <a href="#" class="btn"> <i class="fab fa-pinterest"></i> pinterest </a>
    </div>

    <div class="credit"> created by <span>G4 </span> | all rights reserved! </div>

</section>

</body>
</html>