/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};

/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {

/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId])
/******/ 			return installedModules[moduleId].exports;

/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};

/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);

/******/ 		// Flag the module as loaded
/******/ 		module.l = true;

/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}


/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;

/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;

/******/ 	// identity function for calling harmory imports with the correct context
/******/ 	__webpack_require__.i = function(value) { return value; };

/******/ 	// define getter function for harmory exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		Object.defineProperty(exports, name, {
/******/ 			configurable: false,
/******/ 			enumerable: true,
/******/ 			get: getter
/******/ 		});
/******/ 	};

/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};

/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };

/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";

/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 6);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ function(module, exports, __webpack_require__) {

var __vue_exports__, __vue_options__
var __vue_styles__ = {}

/* script */
__vue_exports__ = __webpack_require__(2)

/* template */
var __vue_template__ = __webpack_require__(5)
__vue_options__ = __vue_exports__ = __vue_exports__ || {}
if (
  typeof __vue_exports__.default === "object" ||
  typeof __vue_exports__.default === "function"
) {
if (Object.keys(__vue_exports__).some(function (key) { return key !== "default" && key !== "__esModule" })) {console.error("named exports are not supported in *.vue files.")}
__vue_options__ = __vue_exports__ = __vue_exports__.default
}
if (typeof __vue_options__ === "function") {
  __vue_options__ = __vue_options__.options
}
__vue_options__.__file = "C:\\Users\\ripley1\\Documents\\proyectos\\moto\\resources\\assets\\js\\components\\ImagePreview.vue"
__vue_options__.render = __vue_template__.render
__vue_options__.staticRenderFns = __vue_template__.staticRenderFns

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-5828ea02", __vue_options__)
  } else {
    hotAPI.reload("data-v-5828ea02", __vue_options__)
  }
})()}
if (__vue_options__.functional) {console.error("[vue-loader] ImagePreview.vue: functional components are not supported and should be defined in plain js files using render functions.")}

module.exports = __vue_exports__


/***/ },
/* 1 */
/***/ function(module, exports, __webpack_require__) {

var __vue_exports__, __vue_options__
var __vue_styles__ = {}

/* script */
__vue_exports__ = __webpack_require__(3)

/* template */
var __vue_template__ = __webpack_require__(4)
__vue_options__ = __vue_exports__ = __vue_exports__ || {}
if (
  typeof __vue_exports__.default === "object" ||
  typeof __vue_exports__.default === "function"
) {
if (Object.keys(__vue_exports__).some(function (key) { return key !== "default" && key !== "__esModule" })) {console.error("named exports are not supported in *.vue files.")}
__vue_options__ = __vue_exports__ = __vue_exports__.default
}
if (typeof __vue_options__ === "function") {
  __vue_options__ = __vue_options__.options
}
__vue_options__.__file = "C:\\Users\\ripley1\\Documents\\proyectos\\moto\\resources\\assets\\js\\components\\Products.vue"
__vue_options__.render = __vue_template__.render
__vue_options__.staticRenderFns = __vue_template__.staticRenderFns

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-289c0879", __vue_options__)
  } else {
    hotAPI.reload("data-v-289c0879", __vue_options__)
  }
})()}
if (__vue_options__.functional) {console.error("[vue-loader] Products.vue: functional components are not supported and should be defined in plain js files using render functions.")}

module.exports = __vue_exports__


