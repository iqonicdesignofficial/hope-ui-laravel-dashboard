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

// mix.js('resources/js/app.js', 'public/js').postCss('resources/css/app.css', 'public/css', [
//     require('postcss-import'),
//     require('tailwindcss'),
//     require('autoprefixer'),
// ]);
mix.js('resources/js/libs.js', 'public/js/libs.min.js')
    .sass('resources/sass/libs.scss','public/css/libs.min.css')
    .sass('public/scss/hope-ui.scss', 'public/css')
    .sass('public/scss/custom.scss', 'public/css')
    .sass('public/scss/dark.scss', 'public/css')
    .sass('public/scss/rtl.scss', 'public/css')
    .sass('public/scss/customizer.scss', 'public/css')
    .options({
        processCssUrls: false
    });
