var elixir = require('laravel-elixir');

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

elixir(function(mix) {
    // Compile SASS
    mix.sass('app.scss', 'resources/assets/css');

    // Combine css files
    mix.styles([
        'app.css'
    ]);

    // Combine js files
    mix.scripts([
        'libs/jquery.min.js',
        'libs/bootstrap.min.js',
        'app.js'
    ]);

    mix.version(['public/css/all.css', 'public/js/all.js']);
});
