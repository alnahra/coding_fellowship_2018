<?php
	include('include/include_all.php');
	site_header('MRP Events');
?>
<html>
<link rel='stylesheet' href='boilerplate_style.css'/>
<link rel='stylesheet' href='blog_style.css'/>
	<head>
		<link href="calendar.css" type="text/css" rel="stylesheet" />
	</head>
<body>
	<br><br><br>
	<h1>
		Justice System Activism
	</h1>
	<br><br><br><br><br><br>
		<?php
		include 'calendar.php';
		$calendar = new Calendar();
		echo $calendar->show();
		?>
</body>
</html>
