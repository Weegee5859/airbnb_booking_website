<!--
Author:		Evan Tatavitto, Jordan Bender, Joshua Marshall, Nathan Mousinho Elias
Date:		4/23/2021
Filename:	contact.html
-->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Contact Us</title>
	<link rel="stylesheet" href="css/stylesheet.css" />
	<link rel="stylesheet" href="css/contact.css">
	<?php include 'appointments.php';?>
</head>
	<!--include header_with_banner.html-->
	<?php include 'html/header_with_banner.html';?>
<body>
	<!--<h1>Contact Us</h1>-->
	<!--<h3>Got Questions For Us? We Can Assist You!</h3>-->
	<!--Form Fields-->
	<div id="contact_container">
		<form id="my_form" method="POST" enctype="multipart/form-data" autocomplete="off">
			<label class="formLabel">
				<input type="text" name="name" class="formInput" placeholder="Name *" required>
				<br> </label>
			<label class="formLabel">
				<input type="email" name="email" class="formInput" placeholder="Email *" required>
				<br> </label>
			<label class="formLabel">
				<input type="tel" name="phone" class="formInput" placeholder="Phone Number *" required>
				<br> </label>
			<label class="formLabel">
				<input type="date" name="arrival" class="formInput" id="input_arrival" min="<?php echo date('Y-m-d'); ?>" required>
				 </label>
			<label class="formLabel">
				<input type="date" name="departure" class="formInput" id="input_departure" min="<?php echo date('Y-m-d'); ?>" required>
				<br> </label>
			<label class="formLabel">
				<br>
				<textarea id="textarea" name="textarea" rows="1" cols="50" placeholder="Optional Message..." class="formInput"></textarea>
				<br> </label>
			<label class="formLabel">
				<input type="submit" name="submit" id="submit" class="formInput">
			</label>
		</form>
		<p id="booking_title">Booked Appointments</p>
		<div id="booking_list">
			<!-- Display booked appointments at bottom of page-->
			<?php
				print_r(displayAppointments());
			?>
		</div>
	</div>
		<?php
			//if form was successfully submitted
			if (isset($_POST["submit"])) {
				print_r(bookAppointment($_POST));
			}
		?>
	<?php include 'html/footer.html';?>
</body>
<script src="js/contact.js"></script>
</html>
