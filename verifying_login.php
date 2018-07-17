<?php

include('include/include_all.php');

if(empty($_SESSION)){
	echo "You are not logged in. <a href='setting_user.php'>Go to the login page </a>";
}

	if (isset($_SESSION['user_id'])) {
		echo "You're logged in as ".$_SESSION['user_id']."
			<br/><br/>
			<a href='log_out.php'>Log out</a>";
	}
