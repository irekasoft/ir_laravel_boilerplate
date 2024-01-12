/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*************************************!*\
  !*** ./resources/js/admin/admin.js ***!
  \*************************************/
var btnHamburger = document.querySelector('#btnHamburger');
var body = document.querySelector('body');
var sidebar = document.querySelector('.sidebar');
var overlay = document.querySelector('#overlay');
var fadeElems = document.querySelectorAll('.can-fade');
btnHamburger.addEventListener('click', function () {
  console.log('click hamburger');
  if (sidebar.classList.contains('active')) {
    // Close Hamburger Menu

    body.classList.remove('noscroll');
    sidebar.classList.remove('active');
    fadeElems.forEach(function (element) {
      element.classList.remove('fade-in');
      element.classList.add('fade-out');
    });
    overlay.classList.add('hidden');
    overlay.classList.remove('visible');
  } else {
    // Open Hamburger Menu

    body.classList.add('noscroll');
    sidebar.classList.add('active');
    fadeElems.forEach(function (element) {
      element.classList.remove('fade-out');
      element.classList.add('fade-in');
    });
    overlay.classList.remove('hidden');
    overlay.classList.add('visible');
  }
});
/******/ })()
;