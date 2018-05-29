//SIDE NAVIGATION METHODS
var continueSim;
var hospitalName="Royal Sussex County Hospital";
var simType="TriageWarning";

$("#sideNav .nav a").on("click", function() {
  $(".nav").find(".active").removeClass("active");
  $(this).parent().addClass("active");
});

//Hospital
$(document).ready(function(){
    $("#hospitalNav").click(function(){
        $("#mainBody").load("../hospitalSettings.php");
        window.continueSim=0;
        $("#previousSim").hide();
        $("#continueSim").text("Continue");
    });
    $("#hospitalNav").click();
});
//Patients
$(document).ready(function(){
    $("#patientsNav").click(function(){
        $("#mainBody").load("../patientSettings.php");
        window.continueSim=1;
        $("#previousSim").show();
        $("#continueSim").text("Continue");
    });
});


//Realitime
$(document).ready(function(){
    $("#realtimeNav").click(function(){
      console.log("Continue SIm : " +window.continueSim);
        $("#mainBody").load("../realtimeSettings.php");
        $("#previousSim").show();
        $("#continueSim").text("Continue");
       window.continueSim=2;
    });
});

//overview
$(document).ready(function(){
    $("#overviewNav").click(function(){
        $("#mainBody").load("../overviewSettings.php");
        $("#previousSim").show();
        $("#continueSim").text("Start Simulation");
        window.continueSim=3;

    });
});

//continue button method
$(document).ready(function(){
  $("#continueSim").click(function(){
    console.log(window.continueSim);
      if(!window.continueSim>3)  {}
        else {
      window.continueSim++;
      progressThroughSettings(1);
      }
  });
});


$(document).ready(function(){
    $("#previousSim").click(function(){
        if(window.continueSim>0)  {
        window.continueSim--;
        progressThroughSettings(0);
    }
	});    
});

//store relevant page data on click
function progressThroughSettings(direction) {
		//console.log("Firing direction change with direction of "+direction+" and page loc of" +window.continueSim);
	  switch(window.continueSim) {
      case 0: {
      	  $("#hospitalNav").click();
      }
      break;
      case 1: {
          $("#patientsNav").click();
      }
      break;
      case 2: {
      		$("#realtimeNav").click();
       }
       break;
      case 3: {
            $("#overviewNav").click();
      }
      break;
       case 4: {
          //redirect
          $(location).attr('href', '../startSimulation.php');
      }
      break;
      default: {
        $("#overviewNav").click();
        }
        break;
      }
}
