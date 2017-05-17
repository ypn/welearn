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
   //.sass('resources/assets/sass/bootstrap.scss', 'public/css')
   //Live stream module assets
  //  .js('Modules/Livestream/Assets/js/livestream.js','public/modules/livestream/js')
  //  .react('Modules/Livestream/Assets/js/components/Chat.jsx','public/modules/livestream/js/components')

   //Assets of module user
  //  .sass('Modules/User/Assets/sass/master.scss','public/modules/user/css')
  //  .js('Modules/User/Assets/build/js/user.master.js','public/modules/user/build/js')
   ;
