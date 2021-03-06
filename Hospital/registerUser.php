<!DOCTYPE html>
<html lang="en">
<head>
<title>Hospital</title>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<link  href="css/siteStyle.css" rel="stylesheet">
<link  href="css/indexStyle.css" rel="stylesheet">
<link  href="css/login.css" rel="stylesheet">
<link  href="css/register.css" rel="stylesheet">
<link  href="css/navbarStyle.css" rel="stylesheet">
</head>
<body>
<!-- NavBar Import--> 
<?php include("navBar.php"); ?>
<!-- Include DB handling PHP --> 
<?php include("registerUserDB.php"); ?>
<main>
   	<!-- Central Hospital Main Image--> 
    <div class="jumbotron backdrop"> 


       
        <!-- Position start Symphony button in the middle of the screen--> 
   		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" id="regForm">
		<div class="registerContainer">
          <div class="box">
            <h1>Register User</h1>
              <input type="text" placeholder="Username" name="name"/>
              <input type="password" placeholder="Password" name="password"/>
              <input type="text" placeholder="EMail" name="email"/>
              <button type="submit" form="regForm" value="submit">Register</button>
              <p> <?php echo $namedError;?><br></p>
              <p> <?php echo $infoBox;?><br></p>
              <p> <?php echo $mailerError;?><br></p>

            </div>
        </div>
</form>



</main>

<!--  Bootstrap JavaScript -->
 <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/color/jquery.color.plus-names-2.1.2.min.js" integrity="sha256-Wp3wC/dKYQ/dCOUD7VUXXp4neLI5t0uUEF1pg0dFnAE=" crossorigin="anonymous"></script>
<script src="js/navbarScript.js"></script>

</body>
</html>



