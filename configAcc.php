<? session_start(); ?>
<!DOCTYPE html>
<html lang="en" ng-app>
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
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">

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
          <?php include 'nav.php'; ?>
      </div>
    </div>
	<div class="col-md-offset-2 content">
	
	    <h1 class="page-header">Change Password</h1>
	    
		<form name="changePasswordForm" novalidate submit="changePassword()" ng-controller="FormCtrl">
			<div style="width:500px" class="form-group">
			    <input class="form-control" name="currentpassword" ng-model="password.currentPassword" type="password" placeholder="Current Password" required/>
			</div>
			<div style="width:500px" class="form-group">
			    <input class="form-control" name="password" ng-model="password.newPassword" type="password" placeholder="New Password" required/>
			</div>
			<div style="width:500px" class="form-group">
			    <input name="confirm_password" class="form-control" ng-model="password.confirmNewPassword" type="password" placeholder="Confirm New Password" required/>
			</div>
			{{password.currentPassword}}<br>
			{{password.newPassword}}<br>
			{{password.confirmNewPassword}}<br>
		    <div class="form-group">
		        <button type="submit" class="btn btn-primary pull-left" ng-click="changePassword()"
		        	<span>Submit</span>
		        </button>
		    </div>
   		</form>
    </div>
    <div class="col-md-offset-2 content" style="position: absolute;top: 400px;width: 100%">
      <h1 class="page-header">Change Email</h1>
    </div>
  </body>
</html>

  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="dist/js/bootstrap.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.min.js"></script>
  <script src="js/navpag.js"></script>
  <script src="js/configAcct.js"></script>