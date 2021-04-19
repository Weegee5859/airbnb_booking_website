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
	<link rel="stylesheet" href="css/stylesheet.css" />
	<link rel="stylesheet" href="css/contactUs.css">
	
</head>
	<!--include header_with_banner.html-->
	<?php include 'header_with_banner.html';?>
<body>
	<!--<h1>Contact Us</h1>-->
	<!--<h3>Got Questions For Us? We Can Assist You!</h3>-->
	<!--Form Fields-->
	<div class="contactUsForm">
		<form>
			<label class="formLabel">
				<input type="text" class="formInput" placeholder="Name">
				<br> </label>
			<label class="formLabel">
				<input type="email" class="formInput" placeholder="Email">
				<br> </label>
			<label class="formLabel">
				<input type="tel" class="formInput" placeholder="Phone Number">
				<br> </label>
			<label class="formLabel">
				<input type="date" class="formInput" id="input_arrival">
				 </label>
			<label class="formLabel">
				<input type="date" class="formInput" id="input_departure">
				<br> </label>
			<label class="formLabel">
				<br>
				<textarea id="textarea" name="textarea" rows="1" cols="50" placeholder="Optional Message..." class="formInput"></textarea>
				<br> </label>
			<label class="formLabel">
				<input type="submit" id="submit" class="formInput"> </label>
		</form>
	</div>
	<?php include 'footer.html';?>
</body>
</html>
