
<!--
Author:		Evan Tatavitto, Jordan Bender, Joshua Marshall, Nathan Mousinho Elias
Date:		3/19/2021	
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
							<div id="caption_prev_button">&lt; </div>
							<p id="caption_text">March 2021</p>
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
						<td>1</td>
						<td>2</td>
						<td>3</td>
						<td>4</td>
						<td>5</td>
						<td>6</td>
					</tr>
					<tr>
						<td>7</td>
						<td>8</td>
						<td>9</td>
						<td>10</td>
						<td>11</td>
						<td>12</td>
						<td>13</td>
					</tr>
					<tr>
						<td>14</td>
						<td>15</td>
						<td>16</td>
						<td>17</td>
						<td>18</td>
						<td>19</td>
						<td>20</td>
					</tr>
					<tr>
						<td>21</td>
						<td>22</td>
						<td>23</td>
						<td>24</td>
						<td>25</td>
						<td>26</td>
						<td>27</td>
					</tr>
					<tr>
						<td>28</td>
						<td>29</td>
						<td>30</td>
						<td>31</td>
						<td>1</td>
						<td>2</td>
						<td>3</td>
					</tr>
					<tr>
						<td>4</td>
						<td>5</td>
						<td>6</td>
						<td>7</td>
						<td>8</td>
						<td>9</td>
						<td>10</td>
					</tr>
				</table>
			</div>
		</div>

		<input type="date" id="home_input_date">
		<button type="button" id="contact_us_button">Get Started!</button>
	</div>
	<!--outside of starter screen (below the background img)-->
	<h1 id="getaway_package_title">Check out what's included in our Getaway Package!</h1>
	<div id="package_container">
		<div id='package'>
			<div id="package_img_container">
				<div id="package_img_skewer">
					<img id="package_img" src="resources/dog.jpg"></i>
				</div>
				<p id="package_title">Pet's Allowed!</p>
			</div>
			<p id="package_description">It wouldn't be a vacation without the whole family, including your loving pets! Bring along your favorite Canine, Feline, or other pet(s) to our vacation hotspot, with no additional charges!</p>
		</div>
		<div id='package'>
			<div id="package_img_container">
				<div id="package_img_skewer">
					<img id="package_img" src="resources/dog.jpg"></i>
				</div>
				<p id="package_title">Pet's Allowed!</p>
			</div>
			<p id="package_description">It wouldn't be a vacation without the whole family, including your loving pets! Bring along your favorite Canine, Feline, or other pet(s) to our vacation hotspot, with no additional charges!</p>
		</div>
		<div id='package'>
			<div id="package_img_container">
				<div id="package_img_skewer">
					<img id="package_img" src="resources/dog.jpg"></i>
				</div>
				<p id="package_title">Pet's Allowed!</p>
			</div>
			<p id="package_description">It wouldn't be a vacation without the whole family, including your loving pets! Bring along your favorite Canine, Feline, or other pet(s) to our vacation hotspot, with no additional charges!</p>
		</div>
		<div id='package'>
			<div id="package_img_container">
				<div id="package_img_skewer">
					<img id="package_img" src="resources/dog.jpg"></i>
				</div>
				<p id="package_title">Pet's Allowed!</p>
			</div>
			<p id="package_description">It wouldn't be a vacation without the whole family, including your loving pets! Bring along your favorite Canine, Feline, or other pet(s) to our vacation hotspot, with no additional charges!</p>
		</div>

	</div>
	<!--Footer-->
	<?php include 'footer.html';?>
</body>
</html>
