<!--
Author:		Evan Tatavitto, Jordan Bender, Joshua Marshall, Nathan Mousinho Elias
Date:		3/19/2021	
Filename:	thingsToDo.html
-->
<!--

	UNTIL WE ADD JAVASCRIPT, THIS PAGE WILL SIMPLY DISPLAY ALL CONTENTS.

-->
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Things To Do</title>
	<link rel="stylesheet" href="css/stylesheet.css" />
	<link rel="stylesheet" href="css/thingsToDo.css">
</head>
<!--include header_with_banner.html-->
<?php include 'header_with_banner.html';?>
<body>
	<!--<h1 class="topMessage">Things to do</h1>-->
	<!--<h3 class="topMessage">These are our favorite things to do in the area around the house.</h3>-->
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
		</table>
	</div>
	<!--Container for theme park table.-->
	<div id="parkTable">
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
		</table>
	</div>
	<!--Container for entertainment table.-->
	<div id="entTable">
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
		</table>
	</div>
	<?php include 'footer.html';?>
</body>
</html>
