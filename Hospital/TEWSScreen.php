<!DOCTYPE html>
<html lang="en">
<head>
<title>Hospital</title>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!--bootstrap css  -->
<link  href="css/bootstrap.min.css" rel="stylesheet">
<link  href="css/bootstrap-grid.min.css" rel="stylesheet">
<!--local css  -->
<link  href="css/siteStyle.css" rel="stylesheet">
<link  href="css/indexStyle.css" rel="stylesheet">
<!-- Scripts for checking simulation setup prior to launching -->

<script src="js/globalVariables.js"></script>


</head>
<body>
<!-- Session / NavBar Import--> 
<?php 
session_start();
//echo  "Logged in as ".$_SESSION["username"];  
if (isset($_SESSION['username']))
{include("navBarLoggedIn.php");
}
else {
header("Location: ../index.php");
}
?>
<!-- Include DB handling PHP --> 
<?php include("databasePHP/connectDB.php"); ?>
<main>
    <!-- Central Hospital Main Image--> 
    <div class="jumbotron"> 
       
        <!-- Position start Symphony button in the middle of the screen--> 
      <div class="space"></div>
        <form action="databasePHP/connectDB.php" method="post">
            <p><a class="btn btn-primary btn-lg btn-danger symphonyStartButton" href="#" role="button">Connect to Symphony »</a></p>
        </form>
        </div>
    </div>
</main>

<!--  Bootstrap ect. JavaScript -->
<script src="js/jquery/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap/popper.min.js"></script>
<script src="js/bootstrap/bootstrap.bundle.min.js"></script>
<script src="js/jquery/jqueryColour.min.js"></script>
<!--  Local JavaScript -->
<script src="js/startSimulationJS/startSimulationCheck.js"></script>
<script src="js/navbarScript.js"></script>
</body>
</html>