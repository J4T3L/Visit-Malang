const mix = require('laravel-mix');

mix.js('resources/js/carousel.js', 'public/js')
    .postCss('resources/css/style.css', 'public/css', [
        //
    ]);
mix.js('resources/js/carousel.js', 'public/js')
    .postCss('resources/css/styler.css', 'public/css', [
        //
    ]);