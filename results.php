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
			Some key points that I was able to distill from my data collection: <br><br>

			— <b>Not all police departments in the St. Louis area are accredited.</b> In fact, a minority of departments
			in St. Louis County are accredited, as Missouri does not require departments to be accredited. The state
			has requirements that must be met for individual officers to be licensed, but these requirements do not
			apply to departments themselves. <br><br>
			— <b> Despite multiple Sunshine Law Requirements and directives from the Attorney General's Office, some				municipalities refuse to share public information.</b> Although Missouri Revised Statute 610 demands that
			“each public governmental body shall make available for inspection and copying by the public of that
			body’s public records,” some municipalities and police departments are reluctant to share information with
			the public.  The Northwoods Police Department, which patrols the municipalities of Northwoods, Kinloch,
			and Norwood Court, refused to report their vehicle stop data to the Missoury Attorney General's Office
			for its 2017 comprehensive report. When Better Together conducted their Public Safety policing study,
			the police departments in Beverly Hills, Country Club Hills, Hillsdale, Kinloch, Lakeshire, St. Ann,
			Vinita Park, and Wellston all refused to provide the group information in accordance with the Missouri
			Sunshine Law mandating the sharing of this public information. Other departments made the information incredibly
			cost-prohibitive, with the same information being free from some departments and costing thousands of dollars from another.
			<br><br>—<b>The less diverse a municipality, the more disparate its vehicle stops are by race.</b> For example,
			the municipality of Chesterfield's population is about 86 percent white and 2.5 black. Their vehicle stop
			disparity, which compares the percentage of vehicle stops by race to that race's percentage of the population,
			returns 0.94 and 5.81, respectively. This means that white drivers are stopped near proportionately to their
			composition of the Chesterfield population, but black drivers are nearly six times more likely to be stopped than
			would be proportionate. This type of spread is not uncommon across municipalities.
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
