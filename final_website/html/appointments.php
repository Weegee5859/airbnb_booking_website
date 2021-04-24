<!--
Author:		Evan Tatavitto, Jordan Bender, Joshua Marshall, Nathan Mousinho Elias
Date:		4/23/2021
Filename:	appointments.php
-->
<?php
	function getFileDir() {
		return 'appointments/myFile.json';
	}

	function saveAppointment($data) {
		$fp = fopen(getFileDir(), 'w');
			fwrite($fp, json_encode($data));
		fclose($fp);
		//file_put_contents('myFile.json', $data);
	}

	//returns json by default, otherwise returns file contents
	//has default file dir
	function loadAppointments() {
		if ( file_exists(getFileDir()) ) return file_get_contents(getFileDir());
		print_r("No Appointments Booked!");
		return null;
	}

	//check if form dates are valid
	// e.g. departure date cant be before the arrival date
	function appointmentValid($form) {
		if ($form['departure'] < $form['arrival']) return false;
		return true;
	}

	//check if appointment conflicts with a preexisting appointment
	function appointmentAvailable($json_file,$form) {
		//check if arrival/depature dates are valid (depature date can't be before arrival date)
		foreach($json_file as $value) {
			//checks if the current appointment clashes with any of the bookings  
			if ($form['arrival'] <= $value['departure'] && $form['departure'] >= $value['arrival']) return false;
		}
		return true;
	}

	function bookAppointment($form) {
		// if appointment dates are invalid
		if ( !appointmentValid($form) ) return 'Invalid Appointment dates. Departure date cannot come before arrival date.';
		//if file exist, load it as $loaded
		if ( $loaded = loadAppointments()) {
			$loaded = json_decode( $loaded,true );
			// if appointment is not available
			if ( !appointmentAvailable($loaded, $form) ) return 'That Appointment is already booked. Sorry!';
				//push appointment to array
				array_push($loaded, $form);
				//add the appointment
				saveAppointment($loaded);
				return "Successfully added Appointment. Thank you!";
		} else {
			// file does not exist create new file
			// initalize new json file as multidimensional array
			$arr = array();
			//place form data into the temp array
			array_push($arr, $form);
			//save data
			saveAppointment($arr);
			return "Successfully created New Appointment, Thank you!";
		}
	}

	function displayAppointments() {
		//If appointments didn't load
		if ( !$load = loadAppointments() ) return false;
		//If appointments loaded
		$load = json_decode( $load,true );
		//iterate through appointments
		foreach($load as $value) {
			//format dates
			$arrival_d = (new DateTime($value['arrival']))->format('M d, Y');
			$departure_d = (new DateTime($value['departure']))->format('M d, Y');
			//add divs to .booking_list
			echo '<div id="booking">
					<p><b>'.ucfirst($value['name'][0]).'</b><i> Booked for...</i>'.'</p>
					<p>'.$arrival_d.' - '.$departure_d.'</p>
					<div id="from_to_line"></div>
				</div>';
		}
	}

?>