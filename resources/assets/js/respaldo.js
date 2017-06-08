import Products from './components/Products.vue';

var showLoginSpinner = new Vue ({

  el: '#loginButton',

  data: {
    spinner: false
  }

});

var productsViewer = new Vue({

  el: '#app-products',

  components: {
    Products
  }

});
