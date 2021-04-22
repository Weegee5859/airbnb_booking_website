<?php
	function getFileDir() {
		return 'appointments/myFile.json';
	}

	function saveAppointment($data) {
		$fp = fopen('appointments/myFile.json', 'w');
			fwrite($fp, json_encode($data));
		fclose($fp);
		print_r("saved!");
		//file_put_contents('myFile.json', $data);
	}

	//returns json by default, otherwise returns file contents
	//has default file dir
	function loadAppointments($file_dir='appointments/myFile.json') {
		if ( file_exists($file_dir) ) return file_get_contents($file_dir);
		print_r("No Appointments Booked!");
		return null;
	}

	//check if form dates are valid
	// e.g. departure date cant be before the arrival date
	function appointmentValid($form) {
		if ($form['departure'] <= $form['arrival']) return false;
		return true;
	}

	//check if appointment conflicts with a preexisting appointment
	function appointmentAvailable($json_file,$form) {
		//check if arrival/depature dates are valid (depature date can't be before arrival date)
		foreach($json_file as $value) {
			//submitted dates cannot be more than or equal to
			if ($form['arrival'] <= $value['departure']) {
				if ($form['departure'] >= $value['arrival']) {
					/*
					print("ERROR: Appointment already booked for that day. :(");
					print_r("<br>Your Booking: ");
					print_r($form['arrival']);
					print_r(" - ");
					print_r($form['departure']);
					print_r("<br>Conflicting Booking: ");
					print_r($value['arrival']);
					print_r(" - ");
					print_r($value['departure']);
					echo "<br>";
					*/
					return false;
				}
			}
		}
		return true;
	}

	function addAppointment($form) {
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
			$arrival_d = (new DateTime($value['arrival']))->format('F d, Y');
			$departure_d = (new DateTime($value['departure']))->format('F d, Y');
			//add divs to .booking_list
			echo '<div class="booking">
					<p>'.$value['name'].'<i>Booked for...</i>'.'</p>
					<p>'.$arrival_d.' - '.$departure_d.'</p>
				</div>';
		}
	}

?>