<?php

include('include/include_all.php');
site_header('ST. Louis PRP Data');
page_title ('POLICE RAW DATA');

?>
<head>
	<link rel='stylesheet' href='boilerplate_style.css'/>
	<link rel='stylesheet' href='data_style.css'/>
<head>
<div class='data'>
	<?php
	$crime_list=get_all_crime();
		foreach ($crime_list as $crime) {
		echo "
		<p>
		<li>$crime[offense] — $crime[occurred] <br>
			at $crime[address] <br>
			within $crime[precinct] <br>
			reported by $crime[reporting_jurisdiction] for $crime[for_jurisdiction]
			<br> <br>
		</li>
		</p>";
		}
	?>
</div>
</html>
