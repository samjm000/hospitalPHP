<!DOCTYPE html>
<html lang="en">
<head>
<title>Hospital</title>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
<link  href="css/siteStyle.css" rel="stylesheet">
<link  href="css/indexStyle.css" rel="stylesheet">

<!-- Scripts for checking simulation setup prior to launching -->



</head>
<body>
<?php 
session_start();
//echo  "Logged in as ".$_SESSION["username"];  
if (isset($_SESSION['username']))
{include("navBarLoggedIn.php");
}
else {
	include("navBar.php");
//header("Location: ../index.php");
}
?>


<main>
   	<!-- Central Hospital Main Image--> 
    <div class="jumbotron"> 
       
        <!-- Position start Symphony button in the middle of the screen--> 
   		<div class="space"></div>
       <h1> T.E.W.S : Triage Early Warning System</h1>

        </div>
    </div>
</main>

<!--  Bootstrap JavaScript -->
<!--  Bootstrap ect. JavaScript -->
<script src="js/jquery/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap/popper.min.js"></script>
<script src="js/bootstrap/bootstrap.bundle.min.js"></script>
<!--  Local JavaScript -->
<script src="js/navbarScript.js"></script>
</body>
</html>