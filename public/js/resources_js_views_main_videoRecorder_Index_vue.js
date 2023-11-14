"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_views_main_videoRecorder_Index_vue"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/components/Categories.vue?vue&type=script&lang=js":
/*!****************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/components/Categories.vue?vue&type=script&lang=js ***!
  \****************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  name: "Categories"
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/views/main/videoRecorder/Index.vue?vue&type=script&lang=js":
/*!*************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/views/main/videoRecorder/Index.vue?vue&type=script&lang=js ***!
  \*************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _components_Categories__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../../components/Categories */ "./resources/js/components/Categories.vue");

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  name: "Index",
  components: {
    Categories: _components_Categories__WEBPACK_IMPORTED_MODULE_0__["default"]
  },
  cartCount: [],
  mounted: function mounted() {
    $(document).trigger('changed');
    this.getProducts();
    this.getFilterList();
  },
  data: function data() {
    return {
      products: [],
      popupProduct: null,
      filterList: [],
      channels: [],
      prices: [],
      pagination: []
    };
  },
  methods: {
    addToCompare: function addToCompare(id, count, title, image_url, price, description) {
      var compareList = localStorage.getItem('compareList');
      var newProduct = [{
        'id': id,
        'count': count,
        'title': title,
        'image_url': image_url,
        'price': price,
        'description': description
      }];
      if (!compareList) {
        localStorage.setItem('compareList', JSON.stringify(newProduct));
      } else {
        compareList = JSON.parse(compareList);
        compareList.forEach(function (productInWishlist) {
          if (productInWishlist.id === id) {
            newProduct = null;
          }
        });
        Array.prototype.push.apply(compareList, newProduct);
        localStorage.setItem('compareList', JSON.stringify(compareList));
        this.compareList = compareList;
      }
    },
    addToWishlist: function addToWishlist(id, count, title, image_url, price) {
      var wishlist = localStorage.getItem('wishlist');
      var newProduct = [{
        'id': id,
        'count': count,
        'title': title,
        'image_url': image_url,
        'price': price
      }];
      if (!wishlist) {
        localStorage.setItem('wishlist', JSON.stringify(newProduct));
      } else {
        wishlist = JSON.parse(wishlist);
        wishlist.forEach(function (productInWishlist) {
          if (productInWishlist.id === id) {
            newProduct = null;
          }
        });
        Array.prototype.push.apply(wishlist, newProduct);
        localStorage.setItem('wishlist', JSON.stringify(wishlist));
        this.wishlist = wishlist;
      }
    },
    addToCart: function addToCart(id, isSingle, title, image_url, price) {
      // Ваш код для добавления товара в корзину
      var qty = isSingle ? 1 : $('.qtyValue').val();
      var product = {
        id: id,
        qty: qty,
        title: title,
        image_url: image_url,
        price: price,
        subtotal: price * qty
      };
      this.$store.commit('addToCart', product);
      $('.qtyValue').val(1);
    },
    filterProducts: function filterProducts() {
      var prices = $('#priceRange').val();
      this.prices = prices.replace(/[\s+]|[$]/g, '').split('-');
      this.getProducts();
    },
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
    getProduct: function getProduct(id) {
      var _this2 = this;
      this.axios.get("api/recorder/".concat(id)).then(function (res) {
        _this2.popupProduct = res.data.data;
      })["finally"](function (v) {
        $(document).trigger('changed');
      });
    },
    getFilterList: function getFilterList() {
      var _this3 = this;
      this.axios.get("/api/recorder/filters").then(function (res) {
        _this3.filterList = res.data;
        //  Price Filter
        if ($("#price-range").length) {
          $("#price-range").slider({
            range: true,
            min: _this3.filterList.price.min,
            max: _this3.filterList.price.max,
            values: [_this3.filterList.price.min, _this3.filterList.price.max],
            slide: function slide(event, ui) {
              $("#priceRange").val("$" + ui.values[0] + " - $" + ui.values[1]);
            }
          });
          $("#priceRange").val("$" + $("#price-range").slider("values", 0) + " - $" + $("#price-range").slider("values", 1));
        }
      })["finally"](function (v) {
        $(document).trigger('changed');
      });
    }
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/components/Categories.vue?vue&type=template&id=8ceef672":
/*!********************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/components/Categories.vue?vue&type=template&id=8ceef672 ***!
  \********************************************************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   render: () => (/* binding */ render)
