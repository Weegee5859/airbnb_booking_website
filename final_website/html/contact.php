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

				function checkAppointments($data) {
					//check if arrival/depature dates are valid (depature date can't be before arrival date)
					if ( $_POST['departure'] <= $_POST['arrival'] ) {
						print("ERROR: Invalid dates. Departure date can't be before Arrival Date. :(");
						return false;
					}
					foreach($data as $value) {
						if ($_POST['arrival'] >= $value['arrival']) {
							if ($_POST['departure'] <= $value['departure']) {
								print("ERROR: Appointment already booked for that day. :(");
								print_r("<br>");
								print_r($_POST['arrival']);
								print_r(" - ");
								print_r($_POST['departure']);
								print_r("<br>");
								print_r($value['arrival']);
								print_r(" - ");
								print_r($value['departure']);
								echo "<br>";
								return false;
							}
						}
					}
					return true;
				}

				//try to load appointments json file and decode it
				if ( $json = json_decode( loadAppointments(),true ) ) {

					
					print_r($_POST['arrival']);
					// testing
					if ( checkAppointments($json) ) {
						array_push($json, $_POST);
						saveAppointment($json);
						print_r("success");
					} else {
						print_r("fail");
					}

					foreach($json as $value) {
						print_r($value);
						print_r("<br>");
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
