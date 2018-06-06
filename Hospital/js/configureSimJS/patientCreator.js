
//PATIENT CREATOR CONFIGURATION

//Page Variables
var eNoteTrimmed;
var diagnosis;
var arrivalTime;
var patientList =[];
var simBusyStatus=0;

//Constructor for Patient
function Patient(age, newsScore, eNote, diagnosis, arrivalTime) {
    this.age = age;
    this.newsScore = newsScore;
    this.eNote = eNote;
    this.diagnosis = diagnosis;
    this.arrivalTime = arrivalTime;
}

//Update Diagnosis with E-Note changes, set subsequent variables
$("#e-note").bind('input propertychange', function() {
  $("#diagnosis").val(calculateDiagnosis(this.value));
  eNoteTrimmed = $.trim($("#e-note").val());
  diagnosis = $("#diagnosis").val();
});

//Validate patient creation
$("#createPatientButton").on('click', function() { 
    // check patient age is selected
    if($("#ageButtonGroup >.btn").hasClass("btn-primary")) {
    }
    else {
      alert("No patient age selected");
      return;
    }
    // check e-note is not empty 
    if($.trim($("#e-note").val())) {
      console.log("E-note data present and is " +eNoteTrimmed);
      console.log("Subsequent diagnosis is " + $("#diagnosis").val());
    }
    else {
      alert("No e-note text entered");
      return;
    }
    //Get arrival time and Send patient to Patient list
    arrivalTime = $("#myRange").val();
    var patient = new Patient(ageGroup,eNoteTrimmed,diagnosis,arrivalTime);
    patientList.push(patient);
    //consider pushing to DB 

    //save to temporary table for use 
    buildRow(patientList);
  });


//Set Automatic Engine cookies 

$("#slowA&E").on('click', function() { 
  simBusyStatus=0;
  document.cookie = "simBusyStatus="+simBusyStatus;
};
$("#normalA&E").on('click', function() { 
  simBusyStatus=1;
  document.cookie = "simBusyStatus="+simBusyStatus;
};
$("#busyA&E").on('click', function() { 
  simBusyStatus=2;
  document.cookie = "simBusyStatus="+simBusyStatus;
};
$("#emergencyA&E").on('click', function() { 
  simBusyStatus=3;
  document.cookie = "simBusyStatus="+simBusyStatus;
};

