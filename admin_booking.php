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
table,th,td {border:1px solid black;border-collapse:collapse;padding:5px;}
th,td {width:160px;text-align:center;}

</style>


	<title>Booking Details</title>

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
<h1 style="border-right:15px;border-top:15px;border-left:15px;text-align: center;font-size: 45px; color:	#996515"><strong>Port Village Seafood Restaurant</strong></h1>

<h1 style="border-right:15px;border-top:5px;border-left:5px;text-align: center;font-size: 50px;color:#DC143C">æ¸¯æ‘æµ·é²œæ¥¼</strong></h1>
</div>
<br>
<div class="tab">

<a href="admin_index.php"><button>Home</button></a>

<a href="admin_booking.php"><button>Booking Details</button></a>


<a href="admin_feedback.php"><button>Feedback</button></a>

<a href="reset_password.php"><button>Password Reset</button></a>

<a href="trans.php"><button>Send Email</button></a>

<a href="admin_rating.php"><button>Customer Rating</button></a>
<br>
</div>


<form action="server.php" method="post">
<center><h1><u>Table Reservation Details</u></h1></center>
<table>
<tr><th>No</th><th>Date</th><th>Time</th><th>Name</th><th>Table No</th><th>Person</th><th>E-mail</th><th>Phone-Number</th></tr>





<?php						$con=mysqli_connect('localhost', 'root', '', 'capstone2');
							$query="select * from reserve_table";
							$result=mysqli_query($con,$query);
							
							$i = 1;
							
							while($row = mysqli_fetch_assoc($result)){
								echo '<tr align="center">';
								echo '<td>'.$i.'</td>';
								echo '<td>'.$row['dates'].'</td>';
								echo '<td>'.$row['timesw'].'</td>';
								echo '<td>'.$row['name'].'</td>';
								echo '<td>'.$row['table_no'].'</td>';
								echo '<td>'.$row['no_of_people'].'</td>';
								echo '<td>'.$row['email'].'</td>';
								echo '<td>'.$row['mobile'].'</td>';
								echo '</tr>';
								$i++;
							}
							




mysqli_close($con);
?>


</table>
<br><br>
<input type="text" name="namecus" placeholder="Enter Name" required> <input type="submit" value="Delete" name="delete">



</div>



</body>
</html>