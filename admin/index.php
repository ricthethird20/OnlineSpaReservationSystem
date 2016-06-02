<?php

if(empty($_GET['page']))
	$page = 'home';
else
	$page = $_GET['page'];

?>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pasithea Dashboard</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <script src="assets/js/jquery.min.js"></script>
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" style="color:#35a22c;" href="#">Welcome Administrator!</a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Account</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="index.php?page=bookings"><i class="fa fa-desktop"></i> Booking</a>
                    </li>
					<li>
                        <a href="index.php?page=msgs"><i class="fa fa-table"></i> Messages</a>
                    </li>
					<li>
                        <a href="index.php?page=svcs"><i class="fa fa-bar-chart-o"></i> Services</a>
                    </li>
                    <li>
                        <a href="index.php?page=client"><i class="fa fa-qrcode"></i> Client Info &amp <br> Walk-in Bookings</a>
                    </li>
					<li>
                        <a href="index.php?page=products"><i class="fa fa-qrcode"></i> Products</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap"></i> Web Contents<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level" >
                            <li>
                                <a href="index.php?page=articles">Announcements and Article</a>
                            </li>
                            <li>
                                <a href="index.php?page=about">About and Contact details</a>
                            </li>
							<li>
                                <a href="index.php?page=tg">Testimonials and Gallery</a>
                            </li>
							<li>
                                <a href="index.php?page=faq">FAQ's</a>
                            </li>
						</ul>
					</li>
					<li>
                        <a href="index.php?page=users"><i class="fa fa-bar-chart-o"></i> Users</a>
                    </li>

            </div>

        </nav>
			
			<div id="page-wrapper" >
				<?php
					switch($page){
						case 'svcs':
							include_once('services.php');
							break;
						
						case 'articles':	
							include_once('articles-announcements.php');
							break;
						
						case 'about':
							include_once('about-contact.php');
							break;
						
						case 'tg':
						break;
						
						case 'faq':
						break;
						
						case 'bookings':
							include_once('bookings.php');
							break;
							
						case 'client':
							include_once('client.php');
							break;
						case 'products':
							include_once('products.php');
							break;
					}	
				?>
            </div>

        </div>

    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.metisMenu.js"></script>
    <script src="assets/js/custom-scripts.js"></script>
    
   
</body>
</html>
