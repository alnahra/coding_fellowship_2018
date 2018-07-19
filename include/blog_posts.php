<?php

//to get arrest data
function get_all_crime(){
	$result = dbQuery("
		SELECT *
		FROM county_crime
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
function get_municipality($id){
	$result = dbQuery("
	SELECT *
	FROM municipalities
	WHERE id = :id
	", array(
		'id'=>$id
	))-> fetch();

	return $result;
}

/*this is to call all of the blog posts on the index blog page */
function get_all_municipalities(){
	$result = dbQuery("
		SELECT *
		FROM municipalities
		")->fetchAll();
	return $result;
}

/* this var_dumps in a formatted way?
echo "<pre>";
$blog_list=get_all_blog_posts();
var_dump($blog_list);
echo "</pre>"; */
