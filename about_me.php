<html>
<head>
	<title>About Alia</title>
	<link href="https://fonts.googleapis.com/css?family=Lalezar|Luckiest+Guy" rel="stylesheet">
	<link rel='stylesheet' href='blog_style.css'/>
</head>
<body>
	<div class='navigation'>
		<h3>
			<a href="index.php">home</a>
			<a href="about_me.php">about me</a>
			<a href="history.php">history</a>
			<a href="blog.php">blog</a>
		</h3>
	</div>
	<h1>
		MY STORY
	</h1>
	<h2>
		Early life
	</h2>
	<br> <br> <br>
	<div class='post'>
		Born in Washington, DC in June of 1998
	</div>
	<br> <br> <br>
	<h2>
		College
	</h2>
	<br> <br> <br>
	<div class='post'>
		Ever since
	</div>
	<br> <br>
	<h2>
		Contact Me!
	</h2>
	<br> <br> <br> <br> <br>
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
