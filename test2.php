<?php
	$var = $_POST['option'];  
	//$var = $var.replace(" ", ""); 
	$var = str_replace(' ', '', $var); 
	$var = strtolower($var); 
	echo $var; 
	
	header('Location : edit'.$var.'.php'); 
?>