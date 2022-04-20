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
        <h3 class="lang" key="b1" style="color: white; font-size: 10em;">Blog</h3>
    
         
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
                                            <span class="lang" key="d1">Sept 24, 2021 </span>
                                            <span class="lang" key="n1">Jekeel Sharma</span>
                                            
                                        </p>
                                    </div>
                                    <h2><a class="lang" key="b2"href="#">Dogs and chocolate</a></h2>
                                    <p class="lang" key="b3">
If a dog eats a dose of 9 milligrams per pound of body weight, then they are at risk of chocolate poisoning. Different types of chocolate contain different amounts of theobromine. For instance, cooking chocolate and dark chocolate contain lots of theobromine.
<br>

We’ve spent each day for months longing for travel. Attempting to decide if it was safe, if it was the socially responsible thing to do.. …We’ve studied vaccination rates and we’ve studied the U.S. State department website until we exhausted all the information. In the end we selected a country where many residents have been vaccinated -- since we have been vaccinated and since we trust science... here we go....after all, it had been 560 days since we arrived back home after arguably one of our best voyages to Antarctica.</p>
                                </div>
                            </article><br><br>
                            <article class="animate-box">
                                <div class="blog-img" style="background-image: url(images/blog2.jpeg);"></div>
                                <div class="desc">
                                    <div class="meta">
                                        <p>
                                            <span class="lang" key="d2" >Feb 02, 2022 </span>
                                            <span class="lang" key="n2">Kartik Kishore</span>
                                            
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
                                            <span class="lang" key="d3">March 16, 2022 </span>
                                            <span class="lang" key="n3">Mr.Chow</span>
                                            
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
                                <h3 class="lang" key="r1"class="sidebar-heading">Recent Post</h3>
                                <div class="blog-entry-side">
                                    <a href="blog.php" class="blog-post">
                                        <span class="img" style="background-image: url(images/blog-1.jpg);"></span>
                                        <div class="desc">
                                            <span class="date lang" key="d1">Jan 24, 2022</span>
                                            <h3 class="lang" key="b2">Dogs and chocolate</h3>
                                            <span class="cat lang" key="dc">>Dogs-care</span>
                                        </div>
                                    </a>
                                </div>
                                <br><br>
                                <div class="blog-entry-side" >
                                    <a href="blog.php" class="blog-post">
                                        <span class="img" style="background-image: url(images/blog2.jpeg);"></span>
                                        <div class="desc" id="#1">
                                            <span class="date lang" key="d2">">Feb 02, 2022</span>
                                            <h3 class="lang" key="b4">Silver Lab – The Facts About Silver Labrador Retrievers</h3>
                                            <span class="cat lang" key="di">Dogs-info</span><br>
                                        </div>
                                    </a>
                                </div><br><br>
                                <div class="blog-entry-side">
                                    <a href="blog.php" class="blog-post">
                                        <span class="img" style="background-image: url(images/blog3.jpeg);"></span>
                                        <div class="desc" id="1">
                                            <span class="date lang" key="d3">>March 16, 2022</span>
                                            <h3 class="lang" key="b6">What Is A Double Coated Dog?</h3>
                                            <span class="cat lang" key="di">>Dogs-info</span>
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
        <a href="#" class="btn lang" key="fb"> <i class="fab fa-facebook-f"></i> facebook </a>
        <a href="#" class="btn lang" key="tw"> <i class="fab fa-twitter"></i> twitter </a>
        <a href="#" class="btn lang" key="in"> <i class="fab fa-instagram"></i> instagram </a>
        
    </div>

    <div class="credit lang" key="f1"> created with <i class="fa-solid fa-heart"></i> by <span>The Pitbull Store</span> | all rights reserved! </div>

</section>