/* harmony export */ });
/* harmony import */ var vue__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! vue */ "./node_modules/vue/dist/vue.esm-bundler.js");

var _hoisted_1 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createStaticVNode)("<section class=\"product-categories-one pb-60\"><div class=\"container\"><div class=\"row\"><div class=\"col-xl-12 wow fadeInUp animated\"><div class=\"product-categories-one__inner\"><ul><li><a href=\"/recorder\" class=\"img-box\"><div class=\"inner\"><img src=\"/assets/images/shop/sistema.jpg\" alt=\"\"></div></a><div class=\"title\"><a href=\"/recorder\"><h6>Видеорегистраторы</h6></a></div></li><li><a href=\"/service\" class=\"img-box\"><div class=\"inner\"><img src=\"/assets/images/shop/yslygi.jpg    \" alt=\"\"></div></a><div class=\"title\"><a href=\"/service\"><h6>Услуги</h6></a></div></li><li><a href=\"/intercom\" class=\"img-box\"><div class=\"inner\"><img src=\"/assets/images/shop/sistema_domofon1.png\" alt=\"\"></div></a><div class=\"title\"><a href=\"/intercom\"><h6>Домофоны</h6></a></div></li><li><a href=\"/hdd\" class=\"img-box\"><div class=\"inner\"><img src=\"/assets/images/shop/sistema_hdd.jpg\" alt=\"\"></div></a><div class=\"title\"><a href=\"/hdd\"><h6>HDD Накопители</h6></a></div></li><li><a href=\"/pppoe\" class=\"img-box\"><div class=\"inner\"><img src=\"/assets/images/shop/sistema_kommytator.jpg\" alt=\"\"></div></a><div class=\"title\"><a href=\"/pppoe\"><h6>PPPOE Коммутаторы</h6></a></div></li><li><a href=\"/cable\" class=\"img-box\"><div class=\"inner\"><img src=\"/assets/images/shop/sistema_kabel.jpg\" alt=\"\"></div></a><div class=\"title\"><a href=\"/cable\"><h6>Кабель</h6></a></div></li></ul></div></div></div></div></section>", 1);
var _hoisted_2 = [_hoisted_1];
function render(_ctx, _cache, $props, $setup, $data, $options) {
  return (0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("div", null, _hoisted_2);
}

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/views/main/videoRecorder/Index.vue?vue&type=template&id=5e175725":
/*!*****************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/views/main/videoRecorder/Index.vue?vue&type=template&id=5e175725 ***!
  \*****************************************************************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   render: () => (/* binding */ render)
/* harmony export */ });
/* harmony import */ var vue__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! vue */ "./node_modules/vue/dist/vue.esm-bundler.js");

