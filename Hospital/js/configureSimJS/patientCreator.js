
//PATIENT CREATOR CONFIGURATION


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
  $(this).removeClass('btn-secondary').addClass('btn-primary').siblings().removeClass('btn-primary').addClass('btn-secondary');  
  });



//SCript to create patient object 
var patient = {
	"age" : "0";
	"eNotes" : "";
	"diagnosis" : "";
	"arrivalTime" : "";
}

//On click of create patient button create patient object with values in blueprint

$(#createPatientButton).on('click', function () {

console.log($("#ageButtonGroup").findClass("btn-primary")
	)
	});
