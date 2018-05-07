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
<link  href="css/configurationStyle.css" rel="stylesheet">
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
include("navBar.php");
}
?>
<!-- Include DB handling PHP --> 
<main>


<div class="container-fluid">
    <div class="row navBarGap">
        <nav class="col-md-2 d-none d-md-block sidebar">
          <div class="sidebar-sticky ">
            <ul class="nav flex-column" id="aboutSidebar">
              <li class="nav-item" >
                <a id="theProject" class="nav-link hospital disabled" href="#"> 
                 
                  The Project 
                </a>
              </li>
              <li class="nav-item">
                <a id="objectives" class="nav-link layout disabled" href="#">
                 
                  Objectives
                </a>
              </li>
              <li class="nav-item">
                <a id="methodology" class="nav-link patients disabled" href="#">
                 
                  Methodology
                </a>
              </li>
              <li class="nav-item">
                <a id="systemDesign" class="nav-link realtime disabled" href="#">
                 System Design
                </a>
              </li>
              <li class="nav-item">
                <a id="credits" class="nav-link overview disabled" href="#">
                  Credits
                </a>
              </li>
            </ul>
          </div>
        </nav>
  		<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom " id="mainBody"></div>
    
</main>

<!--  Bootstrap ect. JavaScript -->
<script src="js/jquery/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap/popper.min.js"></script>
<script src="js/bootstrap/bootstrap.bundle.min.js"></script>
<!--  Local JavaScript -->
<script src="js/configureSimJS/aboutPage.js"></script>
<script src="js/navbarScript.js"></script>
</body>
</html>