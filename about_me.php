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
		Academic Interests
	</h2>
	<br> <br> <br>
	<div class='post2'>
		Majoring in Sociology and Women, Gender & Sexuality Studies at Washington University in St. Louis, Alia spends much of her time investigating structural inequalities across identities.
		The goal of this work is to better understand how systems ingrained in American society can be altered to better support individuals of varying circumstances and across each person's individual identities.
	</div>
	<br> <br> <br><br><br>
	<h2>
		Career Prospects
	</h2>
	<br> <br> <br>
	<div class='post2'>
		Alia hopes to graduate in May of 2020, at which point she plans to return to Amsterdam (where she studied for a semester) to work as a legal clerk.
		After spending a year abroad, she hopes to attend the JD program at Columbia University, with a concentration in the Center for Intersectionality and Social Policy Studies.
	</div>
	<br> <br> <br><br><br>
	<h2>
		Contact Me
	</h2>
	<br> <br> <br> <br>
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
