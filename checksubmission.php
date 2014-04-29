<?php
	session_start();
	
	$_SESSION['confirmEmailErr'] = "";
	$_SESSION['confirmPasswordErr'] = "";
	$_SESSION['emailErr'] = "";
	$_SESSION['passwordErr'] = "";
	
	if(empty($_POST['email']) || empty($_POST['password'])){
		
		if(empty($_POST['email'])){
			$_SESSION['emailErr'] = "EMAIL REQUIRED";
		}
		
		if(empty($_POST['password'])){
			$_SESSION['passwordErr'] = "PASSWORD REQUIRED";
		}
		
		header("location:register.php");
		exit();
	}
	
	else if(($_POST['email'] != $_POST['confirmemail']) || ($_POST['password'] != $_POST['confirmpassword'])){
		
		if($_POST['email'] != $_POST['confirmemail']){
			$_SESSION['confirmEmailErr'] = "EMAILS MUST MATCH";
		}
		
		if($_POST['password'] != $_POST['confirmpassword']){
			$_SESSION['confirmPasswordErr'] = "PASSWORDS MUST MATCH";
		}
		
		header("location:register.php");
		exit();
	}
	
	
		$_SESSION['email'] = $_POST['email'];
		$_SESSION['password'] = $_POST['password'];
		$_SESSION['fname'] = $_POST['fname'];
		$_SESSION['lname'] = $_POST['lname'];
		$_SESSION['org'] = $_POST['org'];
		
		header("location:insertnewuser.php");
?>