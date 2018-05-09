//global variables
var minutes=0;
var simStatus =0;

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
        }
    }
} 

function stopTimeBar() {
    console.log(window.minutes);
    clearInterval(id);
} 