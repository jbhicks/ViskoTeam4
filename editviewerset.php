<!DOCTYPE html>
<?php 
include "functions.php";
include "db_connection.php"; 
?>
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

  <!-- JQuery core CSS -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">

  <!-- Jquery and JQuery UI JS !-->
  <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

  <!-- Custom styles for this template -->
  <link href="css/dashboard.css" rel="stylesheet">
  <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">

  <!-- Pop-up J-Query Script -->
  <script language ="javascript">
  $(function() {
    $("#button").click( function()
    {
      if($("#wsdlurl").val() == ''){
        alert("WSDL URL Field Left Empty"); 
        return false; 
      }
      else
        $("#form").submit(); 
    });
  });
  </script>
</head>
<body>

  <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
<?php       include "header.php"; ?>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-3 col-md-2 sidebar">
        <?php include 'nav.php'; ?>
      </div>
      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <!-- Begin Edit Mapper Section --> 
        <h1 class="page-header">Edit Viewer Set</h1>


        <form class = "form" action="registermapper.php">
          <?php 
          echo'
                <div  style="position:absolute; top:250px; left:50x;">
                  <div><h4>Documentation URL * </h4></div>
                  <div><input type="url" id = "url" size = "40"/></div>
                 </div>

               <div  style="position:absolute; top:100px; left:50x;">
                  <div><h4>Name</h4></div>
                  <div><input type="url" id = "url" size = "40"/></div>
                 </div>

                <div  style="position:absolute; top:100px; left:345px;">
                  <div><h4>Brief Description</h4></div>
                  <div><textarea rows = "9" cols="75">Description...</textarea></div>
                 </div>

                <div  style="position:absolute; top:320px; left:50x;">
                  <div><h4>Toolkit </h4></div>
                  <div>'; echo populateDropDownList("id, name", "filter", $mysqli, 800); echo'</div>
                 </div>

                  <div  style="position:absolute; top:400px; left:345px;">
                  <div><input id="button" type = "submit" value="Commit" /></div>
                 </div>

          ';  

         // echo "<h4>Toolkit</h4>"; 
         // populateDropDownList("id, name", "filter", $mysqli, 800); 
          ?>
        </br></br>
       <!-- <input id="button" type = "submit" value="Commit" /> -->

      </form>
      <!-- End Edit Mapper Section -->

<!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="dist/js/bootstrap.min.js"></script>
  <script src="docs/assets/js/docs.min.js"></script>
  <script src="src/Angular.js"></script>
</body>
</html>
