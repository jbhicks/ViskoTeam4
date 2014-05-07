<?php

	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
	
	if(isset($_SESSION['loggedInEmail'])){
		echo '<div class="bs-docs sidebar">';
	}
	
	else{
		echo '<div class="hidden">';
	}

	if(isset($_SESSION['isSuper'])){
		echo '<ul class="span3 nav nav-sidebar">';
		echo '	<li><a href="index.php" class="active">Home</a></li>';
		echo '	<li><a href="searchPipelines.php">Search Pipelines</a></li>';
		echo '	<li><a href="searchQueries.php">Search Queries</a></li>';
		echo '	<li><a href="searchServices.php">Search Services</a></li>';
		echo '	<li><a href="searchUsers.php">Search Users</a></li>';
		echo '	<li><a href="analyizeQueries.php">Analyze Pipelines</a></li>';
		echo '	<li><a href="analyzeServices.php">Analyze Queries</a></li>';
		echo '</ul>';
		echo '</div>';
	}
	else{
		echo '<ul class="span3 nav nav-sidebar">';
		echo '	<li><a href="index.php" class="active">Home</a></li>';
		echo '	<li><a href="search.php">Search History</a></li>';
		echo '	<li><a href="visualize.php">Visualize</a></li>';
		echo '	<li><a href="selectoperation.php">Manage Services</a></li>';
		echo '	<li><a href="configAcc.php">Configure Account</a></li>';
		echo '</ul>';
		echo '</div>';
	}
?>