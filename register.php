<?php include('server.php') ?>


<!DOCTYPE html>
<html>
<head>
	<title>Register</title>

     <link href='https://fonts.googleapis.com/css?family=Aladin' rel='stylesheet'>

     <link href='https://fonts.googleapis.com/css?family=Gochi Hand' rel='stylesheet'>
     
     <link rel="stylesheet" type="text/css" href="register_style.css">

</head>

<style>

	body{
		background-image: url("images/seafoodwallpaper2.jpg");
	}


</style>


<body>

<body style="background-color:#d1af8a">

<div class="signup">

<h2 style="border-style:solid;border-right:15px;border-top:15px;border-left:15px;text-align: center;">Client Registration</h2>

<form method="post" action="register.php">
	<?php include('errors.php'); ?>

<table>

<tr>
	<td>Name: </td>
	<td><input type="text" name="name" placeholder="Enter Full Name"></td>
</tr>

<tr>
	<td>Username: </td>
	<td><input type="text" name="username" value="<?php echo $username; ?>"placeholder="Enter Username"></td>
</tr>

<tr>
	<td>Email </td>
	<td><input type="email" name="email" value="<?php echo $email; ?>"placeholder="Enter Email"></td>
</tr>

<tr>
	<td>Password: </td>
	<td><input type="password" name="password_1"placeholder="Enter Password" id="pass1" onkeyup='check();'></td>
</tr>

<tr>
	<td>Confirm Password: </td>
	<td><input type="password" name="password_2"placeholder="Enter Password again" id="pass2" onkeyup='check();'></td>
</tr>

<tr>
<td>Show Password: </td>
<td><input type="checkbox" onclick="myFunction()" style="margin:5px -100px"><span id='message'></span></td>
</tr>

<td><button type="reset" class="btn"> Clear</button></td>
<td><button type="submit" class="btn" name="reg_user">Register</button></td>

</table>

<p>Already a member? <a href="login.php">Log In here</a> </p>
<br>
<p style="text-align: ">Log in as &nbsp;<a href="admin_login.php">Admin </a></p>
</form>
</div>
<script>
var check = function() {
  if (document.getElementById('pass1').value ==
    document.getElementById('pass2').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'match';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'not match';
  }
}

function myFunction()
{
	var x =document.getElementById("pass1");;
	if(x.type==="password")
	{
		x.type="text";
	}
	else
	{
		x.type="password";
	}
		var x =document.getElementById("pass2");;
	if(x.type==="password")
	{
		x.type="text";
	}
	else
	{
		x.type="password";
	}
}
</script>
</body>
</html>