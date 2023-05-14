const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

/*mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');*/
mix
    .sass('node_modules/bootstrap/scss/bootstrap.scss', 'storage/app/public/bootstrap/bootstrap.css')
    .scripts('node_modules/jquery/dist/jquery.js', 'storage/app/public/jquery/jquery.js')
    .scripts('node_modules/bootstrap/dist/js/bootstrap.bundle.js', 'storage/app/public/bootstrap/bootstrap.bundle.js')
