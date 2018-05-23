<?php
	include('include/boilerplate.php');
	SiteHeader('About Alia');
?>
<html>
	<link rel='stylesheet' href='blog_style.css'/>
	<link rel='stylesheet' href='boilerplate_style.css' />
<body>
	<?php
		PageTitle('MY STORY')
		?>
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
