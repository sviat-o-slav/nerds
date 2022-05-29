const mix = require('laravel-mix');
mix.webpackConfig({ stats: { children: true, }, });
mix.js('resources/js/app.js', 'public/js');
mix.sass('resources/sass/app.scss', '/public/css');
mix.browserSync({ proxy: 'localhost', open: false });
