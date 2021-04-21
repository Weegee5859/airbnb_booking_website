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
	<link rel="stylesheet" href="css/contact.css">
	
</head>
	<!--include header_with_banner.html-->
	<?php include 'header_with_banner.html';?>
<body>
	<!--<h1>Contact Us</h1>-->
	<!--<h3>Got Questions For Us? We Can Assist You!</h3>-->
	<!--Form Fields-->
	<div class="contactUsForm">
		<form id="my_form" method="POST" enctype="multipart/form-data" autocomplete="off">
			<label class="formLabel">
				<input type="text" name="name" class="formInput" placeholder="Name" required>
				<br> </label>
			<label class="formLabel">
				<input type="email" name="email" class="formInput" placeholder="Email">
				<br> </label>
			<label class="formLabel">
				<input type="tel" name="phone" class="formInput" placeholder="Phone Number">
				<br> </label>
			<label class="formLabel">
				<input type="date" name="arrival" class="formInput" id="input_arrival" placeholder="f" required>
				 </label>
			<label class="formLabel">
				<input type="date" name="departure" class="formInput" id="input_departure" required>
				<br> </label>
			<label class="formLabel">
				<br>
				<textarea id="textarea" name="textarea" rows="1" cols="50" placeholder="Optional Message..." class="formInput"></textarea>
				<br> </label>
			<label class="formLabel">
				<input type="submit" name="submit" id="submit" class="formInput">
			</label>
		</form>
		<?php
			if (isset($_POST["submit"])) {
				echo "<div> Managing Appointments...<br>";

				echo "</div>";

				function saveAppointment($data) {
					$fp = fopen('appointments/myFile.json', 'w');
						fwrite($fp, json_encode($data));
					fclose($fp);
					print_r("saved!");
					//file_put_contents('myFile.json', $data);
				}

				function loadAppointments() {
					if ( file_exists('appointments/myFile.json') ) return file_get_contents('appointments/myFile.json');
					print_r("couldn't find file");
					return null;
				}

				//try to load appointments json file and decode it
				if ( $json = json_decode( loadAppointments(),true ) ) {

					array_push($json, $_POST);//----//
					saveAppointment($json);//----//
				foreach($json as $value) {
					print_r($value);
					echo "<br>";
				}


				//create a new json file for appointments
				} else {
					$arr = array();
					array_push($arr, $_POST);
					saveAppointment($arr);
				}

				//print appointments
				//print_r(loadAppointments());
			}
		?>
	</div>
	<?php include 'footer.html';?>
</body>
<script src="js/contact.js"></script>
</html>
