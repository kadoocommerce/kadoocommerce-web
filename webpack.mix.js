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

mix
    .sass('resources/assets/sass/app.scss', 'public/css')
    .sass('resources/assets/sass/auth.scss', 'public/css')
    .less('resources/assets/less/style.less', 'public/css')
    .less('resources/assets/less/colors/green.less', 'public/css')
    .js('resources/assets/js/kadoo.js', 'public/js')
    .js('resources/assets/js/admin.js', 'public/js')
    .copy('resources/assets/images', 'public/images')
    .version();
