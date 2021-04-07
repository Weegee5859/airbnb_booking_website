<!--
Author:		Evan Tatavitto, Jordan Bender, Joshua Marshall, Nathan Mousinho Elias
Date:		3/19/2021	
Filename:	contact.html
-->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Contact Us</title>
	<link rel="stylesheet" href="css/contactUs.css">
	<link rel="stylesheet" href="css/stylesheet.css" />
</head>
<!--include header.html-->
<?php include 'header.html';?>
<body>
	<h1>Contact Us</h1>
	<h3>Do you have any question? Let us know how we can assist you.</h3>
	<!--Form Fields-->
	<div class="contactUsForm">
		<form>
			<label class="formLabel"> Name:
				<input type="text" class="formInput">
				<br> </label>
			<label class="formLabel"> Email:
				<input type="email" class="formInput">
				<br> </label>
			<label class="formLabel"> Phone Number:
				<input type="tel" class="formInput">
				<br> </label>
			<label class="formLabel"> Date of Arrival:
				<input type="date" class="formInput">
				<br> </label>
			<label class="formLabel"> Date of Departure:
				<input type="date" class="formInput">
				<br> </label>
			<label class="formLabel"> Message:
				<br>
				<textarea id="textarea" name="textarea" rows="1" cols="50" placeholder="" class="formInput"></textarea>
				<br> </label>
			<label class="formLabel">
				<input type="submit" id="submit" class="formInput"> </label>
		</form>
	</div>
	<?php include 'footer.html';?>
</body>
</html>
