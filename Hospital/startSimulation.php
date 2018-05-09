<!DOCTYPE html>
<html lang="en">
<head>
<title>Hospital</title>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!--bootstrap ect css  -->
<link  href="css/bootstrap.min.css" rel="stylesheet">
<link  href="css/bootstrap-grid.min.css" rel="stylesheet">
<link  href="css/siteStyle.css" rel="stylesheet">
<link  href="css/simulationScreen.css" rel="stylesheet">
<!-- Scripts for checking simulation setup prior to launching -->
<?php 
session_start();
//echo  "Logged in as ".$_SESSION["username"];  
if (isset($_SESSION['username']))
{include("navBarLoggedIn.php");
}
else {
include("navBar.php");
}
?>

</head>

<body>
<?php include("simulationHeader.php"); ?>
<!-- Include DB handling PHP --> 
<?php include("databasePHP/connectDB.php"); ?>

<!--Grid System -->
<div class="gridBox"> 
<div class="container-fluid border">
<div class="border row">
 	<div class="border col-6 patientListTitle" >Patient List 
 		<div class="row">
 			<div class="border col-1 patientList">No</div>
		 	<div class="border col-5 patientList">Patient ID.</div>
 			<div class="border col-5 patientList">Patient Time In Dept.</div>
 			<div class="border col-1 patientList">A:D</div>
		</div>
 	</div>
  		
	 <div class="border col-lg-6 admissionsTitle">EXPECTED ADMISSIONS
   		<div class="row"><p id="admissionsText"class="admissionsNumber">0</p></div>
 	</div>
</div>
<br>
</div>
</div>
<!--.row-->

<div id="timeLine"> 
  <div id="timeBar"></div>
</div>
<p>Timeline </p>





<!--  Bootstrap ect. JavaScript -->
<script src="js/jquery/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap/popper.min.js"></script>
<script src="js/bootstrap/bootstrap.bundle.min.js"></script>
<script src="js/jqueryUI/jqueryColour.min.js"></script>
<!--  Local JavaScript -->
<script src="js/configureSimJS/simulationScreen.js"></script>

</body>
</html>
