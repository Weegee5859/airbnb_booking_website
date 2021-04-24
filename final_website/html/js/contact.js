/*
function serializeForm(form) {
	//if invalid formData, return 0
	if (!(form instanceof FormData)) return null;
	//empty dict
	var dict = {};
	//iterate through form and add keys to dict
	for (var key of form.keys()) dict[key]=form.get(key);
	return dict
}

function loadAppointments() {
	
}

function saveAppointment(form) {
	//if(!(form == Object)) return null;
	//json stringify form
	data = JSON.stringify(form)
	//log data
	console.log(data)


}


document.addEventListener('submit', function (event) {
	//prevent refresh
	event.preventDefault();
	//retrieve form data
	var my_form = new FormData(event.target);
	//save form to appointments.json
	saveAppointment(serializeForm(my_form));
	//console.log(my_form);
		//require fs
	const fs = require('fs');
	// write JSON string to a file
	fs.writeFile('appointments/appointments.json', data, (err) => {
		if (err) throw err;
		console.log("JSON data is saved.");
	});

});
*/
//on load