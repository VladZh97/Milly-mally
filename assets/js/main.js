/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = "./resources/js/index.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/index.js":
/*!*******************************!*\
  !*** ./resources/js/index.js ***!
  \*******************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _scss_style_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../scss/style.scss */ \"./resources/scss/style.scss\");\n/* harmony import */ var _scss_style_scss__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_scss_style_scss__WEBPACK_IMPORTED_MODULE_0__);\n\n\njQuery.fn.load = function(callback){ $(window).on(\"load\", callback) };\n\n// LOADER\n\nconst loader = document.querySelector('.loader__container');\nconst html = document.querySelector('html');\n\nwindow.addEventListener('load', function() {\n  loader.parentElement.removeChild(loader);\n  html.style.overflow = 'auto';\n})\n\n\n// Cookies\n\nclass MScookies {\n\tconstructor() {\n\t\tthis.WHCheckCookies();\n\t}\n\tWHCheckCookies() {\n\t\tif (this.WHReadCookie('cookies_accepted') != 'T') {\n\t\t\tvar message_container = document.createElement('div');\n      message_container.id = 'cookies-message-container';\n      if(html.getAttribute('lang') === \"pl-PL\") {\n        var html_code = '<div id=\"cookies-message\" style=\"color: #000; padding: 10px 10px; font-size: 12px; line-height: 16px; display: flex; justify-content: space-between; align-items: center; position: fixed; bottom: 0px; right: 0; background-color: #fff; width: 100%; max-width: 320px; font-family: sans-serif; z-index: 999; box-sizing: border-box; box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);\">';\n        html_code += '<svg id=\"Capa_1\" style=\"fill:#F4465B\" enable-background=\"new 0 0 556.235 556.235\" height=\"30\" viewBox=\"0 0 556.235 556.235\" width=\"30\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"m278.118 0c-153.6 0-278.118 124.518-278.118 278.118s124.518 278.118 278.118 278.118c8.144 0 16.158-.533 24.126-1.218-4.327-10.325-6.743-21.652-6.743-33.547 0-24.433 10.151-46.429 26.381-62.219-5.701-12.89-8.999-27.073-8.999-42.075 0-57.6 46.694-104.294 104.294-104.294 15.002 0 29.184 3.297 42.075 8.999 15.791-16.23 37.786-26.381 62.219-26.381 11.895 0 23.222 2.415 33.547 6.741.685-7.968 1.218-15.98 1.218-24.124-.001-153.6-124.519-278.118-278.118-278.118zm-191.206 278.118c-9.599 0-17.382-7.783-17.382-17.382 0-9.601 7.783-17.382 17.382-17.382s17.382 7.781 17.382 17.382c0 9.599-7.783 17.382-17.382 17.382zm86.911 139.058c-19.201 0-34.765-15.566-34.765-34.765 0-19.201 15.564-34.765 34.765-34.765s34.765 15.564 34.765 34.765c0 19.199-15.564 34.765-34.765 34.765zm34.765-243.353c-19.201 0-34.765-15.566-34.765-34.765 0-19.201 15.564-34.765 34.765-34.765s34.765 15.564 34.765 34.765c0 19.199-15.564 34.765-34.765 34.765zm52.147 139.059c-9.599 0-17.382-7.783-17.382-17.382 0-9.601 7.783-17.382 17.382-17.382s17.382 7.781 17.382 17.382c.001 9.599-7.782 17.382-17.382 17.382zm104.294-243.353c9.599 0 17.382 7.781 17.382 17.382 0 9.599-7.783 17.382-17.382 17.382s-17.382-7.783-17.382-17.382c0-9.601 7.783-17.382 17.382-17.382zm17.383 173.824c-19.201 0-34.765-15.566-34.765-34.765 0-19.201 15.564-34.765 34.765-34.765s34.765 15.564 34.765 34.765c-.001 19.199-15.565 34.765-34.765 34.765z\"/></svg>';\n        html_code += '<div style=\"display: inline-block; width: 60%; margin: 0 2%; text-align: justify;\">Ta strona używa ciasteczek (cookies). ';\n        html_code += '<a href=\"' + privacylink + '\" style=\"color: #F4465B;\">Dowiedz się więcej</a></div>';\n        html_code += '<a href=\"#\" id=\"accept-cookies-checkbox\" name=\"accept-cookies\" style=\"background-color: #F4465B; padding: 4% 7%; color: #FFF; display: inline-block; margin-left: 1%; text-decoration: none; font-size: 16px; cursor: pointer;\">';\n        html_code += 'OK';\n        html_code += '</a>';\n        html_code += '</div>';\n      } else if (html.getAttribute('lang') === \"en-US\") {\n        var html_code = '<div id=\"cookies-message\" style=\"color: #000; padding: 10px 10px; font-size: 12px; line-height: 16px; display: flex; justify-content: space-between; align-items: center; position: fixed; bottom: 0px; right: 0; background-color: #fff; width: 100%; max-width: 320px; font-family: sans-serif; z-index: 999; box-sizing: border-box; box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);\">';\n        html_code += '<svg id=\"Capa_1\" style=\"fill:#F4465B\" enable-background=\"new 0 0 556.235 556.235\" height=\"30\" viewBox=\"0 0 556.235 556.235\" width=\"30\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"m278.118 0c-153.6 0-278.118 124.518-278.118 278.118s124.518 278.118 278.118 278.118c8.144 0 16.158-.533 24.126-1.218-4.327-10.325-6.743-21.652-6.743-33.547 0-24.433 10.151-46.429 26.381-62.219-5.701-12.89-8.999-27.073-8.999-42.075 0-57.6 46.694-104.294 104.294-104.294 15.002 0 29.184 3.297 42.075 8.999 15.791-16.23 37.786-26.381 62.219-26.381 11.895 0 23.222 2.415 33.547 6.741.685-7.968 1.218-15.98 1.218-24.124-.001-153.6-124.519-278.118-278.118-278.118zm-191.206 278.118c-9.599 0-17.382-7.783-17.382-17.382 0-9.601 7.783-17.382 17.382-17.382s17.382 7.781 17.382 17.382c0 9.599-7.783 17.382-17.382 17.382zm86.911 139.058c-19.201 0-34.765-15.566-34.765-34.765 0-19.201 15.564-34.765 34.765-34.765s34.765 15.564 34.765 34.765c0 19.199-15.564 34.765-34.765 34.765zm34.765-243.353c-19.201 0-34.765-15.566-34.765-34.765 0-19.201 15.564-34.765 34.765-34.765s34.765 15.564 34.765 34.765c0 19.199-15.564 34.765-34.765 34.765zm52.147 139.059c-9.599 0-17.382-7.783-17.382-17.382 0-9.601 7.783-17.382 17.382-17.382s17.382 7.781 17.382 17.382c.001 9.599-7.782 17.382-17.382 17.382zm104.294-243.353c9.599 0 17.382 7.781 17.382 17.382 0 9.599-7.783 17.382-17.382 17.382s-17.382-7.783-17.382-17.382c0-9.601 7.783-17.382 17.382-17.382zm17.383 173.824c-19.201 0-34.765-15.566-34.765-34.765 0-19.201 15.564-34.765 34.765-34.765s34.765 15.564 34.765 34.765c-.001 19.199-15.565 34.765-34.765 34.765z\"/></svg>';\n        html_code += '<div style=\"display: inline-block; width: 60%; margin: 0 2%; text-align: justify;\">This website uses cookies. ';\n        html_code += '<a href=\"' + privacylinkEn + '\" style=\"color: #F4465B;\">Read more</a></div>';\n        html_code += '<a href=\"#\" id=\"accept-cookies-checkbox\" name=\"accept-cookies\" style=\"background-color: #F4465B; padding: 4% 7%; color: #FFF; display: inline-block; margin-left: 1%; text-decoration: none; font-size: 16px; cursor: pointer;\">';\n        html_code += 'OK';\n        html_code += '</a>';\n        html_code += '</div>';\n      } else {\n        var html_code = '<div id=\"cookies-message\" style=\"color: #000; padding: 10px 10px; font-size: 12px; line-height: 16px; display: flex; justify-content: space-between; align-items: center; position: fixed; bottom: 0px; right: 0; background-color: #fff; width: 100%; max-width: 320px; font-family: sans-serif; z-index: 999; box-sizing: border-box; box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);\">';\n        html_code += '<svg id=\"Capa_1\" style=\"fill:#F4465B\" enable-background=\"new 0 0 556.235 556.235\" height=\"30\" viewBox=\"0 0 556.235 556.235\" width=\"30\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"m278.118 0c-153.6 0-278.118 124.518-278.118 278.118s124.518 278.118 278.118 278.118c8.144 0 16.158-.533 24.126-1.218-4.327-10.325-6.743-21.652-6.743-33.547 0-24.433 10.151-46.429 26.381-62.219-5.701-12.89-8.999-27.073-8.999-42.075 0-57.6 46.694-104.294 104.294-104.294 15.002 0 29.184 3.297 42.075 8.999 15.791-16.23 37.786-26.381 62.219-26.381 11.895 0 23.222 2.415 33.547 6.741.685-7.968 1.218-15.98 1.218-24.124-.001-153.6-124.519-278.118-278.118-278.118zm-191.206 278.118c-9.599 0-17.382-7.783-17.382-17.382 0-9.601 7.783-17.382 17.382-17.382s17.382 7.781 17.382 17.382c0 9.599-7.783 17.382-17.382 17.382zm86.911 139.058c-19.201 0-34.765-15.566-34.765-34.765 0-19.201 15.564-34.765 34.765-34.765s34.765 15.564 34.765 34.765c0 19.199-15.564 34.765-34.765 34.765zm34.765-243.353c-19.201 0-34.765-15.566-34.765-34.765 0-19.201 15.564-34.765 34.765-34.765s34.765 15.564 34.765 34.765c0 19.199-15.564 34.765-34.765 34.765zm52.147 139.059c-9.599 0-17.382-7.783-17.382-17.382 0-9.601 7.783-17.382 17.382-17.382s17.382 7.781 17.382 17.382c.001 9.599-7.782 17.382-17.382 17.382zm104.294-243.353c9.599 0 17.382 7.781 17.382 17.382 0 9.599-7.783 17.382-17.382 17.382s-17.382-7.783-17.382-17.382c0-9.601 7.783-17.382 17.382-17.382zm17.383 173.824c-19.201 0-34.765-15.566-34.765-34.765 0-19.201 15.564-34.765 34.765-34.765s34.765 15.564 34.765 34.765c-.001 19.199-15.565 34.765-34.765 34.765z\"/></svg>';\n        html_code += '<div style=\"display: inline-block; width: 60%; margin: 0 2%; text-align: justify;\">Diese Website verwendet Cookies. ';\n        html_code += '<a href=\"' + privacylinkDe + '\" style=\"color: #F4465B;\">Mehr lesen</a></div>';\n        html_code += '<a href=\"#\" id=\"accept-cookies-checkbox\" name=\"accept-cookies\" style=\"background-color: #F4465B; padding: 4% 7%; color: #FFF; display: inline-block; margin-left: 1%; text-decoration: none; font-size: 16px; cursor: pointer;\">';\n        html_code += 'OK';\n        html_code += '</a>';\n        html_code += '</div>';\n      }\n\t\t\tmessage_container.innerHTML = html_code;\n\t\t\tdocument.body.appendChild(message_container);\n\t\t\tvar _self = this;\n\t\t\tdocument.getElementById('accept-cookies-checkbox').addEventListener('click', function (e) {\n\t\t\t\te.preventDefault();\n\t\t\t\t_self.WHCloseCookiesWindow();\n\t\t\t}, false);\n\t\t}\n\t}\n\tWHCloseCookiesWindow() {\n\t\tthis.WHCreateCookie('cookies_accepted', 'T', 365);\n\t\tdocument.getElementById('cookies-message-container').removeChild(document.getElementById('cookies-message'));\n\t}\n\tWHReadCookie(name) {\n\t\tvar nameEQ = name + \"=\";\n\t\tvar ca = document.cookie.split(';');\n\t\tfor (var i = 0; i < ca.length; i++) {\n\t\t\tvar c = ca[i];\n\t\t\twhile (c.charAt(0) == ' ') c = c.substring(1, c.length);\n\t\t\tif (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);\n\t\t}\n\t\treturn null;\n\t}\n\tWHCreateCookie(name, value, days) {\n\t\tvar date = new Date();\n\t\tdate.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));\n\t\tvar expires = \"; expires=\" + date.toGMTString();\n\t\tdocument.cookie = name + \"=\" + value + expires + \"; path=/\";\n\t}\n}\nwindow.onload = function () {var cookies = new MScookies();};\n\n\n// MAIN PAGE SLIDER\nif(document.body.classList.contains('page-template-front-page')) {\nconst sliderProducts = document.querySelector('.popular__product .products.columns-4');\nsliderProducts.classList.add('owl-carousel');\n\n$(\".products\").owlCarousel({\n  items: 4,\n  margin: 5,\n  loop: true,\n  nav: true,\n  dots: false,\n  smartSpeed: 1500,\n  // autoplay: true,\n  // autoplaySpeed: 1000,\n  // autoplayTimeout: 8000,\n  navText: [\n    '<button type=\"button\" class=\"reviews__arrow reviews__prev\"><div></div></button>',\n    '<button type=\"button\" class=\"reviews__arrow reviews__prev\"><div></div></button>',\n  ],\n  responsive : {\n    0: {\n      items: 1,\n    },\n      576: {\n      items: 2\n    },\n    768 : {\n      items: 3,\n    },\n    1200: {\n      items: 4\n    }\n  }\n});\n\n}\n\n\n// TOP SLIDER \n\nif($(\".hero__list\").length > 0) {\n\n$(\".hero__list\").owlCarousel({\n\titems: 1,\n  loop: true,\n  margin: 5,\n  smartSpeed: 1500,\n  autoplay: true,\n  autoplaySpeed: 1000,\n  autoplayTimeout: 8000,\n\tnav: true,\n\tnavContainer: '#customNav',\n\tdotsContainer: '#customDots',\n  dots: true\n});\n}\nif($(\".reviews__list\").length > 0) {\n$(\".reviews__list\").owlCarousel({\n  loop: true,\n  margin: 5,\n  nav: true,\n  dots: true,\n  smartSpeed: 1500,\n  autoplay: true,\n  autoplaySpeed: 1000,\n  autoplayTimeout: 8000,\n  dotsEach: 2,\n  items: 1,\n  navText: [\n    '<button type=\"button\" class=\"reviews__arrow reviews__prev\"><div></div></button>',\n    '<button type=\"button\" class=\"reviews__arrow reviews__prev\"><div></div></button>',\n  ],\n});\n}\n\n\n// MENU\nconst menuBtn = document.querySelector('.menu-btn');\nconst menuTop = document.querySelector('.header__right')\nlet menuOpen = false;\nmenuBtn.addEventListener('click', () => {\n    if(!menuOpen) {\n        menuBtn.classList.add('open');\n        menuTop.classList.add('active')\n        menuOpen = true;\n    } else {\n        menuBtn.classList.remove('open');\n        menuTop.classList.remove('active')\n        menuOpen = false;\n    }\n});\n\nconst menuBtnBurger = document.querySelector('.menu-btn__burger');\n\n\n\nif(document.body.classList.contains('page-template-page-contact')) {\n\n  // MAP\n  var mapCenter = [21.281255506817708, 52.033163217465805];\n  \n  \n  \n  \n  mapboxgl.accessToken =\n    \"pk.eyJ1IjoidmxhZHpoIiwiYSI6ImNrZzBxcHpoMDB1ZmsydG9iMHE0YnJ6NDYifQ._kSahmQ3wNJverVwR7NxgA\";\n  var map = new mapboxgl.Map({\n    container: \"map\",\n    style: \"mapbox://styles/vladzh/ckg9tw9l02mkz19nwaem18kkd\",\n    center: mapCenter,\n    zoom: 12,\n  });\n  \n  map.addControl(new mapboxgl.NavigationControl());\n  map.scrollZoom.disable();\n  map.boxZoom.disable();\n  map.dragRotate.disable();\n  map.keyboard.disable();\n  map.doubleClickZoom.disable();\n  map.touchZoomRotate.disable();\n  \n  var point = document.createElement(\"div\");\n  point.className = \"marker\";\n  point.innerHTML = '<img src=\"../wp-content/themes/MillyMally/assets/img/map-marker-alt-solid.svg\" alt=\"Map Marker\">';\n  \n  var marker = new mapboxgl.Marker(point)\n      .setLngLat([21.281255506817708, 52.033163217465805])\n      .addTo(map);\n  \n}\n\n\nif($( \".variable-item\" ).length > 0) {\n$( \".variable-item\" ).each(function() {\n  $(this).on(\"click\", function(){\n    $('.wpgs-for').slick('slickGoTo', 0, true);\n  });\n});\n};\n\n\nlet items = $(\".product.type-product\");\n    let numItems = items.length;\n    let perPage = 15;\n\n    items.slice(perPage).hide();\n\n    $('#pagination-container').pagination({\n        items: numItems,\n        itemsOnPage: perPage,\n        prevText: \"&laquo;\",\n        nextText: \"&raquo;\",\n        onPageClick: function (pageNumber) {\n            var showFrom = perPage * (pageNumber - 1);\n            var showTo = showFrom + perPage;\n            items.hide().slice(showFrom, showTo).show();\n        }\n    });\n\n\nif(document.body.classList.contains('post-type-archive')) {\n    // PRODUCT PAGINATION SCROLL\n    const productContainer = document.querySelector('.products.columns-4')\n    let productContainerScroll;\n\n    if(window.innerWidth > 576) {\n      productContainerScroll =  productContainer.getBoundingClientRect().top + window.scrollY - 150;\n    } else {\n      productContainerScroll =  productContainer.getBoundingClientRect().top + window.scrollY - 100;\n    }\n\n\n    const clickPagination = document.querySelector('#pagination-container');\n\n    function handleScroll() {\n      window.scroll({\n        top: productContainerScroll,\n        behavior: 'smooth'\n      });\n    }\n\n    clickPagination.addEventListener('click', handleScroll)\n  }\n\n//# sourceURL=webpack:///./resources/js/index.js?");

/***/ }),

/***/ "./resources/scss/style.scss":
/*!***********************************!*\
  !*** ./resources/scss/style.scss ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

eval("// extracted by mini-css-extract-plugin\n\n//# sourceURL=webpack:///./resources/scss/style.scss?");

/***/ })

/******/ });