/***/ },
/* 2 */
/***/ function(module, exports, __webpack_require__) {

"use strict";
//
//
//
//
//
//
//
//
//
//
//
//


/* harmony default export */ exports["default"] = {

  data: function data(){
    return {
      image: ''
    }
  },

  methods: {
    onFileChange: function onFileChange(e) {
      var files = e.target.files || e.dataTransfer.files;
      if (!files.length)
        return;
      this.createImage(files[0]);
    },
    createImage: function createImage(file) {
      var image = new Image();
      var reader = new FileReader();
      var vm = this;

      reader.onload = function (e) {
        vm.image = e.target.result;
      };
      reader.readAsDataURL(file);
    },
    removeImage: function (e) {
      this.image = '';
    }
  }

};



/***/ },
/* 3 */
/***/ function(module, exports, __webpack_require__) {

"use strict";
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//


/* harmony default export */ exports["default"] = {
  props: ['data'],

  mounted: function mounted(){
    this.fetchProductsData()
  },

  data: function data() {
    return {
        model: {},
      columns: {},
        query: {
                  page: 1,
                column: 'name',
             direction: 'asc',
              per_page: 10
              },
    }
  },

  methods: {

    disabledNextButton: function disabledNextButton(){
      if(this.model.next_page_url){
        return false;
      } else{
        return true;
      }

    },

    disabledPrevButton: function disabledPrevButton(){
      if(this.model.prev_page_url){
        return false;
      } else{
        return true;
      }
    },

    next: function next(){
      if(this.model.next_page_url){
        this.query.page++
        this.fetchProductsData()
      }
    },

    prev: function prev(){
      if(this.model.prev_page_url){
        this.query.page--
        this.fetchProductsData()
      }
    },

    toggleOrder: function toggleOrder(column){
      if(column === this.query.column){
        //Change direction
        if(this.query.direction === 'desc'){
          this.query.direction = 'asc'
        }else {
          this.query.direction = 'desc'
        }
      } else{
        this.query.column = column
        this.query.direction = 'asc'
      }
      this.fetchProductsData()
    },

    fetchProductsData: function fetchProductsData(){
      var this$1 = this;

      if(this.query.per_page === ''){
        this.query.per_page = this.query.per_page
      }
      this.$http.get(("getData?column=" + (this.query.column) + "&direction=" + (this.query.direction) + "&page=" + (this.query.page) + "&per_page=" + (this.query.per_page))).then(function (response){
        //succes callback
        Vue.set(this$1.$data, 'model', response.data.model);
        Vue.set(this$1.$data, 'columns', response.data.columns);
      }, function (response) {
        //error calback
        console.log(response);
      });
    }

  },
};



/***/ },
/* 4 */
/***/ function(module, exports, __webpack_require__) {

module.exports={render:function (){var _vm=this;var _h=_vm.$createElement;
  return _h('div', {
    staticClass: "row"
  }, [_h('div', {
    staticClass: "col-lg-12"
  }, [_h('div', {
    staticClass: "ibox float-e-margins"
  }, [_h('div', {
    staticClass: "ibox-title"
  }, [_h('span', [_vm._s(_vm.data)])]), " ", _h('div', {
    staticClass: "ibox-content"
  }, [_h('div', {}, [_h('span', ["Filas por pagina"]), " ", _h('input', {
    directives: [{
      name: "model",
      rawName: "v-model.trim",
      value: (_vm.query.per_page),
      expression: "query.per_page",
      modifiers: {
        "trim": true
      }
    }],
    attrs: {
      "type": "text"
    },
    domProps: {
      "value": _vm._s(_vm.query.per_page)
    },
    on: {
      "keyup": function($event) {
        if (_vm._k($event.keyCode, "enter", 13)) { return; }
        _vm.fetchProductsData()
      },
      "input": function($event) {
        if ($event.target.composing) { return; }
        _vm.query.per_page = $event.target.value.trim()
      }
    }
  })]), " ", _h('div', {
    staticClass: "table-responsive"
  }, [_h('table', {
    staticClass: "table table-bordered"
  }, [_h('thead', [_h('tr', [_h('th', {
    on: {
      "click": function($event) {
        _vm.toggleOrder(_vm.columns[0])
      }
    }
  }, [_h('span', ["Nombre"]), " ", (_vm.columns[0] === _vm.query.column) ? _h('span', [(_vm.query.direction === 'desc') ? _h('i', {
    staticClass: "fa fa-long-arrow-down pull-right"
  }) : _h('i', {
    staticClass: "fa fa-long-arrow-up pull-right"
  }), " "]) : _vm._e()]), " ", _h('th', {
    on: {
      "click": function($event) {
        _vm.toggleOrder(_vm.columns[1])
      }
    }
  }, [_h('span', ["Valor Unit."]), " ", (_vm.columns[1] === _vm.query.column) ? _h('span', [(_vm.query.direction === 'desc') ? _h('i', {
    staticClass: "fa fa-long-arrow-down pull-right"
  }) : _h('i', {
    staticClass: "fa fa-long-arrow-up pull-right"
  }), " "]) : _vm._e()]), " ", _h('th', {
    on: {
      "click": function($event) {
        _vm.toggleOrder(_vm.columns[2])
      }
    }
  }, [_h('span', ["Stock"]), " ", (_vm.columns[2] === _vm.query.column) ? _h('span', [(_vm.query.direction === 'desc') ? _h('i', {
    staticClass: "fa fa-long-arrow-down pull-right"
  }) : _h('i', {
    staticClass: "fa fa-long-arrow-up pull-right"
  }), " "]) : _vm._e()]), " ", _h('th', {
    on: {
      "click": function($event) {
        _vm.toggleOrder(_vm.columns[3])
      }
    }
  }, [_h('span', ["Marca"]), " ", (_vm.columns[3] === _vm.query.column) ? _h('span', [(_vm.query.direction === 'desc') ? _h('i', {
    staticClass: "fa fa-long-arrow-down pull-right"
  }) : _h('i', {
    staticClass: "fa fa-long-arrow-up pull-right"
  }), " "]) : _vm._e()]), " ", _h('th', {
    on: {
      "click": function($event) {
        _vm.toggleOrder(_vm.columns[4])
      }
    }
  }, [_h('span', ["Modelo"]), " ", (_vm.columns[4] === _vm.query.column) ? _h('span', [(_vm.query.direction === 'desc') ? _h('i', {
    staticClass: "fa fa-long-arrow-down pull-right"
  }) : _h('i', {
    staticClass: "fa fa-long-arrow-up pull-right"
  }), " "]) : _vm._e()]), " ", _h('th', {
    on: {
      "click": function($event) {
        _vm.toggleOrder(_vm.columns[5])
      }
    }
  }, [_h('span', ["Categoria"]), " ", (_vm.columns[5] === _vm.query.column) ? _h('span', [(_vm.query.direction === 'desc') ? _h('i', {
    staticClass: "fa fa-long-arrow-down pull-right"
  }) : _h('i', {
    staticClass: "fa fa-long-arrow-up pull-right"
  }), " "]) : _vm._e()]), " ", _h('th', {
    on: {
      "click": function($event) {
        _vm.toggleOrder(_vm.columns[6])
      }
    }
  }, [_h('span', ["Proveedor"]), " ", (_vm.columns[6] === _vm.query.column) ? _h('span', [(_vm.query.direction === 'desc') ? _h('i', {
    staticClass: "fa fa-long-arrow-down pull-right"
  }) : _h('i', {
    staticClass: "fa fa-long-arrow-up pull-right"
  }), " "]) : _vm._e()])])]), " ", _h('tbody', [_vm._l((_vm.model.data), function(row) {
    return _h('tr', [_vm._l((row), function(value, key) {
      return _h('td', {
        key: value
      }, [_h('span', [_vm._s(value)])])
    })])
  })])]), " ", _h('div', {}, [_h('span', ["Mostrando " + _vm._s(_vm.model.from) + " - " + _vm._s(_vm.model.to) + " de " + _vm._s(_vm.model.total) + " resultados."]), " ", _h('div', {
    staticClass: "pull-right"
  }, [_h('button', {
    attrs: {
      "disabled": _vm.disabledPrevButton()
    },
    on: {
      "click": function($event) {
        _vm.prev()
      }
    }
  }, [_h('i', {
    staticClass: "fa fa-chevron-left"
  })]), " ", _h('button', {
    attrs: {
      "disabled": _vm.disabledNextButton()
    },
    on: {
      "click": function($event) {
        _vm.next()
      }
    }
  }, [_h('i', {
    staticClass: "fa fa-chevron-right"
  })])])])])])])])])
},staticRenderFns: []}
if (false) {
  module.hot.accept()
  if (module.hot.data) {
     require("vue-hot-reload-api").rerender("data-v-289c0879", module.exports)
  }
}

/***/ },
/* 5 */
/***/ function(module, exports, __webpack_require__) {

module.exports={render:function (){var _vm=this;var _h=_vm.$createElement;
  return (!_vm.image) ? _h('div', [_h('input', {
    attrs: {
      "type": "file",
      "name": "file[]",
      "multiple": ""
    },
    on: {
      "change": _vm.onFileChange
    }
  })]) : _h('div', [_h('img', {
    staticClass: "img-pre",
    attrs: {
      "src": _vm.image
    }
  }), " ", _h('button', {
    on: {
      "click": _vm.removeImage
    }
  }, ["Remover imagen"])])
},staticRenderFns: []}
if (false) {
  module.hot.accept()
  if (module.hot.data) {
     require("vue-hot-reload-api").rerender("data-v-5828ea02", module.exports)
  }
}

/***/ },
/* 6 */
/***/ function(module, exports, __webpack_require__) {

Vue.component('products', __webpack_require__(1));
Vue.component('imagepreview', __webpack_require__(0));

var showLoginSpinner = new Vue ({

  el: '#loginButton',

  data: {
    spinner: false
  }

});

var productsViewer = new Vue({

  el: '#app-products',
  
});


/***/ }
/******/ ]);