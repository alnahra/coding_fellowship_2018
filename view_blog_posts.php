<?php
$blog_post_id = $_REQUEST['blog_post_id'];
	include('include/include_all.php');
	site_header('MRP Blog');
	page_title ('FELLOWSHIP BLOG');
echo "
	<link rel='stylesheet' href='boilerplate_style.css'/>
	<link rel='stylesheet' href='blog_post_style.css'/> ";
	//$blog_list=get_all_blog_posts();
	$post=get_blog_post($_REQUEST['blog_post_id']);
	//var_dump($post);
echo "
	<h2>$post[title]</h2>
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
//this creates the form that users input comments into
echo"
	<form action='' method='post'>
		Name:
		<input type='text' name='author_name' /><br />

		Date:
		<input type='date' name='date_posted' /><br />
		<br>

		Comment:
		<textarea name ='comment', rows='5', cols='40'></textarea>
		<br/><br/>
			<input type='submit' name='Submit' value='post your comment' />
	</form>";

if (isset($_REQUEST['Submit'])) {
 	submit_comment($blog_post_id);
}

$comments=post_comments($_REQUEST['blog_post_id']);
	foreach ($comments as $comment) {
		echo "
		<h3> ".$comment['author_name']." on  ".$comment['date_posted']." </h3>
		<div class='comment'> ".$comment['comment']." </div>
		";
	}
