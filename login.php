<?php
	session_start();
	
	// Create connection
	$con=mysqli_connect('earth.cs.utep.edu','cs4311team4sp14','atom4','cs4311team4sp14');

	// Check connection
	if (mysqli_connect_errno($con))
	  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }
  
	else{
		//echo "Connection successful!";
		//echo "<br>";
	}
	
	$email=$_POST['email'];
	$password=md5($_POST['password']);
	
	$sql="SELECT email FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($con,$sql);
	
	$row=mysqli_fetch_array($result);
	$count=count($row);
	
	if($count>=1){
		echo "Found!";
		$_SESSION['email']=$sql;
		$_SESSION['loggedInEmail'] = $_POST['email'];
		header("location:loginsuccess.php");
	}
	
	else{
		header("location:invalidlogin.php");
	}
?>