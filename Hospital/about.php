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
<link  href="css/configurationStyle.css" rel="stylesheet">
</head>
<body>
<!-- NavBar Import--> 
<?php include("navBar.php"); ?>
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

<!--  Bootstrap JavaScript -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<script src="js/configureSimJS/aboutPage.js"></script>
<script src="js/navbarScript.js"></script>
</body>
</html>