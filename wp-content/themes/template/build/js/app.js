/******/ (() => { // webpackBootstrap
/******/ 	/************************************************************************/
(() => {
/*!***********************!*\
  !*** ./src/js/app.js ***!
  \***********************/
/*! unknown exports (runtime-defined) */
/*! exports [maybe provided (runtime-defined)] [unused] */
/*! runtime requirements:  */
var baseURL = url_object.templateUrl;
var animation = bodymovin.loadAnimation({
  container: document.getElementById('logo'),
  path: baseURL + '/animated_logo.json',
  renderer: 'svg',
  // Required
  loop: true,
  // Optional
  autoplay: true,
  // Optional
  name: "animated-logo"
});

function activeGreenUnderline() {
  var underline = document.getElementById('underline');
  underline.classList.add('underline--active');
}

;
activeGreenUnderline();
})();

(() => {
/*!******************************!*\
  !*** ./src/scss/styles.scss ***!
  \******************************/
/*! unknown exports (runtime-defined) */
/*! exports [maybe provided (runtime-defined)] [unused] */
/*! runtime requirements:  */
// extracted by mini-css-extract-plugin
})();

/******/ })()
;