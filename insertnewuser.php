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
		echo "Connection successful!";
		echo "<br>";
	}
	
	$emailCheck = $_SESSION['email'];
	$qCheck = "SELECT email FROM users WHERE email = '$emailCheck'";
	
	/*if(mysqli_query($con, $qCheck) != FALSE){
		echo 'EMAIL ALREADY EXISTS';
		$_SESSION['emailErr'] = "EMAIL ALREADY EXISTS";
		
		header("location:register.php");
		exit();
	}*/
	
	$newEmail = $_SESSION['email'];
	$newPW = $_SESSION['password'];
	
	$newfname = $_SESSION['fname'];
	$newlname = $_SESSION['lname'];
	
	$neworg = $_SESSION['org'];
	
	$confirm_code=md5(uniqid(rand()));
	
	$sql = "INSERT INTO temp_users VALUES ('$confirm_code', '$newEmail', MD5('$newPW'), '$newfname', '$newlname', '$neworg')";
	$qresult = mysqli_query($con, $sql);
	
	if($qresult < 0)
		echo 'NOT ADDED';
		
	else{
		require_once "Mail.php";

		$from = 'viskoteam4@gmail.com';
		$to = $newEmail;
		$subject = 'VisKo Confirmation of Registration Message';
		$body = "Your confirmation link is: localhost/VisKoProject-Team4/confirmation.php?passkey=$confirm_code";

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
	}
		
	header("location:index.php");
?>