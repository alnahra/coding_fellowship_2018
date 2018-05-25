<?php
	include('include/boilerplate.php');
	include('include/blog_posts.php');
	SiteHeader('MRP Blog');
	PageTitle ('FELLOWSHIP BLOG');
?>
<html>
	<link rel='stylesheet' href='boilerplate_style.css'/>
	<link rel='stylesheet' href='blog_post_style.css'/>
</html>
<?php
	$blog_post = get_blog_post($_REQUEST['blog_post_id']);
	echo
		"<h2>$blog_post[title]</h2>
		<body>$blog_post[author] | $blog_post[date]</body>
		<div class='row'>
			<div class='leftcolumn'>
				<div class='post'>
				<p>
					$blog_post[body]</div>
				</p>
				</div>
			</div>
		<br><br><br><br><br><br><br>
		</div>"
?>
