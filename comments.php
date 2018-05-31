<?php
//this creates the form that users input comment into
echo"
	<form action='' method='post'>
        Name:
        <input type='text' name='Name' /><br />

        Date:
        <input type='date' name='Date' /><br />

        Post:
        <select name='Post'>
                <option value='1'>week one</option>
                <option value='2'>early bumps</option>
                <option value='3'>getting data</option>
                <option value='4'>alternative sources</option>
        </select>
		<br><br>

		Comment:
		<textarea name ='comment', rows='5', cols='40'></textarea>

        <br/><br/>
        <input type='submit' name='Done' value='post your comment' />
</form>";

//this is defining the user inputs from above as variables
$name = 'Name';
$date = 'Date';
$post = 'Post';
$comment = 'Comment';

$errors=array();

if (isset($_REQUEST['Comment'])){
	INSERT INTO comments (blog_post_id, author_name, date_posted, comment)
	VALUES ($post, $name, $date, $comment)

	if($_REQUEST['Name'] == ''){
		$errors ['Name'] = "required";

	}
}

 ?>
