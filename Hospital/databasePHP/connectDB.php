<?php

//re-write in PDO
function connectToDB() {
static $conn;
  if ($conn===NULL){ 
		$servername = "localhost";
		$username = "root";
		$password = "mysql";
		$databaseName = "hospitalDB";
		// Create connection

		$conn = new mysqli($servername, $username, $password, $databaseName);
		if($conn->connect_error) {
  		exit('Error connecting to database');
		}
		mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
		$conn->set_charset("utf8mb4");
		//echo "Connected to DB successfully";	
		return $conn;
	}
}

function confirmUser($user, $password) {
$con = connectToDB();
$stmt = $con->prepare("SELECT * FROM user WHERE name = ? AND password = ?");
$stmt->bind_param("si", $_POST['name'], $_POST['age']);
$stmt->execute();
if($stmt->affected_rows === 0) { 
 $loginError = "No user found, confirm details or register.";
 echo "No user found, confirm details or register.";
  exit('No rows updated'); 
  return 0;
}
else {
  //echo "successfully logged in";
  $loginError = "successfully logged in";
  return 1;
}
$stmt->close();
}


function addUser($user, $email, $password) {
	$con = connectToDB();
	$stmt = $con->prepare("INSERT INTO user (name,emailAddress,password) VALUES (?,?,?)");
	$stmt->bind_param("sss", $user, $email, $password);
	$stmt->execute();
	if($stmt->affected_rows === 0) { exit('No rows updated'); }
	else {
	  $stmt->close();
	  sendUserConfirmationEmail($user, $email, $password);

	}
}

function sendUserConfirmationEmail($user, $email, $password) {
	require_once("mailer/PHPMailer.php");
	require_once("mailer/SMTP.php");
  	require_once("mailer/POP3.php");
  	require_once("mailer/Exception.php");
  		
    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->IsSMTP(); // enable SMTP
     $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
     $mail->SMTPKeepAlive = true;   
	$mail->Mailer = “smtp”;
    $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = 'smtp.gmail.com';
    //$mail->Port = 587; // or 465
    $mail->IsHTML(true);
    $mail->Username = 'samjm001@gmail.com';
    $mail->Password = "googlePOP23";
    $mail->SetFrom("samjm001@gmail.com");
    $mail->Subject = "Your registration with T.E.W.S was successful";
    $mail->Body = "Hello ".$user."\r\n\r\n".
	    "Thanks for your registration with T.E.W.S \r\n".
	    "Your username and password are: ".$user.", ".$password. " \r\n\r\n".
	    "Kind Regards,\r\n".
	    "Webmaster\r\n";
	 $mail->AddAddress($email);
    
     if(!$mail->Send()) {
       $mailerError =  $mail->ErrorInfo;
     } else {
        $mailerError =  "Confirmation E-Mail has been sent";
     }

}

?>