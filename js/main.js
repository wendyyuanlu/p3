'use strict';


var projectNav = document.querySelector("#project-nav");
var navVisible = false;

window.onscroll = function() {
  projectNavCheck();
};

function projectNavCheck(){
  //https://stackoverflow.com/questions/1248081/get-the-browser-viewport-dimensions-with-javascript?utm_medium=organic&utm_source=google_rich_qa&utm_campaign=google_rich_qa
  var windowHeight = window.innerHeight;

  //https://stackoverflow.com/questions/1145850/how-to-get-height-of-entire-document-with-javascript
  var pageHeight = document.documentElement.scrollHeight;




  if (navVisible == true) {
    navShow();
  } else if (navVisible == false) {
    navHide();
  }


  //scrolltop code from https://www.w3schools.com/jsreF/tryit.asp?filename=tryjsref_onscroll3
  if (document.body.scrollTop <= 130 || document.documentElement.scrollTop <= 130) {
   navVisible = false;
  }

   if (document.body.scrollTop > 130 || document.documentElement.scrollTop > 130) {
    navVisible = true;
  }

  //get height of document:
  // if (document.body.scrollTop >= (pageHeight - windowHeight - 200) || document.documentElement.scrollTop >= (pageHeight - windowHeight - 200)) {
  //  navVisible = false;
  // }

}

function navShow() {
  projectNav.setAttribute("aria-expanded", "true");
  projectNav.classList.remove("hidden");
  // projectNav.classList.remove("slideUp");
  projectNav.classList.add("slideDown");
}

function navHide() {
  projectNav.setAttribute("aria-hidden", "true");
  projectNav.classList.add("hidden");
  // projectNav.classList.remove("slideDown");
  // projectNav.classList.add("slideUp");

  // window.setTimeout(function(){
  // }, 400);
}
