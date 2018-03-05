
'use strict';



var menuMobile = document.querySelector("#mobile");
var menuDesktop1 = document.querySelector("#desktop1");
var menuDesktop2 = document.querySelector("#desktop2");

var menuButton = document.querySelector("#menu-button");
var menuItems = document.querySelector("#menu-items");
var menuFirstItem = document.querySelector("#menu-items a");



/*https://codepen.io/jondlm/pen/doijJ*/
go();
window.addEventListener('resize', go);

function go(){
  console.log ("Width: "+document.documentElement.clientWidth);

  if (document.documentElement.clientWidth < 750) {

  	menuButton.classList.remove("hidden");
  	menuButton.setAttribute("aria-hidden", "false");
  	menuItems.classList.add("hidden");
  	menuItems.setAttribute("aria-hidden", "true");
  	menuItems.setAttribute("aria-labelledby", "menu-button");

  }
}

menuButton.addEventListener("click",

	function() {

		if ( menuItems.classList.contains("hidden") ) {
			menuItems.classList.remove("hidden");
			menuItems.setAttribute("aria-hidden", "false");
			menuButton.setAttribute("aria-expanded", "true");
			menuFirstItem.focus();
		}

		else {
			menuItems.classList.add("hidden");
			menuItems.setAttribute("aria-hidden", "true");
			menuButton.setAttribute("aria-expanded", "false");
		}
	}
);
