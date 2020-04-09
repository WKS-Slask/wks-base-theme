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
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./icons/arrow-down.svg":
/*!******************************!*\
  !*** ./icons/arrow-down.svg ***!
  \******************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("module.exports = \"<svg version=\\\"1.1\\\" id=\\\"Capa_1\\\" xmlns=\\\"http://www.w3.org/2000/svg\\\" xmlns:xlink=\\\"http://www.w3.org/1999/xlink\\\" x=\\\"0px\\\" y=\\\"0px\\\" viewBox=\\\"0 0 284.929 284.929\\\" style=\\\"enable-background:new 0 0 284.929 284.929;\\\" xml:space=\\\"preserve\\\"><g><path d=\\\"M282.082,76.511l-14.274-14.273c-1.902-1.906-4.093-2.856-6.57-2.856c-2.471,0-4.661,0.95-6.563,2.856L142.466,174.441 L30.262,62.241c-1.903-1.906-4.093-2.856-6.567-2.856c-2.475,0-4.665,0.95-6.567,2.856L2.856,76.515C0.95,78.417,0,80.607,0,83.082 c0,2.473,0.953,4.663,2.856,6.565l133.043,133.046c1.902,1.903,4.093,2.854,6.567,2.854s4.661-0.951,6.562-2.854L282.082,89.647 c1.902-1.903,2.847-4.093,2.847-6.565C284.929,80.607,283.984,78.417,282.082,76.511z\\\"></path></g></svg>\"\n\n//# sourceURL=webpack:///./icons/arrow-down.svg?");

/***/ }),

/***/ "./icons/arrow-up.svg":
/*!****************************!*\
  !*** ./icons/arrow-up.svg ***!
  \****************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("module.exports = \"<svg version=\\\"1.1\\\" id=\\\"Layer_1\\\" xmlns=\\\"http://www.w3.org/2000/svg\\\" xmlns:xlink=\\\"http://www.w3.org/1999/xlink\\\" x=\\\"0px\\\" y=\\\"0px\\\" viewBox=\\\"0 0 492.002 492.002\\\" style=\\\"enable-background:new 0 0 492.002 492.002;\\\" xml:space=\\\"preserve\\\"><g><g><path d=\\\"M484.136,328.473L264.988,109.329c-5.064-5.064-11.816-7.844-19.172-7.844c-7.208,0-13.964,2.78-19.02,7.844 L7.852,328.265C2.788,333.333,0,340.089,0,347.297c0,7.208,2.784,13.968,7.852,19.032l16.124,16.124 c5.064,5.064,11.824,7.86,19.032,7.86s13.964-2.796,19.032-7.86l183.852-183.852l184.056,184.064 c5.064,5.06,11.82,7.852,19.032,7.852c7.208,0,13.96-2.792,19.028-7.852l16.128-16.132 C494.624,356.041,494.624,338.965,484.136,328.473z\\\"></path></g></g></svg>\"\n\n//# sourceURL=webpack:///./icons/arrow-up.svg?");

/***/ }),

/***/ "./src/scss/style.scss":
/*!*****************************!*\
  !*** ./src/scss/style.scss ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

eval("// extracted by mini-css-extract-plugin\n\n//# sourceURL=webpack:///./src/scss/style.scss?");

/***/ }),

