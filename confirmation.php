<?php 

	$passkey=$_GET['passkey'];

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
	
	$sql="SELECT * FROM temp_users WHERE confirm_code='$passkey'";
	$result = mysqli_query($con,$sql);
	
	$row=mysqli_fetch_array($result);
	$count=count($row);
	
	if($count>=1){
		echo "Found!";
		$email=$row['email'];
		echo $email;
		$password=$row['password'];
		$fname=$row['fname'];
		$lname=$row['lname'];
		$org=$row['org'];
		$sql = "INSERT INTO users VALUES ('$email', '$password', '$fname', '$lname', '$org')";
		$qresult = mysqli_query($con, $sql);
	}
	
	else{
		echo "INCORRECT CONFIRMATION CODE!!!";
	}
	
	header("location:index.php");
?>