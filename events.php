<?php
	include('include/include_all.php');
	SiteHeader('MRP Events');
?>
<html>
<link rel='stylesheet' href='boilerplate_style.css'/>
<link rel='stylesheet' href='blog_style.css'/>
	<head>
		<link href="calendar.css" type="text/css" rel="stylesheet" />
		</head>
	<body>
	<br><br><br><br><br><br><br>
		<?php
		include 'calendar.php';
		$calendar = new Calendar();
		echo $calendar->show();
		?>
<h2>
	<br><br><br><br><br><br><br><br><br><br><br><br>
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
