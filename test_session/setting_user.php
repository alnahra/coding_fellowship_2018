<?php
include('include/include_all.php');



echo "
<html>
	<form action='' method='POST'>
	Username: <input type='text'
	 	name = 'username'
		required = 'true'
		placeholder = 'Email' /><br>
	Password: <input type='text'
	 	name = 'password'
		required = 'true'
		placeholder = 'Password' /><br>
	<input type='submit' name='submit' value='Submit'><input type='reset' value='Clear'>
	</form>
</html>
";

if(isset($_REQUEST['Submit'])){

	redirect('test_session/verifying_login.php');
}

?>
