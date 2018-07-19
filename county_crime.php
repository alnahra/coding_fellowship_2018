<?php

header("Content-type: text/xml");

// Start XML file, echo parent node
echo "<?xml version='1.0' ?>";
echo "<markers>";
$ind=0;

function parseToXML($htmlStr)
{
$xmlStr=str_replace('<','&lt;',$htmlStr);
$xmlStr=str_replace('>','&gt;',$xmlStr);
$xmlStr=str_replace('"','&quot;',$xmlStr);
$xmlStr=str_replace("'",'&#39;',$xmlStr);
$xmlStr=str_replace("&",'&amp;',$xmlStr);
return $xmlStr;
}

include('include/include_all.php');

function get_crime(){
	$result = dbQuery("
		SELECT *
		FROM county_crime
		")->fetchAll();
	return $result;
}

get_crime();

// Iterate through the rows, adding XML nodes for each
while ($row = get_crime()){
  echo "<marker ";
  echo"id='" . $row['id'] . "' ";
  echo"offense='" . $row['offense'] . "' ";
  echo"type='" . $row['type'] . "' ";
  echo"occurred='" . $row['occurred'] . "' ";
  echo"address='" . $row['address'] . "' ";
  echo"precinct='" . $row['precinct'] . "' ";
  echo"reporting_jurisdiction='" . $row['reporting_jurisdiction'] . "' ";
  echo"for_jurisdiction='" . $row['for_jurisdiction'] . "' ";
  echo"lat='" . $row['lat'] . "' ";
  echo"lng='" . $row['lng'] . "' ";
  echo '/>';
$ind = $ind + 1;
}
echo "</markers>";
?>
