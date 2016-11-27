<?php

	$emailTo = "bbuyck1@gmail.com";
	$subject = "I hope this works";
	$body = "I think you are great!";
	$headers = "From: bbuyck11@gmail.com";
	
	if(mail($emailTo, $subject, $body, $headers)){
		
		echo "The email was sent successfully";
		} else{
			
			echo "This email could not be sent";
			
			};
	
	
	
?>





