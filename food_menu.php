<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>

<!DOCTYPE html>
<html>

<head>
<style>

	body{
		background-image: url("images/seafoodwallpaper2.jpg");
	}


</style>


	<title>Food Menu</title>

     <link href='https://fonts.googleapis.com/css?family=Aladin' rel='stylesheet'>

     <link href='https://fonts.googleapis.com/css?family=Gochi Hand' rel='stylesheet'>

     <link rel="stylesheet" type="text/css" href="foodmenu.css">

</head>

<body style="background-color:#d1af8a">

<div class="box">


<?php  
if (isset($_SESSION['username'])) : 

  ?>

<p style="text-align: left;"><img src="images/user.png" style="width:25px;height:25px;"></a>
<?php echo $_SESSION['username']; ?>

<span style="float: right"><a href="index.php?logout='1';"><img src="images/logout.png" alt="HTML tutorial" style="width:25px;height:25px;"></a></span></p>
      
    <?php endif ?>  


  
<div class="back">
<h1 style="border-right:15px;border-top:15px;border-left:15px;text-align: center;font-size: 45px; color:#996515"><strong>Port Village Seafood Restaurant</strong></h1>

<h1 style="border-right:15px;border-top:5px;border-left:5px;text-align: center;font-size: 50px;color:#DC143C">港村海鲜楼</strong></h1>

</div>
<br>
<div class="tab">

<a href="index.php"><button>Home</button></a>

<a href="food_menu.php"><button>Food Menu</button></a>

<a href="booking.php"><button>Book a Table</button></a>

<a href="findus.php"><button>Find Us</button></a>

<a href="feedback.php"><button>Feedback</button></a>

<a href="rating.php"><button>Service Evaluation</button></a>
</div>

<p style="text-align: center; font-size: 60px;">
<strong>Food Menu</strong>
<span style="font-size: 30%; display:block;font-size:18px;padding: 10px;
  margin-bottom:-10px;">Available dishes in our restaurant!</span>
</p>

<div class="arrange">
  <div class="menu">
            <div class="single-menu">
                <img src="images/Caps4.jfif" alt="" width="250" height="250">
                <div class="menu-content">
                    <h4>Nestum mantis prawn<span>RM15</span></h4>
                    <p>Nestum as the coating for mantis prawn? YUMMY!</p>
                </div>
            </div>

            <div class="single-menu">
                <img src="images/Caps6.jfif" alt="" width="250" height="250">
                <div class="menu-content">
                    <h4>Salted Egg Crab <span>RM63</span></h4>
                    <p>Cant really go wrong with salted egg, DELICIOUS!</p>
                </div>
            </div>

            <div class="single-menu">
                <img src="images/Capsfood5.jpg" alt="" width="250" height="250">
                <div class="menu-content">
                    <h4>Butter Cheese Crab <span>RM50</span></h4>
                    <p>Crabs with thick and creamy cheese gravy on top.  </p>
                </div>
            </div>

            <div class="single-menu">
                <img src="images/Capsfood2.jpg" alt="" width="250" height="250">
                <div class="menu-content">
                    <h4>Kam Heong Bamboo LaLa<span>RM20</span></h4>
                    <p>Big & Juicy clams coated with flagrant and spicy kam heong gravy. Hmmm~~</p>
                </div>
            </div>

            <div class="single-menu">
                <img src="images/Capsfood6.jpg" alt="" width="250" height="250">
                <div class="menu-content">
                    <h4>Stir-fried Spinach <span>RM12</span></h4>
                    <p>Wanna be Popeye? Try this out.</p>
                </div>
            </div>

            <div class="single-menu">
                <img src="images/Capsfood4.jpg" alt="" width="250" height="250">
                <div class="menu-content">
                    <h4>Brussel Sproud <span>RM15</span></h4>
                    <p>Brussel Sproud with Salted Fish</p>
                </div>
            </div>
  </div>
</div>

<hr>

<p style="text-align: center; font-size: 25px;"><strong>Our Speciality</strong></p>
<div class="arrange">
<div class="menu">
            <div class="single-menu">
                <img src="images/tofu.png" alt="" width="250" height="250">
                <div class="menu-content">
                    <h4>Sizzling Tofu<span>RM15</span></h4>
                    <p> I'd rather have tofu than nofu.</p>
                </div>
            </div>

            <div class="single-menu">
                <img src="images/sotong.png" alt="" width="250" height="250">
                <div class="menu-content">
                    <h4>Sambal Sotong  <span>RM23</span></h4>
                    <p>Release the Kraken!</p>
                </div>
            </div>

            <div class="single-menu">
                <img src="images/xia.png" alt="" width="250" height="250">
                <div class="menu-content">
                    <h4>Dry butter Prawn <span>RM20</span></h4>
                    <p>Delicious prawns with butter flakes on top.</p>
                </div>
            </div>

            <div class="single-menu">
                <img src="images/sscrab.png" alt="" width="250" height="250">
                <div class="menu-content">
                    <h4>Sweet & Sour Crab<span>RM60</span></h4>
                    <p>One of the best dishes you'll find in Port Klang.</p>
                </div>
            </div>
  </div>
           
  </div>
<br>

<br><br>

<p style="text-align: center; font-size: 18px;color: grey"><i>Food Menu</i>

<span style="float: left"><a href="index.php"><img src="images/back.png" style="width:25px;height:25px;"></a></span>

<span style="float: right"><a href="booking.php"><img src="images/next.png" style="width:25px;height:25px;"></a></span>

</p>

</div>



</div>



</body>
</html>