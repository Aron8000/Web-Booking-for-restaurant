<?php

include "server.php"; 

$db = mysqli_connect("localhost","root","","capstone2");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}


if(isset($_POST['submit']))
{       
    $fullname = $_POST['fullname'];
    $contact= $_POST['contact'];
    $email = $_POST['email'];
    $fback = $_POST['fback'];

    $insert = mysqli_query($db,"INSERT INTO `feedback`(`fullname`, `contact`,`email`,`fback`) VALUES ('$fullname','$contact','$email','$fback')");

    if(!$insert)
    {
        echo mysqli_error();
    }
    else
    {
        header('location: feedback.php');
    }


mysqli_close($db); // Close connection
}








// Delete
if(isset($_POST["delete"])){

    $cusname1=$_POST["namecus"];

    $query2="DELETE FROM feedback WHERE id='$cusname1'";

    $result2=mysqli_query($db,$query2);


    if($result2){
        header('location:admin_feedback.php');
    }
    mysqli_close($db);
}



if(isset($_POST["reset"])){

    $Reset1=$_POST["id4"];
    //$ResetPass='';

    $query3= "UPDATE users SET password=reset WHERE id='$Reset1'" ;

    $result3=mysqli_query($db,$query3);


    if($result3)
	{
        header('location:reset_password.php');
    }
	else
	{
		echo "connection failed";
    mysqli_close($db);
	}
}


?>