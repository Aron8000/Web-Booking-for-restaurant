<?php include('admin_server.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Sign In</title>

     <link href='https://fonts.googleapis.com/css?family=Aladin' rel='stylesheet'>

     <link href='https://fonts.googleapis.com/css?family=Gochi Hand' rel='stylesheet'>
     
     <link rel="stylesheet" type="text/css" href="register_style.css">

</head>


<style>

	body{
		background-image: url("images/seafoodwallpaper.jpg");
	}


</style>


<body>

<body style="background-color:lightgrey">

<div class="signup">

<h2 style="border-style:solid;border-right:15px;border-top:15px;border-left:15px;text-align: center;">Admin Log In</h2>

<form method="post" action="admin_login.php">
	<?php include('admin_errors.php'); ?>

<table>

<tr>
	<td>Username: </td>
	<td><input type="text" name="username"></td>
</tr>

<tr>
	<td>Password: </td>
	<td><input type="password" name="password"></td>
</tr>


<td><button type="reset" class="btn"> Clear</button></td>
<td><button type="submit" class="btn" name="login_user"> Login</button></td>

</table>

<p>Log in as &nbsp;<a href="login.php">Client </a></p>

</form>
</div>


</body>
</html>