/***/ "./src/ts/Footer.ts":
/*!**************************!*\
  !*** ./src/ts/Footer.ts ***!
  \**************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\nvar __awaiter = (undefined && undefined.__awaiter) || function (thisArg, _arguments, P, generator) {\n    function adopt(value) { return value instanceof P ? value : new P(function (resolve) { resolve(value); }); }\n    return new (P || (P = Promise))(function (resolve, reject) {\n        function fulfilled(value) { try { step(generator.next(value)); } catch (e) { reject(e); } }\n        function rejected(value) { try { step(generator[\"throw\"](value)); } catch (e) { reject(e); } }\n        function step(result) { result.done ? resolve(result.value) : adopt(result.value).then(fulfilled, rejected); }\n        step((generator = generator.apply(thisArg, _arguments || [])).next());\n    });\n};\nvar __generator = (undefined && undefined.__generator) || function (thisArg, body) {\n    var _ = { label: 0, sent: function() { if (t[0] & 1) throw t[1]; return t[1]; }, trys: [], ops: [] }, f, y, t, g;\n    return g = { next: verb(0), \"throw\": verb(1), \"return\": verb(2) }, typeof Symbol === \"function\" && (g[Symbol.iterator] = function() { return this; }), g;\n    function verb(n) { return function (v) { return step([n, v]); }; }\n    function step(op) {\n        if (f) throw new TypeError(\"Generator is already executing.\");\n        while (_) try {\n            if (f = 1, y && (t = op[0] & 2 ? y[\"return\"] : op[0] ? y[\"throw\"] || ((t = y[\"return\"]) && t.call(y), 0) : y.next) && !(t = t.call(y, op[1])).done) return t;\n            if (y = 0, t) op = [op[0] & 2, t.value];\n            switch (op[0]) {\n                case 0: case 1: t = op; break;\n                case 4: _.label++; return { value: op[1], done: false };\n                case 5: _.label++; y = op[1]; op = [0]; continue;\n                case 7: op = _.ops.pop(); _.trys.pop(); continue;\n                default:\n                    if (!(t = _.trys, t = t.length > 0 && t[t.length - 1]) && (op[0] === 6 || op[0] === 2)) { _ = 0; continue; }\n                    if (op[0] === 3 && (!t || (op[1] > t[0] && op[1] < t[3]))) { _.label = op[1]; break; }\n                    if (op[0] === 6 && _.label < t[1]) { _.label = t[1]; t = op; break; }\n                    if (t && _.label < t[2]) { _.label = t[2]; _.ops.push(op); break; }\n                    if (t[2]) _.ops.pop();\n                    _.trys.pop(); continue;\n            }\n            op = body.call(thisArg, _);\n        } catch (e) { op = [6, e]; y = 0; } finally { f = t = 0; }\n        if (op[0] & 5) throw op[1]; return { value: op[0] ? op[1] : void 0, done: true };\n    }\n};\nvar Footer = /** @class */ (function () {\n    function Footer() {\n    }\n    Footer.prototype.handleMouseover = function (id) {\n        document.getElementById(\"sponsor-white-\" + id).style.opacity = \"0\";\n        document.getElementById(\"sponsor-color-\" + id).style.opacity = \"1\";\n    };\n    Footer.prototype.handleMouseout = function (id) {\n        document.getElementById(\"sponsor-color-\" + id).style.opacity = \"0\";\n        document.getElementById(\"sponsor-white-\" + id).style.opacity = \"1\";\n    };\n    Footer.prototype.fetchSponsors = function () {\n        return __awaiter(this, void 0, void 0, function () {\n            var response, data;\n            return __generator(this, function (_a) {\n                switch (_a.label) {\n                    case 0: return [4 /*yield*/, fetch(\"https://wks-slask.wroc.pl/wp-json/wks/api/sponsors/\")];\n                    case 1:\n                        response = _a.sent();\n                        return [4 /*yield*/, response.json()];\n                    case 2:\n                        data = _a.sent();\n                        return [2 /*return*/, data];\n                }\n            });\n        });\n    };\n    Footer.prototype.initSponsors = function (sponsors) {\n        var _this = this;\n        sponsors.forEach(function (_a) {\n            var id = _a.id;\n            var container = document.getElementById(\"sponsor-container-\" + id);\n            container.addEventListener(\"mouseover\", function () {\n                _this.handleMouseover(String(id));\n            });\n            container.addEventListener(\"mouseout\", function () {\n                _this.handleMouseout(String(id));\n            });\n        });\n    };\n    Footer.prototype.init = function () {\n        return __awaiter(this, void 0, void 0, function () {\n            var sponsors;\n            return __generator(this, function (_a) {\n                switch (_a.label) {\n                    case 0: return [4 /*yield*/, this.fetchSponsors()];\n                    case 1:\n                        sponsors = _a.sent();\n                        this.initSponsors(sponsors);\n                        return [2 /*return*/];\n                }\n            });\n        });\n    };\n    return Footer;\n}());\n/* harmony default export */ __webpack_exports__[\"default\"] = (Footer);\n\n\n//# sourceURL=webpack:///./src/ts/Footer.ts?");

/***/ }),

/***/ "./src/ts/Navbar.ts":
/*!**************************!*\
  !*** ./src/ts/Navbar.ts ***!
  \**************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _Submenu__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Submenu */ \"./src/ts/Submenu.ts\");\n\nvar Navbar = /** @class */ (function () {\n    function Navbar() {\n        this.isMobileMenuHidden = true;\n    }\n    Navbar.prototype.getIsMobile = function () {\n        if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {\n            return true;\n        }\n        return false;\n    };\n    Navbar.prototype.handleClick = function () {\n        this.isMobileMenuHidden = !this.isMobileMenuHidden;\n        var navbarContent = document.querySelector(\".navbar-content--mobile\");\n        if (this.isMobileMenuHidden) {\n            navbarContent.style.display = \"flex\";\n            navbarContent.style.opacity = \"1\";\n        }\n        else {\n            navbarContent.style.display = \"none\";\n            navbarContent.style.opacity = \"0\";\n        }\n    };\n    Navbar.prototype.init = function () {\n        if (this.getIsMobile()) {\n            var menuIcon = document.querySelector(\"#menu-btn\");\n            menuIcon.addEventListener(\"click\", this.handleClick);\n        }\n        var submenus = Array.from(document.querySelectorAll(\".menu-item-has-children\"));\n        console.log(submenus);\n        submenus.forEach(function (submenu) { return new _Submenu__WEBPACK_IMPORTED_MODULE_0__[\"default\"](submenu).init(); });\n    };\n    return Navbar;\n}());\n/* harmony default export */ __webpack_exports__[\"default\"] = (Navbar);\n\n\n//# sourceURL=webpack:///./src/ts/Navbar.ts?");

