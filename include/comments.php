<?php
//this ties the comments stuff to a specific post
function submit_comment($id){
	$author_name = 'author_name';
	$date_posted = 'date_posted';
	$comment = 'comment';
	$result = dbQuery("
	INSERT INTO comments(id, author_name, date_posted, comment)
	VALUES (:id, :author_name, :date_posted, :comment)",

	array(
		'id' => $id,
		'author_name' => $author_name,
		'date_posted' => $date_posted,
		'comment' => $comment,
	));
}

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
