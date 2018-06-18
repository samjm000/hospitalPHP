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
<link  href="js/jqueryUI/jquery-ui.min.css" rel="stylesheet">
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
header("Location: ../index.php");
}
?>
<!-- Include DB handling PHP --> 
<?php include("databasePHP/connectDB.php"); ?>

<main>
   
<div class="container-fluid">
    <div class="row navBarGap">
        <nav class="col-md-2 d-none d-md-block sidebar" id="sideNav">
          <div class="sidebar-sticky ">
            <ul class="nav flex-column ">
              <li class="nav-item active">
                <a id="hospitalNav" class="nav-link" href="#"> 
                  <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                  Hospital 
                </a>
              </li>
              <li class="nav-item">
                <a id="patientsNav" class="nav-link" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                  Patients
                </a>
              </li>
              <li class="nav-item">
                <a id="realtimeNav" class="nav-link " href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart-2"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>
                  Realtime
                </a>
              </li>
              <li class="nav-item">
                <a id="overviewNav" class="nav-link " href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                  Overview
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4"><div style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;" class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom " id="mainBody">
            <!--<h1 class="h2">Dashboard</h1> -->
           
          </div>
          <div class="bottomButtons">
            <button type="button" class="btn btn-secondary" id="previousSim">Previous</button>
            <button type="button" class="btn btn-primary " id="continueSim">Continue</button>
      </div>
</main>
<!--  Bootstrap ect. JavaScript -->
<script src="js/jquery/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap/popper.min.js"></script>
<script src="js/bootstrap/bootstrap.bundle.min.js"></script>
<script src="js/jqueryUI/jquery-ui.min.js"></script>
<script src="js/configureSimJS/configureSim.js"></script> 
<script src="js/configureSimJS/diagnosisEngine.js"></script> 
<script src="js/navbarScript.js"></script>

</body>
</html>