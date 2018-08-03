<?php
	include('include/include_all.php');
	site_header('Sunshine Request');
?>
<html>
<head>
	<script type="text/javascript">
		function request(){
			generate_request();
			finish_message();
		}
		
		function generate_request(){
			var custodian_name = document.getElementById('custodian_name').value+"<br>";
			var custodian_street = document.getElementById('custodian_street').value+"<br>";
			var custodian_address = document.getElementById('custodian_address').value+"<br>";
			var custodian_zip = document.getElementById('custodian_zip').value+"<br><br>";
			var date = document.getElementById('date').value+"<br><br>";
			var intro = "To Whom It May Concern,<br><br>This is a request for records under the Missouri Sunshine Law, Chapter 610, Revised Statutes of Missouri. " +
				" I request that you make available to me the following records: ";
			var records = document.getElementById('records').value+".  ";

			display_message.innerHTML= custodian_name.concat(custodian_street, custodian_address, custodian_zip, date, intro, records);
		}

		function finish_message(){
			var sending = "I request that the records responsive to my request be copied and sent to the following address: <br><ui>";
			var recipient_street = document.getElementById('recipient_street').value+"<br>";
			var recipient_address = document.getElementById('recipient_address').value+"<br>";
			var recipient_zip = document.getElementById('recipient_zip').value+"<br><br></ui>";
			var wave = "I request that all fees for locating and copying the records be waived. The information I obtain through this request will be used to "
			var use = document.getElementById('use').value+".  ";
			var cost = "Please let me know in advance of any search or copying if the fees will exceed $";
			var fee = document.getElementById('fee').value+".  ";
			var closed = "If portions of the requested records are closed, please segregate the closed portions and provide me with the rest of the records.<br><br>Sincerely,<br><br><br><br><br>"
			var requester_name = document.getElementById('requester_name').value+"<br>";
			var requester_street = document.getElementById('requester_street').value+"<br>";
			var requester_address = document.getElementById('requester_address').value+"<br>";
			var requester_zip = document.getElementById('requester_address').value+"<br>";
			var phone = document.getElementById('phone').value+"<br>";
			var email = document.getElementById('email').value+"<br>";

			if(isset(document.getElementById('recipient_street'))) {
				finish_message.innerHTML= sending.concat(recipient_street, recipient_address, recipient_zip, wave, use, cost, fee, closed, requester_name, requester_address, requester_zip, phone, email);
			} else {
				finish_message.innerHTML= wave.concat(use, cost, fee, closed, requester_name, requester_address, requester_zip, phone, email);
			};
		}

	</script>
	<link rel='stylesheet' href='blog_style.css'/>
	<link rel='stylesheet' href='boilerplate_style.css'/>
<body>
	<br><br><br><br><br><br>
	<div class='boiler_line'>
	</div>
	<br><br><br><br>
	 <?php
		page_title('PUBLIC RECORD REQUEST BUILDER')
	?>