/***/ }),

/***/ "./src/ts/Submenu.ts":
/*!***************************!*\
  !*** ./src/ts/Submenu.ts ***!
  \***************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _icons_arrow_up_svg__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../icons/arrow-up.svg */ \"./icons/arrow-up.svg\");\n/* harmony import */ var _icons_arrow_up_svg__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_icons_arrow_up_svg__WEBPACK_IMPORTED_MODULE_0__);\n/* harmony import */ var _icons_arrow_down_svg__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../../icons/arrow-down.svg */ \"./icons/arrow-down.svg\");\n/* harmony import */ var _icons_arrow_down_svg__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_icons_arrow_down_svg__WEBPACK_IMPORTED_MODULE_1__);\n// @ts-ignore\n\n// @ts-ignore\n\nvar Submenu = /** @class */ (function () {\n    function Submenu(navbarItem) {\n        this.navbarItem = navbarItem;\n        this.isSubmenuHidden = true;\n    }\n    Submenu.prototype.setArrowUp = function (element) {\n        element.querySelector(\".wks-navbar-item-icon\").innerHTML = _icons_arrow_up_svg__WEBPACK_IMPORTED_MODULE_0___default.a;\n    };\n    Submenu.prototype.setArrowDown = function (element) {\n        element.querySelector(\".wks-navbar-item-icon\").innerHTML = _icons_arrow_down_svg__WEBPACK_IMPORTED_MODULE_1___default.a;\n    };\n    Submenu.prototype.handleClick = function (navbarItem) {\n        var submenu = navbarItem.querySelector(\".navbar-submenu--mobile\");\n        var anchor = navbarItem.querySelector(\"a\");\n        if (this.isSubmenuHidden) {\n            submenu.style.opacity = \"1\";\n            submenu.style.display = \"flex\";\n            this.setArrowUp(anchor);\n        }\n        else {\n            submenu.style.opacity = \"0\";\n            submenu.style.display = \"none\";\n            this.setArrowDown(anchor);\n        }\n        this.isSubmenuHidden = !this.isSubmenuHidden;\n    };\n    Submenu.prototype.init = function () {\n        console.log(_icons_arrow_up_svg__WEBPACK_IMPORTED_MODULE_0___default.a);\n        this.navbarItem.addEventListener(\"click\", this.handleClick.bind(this, this.navbarItem));\n    };\n    return Submenu;\n}());\n/* harmony default export */ __webpack_exports__[\"default\"] = (Submenu);\n\n\n//# sourceURL=webpack:///./src/ts/Submenu.ts?");

/***/ }),

/***/ "./src/ts/app.ts":
/*!***********************!*\
  !*** ./src/ts/app.ts ***!
  \***********************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _scss_style_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../scss/style.scss */ \"./src/scss/style.scss\");\n/* harmony import */ var _scss_style_scss__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_scss_style_scss__WEBPACK_IMPORTED_MODULE_0__);\n/* harmony import */ var _Navbar__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Navbar */ \"./src/ts/Navbar.ts\");\n/* harmony import */ var _Footer__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./Footer */ \"./src/ts/Footer.ts\");\n\n\n\nvar navbar = new _Navbar__WEBPACK_IMPORTED_MODULE_1__[\"default\"]();\nvar footer = new _Footer__WEBPACK_IMPORTED_MODULE_2__[\"default\"]();\nwindow.onload = function () {\n    footer.init();\n    navbar.init();\n};\n\n\n//# sourceURL=webpack:///./src/ts/app.ts?");

/***/ }),

/***/ 0:
/*!***************************************************!*\
  !*** multi ./src/ts/app.ts ./src/scss/style.scss ***!
  \***************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

eval("__webpack_require__(/*! ./src/ts/app.ts */\"./src/ts/app.ts\");\nmodule.exports = __webpack_require__(/*! ./src/scss/style.scss */\"./src/scss/style.scss\");\n\n\n//# sourceURL=webpack:///multi_./src/ts/app.ts_./src/scss/style.scss?");

/***/ })

/******/ });