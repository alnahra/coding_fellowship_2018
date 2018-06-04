<?php
if($_REQUEST)
{
	$to_email = "alia.nahra@lessannoyingcrm.com";
	$subject = "*Comment from MRP Project*";

	//Defining variables
	$name = ($_POST['name']);
	$phone = ($_POST['phone']);
	$email = ($_POST['email']);
	$message = ($_POST['message']);

	//additional php validation
	if($_POST['name'] == ''){
		$output = json_encode(array('type'=>'error', 'text' => 'Please enter a contact name'));
		die($output);
	}
	if($_POST['phone'] == ''){ //phone validation
		$output = json_encode(array('type'=>'error', 'text' => 'Please enter a valid phone number'));
		die($output);
	}
	if($_POST['email'] == ''){ //email validation
		$output = json_encode(array('type'=>'error', 'text' => 'please enter a valid email address'));
		die($output);
	}
	if($_POST['message'] == ''){ //check emtpy message
		$output = json_encode(array('type'=>'error', 'text' => 'Please enter a message'));
		die($output);
	}

	$message_body = $message.

	$headers = //PHP_EOL gives correct new line characters
		"From: '$name'" .PHP_EOL.
		"Phone: '$phone'" .PHP_EOL.
		"Reply-To: '$email'" .PHP_EOL.
		phpversion(7.2);

	$send_mail = mail($to_email, $subject, $message_body, $headers);

	if(!$send_mail)
	{
		//If mail couldn't be sent output error. Check your PHP email configuration (if it ever happens)
		$output = json_encode(array('type'=>'error', 'text' => 'Could not send mail! Please check your PHP mail configuration.'));
		die($output);
	}else{
		$output = json_encode(array('Thanks, '.$name .'. Your thoughts are appreciated.'));
		die($output);
	}
}
?>
