<html lang="en">
	<link rel='stylesheet' href='blog_style.css'/>
	<link rel='stylesheet' href='boilerplate_style.css' />
<body>
	<div class="row">
		<div class="span12">
	<form id='registration_form' method='GET' action='<?php echo $_SERVER['PHP_SELF']; ?>'>
		<div class='contact_form'>
	  		<label>Name<span class='note'>
	 		<input type='text'
	  		name='full_name'>
			<br> <br>
		  		<label>Email address<span class='note'>
		  		<input type='text' name='email_addr'>
			<br> <br>
		  		<label>Concern<span class='note'>
		   		<select name='package'>
					<option value='question'>question</options>
					<option value='comment'>comment</options>
					<option value='suggestion'>suggestion</options>
		   		</select>
		   <br> <br>
		  		<button type='submit' class='btn btn-large btn-primary' name='submit'>submit</button>
		</div>
	</form>
		</div>
	</div>
</body>
</html>