var _hoisted_1 = {
  "class": "overflow-hidden"
};
var _hoisted_2 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createStaticVNode)("<section class=\"breadcrumb-area\" style=\"background-image:url(/assets/images/inner-pages/shapka6.jpg);\"><div class=\"container\"><div class=\"row\"><div class=\"col-xl-12\"><div class=\"breadcrumb-content pb-60 text-center wow fadeInUp animated\"></div></div></div></div></section>", 1);
var _hoisted_3 = {
  "class": "product-grid pt-60 pb-120"
};
var _hoisted_4 = {
  "class": "container"
};
var _hoisted_5 = {
  "class": "row gx-4"
};
var _hoisted_6 = {
  "class": "col-xl-9 col-lg-8"
};
var _hoisted_7 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", {
  "class": "row"
}, null, -1 /* HOISTED */);
var _hoisted_8 = {
  "class": "row"
};
var _hoisted_9 = {
  "class": "col-12"
};
var _hoisted_10 = {
  "class": "tab-content",
  id: "pills-tabContent"
};
var _hoisted_11 = {
  "class": "tab-pane fade show active",
  id: "pills-grid",
  role: "tabpanel",
  "aria-labelledby": "pills-grid-tab"
};
var _hoisted_12 = {
  "class": "row"
};
var _hoisted_13 = {
  "class": "col-xl-4 col-lg-6 col-6"
};
var _hoisted_14 = {
  "class": "products-three-single w-100 mt-30"
};
var _hoisted_15 = {
  "class": "products-three-single-img"
};
var _hoisted_16 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("a", {
  href: "shop-details-3.html",
  "class": "d-block"
}, null, -1 /* HOISTED */);
var _hoisted_17 = ["src"];
var _hoisted_18 = ["src"];
var _hoisted_19 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", {
  "class": "products-grid-one__badge-box"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", {
  "class": "bg_base badge new"
}, "New")], -1 /* HOISTED */);
var _hoisted_20 = ["onClick"];
var _hoisted_21 = {
  "class": "products-grid__usefull-links"
};
var _hoisted_22 = ["onClick"];
var _hoisted_23 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("i", {
  "class": "flaticon-heart"
}, null, -1 /* HOISTED */);
var _hoisted_24 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", null, " wishlist", -1 /* HOISTED */);
var _hoisted_25 = ["onClick"];
var _hoisted_26 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("i", {
  "class": "flaticon-left-and-right-arrows"
}, null, -1 /* HOISTED */);
var _hoisted_27 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", null, " compare", -1 /* HOISTED */);
var _hoisted_28 = [_hoisted_26, _hoisted_27];
var _hoisted_29 = ["id"];
var _hoisted_30 = {
  key: 0,
  "class": "container"
};
var _hoisted_31 = {
  "class": "row justify-content-between align-items-center"
};
var _hoisted_32 = {
  "class": "col-lg-6"
};
var _hoisted_33 = {
  "class": "quick-view__left-content"
};
var _hoisted_34 = {
  "class": "tabs"
};
var _hoisted_35 = {
  "class": "popup-product-thumb-box"
};
var _hoisted_36 = {
  "class": "tab-nav popup-product-thumb"
};
var _hoisted_37 = ["href"];
var _hoisted_38 = ["src"];
var _hoisted_39 = {
  "class": "popup-product-main-image-box"
};
var _hoisted_40 = ["id"];
var _hoisted_41 = {
  "class": "popup-product-single-image"
};
var _hoisted_42 = ["src"];
var _hoisted_43 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("button", {
  "class": "prev"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("i", {
  "class": "flaticon-back"
})], -1 /* HOISTED */);
var _hoisted_44 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("button", {
  "class": "next"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("i", {
  "class": "flaticon-next"
})], -1 /* HOISTED */);
var _hoisted_45 = {
  "class": "col-lg-6"
};
var _hoisted_46 = {
  "class": "popup-right-content"
};
var _hoisted_47 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createStaticVNode)("<div class=\"ratting\"><i class=\"flaticon-star\"></i> <i class=\"flaticon-star\"></i> <i class=\"flaticon-star\"></i><i class=\"flaticon-star\"></i> <i class=\"flaticon-star\"></i><span>(112)</span></div>", 1);
var _hoisted_48 = {
  "class": "text"
};
var _hoisted_49 = {
  "class": "price"
};
var _hoisted_50 = {
  "class": "add-product"
};
var _hoisted_51 = {
  style: {
    "font-weight": "normal"
  }
};
var _hoisted_52 = {
  "class": "button-group"
};
var _hoisted_53 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createStaticVNode)("<div class=\"qtySelector text-center\"><span class=\"decreaseQty\"><i class=\"flaticon-minus\"></i></span> <input type=\"number\" class=\"qtyValue\" value=\"1\"><span class=\"increaseQty\"><i class=\"flaticon-plus\"></i></span></div>", 1);
var _hoisted_54 = ["onClick"];
var _hoisted_55 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createStaticVNode)("<div class=\"payment-method\"><a href=\"#0\"><img src=\"/assets/images/payment_method/method_1.png\" alt=\"\"></a><a href=\"#0\"><img src=\"/assets/images/payment_method/method_2.png\" alt=\"\"></a> <a href=\"#0\"><img src=\"/assets/images/payment_method/method_3.png\" alt=\"\"></a><a href=\"#0\"><img src=\"/assets/images/payment_method/method_4.png\" alt=\"\"></a></div>", 1);
var _hoisted_56 = {
  "class": "products-three-single-content text-center"
};
var _hoisted_57 = {
  key: 0,
  "class": "row"
};
var _hoisted_58 = {
  "class": "col-12 d-flex justify-content-center wow fadeInUp animated"
};
var _hoisted_59 = {
  "class": "pagination text-center"
};
var _hoisted_60 = {
  key: 0,
  "class": "next"
};
var _hoisted_61 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("i", {
  "class": "flaticon-left-arrows",
  "aria-hidden": "true"
}, null, -1 /* HOISTED */);
var _hoisted_62 = [_hoisted_61];
var _hoisted_63 = ["onClick"];
var _hoisted_64 = {
  key: 1
};
var _hoisted_65 = {
  key: 1,
  "class": "next"
};
var _hoisted_66 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("i", {
  "class": "flaticon-next-1",
  "aria-hidden": "true"
}, null, -1 /* HOISTED */);
var _hoisted_67 = [_hoisted_66];
var _hoisted_68 = {
  "class": "col-xl-3 col-lg-4"
};
var _hoisted_69 = {
  "class": "shop-grid-sidebar"
};
var _hoisted_70 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("button", {
  "class": "remove-sidebar d-lg-none d-block"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("i", {
  "class": "flaticon-cross"
})], -1 /* HOISTED */);
var _hoisted_71 = {
  "class": "sidebar-holder"
};
var _hoisted_72 = {
  "class": "single-sidebar-box mt-30 wow fadeInUp animated"
};
var _hoisted_73 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("h4", null, "Каналы", -1 /* HOISTED */);
var _hoisted_74 = {
  "class": "checkbox-item"
};
var _hoisted_75 = {
  "class": "form-group"
};
var _hoisted_76 = ["value", "id"];
var _hoisted_77 = ["for"];
var _hoisted_78 = {
  "class": "single-sidebar-box mt-30 wow fadeInUp animated"
};
var _hoisted_79 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("h4", null, "Фильтр по цене", -1 /* HOISTED */);
var _hoisted_80 = {
  "class": "slider-box"
};
var _hoisted_81 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", {
  id: "price-range",
  "class": "slider"
}, null, -1 /* HOISTED */);
var _hoisted_82 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", {
  "class": "output-price"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("label", {
  "for": "priceRange"
}, "Цена:"), /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createTextVNode)(), /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("input", {
  type: "text",
  id: "priceRange",
  readonly: ""
})], -1 /* HOISTED */);

