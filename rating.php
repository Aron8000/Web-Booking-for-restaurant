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
		background-image:url("images/seafoodwallpaper2.jpg");
}
	
 .stars input {
    position: absolute;
    left: -999999px;
}

.stars a {
    display: inline-block;
    padding-right:4px;
    text-decoration: none;
    margin:0;
}

.stars a:after {
    position: relative;
    font-size: 18px;
    font-family: 'FontAwesome';
    display: block;
    content: "\f005";
    color: #9e9e9e;
}


span {
  font-size: 0; /* trick to remove inline-element's margin */
}

.stars a:hover ~ a:after{
  color: #9e9e9e !important;
}
span.active a.active ~ a:after{
  color: #9e9e9e;
}

span:hover a:after{
  color:blue !important;
}

span.active a:after,
.stars a.active:after{
  color:blue;
}
</style>
     <title>Test page</title>
	 
     <link href='https://fonts.googleapis.com/css?family=Aladin' rel='stylesheet'>

     <link href='https://fonts.googleapis.com/css?family=Gochi Hand' rel='stylesheet'>
	 
     
	 
	 <link rel="stylesheet" type="text/css" href="client_style.css">
</head>


<body class="ra">

<div class="box">



<p style="text-align: left;"><img src="images/user.png" style="width:25px;height:25px;"></a>
<?php echo $_SESSION['username']; ?>

<span style="float: right"><a href="index.php?logout='1';"><img src="images/logout.png" alt="HTML tutorial" style="width:25px;height:25px;"></a></span></p>
      
    

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

<a href="rating.php"><button>Service Evaluation</button></a>



</div>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<form action="rpost.php" method="POST">


<div class="scbox">
<p class="q1">Do you like the staff service</p>

<div class="rating" id="qs1" >

<input  type="radio" name="rating" id="rate5" value="5" required>
<label for="rate5">5</label>
<input type="radio" name="rating" id="rate4" value="4">
<label for="rate4">4</label>
<input type="radio" name="rating" id="rate3" value="3">
<label for="rate3">3</label>
<input type="radio" name="rating" id="rate2" value="2">
<label for="rate2">2</label>
<input type="radio" name="rating" id="rate1" value="1">
<label for="rate1">1</label>
</div>

<p class="q1">How was the Food Served</p>
<div class="rating" id="qs2" >
<input type="radio" name="rating1" id="rate15" value="5" required>
<label for="rate15">5</label>
<input type="radio" name="rating1" id="rate14" value="4">
<label for="rate14">4</label>
<input type="radio" name="rating1" id="rate13" value="3">
<label for="rate13">3</label>
<input type="radio" name="rating1" id="rate12" value="2">
<label for="rate12">2</label>
<input type="radio" name="rating1" id="rate11" value="1">
<label for="rate11">1</label>
</div>
</div>

<p class='q1'>Do you sastified on Online Booking</p>
<div class="rating" id="qs3" >
<input type="radio" name="rating2" id="rate25" value="5" required>
<label for="rate25">5</label>
<input type="radio" name="rating2" id="rate24" value="4">
<label for="rate24">4</label>
<input type="radio" name="rating2" id="rate23" value="3">
<label for="rate23">3</label>
<input type="radio" name="rating2" id="rate22" value="2">
<label for="rate22">2</label>
<input type="radio" name="rating2" id="rate21" value="1">
<label for="rate21">1</label>
</div>

<p class="q1">Comment</p>
<textarea rows="4" cols="40" name="commentX1" placeholder="We need to hear from you ...(Optional)">
</textarea><br>
<input type="reset" name="clear" value="Clear" style="width:150px; font-size:20px">
<input type="submit" name="submit" value="Submit" style="width:150px; font-size:20px">

<script>

$('.stars a').on('click', function(){
  $('.stars span, .stars a').removeClass('active');

  $(this).addClass('active');
  $('.stars span').addClass('active');
});

</script>
</form>
</body>
</html>