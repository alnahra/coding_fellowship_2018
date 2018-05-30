<?php

function SubmitApplication($Name, $Phone, $Position){
	//name of these variable don't matter, they jsut have to match when you reference them within the function
	die("
		<h1>
			$Name just applied
		</h1>
		<p>
			They applied for the $Position position,
			you can reach them at $Phone
		</p>
	");
}
$Errors = array();
//if statement needs to be above the form
if(isset($_REQUEST['JobApplication'])){

	// ! means not, could be used to say $_REQUEST is empty
	//(trim($_REQUEST['Name']) would remove white space first)
	if($_REQUEST['Name'] == ''){
		//single = sets value equal to variable, double == compares if they are the same
		$Errors ['Name'] = "required";
	//_REQUEST ['Name'] value being empty
	}

ValidateFormField('Name');
ValidateEmailField('Email');
//this is not the correct form to actually make it happen, but we should be able to make a function that
//validates for us without having to re-write all the code over and over

	if($_REQUEST['Phone'] == ''){
		$Errors ['Phone'] = "required";
	}

	if(sizeof($Errors) == 0){
		SubmitApplication(
		//order of functions is what matters here (first $_REQUEST matches the first data entry of name)
			$_REQUEST['Name'],
			$_REQUEST['Phone'],
			$_REQUEST['Position']
		//the stuff in quotes has to match the form below ('Name' here is what 'Name' below is)
			);
	}
}

var_dump($Errors);

echo "
<h1>
        Job Application Form
</h1>";

if(sizeof($Errors) > 0){
	echo "
		THERE WERE ERRORS";
}

echo
//the $_REQUEST[Name] parts means put the value that was inserted as name into the form if showing an error
"
<form action='' method='post'>
        Name:
        <input type='text' name='Name' value='$_REQUEST[Name]'/><br />

        Phone:
        <input type='text' name='Phone' /><br />

        Position:
        <select name='Position'>
                <option value='Fellow'>Coding fellow</option>
                <option value='DevIntern'>Developer intern</option>
                <option value='CrmcIntern'>CRM coach intern</option>
                <option value='Dev'>Full-time developer</option>
                <option value='Crmc'>Full-time CRM coach</option>
        </select>

        <br/><br/>
        <input type='submit' name='JobApplication' value='Submit your application' />
</form>
";
