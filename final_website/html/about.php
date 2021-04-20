<!--
Author:		Evan Tatavitto, Jordan Bender, Joshua Marshall, Nathan Mousinho Elias
Date:		3/19/2021	
Filename:	about.html
-->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>About Us</title>
	<link rel="stylesheet" href="css/stylesheet.css" />
	<link rel="stylesheet" href="css/about.css">
</head>

<body>
	<!--include header_with_banner.html-->
	<?php include 'header_with_banner.html';?>
	<!--About Us Page Text-->
	<div id="main_container">
		<h2 id="paragraph_header">Who We Are</h2>
		<div id="paragraph_text_container">
			<p> Our company believes that when you want a vacation, you should never have to settle. Which is why our vacation home, we offer our guests an exceptional 5-start luxury decorated <i>and</i> fully furnished house so you can thoroughly enjoy your stay! </p>
		</div>
		<h2 id="paragraph_header">Our Promise</h2>
		<div id="paragraph_text_container">
			<p> We promise and guarantee that our guests will have an experience like never before. </p>
		</div>

		<!--About Us Steps-->
		<h2 id="paragraph_header_special">Our Process</h2>
		<p id="steps_introduction">Start Your Vacation in 3 Easy Steps...</p>
		<div id="steps_container">
			<div id="steps">
				<p id="steps_number">1</p>
				<div id="steps_icon_container"> 
					<img id="steps_icon" src="resources/calendar.png"></i>
				</div>
				<h2 id="steps_title">Schedule</h2>
				<p id="steps_text"> Start scheduling for your retreat through our easy to use scheduling system. </p>
			</div>
			<div id="steps">
				<p id="steps_number">2</p>
				<div id="steps_icon_container"> 
					<img id="steps_icon" src="resources/travel.png"></i>
				</div>
				<h2 id="steps_title">Travel</h2>
				<p id="steps_text"> Travel to your selected Vacation home on your own time, with no cancellation fees. </p>
			</div>
			<div id="steps">
				<p id="steps_number">3</p>
				<div id="steps_icon_container"> 
					<img id="steps_icon" src="resources/relax.png"></i>
				</div>
				<h2 id="steps_title">Relax</h2>
				<p id="steps_text"> Begin your day(s) of relaxation within our luxurious vacation home! </p>
			</div>
		</div>
		<!--About Us Page Text 2-->
		<h2 id="paragraph_header">Conclusion</h2>
		<div id="paragraph_text_container">
			<p> Come experience the getaway of a lifetime along with your friends, family, or even have the whole house to yourself! Expereince your vacation the way YOU want to, along with all the <a href="home.php#getaway_package_title" >perks</a> of choosing us. Your paradise awaits! </p>
		</div>
	</div>
	</div>
	<!--include footer.html-->
	<?php include 'footer.html';?>
</body>

<script src="js/scripts.js"></script>
</html>
