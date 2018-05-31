<?php
	include('include/include_all.php');
	SiteHeader('MRP Blog');
	PageTitle ('FELLOWSHIP BLOG');
?>
<html>
	<link rel='stylesheet' href='boilerplate_style.css'/>
	<link rel='stylesheet' href='blog_style.css'/>
<body>
<h2>first days:
	</h2>
	<br> <br> <br> <br>
	<div class='arch'>
		<img src='/images/arch.jpg';
			width=350px;
			height=500px;>
		</div>
	<div class='row'>
		<div class='leftcolumn'>
			<div class='post'
				<p>
					<ul>
						<?php
							$blog_list=get_all_blog_posts();
							foreach ($blog_list as $post) {
							echo "
							<p>
							<li><a href='view_blog_posts.php?blog_post_id=$post[blog_post_id]'> $post[title]</a></li>
							</p>";
							}
						?>
					</ul>
				</p>
			</div>
		</div>
	</div>
<h2>
	<br><br><br><br><br>
	CONTACT
</h2>
	<div class='contact_form'>
	<form action="welcome_get.php" method="get">
		Name: <input type="text" name="name"><br>
		E-mail: <input type="text" name="email"><br><br>
		Question: <textarea name="question" rows="5" cols="40"></textarea><br>
			<input type="submit">
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			</form>
	</div>
</body>
</html>
