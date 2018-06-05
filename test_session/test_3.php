<?php
//logging someone out is unsetting the session (forget who they are)
session_start();

unset($_SESSION['user_id']);
