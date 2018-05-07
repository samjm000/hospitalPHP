<?php include("databasePHP/connectDB.php"); ?>
<?php 
// define variables and set to empty values
$name = $password = "";
$namedError;
$passedCheck=0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["username"]);
  $password = test_input($_POST["password"]);

   //echo "passing $username and $password to login engine";

    //echo "checking user exists in database with the following: $name, $password";
    if(confirmUser($name,$password)==1) {

      //echo "1 returned";
      session_start();
      $_SESSION["username"]=$name;

      $loginError = "SUCCESS, LOGGED IN";
      //exit();
      //echo  "Logged in as ".$_SESSION["username"];    
      header("Location: ../indexLoggedIn.php");
      exit;
    }
    else {

       //echo "90 returned";
      $loginError = "NO USER FOUND, CHECK DETAILS.";
    }
}

function test_input($data) {
  //echo "Test data is : $data";
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
