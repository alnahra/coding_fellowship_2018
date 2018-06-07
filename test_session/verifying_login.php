<?php
include ('include_all');

$verified_user=verify_user($_REQUEST['username'], $_REQUEST['password']);

if (isset($verified_user)){
	$_SESSION['user_id'] = $verified_user['username'];
	echo "You're logged in as ".$_SESSION['user_id']."
		<br/><br/>
		<a href='log_out.php'>Log out</a>";
} else {
		die("You are not logged in. <a href='setting_user.php'>Go to the login page </a>");
	}
