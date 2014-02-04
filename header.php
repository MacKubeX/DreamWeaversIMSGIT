<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<!--[if IE]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<![endif]-->
	
		<script type='text/javascript' src='js/modernizr.js'></script>
		<script type='text/javascript' src='js/dynamicpage.js'></script>
		<!-- jQuery library (served from Google) -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<!-- bxSlider Javascript file -->
		<script src="jquery.bxslider.min.js"></script>
		<!-- bxSlider CSS file -->
		<link href="jquery.bxslider.css" rel="stylesheet" />
		<script src="js/typeface-0.15.js"></script>
		<script src="js/helvetiker_regular.typeface.js"></script>
		<link rel="stylesheet" type = "text/css" href="index.css"/>
		<script type="text/javascript">
			$(document).ready(function(){
				$('#slider').bxSlider({
					slideWidth: 600,
					auto: true,
					pause: 3000,
					pager: false,
					minSlides: 2,
					maxSlides: 3,
					moveSlides: 1,
					slideMargin: 3
				});
			});
		</script>
		<!--<script type="text/javascript">
		function hideCarousel(id)
		{
			var el = document.getElementById(id);
			if (el.style.display == 'none')
				el.style.display = 'block';
			else if (el.style.display == 'block')
				el.style.display = 'none';
		}
		</script>-->
		<script type="text/javascript">
			function hoverm(element) {
					element.setAttribute('src', 'images/meethover.png');
					}
			function unhoverm(element) {
					element.setAttribute('src', 'images/meet.png');
					}
			function hovera(element) {
					element.setAttribute('src', 'images/abtimgconhover.png');
					}
			function unhovera(element) {
					element.setAttribute('src', 'images/abtimgcon.png');
					}
			function hoverv(element) {
					element.setAttribute('src', 'images/videoshover.png');
					}
			function unhoverv(element) {
					element.setAttribute('src', 'images/videos.png');
					}
			function hoverq(element) {
					element.setAttribute('src', 'images/qotdhover.png');
					}
			function unhoverq(element) {
					element.setAttribute('src', 'images/qotd.png');
					}
			function hoveraf(element) {
					element.setAttribute('src', 'images/aftwhover.png');
					}
			function unhoveraf(element) {
					element.setAttribute('src', 'images/aftw.png');
					}
			function hoverf(element) {
					element.setAttribute('src', 'images/fmfthover.png');
					}
			function unhoverf(element) {
					element.setAttribute('src', 'images/fmft.png');
					}
		</script>
		<title>DreamWeavers IMS</title>
	</head>

	<body>
	<div id = "page-wrap">
		<header>
		<div id = "HeaderDiv">
			<img src = "images/logo.png" style = "float:left;width:40%;margin-top:10px"/>
			<br><br><br><br>
			<div class = "typeface-js" id = "MainMenu">
				<a href= "index.php">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href ="AboutUs.php">About Us</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href = "ContactUs.php">Contact Us</a>&nbsp;&nbsp;&nbsp;&nbsp;Search
			</div>
		</div>
		</header>