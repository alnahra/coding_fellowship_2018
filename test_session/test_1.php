<?php
//put session_start into include page
session_start();

//stuff to validate who the person is, this would be a form
//with email and password to check against the database
//if they are the right person, set session as user_id

$_SESSION['user_id'] = 4;

?>
