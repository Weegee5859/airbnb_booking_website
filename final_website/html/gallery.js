/* 
 * Author:		Evan Tatavitto, Jordan Bender, Joshua Marshall, Nathan Mousinho Elias
 * Date:		4/17/2021	
 *Filename:	gallery.html
 */
 "use strict"; // Interpret document contents in JavaScript strict mode.

 /* Global Variables */
var photoOrder = [1, 2, 3, 4, 5];
var figureCount = 3;
var autoAdvance = setInterval(rightAdvance, 5000);

function populateFigures() {
	var filename;
	var currentFig;
	if (figureCount === 3) {
		for (var i = 1; i < 4; i++) {
			filename = "resources/photo_" + photoOrder[i] + ".jpg";
			currentFig = document.getElementsByTagName("img")[i - 1];
			currentFig.src = filename;
		}
	}
}

/* Stop automatic image switching and call rightAdvance()
function. */
function rightArrow() {
	clearInterval(autoAdvance);
	rightAdvance();
	}

/* Shift all images one figure to the left, and change values in photoOrder array to match. */
function rightAdvance() {
	for (var i = 0; i < 5; i++) {
		if ((photoOrder[i] + 1) === 6) {
			photoOrder[i] = 1;
		} else {
			photoOrder[i] += 1;
		}
		populateFigures();
	}
}

/* Shift all images one figure to the right, and change values in photoOrder array to match. */
function leftArrow() {
	clearInterval(autoAdvance);
	for (var i = 0; i < 5; i++) {
		if ((photoOrder[i] - 1) === 0) {
			photoOrder[i] = 5;
		} else {
			photoOrder[i] -= 1;
		}
		populateFigures();
	}
}

function createEventListeners() {
	var leftarrow = document.getElementById("leftarrow");
	if (leftarrow.addEventListener) {
		leftarrow.addEventListener("click",leftArrow, false);
	} else if (leftarrow.attachEvent) {
		leftarrow.attachEvent("onclick", leftArrow);
	}
	var rightarrow = document.getElementById("rightarrow");
	if (rightarrow.addEventListener) {
		rightarrow.addEventListener("click", rightArrow, false);
	} else if (rightarrow.attachEvent) {
		rightarrow.attachEvent("onclick", rightArrow);
	}
	var mainFig = document.getElementsByTagName("img")[1];
	if (mainFig.addEventListener) {
		mainFig.addEventListener("click", zoomFig, false);
	} else if (mainFig.attachEvent) {
		mainFig.attachEvent ("onclick", zoomFig);
	}
}

/* Open center figure in separate window. */
function zoomFig() {
	var propertyWidth = 1000;
	var propertyHeight = 700;
	var winLeft = ((screen.width - propertyWidth) / 2);
	var winTop = ((screen.height - propertyHeight) / 2);
	var winOptions = "width=960,height=700";
	winOptions += ",left=" + winLeft;
	winOptions += ",top=" + winTop;
	var zoomWindow = window.open("zoom.html", "zoomwin", winOptions);
	zoomWindow.focus();
}

/* Create event listeners and populate image elements. */
function setUpPage() {
	createEventListeners();
	populateFigures();
}

/* Run setUpPage() function when page finishes loading. */
if (window.addEventListener) {
	window.addEventListener("load", setUpPage, false);
} else if (window.attachEvent) {
	window.attachEvent("onload", setUpPage);
}
