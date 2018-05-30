<?php
	include('include/include_all.php');
	SiteHeader('MRP Blog');
	PageTitle ('FELLOWSHIP BLOG');
echo "
	<link rel='stylesheet' href='boilerplate_style.css'/>
	<link rel='stylesheet' href='blog_post_style.css'/> ";
	//$blog_list=get_all_blog_posts();
	$post=get_blog_post($_REQUEST['blog_post_id']);
	//var_dump($post);
	echo "<h2>$post[title]</h2>
		<body>$post[author] | $post[date]</body>
		<div class='row'>
			<div class='leftcolumn'>
				<div class='post'>
				<p>
					$post[body]</div>
				</p>
				</div>
			</div>
		<br><br><br><br><br><br><br>
		</div>";
