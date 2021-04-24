/* 
 * Author:		Evan Tatavitto, Jordan Bender, Joshua Marshall, Nathan Mousinho Elias
 * Date:		4/23/2021	
 * Filename:	thingsToDo.js
 */

// Event listener for the dropdown menu.
// Sets the display for it's respective div to 'block' and 'none' for the others.
document.addEventListener('input', function (event) {
	if (event.target.value === 'choose_category') {
		document.getElementById("restTable").style.display = "block";
		document.getElementById("parkTable").style.display = "block";
		document.getElementById("entTable").style.display = "block";
	}
	if (event.target.value === 'restaurants') {
		document.getElementById("restTable").style.display = "block";
		document.getElementById("parkTable").style.display = "none";
		document.getElementById("entTable").style.display = "none";
	}
	if (event.target.value === 'theme_parks') {
		document.getElementById("parkTable").style.display = "block";
		document.getElementById("restTable").style.display = "none";
		document.getElementById("entTable").style.display = "none";
	}
	if (event.target.value === 'entertainment') {
		document.getElementById("entTable").style.display = "block";
		document.getElementById("parkTable").style.display = "none";
		document.getElementById("restTable").style.display = "none";
	}
}, false);
