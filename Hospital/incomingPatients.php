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
	<link  href="css/incomingPatientsStyle.css" rel="stylesheet">
  <!-- JS for patient creation-->
  <script src="/js/IncomingPatient.js"></script>
</head>
<body>
<?php include("navBar.php"); ?>
  <main>
   	<br>
     	<p> This screen allows the user to create custom or generate random patients that will be seen in the hospital simulator.</p>
    	<h4>Incoming Patient</h4>
    	<br>
    	<div class="row">
  		  <div class="col-sm-8"> <button type="button" class="btn btn-outline-primary" onclick="createRandomPatient();">Generate Random Patient</button> </div>
    		<br><br>
    	  <div class="col-sm-4">Patient List</div>
		  </div>
       	<br>
    	
    	</div>
    	<br><br>
    	
    		<h4>Custom Patient Creator</h4>
    		<div class="btn-group">
    		<div class="dropdown">
  			<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" >
    		Age
  			</button>
	  			<div class="dropdown-menu">
    			<a class="dropdown-item" href="#">18-50</a>
    			<a class="dropdown-item" href="#">50-75</a>
    			<a class="dropdown-item" href="#">Above 75</a>
  				</div>
  			</div>
  				<div class="buttonSpacer"></div>
  				<div class="btn-group">
            <div class="dropdown">
  				<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
    			Diagnosis
  				</button>
  					<div class="dropdown-menu">
    				<a class="dropdown-item" href="#">Pneumonia</a>
    				<a class="dropdown-item" href="#">NSTEMI</a>
   					<a class="dropdown-item" href="#">GORD</a>
  			</div>
  		</div>
  	</div>
  </div>
      
			<button type="button" class="btn btn-outline-primary buttonSpacer">Create Patient</button>
	<br>
  	<br>
  	<h4>Patient creation engine</h4>
  	<br>
    	<button type="button" class="btn btn-outline-primary">Start Controlled Creation</button>
    	<br>
    	<br>
    	<button type="button" class="btn btn-outline-primary">Start Randomised Creation</button>
    	
    	
    </main>




 <!--  JavaScript -->
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

</body>
</html>