function render(_ctx, _cache, $props, $setup, $data, $options) {
  var _component_categories = (0,vue__WEBPACK_IMPORTED_MODULE_0__.resolveComponent)("categories");
  var _component_router_link = (0,vue__WEBPACK_IMPORTED_MODULE_0__.resolveComponent)("router-link");
  return (0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("div", null, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("main", _hoisted_1, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)("Start Breadcrumb Style2"), _hoisted_2, (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)("End Breadcrumb Style2"), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)("Start Product Categories One"), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createVNode)(_component_categories), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)("End Product Categories One"), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)("Start product-grid"), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_3, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_4, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_5, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_6, [_hoisted_7, (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_8, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_9, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_10, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_11, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_12, [((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(true), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)(vue__WEBPACK_IMPORTED_MODULE_0__.Fragment, null, (0,vue__WEBPACK_IMPORTED_MODULE_0__.renderList)($data.products, function (product) {
    return (0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("div", _hoisted_13, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_14, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_15, [_hoisted_16, (0,vue__WEBPACK_IMPORTED_MODULE_0__.createVNode)(_component_router_link, {
      to: {
        name: 'recorder.show',
        params: {
          id: product.id
        }
      }
    }, {
      "default": (0,vue__WEBPACK_IMPORTED_MODULE_0__.withCtx)(function () {
        return [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("img", {
          src: product.image_url,
          "class": "first-img",
          alt: ""
        }, null, 8 /* PROPS */, _hoisted_17), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("img", {
          src: product.image_url,
          alt: "",
          "class": "hover-img"
        }, null, 8 /* PROPS */, _hoisted_18)];
      }),
      _: 2 /* DYNAMIC */
    }, 1032 /* PROPS, DYNAMIC_SLOTS */, ["to"]), _hoisted_19, (0,vue__WEBPACK_IMPORTED_MODULE_0__.createTextVNode)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("a", {
      onClick: (0,vue__WEBPACK_IMPORTED_MODULE_0__.withModifiers)(function ($event) {
        return $options.addToCart(product.id, true, product.title, product.image_url, product.price);
      }, ["prevent"]),
      href: "cart.html",
      "class": "addcart btn--primary style2"
    }, " Add To Cart ", 8 /* PROPS */, _hoisted_20), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_21, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("ul", null, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("li", null, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("a", {
      onClick: (0,vue__WEBPACK_IMPORTED_MODULE_0__.withModifiers)(function ($event) {
        return $options.addToWishlist(product.id, product.count, product.title, product.image_url, product.price);
      }, ["prevent"]),
      href: "wishlist"
    }, [_hoisted_23, (0,vue__WEBPACK_IMPORTED_MODULE_0__.createTextVNode)(), _hoisted_24], 8 /* PROPS */, _hoisted_22)]), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("li", null, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("a", {
      onClick: (0,vue__WEBPACK_IMPORTED_MODULE_0__.withModifiers)(function ($event) {
        return $options.addToCompare(product.id, product.count, product.title, product.image_url, product.price, product.description);
      }, ["prevent"])
    }, _hoisted_28, 8 /* PROPS */, _hoisted_25)])])])]), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", {
      id: "popup".concat(product.id),
      "class": "product-gird__quick-view-popup mfp-hide"
    }, [$data.popupProduct ? ((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("div", _hoisted_30, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_31, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_32, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_33, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_34, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_35, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("ul", null, [((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(true), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)(vue__WEBPACK_IMPORTED_MODULE_0__.Fragment, null, (0,vue__WEBPACK_IMPORTED_MODULE_0__.renderList)($data.popupProduct, function (cameraImage) {
      return (0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("li", _hoisted_36, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("a", {
        href: "#tabb1".concat(cameraImage.id)
      }, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("img", {
        src: cameraImage.image_url,
        alt: ""
      }, null, 8 /* PROPS */, _hoisted_38)], 8 /* PROPS */, _hoisted_37)]);
    }), 256 /* UNKEYED_FRAGMENT */))])]), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_39, [((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(true), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)(vue__WEBPACK_IMPORTED_MODULE_0__.Fragment, null, (0,vue__WEBPACK_IMPORTED_MODULE_0__.renderList)($data.popupProduct, function (cameraImage) {
      return (0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("div", {
        id: "tabb1".concat(cameraImage.id),
        "class": "tab-item popup-product-image"
      }, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_41, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("img", {
        src: cameraImage.image_url,
        alt: ""
      }, null, 8 /* PROPS */, _hoisted_42)])], 8 /* PROPS */, _hoisted_40);
    }), 256 /* UNKEYED_FRAGMENT */)), _hoisted_43, (0,vue__WEBPACK_IMPORTED_MODULE_0__.createTextVNode)(), _hoisted_44])])])]), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_45, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_46, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("h3", null, (0,vue__WEBPACK_IMPORTED_MODULE_0__.toDisplayString)($data.popupProduct.title), 1 /* TEXT */), _hoisted_47, (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("p", _hoisted_48, (0,vue__WEBPACK_IMPORTED_MODULE_0__.toDisplayString)($data.popupProduct.description), 1 /* TEXT */), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_49, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("h2", null, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createTextVNode)("$" + (0,vue__WEBPACK_IMPORTED_MODULE_0__.toDisplayString)($data.popupProduct.price) + " ", 1 /* TEXT */), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("del", null, (0,vue__WEBPACK_IMPORTED_MODULE_0__.toDisplayString)($data.popupProduct.old_price), 1 /* TEXT */)])]), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_50, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("h6", _hoisted_51, "В наличии: " + (0,vue__WEBPACK_IMPORTED_MODULE_0__.toDisplayString)($data.popupProduct.count), 1 /* TEXT */), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_52, [_hoisted_53, (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("button", {
      onClick: (0,vue__WEBPACK_IMPORTED_MODULE_0__.withModifiers)(function ($event) {
        return $options.addToCart(product.id, true, product.title, product.image_url, product.price);
      }, ["prevent"]),
      "class": "btn--primary"
    }, " Add to Cart ", 8 /* PROPS */, _hoisted_54)])]), _hoisted_55])])])])) : (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)("v-if", true)], 8 /* PROPS */, _hoisted_29), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_56, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", null, (0,vue__WEBPACK_IMPORTED_MODULE_0__.toDisplayString)(product.category.title), 1 /* TEXT */), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("h5", null, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createVNode)(_component_router_link, {
      to: {
        name: 'recorder.show',
        params: {
          id: product.id
        }
      }
    }, {
      "default": (0,vue__WEBPACK_IMPORTED_MODULE_0__.withCtx)(function () {
        return [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createTextVNode)((0,vue__WEBPACK_IMPORTED_MODULE_0__.toDisplayString)(product.title), 1 /* TEXT */)];
      }),

      _: 2 /* DYNAMIC */
    }, 1032 /* PROPS, DYNAMIC_SLOTS */, ["to"])]), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("p", null, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("del", null, (0,vue__WEBPACK_IMPORTED_MODULE_0__.toDisplayString)(product.old_price), 1 /* TEXT */), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createTextVNode)("$ " + (0,vue__WEBPACK_IMPORTED_MODULE_0__.toDisplayString)(product.price), 1 /* TEXT */)])])])]);
  }), 256 /* UNKEYED_FRAGMENT */))])])])])]), $data.pagination.last_page > 1 ? ((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("div", _hoisted_57, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_58, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("ul", _hoisted_59, [$data.pagination.current_page !== 1 ? ((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("li", _hoisted_60, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("a", {
    onClick: _cache[0] || (_cache[0] = (0,vue__WEBPACK_IMPORTED_MODULE_0__.withModifiers)(function ($event) {
      return $options.getProducts($data.pagination.current_page - 1);
    }, ["prevent"])),
    href: "#0"
  }, _hoisted_62)])) : (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)("v-if", true), ((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(true), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)(vue__WEBPACK_IMPORTED_MODULE_0__.Fragment, null, (0,vue__WEBPACK_IMPORTED_MODULE_0__.renderList)($data.pagination.links, function (link) {
    return (0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("li", null, [Number(link.label) && $data.pagination.current_page - link.label < 2 && $data.pagination.current_page - link.label > -2 || Number(link.label) === 1 || Number(link.label) === $data.pagination.last_page ? ((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("a", {
      key: 0,
      onClick: (0,vue__WEBPACK_IMPORTED_MODULE_0__.withModifiers)(function ($event) {
        return $options.getProducts(link.label);
      }, ["prevent"]),
      "class": (0,vue__WEBPACK_IMPORTED_MODULE_0__.normalizeClass)(link.active ? 'active' : ''),
      href: "#0"
    }, (0,vue__WEBPACK_IMPORTED_MODULE_0__.toDisplayString)(link.label), 11 /* TEXT, CLASS, PROPS */, _hoisted_63)) : (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)("v-if", true), Number(link.label) && $data.pagination.current_page !== 3 && $data.pagination.current_page - link.label === 2 || Number(link.label) && $data.pagination.current_page !== $data.pagination.last_page - 2 && $data.pagination.current_page - link.label === -2 ? ((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("a", _hoisted_64, "...")) : (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)("v-if", true)]);
  }), 256 /* UNKEYED_FRAGMENT */)), $data.pagination.current_page !== $data.pagination.last_page ? ((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("li", _hoisted_65, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("a", {
    onClick: _cache[1] || (_cache[1] = (0,vue__WEBPACK_IMPORTED_MODULE_0__.withModifiers)(function ($event) {
      return $options.getProducts($data.pagination.current_page + 1);
    }, ["prevent"])),
    href: "#0"
  }, _hoisted_67)])) : (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)("v-if", true)])])])) : (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)("v-if", true)]), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_68, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_69, [_hoisted_70, (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_71, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_72, [_hoisted_73, (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_74, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("form", null, [((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(true), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)(vue__WEBPACK_IMPORTED_MODULE_0__.Fragment, null, (0,vue__WEBPACK_IMPORTED_MODULE_0__.renderList)($data.filterList.channels, function (channel) {
    return (0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("div", _hoisted_75, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.withDirectives)((0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("input", {
      value: channel.id,
      "onUpdate:modelValue": _cache[2] || (_cache[2] = function ($event) {
        return $data.channels = $event;
      }),
      type: "checkbox",
      id: channel.id
    }, null, 8 /* PROPS */, _hoisted_76), [[vue__WEBPACK_IMPORTED_MODULE_0__.vModelCheckbox, $data.channels]]), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createTextVNode)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("label", {
      "for": channel.id
    }, (0,vue__WEBPACK_IMPORTED_MODULE_0__.toDisplayString)(channel.title) + " Канальный", 9 /* TEXT, PROPS */, _hoisted_77)]);
  }), 256 /* UNKEYED_FRAGMENT */))])])]), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_78, [_hoisted_79, (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_80, [_hoisted_81, _hoisted_82, (0,vue__WEBPACK_IMPORTED_MODULE_0__.createTextVNode)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("button", {
    onClick: _cache[3] || (_cache[3] = (0,vue__WEBPACK_IMPORTED_MODULE_0__.withModifiers)(function () {
      return $options.filterProducts && $options.filterProducts.apply($options, arguments);
    }, ["prevent"])),
    "class": "filterbtn",
    type: "submit"
  }, " Фильтр ")])])])])])])])]), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)("End product-grid")])]);
}

