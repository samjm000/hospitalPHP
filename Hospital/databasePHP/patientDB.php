<?php 
function addPatient($patient) {
$con = connectToDB();
$stmt = $con->prepare("SELECT userID FROM user WHERE name = ? AND password = ?");
$stmt->bind_param("ss", $user, $password);
mysqli_stmt_execute($stmt); 
mysqli_stmt_store_result($stmt); 
$rows = mysqli_stmt_num_rows($stmt);
//echo ($rows);
  if($rows==1) {
  return 1;
  $stmt->close();
  $con->close();
  }
  else {
  return 0;
  $stmt->close();
  $con->close();
  }
}

?>