<div class='flex_container'>
<h4><u>SUNSHINE REQUEST INPUT</u></h4>
	<div class='sunshine_form'>
		<?php echo"
		<form action='' method='POST'>
			<div class='flex_container2'>
				<div><b>
					Name of record custodian: <br><br><br>
					Address of record custodian: <br><br><br><br>
					Date: <br><br><br>

					Records requested: <br>
					</b><i>Describe the records as specifically as possible.<br>
					If you are asking for records that cover only a <br>particular period,
					such as last year or a specific<br>month, identify that time period.</i><br><br>

					<br><b>Address for sending records: <br>
					</b><i>Only fill out this field if you are seeking to own<br>copies of the records and
					are willing to pay for<br>them. If you would just like to see the records,<br>enter
					this field blank.</i><br><br>

					<b>How information obtained from this<br>request will be used: <br>
					</b><i>If you believe your request serves the public<br>interest and is not merely for personal
					or<br>commercial interest, you may ask that<br>associated fees be waived. If you are asking<br>for the
					fees to be waived, please specify how<br>this information will be used and why that use<br>is in
					the public interest. Be as detailed as possible.<br>If this request is for personal or commercial<br>purposes, indicate that.</i><br><br>

					<br><b>Maximum fee you are willing to pay to obtain<br>this information: <br>
					</b><i>This is the amount you are willing to pay without<br>additional information on the documents.
					If you<br>are not willing to pay without recieving further<br>communication, or not willing to pay at all,
					enter 0.</i><br><br><br>

					<b>Name of requester: <br><br>
					Address of requester: </b><br>
					<i>If you entered an address above and are the <br>recipient of the records, make sure these addresses<br>are the same.</i><br><br><br>
					<b>Phone number of requester: <br><br><br>
					Electronic mailing address of requester: <br>
				</b></div>
				<div>
					<input type='text'
						name='custodian_name'
						id='custodian_name'
						required='true'
						class='input-field'
						placeholder='Record Custodian Name'/><br><br>
					<input type='text'
						name='custodian_street'
						id='custodian_street'
						required='true'
						class='input-field'
						placeholder='Custodian Street Address'/><br>
					<input type='text'
						name='custodian_address'
						id='custodian_address'
						required='true'
						class='input-field'
						placeholder='City, State'/><br>
					<input type='text'
						name='custodian_zip'
						id='custodian_zip'
						required='true'
						class='input-field'
						placeholder='Zip Code'/><br><br>
					<input type='date'
						name='date'
						id='date'
						required='true'
						class='input-field'
						placeholder='Date of Request'/><br><br>
					<textarea name='records'
						rows='8'
						cols='19'
						id='records'
						required='true'
						class='textarea-field'
						placeholder='Records Requested'></textarea><br><br>
					<input type='text'
						name='recipient_street'
						id='recipient_street'
						required='false'
						class='input-field'
						placeholder='Custodian Street Address'/><br>
					<input type='text'
						name='recipient_address'
						id='recipient_address'
						required='false'
						class='input-field'
						placeholder='City, State'/><br>
					<input type='text'
						name='recipient_zip'
						id='recipient_zip'
						required='false'
						class='input-field'
						placeholder='Zip Code'/><br><br>
					<br><textarea name='use'
						rows='14'
						cols='19'
						id='use'
						required='true'
						class='textarea-field'
						placeholder='Records Use'></textarea><br><br>
					<br><br><input type='text'
						name='fee'
						id='fee'
						required='true'
						class='input-field'
						placeholder='Willingness to Pay'/><br><br>
					<br><br><br><br>
					<input type='text'
						name='requester_name'
						id='requester_name'
						required='true'
						class='input-field'
						placeholder='Requester Name'/><br><br>
					<input type='text'
						name='requester_street'
						id='requester_street'
						required='true'
						class='textarea-field'
						placeholder='Requester Street Address'/><br>
					<input type='text'
						name='requester_address'
						id='requester_address'
						required='true'
						class='textarea-field'
						placeholder='City, State'/><br>
					<input type='text'
						name='requester_zip'
						id='requester_zip'
						required='true'
						class='textarea-field'
						placeholder='Zip Code'></textarea><br><br><br>
					<input type='tel'
						name='phone'
						id='phone'
						required='false'
						placeholder='Phone Number'/><br><br><br>
					<input type='email'
						name='email'
						id='email'
						required='true'
						placeholder='Email Address'/><br><br>
					<input type='button' onclick='request()' onsubmit='return false' value='Finish' />
				</div>
			</div>
		</form>";
			?>
	</div>
	<h5><u>SUNSHINE REQUEST EXAMPLE</u></h5>
	<div class='sunshine_request'>
		<span id = 'display_message'></span>
		<span id = 'finish_message'></span>
	</div>
</div>
<br>
<div class='faq'>
	<a href='https://ago.mo.gov/missouri-law/sunshine-law/sunshine-law---top-10'>MISSOURI SUNSHINE LAW FAQ</a>
</div>
</html>
