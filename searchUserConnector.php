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



$query = "SELECT  `email`, `fname`, `lname`, `org`, `date_joined`, `status` FROM `users`"; 
$parameterStarted = false; 

if($objData->fName !== ""){
	$query .= " WHERE `fname` = '".$objData->fName."'"; 
	$parameterStarted = true; 
}

if($objData->email !== ""){
	if($parameterStarted === false){
		$query .= " WHERE `email` = '".$objData->email."'"; 
		$parameterStarted = true; 
	}
	else
		$query .= " AND `email` = '".$objData->email."'"; 
}

if($objData->lName !== ""){
	if($parameterStarted === false){
		$query .= " WHERE `lname` = '".$objData->lName."'"; 
		$parameterStarted = true; 
	}
	else
		$query .= " AND `lname` = '".$objData->lName."'"; 
}

if($objData->myStatus !== ""){
	if($parameterStarted === false){
		$query .= " WHERE `status` = '".$objData->myStatus."'"; 
		$parameterStarted = true; 
	}
	else
		$query .= " AND `status` = '".$objData->myStatus."'"; 
}

if($objData->myAss !== ""){
	if($parameterStarted === false){
		$query .= " WHERE `org` = '".$objData->myAss."'"; 
		$parameterStarted = true; 
	}
	else
		$query .= " AND `org` = '".$objData->myAss."'"; 
}

if($objData->start !== null && $objData->end !== null){
	if($objData->start === $objData->end){
		if($parameterStarted ===false){
			$query .= " WHERE `date_joined` = '".$objData->start."'"; 
			$parameterStarted = true; 
		}
		else 
			$query .= " AND `date_joined` = '".$objData->start."'"; 
	}
	else{
		if($parameterStarted === false){
			$query .= " WHERE (`date_joined` BETWEEN '".$objData->start."' AND '".$objData->end."')"; 
		}else{
			$query .= " AND (`date_joined` BETWEEN '".$objData->start."' AND '".$objData->end."')"; 
		}
	}
}


$result = mysqli_query($con, $query);
$rows = array();

while($r = mysqli_fetch_assoc($result))
	$rows[] = $r; 

echo json_encode($rows);
