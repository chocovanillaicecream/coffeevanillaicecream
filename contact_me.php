	<?php
	echo "sending mail";
	
	$name = strip_tags(htmlspecialchars($_POST["name"]));
	$email_address = strip_tags(htmlspecialchars($_POST["email"]));
	$message = strip_tags(htmlspecialchars($_POST["message"]));
	
	 
	// Create the email and send the message
	$to = "almond.sato@coffeevanillaicecream.com"; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
	$email_subject = "Website Contact Form:  $name";
	$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nMessage:\n$message";
	$headers = "From: noreply@coffeevanillaicecream.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
	$headers .= "Reply-To: $email_address";   
	
	mail($to,$email_subject,$email_body,$headers);

	echo "mail sent";
	return true;         
	?>