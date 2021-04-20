/* 
 * Author:		Evan Tatavitto, Jordan Bender, Joshua Marshall, Nathan Mousinho Elias
 * Date:		4/17/2021	
 * Filename:	zoom.js
 */
"use strict"; // Interpret document contents in JavaScript strict mode.

/* Global Variables */
var photoOrderArray = window.opener.photoOrder;
var i = window.opener.i;
var figFilename = "resources/photo_" + photoOrderArray[i] + ".jpg";

/* Populate img element and create event listener. */
function pageSetup() {
	document.getElementsById("gallery_image")[0].src = figFilename;
// Assign filename to img element.
	createEventListener();
}

/* Close Window */
function closeWin() {
	window.close;
}

/* Create event listener for close button */
function createEventListener() {
	var closeWindowDiv = document.getElementsByTagName("p")[0];
	if (closeWindowDiv.addEventListener) {
		closeWindowDiv.addEventListener("click", closeWin, false);
	} else if (closeWindowDiv.attachEvent) {
		closeWindowDiv.attachEvent("onclick", closeWin);
	}
} 

/* Add img src value and create event listener when page finishes loading. */
window.onload = pageSetup;
