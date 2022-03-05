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

mix.react()
	.js([
        'resources/js/app.js',
        'resources/js/bootstrap/bootstrap.bundle.min.js',
        'resources/js/jquery/jquery.min.js',
        'resources/js/jquery/jquery.easing.min.js',
        'resources/js/theme/sb-admin-2.min.js'
    ], 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
	.styles('resources/css/*.css', 'public/css/all.css');
