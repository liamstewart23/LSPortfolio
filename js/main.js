(function() {
	"use strict";
	//console.log("HELLO WORLD!")
	//Variables
	var logo = document.querySelector("#logo");
	var menu = document.querySelector("#menu");
	var page = document.querySelector("#page");
	var js = document.querySelector(".js");

	js.style.display = "block";//shows menu for non js browser
	
	//Functions
	function expandLogo() {
		TweenMax.to(logo, 1, {width:320,text:"Liam Stewart"});
		logo.removeEventListener("mouseover", expandLogo, false);
		logo.addEventListener("mouseout", contractLogo, false);
	}
	function contractLogo() {
		TweenMax.to(logo, 1, {width:80,text:"L"}, "+=0.5");
		logo.addEventListener("mouseover", expandLogo, false);
	}

	//Listeners
	logo.addEventListener("mouseover", expandLogo, false);
})();