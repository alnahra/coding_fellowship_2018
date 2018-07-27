<?php
	function site_header($title) {
		echo "<html>
		<head>
			<title>$title</title>
			<link rel='stylesheet' href='/boilerplate_style.css'/>
		</head>
		<body>
			<div class='top_rectangle'>
			</div>
			<div class='left_rectangle'>
			</div>
			<div class='right_rectangle'>
			</div>
			<div class='data_line'>
			</div>
			<div class='map_line'>
			</div>
			<div class='background_line'>
			</div>
			<div class='logo_line'>
			</div>
			<div class='title'>
			</div>
			<div class='logo'>
			</div>
			<div class='badge'>
				<a href='index.php'</a>
				<svg width='115px' height='155px' viewBox='0 0 603 663' fill='none' xmlns='http://www.w3.org/2000/svg'>
					<g filter='url(#filter0_d)'>
					<path d='M86.2009 0L15.9641 82.0353C100.857 154.41 80.3189 204.407 12.1494 297.941C-16.1091 386.009 3.09516 431.068 89.1181 505.058C212.471 557.505 267.672 588.546 297.136 652C322.367 595.313 356.522 563.279 503.582 505.058C575.138 440.013 616.682 404.078 578.531 297.941C512.629 199.924 492.199 148.404 578.531 82.0353L503.582 0C416.864 70.9395 371.021 71.7207 294.443 0C223.607 73.7849 177.356 69.165 86.2009 0Z' transform='translate(5 1)' fill=''#3148A5'/>
					<path d='M86.2009 0L15.9641 82.0353C100.857 154.41 80.3189 204.407 12.1494 297.941C-16.1091 386.009 3.09516 431.068 89.1181 505.058C212.471 557.505 267.672 588.546 297.136 652C322.367 595.313 356.522 563.279 503.582 505.058C575.138 440.013 616.682 404.078 578.531 297.941C512.629 199.924 492.199 148.404 578.531 82.0353L503.582 0C416.864 70.9395 371.021 71.7207 294.443 0C223.607 73.7849 177.356 69.165 86.2009 0Z' transform='translate(5 1)' stroke='#3148A5'/>
					</g>
					<defs>
					<filter id='filter0_d' x='0.499969' y='0.297485' width='602' height='661.911' filterUnits='userSpaceOnUse' color-interpolation-filters='sRGB'>
					<feFlood flood-opacity='0' result='BackgroundImageFix'/>
					<feColorMatrix in='SourceAlpha' type='matrix' values='0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 255 0'/>
					<feOffset dy='4'/>
					<feGaussianBlur stdDeviation='2'/>
					<feColorMatrix type='matrix' values='0 0 0 0 0 0 0 0 0 0 0 0 0 1'/>
					<feBlend mode='normal' in2='BackgroundImageFix' result='effect1_dropShadow'/>
					<feBlend mode='normal' in='SourceGraphic' in2='effect1_dropShadow' result='shape'/>
					</filter>
					</defs>
				</svg>

			<div class='results'>
				<a href='results.php' style='text-decoration: none'>results</a>
			</div>
			<div class='background'>
				<a href='history.php' style='text-decoration: none'>background</a>
			</div>
			<div class='data'>
				<a href='municipalities.php' style='text-decoration: none'>municipality data</a>
			</div>
			<div class='map'>
				<a href='google_map.php' style='text-decoration: none'>municipality map</a>
			</div>
			</div>
			<div class='title'>
				POLICING ST. <br> LOUIS
			</div>
			<div class='tagline'>
				RESEARCH BY ALIA NAHRA
			</div>
		</body>
		</html>";
		}
			function page_title($page) {
				echo "<h1>$page</h1>
				<br> <br> <br><br><br>";
			}
?>

<!-- <body>
	<a href='index.php'>home</a>
	<a href='events.php'>events</a>
	<a href='history.php'>background</a>
	<a href='municipalities.php'>data</a>
	<a href='google_map.php'>map</a>
</body> -->
