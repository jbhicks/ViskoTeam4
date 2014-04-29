<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <title>VisKo</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<?php include "header.php" ?>
    </div>

    <div class="container-fluid">
      <div class="row">
        <!--<div class="col-sm-3 col-md-2 sidebar">-->
          <?php include 'nav.php'; ?>
        <!--</div>-->
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h2 class="page-header">FORGOT PASSWORD</h2><?php if(!isset($_SESSION))
            {
                session_start();
            } ; ?>
			<p>
				<form role="form" method="post" action="emailForgot.php">
				<div class="form-group">
						<label for="email">Email Address</label>
						<input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
						<label for="confirmemail">Confirm Email Address</label>
						<input type="email" class="form-control" id="confirmemail" name="confirmemail" placeholder="Confirm email">
					</div>
					<button type="submit" class="btn btn-default">Submit</button>
				</form>
			</p>
          
		</div>
	</div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.min.js"></script>
  </body>
</html>
