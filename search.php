<? session_start(); ?>
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
  <link rel="stylesheet" type="text/css" href="css/search.css" />
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
            <h1 class="page-header">Search History</h1>
            <div style="display:inline-block; min-height:290px;">
                <b>Start Date: {{dt1 | date:'fullDate'}}</b>
                <div class="well well-sm" ng-model="dt1">
                    <datepicker min="minDate" show-weeks="showWeeks"></datepicker>
                </div>
            </div>
            <div style="display:inline-block; min-height:290px;">
                <b>End Date: {{dt2 | date:'fullDate'}}</b>
                <div class="well well-sm" ng-model="dt2">
                    <datepicker min="minDate" show-weeks="showWeeks"></datepicker>
                </div>
            </div>

        </div>
            <div class="col-md-offset-2 content">
                <button type="button" class="btn btn-primary" ng-click="search()">Search</button>
                <h1 class="page-header">Search Results</h1>
                <div class="gridStyle" ng-grid="gridOptions">
                </div
            </div>
        </div>
    </div>



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
  <script src="js/search.js"></script>
  <script src="js/uibootstrap.js"></script>
  <script src="js/ng-grid-2.0.10.min.js"></script>