const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(mix => {
    mix.sass(
        './resources/assets/frontend/sass/app.scss',
        './public/frontend/css'
    );
    mix.webpack(
        './resources/assets/frontend/js/app.js',
        './public/frontend/js'
    );
    mix.browserSync({
            files: ['app/**/*', 'public/**/*', 'resources/views/**/*'],
            port: 5000,
            proxy: 'dev.laravel53-vuejs2.com' //ex: dev.laravel53-vuejs2.com
        });
});
