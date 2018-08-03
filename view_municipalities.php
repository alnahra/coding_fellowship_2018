<?php
$municipality_id = $_REQUEST['id'];
	include('include/include_all.php');
	site_header('MUNICIPALITY INFO');
echo "
	<link rel='stylesheet' href='boilerplate_style.css'/>
	<link rel='stylesheet' href='blog_post_style.css'/> ";
	//$blog_list=get_all_blog_posts();
	$municipality=get_municipality($_REQUEST['id']);
	//var_dump($post);
echo "
<div class='boiler_line'>
</div>
<br><br><br><br><br><br><br><br><br><br><br>
	<h2>$municipality[name]</h2>
	<div class='row'>
		<div class='leftcolumn'>
			<div class='post'>
			<h3>POPULATION: $municipality[population]</h3>
				<b>PERCENTAGE OF POPULATION THAT IDENTIFIES AS WHITE</b>: $municipality[race_w] <br>
				<b>PERCENTAGE OF POPULATION THAT IDENTIFIES AS BLACK</b>: $municipality[race_b]
				<h3>AREA: $municipality[area] sqm
			</h3>
				________________________________________________________________________ <br>
			<p>
				<i>* indicates precinct total </i><br><br>
				<b>2017 REVENUE</b>: $municipality[revenue] | <b>2017 EXPENDITURE</b>: $municipality[expenditure]
				<br><br> <b>POLICE: $municipality[police] <br>
				CURRENT FULL-TIME OFFICERS</b>: $municipality[officers] | <b>OFFICERS PER 1,000 PEOPLE</b>: $municipality[officers_per]
				<br><br>
				<b>2017 TOTAL INDEX OFFENSES</b>: $municipality[total_index]<br>
				VIOLENT OFFENSES: $municipality[violent_index]   |   PROPERTY OFFENSES: $municipality[property_index]
				<br><br> <b>2017 INDEX ARRESTS</b>: $municipality[index_arrests] <br>
				2017 CLEARANCE RATE: $municipality[clearance]<br><br>
				<b>2017 NON-INDEX OFFENSES</b>: $municipality[non_index]
			</p> ________________________________________________________________________ <br>
			<body>
			<p>
				<i>** indicates county total </i><br><br>
				<b>2017 VEHICLE STOPS</b>: $municipality[vehicle_stops] <br>
				<b>2017 VEHICLE SEARCHES</b>: $municipality[searches] | <b>2017 ARRESTS FROM VEHICLE STOPS</b>: $municipality[arrests] <br>
				<b>2017 VEHICLE STOP DISPARITY BY RACE (WHITE / BLACK)</b>: $municipality[disparity]<br><br>
				<i>disparity = proportion of stops / proportion of population (1 = no disparity, < 1 = under-representation, > 1 = over-representation)
			</p> ________________________________________________________________________ <br>
			<body>
				</i><h3>KEY INFORMATION</h3><i>
				Arrest and vehicle stop numbers reflect those reported to the Missouri Highway Patrol's Statistical Analysis
				Center. Index offenses (also known as Part I offenses) include murder, rape,
				robbery, aggravated assault, burglary, larceny theft, motor vehicle theft, arson, and human trafficking.
				The total index value represents the overall number of index crimes reported. The violent index value
				represents the offenses that fall under the violent category, which includes murder, rape, robbery, aggravated
				assault, and human trafficking. The total property index value represents non-violent Part I crimes,
				including burglary, larceny theft, motor vehicle theft, and arson. The index arrests value shows
				the total number of arrests for Part I crimes, and the clearance rate was found by calculating the percentage
				of index crimes for which an arrest was filed. The total non-index arrests value shows arrest numbers for
				non-index crimes within each jurisdiction.
			<br><br>
			</body>
			</div>
			</div>
		</div>
	<br>
	</div>";
echo "
	<html>
		<body>
		<div class='comment_box'>
		<h3></i>LEAVE A COMMENT BELOW:</h3>
		<p>
			<input type='text' name='name' id='author_name' value='".@$_REQUEST['author_name']."' placeholder='NAME'/><br/>
			<input type='date' name='date' id='date_posted' value='".@$_REQUEST['date']."' placeholder='MM-DD-YYYY'/><br/><br>
			<textarea name='comment' id='comment' value='".@$_REQUEST['comment']."' placeholder='COMMENT'></textarea><br/><br>
			<input type='button' onclick='save_comment($_REQUEST[id])' value='Submit Comment'/>
		</p>
		</div>
			<div id='confirmContentFromServer'><br>";
				$comments=post_comments($_REQUEST['id']);
					foreach ($comments as $comment) {
						echo "
						<div class='row'>
							<div class='leftcolumn'>
								<div class='comment_box'>
									<i> ".$comment['author_name']." on ".$comment['date_posted']." said: </i><br><br>
									".$comment['comment']." <br>
								</div>
							</div>
						</div>
						";
					};
					echo "
			</div>
			<script type='text/javascript'>
				function save_comment(){
					var id = $_REQUEST[id];
					var author_name = $('#author_name').val();
					var date_posted = $('#date_posted').val();
					var comment = $('#comment').val();

					$.post('save_comment_endpoint.php', {id, author_name, date_posted, comment},
						function(contentEchoedFromServer){
							$('#confirmContentFromServer').html(contentEchoedFromServer);
					})
				}
			</script>
			<br>
			<div class='resource_box'>
			<h3></i>EXTERNAL RESOURCES:</h3>
			<a href='/yourstlcourts.com' target='blank'>
				<img src='/images/find_court.png'
					alt='find_court'
					width='105px';
					height='140px'>
					<br>FIND MUNICIPAL COURT / TICKET INFORMATION<br><br>
			<a href='/data/Vehicle-Stops.pdf' target='blank'>
				<img src='/images/vehicle_stops.png'
					alt='vehicle_stops'
					width='105px';
					height='140px'>
					<br>VEHICLE STOPS DATA<br><br>
			<a href='https://data-stlcogis.opendata.arcgis.com/datasets/2017-st.-louis-county-police-department-ucr-part-1-crime-data' target='blank'>
				<img src='/images/county_ucr.png'
					alt='county_ucr_data'
					width='105px';
					height='140px'>
					<br>COUNTY UCR DATA<br><br>
			<a href='/data/UCR-Data-2017.pdf' target='blank'>
				<img src='/images/ucr_data.png'
					alt='ucr_data'
					width='105px';
					height='140px'>
					<br>MUNICIPALITY UCR DATA<br><br>
			<a href='http://www.bettertogetherstl.com/studies/public-finance/financial-data' target='blank'>
				<img src='/images/cafr_database.png'
					alt='cafr_database'
					width='105px';
					height='140px'>
					<br>CAFR DATABASE<br><br>
			<a href='/data/Regional-Spending-Update-Report.pdf' target='blank'>
				<img src='/images/regional_spending.png'
					alt='spending_data'
					width='105px';
					height='140px'>
					<br>MUNICIPALITY BUDGETS<br><br>
			<a href='https://ago.mo.gov/docs/default-source/publications/missourisunshinelaw.pdf?sfvrsn=20' target='blank'>
				<img src='/images/sunshine.png'
					alt='sunshine'
					width='105px';
					height='140px'>
					<br>MISSOURI SUNSHINE LAW<br><br>
			</div>
		</body>
	</html>";
