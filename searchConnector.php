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
if ($objData->start == $objData->end){
    $query = "SELECT * FROM `pipeline` WHERE (date = '".$objData->start."' AND username = '".$username."')";
    ChromePhp::log($query);
}
else {
    $query ="SELECT * FROM `pipeline` WHERE (date BETWEEN '".$objData->start."' AND '".$objData->end."' AND username='".$username."')";
    ChromePhp::log($query);
}
$result = mysqli_query($con, $query);
$rows = array();
while($r = mysqli_fetch_assoc($result)){
    $r['abstraction'] = substr($r['abstraction'], strpos($r['abstraction'], "#")+1);
    $r['abstraction'] = str_replace('_', " ", $r['abstraction']);
    $r['viewerURI'] = substr($r['viewerURI'], strpos($r['viewerURI'], "#")+1);
    $r['outputFormat'] = substr($r['outputFormat'], strpos($r['outputFormat'], "#")+1);
    $r['toolkit'] = substr($r['toolkit'], strpos($r['toolkit'], "#")+1);
    $rows[] = $r;
}
ChromePhp::LOG($rows);

echo json_encode($rows);
