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

  	<div class="container">
  		<div class="row">
  			<div class="col-sm-3 col-md-2 sidebar">
  				<?php include 'nav.php'; ?>
  			</div>
  		</div>
  	</div>
  	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  		<h1 class="page-header">Edit Parameter for Pipeline</h1>
  		<form class="well form-search" ng-submit="submitToNewWindow()" ng-controller="Ctrl">
  		<div class="panel panel-info">
  			<div class="panel-heading" id="1dabs" >
  				<h3 class="panel-title">Service 1</h3>
  			</div>
  			<div class="panel-body" id="div1" style="display:none;">
  			<p>Parameter 1 = <textarea ng-model="text" name="text" cols="30" rows="1">
  			</textarea><br></p>
  			<p>Parameter 2 = <textarea ng-model="text" name="text" cols="30" rows="1">
  			</textarea><br></p>
  			<p>Parameter 3 = <textarea ng-model="text" name="text" cols="30" rows="1">
  			</textarea><br></p>
  			</div>
  		</div>
  		<div class="panel panel-info">
  			<div class="panel-heading" id="2dabs" >
  				<h3 class="panel-title">Service 2</h3>
  			</div>
  			<div class="panel-body" id="div2" style="display:none;">
  			<p>Parameter 4 = <textarea ng-model="text" name="text" cols="30" rows="1">
  			</textarea><br> </p>
  			</div>
  		</div>
  		<div class="panel panel-info">
  			<div class="panel-heading" id="3dabs" >
  				<h3 class="panel-title">Service 3</h3>
  			</div>
  			<div class="panel-body" id="div3" style="display:none;">
  			<p>Parameter 5 = <textarea ng-model="text" name="text" cols="30" rows="1">
  			</textarea><br></p>
  			<p>Parameter 6 = <textarea ng-model="text" name="text" cols="30" rows="1">
  			</textarea><br></p>
  			</div>
		</div>
		<button type="submit" class="btn btn-primary" ng-submit="submitToNewWindow()">Save</button>
		</form>	
	</div>
</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.min.js"></script>
    <script>
    	var absType;
    	$(document).ready(function(){
    		$("#1dabs").click(function(){
    			$("#div1").fadeToggle();
    		});
    	});
    </script>

    <script>
    	$(document).ready(function(){
    		$("#2dabs").click(function(){
    			$("#div2").fadeToggle();
    		});
    	});
    </script>
    <script>
    	$(document).ready(function(){
    		$("#3dabs").click(function(){
    			$("#div3").fadeToggle();
    			s  });
    	});
    </script>