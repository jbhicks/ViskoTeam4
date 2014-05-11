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
$query = "SELECT * FROM `users` WHERE (email = '".$username."')";
$result = mysqli_query($con, $query);
$rows = array();
while($r = mysqli_fetch_assoc($result)){
    $rows[] = $r;
}
$result = array();

ChromePhp::LOG($objData->currentPassword);
ChromePhp::LOG(md5($objData->currentPassword));
ChromePhp::LOG($rows[0]['password']);

if ($rows[0]['password']) == md5($objData->currentPassword)){
	$query = "UPDATE `users` SET password = MD5(\"".$objData->password."\") WHERE email = '".$username."'";
	$result = mysqli_query($con, $query);
}
echo json_encode($objData);