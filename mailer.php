<?php session_start();

$human = $_POST['human'];

if(isset($_POST['Submit']) && $human == '27') {
	
	$youremail = 'wench_blitz@yahoo.com';
	$fromsubject = 'www.ashram-silenthunters.x10.mx';
	$fname = $_POST['fname'];
	$mail = $_POST['mail'];
	$subject = $fromsubject;
	$message = $_POST['message']; 
		$to = $youremail; 
		$mailsubject = 'Message received from'.$fromsubject.'Contact Page';
		$body = $fromsubject.'
		
		From: '.$fname.'
		E-mail: '.$mail.'
		Subject: '.$fromsubject.'

		Message:
		'.$message.' 
			 
		|---------END MESSAGE----------|'; 
		
		echo "Thank you fo your feedback. I will contact you shortly if needed. </br> Please go to <a href='javascript: history.go(-1)'>Previous Page</a>"; 
		
		mail($to, $subject, $body);
	
 	} 
	
	else if (isset($_POST['Submit']) && $human != '27') {
		echo "Your anti-spam answer is incorrect! </br> Please go to <a href='javascript: history.go(-1)'>Previous Page</a>"; 
	
	} else { 
		echo "You must write a message. </br> Please go to <a href='javascript: history.go(-1)'>Previous Page</a>";
	}
?> 