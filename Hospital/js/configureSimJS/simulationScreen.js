//global variables
var minutes=0;
var simStatus =0;
var patientNumber=6;
var patientId=221123;
var admittingNumber=0;
var concernLevel ="";
    
// To be done
/*

import patient list array from system storage
load patient list into timer array
when patient matches timer delta - fire patient into system

click on patient to trigger menu
admit / vs discharge
store list on lower bar - all admission /discharges
option to restore - continue clock
*/

//Nav highlighting
$(".nav a").on("click", function() {
  $(".nav").find(".active").removeClass("active");
  $(this).parent().addClass("active");
});

//simulation start / stop / timeline functions
$(document).ready(function(){
    $("#startSimulationButton").click(function(){
        if(simStatus==0) {
            console.log("Simulation Running");
            simStatus=1;
            startTimeBar();
        }
        else if(simStatus==1) {
            //do nothing, running
            console.log("already running");
        }
    });

    $("#stopSimulationButton").click(function(){
        if(simStatus==1) {
            simStatus=0;
            stopTimeBar();
        }
        else if(simStatus==1) {
            //do nothing, running
            console.log("already stopped");
        }
    });
});


function startTimeBar() {
    var elem = document.getElementById("timeBar");
    var id = setInterval(frame, 1000);
    function frame() {
        if (minutes >= 1440) {
            clearInterval(id);
        } else {
            minutes++;
            elem.style.width = (minutes/1440) + '%';
            elem.innerHTML = minutes * 1 + 'minutes';
            if(minutes % 3 === 0) {
                createPatient();
                amendTimes();
            }
        }
    }
} 

function stopTimeBar() {
    console.log(window.minutes);
    //clearInterval(id);
} 

function createPatient() {
    console.log("creating Patient");
    var admittingRow= "";
    var admit="N";
    mews = Math.floor((Math.random() * 11) + 1);
    if(mews>5) {
        admittingRow= "admittingRow";
        admit="Y";
        admittingNumber++;
        console.log("admittingNumber" +admittingNumber);
    }
    if(admittingNumber>3) {
        concernLevel="warningLevel"
    }
    if(admittingNumber>6) {
        concernLevel="dangerLevel"
    }
    if(admittingNumber>9) {
        concernLevel="extremeLevel"
    }
    patientId++;
   

    patientNumber++;
    $("#patientNoCol").append('<div class="border row '+admittingRow+'">'+patientNumber+'</div>');
    $("#patientIDCol").append('<div class="border row '+admittingRow+'">'+patientId+'</div>');
    $("#patientTimeCol").append('<div class="border row '+admittingRow+'">0</div>');
    $("#patientMEWSCol").append('<div class="border row '+admittingRow+'">'+mews+'</div>');
    $("#patientAdmissionCol").append('<div class="border row '+admittingRow+'">'+admit+'</div>');

    $("#admissionsText").replaceWith('<p id="admissionsText" class="admissionsNumber" '+concernLevel+' ">'+admittingNumber+'</p></div>');
}

function amendTimes() {
    console.log("Update timers");
    $("#patientTimeCol").ge

}