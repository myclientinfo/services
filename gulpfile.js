var elixir = require('laravel-elixir');

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

var paths = {
  'jquery': './node_modules/jquery/dist/jquery.min.js',
  'bootstrap': './node_modules/bootstrap-sass/assets/',
  'assets': './resources/assets/'
}

elixir(function(mix){
  //mix.copy(paths.bootstrap, );
  mix.sass('app.scss')
    .styles('ct-paper.css')
    .scripts([paths.jquery, paths.assets+'js/main.js'], 'public/js/main.js', './');
});

