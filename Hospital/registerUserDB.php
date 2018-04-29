<?php include("databasePHP/connectDB.php"); ?>
<?php
// define variables and set to empty values
$name = $email = $password = "";
$namedError;
$passedCheck=0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $password = test_input($_POST["password"]);

  $name = test_input($_POST["name"]);
  if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
  		$namedError = "Only letters and white space allowed"; 
      $passedCheck=0;
  } 
  else { $passedCheck++;}

  $email = test_input($_POST["email"]);
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  		$namedError = "Invalid email format"; 
  		$passedCheck=0;
	}
  else {$passedCheck++;}

  if($passedCheck>=1) {
    $namedError = "SUCCESSFULLY REGISTERED";
    $infoBox = "PLEASE LOG IN";
    echo "add user to database with the following: $name, $email, $password";
    adduser($name,$email,$password);
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
