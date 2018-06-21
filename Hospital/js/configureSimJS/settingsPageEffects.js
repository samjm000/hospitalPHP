//PATIENT SETTINGS PAGE JS - WORKS WITH PATIENT CREATOR AND DIAGNOSIS ENGINE

var listOfPatients = 0;

//Patient creator colour coding on click
$("#manVsAutoBtnGroup").on('click', '.btn', function() {
  $(this).removeClass('btn-secondary').addClass('btn-primary').siblings().removeClass('btn-primary').addClass('btn-secondary');  
  });

//Patient creator colour coding on click
$("#autoBusyButtonGroup").on('click', '.btn', function() {
  $(this).removeClass('btn-secondary').addClass('btn-primary').siblings().removeClass('btn-primary').addClass('btn-secondary');  
  });

//Patient manual vs automatic creation buttons
$(document).ready(function(){
    $("#automaticPanel").hide();

    $("#automaticButton").click(function(){
    	$("#manualPatientSetup").hide();
        $("#automaticPanel").fadeIn();
    });
    //Patient List clear
  $("#clearPatientList").click(function(){
    console.log("Clearing Patients");
    patientList.length=0;
    $("#patientListTableBody").empty();
  });

   $("#manualButton").click(function(){
      console.log("manualButton pushed")
      $("#automaticPanel").hide();
        $("#manualPatientSetup").fadeIn();
    });
});


//Arrival time slider 
var slider = document.getElementById("myRange");
var output = document.getElementById("elapsedSlider");
output.innerHTML = slider.value; // Display the default slider value
// Update the current slider value (each time you drag the slider handle)
slider.oninput = function() {
    output.innerHTML = this.value;
} 

//Patient blueprint colour coding on click
$("#ageButtonGroup").on('click', '.btn', function() {
  console.log("Setting patient ageGroup to :");
  $(this).removeClass('btn-secondary').addClass('btn-primary').siblings().removeClass('btn-primary').addClass('btn-secondary');  
  ageGroup = $(this).prop('id');
  console.log(ageGroup);
  });


//Dynamic table creator
function buildRow(patientList) {
  for (var i=0; i<patientList.length; i++) {
    listOfPatients++;
   //$("#card-body").animate({backgroundcolor: "#66ff99"}, 1500).animate({backgroundcolor: "fff"}, 1500);
   var tableReplacement = "<tr><td>"+(listOfPatients)+"</td><td>"+patientList[i].mewsScore+"</td><td>"+patientList[i].admissionProbability+"</td><td>"+patientList[i].arrivalTime+"</td></tr>";
    console.log("Replacement String:" + tableReplacement);
  }
  
  $("#cardBodyRight").animate({backgroundColor: "#ccffe6"},250).animate({backgroundColor: "#fff"},1000);
 
  $("#patientListTableBody").append(tableReplacement);
  console.log("Patient added to table");
};


