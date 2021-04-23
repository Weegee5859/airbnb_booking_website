
<!--
Author:		Evan Tatavitto, Jordan Bender, Joshua Marshall, Nathan Mousinho Elias
Date:		4/23/2021	
Filename:	home.html
-->
<!DOCTYPE html>
<html lang="en">
<head>
	<!--Home page for "vacation home" website, in html will add JavaScript and PHP as need.-->
	<title>Vacation Home</title> <!--Change to Name of Company.-->
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/stylesheet.css" />
	<link rel="stylesheet" href="css/homepage.css" />
</head>
<body id="home" >
	<div id="start_screen_container">
		<?php include 'header.html';?>

		<h1 id="website_title">Name_Of_Website</h1>

		<h2 x="0" y="15" id="website_motto">
			Where Our <span id="website_motto_contrast">Home</span>, Is Your <span id="website_motto_contrast">Home</span>
		</h2>
		<!--will be changed to better pictuer, closer up.-->
		<!--title for calander.-->
		<p id="calH">Start Booking your Getaway Now!</p>
		<div id="dates">
			<!--Calander will update to have JavaScript/PHP-->
			<div id="dateCal_container">
				<table id="dateCal">
					<caption>
						<div id="caption_container">
							<div id="caption_prev_button"> &lt;</div>
							<p id="caption_text"></p>
							<div id="caption_next_button"> &gt;</div>
						</div>
					</caption>
					<tr>
						<th>Sun</th>
						<th>Mon</th>
						<th>Tue</th>
						<th>Wed</th>
						<th>Thu</th>
						<th>Fri</th>
						<th>Sat</th>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
				</table>
			</div>
		</div>

		<form action="contact.php" method="post">
			<input type="date" id="home_input_date">
			<input type="submit" id="contact_us_button" value="Get Started!">
		</form>

		<h1 id="scroll_down">Scroll Down to Learn More! <img id="down_arrow" src="resources/down_arrow.png"></h1>
	</div>
	<!--outside of starter screen (below the background img)-->
	<h1 id="getaway_package_title">Check out what's included in our Getaway Package!</h1>
	<div id="packages">
		<div id='package'>
			<div id="package_container">
				<div id="package_img_container">
					<div id="package_img_skewer">
						<img id="package_img" src="resources/dog.jpg"></i>
					</div>
					<p id="package_title">Pet's Allowed!</p>
				</div>
				<p id="package_description">It wouldn't be a vacation without the whole family, including your loving pets! Bring along your favorite Canine, Feline, or other pet(s) to our vacation hotspot, with no additional charges!</p>
			</div>
		</div>
		<div id='package'>
			<div id="package_container">
				<div id="package_img_container">
					<div id="package_img_skewer">
						<img id="package_img" src="resources/photo_6.jpg"></i>
					</div>
					<p id="package_title">Game On!</p>
				</div>
				<p id="package_description">Want to compete in some friendly competition amongst your family and friends? Get your game on with our vacation homes dedicated game room!</p>
			</div>
		</div>
		<div id='package'>
			<div id="package_container">
				<div id="package_img_container">
					<div id="package_img_skewer">
						<img id="package_img" src="resources/disney.jpg"></i>
					</div>
					<p id="package_title">Local Hotspots!</p>
				</div>
				<p id="package_description">Our Vacation home is zoned for various hotspots from restaurants to theme parks, including the world renowed Disney World! To learn more information on these locations, visit our <a href="thingstodo.php">Things to Do</a> page.</p>
			</div>
		</div>
		<div id='package'>
			<div id="package_container">
				<div id="package_img_container">
					<div id="package_img_skewer">
						<img id="package_img" src="resources/beach.jpg"></i>
					</div>
					<p id="package_title">Beautiful Beach!</p>
				</div>
				<p id="package_description">Whether your taking in the beautiful island view or taking a dip in the fresh salt water, visiting some of Florida's local beaches will be a memorable experience for all!</p>
			</div>
		</div>

	</div>
	<!--Footer-->
	<?php include 'footer.html';?>
    <script src="js/home.js"></script>
</body>
</html>
?>