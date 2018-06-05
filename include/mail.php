<?php
//stuff from comments
function send_contact(){
	$name = $_REQUEST['name'];
	$phone = $_REQUEST['phone'];
	$email = $_REQUEST['email'];
	$message = $_REQUEST['message'];
	$result = dbQuery("
	INSERT INTO contact(name, phone, email, message)
	VALUES (:name, :phone, :email, :message)",

	array(
		'name' => $name,
		'phone' => $phone,
		'email' => $email,
		'message' => $message,
	));
}

function send_email(){
	$name = $_REQUEST['name'];
	$phone = $_REQUEST['phone'];
	$email = $_REQUEST['email'];
	$message = $_REQUEST['message'];

	$to_email = "alia.nahra@lessannoyingcrm.com";
	$subject = "*Comment from MRP Project*";

	//additional php validation
	if($_REQUEST['name'] == ''){
		$output = json_encode(array('type'=>'error', 'text' => 'Please enter a contact name'));
		die($output);
	}
	if($_REQUEST['phone'] == ''){ //phone validation
		$output = json_encode(array('type'=>'error', 'text' => 'Please enter a valid phone number'));
		die($output);
	}
	if($_REQUEST['email'] == ''){ //email validation
		$output = json_encode(array('type'=>'error', 'text' => 'please enter a valid email address'));
		die($output);
	}
	if($_REQUEST['message'] == ''){ //check emtpy message
		$output = json_encode(array('type'=>'error', 'text' => 'Please enter a message'));
		die($output);
	}

	$headers = array(
		'From' => $name,
		'Phone' => $phone,
		'Reply-To' => $email,
		);

	$send_mail = mail($to_email, $subject, $message, $headers);

		if(!$send_mail){
			//If mail couldn't be sent output error. Check your PHP email configuration (if it ever happens)
			$output = json_encode(array
				('type'=> 'error',
				'text' => 'Could not send mail! Please check your PHP mail configuration.'
				));
			die($output);
		}
		else{
			$output = 'Thanks, '.$name .'. Your thoughts are appreciated.';
			die($output);
		}

phpversion(7.2);

}
?>