/***/ }),

/***/ "./resources/js/components/Categories.vue":
/*!************************************************!*\
  !*** ./resources/js/components/Categories.vue ***!
  \************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _Categories_vue_vue_type_template_id_8ceef672__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Categories.vue?vue&type=template&id=8ceef672 */ "./resources/js/components/Categories.vue?vue&type=template&id=8ceef672");
/* harmony import */ var _Categories_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Categories.vue?vue&type=script&lang=js */ "./resources/js/components/Categories.vue?vue&type=script&lang=js");
/* harmony import */ var C_Users_Home_Desktop_CamStore_node_modules_vue_loader_dist_exportHelper_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./node_modules/vue-loader/dist/exportHelper.js */ "./node_modules/vue-loader/dist/exportHelper.js");




;
const __exports__ = /*#__PURE__*/(0,C_Users_Home_Desktop_CamStore_node_modules_vue_loader_dist_exportHelper_js__WEBPACK_IMPORTED_MODULE_2__["default"])(_Categories_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_1__["default"], [['render',_Categories_vue_vue_type_template_id_8ceef672__WEBPACK_IMPORTED_MODULE_0__.render],['__file',"resources/js/components/Categories.vue"]])
/* hot reload */
if (false) {}


/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (__exports__);

/***/ }),

