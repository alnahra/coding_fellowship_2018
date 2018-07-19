<?php
//stuff from comments
function send_contact(){
	$msg = 'Name: '.$_REQUEST['name'].' \n';
	$msg .= 'Phone: '.$_REQUEST['phone'].' \n';
	$msg .= 'Email: '.$_REQUEST['email'].' \n';
	$msg .= 'Message: '.$_REQUEST['message'].' \n';

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

	$recipient = "alia.nahra@lessannoyingcrm.com";
	$subject = "*Comment from MRP Project*";
	$mailheaders = 'From: PRP <alia.nahra@lessannoyingcrm.com> \n';

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

	$send_mail = mail($recipient, $subject, $msg, $mailheaders);

		if(!$send_mail){
			//If mail couldn't be sent output error. Check your PHP email configuration (if it ever happens)
			$output = json_encode(array
				('type'=> 'error',
				'text' => 'Could not send mail! Please check your PHP mail configuration.'
				));
			die($output);
		}
		else{
			function redirect($url, $permanent = false){
			    if (headers_sent() === false){
			        header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
			    }
			    exit();
			}

			redirect('contact_success.php', false);
		}
}
?>
