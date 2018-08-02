function generate_request(){
	var custodian = "$_REQUEST['custodian_name']<br>";
	var address = "$_REQUEST['custodian_address']<br><br>";
	var date = "$_REQUEST['date']<br><br>";
	var intro = "Dear $_REQUEST['custodian_name'], <br>";
	var body = "The following is a request under the Missouri Sunshine Law, Chapter 610, REvised Statues of Missouri. I request that you make available to me the following records: <br>";
	var records = "$_REQUEST[records].<br>";
	var res = custodian.concat(address, dat, intro, body, records);
	document.getElementById('demo').innerHTML = res;
}
