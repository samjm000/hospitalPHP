//SIDE NAVIGATION METHODS
//Hospital
$(document).ready(function(){
    $("#hospitalNav").click(function(){
        $("#mainBody").load("../hospitalSettings.php");
    });
});
//Patients
$(document).ready(function(){
    $("#patientsNav").click(function(){
        $("#mainBody").load("../patientSettings.php");
    });
});
//Realitime
$(document).ready(function(){
    $("#realtimeNav").click(function(){
        $("#mainBody").load("../realtimeSettings.php");
    });
});

