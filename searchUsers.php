<?  session_start();   ?>
<!DOCTYPE html>
<html lang="en" ng-app="search">
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
  <!-- NG-Grid CSS -->
  <link rel="stylesheet" type="text/css" href="css/ng-grid.min.css" />
  <link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/themes/overcast/jquery-ui.css" />
        
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
  <div class="container-fluid" ng-controller="DatePickerCtrl">
    <div class="row">
        <div class="container">
            <?php include 'nav.php'; ?>
        </div>

        <div class="col-md-offset-2 content">
         
            <div class="form-group" style ="position:absolute; top: 155px; ">
              <label for="exampleInputEmail1">Email address</label>
              <input ng-model="email" type="text" name ="input" class="form-control" placeholder="User Email" size="50">
            </div>
            <div class="form-group" style ="position:absolute; top: 230px; ">
              <label for="exampleInputEmail1">First Name</label>
              <input ng-model="fName" type="text" name ="input" class="form-control" placeholder="First Name" size="50">
            </div>

            <div class="form-group" style ="position:absolute; top: 305px; ">
              <label for="exampleInputEmail1">Last Name</label>
              <input ng-model="lName" type="text" name ="input" class="form-control" placeholder="Last Name" size="50">
            </div>

            <div class="form-group" style ="position:absolute; top: 380px; ">
              <label for="exampleInputEmail1">Affiliation</label>
              <select class="form-control" ng-model="myAss" ng-options="o for o in arr"></select>
            </div>

            <div class="form-group" style ="position:absolute; top: 390px; right:39.5%;">
              <label for="exampleInputEmail1">Account Status</label>
              <select class="form-control" ng-model="myStatus" ng-options="o for o in accountStatus"></select>
            </div>

            <h1 class="page-header">User Search Criteria</h1>
            <div style="display:inline-block; min-height:290px; position:absolute; right: 10%;">
                <b>Start Date: {{dt1 | date:'fullDate'}}</b>
                <div class="well well-sm" ng-model="dt1">
                    <datepicker min="minDate" show-weeks="showWeeks"></datepicker>
                </div>
            </div>

            <div style="display:inline-block; min-height:200px; position:absolute; right: 30%;">
                <b>End Date: {{dt2 | date:'fullDate'}}</b>
                <div class="well well-sm" ng-model="dt2">
                    <datepicker min="minDate" show-weeks="showWeeks"></datepicker>
                </div>
            </div>

        </div>
            <div class="col-md-offset-2 content">
                <button type="button" class="btn btn-primary" ng-click="search()" style="position:absolute; top:460px; left: 1036px; ">Search</button>
                <h1 class="page-header" style = "position:absolute; top: 500px; ">Search Results</h1>
                <div class="gridStyle" ng-grid="gridOptions" style="position:absolute; top: 600px; width: 1400px; height: 400px"></div>                
            </div>
        </div>
    </div>
  </div>
  {{}}

  </body>
</html>

  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="dist/js/bootstrap.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.min.js"></script>
  <script src="js/navpag.js"></script>
  <script src="js/searchUsers.js"></script>
  <script src="js/uibootstrap.js"></script>
  <script src="js/ng-grid-2.0.10.min.js"></script>