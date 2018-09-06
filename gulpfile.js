const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */

elixir((mix) => {
    mix.sass('app.scss')
       .webpack('app.js');

    mix.styles([
        '../theme/css/bootstrap.min.css',
        '../theme/css/themify-icons.css',
        '../theme/css/jquery.mCustomScrollbar.css',
        '../theme/css/animate.css',
        '../theme/css/owl.carousel.css',
        '../theme/css/lightbox.css',
        '../theme/css/style.css',
        '../theme/css/responsive.css',
        '../theme/css/custom.css',
        '../theme/css/colors/switch.css',
    ], 'public/css');

    mix.scripts([
        '../theme/js/jquery-2.1.4.min.js',
        '../theme/js/bootstrap.min.js',
        '../theme/js/jquery.isotope.min.js',
        '../theme/js/jquery.ascensor.js',
        '../theme/js/jquery.mCustomScrollbar.concat.min.js',
        '../theme/js/lightbox.js',
        '../theme/js/waypoints.min.js',
        '../theme/js/jquery.counterup.min.js',
        '../theme/js/owl.carousel.min.js',
        '../theme/js/switch.js',
        '../theme/js/script.js',
        '../theme/js/function.js',
    ], 'public/js');
});
