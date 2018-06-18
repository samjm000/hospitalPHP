<!DOCTYPE html>
<html lang="en">
<head>
<title>Simulation</title>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<link  href="css/siteStyle.css" rel="stylesheet">
<link  href="css/indexStyle.css" rel="stylesheet">
<!-- Scripts for checking simulation setup prior to launching -->
<script src="js/startSimulationJS/startSimulationCheck.js"></script>
<script src="js/globalVariables.js"></script>

</head>

<body>
<?php include("simulationHeader.php"); ?>
<!-- Include DB handling PHP --> 
<?php include("databasePHP/connectDB.php"); ?>

<div class="border row">
  <div class="border col-lg-3">Total in Department </div>
  		
  		<div class="border col-lg-6">Likely Admissions</div>


  <div class="border col-lg-3">Details</div>
</div><!--.row-->


<!--  Bootstrap ect. JavaScript -->
<script src="js/jquery/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap/popper.min.js"></script>
<script src="js/bootstrap/bootstrap.bundle.min.js"></script>
<script src="js/jqueryUI/jquery-ui.min.js"></script>
<!--//colour on UI? -->
<script src="https://code.jquery.com/color/jquery.color.plus-names-2.1.2.min.js" integrity="sha256-Wp3wC/dKYQ/dCOUD7VUXXp4neLI5t0uUEF1pg0dFnAE=" crossorigin="anonymous"></script>
</body>
</html>