<?php
/**
* EXAMPLE FORM
*/
if(isset($_POST['enq_submit'])){

	$url				 = site_url(); // store site url

	// Retrieve values from submitted data and store in variables

	$name	 		 	= $_POST['enq_name'];
	$email	 		 	= $_POST['enq_email'];
	$company	 		= $_POST['enq_company'];
	$enquiry		 	= $_POST['enq_msg'];
	$honeypot		 	= $_POST['form_no'];
	$source_url			= $_POST['form_source_url'];
	$source_page		= $_POST['form_source_page'];

	if ($honeypot) {
		$error = "You filled out the robot stopper field";
		echo $error;
	}

	else {

		// Build email containing form data
		
		$sender				.='From: Example <'.$email.'>';

		$message			 ='Name: '.$name."\n\n";
		$message			.='Email: '.$email."\n\n";
		$message			.='Company: '.$company."\n\n";
		$message			.='Enquiry: '.$enquiry."\n\n";
		$message			.='This enquiry originated from the following page: '.$source_page."\n\n";

		// HTML email response
		
		$subject			.= 'Thank you for your enquiry.';

		$headers			 = "From: Example <info@example.co.uk>\r\n";
		$headers			.= "Reply-To: info@example.co.uk\r\n";
		$headers			.= "MIME-Version: 1.0\r\n";
		$headers			.= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		
		$response			 = '<html>';
		$response			.= '<body>';
		$response			.= '<a href="'.$url.'" style="display:inline-block; margin:0 0 20px;"><img src="'.$url.'/wp-content/themes/technologic/assets/images/logo.png" border="0" height="42" width="144" /></a>';
		$response			.= '<p style="color:#000; font:14px/18px Arial, sans-serif; margin:0 0 20px; padding:0;">Thank you for your enquiry. A member of our team will be in touch very shortly.</p>';
		$response			.= '</body>';
		$response			.= '</html>';

		// Deliver emails
		
		if (eregi("\r",$email) || eregi("\n",$email)){
			header('Location:'.$url.'/sorry');
		} else {
			mail('james@candidsky.com', 'Enquiry form submission', $message, $sender);
			mail('info@candidsky.com', 'Enquiry form submission', $message, $sender);
			mail($email, $subject, $response, $headers);
			header('Location:'.$url.'/thank-you-for-your-enquiry');
		}

	} // end bot stoppoer
		
} // end form handler

?>