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
	<div class='post3'>
		<p>
			This project is decidely a work in progress.  One of the quickest things I learned was that even those
			who support the mission of more accountability and transparency in policing are not always able to efficiently exchange
			information.  There are financial, legal, and departmental barriers to this type of work, but we must keep trying.
			This site serves two purposes—primarily, to provide information. I have spent three months collecting data from
			myriad sources, and while I was not able to access all of the information I sought, I have been able to create a database
			of the available information for each municipality in the St. Louis City/County region.  This database synthesizes each municipality's
			unique data into a uniform, accessible format. I will continue to add to and update this database as much as possible as new information
			becomes available. The second motivation behind the creation of this site was to test my hypotheses on policing in the St. Louis area.
			<br><br>
			The following are some important themes evident across the data: <br><br>

			— <b>Not all police departments in the St. Louis area are accredited.</b> In fact, a minority of departments
			in St. Louis County are accredited by either of the two national accredidation agencies, as Missouri does not require
			departments to be accredited. The state has requirements for individual officers to be licensed, but these requirements do not
			extend to departments that employ them. <br><br>
			— <b> Despite multiple Sunshine Law requests and directives from the Attorney General's Office, some
			municipalities refuse to share public information.</b> Although Missouri Revised Statute 610 demands that
			“each public governmental body shall make available for inspection and copying by the public of that
			body’s public records,” some municipalities and police departments are reluctant to share information with
			the public.  The Northwoods Police Department, which patrols the municipalities of Northwoods, Kinloch,
			and Norwood Court, refused to report their vehicle stop data to the Missoury Attorney General's Office
			for its 2018 comprehensive report. The same goes for the Breckenridge Hills police department. Similarly, when Better Together St. Louis conducted their Public Safety policing study,
			the police departments in Beverly Hills, Country Club Hills, Hillsdale, Kinloch, Lakeshire, St. Ann,
			Vinita Park, and Wellston all refused to provide the group information in accordance with the Missouri
			Sunshine Law thats mandates this public information be shareable. Other departments made the information incredibly
			cost-prohibitive, with the same data being free from one department and costing thousands of dollars from another.
			<br><br>— <b>The less diverse a municipality, the more disparate its vehicle stops (by race).</b> For example,
			the municipality of Warson Woods' population is about 97 percent white and 3 percent black. Their vehicle stop
			disparity, which compares the percentage of vehicle stops by race to that community's percentage within the municipality's population,
			returns 0.90 and 15.33, respectively. 1.00 would signal no disparity. This means that white drivers are stopped near proportionate to their
			composition of the Warson Woods population, but black drivers are nearly sixteen times more likely to be stopped than
			would be proportionate. This spread is not uncommon across municipalities.
			<br><br>— <b>In reviewing changes between 2017 and 2018 vehicle stops data, it is clear that of the police departments that reported an increase in vehicle stops,
				the disparity across racial lines of those stops also increased. </b>This indicates that some police departments in St. Louis County are becoming more discriminatory than they have been in the past.
				The cause of these increases is not clear from this dataset, and there are no apparent consequences for departments that report more discriminatory practices across time.
		</p>
	</div>
	<br>
	<div class='sunshine_muni'>
		<h3><a href="/sunshine.php">SUNSHINE REQUEST BUILDER</a></h3><br>
	</div>
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
			Phone:<input type='text'
				name='phone'
				maxlength='15'
				class='tel-number-field long'
				placeholder='123-456-7890'/><br>
			Email:  <input type='email'
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
