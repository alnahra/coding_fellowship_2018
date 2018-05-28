<html>
<head>
	<title>STL Municipality Research Project</title>
	<link rel='stylesheet' href='style.css'/>
	<link href="https://fonts.googleapis.com/css?family=Lalezar|Luckiest+Guy" rel="stylesheet">
</head>
<body>
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<div class='heading'>
		<h1>ALIA LEARNS THINGS</h1>
	</div>
	<div class='sidenav'>
		<a href="about_me.php">about me</a>
		<a href="history.php">history</a>
		<a href="blog.php" target="blank">blog</a>
	</div>
	<br> <br> <br>
	<div class='text'>
		<body>
			<p>Welcome to the St. Louis Municipality Research Project!</p>
			<h2>About</h2>
			<p>
				The goal of this project is to combine data across municipalities
				(of which there are around 90 in the St. Louis metro area), and conduct
				analyses on this aggregated data once compiled.
			</p>
		</body>
	</div>
	<br><br><br>
	<head>
		<link href="calendar.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<?php
		include 'calendar.php';
		$calendar = new Calendar();
		echo $calendar->show();
		?>
	</body>
</body>
</html>
