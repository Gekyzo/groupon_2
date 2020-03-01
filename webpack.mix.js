const mix = require('laravel-mix')

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

mix.js('resources/js/main.js', 'webroot/js')
    .sass('resources/sass/main.scss', 'webroot/css')
    .browserSync({
        proxy: 'local.ciropon.com',
        files: ['(src|templates|plugins)/**/*.php'],
        notify: false,
    })
