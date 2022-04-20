<!--Login Session started-->
<?php 
session_start();

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);
    //Declaring API key for the payment gateway
    $apiKey = "rzp_test_F4SOeH8dABSEZN";
    //initiating query for getting amount form the database
    $query = "select * from hotels where id ='1'";

        $result = mysqli_query($con,$query);
        $user_data = (4000);
        
?>
<style>
    * {
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
}

body {
  padding: 0;
  margin: 0;
}

#notfound {
  position: relative;
  height: 100vh;
}

#notfound .notfound {
  position: absolute;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
}

.notfound {
  max-width: 410px;
  width: 100%;
  text-align: center;
}

.notfound .notfound-404 {
  height: 280px;
  position: relative;
  z-index: -1;
}

.notfound .notfound-404 h1 {
  font-family: 'Montserrat', sans-serif;
  font-size: 230px;
  margin: 0px;
  font-weight: 900;
  position: absolute;
  left: 50%;
  -webkit-transform: translateX(-50%);
      -ms-transform: translateX(-50%);
          transform: translateX(-50%);
  background: url('bg.jpg') no-repeat;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-size: cover;
  background-position: center;
}


.notfound h2 {
  font-family: 'Montserrat', sans-serif;
  color: #000;
  font-size: 24px;
  font-weight: 700;
  text-transform: uppercase;
  margin-top: 0;
}

.notfound p {
  font-family: 'Montserrat', sans-serif;
  color: #000;
  font-size: 14px;
  font-weight: 400;
  margin-bottom: 20px;
  margin-top: 0px;
}

.notfound a {
  font-family: 'Montserrat', sans-serif;
  font-size: 14px;
  text-decoration: none;
  text-transform: uppercase;
  background: #0046d5;
  display: inline-block;
  padding: 15px 30px;
  border-radius: 40px;
  color: #fff;
  font-weight: 700;
  -webkit-box-shadow: 0px 4px 15px -5px #0046d5;
          box-shadow: 0px 4px 15px -5px #0046d5;
}


@media only screen and (max-width: 767px) {
    .notfound .notfound-404 {
      height: 142px;
    }
    .notfound .notfound-404 h1 {
      font-size: 112px;
    }
}

    </style>


    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css/404style.css" />
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<!-- Body part for this page -->
<div id="notfound">
        <div class="notfound">
            <div class="notfound-404" style="">
                <h1>PitbullStore</h1>
            </div><br>
            
            <a href="index.php">Go To Homepage</a>
        </div>
    </div>


<!-- Setting up the form for payment gateway -->

<form action="" method="POST">
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $apiKey; ?>"
    data-amount=399900
    data-currency="INR"
    data-id="<?php echo 'transaction_id'.rand(10,100).'END';?>"//Replace with the order_id generated by you in the backend.
    data-buttontext="Pay with Razorpay"
    data-name="Pitbull Store"
    data-description="Pet Store"
    
    data-prefill.name="<?php echo $_POST['name'];?>"
    data-prefill.email="<?php echo $_POST['email'];?>"
    data-prefill.contact="<?php echo $_POST['mobile'];?>"
    data-theme.color="#F37254"
></script>
<input type="hidden" custom="Hidden Element" name="hidden">
</form>

<style>


.razorpay-payment-button {
    display: none;

}
body {
  font-family: "Quicksand", Arial, sans-serif;
  font-weight: 400;
  font-size: 14px;
  line-height: 1.7;
}
.heading{
font-weight: 20px;
font-size: 40px;
text-align: center;
color:black ;
margin-top: 10px;

}

.heading-s{
font-weight: 20px;
font-size: 25px;
text-align: center;
color:black ;
margin-top: 10px;
margin-bottom: 3px;

}

</style>

<script type="text/javascript">
    $(document).ready(function(){

        $('.razorpay-payment-button').click()

    });
</script>