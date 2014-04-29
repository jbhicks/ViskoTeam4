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

  	<div class="container">
  		<div class="row">
  			<div class="col-sm-3 col-md-2 sidebar">
  				<?php include 'nav.php'; ?>
  			</div>
  		</div>
  	</div>
  	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  		<h1 class="page-header">Set Query Parameters</h1>
  		<h5>Thumbnail and text corresponding to visualization abstraction </h5>
  	<?php
		if ($_GET['visType'] != null ){
			echo '<pre>';
			echo '<a  href="queryParameters.php?visType='.$_GET['visType'].'" class="thumbnail" id="absImg"><img src="VisExamples/'.$_GET['visType'].'.png"/></a>';
			echo ' ';
			echo '</pre>';
		 }
		 else
		 	echo '<p> IMAGE NOT FOUND </p>'; 
	?>
  		<hr>
  		<form method="post" action="">
  		<table>
			<tr>
				<td><h5>Viewer Set</h5>
					<select name="viewerSet" style="width: 387px">
					<option value="web">Web Browser</option>
					<option value="paraview">ParaView</option>
					<option value="d3viewerset">D3 Viewer Set</option>
				</select>
				</td>
				<td><p><b>Viewer Set</b> refer to a programs that present the abstraction onto
				the screen, such as visualization specific software like ParaView or more
				generic applications like a Web browser that can display images in standard
				formats. </p>
<option title="http://openvisko.org/rdf/pml2/formats/XML.owl#XML" value="http://openvisko.org/rdf/pml2/formats/XML.owl#XML">XML</option></select></td>
	</tr>	
			</tr>	
  				<td><h5>Input Data Format</h5>
  				<select name="inputDataFOrmat" style="width: 387px">
					<option value="cvs">CVS</option>
					<option value="jpeg">JPEG</option>
					<option value="gif">GIF</option>
					<option value="html">HTML</option>
					<option value="jpeg">JPEG</option>
					<option value="json">JSON</option>
					<option value="les">LITTLE-ENDIAN-SEQUENCE</option>
					<option value="netcdf">NETCDF</option>
					<option value="pdf">PDF</option>
					<option value="plain">PLAIN</option>
					<option value="plaintext">PLAINTEXT</option>
					<option value="png">PNG</option>
					<option value="postscript">POSTSCRIPT</option>
					<option value="rdfxml">RDFXML</option>
					<option value="spaces">SPACESEPARATEDVALUES</option>
					<option value="sparql">SPARQLRESULTSXML</option>
					<option value="tiff">TIFF</option>
					<option value="xdmf">XDMF</option>
					<option value="xml">XML</option>
				</select>
  				</td>		
  				<td><p><b>Input Data Format</b> refer to the file encoding of you inputing
  				dataset.</p> 
  			<tr>
  				<td><h5>Input Data Type</h5>
  				<select name="inputDataType" style="width: 387px">
					<option value="graph">http://d3js.org/d3.owl#Graph</option>
					<option value="gridcoard">http://gmt.soest.hawaii.edu/gmt-data.owl#2D_Grid_COARD</option>
					<option value="variablelatlon">http://iridl.ldeo.columbia.edu/ontologies/cf-obj.owl#Variable_with_LatLon</option>
					<option value="variabletime">http://iridl.ldeo.columbia.edu/ontologies/cf-obj.owl#Variable_with_Time</option>
					<option value="datatransformationpaths">http://openvisko.org/rdf/ontology/visko.owl#VisKo_DataTransformationPaths</option>
					<option value="instancessummary">http://openvisko.org/rdf/ontology/visko.owl#VisKo_InstanceSummary</option>
					<option value="knowledgebase">http://openvisko.org/rdf/ontology/visko.owl#VisKo_KnowledgeBase</option>
					<option value="operatorpaths">http://openvisko.org/rdf/ontology/visko.owl#VisKo_OperatorPaths</option>
					<option value="xyzdata">XYZ Data</option>
					<option value="array1dfloat">http://rio.cs.utep.edu/ciserver/ciprojects/HolesCode/HolesCodeSAW3.owl#Array1DFloat</option>
					<option value="array1dinterger">http://rio.cs.utep.edu/ciserver/ciprojects/HolesCode/HolesCodeSAW3.owl#Array1DInteger</option>
					<option value="vtkimagedata3d">http://www.vtk.org/vtk-data.owl#vtkImageData3D</option>
					<option value="vtkpolydata">http://www.vtk.org/vtk-data.owl#vtkPolyData</option>
					<option value="thing">http://www.w3.org/2002/07/owl#Thing</option>
				</select>
  				</td>	
  				<td><p><b>Input Data Type</b> refer to the data structure represented by your
  				input dataset.</p>
  			</tr>
				<td><h5>Input Data URL</h5>
				
					<textarea name="inputdataurl" cols="57" rows="1">
					</textarea><br>
				
				</td>
				<td><p><b>Input Data URL</b> refers to the location of your input data which 
				is to be visualized.</p>
  			</tr>
			</table>
			<br>
			<br>
			<input type="submit" value="Submit" />
		</form>
	</div>
</div>



<?php
echo $_GET['visType'];
?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.min.js"></script>

