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



	$query = "SELECT `email`, `fname`, `lname`, `org` FROM `users"; 



$result = mysqli_query($con, $query);
$rows = array();

while($r = mysqli_fetch_assoc($result))
	$rows[] = $r; 


echo json_encode($rows);