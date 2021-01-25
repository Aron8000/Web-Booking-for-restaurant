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


	body
	{
		background-image: url("images/seafoodwallpaper2.jpg");
	}

div.fbck{

  margin: auto;
  border: 1px solid black;
  border-radius: 8px;
  width: 65%;
  height: 80%;
  background-color:#E6FFE6;
  font-family: Aladin;
  padding-left: 20px;
  padding-right: 20px;
  margin-top: 3%;

}

</style>


	<title>Feedback</title>

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
<strong>Feedback</strong>
<span style="font-size: 30%; display:block;font-size:18px;padding: 10px;
  margin-bottom:-10px;">Give us your thoughts about our restaurant.</span>
</p>

<div class="fbck">
<form action="insert.php" method="POST">

<table>

	<tr>
		<td><br>Full Name : </td>
		<td><br><input type="text" name="fullname" placeholder="Your name" Required></td>
	</tr>

    <tr>
    	<td><br>Contact : </td>
    	<td><br><input type="text" name="contact" placeholder="Your contact number" Required></td>
    </tr>
    
    <tr>
        <td><br>Email : </td>
        <td><br><input type="email" name="email" placeholder="Your e-mail address" Required></td>
 
    <tr>
     
        <td><br>Feedback : </td>
        <td><br><textarea name="fback" rows="15" cols="40" placeholder="Give Us Your feedback :)" style="background-color: #fcfcfc;width: 120%; padding: 12px 20px; margin: 8px 0;display: inline-block; border: 1px solid #ccc; box-sizing: border-box; "></textarea></td>
    
    </tr>

 
   <td><br><button type="submit" class="btn" name="submit" value="Submit">Submit</button></td>

</table>
  
</form>
</div>
<br><br>

<p style="text-align: center; font-size: 18px;color: grey"><i>Feedback</i>

<span style="float: left"><a href="findus.php"><img src="images/back.png" style="width:25px;height:25px;"></a></span>

<span style="float: right"><a href="index.php"><img src="images/home.png" style="width:20px;height:20px;"></a></span>

</p>





</div>
</body>
</html>