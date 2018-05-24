<?php
	include('include/boilerplate.php');
	include('include/blog_posts.php');
	SiteHeader('MRP Blog');
	PageTitle ('FELLOWSHIP BLOG');
?>
<html>
	<link rel='stylesheet' href='blog_style.css'/>
	<link rel='stylesheet' href='boilerplate_style.css' />
</html>
<?php
	$blog_post = get_blog_post($_REQUEST['blog_post_id']);
	echo
		"<h2>$blog_post[title]</h1>
		<h3>$blog_post[author]</h2>
		<div class='post'>$blog_post[body]</div>
		<h3>$blog_post[date]</h2>";
?>
