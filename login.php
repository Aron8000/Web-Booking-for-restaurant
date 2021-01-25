<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Sign In</title>

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

<h2 style="border-style:solid;border-right:15px;border-top:15px;border-left:15px;text-align: center;">Client Log In</h2>

<form method="post" action="login.php">
	<?php include('errors.php'); ?>

<table>

<tr>
	<td>Username: </td>
	<td><input type="text" name="username"placeholder="Enter Username"></td>
</tr>

<tr>

	<td>Password: </td>
    <td><input type="password" name="password"placeholder="Enter Password" id="pass"></td>
</tr>

<tr>
<td>Show Password: </td>
<td><input type="checkbox" onclick="myFunction()" style="margin:5px -100px"></td>
</tr>



<td><button type="reset" class="btn"> Clear</button></td>
<td><button type="submit" class="btn" name="login_user"> Login</button></td>

</table>
<p>Password Reset &nbsp;<a href="reset.php">Password Reset </a></p>
<br>
<p>Don't have an account? &nbsp;<a href="register.php">Register here </a></p>
<br>
<p style="text-align: ">Log in as &nbsp;<a href="admin_login.php">Admin </a></p>

</form>
</div>

<script>
function myFunction()
{
	var x =document.getElementById("pass");
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