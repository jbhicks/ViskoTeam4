<?php 
	require_once "Mail.php";
	
	$confirm_code=uniqid(rand());
	
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
	$sql="SELECT * FROM reset WHERE email='$email'";
	$result = mysqli_query($con,$sql);
	
	$row=mysqli_fetch_array($result);
	$count=count($row);
	
	if($count>=1){
		$sql = "UPDATE reset SET confirm_reset_code=MD5('$confirm_code') WHERE email='$email'";
		$qresult = mysqli_query($con, $sql);
		
		echo 'UPDATE';
		
	}
	
	else{
		$sql = "INSERT INTO reset VALUES (MD5('$confirm_code'), '$email')";
		$qresult = mysqli_query($con, $sql);
		
		if($qresult < 0)
			echo 'NOT ADDED';
			
		else{
			header("location:index.php");
			echo 'ADDED';
		}
		
		echo 'INSERT';
	}
	
	

	$from = 'viskoteam4@gmail.com';
	$to = 'walter.padilla2@gmail.com';
	$subject = 'VisKo PW Reset';
	$body = "Go to the following link with the confirmation code $confirm_code to reset your password = localhost\VisKoProject-Team4\\resetPW.php";

	$headers = array(
		'From' => $from,
		'To' => $to,
		'Subject' => $subject
	);

	$smtp = Mail::factory('smtp', array(
			'host' => 'ssl://smtp.gmail.com',
			'port' => '465',
			'auth' => true,
			'username' => 'viskoteam4@gmail.com',
			'password' => 'ViskoAtom4'
		));

	$mail = $smtp->send($to, $headers, $body);

	if (PEAR::isError($mail)) {
		echo('<p>' . $mail->getMessage() . '</p>');
	} else {
		echo('<p>Message successfully sent!</p>');
	}
	
	header("location:index.php");
?>