/***/ "./resources/js/views/main/videoRecorder/Index.vue":
/*!*********************************************************!*\
  !*** ./resources/js/views/main/videoRecorder/Index.vue ***!
  \*********************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _Index_vue_vue_type_template_id_5e175725__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Index.vue?vue&type=template&id=5e175725 */ "./resources/js/views/main/videoRecorder/Index.vue?vue&type=template&id=5e175725");
/* harmony import */ var _Index_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Index.vue?vue&type=script&lang=js */ "./resources/js/views/main/videoRecorder/Index.vue?vue&type=script&lang=js");
/* harmony import */ var C_Users_Home_Desktop_CamStore_node_modules_vue_loader_dist_exportHelper_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./node_modules/vue-loader/dist/exportHelper.js */ "./node_modules/vue-loader/dist/exportHelper.js");




;
const __exports__ = /*#__PURE__*/(0,C_Users_Home_Desktop_CamStore_node_modules_vue_loader_dist_exportHelper_js__WEBPACK_IMPORTED_MODULE_2__["default"])(_Index_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_1__["default"], [['render',_Index_vue_vue_type_template_id_5e175725__WEBPACK_IMPORTED_MODULE_0__.render],['__file',"resources/js/views/main/videoRecorder/Index.vue"]])
/* hot reload */
if (false) {}


