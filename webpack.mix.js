let mix = require('laravel-mix');

mix.js('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css')
    .js('resources/assets/js/ie10-viewport-bug-workaround.js', 'public/js')
    .copy([
        'node_modules/bootstrap-sass/assets/fonts/bootstrap/',
    ], 'public/fonts')
    .sourceMaps();
