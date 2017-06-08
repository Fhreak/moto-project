const elixir = require('laravel-elixir');
var gulp = require('gulp');
var sass = require('gulp-sass');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */
elixir.config.sourcemaps = false;

elixir(mix => {
    var npmDir 	= 'node_modules/',
    	jsDir	= 'resources/assets/js/';

    	//mix.copy(npmDir + 'vue/dist/vue.js', jsDir);
    	//mix.copy(npmDir + 'vue-resource/dist/vue-resource.js', jsDir);

    	mix.scripts([
    		'vue.js',
    		'vue-resource.js'
    		], 'public/js/vendor.js');
        mix.webpack([
            'main.js'
            ], 'public/js/main.js');
        mix.sass([
            'customAdmin.scss',
            'toggleButton.scss'
          ], 'public/css/customAdmin.css');
});

/*elixir(mix => {
    mix.sass('app.scss')
       .webpack('main.js');
});*/
