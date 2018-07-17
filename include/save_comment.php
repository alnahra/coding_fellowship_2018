<?php

function save_comment($id, $author_name, $date_posted, $comment){
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
