<?php
session_start();
require '../assets/phpmailer/PHPMailerAutoload.php';

  $name    = $_POST['fullname'];
  $ph_num  = $_POST['ph_number'];
  $email   = $_POST['email'];
  $message = $_POST['message'];
  

	$mail = new PHPMailer;
	$mail->isSMTP();                                      // Set mailer to use SMTP
	//$mail->SMTPDebug = 2;                               // Enable verbose debug output
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Host = 'smtp.gmail.com';   					          // Specify main and backup SMTP servers
	$mail->Port = 465;                                    // TCP port to connect to
	$mail->isHTML(true);                                  // Set email format to HTML
	$mail->Username = 'manojsundaram6106@gmail.com';              // SMTP username
	$mail->Password = 'jyogipaqqeuhgzat';                     // SMTP password
	$mail->setFrom('manojsundaram6106@gmail.com', 'Manoj');
	$mail->Subject = 'Here is the subject';
	$mail->Body    = "Hi, Mr: " .$name."<br> Your Number : " .$ph_num." <br> Your Email : " .$email. "<br> Message : " .$message. "";
	$mail->addAddress('manoj86680@gmail.com', '');     // Add a recipient

	
	//$mail->addAddress('ellen@example.com');               // Name is optional
	//$mail->addReplyTo('info@example.com', 'Information');
	//$mail->addCC('cc@example.com');
	//$mail->addBCC('bcc@example.com');

	//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
	//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
	
	
	//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

	if(!$mail->send()) {
	    //echo 'Message could not be sent.';
	    //echo 'Mailer Error: ' . $mail->ErrorInfo;
		$_SESSION["f_msg"] = "Your Message not has been Sent";
		$f_msg = $_SESSION["msg"];

		?>

		<script type="text/javascript">location.href = 'donate.php#form-view';</script>
		<?php

	} else { 
	   // echo 'Message has been sent'; 

	   $_SESSION["s_msg"] = "Your Message has been Sent";
	   $s_msg = $_SESSION["s_msg"];
	   ?>

	   <script type="text/javascript">location.href = 'donate.php#form-view';</script>
	   <?php
	   
	}	
?>



