<?php
//this ties the comments stuff to a specific post
function submit_comment($id){
	$author_name = $_REQUEST['author_name'];
	$date_posted = $_REQUEST['date_posted'];
	$comment = $_REQUEST['comment'];
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

//this defines the variable $id and calls for all the info from comments table
function post_comments($id){
	$result = dbQuery("
		SELECT *
		FROM comments
		WHERE id = :id
		", array(
			'id' => $id
		))->fetchAll();
	return $result;
}
