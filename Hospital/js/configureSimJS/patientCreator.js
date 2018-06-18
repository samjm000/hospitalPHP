
//PATIENT CREATOR CONFIGURATION

//Class and Constructor for Patient
function Patient(age, mewsScore, eNote, arrivalTime, admissionProbability) {
    this.age = age;
    this.mewsScore = mewsScore;
    this.eNote = eNote;
    this.diagnosis = diagnosis;
    this.arrivalTime = arrivalTime;
    this.admissionProbability = arrivalTime;
}
Patient.prototype.getDetails = function() {
  return ("Age:"+this.age+", MEWS:"+this.mewsScore+", eNote:"+this.eNote+", Arrival Time:"+this.arrivalTime+".");
}
Patient.prototype.getAdmissionPercentage = function() {
  //use mews + e-Note + age
  return eNoteTextProcessor($("#e-note").val(),$("#mewsRange").val());
}

//MEWS Slide 
var mewsSlider = document.getElementById("mewsRange");
var mewsOutput = document.getElementById("mewsScore");
mewsOutput.innerHTML = mewsSlider.value; // Display the default slider value
// Update the current slider value (each time you drag the slider handle)
mewsSlider.oninput = function() {
    mewsOutput.innerHTML = this.value;
    $("#probability").val(eNoteTextProcessor($("#e-note").val(),$("#mewsRange").val()));
} 


//Update Admission probability with E-Note changes, set subsequent variables
$("#e-note").bind('input propertychange', function() {
  $("#probability").val(eNoteTextProcessor(this.value,$("#mewsRange").val())+" %");
});

//Validate patient creation

$("#createPatientButton").on('click', function() { 
    var ageGroup;
    var eNoteTrimmed;
    var arrivalTime;
    var patientList =[];
    var admissionProbability;

    // GET AGE
    if($("#ageButtonGroup >.btn").hasClass("btn-primary")) {
      ageGroup = ($("#ageButtonGroup .btn-primary").attr('id'));
    }
    else {
      alert("No patient age selected");
      return;
    }
    //GET MEWS 
    mewsScore = $("#mewsRange").val();
    //GET ENote
    if($.trim($("#e-note").val())) {
      console.log("E-note data present and is " +eNoteTrimmed);
      console.log("Subsequent admission Percentage is " + $("#probability").val());
    }
    else {
      alert("No e-note text entered");
      return;
    }
   
    admissionProbability = $("#probability").val();
    //Get arrival time and Send patient to Patient list 
    arrivalTime = $("#myRange").val();
    //test  protype functions
    var patient = new Patient(ageGroup,mewsScore,eNoteTrimmed,arrivalTime, admissionProbability);
    console.log("Patient Summary :"+patient.getDetails());
    patientList.push(patient);
    //consider pushing to DB 

    //save to temporary table for use 
    buildRow(patientList);
  });


//Set Automatic Engine cookies 

$(document).ready(function(){
  //local variables for page
  
$("#slowAE").on('click', function() { 
  simBusyStatus=0;
 document.cookie = "simBusyStatus="+simBusyStatus;
});
$("#normalAE").on('click', function() { 
  simBusyStatus=1;
  document.cookie = "simBusyStatus="+simBusyStatus;
});
$("#busyAE").on('click', function() { 
  simBusyStatus=2;
  document.cookie = "simBusyStatus="+simBusyStatus;
});
$("#emergencyAE").on('click', function() { 
  simBusyStatus=3;
  document.cookie = "simBusyStatus="+simBusyStatus;
});
});