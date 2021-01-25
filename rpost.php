<?php 
session_start();
  
$severhost="localhost";
$serveruser="root";
$password="";
$dtable="capstone2";


$dbase=mysqli_connect($severhost,$serveruser,$password,$dtable);

if(!$dbase)
{
	die ("connection_failed:" .mysqli_connect_error);
}


//If the condition is true, then the input will send



if(isset($_POST['submit']))
{
	/*session_start();*/
	$userid=$_SESSION['username'];
	$ratingA=$_POST['rating'];
	$rating1=$_POST['rating1'];
	$rating2=$_POST['rating2'];
	$comm=$_POST['commentX1'];

$sql = mysqli_query($dbase,"INSERT INTO rating(username,staff,food,onlineb,comment) 
VALUES ('$userid','$ratingA','$rating1','$rating2','$comm')");

if(mysqli_query($dbase,$sql))
{
   echo "Error: " . $sql . "<br>" . $dbase->error;
} 
else 
{
 
  echo "Your evaluation Sucessfully Submitted";
  header('location:index.php');
}
}
 mysqli_close($dbase);

?>