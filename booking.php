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
div.booking{

  margin: auto;
  border: 1px solid black;
  border-radius: 8px;
  width: 65%;
  height: 80%;
  background-color:#E6FFE6 ;
  font-family: Aladin;
  padding-left: 20px;
  padding-right: 20px;
  margin-top: 3%;

}

</style>


	<title>Book a Table</title>

     <link href='https://fonts.googleapis.com/css?family=Aladin' rel='stylesheet'>

     <link href='https://fonts.googleapis.com/css?family=Gochi Hand' rel='stylesheet'>

     <link rel="stylesheet" type="text/css" href="booking_style.css">


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

</div>


<form method="post" action="server.php">

<p style="text-align: center; font-size: 60px;">
<strong>Book a Table</strong>
<span style="font-size: 30%; display:block;font-size:18px;padding: 10px;
  margin-bottom:-10px;">Book a table online.</span>
</p>

<div class="booking">
<p>Table Reservation :</p>

<p>Date 
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="date" style="width:174px"name="date" required>

<span style="float:right">

  Time &nbsp;&nbsp;&nbsp;
  <input style="width: 174px;" type="time" name="time" required >

</span>
</p>

<p>Table No  
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<select style="width: 174px;" class="custom-select" name="table" required>

  <option value="Table 1">Table 1</option>
  <option value="Table 2">Table 2</option>
  <option value="Table 3">Table 3</option>
  <option value="Table 4">Table 4</option>
  <option value="Table 5">Table 5</option>
  <option value="Table 6">Table 6</option>
  <option value="Table 7">Table 7</option>
  <option value="Table 8">Table 8</option>
  <option value="Table 9">Table 9</option>
  <option value="Table 10">Table 10</option>
  <option value="Table 11">Table 11</option>
  <option value="Table 12">Table 12</option>
  <option value="Table 13">Table 13</option>
  </select>
</p>

<p>No. of People 
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <select style="width: 174px;" name="person" required>
  <option value="1 Person">1 Person</option>
  <option value="2 Person">2 Person</option>
  <option value="3 Person">3 Person</option>
  <option value="4 Person">4 Person</option>
  <option value="5 Person">5 Person</option>
  <option value="6 Person">6 Person</option>
  <option value="7 Person">7 Person</option>
  <option value="8 Person">8 Person</option>
  <option value="9 Person">9 Person</option>
  <option value="10 Person">10 Person</option>
  <option value="11 Person">11 Person</option>
  </select>

</p>
<hr>
<p>Contact Details :</p>

<p>Name
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="cusname" placeholder="Your Name" style="width: 174px;" required>


<span style="float:right">

Contact
&nbsp;&nbsp;&nbsp;
<input type="tel" name="phone" placeholder="0xx-0000000" style="width: 174px;" required>
</p>


<p>Email
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="email" name="email"  placeholder="Your E-Mail" style="width: 174px;" required>
</p>

<br>

<center>
<input type="submit" name="reservation" value="Make reservation" style="width: 174px; background-color: black;color: #ccb09b;font-family: 'Gochi Hand';font-size: 20px;cursor: pointer;border-radius: 4px;">
</center>

<br>


</div>

<br><br>

<p style="text-align: center; font-size: 18px;color: grey"><i>Book a Table</i>

<span style="float: left"><a href="food_menu.php"><img src="images/back.png" style="width:25px;height:25px;"></a></span>

<span style="float: right"><a href="findus.php"><img src="images/next.png" style="width:25px;height:25px;"></a></span>

</p>

</div>



</body>
</html>