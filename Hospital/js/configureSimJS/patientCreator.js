
//PATIENT CREATOR CONFIGURATION

var patient = {
  "age" : "0",
  "eNotes" : "",
  "diagnosis" : "",
  "arrivalTime" : ""
};


//Patient creator colour coding on click
$("#manVsAutoBtnGroup").on('click', '.btn', function() {
  $(this).removeClass('btn-secondary').addClass('btn-primary').siblings().removeClass('btn-primary').addClass('btn-secondary');  
  });

//Patient manual vs automatic creation buttons
$(document).ready(function(){
    $("#manualButton").click(function(){
    	console.log("manualButton pushed")
    	$("#automaticPanel").hide();
        $("#manualPatientSetup").fadeIn();
    });
});

//Patient manual vs automatic creation buttons
$(document).ready(function(){
    $("#automaticButton").click(function(){
    	$("#manualPatientSetup").hide();
        $("#automaticPanel").fadeIn();
    });
});


//slider 
var slider = document.getElementById("myRange");
var output = document.getElementById("elapsedSlider");
output.innerHTML = slider.value; // Display the default slider value

// Update the current slider value (each time you drag the slider handle)
slider.oninput = function() {
    output.innerHTML = this.value;
} 

//Patient blueprint colour coding on click

$("#ageButtonGroup").on('click', '.btn', function() {
  console.log("Setting patient age ");
  $(this).removeClass('btn-secondary').addClass('btn-primary').siblings().removeClass('btn-primary').addClass('btn-secondary');  
  patient.age = $(this).prop('id');
  console.log(patient.age);
  });



//SCript to create patient object 

  //plan : 
  //Take age if exists - if not - error
  //take E-Notes - if empty - error
  // take elapsed time to arrival

  // create patient

$("#createPatientButton").on('click', function() { 

    // double check patient age
    if($("#ageButtonGroup >.btn").hasClass("btn-primary")) {
    }
    else {
      console.log("no button selected"); 
      alert("No patient age selected");
    }

    //check patient diagnosis

  });




//On click of create patient button create patient object with values in blueprint

