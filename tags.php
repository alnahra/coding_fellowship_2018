<?php
/*QUERY in mySQL to merge "tags" table with "blog_post" table
	SELECT blog_post.blog_post_id, blog_post.title, blog_post.author, blog_post.body, blog_post.date, tags.tag_id, tags.name
	FROM blog_post RIGHT OUTER JOIN tags
	ON blog_post.tag_id = tags.tag_id */

function post_tags($tag_id){
	$result = dbQuery("
		SELECT *
		FROM tags
		WHERE tag_id = :tag_id
		", array(
			'tag_id' => $tag_id
		))->fetchAll();
	return $result;
}
$tag_id=post_tags($_REQUEST['tag_id']);
	foreach ($tag_id as $tag) {
		echo "<h3> ".$tag['tag_id']." </h3>";
	}

?>
