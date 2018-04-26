//SIDE NAVIGATION METHODS
//The Project
$(document).ready(function(){
    $("#theProject").click(function(){
        $("#mainBody").load("../theProject.php");
    });
});
//Objectives
$(document).ready(function(){
    $("#objectives").click(function(){
        $("#mainBody").load("../objectives.php");
    });
});
//Methodology
$(document).ready(function(){
    $("#methodology").click(function(){
        $("#mainBody").load("../methodology.php");
    });
});

//System Design
$(document).ready(function(){
    $("#systemDesign").click(function(){
        $("#mainBody").load("../systemDesign.php");
    });
});


//Credits
$(document).ready(function(){
    $("#credits").click(function(){
        $("#mainBody").load("../credits.php");
    });
});
