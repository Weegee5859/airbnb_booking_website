/*
	Author: Evan Tatavitto, Jordan Bender, Joshua Marshall, Nathan Mousinho Elias
	Date: 4 / 23 / 2021
	Filename: home.js
	Use with help from the textbook.
*/
function WhatYouSee(){
var Rest=getElementById(restTable);
var Park=getElementById(parkTable);
var Ent=getElementById(entTable);
var Which=getElementById(Type).value;
if (which === "choose_category"){
    Rest.style.display="block";
    Park.style.display="block";
    Ent.style.display="block";
}
if (which === "restaurants"){
    Rest.style.display="block";
    Park.style.display="none";
    Ent.style.display="none";
}
if (which === "theme_parks"){
    Rest.style.display="none";
    Park.style.display="block";
    Ent.style.display="none";
}
if (which === "entertainment"){
    Rest.style.display="none";
    Park.style.display="none";
    Ent.style.display="block";
}
}
var DropDown=getElementById(Type);
DropDown.addEventLisener("change",WhatYouSee,false);

