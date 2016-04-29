
<!DOCTYPE HTML>
<?php
	if(empty($_GET))
		$page = "home";
	else
		$page = $_GET['page'];
?>
<head>
<title>Nitex - Training you for success</title>
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href='http://fonts.googleapis.com/css?family=Armata' rel='stylesheet' type='text/css'>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
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
  height: 275px;
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

 <div class="wrap">
   <div class="header">
	   <div class="header_top">
	   		<div class="logo" style="height:80px;>
	   			<a href="index.php"><img src="images/logo.png" alt="" style="width:200px;height:70.8px"/></a>
	   		</div>
			<div class="branch_contact">
				<span>Tel: (8888) 531 0056 | Mobile: 0948 271 5559 | nitexoroquieta@yahoo.com</span>
			</div>
	   		 <div class="clear"> </div>
	   	</div>
   	<div class="header_bottom">
   		<div class="menu">
	     		<ul>
			    	<li class="active"><a href="index.php">Home</a></li>
			    	<li><a href="index.php?page=about">About Us</a></li>
			    	<li><a href="index.php?page=admission">Admissions</a></li>
					<li><a href="index.php?page=programs">Programs</a></li>
			    	<li><a href="index.php?page=campuses">Campuses</a></li>
			    	<li><a href="index.php?page=contact">Contact Us</a></li>
     			</ul>
   		</div>
			<div class = "banner">
					<ul class="rslides">
					  <li><img src="images/nitex1.jpg" alt=""></li>
					  <li><img src="images/nitex2.jpg" alt=""></li>
					  <li><img src="images/nitex4.jpg" alt=""></li>
					</ul>
			</div>
          <div class="clear"> </div>
   	 </div>
  </div>
  <div class="main">
	<?php
		switch($page){
			case "home":
				include_once("home.php");
				break;
			case "about":
				include_once("about.php");
				break;
			case "admission":
				include_once("admission.php");
				break;
			case "contact":
				include_once("contact.php");
				break;
		}
	?>
 </div>
 <div class="footer">
		<div class="footer_nav">
			  <ul>
				    <li class="active"><a href="index.php">Home</a></li>
			    	<li><a href="">About Us</a></li>
			    	<li><a href="">Admissions</a></li>
			    	<li><a href="">Programs</a></li>
			    	<li><a href="">Branches</a></li>
					<li><a href="">Contact Us</a></li>
			 </ul>
		</div>
			<div class="copy_right">
				<p>Copyright © 2016 NITEX</a></p>
			</div>
	   <div class="clear"></div>
	</div>
</body>
</html>