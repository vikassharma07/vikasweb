<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
<title>Sedna</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/responsive.css" />
<link rel="stylesheet" type="text/css" href="css/font.css" />
<link rel="stylesheet" type="text/css" href="css/css.css" />
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

	<section class="top-header-sec">
	<?php include("includes/header.php"); 
	include("connection.php"); 
	
	if(!$_SESSION['username'])
	{
	header("location:index.php");
	exit;
	}
	?> 
	
		
	</section>
    	
   
    <section class="content-sec">
    	<div id="wrapper">
            <div class="span8 left about-us-sec">
<?php 
	
	if(isset($_POST['submit'])=='DELETE')
	{
	$chk=$_POST['checkbox'];
	foreach($chk as $id)
	{
	$query="delete from latestnews where id=".$id;
	$result=mysql_query($query);
	
	if($result!='1')
	{
	echo"Error";
	
	}
	}
	}
	$query="select * from latestnews";
	$result=mysql_query($query);
?>
	<h1><b>MANAGE NEWS</b></h1>
	<div style="text-align:right:padding-left:55px" >
			
            	<h4><a href="addnews.php">Add News</a></h4>
					 </div>
					 <br></br>
					 
			<form name="myform" method="post" action="">
	<table width="100%" cellpadding="0" cellspacing="0" id="product-table">
	<tr>
				<td class="table-header-repeat line-left minwidth-1"><a href="">Sr.No.</a></td>
				<th class="table-header-repeat line-left minwidth-1"><a href="">News</a>	</th>
					<th class="table-header-repeat line-left minwidth-1"><a href="">Description</a></th>
					<th class="table-header-repeat line-left"><a href="">Date</a></th>
					<th class="table-header-repeat line-left"><a href="">Image</a></th>
					<th class="table-header-options line-left"><a href="">Action</a></th>
				</tr>
	<?php
		while($row=mysql_fetch_array($result))
		{
		$id=$row['id'];
		$m_news=$row['m_news'];
		$description=$row['description'];
		$date=$row['m_date'];
		$image=$row['image'];
	
		?>
		<tr>
		<td><input type="checkbox" name="checkbox[]" id="checkbox" value="<?php echo $id;?>"></td>
		<td><?php echo $m_news;?></td>
		<td><?php echo $description;?></td>
		<td><?php echo $date;?></td>
		<td><img src="news/<?php echo $image;?>" width="100" height="100"></td>
		<td><a href="delete_news.php?id=<?php echo $id;?>" class="icon-2 info-tooltip"></a><a href="edit_news.php?id=<?php echo $id;?>" class="icon-1 info-tooltip"></a></td>
		
		</tr>
		
		<?php } ?>
		<tr>
		<td colspan="7"><input type="submit" name="submit" value="DELETE"></td>
		</tr>
		
     </form>
	</table>
   </div>
    	
    </section>
    <footer>
    	 	<?php include("includes/footer.php"); ?> 
    </footer>

</body>
</html>





