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
	<link rel="stylesheet" href="css/about.css">
	<link rel="stylesheet" href="css/stylesheet.css" />
</head>

<body>
	<!--include header.html-->
	<?php include 'header.html';?>

	<div id="banner_image_container">
		<div id="banner_text_container">
			<p id="banner_title">About Us</p>
			<p id="banner_text">Indulge yourself in an unforgettable vacation experience with the comforts of home!</p>
		</div>
	</div>
	<!--About Us Page Text-->
	<div id="main_container">
		<div id="paragraph_text_container">
			<h2 id="paragraph_header">Who We Are</h2>
			<p> We are a company that believes that you deserve to take a break and visit the most magical place on earth! We offer our guests an exceptional 5-start luxury decorated and fully furnished house so you can enjoy your stay the way you deserve! </p>
			<h2 id="paragraph_header">Our Promise</h2>
			<p> We promise and guarantee that our guests will have an experience like never before. </p>
		</div>
		<!--About Us Steps-->
		<div id="steps_container">
			<div id="steps">
				<div id="steps_icon_container"> <img id="steps_icon" src="resources/calendar.png"></i>
				</div>
				<h2 id="steps_title">Schedule</h2>
				<p id="steps_text"> Start scheduling for your retreat through our easy to use scheduling system. </p>
			</div>
			<div id="steps">
				<div id="steps_icon_container"> <img id="steps_icon" src="resources/travel.png"></i>
				</div>
				<h2 id="steps_title">Travel</h2>
				<p id="steps_text"> Travel to your selected Vacation home on your own time, with no cancellation fees. </p>
			</div>
			<div id="steps">
				<div id="steps_icon_container"> <img id="steps_icon" src="resources/relax.png"></i>
				</div>
				<h2 id="steps_title">Relax</h2>
				<p id="steps_text"> Begin your day(s) of relaxation within our luxurious vacation home! </p>
			</div>
		</div>
		<!--About Us Page Text 2-->
		<div id="paragraph_text_container">
			<p id="paragraph_text"> Everything from the booking process, to the check-in day, to personalized tips from our experience over the past years, to the checkout date, our guests count on us to make their stay the most amazing and magical experience they have ever had! </p>
		</div>
	</div>
	</div>
	<!--include footer.html-->
	<?php include 'footer.html';?>
</body>

<script src="js/scripts.js"></script>
</html>
