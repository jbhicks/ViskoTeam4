<?php
	session_start();
	session_destroy();
	$con=mysqli_connect('earth.cs.utep.edu','cs4311team4sp14','atom4','cs4311team4sp14');

	// Check connection
	if (mysqli_connect_errno($con))
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
  
	else{
		echo "Connection successful!";
		echo "<br>";
	}
	
	$email = $_POST['email'];
	$password = $_POST['password'];
	$confirmcode = MD5($_POST['confirmcode']);
	echo $confirmcode; echo "\n"; echo MD5($confirmcode);
	$sql="SELECT * FROM reset WHERE confirm_reset_code='$confirmcode'";
	$result = mysqli_query($con,$sql);
	
	$row=mysqli_fetch_array($result);
	$count=count($row);
	
	if($count>=1){
		$sql = "UPDATE users SET password=MD5('$password')";
		$qresult = mysqli_query($con, $sql);
		echo 'UPDATE SUCCESSFUL';
		$sql = "DELETE FROM reset WHERE email='$email'";
		$qresult = mysqli_query($con, $sql);
		echo 'UPDATE SUCCESSFUL';		
	}
	
	else
		echo 'NOPE';
	
	header("location:index.php");
?>