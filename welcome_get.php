<html>
<title>Contact Info</title>
<link href="https://fonts.googleapis.com/css?family=Lalezar|Luckiest+Guy" rel="stylesheet">
<link rel='stylesheet' href='blog_style.css'/>
<div class='navigation'>
	<h3>
		<a href="index.php">home</a>
		<a href="about_me.php">about me</a>
		<a href="history.php">history</a>
		<a href="blog.php">blog</a>
	</h3>
</div>
<h1>
	Contact Info
</h1>
<div class='h2'>
	Your form has been sent!
</div>
<br> <br> <br> <br>
<div class='body'>
	Welcome <?php echo $_GET["name"]; ?><br>
	Your email address is: <?php echo $_GET["email"]; ?><br>
	The question we recieved is: <?php echo $_GET["question"]; ?><br>
</div>
</body>
</html>
