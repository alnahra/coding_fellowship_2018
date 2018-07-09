<?php

include('include/include_all.php');

var_dump($_REQUEST);
exit;
submit_comment($_REQUEST['id'], $_REQUEST['author_name'], $_REQUEST['date_posted'], $_REQUEST['comment']);
