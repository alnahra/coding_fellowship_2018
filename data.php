<?php

include('include/include_all.php');
site_header('ST. Louis PRP Data');
page_title ('POLICE DATA');

?>

<html>
	<link rel='stylesheet' href='boilerplate_style.css'/>
	<link rel='stylesheet' href='data_style.css'/>
<div class='data'>
	<?php
	$crime_list=get_all_crime();
		foreach ($crime_list as $crime) {
		echo "
		<p>
		<li>$crime[description] — $crime[date] <br></li>
		</p>";
		}
	?>
</div>
</html>
