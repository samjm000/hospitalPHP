<!--Session setup-->
<?php 
header('Location: ../index.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Hospital</title>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!--bootstrap css  -->
<link  href="css/bootstrap.min.css" rel="stylesheet">
<link  href="css/bootstrap-grid.min.css" rel="stylesheet">
<!--local css  -->
<link  href="css/siteStyle.css" rel="stylesheet">
<link  href="css/indexStyle.css" rel="stylesheet">
<link  href="css/configurationStyle.css" rel="stylesheet">
</head>
<body>
<!-- Session / NavBar Import--> 
<?php 
session_destroy();
if (isset($_SESSION['username']))
{include("navBarLoggedIn.php");
}
else {
include("navBar.php");
}
?>
<!-- Include DB handling PHP --> 
<main>


</main>

<!--  Bootstrap ect. JavaScript -->
<script src="js/jquery/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap/popper.min.js"></script>
<script src="js/bootstrap/bootstrap.bundle.min.js"></script>
<!--  Local JavaScript -->
<script src="js/configureSimJS/aboutPage.js"></script>
<script src="js/navbarScript.js"></script>


</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
<title>logout</title>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS -->

</head>
<body>
<main>
</main>
</body>
</html>