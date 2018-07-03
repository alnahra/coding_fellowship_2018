<?php
include('include/include_all.php');

// Start XML file, create parent node
$doc = new DOMDocument("1.0");
$node = $doc->createElement("markers");
$parnode = $doc->appendChild($node);

// Opens a connection to a mySQL server
$connection=mysql_connect('localhost', $username, $password);
if (!$connection) {
  die('Not connected : ' . mysql_error());
}

// Set the active mySQL database
$db_selected = mysql_select_db($database, $connection);
if (!$db_selected) {
  die ('Can\'t use db : ' . mysql_error());
}

// Select all the rows in the markers table
$query = "SELECT * FROM markers WHERE 1";
$result = mysql_query($query);
if (!$result) {
  die('Invalid query: ' . mysql_error());
}

header("Content-type: text/xml");

// Iterate through the rows, adding XML nodes for each
while ($row = @mysql_fetch_assoc($result)){
  // ADD TO XML DOCUMENT NODE
  $node = $doc->createElement("marker");
  $newnode = $parnode->appendChild($node);

  $newnode->setAttribute("offense", $row['offense']);
  $newnode->setAttribute("reported", $row['reported']);
  $newnode->setAttribute("occurred", $row['occurred']);
  $newnode->setAttribute("zone", $row['zone']);
  $newnode->setAttribute("address", $row['address']);
  $newnode->setAttribute("precinct", $row['precinct']);
  $newnode->setAttribute("premise", $row['premise']);
  $newnode->setAttribute("reporting_jurisdiction", $row['reporting_jurisdiction']);
  $newnode->setAttribute("for_jurisdiciton", $row['for_jurisdiction']);
  $newnode->setAttribute("latitude", $row['latitude']);
  $newnode->setAttribute("longitude", $row['longitude']);
  $newnode->setAttribute("type", $row['type']);
}

echo $doc->saveXML();

?>
