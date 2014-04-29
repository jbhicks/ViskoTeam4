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
          <div class="col-sm-3 col-md-2 sidebar">
          <?php include 'nav.php'; ?>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Visualization Search Criteria</h1>
          <h5>Option 1: Submit Visualization Query</h5>
          <script>
          function Ctrl($scope) {
            $scope.submitToNewWindow = function(){
              if ($scope.text != null){
                //$scope.openWithPost('POST', 'sendQuery.php', $scope.text);
                var link = "http://iw.cs.utep.edu:8080/visko-web/ViskoServletManager?requestType=execute-query&query=";
                $scope.text = escape($scope.text);
                link = link.concat($scope.text);
                window.open(link);
              }
            };
          }
          String.prototype.replaceAll = function(search, replace) {
            if (replace === undefined) {
                return this.toString();
            }
            return this.split(search).join(replace);
          }         

        </script>
          <form class="well form-search" ng-submit="submitToNewWindow()" ng-controller="Ctrl">
            <textarea ng-model="text" name="text" cols="110" rows="5">
            </textarea><br>
            <button type="submit" class="btn btn-primary" ng-submit="submitToNewWindow()">Submit Query</button>
          </form>
          

         <hr>
          <h5>Option 2: Interact with Generation Wizard</h5>
          
          <div id="1dabs" ><p>1D Abstraction</p></div>
          <div id="div1" style="display:none;"><h4>1. Timeline</h4>
            <table class= "absList" >
              <tr>
                <td>Jill</td>
                <td><p>
                  Etiam libero neque, luctus a, eleifend nec, semper at, lorem. Sed pede. 
                  Nulla lorem metus, adipiscing ut, luctus sed, hendrerit vitae, mi.Etiam 
                  libero neque, luctus a, eleifend nec, semper at, lorem. Sed pede. 
                  Nulla lorem metus, adipiscing ut, luctus sed, hendrerit vitae, mi.
                </p></td>   
              </tr>
            </table>

            <p>Etiam libero neque, luctus a, eleifend nec, semper at, lorem. Sed pede. 
              Nulla lorem metus, adipiscing ut, luctus sed, hendrerit vitae, mi.Etiam 
              libero neque, luctus a, eleifend nec, semper at, lorem. Sed pede. 
              Nulla lorem metus, adipiscing ut, luctus sed, hendrerit vitae, mi. 
              Etiam libero neque, luctus a, eleifend nec, semper at, lorem. Sed pede. 
              Nulla lorem metus, adipiscing ut, luctus sed, hendrerit vitae, mi.
              Etiam libero neque, luctus a, eleifend nec, semper at, lorem. Sed pede. 
              Nulla lorem metus, adipiscing ut, luctus sed, hendrerit vitae, mi.
              Etiam libero neque, luctus a, eleifend nec, semper at, lorem. Sed pede. 
              Nulla lorem metus, adipiscing ut, luctus sed, hendrerit vitae, mi.
              Etiam libero neque, luctus a, eleifend nec, semper at, lorem. Sed pede. 
              Nulla lorem metus, adipiscing ut, luctus sed, hendrerit vitae, mi.</p></div>
              <div id="2dabs" ><p>2D Abstraction</p></div>
              <div id="div2" style="display:none;">
                <h4>1. Contour Map</h4>
                <h4>2. Force Graph</h4>
                <h4>3. Point Map</h4>
                <h4>4. Raster Map</h4>
                <h4>5. Species Distribution Map</h4>
                <h4>6. Spherized Raster</h4>
                <h4>7. Time Series Plot</h4>
                <h4>8. VisKo Data transformations Force Graph</h4>
                <h4>9. VisKo Instances Bar Chart</h4>
                <h4>10. VisKo Operation Paths Force Graph</h4>
                <p>Etiam libero neque, luctus a, eleifend nec, semper at, lorem. Sed pede. 
                  Nulla lorem metus, adipiscing ut, luctus sed, hendrerit vitae, mi.Etiam 
                  libero neque, luctus a, eleifend nec, semper at, lorem. Sed pede. 
                  Nulla lorem metus, adipiscing ut, luctus sed, hendrerit vitae, mi. 
                  Etiam libero neque, luctus a, eleifend nec, semper at, lorem. Sed pede. 
                  Nulla lorem metus, adipiscing ut, luctus sed, hendrerit vitae, mi.
                  Etiam libero neque, luctus a, eleifend nec, semper at, lorem. Sed pede. 
                  Nulla lorem metus, adipiscing ut, luctus sed, hendrerit vitae, mi.
                  Etiam libero neque, luctus a, eleifend nec, semper at, lorem. Sed pede. 
                  Nulla lorem metus, adipiscing ut, luctus sed, hendrerit vitae, mi.
                  Etiam libero neque, luctus a, eleifend nec, semper at, lorem. Sed pede. 
                  Nulla lorem metus, adipiscing ut, luctus sed, hendrerit vitae, mi.</p></div>
                  <div id="3dabs" ><p>3D Abstraction</p></div>
                  <div id="div3" style="display:none;">
                    <h4>1. Bar Chart</h4>
                    <h4>2. IsoSurfaces Rendering </h4>
                    <h4>3. Mesh Plot</h4>
                    <h4>4. Molecular Structure</h4>
                    <h4>5. Molecular Structure Cartoon</h4>
                    <h4>6. Molecular Structure Ribbon</h4>
                    <h4>7. Point Plot</h4>

                    <p>Etiam libero neque, luctus a, eleifend nec, semper at, lorem. Sed pede. 
                      Nulla lorem metus, adipiscing ut, luctus sed, hendrerit vitae, mi.Etiam 
                      libero neque, luctus a, eleifend nec, semper at, lorem. Sed pede. 
                      Nulla lorem metus, adipiscing ut, luctus sed, hendrerit vitae, mi. 
                      Etiam libero neque, luctus a, eleifend nec, semper at, lorem. Sed pede. 
                      Nulla lorem metus, adipiscing ut, luctus sed, hendrerit vitae, mi.
                      Etiam libero neque, luctus a, eleifend nec, semper at, lorem. Sed pede. 
                      Nulla lorem metus, adipiscing ut, luctus sed, hendrerit vitae, mi.
                      Etiam libero neque, luctus a, eleifend nec, semper at, lorem. Sed pede. 
                      Nulla lorem metus, adipiscing ut, luctus sed, hendrerit vitae, mi.
                      Etiam libero neque, luctus a, eleifend nec, semper at, lorem. Sed pede. 
                      Nulla lorem metus, adipiscing ut, luctus sed, hendrerit vitae, mi.</p></div>

                    </div>
                  </div>
                </div>      

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="docs/assets/js/docs.min.js"></script>
    <script src="src/Angular.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
    </script>
    <script>
      var absType;
      $(document).ready(function(){
        $("#1dabs").click(function(){
          $("#div1").fadeToggle();
          absType = "You have selected:";
          window.alert(absType);
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