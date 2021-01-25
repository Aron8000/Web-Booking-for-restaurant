<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'capstone2');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($name)) { array_push($errors, "Name is required"); }
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) 
  {
	array_push($errors, "Passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "Email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (name,username, email, password) 
  			  VALUES('$name','$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}

// ... 

//PasswordReset
if(isset($_POST['reset']))
{
	//receive the username and password from the user
	$username2 = mysqli_real_escape_string($db, $_POST['username1']);
	$passwordr1 = mysqli_real_escape_string($db, $_POST['passwordr1']);
    $passwordr2 = mysqli_real_escape_string($db, $_POST['passwordr2']);
	
	//form validfation
	if (empty($username2)) { array_push($errors, "Username is required");}
	if (empty($passwordr1)) { array_push($errors, "Password is required"); }
    if ($passwordr1 != $passwordr2) {
	array_push($errors, "Passwords do not match");
	}
	
  $user_check_query = "SELECT * FROM users WHERE username='$username2'";
  $result1 = mysqli_query($db, $user_check_query);
  $user1 = mysqli_fetch_assoc($result1);
  
  if ($user1) 
  { // if user exists
    if ($username2 === $user1['username']) 
	{
		 header('location: index.php');
		 
		
	}
	else
	{
		include "errors.php";
		array_push($errors, "Username Invalid") ;
		
	}
  }
  
  //if no error the password reset will continue
    if (count($errors=0)) {
  	$passwordNew = md5($passwordr1);//encrypt the password before saving in the database

  	$query = "UPDATE users SET reset='$passwordNew' WHERE username='$username2'";
  	mysqli_query($db, $query);
  }
}
	
// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
	
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location: index.php');
    }else {
      array_push($errors, "Wrong username/password combination");
    }
  }
}


//Booking SQL

if (isset($_POST['reservation'])) {
   $date = $_POST['date'];
   $time = $_POST['time'];
   $person =$_POST['person'];
   $cusname =$_POST['cusname'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $table = $_POST['table'];

   
    $query = "INSERT INTO reserve_table (dates,timesw, table_no, no_of_people,name,email,mobile) 
          VALUES('$date','$time', '$table', '$person','$cusname','$email','$phone')";

    $insert=mysqli_query($db, $query);

    if(!$insert){
      echo mysqli_error();
    }
    else {
      header('location:booking.php');
    }

    mysqli_close($db);
}


// Delete
if(isset($_POST["delete"])){

  $cusname1=$_POST["namecus"];
  $query2="delete from reserve_table where name='$cusname1'";
  $result2=mysqli_query($db,$query2);
  

  if($result2){
    header('location:admin_booking.php');
  }
  mysqli_close($db);
}

?>