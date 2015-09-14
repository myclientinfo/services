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


//elixir(function(mix) {
//  mix.sass("app.scss", 'public/css/', {includePaths: [paths.bootstrap + 'stylesheets/']})
//    .copy(paths.bootstrap + 'fonts/bootstrap/**', 'public/fonts')
//    .scripts([
//      paths.jquery + "dist/jquery.js",
//      paths.bootstrap + "javascripts/bootstrap.js"
//    ], './', 'public/js/app.js');
//});

elixir(function(mix){
  //mix.copy(paths.bootstrap, );
  mix.sass('app.scss')
    .scripts([paths.jquery, paths.assets+'js/main.js'], 'public/js/main.js', './');
});

