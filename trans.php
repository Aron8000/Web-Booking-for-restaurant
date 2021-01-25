
<html>

<head><link rel="stylesheet" type="text/css" href="admin_styles.css"></head>
<style>

body{
		background-image: url("images/seafoodwallpaper.jpg");
	}
table,th,td {border:1px solid black;border-collapse:collapse;padding:5px;}
th,td {width:160px;text-align:center;}

form
{
font-size:25px;	
}
input[type=text]
{
width:"50%";
border:1px solid black;
border-radius:4px;
margin:5px auto;
outline:none;
padding:10px;
background-color:#ffffff;
box-sizing:border-box;
display:inline-block;
}
input.rd
{
	background-color:#6FD3F7;
	cursor: pointer;
	font-size:20px;	

}
input.sb
{
	background-color:#4DFF6B;
	cursor: pointer;
	font-size:20px;	

}
p.v
{
	
	margin-right: 370px;

</style>
  
     
   
<body>

<div class="box" >

<h1 align="center"><b>Email feedback</b></h1>



<form method="POST" action="email.php" align="center" >
<p>Email: &nbsp&nbsp <input type="text" placeholder="Someone@mail.com" name="email" size="30"></p>
<p>Subject: <input type="text" placeholder="Subject" name="subject"></p>
<p class="v">Comment:</p><textarea placeholder="Leave your comment here" cols="32" rows="5" name="comment" style="font-size:15px" align="center"></textarea><br>
<a href="admin_index.php"><input type="button" value="Back" class="rd"></a><br>
<input type="submit" value="Send" name="send" class="sb">


</form>
</div>
<body>
</html>