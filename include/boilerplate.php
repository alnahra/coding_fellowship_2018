<?php
	function SiteHeader($title) {
		echo "<html>
		<head>
			<title>$title</title>
			<link href='https://fonts.googleapis.com/css?family=Lalezar|Luckiest+Guy' rel='stylesheet;>
			<link rel='stylesheet' href='/boilerplate_style.css'/>
		</head>
			<body>
			<div class='navigation'>
				<body>
					<a href='index.php'>home</a>
					<a href='about_me.php'>about me</a>
					<a href='history.php'>history</a>
					<a href='blog.php'>blog</a>
				</body>
			</div>
			</body>
		</html>";
		}
			function PageTitle($page) {
				echo "<h1>$page</h1>
				<br> <br> <br><br><br>";
			}
?>
