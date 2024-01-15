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

// App.js
mix.js('resources/js/app.js', 'public/js').version();

mix.sass('resources/sass/app.scss', 'public/css');

// Admin
mix.js('resources/js/admin/admin.js', 'public/js').version();

mix.sass('resources/sass/admin/admin.scss', 'public/css');

// React
mix.js('resources/react/pages/TestPage.js','public/js/').react().version();

mix.js('resources/react/pages/MyTasksPage', 'public/js/').react().version();
