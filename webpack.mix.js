const { mix } = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   //Live stream module assets
   .js('Modules/Livestream/Assets/js/livestream.js','public/modules/livestream/js')
   .react('Modules/Livestream/Assets/js/components/Chat.jsx','public/modules/livestream/js/components');
   ;
