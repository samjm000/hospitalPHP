
//PATIENT CREATOR CONFIGURATION

//Constructor for Patient
function Patient(age, eNote, diagnosis, arrivalTime) {
    this.age = age;
    this.eNote = eNote;
    this.age = age;
    this.arrivalTime = arrivalTime;
}


//To create patient object 
  //Take age if exists - if not - error
  //take E-Notes - if empty - error
  //take elapsed time to arrival 


$("#createPatientButton").on('click', function() { 

    // check patient age is selected
    if($("#ageButtonGroup >.btn").hasClass("btn-primary")) {
    }
    else {
      console.log("no button selected"); 
      alert("No patient age selected 2");
      return;
    }
     console.log("E-note data check");
    // check e-note is not empty 
    if($.trim($("#e-note").val())) {
      console.log("E-note data present");
    }
    else {
      console.log("no e-note text entered"); 
      alert("No e-note text entered");
      return;
    }
       
    //check patient diagnosis

  });




//On click of create patient button create patient object with values in blueprint

