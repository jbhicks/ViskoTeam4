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
  		<h1 class="page-header">Visualization Search Criteria</h1>
  		<h5>Option 1: Submit Visualization Query</h5>
  		<script>
  			function Ctrl($scope) {
  				$scope.submitToNewWindow = function(){
  					if ($scope.text != null){
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
  		<h5>Option 2: Generate Query</h5>
  		<div class="panel panel-info">
  			<div class="panel-heading" id="1dabs" >
  				<h3 class="panel-title">1D Abstraction</h3>
  			</div>
  			<div class="panel-body" id="div1" style="display:none;">
  				<ul class="list-group">
  					<li class="list-group-item">
  						<h4>Timeline</h4>
  						<a  href="queryParameters.php?visType=timeline" class="thumbnail" id="absImg"><img src="VisExamples/timeline.png"/></a>
  						<div id="absPara"><p>Explanation goes here</p></div>
  						</li>
  				</ul>
  			</div>
  		</div>
  		<div class="panel panel-info">
  			<div class="panel-heading" id="2dabs" >
  				<h3 class="panel-title">2D Abstraction</h3>
  			</div>
  			<div class="panel-body" id="div2" style="display:none;">
  				<ul class="list-group">
  					<li class="list-group-item">
  						<h4>Contour Map</h4>
  						<a href="queryParameters.php?visType=countourMap class="thumbnail" id="absImg"><img src="VisExamples/countourMap.png"></a>
  						<div id="absPara"><p>Explanation goes here</p></div>
  					</li>
  					<li class="list-group-item">
  						<h4>Force Graph</h4>
  						<a href="queryParameters.php?visType=forceGraph" class="thumbnail" id="absImg"><img src="VisExamples/forceGraph.png"></a>
  						<div id="absPara"><p>Explanation goes here</p></div>
  					</li>
  					<li class="list-group-item">
  						<h4>Point Map</h4>
  						<a href="queryParameters.php?visType=pointMap" class="thumbnail" id="absImg"><img src="VisExamples/pointMap.png"></a>
  						<div id="absPara"><p>Explanation goes here</p></div>
  					</li>
  					<li class="list-group-item">
  						<h4>Raster Map</h4>
  						<a href="queryParameters.php?visType=rasterMap" class="thumbnail" id="absImg"><img src="VisExamples/rasterMap.png"></a>
  						<div id="absPara"><p>Explanation goes here</p></div>
  					</li>
  					<li class="list-group-item">
  						<h4>Species Distribution Map</h4>
  						<a href="queryParameters.php?visType=species" class="thumbnail" id="absImg"><img src="VisExamples/species.gif"></a>
  						<div id="absPara"><p>Explanation goes here</p></div>
  					</li>
  					<li class="list-group-item">
  						<h4>Spherized Raster</h4>
  						<a href="queryParameters.php?visType=spherized" class="thumbnail" id="absImg"><img src="VisExamples/spherized.png"></a>
  						<div id="absPara"><p>Explanation goes here</p></div>
  					</li>
  					<li class="list-group-item">
  						<h4>Time Series Plot</h4>
  						<a href="queryParameters.php?visType=timeSeries" class="thumbnail" id="absImg"><img src="VisExamples/timeSeries.png"></a>
  						<div id="absPara"><p>Explanation goes here</p></div>
  					</li>
  					<li class="list-group-item">
  						<h4>VisKo Data Transformations Force Graph</h4>
  						<a href="queryParameters.php?visType=viskoDataTrans" class="thumbnail" id="absImg"><img src="VisExamples/viskoDataTrans.png"></a>
  						<div id="absPara"><p>Explanation goes here</p></div>
  					</li>
  					<li class="list-group-item">
  						<h4>VisKo Instances Bar Chart</h4>
  						<a href="queryParameters.php?visType=viskoInstances" class="thumbnail" id="absImg"><img src="VisExamples/viskoInstances.png"></a>
  						<div id="absPara"><p>Explanation goes here</p></div>
  					</li>
  					<li class="list-group-item">
  						<h4>VisKo Operator Paths Force Graph</h4>
  						<a href="queryParameters.php?visType=viskoOperator" class="thumbnail" id="absImg"><img src="VisExamples/viskoOperator.png"></a>
  						<div id="absPara"><p>Explanation goes here</p></div>
  					</li>
  				</ul>
  			</div>
  		</div>
  		<div class="panel panel-info">
  			<div class="panel-heading" id="3dabs" >
  				<h3 class="panel-title">3D Abstraction</h3>
  			</div>
  			<div class="panel-body" id="div3" style="display:none;">
  				<ul class="list-group">
	  				<li class="list-group-item">
						<h4>Bar Chart</h4>
						<a href="queryParameters.php?visType=barChar" class="thumbnail" id="absImg"><img src="VisExamples/barChar.png"></a>
						<div id="absPara"><p>Explanation goes here</p></div>
					</li>
					<li class="list-group-item">
						<h4>IsoSurfaces Rendering </h4>
						<a href="queryParameters.php?visType=isoSurface" class="thumbnail" id="absImg"><img src="VisExamples/isoSurface.png"></a>
						<div id="absPara"><p>Explanation goes here</p></div>
					</li>
					<li class="list-group-item">
						<h4>Mesh Plot</h4>
						<a href="queryParameters.php?visType=mesh" class="thumbnail" id="absImg"><img src="VisExamples/mesh.jpg"/></a>
						<div id="absPara"><p>Explanation goes here</p></div>
					</li>
					<li class="list-group-item">
						<h4>Molecular Structure</h4>
						<a href="queryParameters.php?visType=molecular" class="thumbnail" id="absImg"><img src="VisExamples/molecular.png"></a>
						<div id="absPara"><p>Explanation goes here</p></div>
					</li>
					<li class="list-group-item">
						<h4>Molecular Structure Cartoon</h4>
						<a href="queryParameters.php?visType=molecularCartoon" class="thumbnail" id="absImg"><img src="VisExamples/molecularCartoon.png"></a>
						<div id="absPara"><p>Explanation goes here</p></div>
					</li>
					<li class="list-group-item">
						<h4>Molecular Structure Ribbon</h4>
						<a href="queryParameters.php?visType=molecularRibbon" class="thumbnail" id="absImg"><img src="VisExamples/molecularRibbon.png"></a>
						<div id="absPara"><p>Explanation goes here</p></div>
					</li>
					<li class="list-group-item">
						<h4>Point Plot</h4>
						<a href="queryParameters.php?visType=pointPlot" class="thumbnail" id="absImg"><img src="VisExamples/pointPlot.png"></a>
						<div id="absPara"><p>Explanation goes here</p></div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="docs/assets/js/docs.min.js"></script>
    <script src="src/angular.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

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