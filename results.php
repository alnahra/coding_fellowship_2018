<?php
	include('include/include_all.php');
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
	<h1>INSIGHTS & CONCLUSIONS</h1>
	<br><br><br><br><br>
	<div class='post'>
		<p>
			This project is decidely a work in progress.  One of the quickest things I learned was that even those
			who support the mission of more accountability and transparency in policing are not always able to exchange
			information.  There are financial, legal, and departmental barriers to this type of work, but we must keep trying.
			This site serves two purposes—primarily, to provide information. I have spent three months colelcting data from
			myriad sources, and while I was not able to access all of the information I sought, I was able to compose a database
			of available information for each municipality in the St. Louis City/County region.  I will continue to add and update
			this database as much as possible.
			<br>
			The second function of this site is to test my hypotheses on policing in the St. Louis area.
			<br><br>
			Some key points that I was able to distill from my data collection:

			<ul> — <b>Not all police departments in the St. Louis area are certified.</b> etc. etc. <br>
				— <b> Despite multiple Sunshine Law Requests and directuves from the Attorney General's Office,
					<br>
			</ul>
		</p>
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
