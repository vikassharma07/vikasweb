<?php
session_start();
if(isset($_SESSION['uname']))
{
}
else{
header("location:userlogin.php");
exit;
}

error_reporting(0);

// #########################################
// In this page you will find the code required to create multiple choice exams
// Copy this code and save it to a file name "whatever.php"
// The file name must finish with ".php"
// Save the file to a PHP unable server.
// Please consider adding a link to this service:
//      http://www.phptutorial.info/scripts/multiple_choice/
//
// A website was created based in this script at which allows
//   to create and maintain the test online at:
//      http://www.testak.org
//
// #########################################
//      CONFIGURATION
$title = "Hypertext Markup Language(HTML)";
$address = "index.html";
$randomizequestions ="yes"; // set up as "no" to show questions without randomization
//    END CONFIGURATION
// #########################################

$a = array(
1 => array(
   0 => "Who is known as the father of WWW (World Wide Web) ?",
   1 => "Charles Darwin",
   2 => "Tim Thompson",
   3 => "Tim Berners-Lee",
   4 => "Robert Cailliau",
   6 => 3
),
2 => array(
   0 => "What does a Markup tag tells the web browser?",
   1 => "How to organize the page 	",
   2 => "How to display message box on page",
   3 => "How to display the page",
   4 => "None of these",
   6 => 3
),
3 => array(
   0 => "Which organization defines the Web Standards?",
   1 => "Apple Inc.",
   2 => "World Wide Web Consortium(W3C)",
   3 => "Microsoft Corporation",
   4 => "IBM Corporation",
   6 => 2
),
4 => array(
   0 => "How will you define a homepage??",
   1 => "Is is an index of encyclopedia articles 	",
   2 => "It is the first page of a website",
   3 => "It is a place where all the data of internet is stored",
   4 => "It is required for the access of internet",
   6 => 2
),
5 => array(
   0 => "What is the traditional file name of a homepage of a website?? 	",
   1 => "home.html",
   2 => "index.html",
   3 => "web.html",
   4 => "front.html",
   6 => 2
),
6 => array(
   0 => "What is the basic fundamental block of an HTML page?",
   1 => "HTML Element",
   2 => "HTML body",
   3 => "HTML Attribute",
   4 => "HTML tag",
   6 => 4
),
7 => array(
   0 => "What does an HTML tag do?",
   1 => "It determines the organizational structure of your Web site.",
   2 => "It connects your web site to an operating environment.",
   3 => "It hides programming instructions from view.",
   4 => "It specifies formatting and layout instructions for your web page.",
   6 => 4
),
8 => array(
   0 => "Which one among these connects web pages?",
   1 => "Link",
   2 => "Connector",
   3 => "Hyperlink",
   4 => "None of these",
   6 => 3
),
9 => array(
   0 => "Amongst these, which one can be used for writing HTML code?? 	",
   1 => "Notepad++",
   2 => "Microsoft Word",
   3 => "Windows Media Player",
   4 => "None of these",
   6 => 1
),
10 => array(
   0 => "Which among them is the root tag for an HTML document?",
   1 => " 	  HEAD",
   2 => " 	  TITLE",
   3 => " 	  HTML",
   4 => " 	  BODY",
   6 => 3
),
);

$max=10;

$question=$_POST["question"] ;

if ($_POST["Randon"]==0){
        if($randomizequestions =="yes"){$randval = mt_rand(1,$max);}else{$randval=1;}
        $randval2 = $randval;
        }else{
        $randval=$_POST["Randon"];
        $randval2=$_POST["Randon"] + $question;
                if ($randval2>$max){
                $randval2=$randval2-$max;
                }
        }
        
$ok=$_POST["ok"] ;

if ($question==0){
        $question=0;
        $ok=0;
        $percentage=0;
        }else{
        $percentage= Round(100*$ok / $question);
        }
?>
<?php
error_reporting(0);