/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (__exports__);

/***/ }),

/***/ "./resources/js/components/Categories.vue?vue&type=script&lang=js":
/*!************************************************************************!*\
  !*** ./resources/js/components/Categories.vue?vue&type=script&lang=js ***!
  \************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* reexport safe */ _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_Categories_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_0__["default"])
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_Categories_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!../../../node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./Categories.vue?vue&type=script&lang=js */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/components/Categories.vue?vue&type=script&lang=js");
 

/***/ }),

/***/ "./resources/js/views/main/videoRecorder/Index.vue?vue&type=script&lang=js":
/*!*********************************************************************************!*\
  !*** ./resources/js/views/main/videoRecorder/Index.vue?vue&type=script&lang=js ***!
  \*********************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* reexport safe */ _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_Index_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_0__["default"])
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_Index_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!../../../../../node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./Index.vue?vue&type=script&lang=js */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/views/main/videoRecorder/Index.vue?vue&type=script&lang=js");
 

/***/ }),

/***/ "./resources/js/components/Categories.vue?vue&type=template&id=8ceef672":
/*!******************************************************************************!*\
  !*** ./resources/js/components/Categories.vue?vue&type=template&id=8ceef672 ***!
  \******************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   render: () => (/* reexport safe */ _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_templateLoader_js_ruleSet_1_rules_2_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_Categories_vue_vue_type_template_id_8ceef672__WEBPACK_IMPORTED_MODULE_0__.render)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_templateLoader_js_ruleSet_1_rules_2_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_Categories_vue_vue_type_template_id_8ceef672__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!../../../node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!../../../node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./Categories.vue?vue&type=template&id=8ceef672 */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/components/Categories.vue?vue&type=template&id=8ceef672");


/***/ }),

/***/ "./resources/js/views/main/videoRecorder/Index.vue?vue&type=template&id=5e175725":
/*!***************************************************************************************!*\
  !*** ./resources/js/views/main/videoRecorder/Index.vue?vue&type=template&id=5e175725 ***!
  \***************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   render: () => (/* reexport safe */ _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_templateLoader_js_ruleSet_1_rules_2_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_Index_vue_vue_type_template_id_5e175725__WEBPACK_IMPORTED_MODULE_0__.render)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_templateLoader_js_ruleSet_1_rules_2_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_Index_vue_vue_type_template_id_5e175725__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!../../../../../node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!../../../../../node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./Index.vue?vue&type=template&id=5e175725 */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/views/main/videoRecorder/Index.vue?vue&type=template&id=5e175725");


/***/ })

}]);