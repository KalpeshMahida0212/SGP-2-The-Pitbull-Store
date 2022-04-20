<?php 
session_start();
    include("connection.php");
    include("functions.php");
    $user_data = check_login($con);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Pitbull Store</title>
    <link rel="icon" sizes="114x114" href="image/logo.png">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

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
<!--    languages-->

    
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

<?php include_once 'header1.php';?>
<section class="home" id="home">

    <div class="content">
        <h3 class="lang" key="lol" style="color: white; font-size: 10em;">Blog</h3>
    
         
    </div>

    <img style="position: absolute;bottom: ;left: 0;width: 100%;height: 12rem;" src="image/bottom_wave.png" class="wave" alt="">

</section>
    <br> <br> <br> <br> <br> <br>
<!-- Content  -->
<div id="Beyonsky-blog">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="wrap-division">
                            <article class="animate-box">
                                <div class="blog-img" style="background-image: url(image/blog3.jpeg);"></div>
                                <div class="desc">
                                    <div class="meta">
                                        <p >
                                            <span>Sept 24, 2021 </span>
                                            <span>Jekeel Sharma</span>
                                            
                                        </p>
                                    </div>
                                    <h2><a class="lang" key="b2"href="#">Dogs and chocolate</a></h2>
                                    <p class="lang" key="hm1">
If a dog eats a dose of 9 milligrams per pound of body weight, then they are at risk of chocolate poisoning. Different types of chocolate contain different amounts of theobromine. For instance, cooking chocolate and dark chocolate contain lots of theobromine.
<br>

We’ve spent each day for months longing for travel. Attempting to decide if it was safe, if it was the socially responsible thing to do.. …We’ve studied vaccination rates and we’ve studied the U.S. State department website until we exhausted all the information. In the end we selected a country where many residents have been vaccinated -- since we have been vaccinated and since we trust science... here we go....after all, it had been 560 days since we arrived back home after arguably one of our best voyages to Antarctica.</p>
                                </div>
                            </article>
                            <article class="animate-box">
                                <div class="blog-img" style="background-image: url(images/blog2.jpeg);"></div>
                                <div class="desc">
                                    <div class="meta">
                                        <p>
                                            <span >Feb 02, 2022 </span>
                                            <span>Kartik Kishore</span>
                                            
                                        </p>
                                    </div>
                                    <h2><a class="lang" key="b4" href="#">Silver Lab – The Facts About Silver Labrador Retrievers</a></h2>
                                    <p class="lang" key="b5">he Silver Lab is lively, fun and friendly. A great family pet, ideal for active homes. What makes the silver Labrador extra special is the dilute gene, which turns their chocolate fur into a pale silvery gray. But that attractive silver coat is also surprisingly controversial!Even if your dog seems fine at the time, it may be that urgent treatment is needed to stop him from becoming unwell. So, if you are in any doubt about whether your dog may have eaten some chocolate, it is always safest to call the nearest open veterinary clinic for advice. Your veterinarian will be able to calculate if your dog has eaten enough theobromine to cause a problem and guide you through what treatment, if any, is needed.</p>
                                </div>
                            </article>
                            <article class="animate-box">
                                <div class="blog-img" style="background-image: url(images/blog3.jpeg);"></div>
                                <div class="desc">
                                    <div class="meta">
                                        <p>
                                            <span>March 16, 2022 </span>
                                            <span>Mr.Chow</span>
                                            
                                        </p>
                                    </div>
                                    <h2><a class="lang" key="b6" href="#">What Is A Double Coated Dog?</a></h2>
                                    <p class="lang" key="b7">A double coated dog has two types of fur in their coat. A soft, dense under layer and a longer, coarser outer layer. Double coats protect dogs from extremes of temperature, water, and injuries. But they tend to shed profusely, and need a lot of brushing. Almost all Labradors have double coats. Some of the double coated dogs include , labrador , golden retriever , huskies , shiba inu , corgis etc</p>
                                </div>
                            </article>
                        </div>
                        
                    </div>

                    <div class="col-md-4">
                        <div class="sidebar-wrap">
                            <div class="side animate-box">
                                <h3 class="lang" key="b8"class="sidebar-heading">Recent Post</h3>
                                <div class="blog-entry-side">
                                    <a href="blog.php" class="blog-post">
                                        <span class="img" style="background-image: url(images/blog-1.jpg);"></span>
                                        <div class="desc">
                                            <span class="date">Jan 24, 2022</span>
                                            <h3 class="lang" key="b9">Dogs and chocolate</h3>
                                            <span class="cat">Dogs-care</span>
                                        </div>
                                    </a>
                                </div>
                                <br><br>
                                <div class="blog-entry-side" >
                                    <a href="blog.php" class="blog-post">
                                        <span class="img" style="background-image: url(images/blog2.jpeg);"></span>
                                        <div class="desc" id="#1">
                                            <span class="date">Feb 02, 2022</span>
                                            <h3 class="lang" key="b10">Silver Lab – The Facts About Silver Labrador Retrievers</h3>
                                            <span class="cat">Dogs-info</span><br>
                                        </div>
                                    </a>
                                </div><br><br>
                                <div class="blog-entry-side">
                                    <a href="blog.php" class="blog-post">
                                        <span class="img" style="background-image: url(images/blog3.jpeg);"></span>
                                        <div class="desc" id="1">
                                            <span class="date">March 16, 2022</span>
                                            <h3 class="lang" key="b11">What Is A Double Coated Dog?</h3>
                                            <span class="cat">Dogs-info</span>
                                        </div>
                                    </a>
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
<script src="js/script.js"></script>
<script type="text/javascript">
        var arrLang = new Array();
        arrLang['en'] = new Array();
        arrLang['hi'] = new Array();
        arrLang['en']['lol'] = 'Flight';
        arrLang['hi']['lol'] = 'परिवहन';
        $(document).ready(function (e) {
            $('.translate').click(function () {
                var lang = $(this).attr('id');

                $('.lang').each(function (index,element) {
                    $(this).text(arrLang[lang][$(this).attr('key')]);
                });
            });
        });
    </script>
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

</body>
</html>