// #########################################
// In this page you will find the code required to create multiple choice exams
// Copy this code and save it to a file name "whatever.php"
// The file name must finish with ".php"
// Save the file to a PHP unable server.
// Please consider adding a link to this service:
//      http://www.phptutorial.info/scripts/multiple_choice/
//
// A website was created based in this script at which allows
//   to create and maintain the test online at:
//      http://www.testak.org
//
// #########################################
//      CONFIGURATION
$title = "PHP: Hypertext Preprocessor(PHP)";
$address = "index.html";
$randomizequestions ="yes"; // set up as "no" to show questions without randomization
//    END CONFIGURATION
// #########################################

$a = array(
1 => array(
   0 => " Trace the odd data type",
   1 => "floats",
   2 => "integer",
   3 => "doubles",
   4 => "real-number",
   6 => 2
),
2 => array(
   0 => "Which of the folowing are valid float values?",
   1 => "4.5678",
   2 => "4.0",
   3 => "7e4",
   4 => "All of above",
   6 => 4
),
3 => array(
   0 => " In php string data are",
   1 => "delimited by single quote",
   2 => "delimited by double quote",
   3 => "delimited by <<< identifier",
   4 => " All of above",
   6 => 4
),
4 => array(
   0 => " Which of the following delimiting method is known as string Interpolation",
   1 => "delimited by single quote",
   2 => "delimited by double quote",
   3 => "delimited by <<< identifier",
   4 => "All of above",
   6 => 3
),
5 => array(
   0 => "Which datatypes are treaded as arrays",
   1 => "integer",
   2 => "float",
   3 => "string",
   4 => "Booleans",
   6 => 3
),
6 => array(
   0 => "Which of following are compound data type?",
   1 => " Array",
   2 => " Objects",
   3 => "Both",
   4 => "None",
   6 => 3
),
7 => array(
   0 => "Casting operator introduced in PHP 6 is",
   1 => "(array)",
   2 => "(int64)",
   3 => "(real) or (double) or (float)",
   4 => "(object)",
   6 => 2
),
8 => array(
   0 => "When defining identifier in PHP you should remember that",
   1 => " Identifier are case sensitive. So $result is different than $ result",
   2 => "Identifiers can be any length",
   3 => " Both of above",
   4 => " None of above",
   6 => 3
),
9 => array(
   0 => "Identify the invalid identifier",
   1 => "my-function",
   2 => " size",
   3 => " –some word",
   4 => "This&that",
   6 => 4
),
10 => array(
   0 => " Identify the variable scope that is not supported by PHP",
   1 => "Local variables",
   2 => "Function parameters",
   3 => "Hidden variables",
   4 => "Global variables",
   6 => 3
),
);

$max=10;

$question=$_POST["question"] ;

if ($_POST["Randon"]==0){
        if($randomizequestions =="yes"){$randval = mt_rand(1,$max);}else{$randval=1;}
        $randval2 = $randval;
        }else{
        $randval=$_POST["Randon"];
        $randval2=$_POST["Randon"] + $question;
                if ($randval2>$max){
                $randval2=$randval2-$max;
                }
        }
        
$ok=$_POST["ok"] ;

if ($question==0){
        $question=0;
        $ok=0;
        $percentage=0;
        }else{
        $percentage= Round(100*$ok / $question);
        }
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
<title>Sedna</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />

<script type="text/javascript" src="css/coin-slider.css"></script>
<link rel="stylesheet" type="text/css" href="css/responsive.css" />
<link rel="stylesheet" type="text/css" href="css/font.css" />
<link rel="stylesheet" type="text/css" href="css/profile.css" />
<link rel="stylesheet" type="text/css" href="css/recentnews.css" />

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






