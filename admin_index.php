<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: admin_login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: admin_login.php");
  }
?>

<!DOCTYPE html>
<html>

<head>
<style>

	body{
		background-image: url("images/seafoodwallpaper.jpg");
	}


</style>


	<title>Admin</title>

     <link href='https://fonts.googleapis.com/css?family=Aladin' rel='stylesheet'>

     <link href='https://fonts.googleapis.com/css?family=Gochi Hand' rel='stylesheet'>

     <link rel="stylesheet" type="text/css" href="admin_styles.css">

</head>

<body style="background-color:#d1af8a">

<div class="box">

<?php  if (isset($_SESSION['username'])) : ?>
    	<p style="color: red"><img src="images/user.png" style="width:25px;height:25px;"><?php echo $_SESSION['username']; ?></strong>
        <span style="float: right"><a href="admin_index.php?logout='1';"><img src="images/logout.png" alt="HTML tutorial" style="width:25px;height:25px;"></a></span>

      </p>
    	
    <?php endif ?>	


<div class="back">
<h1 style="border-right:15px;border-top:15px;border-left:15px;text-align: center;font-size: 45px; color:#996515"><strong>Port Village Seafood Restaurant</strong></h1>

<h1 style="border-right:15px;border-top:5px;border-left:5px;text-align: center;font-size: 50px;color:#DC143C">港村海鲜楼</strong></h1>
</div>

<br>
<div class="tab">

<a href="admin_index.php"><button>Home</button></a>

<a href="admin_booking.php"><button>Booking Details</button></a>


<a href="admin_feedback.php"><button>Feedback</button></a>

<a href="reset_password.php"><button>Password Reset</button></a>

<a href="trans.php"><button>Send Email</button></a>

<a href="admin_rating.php"><button>Customer Rating</button></a>

</div>



<br><br><br>
<p style="text-align: center; font-size: 45px;"><strong>Welcome back, Admin</strong></p>




</div>




</div>



</body>
</html>