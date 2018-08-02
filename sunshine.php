<?php
	include('include/include_all.php');
	site_header('Sunshine Request');
	include('jquery/function.js');
?>
<html>
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
<html>
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
					are willing to pay for<br>them. If you would just like to see the records,<br>leave
					this field blank.</i><br><br>

					<b>How information obtained from this<br>request will be used: <br>
					</b><i>If you believe your request serves the public<br>interest and is not merely for personal
					or<br>commercial interest, you may ask that<br>associated fees be waived. If you are asking<br>for the
					fees to be waived, please specify how<br>this information will be used and why that use<br>is in
					the public interest. Be as detailed as possible.<br>If this request is for personal or commercial<br>purposes, leave this field blank.</i><br><br>

					<br><b>Maximum fee you are willing to pay to obtain<br>this information: <br>
					</b><i>This is the amount you are willing to pay without<br>additional information on the documents.
					If you<br>are not willing to pay without recieving further<br>communication, or not willing to pay at all,
					leave<br>this field blank.</i><br><br>

					<b>Name of requester: <br><br>
					Address of requester: <br><br><br><br><br>
					Phone number of requester: <br><br>
					Electronic mailing address of requester: <br>
				</b></div>
				<div>
					<input type='text'
						name='custodian_name'
						id='custodian_name'
						required='true'
						class='input-field'
						placeholder='Record Custodian Name'/><br><br>
					<textarea name='custodian_address'
						rows='4'
						cols='19'
						id='custodian_address'
						required='true'
						class='textarea-field'
						placeholder='Record Custodian Address'></textarea><br><br>
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
					<textarea name='recipient_address'
						rows='4'
						cols='19'
						id='recipient_address'
						required='false'
						class='textarea-field'
						placeholder='Recipient Address'></textarea><br><br>
					<br><textarea name='use'
						rows='14'
						cols='19'
						id='use'
						required='false'
						class='textarea-field'
						placeholder='Records Use'></textarea><br><br>
					<br><br><input type='text'
						name='fee'
						id='fee'
						required='false'
						class='input-field'
						placeholder='Willingness to Pay'/><br><br>
					<br><br><br><br>
					<input type='text'
						name='requester_name'
						id='requester_name'
						required='true'
						class='input-field'
						placeholder='Requester Name'/><br><br>
					<textarea name='requester_address'
						rows='4'
						cols='19'
						id='requester_address'
						required='true'
						class='textarea-field'
						placeholder='Requester Address'></textarea><br><br>
					<input type='tel'
						name='phone'
						id='phone'
						required='false'
						placeholder='Phone Number'/><br><br>
					<input type='email'
						name='email'
						id='email'
						required='true'
						placeholder='Email Address'/><br><br>
					<button onclick='generate_request()'>
						Finish</button>
				</div>
			</div>
		</form>";
			?>
	</div>
	<h5><u>SUNSHINE REQUEST EXAMPLE</u></h5>
	<div class='sunshine_request'>
		<p id='demo'></p>
	</div>
</div>
</html>
