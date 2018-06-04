<?php
//this ties the comments stuff to a specific post
function submit_comment($blog_post_id){
	$author_name = $_REQUEST['author_name'];
	$date_posted = $_REQUEST['date_posted'];
	$comment = $_REQUEST['comment'];
	$result = dbQuery("
	INSERT INTO comments(blog_post_id, author_name, date_posted, comment)
	VALUES (:blog_post_id, :author_name, :date_posted, :comment)",

	array(
		'blog_post_id' => $blog_post_id,
		'author_name' => $author_name,
		'date_posted' => $date_posted,
		'comment' => $comment,
	));
}
// SubmitComment($_REQUEST['Post'], $_REQUEST['Name'], $_REQUEST['Date'], $_REQUEST['Comment']);

// $errors=array();
//
// if(isset($_REQUEST['Comment'])){
//
// 	if($_REQUEST['Name'] == ''){
// 		$errors ['Name'] = "required";
// 	}
// 	if($_REQUEST['Date'] == ''){
// 		$errors ['Date'] = "required";
// 	}
// 	if($_REQUEST['Post'] == ''){
// 		$errors ['Post'] = "required";
// 	}
// 	if($_REQUEST['Comment'] == ''){
// 		$errors['Comment'] == "required";
// 	}
// }
//
// if(sizeof($errors) == 0){
// 	SubmitComment(
// 	//order of functions is what matters here (first $_REQUEST matches the first data entry of name)
// 		$_REQUEST['Name'],
// 		$_REQUEST['Date'],
// 		$_REQUEST['Post'],
// 		$_REQUEST['Comment']
// 		);
// }
//
// if(sizeof($errors) > 0){
// 	echo "please try again";
// }


 ?>
