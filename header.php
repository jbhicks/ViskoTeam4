<?php
	session_start();
	
	if(isset($_SESSION['loggedInEmail'])){
		echo '<div class="container-fluid">';
		echo '<div class="navbar-header">';
		echo '		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">';
		echo '			<span class="sr-only">Toggle navigation</span>';
		echo '			<span class="icon-bar"></span>';
		echo '			<span class="icon-bar"></span>';
		echo '			<span class="icon-bar"></span>';
		echo '		</button>';
		echo '		<a class="navbar-brand" href="#"><img src="images/visko.png"/>Visualization Knowledge Project</a>';
		echo '</div>';
		echo '<div class="navbar-collapse collapse">';
		echo '<ul class="nav nav-pills pull-right">';
        echo '  <li><h1>WELCOME ' . $_SESSION["loggedInEmail"] . '!</h1></li>';
		echo '	<li><a href="logout.php">LOGOUT</a></li>';
        echo '</ul>';
		echo '</div>';
		echo '</div>';
	}
	else{
		
		echo '<div class="container-fluid">';
		echo '	<div class="navbar-header">';
		echo '		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">';
		echo '			<span class="sr-only">Toggle navigation</span>';
		echo '			<span class="icon-bar"></span>';
		echo '			<span class="icon-bar"></span>';
		echo '			<span class="icon-bar"></span>';
		echo '		</button>';
		echo '		<a class="navbar-brand" href="#"><img src="images/visko.png"/>Visualization Knowledge Project</a>';
		echo '	</div>';
		echo '	<div class="navbar-collapse collapse">';
		echo '			<form class="navbar-form navbar-right" role="form" action="login.php" method="post">';
		echo '				<div class="form-group">';
		echo '					<input type="text" placeholder="Email" class="form-control" name="email">';
		echo '				</div>';
		echo '				<div class="form-group">';
		echo '					<input type="password" placeholder="Password" class="form-control" name="password">';
		echo '				</div>';
		echo '				<button type="submit" class="btn btn-success">Log in</button>';
		echo '				<button type="submit" class="btn btn-success" onclick="form.action=' . "'register.php'" . '">Register</button>';
		echo '			</form>';
		echo '	</div>';
		echo '			<div style="float:right;"><a href="forgot.php">Forgot Password</a></div>';
		echo '</div>';
	}
?>