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
<link  href="css/configurationStyle.css" rel="stylesheet">

</head>
<body>
<!-- NavBar Import--> 
<?php include("navBar.php"); ?>
<!-- Include DB handling PHP --> 
<?php include("databasePHP/connectDB.php"); ?>
<main>


<div class="container-fluid">
    <div class="row navBarGap">
        <nav class="col-md-2 d-none d-md-block sidebar">
          <div class="sidebar-sticky ">
            <ul class="nav flex-column ">
              <li class="nav-item " >
                <a id="theProject" class="nav-link active hospital whiteTextColour" href="#"> 
                 
                  The Project <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a id="objectives" class="nav-link layout whiteTextColour" href="#">
                 
                  Objectives
                </a>
              </li>
              <li class="nav-item">
                <a id="methodology" class="nav-link patients whiteTextColour" href="#">
                 
                  Methodology
                </a>
              </li>
              <li class="nav-item">
                <a id="systemDesign" class="nav-link realtime whiteTextColour" href="#">
                 System Design
                </a>
              </li>
              <li class="nav-item">
                <a id="credits" class="nav-link overview whiteTextColour" href="#">
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
 <!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<script src="js/configureSimJS/aboutPage.js"></script>

</body>
</html>