<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
<title>Sedna</title>
<link rel="stylesheet" type="text/css" href="css/profile.css" />
<link rel="stylesheet" type="text/css" href="css/css.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/responsive.css" />
<link rel="stylesheet" type="text/css" href="css/font.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.aw-showcase.js"></script>


<script type="text/javascript">

$(document).ready(function()
{
	$("#showcase").awShowcase(
	{
		content_width:			700,
		content_height:			470,
		fit_to_parent:			false,
		auto:					true,
		interval:				3000,
		continuous:				false,
		loading:				true,
		tooltip_width:			200,
		tooltip_icon_width:		32,
		tooltip_icon_height:	32,
		tooltip_offsetx:		18,
		tooltip_offsety:		0,
		arrows:					true,
		buttons:				true,
		btn_numbers:			true,
		keybord_keys:			true,
		mousetrace:				false, /* Trace x and y coordinates for the mouse */
		pauseonover:			true,
		stoponclick:			false,
		transition:				'hslide', /* hslide/vslide/fade */
		transition_delay:		0,
		transition_speed:		500,
		show_caption:			'onload', /* onload/onhover/show */
		thumbnails:				false,
		thumbnails_position:	'outside-last', /* outside-last/outside-first/inside-last/inside-first */
		thumbnails_direction:	'vertical', /* vertical/horizontal */
		thumbnails_slidex:		1, /* 0 = auto / 1 = slide one thumbnail / 2 = slide two thumbnails / etc. */
		dynamic_height:			false, /* For dynamic height to work in webkit you need to set the width and height of images in the source. Usually works to only set the dimension of the first slide in the showcase. */
		speed_change:			true, /* Set to true to prevent users from swithing more then one slide at once. */
		viewline:				false, /* If set to true content_width, thumbnails, transition and dynamic_height will be disabled. As for dynamic height you need to set the width and height of images in the source. */
		custom_function:		null /* Define a custom function that runs on content change */
	});
});
$(function() {
			var pull = $('#pull');
				menu = $('nav ul');
				menuHeight	= menu.height();

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});

			$(window).resize(function(){
        		var w = $(window).width();
        		if(w > 320 && menu.is(':hidden')) {
        			menu.removeAttr('style');
        		}
    		});
		});

</script>

</head>
<body>
	<?php
	include("connection.php");
	$query="select * from category";
	
	?>
	 <section class="top-header-sec">
	<?php include("includes/header.php"); ?> 
	</section> 
	 <section class="content-sec">
    	<div>
		
            <div class="span8 left about-us-sec">
			<form name="search" action="" method="get">
            	<h4 class="firstdiv">Find your work <input type="text" name="find" placeholder="search for Jobs">
				<input type="submit" name="submit" value="search">
				</h4>
				</form>
				<?php
//declaring variable
//if(isset($_GET['submit'])=='search'){
$input = $_GET['find'];

//If they did not enter a search term we give them an error
if ($input == "")
{
echo "<p><h3>You forgot to enter a search term!</h3>";
exit;
}

//open connection
include("connection.php");

//filtering input for xss and sql injection
$input = strip_tags( $input );
$input = mysql_real_escape_string( $input );
$input = trim( $input );

//the sql statement
$sql = "SELECT * FROM postmanagement WHERE categoryname LIKE '%$input%' OR jobdescription LIKE '%$input%'";

//execute the statement
$data = mysql_query($sql, $conn) or die(mysql_error());
while ($result = mysql_fetch_array($data)) {
//giving names to the fields
$id=$result['id'];
$title = $result['title'];
$date = $result['p_date'];
$price = $result['price'];
$time = $result['est_time'];
$budget = $result['budget'];
$description = $result['jobdescription'];
$skill = $result['skill'];
//put the results on the screen
//echo "<br><b>$name</b>";
echo"<br />";

/*echo "<b>$title</b><br>";
echo "$date<br>";
echo $price;
echo $time;
echo $budget;
echo $desc=substr($description,0,300);
echo $skill;
echo "<hr/>";*/
?>

<table>
		<tr>
			<td colspan="3" style="font-size:30px"><a href="category1_detail.php?id=<?php echo $id; ?>"><?php echo $title;?></a></td>
		</tr>
		<tr>
			<td style="padding-right:7px; padding-top:10px;padding-bottom:10px;"><span style="color:#FF6600">Price - </span><?php echo $price; ?></td>
			<td style="padding-right:7px;padding-top:10px;padding-bottom:10px;"><span style="color:#FF6600">Est.time : </span><?php echo $time; ?></td>
			<td><span style="color:#FF6600">Budget</span>:$<?php echo $budget; ?></td> 
			
		</tr>
		<tr>
			<td colspan="3"><?php echo $desc=substr($description,0,300); ?>....<a href="category1_detail.php?id=<?php echo $id; ?>">Read More</a></td>
		</tr>
		<tr>
			<td colspan="3" style="padding-top:10px;padding-bottom:10px;"><span style="color:#FF6600;">Skils Required : </span><?php echo $skill; ?></td>
		</tr>
		<tr>
		<hr></hr>
		</tr>
	</table>
<?php
}

//This counts the number or results – and if there wasn’t any it gives a little message explaining that
$anymatches=mysql_num_rows($data);
if ($anymatches == 0)
{
echo "<h3>Results</h3>";?>
<p>Sorry, your search: &quot;<?php echo $input;?> &quot; returned zero results</p>

//Search on google
<a href="http://www.google.com/search?q=<?php echo $input;?>" target="_blank" title="Look up
<?php echo $input;?> " on Google">Click here</a> to try the
search on google</p>
<?php
}

//And we remind them what they searched for
echo "<br><b>You searched for:</b> " .$input;

?>
				
        </div>
		<div class="span4 right testimonials">
            	<?php include("includes/right.php"); ?> 	
            </div>
</section>
    <footer>
    	 	<?php include("includes/footer.php"); ?> 
    </footer>

</body>
</html>
