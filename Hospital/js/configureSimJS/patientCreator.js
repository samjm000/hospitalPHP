
//PATIENT CREATOR CONFIGURATION

//Page Variables
var eNoteTrimmed;
var diagnosis;
var arrivalTime;
var patientList =[];

//Constructor for Patient
function Patient(age, eNote, diagnosis, arrivalTime) {
    this.age = age;
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
    try {
      var patient = new Patient(ageGroup,eNoteTrimmed,diagnosis,arrivalTime);
      console.log("patient : " +patient.diagnosis+ ":" +patient.arrivalTime);
      }
      catch(err)
      {
        console.log("Error : " +err);
      }
    patientList.push(patient);
    console.log("patientList length :" +patientList.length);
    buildRow(patientList);
  });

//push patient to table on screen





