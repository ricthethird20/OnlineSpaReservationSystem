<!DOCTYPE html>
<?php

if (empty($_GET['pg']))
	$page = 'home';
else
	$page = $_GET['pg'];

?>
<html>
<head>
<html>
<head>
<title>Pasithea Massage Therapy Center</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<script src="js/jquery.min.js"></script>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<link href="css/login-style.css" rel="stylesheet" type="text/css"/>	<!-- For modal -->			<!-- For modal -->
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Food shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lobster+Two:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//fonts-->
<script type="text/javascript" src="js/move-top.js"></script>

<script type="text/javascript" src="js/easing.js"></script>
				<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){		
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
				</script>
				
<script src="js/responsiveslides.min.js"></script>
<style>
.rslides {
  position: relative;
  list-style: none;
  overflow: hidden;
  width: 100%;
  padding: 0;
  margin: 0;
  }

.rslides li {
  -webkit-backface-visibility: hidden;
  position: absolute;
  display: none;
  width: 100%;
  left: 0;
  top: 0;
  }

.rslides li:first-child {
  position: relative;
  display: block;
  float: left;
  }

.rslides img {
  display: block;
  min-height: 400px;
  float: left;
  width: 100%;
  border: 0;
  }
</style>
<script>
 $(function () {
	$(".rslides").responsiveSlides({
	  auto: true,             // Boolean: Animate automatically, true or false
	  speed: 500,            // Integer: Speed of the transition, in milliseconds
	  timeout: 4000,          // Integer: Time between slide transitions, in milliseconds
	  pager: false,           // Boolean: Show pager, true or false
	  nav: false,             // Boolean: Show navigation, true or false
	  random: false,          // Boolean: Randomize the order of the slides, true or false
	  pause: false,           // Boolean: Pause on hover, true or false
	  pauseControls: true,    // Boolean: Pause when hovering controls, true or false
	  prevText: "Previous",   // String: Text for the "previous" button
	  nextText: "Next",       // String: Text for the "next" button
	  maxwidth: "",           // Integer: Max-width of the slideshow, in pixels
	  navContainer: "",       // Selector: Where controls should be appended to, default is after the 'ul'
	  manualControls: "",     // Selector: Declare custom pager navigation
	  namespace: "rslides",   // String: Change the default namespace used
	  before: function(){},   // Function: Before callback
	  after: function(){}     // Function: After callback
	});
});
</script>

</head>
<body>
	<!--header-->
	<div class="header">
		<div class="container">
			<div class="logo">
				<h1><a href="index.php">Pasithea</a></h1>
				<h3>Massage Therapy Center</h3>
			</div>
			<div class="header-top">
				<div class="header-top-in">
					<ul class="header-grid">
						<li ><a class="cd-signup" href="#">Sign up</a> <label> | </label></li>
						<li ><a class="cd-signin" href="#">Login </a> </li>		
					</ul>
				</div>
				<!--<ul class="grid-header">
					<li><a href="account.html">My Account</a> <label>/</label></li>
					<li><a href="#">My Cart</a> <label>/</label></li>
					<li><a href="checkout.html">  Checkout </a> </li>		
				</ul> -->
				<div class="clearfix"> </div>
			</div>
			<!---->
			<div class="header-bottom">
				<div class="top-nav">
					<span class="menu"> </span>
					<ul>
						<li class="active" ><a href="index.php">Home  </a><label>- </label> </li>
						<li><a href="index.php?pg=abt">About</a><label>- </label></li>
						<li><a href="index.php?pg=svc">Services </a><label>- </label></li>						
						<li><a href="index.php?pg=ctc">Contacts</a><label>- </label></li>
						<li><a href="index.php?pg=faq">FAQ's</a></li>
					</ul>
					<!--script-->
				<script>
					$("span.menu").click(function(){
						$(".top-nav ul").slideToggle(500, function(){
						});
					});
			</script>
				</div>
			<div class="clearfix"> </div>
		</div>
		<!---->
	<?php
		if($page == 'home')
			include_once('banner.php');
	?>
		</div>
	</div>
	<!--contents here-->
	<?php
		require_once('login_form.php');
		require_once('contents.php');  
	?>
	<!---->
	<div class="footer">
		<div class="container">
		<div class="col-md-8 footer-bottom ">
		<h4>Refresh. Relax. Wellness awaits you...</h4>
		<!--<div class="footer-nav">
			<ul>
				<li class="active" ><a href="index.php">Home  </a><label>- </label> </li>
				<li><a href="index.php?pg=abt">About</a><label>- </label></li>
				<li><a href="index.php?pg=svc">Services </a><label>- </label></li>						
				<li><a href="index.php?pg=ctc">Contacts</a><label>- </label></li>
				<li><a href="index.php?pg=faq">FAQ's</a></li>
			</ul>
		</div>-->
		<p class="footer-grid">Copyright &copy; 2016 <a href="index.php">Pasithea Spa Center</a> </p>

		</div>
			<div class="col-md-4 footer-bottom ">
				<h4>Follow us!</h4>
				<ul class="social-icons">
					<li><a href="#"><span> </span> </a></li>
					<li class="tin"><a href="#"><span> </span></a></li>
					<li class="linked"><a href="#"><span> </span> </a></li>
				</ul>
			</div>
				<div class="clearfix"> </div>
		</div>	
	</div>
	 <script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
								$().UItoTop({ easingType: 'easeOutQuart' });
								$('#custom-first-day').calendar({
									unavailable: ['2014-07-10','2016-05-11'],
									onSelectDate: function(date, month, year)
									{
									  alert([year, month, date].join('-') + ' is: ' + this.isAvailable(date, month, year));
									}
								});
							});
						
						
						
						
					</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

</body>
</html>