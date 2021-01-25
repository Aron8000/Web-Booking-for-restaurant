<html>

<head></head>
<style>

h1
{
	font-size:30px;
}
div.box
{
 background-color: white;
  width: 300px;
  border: 1px solid black;
  padding: 50px;
  margin: auto;
  font-size:25px;
}
input[type=text],[type=password]
{
width:"100%;
border:8px solid black;
border-radius:4px;
margin:5px 5px;
outline:none;
padding:10px;
box-sizing:border-box;
display:inline-block;
}
input[type="submit"],[type="button"]
{
padding:15px 20px;
margin: 5px 5px;
font-size:20px;
}

body{
		background-image: url("images/seafoodwallpaper2.jpg");
	}
</style>
<body>
<?php

include "server.php";

?>


<script>
var check = function() {
  if (document.getElementById('passwordr1').value ==
    document.getElementById('passwordr2').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'match';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'not match';
  }
}

function myFunction()
{
	var x =document.getElementById("passwordr1");;
	if(x.type==="password")
	{
		x.type="text";
	}
	else
	{
		x.type="password";
	}
		var x =document.getElementById("passwordr2");;
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
<div class="box" >
<h1 align="center"><b>Password Reset</b></h1>



<form method="POST" action="server.php">
<?php include('errors.php'); ?>
<p>Username: &nbsp&nbsp <input type="text" placeholder="Username" name="username1"></p>

<label>password :
  <input name="passwordr1" id="passwordr1" type="password" onkeyup='check();'/>
</label>
<br>
<label>confirm password:
  <input type="password" name="passwordr2" id="passwordr2"  onkeyup='check();' />
<br>  
  <span id='message'></span>
  
  
</label><br>

<p>Show Password:<br><input type="checkbox" onclick="myFunction();"></p>
<input type="submit" value="Reset" name="reset" id="reset" >
<a href="index.php"><input type="button" value="Back"></a>
</form>
</div>
<body>
</html>