
$(document).ready(function(){
  //local variables for page
  
  var continueSim;
  var hospitalName="Royal Sussex County Hospital";
  var simType="Triage Warning";
  
  //Top Navigation
  $("#sideNav .nav a").on("click", function() {
    $(".nav").find(".active").removeClass("active");
    $(this).parent().addClass("active");
  });
  
  //Hospital Config Page
  $("#hospitalNav").click(function(){
    $("#mainBody").load("../hospitalSettings.php");
    continueSim=0;
    $("#previousSim").hide();
    $("#continueSim").text("Continue");
  });

  //Patient Config Page
  $("#patientsNav").click(function(){
    $("#mainBody").load("../patientSettings.php");
    continueSim=1;
    $("#previousSim").show();
    $("#continueSim").text("Continue");
  });

  //Realtime Config Page
  $("#realtimeNav").click(function(){
    console.log("Continue SIm : " +window.continueSim);
    $("#mainBody").load("../realtimeSettings.php");
    $("#previousSim").show();
    $("#continueSim").text("Continue");
    continueSim=2;
  });

  //Overview Config Page
  $("#overviewNav").click(function(){
    $("#mainBody").load("../overviewSettings.php");
    $("#previousSim").show();
    $("#continueSim").text("Start Simulation");
      continueSim=3;
  });
  //Continue button function
  $("#continueSim").click(function(){
    console.log(window.continueSim);
    if(!continueSim>3)  {}
    else {
      continueSim++;
      progressThroughSettings(1);
    }
  });
  $("#previousSim").click(function(){
    if(continueSim>0)  {
    continueSim--;
    progressThroughSettings(0);
    }
  });    
  //start at hospital page on page load
    $("#hospitalNav").click();
    
});

//store relevant page data on click
function progressThroughSettings(direction) {
  switch(continueSim) {
    case 0: { $("#hospitalNav").click();
      }
    break;
    case 1: { $("#patientsNav").click();
    }
    break;
    case 2: { $("#realtimeNav").click();
    }
    break;
    case 3: { $("#overviewNav").click();
    }
    break;
    case 4: { $(location).attr('href', '../startSimulation.php');
    }
    break;
    default: { $("#overviewNav").click();
    }
    break;
  }

}