<script src="js/script.js"></script>
<script type="text/javascript">
        var arrLang = new Array();
        arrLang['en'] = new Array();
        arrLang['hi'] = new Array();
        arrLang['en']['b1'] = 'Blog';
        arrLang['en']['d1'] = 'Sept 24, 2021';
        arrLang['en']['n1'] = 'Jekeel Sharma';
        arrLang['en']['b2'] = 'Dogs And Chocolate';
        arrLang['en']['b3'] = 'If A Dog Eats A Dose Of 9 Milligrams Per Pound Of Body Weight, Then They Are At Risk Of Chocolate Poisoning. Different Types Of Chocolate Contain Different Amounts Of Theobromine. For Instance, Cooking Chocolate And Dark Chocolate Contain Lots Of Theobromine.Weve Spent Each Day For Months Longing For Travel. Attempting To Decide If It Was Safe, If It Was The Socially Responsible Thing To Do.. …We’ve Studied Vaccination Rates And We’ve Studied The U.S. State Department Website Until We Exhausted All The Information. In The End We Selected A Country Where Many Residents Have Been Vaccinated -- Since We Have Been Vaccinated And Since We Trust Science... Here We Go....After All, It Had Been 560 Days Since We Arrived Back Home After Arguably One Of Our Best Voyages To Antarctica.';
        arrLang['en']['d2'] = 'Feb 02, 2022';
        arrLang['en']['n2'] = 'Kartik Kishore';
        arrLang['en']['b4'] = 'Silver Lab – The Facts About Silver Labrador Retrievers';
        arrLang['en']['b5'] = 'he Silver Lab is lively, fun and friendly. A great family pet, ideal for active homes. What makes the silver Labrador extra special is the dilute gene, which turns their chocolate fur into a pale silvery gray. But that attractive silver coat is also surprisingly controversial!Even if your dog seems fine at the time, it may be that urgent treatment is needed to stop him from becoming unwell. So, if you are in any doubt about whether your dog may have eaten some chocolate, it is always safest to call the nearest open veterinary clinic for advice. Your veterinarian will be able to calculate if your dog has eaten enough theobromine to cause a problem and guide you through what treatment, if any, is needed.';
        arrLang['en']['d3'] = 'March 16, 2022';
        arrLang['en']['n3'] = 'Mr.Chow';
        arrLang['en']['b6'] = 'What Is A Double Coated Dog?';
        arrLang['en']['b7'] = 'A double coated dog has two types of fur in their coat. A soft, dense under layer and a longer, coarser outer layer. Double coats protect dogs from extremes of temperature, water, and injuries. But they tend to shed profusely, and need a lot of brushing. Almost all Labradors have double coats. Some of the double coated dogs include , labrador , golden retriever , huskies , shiba inu , corgis etc';
        arrLang['en']['r1'] = 'Recent Post';
        arrLang['en']['dc'] = 'Dogs-care';
        arrLang['en']['di'] = 'Dogs-info';
        arrLang['en']['fb'] = 'Facebook';
        arrLang['en']['in'] = 'Instagram';
        arrLang['en']['tw'] = 'Twitter';
        arrLang['en']['n1'] = 'Home';
        arrLang['en']['n2'] = 'Shop';
        arrLang['en']['n3'] = 'Services';
        arrLang['en']['n4'] = 'Subscriptions';
        arrLang['en']['n5'] = 'Contact';
        arrLang['en']['n6'] = 'About';
        arrLang['en']['n7'] = 'Blog';
        arrLang['en']['n8'] = 'Language';
        arrLang['en']['n9'] = 'Logout';
        arrLang['en']['f1'] = 'Created With  By The Pitbull Store | All Rights Reserved!';


        arrLang['hi']['b1'] = 'ब्लॉग';
        arrLang['hi']['d1'] = '24 सितंबर, 2021';
        arrLang['hi']['n1'] = 'जेकील शर्मा';
        arrLang['hi']['b2'] = 'कुत्ते और चॉकलेट';
        arrLang['hi']['b3'] = 'अगर कोई कुत्ता शरीर के वजन के 9 मिलीग्राम प्रति पौंड की खुराक खा ले तो उसे चॉकलेट जहर का खतरा होता है। विभिन्न प्रकार के चॉकलेट में थियोब्रोमाइन की अलग-अलग मात्रा होती है। उदाहरण के लिए, चॉकलेट और डार्क चॉकलेट    किया है और हमने अमेरिकी विदेश विभाग की वेबसाइट का अध्ययन तब तक किया है जब तक कि हम सभी जानकारी समाप्त नहीं कर लेते। अंत में हमने एक ऐसे देश का चयन किया जहां कई निवासियों को टीका लगाया गया है - चूंकि हमें टीका लगाया गया है और चूंकि हम विज्ञान पर भरोसा करते हैं ... यहां हम जाते हैं ... आखिरकार, 560 दिन हो गए थे जब हम तर्क के बाद घर वापस आए थे अंटार्कटिका के लिए हमारी सर्वश्रेष्ठ यात्राओं में से एक।';
        arrLang['hi']['d2'] = 'फरवरी 02, 2022';
        arrLang['hi']['n2'] = 'कार्तिक किशोर';
        arrLang['hi']['b4'] = 'सिल्वर लैब - सिल्वर लैब्राडोर रिट्रीवर्स के बारे में तथ्य';
        arrLang['hi']['b5'] = 'वह सिल्वर लैब जीवंत, मज़ेदार और मिलनसार है। एक महान परिवार पालतू, सक्रिय घरों के लिए आदर्श। जो चीज सिल्वर लैब्राडोर को अतिरिक्त विशेष बनाती है वह है पतला जीन, जो उनके चॉकलेट फर को एक हल्के चांदी के भूरे रंग में बदल देता है। लेकिन वह आकर्षक चांदी का कोट भी आश्चर्यजनक रूप से विवादास्पद है! भले ही आपका कुत्ता उस समय ठीक लग रहा हो, हो सकता है कि उसे अस्वस्थ होने से रोकने के लिए तत्काल उपचार की आवश्यकता हो। इसलिए, यदि आप इस बारे में किसी भी संदेह में हैं कि क्या आपके कुत्ते ने कुछ चॉकलेट खाई है, तो सलाह के लिए निकटतम खुले पशु चिकित्सा क्लिनिक को कॉल करना हमेशा सुरक्षित होता है। आपका पशुचिकित्सक यह गणना करने में सक्षम होगा कि क्या आपके कुत्ते ने समस्या पैदा करने के लिए पर्याप्त थियोब्रोमाइन खा लिया है और आपको किस उपचार, यदि कोई हो, की आवश्यकता है, के बारे में मार्गदर्शन करेगा।';
        arrLang['hi']['d3'] = '16 मार्च 2022';
        arrLang['hi']['n3'] = 'श्री चाउ';
        arrLang['hi']['b6'] = 'एक डबल लेपित कुत्ता क्या है?';
        arrLang['hi']['b7'] = 'डबल कोट वाले कुत्ते के कोट में दो तरह के फर होते हैं। एक नरम, घनी परत के नीचे और एक लंबी, मोटे बाहरी परत। डबल कोट कुत्तों को अत्यधिक तापमान, पानी और चोटों से बचाते हैं। लेकिन वे बहुत अधिक बहाते हैं, और उन्हें ब्रश करने की बहुत आवश्यकता होती है। लगभग सभी लैब्राडोर में डबल कोट होते हैं। डबल कोटेड कुत्तों में से कुछ में लैब्राडोर, गोल्डन रिट्रीवर, हस्की, शीबा इनु, कॉर्गिस आदि शामिल हैं।';
        arrLang['hi']['r1'] = 'हाल के पोस्ट';
        arrLang['hi']['dc'] = 'कुत्तों की देखभाल';
        arrLang['hi']['di'] = 'कुत्तों की जानकारी';
        arrLang['hi']['fb'] = 'फेसबुक';
        arrLang['hi']['in'] = 'इंस्टाग्राम';
        arrLang['hi']['tw'] = 'ट्विटर';
        arrLang['hi']['f1'] = 'द्वारा बनाया गया पिटबुल स्टोर | सर्वाधिकार सुरक्षित!';
        arrLang['hi']['n1'] = 'घर';
        arrLang['hi']['n2'] = 'दुकान';
        arrLang['hi']['n3'] = 'सेवाएं';
        arrLang['hi']['n4'] = 'सदस्यता';
        arrLang['hi']['n5'] = 'संपर्क ';
        arrLang['hi']['n6'] = 'हमारे बारे में';
        arrLang['hi']['n7'] = 'ब्लॉग';
        arrLang['hi']['n8'] = 'भाषा';
        arrLang['hi']['n9'] = 'लॉग आउट';


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