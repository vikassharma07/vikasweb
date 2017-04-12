<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
<title>Sedna</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/css.css" />
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

	<section class="top-header-sec">
	
	<?php include("includes/header.php");
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
include("connection.php");
if(isset($_POST['submit'])=='Delete')
				{
				$chck=$_POST['checkbox'];
				//print_r($chck); //die;
				foreach($chck as $id)
				{
				$query="delete from category where id=".$id;
				$result=mysql_query($query);

				if($result=='1')
				{
			
				//header("location:managepages.php");
				}
				else
				{
				echo"deletion not done";
				}
}
}
$query="select * from category";
$result=mysql_query($query);
?>
<h1>Add Category</h1>
			 <div style="text-align:right:padding-left:55px" >
			 <h4 align="right" style:float-right><a href="addcategory.php">Add Category</a></h4><br>
			</div>
					
					 <form name="delete" action="" method="post"> 
<table  width="100%" border="0" cellspacing="0" cellpadding="0" id="product-table"> 
<tr>
<td class="table-header-repeat line-left minwidth-1"><a href="#">select</a></td>
<td class="table-header-repeat line-left minwidth-1"><a href="#">Cateory</a></td>

<td class="table-header-repeat line-left"><a href="#">action</a></td>
</tr>
<?php
while($row=mysql_fetch_array($result))
{
$id=$row['id'];
$category=$row['categoryname'];

?>
<tr>
<td><input type="checkbox" name="checkbox[]" id="checkbox" value="<?php echo $id;?>"></td>
<td><?php echo$category;?></td>

<td><a href="editcategory.php?id=<?php echo$id;?>" class="icon-1 info-tooltip"></a><a href="deletecategory.php?id=<?php echo$id;?>" class="icon-2 info-tooltip"></a></td>
		</tr>
<?php
}
?>
<tr>
		<td colspan="3">
		<input type="submit" name="submit" value="Delete"></td>
	
		</tr>
</table>
</form>
            </div>    
        </div>
     </section>
    <footer>
    	 	<?php include("includes/footer.php"); ?> 
    </footer>

</body>
</html>
