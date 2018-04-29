//SIDE NAVIGATION METHODS
//The Project
$(document).ready(function(){
    $("#theProject").click(function(){
        clearSelections();
        $("#mainBody").load("../theProject.php");
        $(this).addClass("text-primary");
    });
});
//Objectives
$(document).ready(function(){
    $("#objectives").click(function(){
        clearSelections();
        $("#mainBody").load("../objectives.php");
        $(this).addClass("text-primary");
    });
});
//Methodology
$(document).ready(function(){
    $("#methodology").click(function(){
        clearSelections();
        $("#mainBody").load("../methodology.php");
               $(this).addClass("text-primary");
    });
});

//System Design
$(document).ready(function(){
    $("#systemDesign").click(function(){
        clearSelections();
        $("#mainBody").load("../systemDesign.php");
               $(this).addClass("text-primary");
    });
});

//Credits
$(document).ready(function(){
    $("#credits").click(function(){
        clearSelections();
        $("#mainBody").load("../credits.php");
               $(this).addClass("text-primary");
    });
});


//clear options
function clearSelections() { 
    $("#theProject").removeClass("text-primary");
    $("#objectives").removeClass("text-primary");
    $("#methodology").removeClass("text-primary");
    $("#systemDesign").removeClass("text-primary");
    $("#credits").removeClass("text-primary");
};

//trigger Project on page load

$(document).ready(function(){
    $("#theProject").click();
});
