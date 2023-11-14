"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_views_main_index_vue"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/views/main/index.vue?vue&type=script&lang=js":
/*!***********************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/views/main/index.vue?vue&type=script&lang=js ***!
  \***********************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  name: "Index",
  mounted: function mounted() {
    $(document).trigger('changed');
    this.getProducts();
    this.getProductsCam();
  },
  data: function data() {
    return {
      products: [],
      productsCam: []
    };
  },
  methods: {
    getProducts: function getProducts() {
      var _this = this;
      var page = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : 1;
      this.axios.post('api/recorder', {
        'channels': this.channels,
        'prices': this.prices,
        'page': page
      }).then(function (res) {
        _this.products = res.data.data;
        _this.pagination = res.data.meta;
        console.log(res.data.data);
      })["finally"](function (v) {
        $(document).trigger('changed');
      });
    },
    getProductsCam: function getProductsCam() {
      var _this2 = this;
      var page = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : 1;
      this.axios.post('/api/products', {
        'megapixels': this.megapixels,
        'prices': this.prices,
        'page': page
      }).then(function (res) {
        _this2.productsCam = res.data.data;
        _this2.pagination = res.data.meta;
        console.log(res.data.data);
      })["finally"](function (v) {
        $(document).trigger('changed');
      });
    }
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/views/main/index.vue?vue&type=template&id=8f59cd8a":
/*!***************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/views/main/index.vue?vue&type=template&id=8f59cd8a ***!
  \***************************************************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   render: () => (/* binding */ render)
/* harmony export */ });
/* harmony import */ var vue__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! vue */ "./node_modules/vue/dist/vue.esm-bundler.js");

