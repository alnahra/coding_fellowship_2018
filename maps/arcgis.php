<?php

include('include/include_all.php');
site_header('PRP Municipality Map');

?>

<html>
	<link rel='stylesheet' href='style.css'/>
	<link rel='stylesheet' href='boilerplate_style.css' />
<head>
	<title>Arcgis Map</title>
	<h1> POLICING MAP </h1>
	<style>
		.embed-container {
			position: relative;
			padding-bottom: 50%;
			height: 10;
			max-width: 90%;}
		.embed-container iframe,
		.embed-container object,
		.embed-container iframe{
			position: absolute;
			top: 8;
			left: 10;
			right: 10;
			width: 100%;
			height: 100%;}
		small{
			position: absolute;
			z-index: 40;
			bottom: 10;
			margin-bottom: 10px;}
	</style>
</head>
<body>
	<div class="embed-container">
		<iframe width="500"
			height="400"
			frameborder="10"
			scrolling="no"
			marginheight="10"
			marginwidth="10"
			title="MUNIS w/ INFO"
			src="//www.arcgis.com/apps/Embed/index.html?webmap=58b3e128493147a1855ed43cbd06ebca&extent=-91.1074,38.3398,-89.7616,38.9907&home=true&zoom=true&previewImage=false&scale=true&search=true&searchextent=true&legend=true&disable_scroll=true&theme=light">
		</iframe>
	</div>
</body>
</html>
