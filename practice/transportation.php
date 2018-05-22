
<?php
	$transport = array("Automobile", "Jet", "Ferry", "Subway");
	echo "Travel takes many forms, whether across town, across
the country, or around the world.  Here is a list of some
common modes of transportation: <br>";
?>
<html>
	<ul>
	<li>Automobile</li>
	<li>Ferry</li>
	<li>Subway</li>
	</ul>
</html>
	<form>
		<textarea cols="30" rows="3" name="link"></textarea>
		<input type="submit" value="Go">
	</form>
<?php
	echo "$_REQUEST[transport]";
?>
