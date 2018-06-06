<!--Session setup-->

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
<link  href="css/login.css" rel="stylesheet">
<link  href="css/register.css" rel="stylesheet">
<link  href="css/navbarStyle.css" rel="stylesheet">
</head>
<body>
<!-- NavBar Import--> 
<?php include("navBar.php"); ?>
<!-- Include DB handling PHP --> 
<?php include("loginUserDB.php"); ?>
<main>
   	<!-- Central Hospital Main Image--> 
    <div class="jumbotron backdrop"> 
       
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" id="loginForm">
   		<div class="innerContainer">
          <div class="box">
            <h1>Login</h1>
              <input type="text" placeholder="Username" name="username"/>
              <input type="password" placeholder="Password" name ="password"/>
              <button type="submit" form="loginForm" value="submit">Login</button>
              <p>Not Registered? <span id="signUp">Sign Up</span></p>
              <p><?php echo $loginError;?> </p> 
            </div>
        </div>
      </form>
    </div>
</main>
<!--  Bootstrap ect. JavaScript -->
<script src="js/jquery/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap/popper.min.js"></script>
<script src="js/bootstrap/bootstrap.bundle.min.js"></script>
<!--  Local JavaScript -->
<script src="js/navbarScript.js"></script>
<script src="js/login.js"></script>
</body>
</html>