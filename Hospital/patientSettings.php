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
          <p class="lead text-muted">Select patient creation mode to allow customisation or automation of patients in simulation</p>
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
<div class="row" id="manualPatientSetup">
	<div class="row">
      <div class="col-sm-3"">
      	<div id="manualPanel" class="card bg-light manualLeftBlock" style="width: 18rem">
  <div class="card-body">
  	<br><br>
    <h5 class="card-title">Patient Blueprint</h5>
    <p class="card-text"> 
    	<div id="ageButtonGroup" class="btn-group btn-group-sm">
  		<button type="button" class="btn btn-secondary ">Under 45</button>
  		<button type="button" class="btn btn-secondary">45 - 75</button>
  		<button type="button" class="btn btn-secondary">Over 75</button>
		</div> 
		<br> <br>
    	 <div class="form-group">
  		<label for="comment">E-Notes:</label>
  		<textarea class="form-control" rows="5" id="e-note"></textarea>
		</div> Preview Diagnosis</p>
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

      		<div class="col-sm-9 right">
      		<div id="manualPanel" class="card bg-light manualRightBlock" style="width: 40rem; padding-left: 10px;">
 			<div class="card-body">
  			<br><br>
    		<h5 class="card-title">Patient List</h5>
    			<p class="card-text">
    				<table class="table table-striped">
    					<thead>
      					<tr>
        				<th>Patient</th>
        				<th>Diagnosis</th>
       					<th>Time to arrive</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>COPD Exacerbation</td>
        <td>1 minute</td>
      </tr>
		<br> <br>
    	</tbody>
    </table>
</p>
</div>
  </div>
</div>
      </div>
    </div>


<!--

<br>Age
<br>Triage Note
<br>Calculated Diagnosis (Gen)
<br>Time elapsed
<br><br>
<br>Created Patient list
<br>
<br>Dynamic creation 
<br>slider of time between patients
<br>.. elongated - brief 
<br>
<br>slider of percentage to be admitted
<br>.. 0 - 100
<br>
<br>
<br>Prefix settings: 
<br>Quiet 
<br>Normal
<br>Busy
<br>Emergency
-->

</main>
<script src="js/configureSimJS/patientCreator.js"></script>
</body>
</html>