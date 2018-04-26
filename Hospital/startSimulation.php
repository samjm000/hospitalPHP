<!DOCTYPE html>
<html lang="en">
<head>
<title>Hospital</title>
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
<!-- NavBar Import--> 
<?php include("navBar.php"); ?>
<!-- Include DB handling PHP --> 
<?php include("databasePHP/connectDB.php"); ?>
<?connectToDB()?>
<main>
    <!-- Central Hospital Main Image--> 
    <div class="jumbotron"> 
       
        <!-- Position start Symphony button in the middle of the screen--> 
      <div class="space"></div>
        <form action="databasePHP/connectDB.php" method="post">
            <p><a class="btn btn-primary btn-lg simulationStartButton" href="#" role="button" onclick="startSimulationState()">Start Simulation »</a></p>
            <p><a class="btn btn-primary btn-lg btn-danger symphonyStartButton" href="#" role="button">Connect to Symphony »</a></p>
        </form>
        </div>
    </div>
</main>

<!--  Bootstrap JavaScript -->
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/color/jquery.color.plus-names-2.1.2.min.js" integrity="sha256-Wp3wC/dKYQ/dCOUD7VUXXp4neLI5t0uUEF1pg0dFnAE=" crossorigin="anonymous"></script>
</body>
</html>