var _hoisted_1 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createStaticVNode)("<main class=\"overflow-hidden\"><!-- newsLetter_popup Start --><!-- Start Main Slider --><section class=\"banner-style-3 overflow-hidden\"><!-- Banner Carousel --><div class=\"banner-slide3 slick\" data-slick=\"{&quot;dots&quot;: true, &quot;infinite&quot;: true, &quot;speed&quot;: 600, &quot;slidesToShow&quot;: 1,\n                &quot;slidesToScroll&quot;: 1, &quot;arrows&quot;: false, &quot;autoplay&quot;: true, &quot;autoplaySpeed&quot;: 6000,\n                 &quot;fade&quot;: false, &quot;pauseOnHover&quot;: false}\"><!-- Slide --><div class=\"slide\"><div class=\"contant-box position-relative\"><img class=\"bg-img hundread-vh\" src=\"/assets/images/home-three/banner_02.jpg\" alt=\"image\"></div></div><!-- Slide --><div class=\"slide\"><div class=\"contant-box position-relative\"><img width=\"100%\" class=\"bg-img hundread-vh\" src=\"/assets/images/home-three/3.png\" alt=\"image\"><div class=\"content-holder p-0 absolute-content\"><div class=\"container w-100 h-100\"><div class=\"row align-items-center justify-content-end w-100 h-100\"><div class=\"col-xl-6 col-md-9\"><div class=\"content-common slidedown home3c position-relative text-center\"></div></div></div></div></div></div></div></div></section><!-- End Main Slider --><!--Start Products Eight--><section class=\"product-slider-three position-relative pt-60 pb-60 overflow-hidden\"><div class=\"container\"><div class=\"section-header style3 text-center wow fadeInUp animated\"><h2>Популярный товар</h2><p>Hikvision Brand</p></div><div class=\"row wow fadeInUp mt-30 animated\"><div class=\"col-xl-12\"><div class=\"product-slider-main position-relative\"><div class=\"product-slider__single text-center\"><div class=\"inner text-center d-flex flex-column justify-content-center align-items-center\"><div class=\"img-box\"><img src=\"http://127.0.0.1:8000/storage/images/hxSS1GyPR5iBJydYKrYx25mdTE2VBgZdZ58GefK1.png\" alt=\"\"></div><div class=\"content-box mt-10\"><span>DS-2CD2443G0-IW</span><h2>6500₽</h2><h5>Год гарантии</h5><div class=\"btn-box\"><a href=\"/products\" class=\"btn--primary style2\">Подробнее</a></div></div></div></div></div></div></div></div></section><!--End Products Eight--><!-- core-features Start --><section class=\"core-features pt-120 mb-60 overflow-hidden\"><div class=\"container auto-container\"><div class=\"row mt--30\"><div class=\"col-xxl-3 col-md-6 mt-30 wow fadeInUp animated\" data-wow-delay=\"0.2s\"><div class=\"core-features__box d-flex ms-0\"><span class=\"one\"></span> <span class=\"two\"></span><div class=\"icon\"><img src=\"/assets/images/icon/f-icon-1.png\" alt=\"\"></div><div class=\"core-features__box-content\"><a href=\"login.html\" class=\"d-block\"><h4> Secure Payment </h4></a><p>Everybody different which the why give offer styles for every body.</p></div></div></div><div class=\"col-xxl-3 col-md-6 mt-30 wow fadeInUp animated\" data-wow-delay=\"0.3s\"><div class=\"core-features__box d-flex\"><span class=\"one\"></span> <span class=\"two\"></span><div class=\"icon\"><img src=\"/assets/images/icon/f-icon-2.png\" alt=\"\"></div><div class=\"core-features__box-content\"><a href=\"login.html\" class=\"d-block\"><h4> 27/7 Fast Delivery </h4></a><p>Everybody different which the why give offer styles for every body.</p></div></div></div><div class=\"col-xxl-3 col-md-6 mt-30 wow fadeInUp animated\" data-wow-delay=\"0.4s\"><div class=\"core-features__box d-flex\"><span class=\"one\"></span> <span class=\"two\"></span><div class=\"icon\"><img src=\"/assets/images/icon/f-icon-3.png\" alt=\"\"></div><div class=\"core-features__box-content\"><a href=\"login.html\" class=\"d-block\"><h4> Return &amp; Refund </h4></a><p>Everybody different which the why give offer styles for every body.</p></div></div></div><div class=\"col-xxl-3 col-md-6 mt-30 wow fadeInUp animated\" data-wow-delay=\"0.5s\"><div class=\"core-features__box d-flex me-0\"><span class=\"one\"></span> <span class=\"two\"></span><div class=\"icon\"><img src=\"/assets/images/icon/f-icon-4.png\" alt=\"\"></div><div class=\"core-features__box-content\"><a href=\"login.html\" class=\"d-block\"><h4> Quality Support </h4></a><p>Everybody different which the why give offer styles for every body.</p></div></div></div></div></div></section><!-- review-one Start --><section class=\"review-one pt-60 pb-60\"><div class=\"container\"><div class=\"row\"><div class=\"col-12\"><div class=\"review-one__section-head text-center wow fadeInUp animated\"><div class=\"title\"><h2>What Client’s Say</h2></div><p>Over 10000 Reviews</p></div></div><div class=\"col-12 wow fadeInUp animated\"><div class=\"reviewOneSlider owl-carousel\"><div class=\"review-one__single-review\"><div class=\"review-one__single-content\"><div class=\"review-one__aurthor\"><div class=\"thumb\"><img src=\"/assets/images/testimonial/testimonial-v1-1.png\" alt=\"\"></div> <span class=\"quate\"><i class=\"flaticon-right-quotes-symbol\"></i></span></div><div class=\"review-one__review-text\"><p> “Quickly explot worldwide leadership long-term high-impact &quot;outside the box thinking. Quickly network synergistic enterprise customer service” </p><h4><a href=\"#0\">Ana Fleming </a></h4> <span> Web Developer</span></div></div></div><div class=\"review-one__single-review\"><div class=\"review-one__single-content\"><div class=\"review-one__aurthor\"><div class=\"thumb\"><img src=\"/assets/images/testimonial/testimonial-v1-2.png\" alt=\"\"></div> <span class=\"quate\"><i class=\"flaticon-right-quotes-symbol\"></i></span></div><div class=\"review-one__review-text\"><p> “Quickly explot worldwide leadership long-term high-impact &quot;outside the box thinking. Quickly network synergistic enterprise customer service” </p><h4><a href=\"#0\">Elaine Hayes</a></h4> <span>UI/UX Designer </span></div></div></div><div class=\"review-one__single-review\"><div class=\"review-one__single-content\"><div class=\"review-one__aurthor\"><div class=\"thumb\"><img src=\"/assets/images/testimonial/testimonial-v1-3.png\" alt=\"\"></div> <span class=\"quate\"><i class=\"flaticon-right-quotes-symbol\"></i></span></div><div class=\"review-one__review-text\"><p> “Quickly explot worldwide leadership long-term high-impact &quot;outside the box thinking. Quickly network synergistic enterprise customer service” </p><h4><a href=\"#0\">Jane Young </a></h4> <span>Web Engineer </span></div></div></div><div class=\"review-one__single-review\"><div class=\"review-one__single-content\"><div class=\"review-one__aurthor\"><div class=\"thumb\"><img src=\"/assets/images/testimonial/testimonial-v1-2.png\" alt=\"\"></div> <span class=\"quate\"><i class=\"flaticon-right-quotes-symbol\"></i></span></div><div class=\"review-one__review-text\"><p> “Quickly explot worldwide leadership long-term high-impact &quot;outside the box thinking. Quickly network synergistic enterprise customer service” </p><h4><a href=\"#0\">Kim Douglas </a></h4> <span>React Developer</span></div></div></div></div></div></div></div></section><!-- newsLetter-one Start --><!--Start Gallery Two--><div class=\"gallery-two wow fadeInUp animated overflow-hidden\"><div class=\"container-fluid\"><div class=\"row\"><div class=\"col-xl-12\"><div class=\"gallery-two__slider\"><a href=\"/assets/images/home-three/gallery-v2-img1.jpg\" class=\"gallery-two__single\"><img src=\"/assets/images/home-three/gallery-v2-img1.jpg\" alt=\"\"> <span class=\"zoom-icon\"><i class=\"flaticon-expand\"></i></span></a> <a href=\"/assets/images/home-three/gallery-v2-img2.jpg\" class=\"gallery-two__single\"><img src=\"/assets/images/home-three/gallery-v2-img2.jpg\" alt=\"\"> <span class=\"zoom-icon\"><i class=\"flaticon-expand\"></i></span></a> <a href=\"/assets/images/home-three/gallery-v2-img3.jpg\" class=\"gallery-two__single\"><img src=\"/assets/images/home-three/gallery-v2-img3.jpg\" alt=\"\"> <span class=\"zoom-icon\"><i class=\"flaticon-expand\"></i></span></a> <a href=\"/assets/images/home-three/gallery-v2-img4.jpg\" class=\"gallery-two__single\"><img src=\"/assets/images/home-three/gallery-v2-img4.jpg\" alt=\"\"> <span class=\"zoom-icon\"><i class=\"flaticon-expand\"></i></span></a> <a href=\"/assets/images/home-three/gallery-v2-img5.jpg\" class=\"gallery-two__single\"><img src=\"/assets/images/home-three/gallery-v2-img5.jpg\" alt=\"\"> <span class=\"zoom-icon\"><i class=\"flaticon-expand\"></i></span></a> <a href=\"/assets/images/home-three/gallery-v2-img6.jpg\" class=\"gallery-two__single\"><img src=\"/assets/images/home-three/gallery-v2-img6.jpg\" alt=\"\"> <span class=\"zoom-icon\"><i class=\"flaticon-expand\"></i></span></a> <a href=\"/assets/images/home-three/gallery-v2-img2.jpg\" class=\"gallery-two__single\"><img src=\"/assets/images/home-three/gallery-v2-img2.jpg\" alt=\"\"> <span class=\"zoom-icon\"><i class=\"flaticon-expand\"></i></span></a> <a href=\"/assets/images/home-three/gallery-v2-img3.jpg\" class=\"gallery-two__single\"><img src=\"/assets/images/home-three/gallery-v2-img3.jpg\" alt=\"\"> <span class=\"zoom-icon\"><i class=\"flaticon-expand\"></i></span></a> <a href=\"/assets/images/home-three/gallery-v2-img4.jpg\" class=\"gallery-two__single\"><img src=\"/assets/images/home-three/gallery-v2-img4.jpg\" alt=\"\"> <span class=\"zoom-icon\"><i class=\"flaticon-expand\"></i></span></a></div></div></div></div></div><!--End Gallery Two--></main>", 1);
var _hoisted_2 = [_hoisted_1];
function render(_ctx, _cache, $props, $setup, $data, $options) {
  return (0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("div", null, _hoisted_2);
}

/***/ }),

