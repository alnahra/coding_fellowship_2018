<?php
include('include/include_all.php');

//logging someone out is unsetting the session (forget who they are)
unset($_SESSION['user_id']);

echo "You have been logged out. <br><br>
 <a href='index.php'>Return to homepage </a>";
