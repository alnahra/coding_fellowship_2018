<?php
	include('include/boilerplate.php');
	?>
<html>
<title>Contact Info</title>
<link href="https://fonts.googleapis.com/css?family=Lalezar|Luckiest+Guy" rel="stylesheet">
<link rel='stylesheet' href='blog_style.css'/>
<link rel='stylesheet' href='boilerplate_style.css'
</title>
<h1>
	Contact Info
</h1>
<br><br><br><br>
<h2>
	Your form has been sent!
</h2>
<br> <br> <br> <br>
<div class='post2'>
	Thanks <?php echo $_GET["name"]; ?><br>
	Your email address is: <?php echo $_GET["email"]; ?><br>
	The question we recieved is: <?php echo $_GET["question"]; ?><br>
</div>
</html>