<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-aller.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js"></script>
<SCRIPT LANGUAGE='JavaScript'>
<!-- 
function Goahead (number){
        if (document.percentage.response.value==0){
                if (number==<?php print $a[$randval2][6] ; ?>){
                        document.percentage.response.value=1
                        document.percentage.question.value++
                        document.percentage.ok.value++
                }else{
                        document.percentage.response.value=1
                        document.percentage.question.value++
                }
        }
        if (number==<?php print $a[$randval2][6] ; ?>){
                document.question.response.value="Correct"
        }else{
                document.question.response.value="Incorrect"
        }
}
// -->
</SCRIPT>

</head>
<body>

	<section class="top-header-sec">
	<?php include("includes/header.php"); ?> 
	</section>
   
 
    <section class="content-sec">
    	<div id="wrapper">
            <div class="span8 left about-us-sec">
            	<h4>We Make Your Business Unique Globally</h4>
				<H1><?php print "$title"; ?></H1>
<TABLE BORDER=0 CELLSPACING=5 WIDTH=500>

<?php if ($question<$max){ ?>

<TR><TD ALIGN=RIGHT>
<FORM METHOD=POST NAME="percentage" ACTION="<?php print $URL; ?>">

<BR>Percentage of correct responses: <?php print $percentage; ?> %
<BR><input type=submit value="Next >>">
<input type=hidden name=response value=0>
<input type=hidden name=question value=<?php print $question; ?>>
<input type=hidden name=ok value=<?php print $ok; ?>>
<input type=hidden name=Randon value=<?php print $randval; ?>>
<br><?php print $question+1; ?> / <?php print $max; ?>
</FORM>
<HR>
</TD></TR>

<TR><TD>
<FORM METHOD=POST NAME="question" ACTION="">
<?php print "<b>".$a[$randval2][0]."</b>"; ?>
 
<BR>     <INPUT TYPE=radio NAME="option" VALUE="1"  onClick=" Goahead (1);"><?php print $a[$randval2][1] ; ?>
<BR>     <INPUT TYPE=radio NAME="option" VALUE="2"  onClick=" Goahead (2);"><?php print $a[$randval2][2] ; ?>
<?php if ($a[$randval2][3]!=""){ ?>
<BR>     <INPUT TYPE=radio NAME="option" VALUE="3"  onClick=" Goahead (3);"><?php print $a[$randval2][3] ; } ?>
<?php if ($a[$randval2][4]!=""){ ?>
<BR>     <INPUT TYPE=radio NAME="option" VALUE="4"  onClick=" Goahead (4);"><?php print $a[$randval2][4] ; } ?>
<?php if ($a[$randval2][5]!=""){ ?>
<BR>     <INPUT TYPE=radio NAME="option" VALUE="5"  onClick=" Goahead (5);"><?php print $a[$randval2][5] ; } ?>



</FORM>

<?php
}else{
?>
<TR><TD ALIGN=Center>
The Quiz has finished
<BR>Percentage of correct responses: <?php print $percentage ; ?> %
<p><A HREF="<?php print $address; ?>" class="gg">Home Page</a>
<?php
include("connection.php");
			$uname=$_SESSION['uname'];
			$query="select * from signup where uname='".$uname."'";
			$result=mysql_query($query);
			while($row=mysql_fetch_array($result))
			{
			$id=$row['id'];
			$fname=$row['fname'];
			$lname=$row['lname'];
			$emailid=$row['emailid'];
			$professionaltitle=$row['professionaltitle'];
			$date=date('d/m/y');
			
			}
			$query1="insert into result(user_id,fname,lname,emailid,profession,testname,date,percentage) value('$id','$fname','$lname','$emailid','$professionaltitle','$title','$date','$percentage')";
			$result=mysql_query($query1);
 }
 ?>

</TD></TR>
</TABLE>

            </div>
            <div class="span4 right testimonials">
            	<?php include("includes/right.php"); ?> 	
            
            </div>
        </div>
    	
    </section>
    <footer>
    	 	<?php include("includes/footer.php"); ?> 
    </footer>

</body>
</html>
