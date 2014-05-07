<?php
	session_start();
	
	// Create connection
	$con=mysqli_connect('earth.cs.utep.edu','cs4311team4sp14','atom4','cs4311team4sp14');

	// Check connection
	if (mysqli_connect_errno($con)){
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	$email;
	$password;


	if(isset($_POST['email']))
		$email = $_POST['email']; 
	if(isset($_POST['password']))
		$password = md5($_POST['password']); 

	echo $password; 

	if($stmt = $con->prepare("SELECT email, password, admin FROM users WHERE email = ?")){
		$stmt->bind_param('s', $email); 
		$stmt-> execute(); 
		$stmt-> store_result(); 
		$stmt->bind_result($user_email, $user_password, $isAdmin); 
		$stmt->fetch(); 


		if($password == $user_password){
			$_SESSION['loggedInEmail'] = $user_email;  
			$_SESSION['email'] = $user_email; 

			if($isAdmin){
				$_SESSION['isSuper'] = $isAdmin; 
				header("location:loginsuccess.php"); 
			}
			else
				header("location:loginsuccess.php");
		}
		else 
			header("location:invalidlogin.php");
	
}
?>