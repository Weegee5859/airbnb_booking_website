/*
	Author: Evan Tatavitto, Jordan Bender, Joshua Marshall, Nathan Mousinho Elias
	Date: 4/23/2021
	Filename: home.js
	Use with help from the textbook.
*/
var dateObject = new Date();

function displayCalendar(whichMonth) {
	var date;
	var dateToday = new Date();
	var dayOfWeek;
	var daysInMonth;
	var dateCells;
	var captionValue;
	var month;
	var year;
	var monthArray = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

	if (whichMonth === -1) {
		dateObject.setMonth(dateObject.getMonth() - 1);
	} else if (whichMonth === 1) {
		dateObject.setMonth(dateObject.getMonth() + 1);
	}
	month = dateObject.getMonth();
	year = dateObject.getFullYear();
	dateObject.setDate(1);
	dayOfWeek = dateObject.getDate();
	captionValue = monthArray[month] + " " + year;
	document.getElementById("caption_text").innerHTML = captionValue;
	if (month === 0 || month === 2 || month === 4 || month === 6 || month === 7 || month === 9 || month === 11) { // Jan, Mar, May, Jul, Aug, Oct, Dec.
		daysInMonth = 31;
	} else if (month === 1) { // Feb.
		if (year % 4 === 0) { // Leap year test.
			if (year % 100 === 0) {
				// Year ending in 00 not a leap year unless
				// divisible by 400.
				if (year % 400 === 0) {
					daysInMonth = 29;
				}
				daysInMonth = 28;
			}
			daysInMonth = 29;
		}
		daysInMonth = 28;

	} else {
		daysInMonth = 30;
	}
	dateCells = document.getElementsByTagName("td");
	for (var i = 0; i < dateCells.length; i++) {
		// Clear existing table dates.
		dateCells[i].innerHTML = "";
		dateCells[i].className = "";
	}
	for (var i = dayOfWeek; i < daysInMonth + dayOfWeek; i++) {
		// Add dates to days cells.
		dateCells[i].innerHTML = dateObject.getDate();
		dateCells[i].className = "date";
		if (dateToday < dateObject) {
			dateCells[i].className = "futuredate";
		}
		date = dateObject.getDate() + 1;
		dateObject.setDate(date);
	}
	dateObject.setMonth(dateObject.getMonth() - 1);
	// Reset month to month shown.
}
function selectDate(event) {
	if (event === undefined) {
		event = window.event;
	}
	var callerElement = event.target || event.srcElement;
	if (callerElement.innerHTML === "") {
		// Cell contains no date so don't close the calendar
		document.getElementById("calH").style.display = "block";
		return false;
	}
	dateObject.setDate(callerElement.innerHTML);
	var fullDateToday = new Date();
	var dateToday = Date.UTC(fullDateToday.getMonth(), fullDateToday.getDate(), fullDateToday.getFullYear());
	var selectedDate = Date.UTC(dateObject.getMonth(), dateObject.getDate(), dateObject.getFullYear());
	if (selectedDate <= dateToday || callerElement.className === "date") {
		document.getElementById("calH").style.display = "block";
		return false;
	}
	var month = dateObject.getmonth;
	if (dateObject.getDate() < 10 && (dateObject.getMonth() + 1) < 10) {
		document.getElementById("home_input_date").value = dateObject.getFullYear() + '-0' + (dateObject.getMonth() + 1) + '-0' + dateObject.getDate();
	} else if ((dateObject.getMonth() + 1) < 10 && dateObject.getDate() > 10) {
		document.getElementById("home_input_date").value = dateObject.getFullYear() + '-0' + (dateObject.getMonth() + 1) + '-' + dateObject.getDate();
	} else if ((dateObject.getMonth() + 1) > 10 && dateObject.getDate() > 10) {
		document.getElementById("home_input_date").value = dateObject.getFullYear() + '-' + (dateObject.getMonth() + 1) + '-' + dateObject.getDate();
	}
}
function prevMo() {
	displayCalendar(-1);
}

function nextMo() {
	displayCalendar(1);
}
function validDate() {
	var askingDay = document.getElementById("home_input_date");

}
window.addEventListener("load", displayCalendar, false);
window.addEventListener("load", createEvantListeners, false);
function createEvantListeners() {
	var calPrev = document.getElementById("caption_prev_button");
	calPrev.addEventListener("click", prevMo, false);
	var calNext = document.getElementById("caption_next_button");
	calNext.addEventListener("click", nextMo, false);
	var calSubmit = document.getElementById("contact_us_button");
	calSubmit.addEventListener("submit", validDate, false);
	var dateCells = document.getElementsByTagName("td");
	for (var i = 0; i < dateCells.length; i++) {
		dateCells[i].addEventListener("click", selectDate, false);
	}
}