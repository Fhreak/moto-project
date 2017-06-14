Vue.component('products', require('./components/Products.vue'));
Vue.component('imagepreview', require('./components/ImagePreview.vue'));
Vue.component('uploadimagepreview', require('./components/UploadImagePreview.vue'));

var showLoginSpinner = new Vue ({

  el: '#loginButton',

  data: {
    spinner: false
  }

});

var productsViewer = new Vue({

  el: '#app-products',

  data: {
  	formInputs: {},
  	formErrors: {}
  },

  methods: {
  	submitForm: function(e) {

  	  if(!e) e = window.event; 	//Add this line to work fine on Firefox navigator
  	  
	  var form = e.target; 		// or e.srcElemet; 
	  var action = form.action;
	  var csrfToken = form.querySelector('input[name="_token"]').value;

	  this.$http.post(action, this.formInputs, {
	    headers: {
	        'X-CSRF-TOKEN': csrfToken
	    }
	  })
	  .then(function() {
	        form.submit();
	  })
	  .catch(function (data, status, request) {
	    var errors = data.data;
	    this.formErrors = errors;
	  });
	}
  },
  
});

var imageForm = new Vue({

  el: '#image-form',

  data: {
  	formInputs: {},
  	formErrors: {}
  },

  methods: {
  	submitForm: function(e) {

  	  if(!e) e = window.event; 	//Add this line to work fine on Firefox navigator

	  var form = e.target; 		// or e.srcElemet; 
	  var action = form.action;
	  var csrfToken = form.querySelector('input[name="_token"]').value;

	  this.$http.post(action, this.formInputs, {
	    headers: {
	        'X-CSRF-TOKEN': csrfToken
	    }
	  })
	  .then(function() {
	        form.submit();
	  })
	  .catch(function (data, status, request) {
	    var errors = data.data;
	    this.formErrors = errors;
	  });
	}
  },
  
});