/***/ "./resources/js/views/main/index.vue":
/*!*******************************************!*\
  !*** ./resources/js/views/main/index.vue ***!
  \*******************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _index_vue_vue_type_template_id_8f59cd8a__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./index.vue?vue&type=template&id=8f59cd8a */ "./resources/js/views/main/index.vue?vue&type=template&id=8f59cd8a");
/* harmony import */ var _index_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./index.vue?vue&type=script&lang=js */ "./resources/js/views/main/index.vue?vue&type=script&lang=js");
/* harmony import */ var C_Users_Home_Desktop_CamStore_node_modules_vue_loader_dist_exportHelper_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./node_modules/vue-loader/dist/exportHelper.js */ "./node_modules/vue-loader/dist/exportHelper.js");




;
const __exports__ = /*#__PURE__*/(0,C_Users_Home_Desktop_CamStore_node_modules_vue_loader_dist_exportHelper_js__WEBPACK_IMPORTED_MODULE_2__["default"])(_index_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_1__["default"], [['render',_index_vue_vue_type_template_id_8f59cd8a__WEBPACK_IMPORTED_MODULE_0__.render],['__file',"resources/js/views/main/index.vue"]])
/* hot reload */
if (false) {}


/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (__exports__);

/***/ }),

/***/ "./resources/js/views/main/index.vue?vue&type=script&lang=js":
/*!*******************************************************************!*\
  !*** ./resources/js/views/main/index.vue?vue&type=script&lang=js ***!
  \*******************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* reexport safe */ _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_index_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_0__["default"])
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_index_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!../../../../node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./index.vue?vue&type=script&lang=js */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/views/main/index.vue?vue&type=script&lang=js");
 

/***/ }),

/***/ "./resources/js/views/main/index.vue?vue&type=template&id=8f59cd8a":
/*!*************************************************************************!*\
  !*** ./resources/js/views/main/index.vue?vue&type=template&id=8f59cd8a ***!
  \*************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   render: () => (/* reexport safe */ _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_templateLoader_js_ruleSet_1_rules_2_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_index_vue_vue_type_template_id_8f59cd8a__WEBPACK_IMPORTED_MODULE_0__.render)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_templateLoader_js_ruleSet_1_rules_2_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_index_vue_vue_type_template_id_8f59cd8a__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!../../../../node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!../../../../node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./index.vue?vue&type=template&id=8f59cd8a */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/views/main/index.vue?vue&type=template&id=8f59cd8a");


/***/ })

}]);