<? session_start(); ?>
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
    <?php 
      include "functions.php";
      include "db_connection.php"; 
    ?>

    <div class="container-fluid">
      <div class="row">
          <?php include 'nav.php'; ?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <!-- Begin Add Service Section --> 
        <form action = "test2.php" method="post"> 
          <h1 class="page-header">Add Service</h1>
          <h4>Service Type</h4> 
            <?php populateDropDownList("id, name", "servicestype", $mysqli, 800); ?></br></br>
          <input type="submit" value ="Select"/>
          <hr> </hr>
        </form>
        <!-- End Add Service Section --> 

<!-- Begin Edit/Delete Service Section -->
  <h3> Edit/Delete Service </h3> 
  <form action "">
      <?php
        populateRadioButtonList("id, name", "viewersets", $mysqli); 
        populateRadioButtonList("id, name", "viewer", $mysqli); 
        populateRadioButtonList("id, name", "filter", $mysqli); 
        populateRadioButtonList("id, name", "transformer", $mysqli); 
        populateRadioButtonList("id, name", "transformer", $mysqli); 
        populateRadioButtonList("id, name", "mapper", $mysqli); 
      ?>
  </br>
    <button type = "submit"> Submit </button> 
    <button type = "submit"> Clear </button> 
  </form>
  </body>
</html>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.min.js"></script>
    <script src="js/navpag.js"></script>

