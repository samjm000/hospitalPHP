<?php include("databasePHP/connectDB.php"); ?>
<?php
// define variables and set to empty values
$name = $password = "";
$namedError;
$passedCheck=0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["username"]);
  $password = test_input($_POST["password"]);

    //echo "checking user exists in database with the following: $name, $password";
    if(confirmUser($name,$password)==1) {
      
      $loginError = "SUCCESS, LOGGED IN";    }
    else {
      $loginError = "NO USER FOUND, CHECK DETAILS.";
    }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
