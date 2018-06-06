<?php
include('include/include_all.php');

//stuff to validate who the person is, this would be a form
//with email and password to check against the database
//if they are the right person, set session as user_id
echo "
<html>
	<form action='' method='POST'>
	Email: <input type='text'
	 	name = 'email'
		required = 'true'
		placeholder = 'Email' /><br>
	Password: <input type='text'
	 	name = 'password'
		required = 'true'
		placeholder = 'Password' /><br>
	<input type='submit' name='submit' value='submit'><input type='reset' value='Clear'>
	</form>
</html>
";

if ('password' == dbQuery("
	SELECT password
	FROM users
	WHERE username = 'email'
	")) {
	$_SESSION['user_id'] = $_REQUEST['email'];
}
?>
