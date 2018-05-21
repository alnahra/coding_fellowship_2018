<html>
<?php
$weather = array("rain", "sunshine", "clouds", "hail", "sleet", "snow","wind");
/*make sure there is a ; at the end of each line*/
	echo "We've seen all kinds of weather this month. At the beginning of the month,
		we had $weather[5] and $weather[6]. Then came $weather[1] with a few $weather[2] and
		some $weather[0]. At least we didn't get any $weather[3] or $weather[4]. <br> <br>";
		/*be sure to put <br> after each line INSIDE QUOTATIONS*/
$cities = array("Tokyo", "Mexico City", "New York City", "Mumbai", "Seoul",
	"Shanghai", "Lagos", "Buenos Aires", "Cairo", "London");
	/*create the array using double quotes, commas go outside the quotes*/
while ($a <= 10) {
	/*list the array variables as $____[__],*/
	echo "$cities[0], $cities[1], $cities[2], $cities[3], $cities[4],
	$cities[5], $cities[6], $cities[7], $cities[8], $cities[9] <br>";
}
?>
</html>
