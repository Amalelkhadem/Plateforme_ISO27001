const mix = require('laravel-mix');

mix.react('resources/react-app/src/index.js', 'public/react-app/js')
    .sass('resources/react-app/src/styles/app.scss', 'public/react-app/css');