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
		<!-- <div class='arch'>
			<img src='/images/arch.jpg';
				width=350px;
				height=500px;>
			</div> -->
		<div class='row'>
			<div class='leftcolumn'>
				<div class='post'
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
			</div>
		</div>
	<br>
	<div class='contact_form'>
		<?php echo"
		<form action='' method='POST'>
			<b>CONTACT FORM</b><br><br>
			Name: <input type='text'
				name='name'
				id='name'
				required='true'
				class='input-field'
				placeholder='Your Name'/><br>
			Phone: <input type='text'
				name='phone'
				maxlength='15'
				class='tel-number-field long'
				placeholder='123-456-7890'/><br>
			Email: <input type='email'
				name='email';
				required='true'
				class='input-field'
				placeholder='your.name@place.com'/><br><br>
			Message: <textarea name='message'
				rows='6'
				cols='25'
				required='true'
				class='textarea-field'></textarea><br>
			<input type='submit' name='Send' value='Send'><input type='reset' value='Clear'>
			</form>";
			?>
	</div>
</body>
</html>
