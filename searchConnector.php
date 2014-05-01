<?php
include 'db_connection.php';
session_start();
unlink('my_log.txt');
$username = $_POST['loggedInEmail'];
$data = file_get_contents("php://input");
$objData = json_decode($data);
log_to_file($objData);
log_to_file($username);
#$query ="SELECT * FROM `pipeline` WHERE (date BETWEEN)"
echo json_encode($objData);

function log_to_file($text) {
    $f = fopen('my_log.txt', 'a');
    fwrite($f, print_r($text, true) . "\n");
    fclose($f);
}