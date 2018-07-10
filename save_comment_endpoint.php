<?php

include('include/include_all.php');

// var_dump($_REQUEST);
// exit;
submit_comment($_REQUEST['id'], $_REQUEST['author_name'], $_REQUEST['date_posted'], $_REQUEST['comment']);

//this posts all comments for the specific id
	$comments=post_comments($_REQUEST['id']);
		foreach ($comments as $comment) {
			echo "
			<div class='row'>
				<div class='leftcolumn'>
					<div class='comment'>
						<i> ".$comment['author_name']." on ".$comment['date_posted']." said: </i><br>
						".$comment['comment']." <br><br>
					</div>
				</div>
			</div>
			";
		}
