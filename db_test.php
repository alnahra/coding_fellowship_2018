<?php
include('config/config.php');
include('include/include_all.php');

/* this function allows me to add items into the inventory we created for grocery items */
function insert_inventory_item($name, $description, $category){
	$result = dbQuery("
		INSERT INTO inventory(name, description, category)
		VALUES('$name', '$description', '$category')
		")->fetch();
	}

/* this function calls all of the inventory items that we have entered */
function get_all_inventory_items(){
	$result = dbQuery("
		SELECT *
		FROM inventory
		")->fetchAll();
		return $result;
	}

$all_inventory_items = get_all_inventory_items();

/* this function calls a specific inventory item (aka calls a single blog post)
the (inventory_id) specific doesn't matter, as long as it matches the $inventory_id in WHERE */
function get_item ($inventory_id){
	$result = dbQuery("
	SELECT *
	FROM inventory
	WHERE inventory_id = $inventory_id
	")-> fetch();
	return $result;
}
/* WHERE inventory_id = :$inventory_id
	", array ('inventory_id'=>$inventory_id)" */

/* this calls the function get_item, because the $result is only defined within the function
the name of $inventory_item doesn't matter, as long as it matches what you var_dump*/
$inventory_item = get_item (3);

/* this formats the var_dump information to be more readable on Macs,
Try to make this a function so I can just call it rather than typing these three lines of code at the end always */
echo "<pre>";
var_dump($inventory_item);
echo "</pre>";

/* inventory_item = get_item($_REQUEST['inventory_id']); then in the URL put the thing you have in parentheses = get_all_inventory_items
so for this one we will be calling www.url/inventory_id=number */
