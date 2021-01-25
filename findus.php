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


	<title>Find Us</title>

     <link href='https://fonts.googleapis.com/css?family=Aladin' rel='stylesheet'>

     <link href='https://fonts.googleapis.com/css?family=Gochi Hand' rel='stylesheet'>

     <link rel="stylesheet" type="text/css" href="client_style.css">

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
<h1 style="border-right:15px;border-top:15px;border-left:15px;text-align: center;font-size: 50px; color:	#996515"><strong>Port Village Seafood Restaurant</strong></h1>

<h1 style="border-right:15px;border-top:5px;border-left:5px;text-align: center;font-size: 55px;color:#DC143C">港村海鲜楼</strong></h1>
</div>
<br>
<div class="tab">

<a href="index.php"><button>Home</button></a>

<a href="food_menu.php"><button>Food Menu</button></a>

<a href="booking.php"><button>Book a Table</button></a>

<a href="findus.php"><button>Find Us</button></a>

<a href="feedback.php"><button>Feedback</button></a>

</div>




<p style="text-align: center; font-size: 60px;">
<strong>Find Us</strong>
<span style="font-size: 30%; display:block;padding: 10px;
  margin-bottom:-10px;">Follow us on Facebook!</span>
</p>


<div class="center">
<p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.342566196895!2d101.37581620647103!3d3.0021523181080716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cdaaec1c4d7829%3A0x3ad56fa1e021b3be!2sRestoran%20Port%20Village%20Seafood!5e0!3m2!1sen!2smy!4v1605533135736!5m2!1sen!2smy" width="600" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></p>



<p style="text-align: center; font-size: 25px;"><strong>Location</strong> : LMS-A-12800, Tanjung Harapan, 42000, Lingkaran Sultan Hishamuddin, 42000 Pelabuhan Klang, Selangor</p>



<p style="text-align: center; font-size: 25px;"> <strong>Opening Hours</strong> : Monday to Friday: 11.30am-3pm, 5.30pm-10.30pm<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

Saturday and Sunday: 11.30am-10.30pm</p>

<p style="text-align: center; font-size: 25px;"><strong>Contact</strong> : 03-3176 4530</p>

<p style="text-align: center; font-size: 25px;"><strong>Follow us on</strong></p> <a href="https://www.facebook.com/pages/Port-Village-Seafood-Restaurant-Tanjung-Harapan-Port-Klang/331737566945121" class="fa fa-facebook"></a>

<p style="text-align: center; font-size: 25px;"><strong>Click below for directions!</strong></p>  <a href="https://www.google.com/maps/dir/2.9899054,101.5589438/port+klang+seafood+restaurant/@3.0369512,101.3356108,11z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x31cdaaec1c4d7829:0x3ad56fa1e021b3be!2m2!1d101.3758162!2d3.0021523?hl=en"><img src="images/googlemap.png" alt="HTML tutorial" style="width:45px;height:45px;"></a>




</div>


<br><br>

<p style="text-align: center; font-size: 18px;color: grey"><i>Find Us</i>

<span style="float: left"><a href="booking.php"><img src="images/back.png" style="width:25px;height:25px;"></a></span>

<span style="float: right"><a href="feedback.php"><img src="images/next.png" style="width:25px;height:25px;"></a></span>

</p>
</div>



</body>
</html>