const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
mix.sass('resources/css/app.scss', 'public/css/merged.css')
mix.sass('resources/css/main.scss', 'public/css/main.css')
mix.css('resources/css/fontawesome/css/all.css', 'public/css/fontawesome/css/all.css')
