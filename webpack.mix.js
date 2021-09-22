const mix = require('laravel-mix');

// mix.js('resources/js/app.js', 'public/js')
//     .postCss('resources/css/app.css', 'public/css', [
//         //
//     ]);

// home
mix.css('resources/css/app/*.css', 'public/css/app/app.css');
mix.combine(
    [
        'resources/css/app/*.css'
    ],
    'public/css/app/app.css');
