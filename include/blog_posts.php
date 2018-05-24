<?php
include('config/config.php');
include('include/db_query.php');

/* this function allows me to add items into the inventory we created for grocery items */
function insert_blog_item($title, $author, $body, $date){
	$result = dbQuery("
		INSERT INTO blog_post(title, author, body, date)
		VALUES('$title', '$author', '$body', '$date')
		")->fetchAll();
}
/*this is how you actually insert the data*/
//insert_blog_item('getting data', 'Alia Nahra', ' ', '2018-05-24 10:57:13');

/* this function calls a single blog post
	the (inventory_id) specific doesn't matter, as long as it matches the $inventory_id in WHERE */
function get_blog_post ($blog_post_id){
	$result = dbQuery("
	SELECT *
	FROM blog_post
	WHERE blog_post_id = :safe_post_version"
		, array ('safe_post_version'=>$blog_post_id));
	return $result -> fetch();
}
/*this is defining $blog_post as calling the function get_blog_post */
$blog_post = get_blog_post($_REQUEST['blog_post_id']);

/*this is to call all of the blog posts on the index blog page */
function get_all_blog_posts(){
	$result = dbQuery("
		SELECT *
		FROM blog_post
		");
		return $result->fetchAll();
	}
/*$all_blog_posts = get_all_blog_posts();*/

/* this var_dumps in a formatted way?
echo "<pre>";
var_dump($blog_post);
echo "</pre>"; */

/* WHERE inventory_id = :$inventory_id
	", array ('inventory_id'=>$inventory_id)" */

/*add function that calls all blog posts, then loop through that over and
	over and link for all the blog posts*/
