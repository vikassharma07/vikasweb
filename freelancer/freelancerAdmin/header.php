<div id="wrapper">
        	<div class="span4 left"><a href="#" class="logo">Sedna</a></div>
            <div class="span2 right">WELCOME <?php session_start(); 
			echo $_SESSION['username'];?><a href="logout.php">LOGOUT</a></div>
        </div>
    <section class="nav-bar">
    	<div id="wrapper">
            <nav class="clearfix">
                        <ul class="clearfix">
                            <li><a href="index.html" class="active"><img src="images/home-icon.png" alt="home-image" /></a></li>
							<li><a href="addpages.php">Manage Pages</a></li>
                            <li><a href="about-us.html">About Us</a></li>
                            <li><a href="services.html">Services</a></li>
                            <li><a href="portfolio.html">Portfolio</a></li>
                            <li><a href="contact-us.html">Contact Us</a></li>
                        </ul>
                        <a href="index.html" id="pull"></a>
             </nav>
        </div>
    