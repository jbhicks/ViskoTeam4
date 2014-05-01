<?php
$conn_err ='Could not connect.';
$mysql_host ='earth.cs.utep.edu';
$mysql_user ='cs4311team4sp14';
$mysql_pasword ='atom4';
$mysql_db ='cs4311team4sp14';
$con = mysqli_connect($mysql_host, $mysql_user, $mysql_pasword, $mysql_db);

//Connection to the mysql server
if (mysqli_connect_errno($con)) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
