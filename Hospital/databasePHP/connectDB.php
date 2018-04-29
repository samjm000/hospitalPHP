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
		echo "Connected to DB successfully";	
		return $conn;
	}
}


function addUser($user, $email, $password) 
{
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

function sendUserConfirmationEmail($user, $email, $password)
{
		require("/home/site/libs/PHPMailer-master/src/PHPMailer.php");
  		require("/home/site/libs/PHPMailer-master/src/SMTP.php");

    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->IsSMTP(); // enable SMTP

    $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465; // or 587
    $mail->IsHTML(true);
    $mail->Username = "samjm001@gmail.com";
    $mail->Password = "googlePOP23";
    $mail->SetFrom("samuel.mcinerney@bsuh.nhs.uk");
    $mail->Subject = "Your registration with T.E.W.S was successful";
    $mail->Body = "Hello ".$user."\r\n\r\n".
	    "Thanks for your registration with T.E.W.S \r\n".
	    "Your username and password are: ".$user.", ".$password. " \r\n\r\n".
	    "Kind Regards,\r\n".
	    "Webmaster\r\n";
    
     if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
     } else {
        echo "Message has been sent";
     }

}

?>