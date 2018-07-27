<?php
	include('include/include_all.php');
	site_header('PRP Events');
?>
<html>
<link rel='stylesheet' href='boilerplate_style.css'/>
<link rel='stylesheet' href='blog_style.css'/>
	<head>
		<link href="calendar.css" type="text/css" rel="stylesheet" />
	</head>
<body>
	<div class='boiler_line'>
	</div>
	<br><br><br><br><br><br>
	<div class='calendar'>
		<b>ACTIVISM</b>
	</div>
	<br><br><br>
		<?php
		include 'calendar.php';
		$calendar = new Calendar();
		echo $calendar->show();
		?>
</body>
</html>
