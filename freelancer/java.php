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
$title = "JAVA";
$address = "index.html";
$randomizequestions ="yes"; // set up as "no" to show questions without randomization
//    END CONFIGURATION
// #########################################

$a = array(
1 => array(
   0 => "Who is considered as the creator of JAVA ?",
   1 => "Dennis Richie",
   2 => "Ken Thompson",
   3 => "James Gosling",
   4 => "Bjarne Stroupstrup",
   6 => 3
),
2 => array(
   0 => "Which of the following statements about the Java language is true?",
   1 => "Java supports only Procedural approach towards programming",
   2 => "Both Procedural and Object Oriented Programming are supported in Java",
   3 => "Java supports only Object Oriented Programming approach",
   4 => "None of the Above",
   6 => 3
),
3 => array(
   0 => "Java is an enhanced version of C++",
   1 => "True",
   2 => "False",
   6 => 2
),
4 => array(
   0 => "JVM stands for",
   1 => "Java Verified Machine",
   2 => "Java Virtual Machine",
   3 => "Java Very large Machine",
   4 => "Java Very small Machine",
   6 => 2
),
5 => array(
   0 => "JRE stands for",
   1 => "Java Real Environment",
   2 => "Java Rapid Enterprise",
   3 => "Java Runtime Environment",
   4 => "None of the above",
   6 => 3
),
6 => array(
   0 => "Java source codes are compiled and converted to",
   1 => "Objectcodes",
   2 => "Assemblycodes",
   3 => "Binarycodes",
   4 => "Bytecodes",
   6 => 4
),
7 => array(
   0 => " What is the Extension of java bytecodes?",
   1 => ".java",
   2 => ".class",
   3 => ".bc",
   4 => "None of the Above",
   6 => 2
),
8 => array(
   0 => "Garbage collection takes place automatically in JVM.",
   1 => "True",
   2 => "False",
   6 => 1
),
9 => array(
   0 => "JAR stands for?",
   1 => "Java Archive",
   2 => "Java Archive Runner",
   3 => "Java Application Runner",
   4 => "None of the above",
   6 => 1
),
10 => array(
   0 => "What are the pillars of OOPS concept?",
   1 => "Abstraction,Inheritance, Encapsulation, Polymorphism",
   2 => "Atomicity, Inheritance, Encapsulation, Polymorphism",
   3 => "Abstraction, Inheritance, Polymorphism",
   4 => "None of the Above",
   6 => 1
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
        $percentaje=0;
        }else{
        $percentaje= Round(100*$ok / $question);
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
        if (document.percentaje.response.value==0){
                if (number==<?php print $a[$randval2][6] ; ?>){
                        document.percentaje.response.value=1
                        document.percentaje.question.value++
                        document.percentaje.ok.value++
                }else{
                        document.percentaje.response.value=1
                        document.percentaje.question.value++
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
            	<H1><?php print "$title"; ?></H1>
<TABLE BORDER=0 CELLSPACING=5 WIDTH=500>

<?php if ($question<$max){ ?>

<TR><TD ALIGN=RIGHT>
<FORM METHOD=POST NAME="percentaje" ACTION="<?php print $URL; ?>">

<BR>Percentage of correct responses: <?php print $percentaje; ?> %
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
}
else
{
?>
<TR><TD ALIGN=Center>
The Quiz has finished
<BR>Percentaje of correct responses: <?php print $percentaje ; ?> %
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
			$query1="insert into result(user_id,fname,lname,emailid,profession,testname,date,percentage) value('$id','$fname','$lname','$emailid','$professionaltitle','$title','$date','$percentaje')";
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
