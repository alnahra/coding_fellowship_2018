<?php
$municipality_id = $_REQUEST['id'];
	include('include/include_all.php');
	site_header('MUNICIPALITY INFO');
	page_title ('MUNICIPALITIES MAP');
echo "
	<link rel='stylesheet' href='boilerplate_style.css'/>
	<link rel='stylesheet' href='blog_post_style.css'/> ";
	//$blog_list=get_all_blog_posts();
	$municipality=get_municipality($_REQUEST['id']);
	//var_dump($post);
echo "
	<h2>$municipality[name]</h2> <br>
	<body>POPULATION: $municipality[population]</body>
	<div class='row'>
		<div class='leftcolumn'>
			<div class='post'>
			<p>
				2017 REVENUE: $municipality[revenue]   |   2017 EXPENDITURE: $municipality[expenditure]
				<br><br> POLICE: $municipality[police]</div>
			</p>
			</div>
		</div>
	<br><br><br><br><br><br><br>
	</div>";
echo "
	<html>
		<body>
		<div class='comment_box'>
		<p>
			<input type='text' name='name' id='author_name' value='".@$_REQUEST['author_name']."' placeholder='NAME'/><br/>
			<input type='date' name='date' id='date_posted' value='".@$_REQUEST['date']."' placeholder='MM-DD-YYYY'/><br/><br>
			<textarea name='comment' id='comment' value='".@$_REQUEST['comment']."' placeholder='COMMENT'></textarea><br/><br>
			<input type='button' onclick='save_comment($_REQUEST[id])' value='Submit Comment'/>
		</p>
		</div>
			<div id='confirmContentFromServer'><br>";
				$comments=post_comments($_REQUEST['id']);
					foreach ($comments as $comment) {
						echo "
						<div class='row'>
							<div class='leftcolumn'>
								<div class='comment'>
									<i> ".$comment['author_name']." on ".$comment['date_posted']." said: </i><br>
									".$comment['comment']." <br><br>
								</div>
							</div>
						</div>
						";
					};
					echo "
			</div>
		</body>
	    <head>
	        <script type='text/javascript'>
	            function save_comment(){
	                var id = $_REQUEST[id];
					var author_name = $('#author_name').val();
					var date_posted = $('#date_posted').val();
					var comment = $('#comment').val();

	                $.post('save_comment_endpoint.php', {id, author_name, date_posted, comment},
						function(contentEchoedFromServer){
	                   		$('#confirmContentFromServer').html(contentEchoedFromServer);
	                })
	            }
	        </script>
	    </head>
	</html>";



//this creates the form that users input comments into
// echo"
// 	<div class='comment_box'>
// 	<form action='' method='post'>
// 		Name:
// 		<input type='text' name='author_name' /><br />
//
// 		Date:
// 		<input type='date' name='date_posted' /><br />
// 		<br>
//
// 		Comment:
// 		<textarea name ='comment', rows='5', cols='40'></textarea>
// 		<br/><br/>
// 			<input type='submit' name='Submit' value='post your comment' />
// 	</form>
// 	</div>
// 	<br><br>";
//
// if (isset($_REQUEST['Submit Comment'])) {
//  	submit_comment($id);
// }
