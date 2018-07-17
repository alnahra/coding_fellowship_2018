<?php
$municipality_id = $_REQUEST['id'];
	include('include/include_all.php');
	site_header('MUNICIPALITY INFO');
echo "
	<link rel='stylesheet' href='boilerplate_style.css'/>
	<link rel='stylesheet' href='blog_post_style.css'/> ";
	//$blog_list=get_all_blog_posts();
	$municipality=get_municipality($_REQUEST['id']);
	//var_dump($post);
echo "
<br><br><br><br>
	<h2>$municipality[name]</h2>
	<div class='row'>
		<div class='leftcolumn'>
			<div class='post'>
			<h3>POPULATION: $municipality[population]</h3>
				<b>PERCENTAGE OF POPULATION THAT IDENTIFIES AS WHITE</b>: $municipality[race_w] <br>
				<b>PERCENTAGE OF POPULATION THAT IDENTIFIES AS BLACK</b>: $municipality[race_b]
				<h3>AREA: $municipality[area] sqm
			</h3>
				_____________________________________________________________________________ <br>
			<p>
				<b>2017 REVENUE</b>: $municipality[revenue] | <b>2017 EXPENDITURE</b>: $municipality[expenditure]
				<br><br> <b>POLICE: $municipality[police] <br>
				FULL-TIME OFFICERS</b>: $municipality[officers] | <b>OFFICERS PER 1,000 PEOPLE</b>: $municipality[officers_per]
				<br><i>* indicates precinct total</i>
				<br><br>
				<b>TOTAL INDEX OFFENSES</b>: $municipality[total_index]<br>
				VIOLENT OFFENSES: $municipality[violent_index]   |   PROPERTY OFFENSES: $municipality[property_index]
				<br><br> <b>INDEX ARRESTS</b>: $municipality[index_arrests] <br>
				CLEARANCE RATE: $municipality[clearance]<br><br>
				<b>NON-INDEX OFFENSES</b>: $municipality[non_index]
			</p> _____________________________________________________________________________ <br>
			<body>
			<br>
				** ARREST INFO **<br>
				These numbers reflect those reported to the Missouri Highway Patrol's Statistical Analysis
				Center for the year 2017. Index offenses (also known as Part I offenses) include murder, rape,
				robbery, aggravated assault, burglary, larceny theft, motor vehicle theft, arson, and human trafficking.
				The total index value represents the overall number of index offense crimes reported. The violent index value
				represents the offenses that fall under the violent category, which includes murder, rape, robbery, aggravated
				assault, and human trafficking. The total property index value represents non-violent Part I crimes,
				including burglary, larceny theft, motor vehicle theft, and arson. The index arrests value shows
				the total number of arrests for Part I crimes, and the clearance rate comes from calculating the percentage
				of index crimes for which an arrest was filed. The total non-index arrests value shows arrest numbers for
				non-index crimes within each jurisdiction.
			</body>
			</div>
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
