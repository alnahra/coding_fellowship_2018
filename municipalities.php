<?php
	include('include/include_all.php');

		if(isset($_REQUEST['Send'])) {

			send_contact();

			send_email();
		}

	site_header('PRP Municipalities');
	// page_title ('MUNICIPALITIES LIST');
?>
<html>
	<link rel='stylesheet' href='boilerplate_style.css'/>
	<link rel='stylesheet' href='blog_style.css'/>
<body>
	<div class='boiler_line'>
	</div>
	<br><br><br><br><br><br><br><br><br><br>
	<h1> ST. LOUIS MUNICIPALITIES
	</h1>
		<br> <br> <br> <br> <br>
		<div class='post'>
			<p>
				<ul>
					<?php
					$municipality_list=get_all_municipalities();
					foreach ($municipality_list as $municipality) {
						echo "
						<p>
						<li><a href='view_municipalities.php?id=$municipality[id]'> $municipality[name]</a></li>
						</p>";
					}
					?>
				</ul>
			</p>
		</div>
	<br>
	<div class='sunshine_muni'>
		<h3><a href="/sunshine.php">SUNSHINE REQUEST BUILDER</a></h3>
	</div>
	<div class='contact_form'>
		<?php echo"
		<form action='' method='POST'>
			<b><u>CONTACT FORM</u></b><br><br>
			<div class='flex_container'>
				<div>NAME:
					<br><br>PHONE:
					<br><br>EMAIL:
					<br><br><br><br><br>MESSAGE:
				</div>
				<div>
					<input type='text'
						name='name'
						id='name'
						required='true'
						class='input-field'
						placeholder='Your Name'/><br><br>
					<input type='text'
						name='phone'
						maxlength='15'
						class='tel-number-field long'
						placeholder='123-456-7890'/><br><br>
					<input type='email'
						name='email';
						required='true'
						class='input-field'
						placeholder='your.name@place.com'/><br><br>
					<textarea name='message'
						rows='6'
						cols='19'
						required='true'
						class='textarea-field'></textarea><br><br>
					<input type='submit' name='Send' value='Send'><input type='reset' value='Clear'>
				</div>
			</div>
			</form>";
			?>
	</div>
	<div class='resource_box'>
	<h3></i>EXTERNAL RESOURCES:</h3><br><br><br><br>
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
</html>
