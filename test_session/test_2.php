<?php

session_start();

//if they aren't logged in, don't show the rest! (make a function that does this)
if(!isset($_SESSION['user_id'])){
	die("You are not logged in. <a href='test_1.php'>Go to the login page </a>");
}
	//only need the second period if you are adding more
echo "You're logged in as ".$_SESSION['user_id']."
	<br/><br/>
	<a href='test_3.php'>Log out</a>";
?>
