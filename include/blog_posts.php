<?php

//to get arrest data
function get_all_crime(){
	$result = dbQuery("
		SELECT *
		FROM city_crime
		")->fetchAll();
	return $result;
}

//to log someone in
function attempt_login($username, $password){
	$result = dbQuery("
	SELECT *
	FROM users
	WHERE username = '$username' AND password = '$password'
	")->fetch();

	if(!empty($result)){
		$_SESSION['user_id'] = $result['username'];
	}
		else{
			$_SESSION = array();
		}
}

//adding to grocery items inventory
function insert_blog_item($title, $author, $body, $date){
	$result = dbQuery("
    INSERT INTO blog_post(title, author, body, date)
    VALUES(':title', ':author', ':body', ':date')
", array(
    'title' => $title,
    'author' => $author,
    'body' => $body,
    'date' => $date
))->fetchAll();
}
//this  inserts data
//insert_blog_item('getting data', 'Alia Nahra', ' ', '2018-05-24 10:57:13');

//calls a single blog post
//the (blog_post_id) specific doesn't matter, as long as it matches the $blog_post_id in WHERE
function get_blog_post($blog_post_id){
	$result = dbQuery("
	SELECT *
	FROM blog_post
	WHERE blog_post_id = :blog_post_id
	", array(
		'blog_post_id'=>$blog_post_id
	))-> fetch();

	return $result;
}
//this function defines the variable $blog_post_id within it and calls for all the info from comments table
function post_comments($blog_post_id){
	$result = dbQuery("
		SELECT *
		FROM comments
		WHERE blog_post_id = :blog_post_id
		", array(
			'blog_post_id' => $blog_post_id
		))->fetchAll();
	return $result;
}

/*this is to call all of the blog posts on the index blog page */
function get_all_blog_posts(){
	$result = dbQuery("
		SELECT *
		FROM blog_post
		")->fetchAll();
	return $result;
}

/* this var_dumps in a formatted way?
echo "<pre>";
$blog_list=get_all_blog_posts();
var_dump($blog_list);
echo "</pre>"; */
