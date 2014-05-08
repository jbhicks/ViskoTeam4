<?php
include 'ChromePhp.php';
session_start();
$con = mysqli_connect('earth.cs.utep.edu','cs4311team4sp14','atom4','cs4311team4sp14');
if (mysqli_connect_errno()) {
    ChromePhp::log("Could not connect to DB");
}
$username = $_SESSION['loggedInEmail'];
$data = file_get_contents("php://input");
$objData = json_decode($data);

if($objData->status === "Active"){
	$query = "UPDATE users SET status= 'Suspended' WHERE (email = '".$objData->email."')"; 

	ChromePhp::LOG($query); 

	mysqli_query($con, $query); 
}else{
	$query = "UPDATE `users` SET status= 'Active' WHERE (email = '".$objData->email."')"; 

	ChromePhp::LOG($query); 

	mysqli_query($con, $query); 
}
// else{
// 	//$query = "UPDATE `users` SET `status`= `Active` WHERE `email` = `".$objData->email."`"; 
// }

echo json_encode();
