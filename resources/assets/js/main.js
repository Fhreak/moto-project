Vue.component('products', require('./components/Products.vue'));
Vue.component('imagepreview', require('./components/ImagePreview.vue'));

var showLoginSpinner = new Vue ({

  el: '#loginButton',

  data: {
    spinner: false
  }

});

var productsViewer = new Vue({

  el: '#app-products',
  
});
