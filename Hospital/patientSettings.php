<!DOCTYPE html>
<html lang="en">
<head>
<title>patient setting</title>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
<main>
<section class="jumbotron text-center">
        <div class="container patientSelector" >
          <h1 class="jumbotron-heading">Patient Creator</h1>
          <p class="lead text-
          uted">Select patient creation mode to allow customisation or automation of patients in simulation</p>
          	<p>
          	<div id="manVsAutoBtnGroup" class="btn-group">

            <a id="manualButton" href="#" class="btn btn-primary my-2">Manual</a>
            <a id="automaticButton" href="#" class="btn btn-secondary my-2">Automatic</a>
        	</div>
		  	</p>
        </div>
      </section>
<br>
<br>
<!--Automatic Panel-->
<div id="automaticPanel">
<br>
Patient creation engine<br><br>
Select from the below frequency of admissions<br><br>
<div id="autoBusyButtonGroup" class="btn-group">
<a href="#" type="button" class="btn btn-primary" id="slowA&E">Slow</a>
<a href="#" type="button" class="btn btn-secondary" id="normalA&E">Normal</a>
<a href="#" type="button" class="btn btn-secondary" id="busyA&E">Busy</a>
<a href="#" type="button" class="btn btn-secondary" id="EmergencyA&E">Emergency</a>
<br><br>
</div>
</div>
<!-- Manual Panel -->
<div class="row" id="manualPatientSetup">
	<div class="row">
      <div class="col-sm-3"">
      	<div id="manualPanel" class="card bg-light manualLeftBlock" style="width: 18rem">
  <div id="cardBodyLeft" class="card-body">
  	<br><br>
    <h5 class="card-title">Patient Blueprint</h5>
    <p class="card-text"> 
      <!-- AGE -->
    	<div id="ageButtonGroup" class="btn-group btn-group-sm">
  		<button id ="1" type="button" class="btn btn-secondary ">Under 45</button>
  		<button id="2" type="button" class="btn btn-primary">45 - 75</button>
  		<button id="3" type="button" class="btn btn-secondary">Over 75</button>
		</div> 
		<br><br>
    <!-- NEWS SCORE -->
    <div class="slidecontainer">
        <input type="range" min="0" max="11" value="0" id="newsRange">
           <p><span id="newsScore"></span> MEWS Score</p>
      </div>

    <br><br>
    	 <div class="form-group">
  		<label for="comment">E-Notes:</label>
  		<textarea class="form-control" rows="5" id="e-note"></textarea>
		</div> 
    <p> Preview Admission Probability</p>
		<textarea class="form-control" rows="1" id="diagnosis" readonly ></textarea>
		<br>
		<p>Elapsed time to arrival:</p>
			<div class="slidecontainer">
  			<input type="range" min="1" max="60" value="20" id="myRange">
  				 <p><span id="elapsedSlider"></span> Minutes</p>
			</div><br>
    		<a id="createPatientButton" href="#" class="btn btn-primary text-center">Create Patient</a>
  			</div>
			</div>
			</div>

			<!-- PATIENT LIST TABLE -->

      		<div class="col-sm-6 right">
      		<div id="manualPanel" class="card bg-light manualRightBlock" style="width: 40rem; padding-left: 10px;">
 			<div id="cardBodyRight" class="card-body">
  			<br><br>
    		<h5 class="card-title">Patient List</h5>
    			<p class="card-text">
    				<table id="patientListTable" class="table table-striped">
    					<thead>
      					<tr>
        				<th>Patient</th>
        				<th>Diagnosis</th>
       					<th>Time to arrive</th>
      </tr>
    </thead>
    <tbody id="patientListTableBody">
 		<br> <br>
    	</tbody>
    </table>
</p>
<a id="clearPatientList" href="#" class="btn btn-primary text-center">Clear List</a>
</div>
  </div>
</div>
      </div>
    </div>

</main>
<script src="js/configureSimJS/patientCreator.js"></script> 
<script src="js/configureSimJS/settingsPageEffects.js"></script> 
</body>
</html>