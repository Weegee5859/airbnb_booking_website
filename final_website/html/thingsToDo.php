<!--
Author:		Evan Tatavitto, Jordan Bender, Joshua Marshall, Nathan Mousinho Elias
Date:		4/23/2021	
Filename:	thingsToDo.php
-->
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Things To Do</title>
	<link rel="stylesheet" href="css/stylesheet.css" />
	<link rel="stylesheet" href="css/thingsToDo.css">
</head>
<!--include header_with_banner.html-->
<?php include 'html/header_with_banner.html';?>
<body>
	<!--Dropdown Menu-->
	<select>
		<option value="choose_category">Choose a Category...</option>
		<option value="restaurants">Restaurants</option>
		<option value="theme_parks">Theme Parks</option>
		<option value="entertainment">Entertainment </option>
	</select>

	<!--Container for restaurant table.-->
	<div id="restTable">
		<table class="toDoTable">
			<tr>
				<td><img src="resources/seasons52.jpg" class="toDoImg"></td>
				<td class="toDoDsrptn">
					<h3>Seasons 52</h3>
					<p>This is a fancy restaurant with a dazzling atmosphere and great food.</p>
				</td>
			</tr>
			<tr>
				<td><img src="resources/Santiagos.jpg" class="toDoImg"></td>
				<td class="toDoDsrptn">
					<h3>Santiago's Bodega</h3>
					<p>This is also a fancy restaurant with great food.</p>
				</td>
			</tr>
			<tr>
				<td><img src="resources/Fogo.jpg" class="toDoImg"></td>
				<td class="toDoDsrptn">
					<h3>Fogo de Chao Brazilian Steakhouse</h3>
					<p>This upscale Brazilian chain is sure to leave even the hungriest guests satisfied.</p>
				</td>
			</tr>
		</table>
	</div>

	<!--Container for theme park table.-->
	<div id="parkTable" style="display:none;">
		<table class="toDoTable">
			<tr>
				<td><img src="resources/disney.jpg" class="toDoImg"></td>
				<td class="toDoDsrptn">
					<h3>Walt Disney World</h3>
					<p>The world renown Walt Disney theme parks are sure to leave you with lifelong memories.</p>
				</td>
			</tr>
			<tr>
				<td><img src="resources/universal.jpg" class="toDoImg"></td>
				<td class="toDoDsrptn">
					<h3>Universal Studios</h3>
					<p>This world class theme park is sure to be a blast for the whole family.</p>
				</td>
			</tr>
			<tr>
				<td><img src="resources/pirate.jpg" class="toDoImg"></td>
				<td class="toDoDsrptn">
					<h3>Pirate's Cove Adventure Golf</h3>
					<p>This pirate-themed mini-golf course is one of our personal favorites.</p>
				</td>
			</tr>
		</table>
	</div>

	<!--Container for entertainment table.-->
	<div id="entTable" style="display:none;">
		<table class="toDoTable">
			<tr>
				<td><img src="resources/artMuseum.jpg" class="toDoImg"></td>
				<td class="toDoDsrptn">
					<h3>Orlando Museum of Art</h3>
					<p>A spectacular museum showcasing some of Orlando's most beautiful art.</p>
				</td>
			</tr>
			<tr>
				<td><img src="resources/historymuseum.jpg" class="toDoImg"></td>
				<td class="toDoDsrptn">
					<h3>Orange County Regional History Center</h3>
					<p>This facinating history center is the place to go to learn about Central Florida's rich and diverse past.</p>
				</td>
			</tr>
			<tr>
				<td><img src="resources/zoo.jpg" class="toDoImg"></td>
				<td class="toDoDsrptn">
					<h3>Central Florida Zoo & Botanical Gardens</h3>
					<p>Showcasing over 100 different species this 116-acre zoo and botanical garden offer some breathtaking sights.</p>
				</td>
			</tr>
		</table>
	</div>
	<?php include 'html/footer.html';?>
</body>
<script src="js/thingsToDo.js"></script>
</html>
