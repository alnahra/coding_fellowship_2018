<?php
	include('include/boilerplate.php');
	include('include/blog_posts.php');
	SiteHeader('MRP Blog');
	PageTitle ('FELLOWSHIP BLOG')
?>
<html>
	<link rel='stylesheet' href='blog_style.css'/>
	<link rel='stylesheet' href='boilerplate_style.css' />
<body>
<h2>first days:
	</h2>
	<br> <br> <br> <br>
	<div class='row'>
		<div class='leftcolumn'>
			<div class='post'
				<p>
					<ul>
						<?php get_all_blog_posts();?>
						<li><a href='view_blog_posts.php?blog_post_id=1'>
						week one</a></li>
						<li><a href='week_two.php'>
						early bumps</a></li>
					</ul>
				</p>
			</div>
		</div>
		<br><br><br><br><br><br><br>
	</div>
</h2>
<h2>starting the project:
	 </h2>
		<br> <br> <br>
	<div class='row'
		<div class='rightcolumn'>
	    	<div class='post'>
				<p>
					<ul>
						<li><a href='getting_data.php'>
						getting data</a></li>
						<li><a href='alternative_sources.php'>
						alternative sources</a></li>
					</ul>
				</p>
			</div>
		</div>
	</div>
<div class='arch'>
	<img src='/images/arch.jpg';
		width=350px;;
		height=500px;>
	</div>
</body>
</html>
