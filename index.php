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

  div.about{

 margin: auto;
  border: 1px solid black;
  border-radius: 50%;
  width: 85%;
  height: 80%;
  background-color:#add8e6 ;
  font-family: Aladin;
  padding-left: 20px;
  padding-right: 20px;
  margin-top: 3%;

}


</style>


	<title>Home</title>

     <link href='https://fonts.googleapis.com/css?family=Aladin' rel='stylesheet'>

     <link href='https://fonts.googleapis.com/css?family=Gochi Hand' rel='stylesheet'>

     <link rel="stylesheet" type="text/css" href="client_style.css">

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
<strong>Port Village Seafood</strong>
<span style="font-size: 30%; display:block;padding: 10px;
  margin-bottom:-10px;">About our restaurant.</span>
</p>

<center>
	<img src="images/portklang.jpg" style="width:40%; height:10%; border-radius:4px">
</center>

<div class="center">
<p style="text-align: center; font-size: 25px;">Our restaurant is located on the estuary (muara sungai) in Port Klang. Port Klang is a town and the main gateway by sea into Malaysia. Port Village Seafood Restaurant is known for their seafood dishes and their unique location which is surrounded by mangrove swamps. Customers are able to experience the sound of waves, cooling weather when high tides which will make them boost their appetite. <br><br>
As Port Village Seafood Restaurant is famous for their seafood, the place is often fully packed, especially during Chinese New Year. Most of the customers craved for their Salted Egg Crabs so bad that it will often sold out. However, there are many other dishes that caught the customers appetite with affordable prices. For example, Lala Meehoon at RM18, Stir-fried Garlic Yau Mak at RM10, Nestu Mantis Prawn at RM15 and many more!</p>
<br>
<hr>




<p style="text-align: center; font-size: 25px;"><strong>What our restaurant can do</strong></p>

<div class="about">
<p style=" font-size: 20px;">Our restaurant can accommodate more than 100 people</p>

<p style=" font-size: 20px;">We provide fresh seafood every day, produced locally from our neightbours</p>

<p style=" font-size: 20px;">Perfect place for family gatherings, meetings, appointments</p>

<p style=" font-size: 20px;">All dishes from our own recipe</p>

</div>


</div>

<br><br>

<p style="text-align: center; font-size: 18px;color: grey"><i>Home</i>


<span style="float: right"><a href="food_menu.php"><img src="images/next.png" style="width:25px;height:25px;"></a></span>


</p>









</div>



</body>
</html>