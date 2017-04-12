<div id="wrapper">
        	<div class="span4 left"><a href="#" class="logo">Sedna</a></div>
            <div class="span2 right"><h2>WELCOME
			<?php session_start(); 
			echo $_SESSION['username'];?></h2>
			<a href="logout.php">Logout</a></div>
        </div>
    <section class="nav-bar">
    	<div id="wrapper">
            <nav class="clearfix">
                        <ul class="clearfix">
                            <li><a href="index.php" class="active"><img src="images/home-icon.png" alt="home-image" /></a></li>
							<li><a href="managepages.php">Manage Pages</a></li>
                            <li><a href="managecategory.php">Manage Categories</a></li>
                            <li><a href="managepost.php">Manage posts</a></li>
							<li><a href="managenews.php">Manage News</a></li>
                            <li><a href="manageuser.php">Manage User</a></li>
							 <li><a href="enquiryselection.php">Manage Enquiry</a></li>
							<!--<li><a href="logout.php">Logout</a></li>-->
                        </ul>
                       <!-- <a href="index.html" id="pull"></a>-->
             </nav>
        </div>
    