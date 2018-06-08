<?php
include('include/include_all.php');

if(isset($_REQUEST['submit'])){

		function redirect($url, $permanent = false){
			if (headers_sent() === false){
				header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
			}
			exit();
		}
		redirect('verifying_login.php', false);
}

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
