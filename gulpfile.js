var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */


elixir(function(mix){
    //mix.sass('app.scss');

    mix.styles([
    "normalize.css",
    "ripples.css",
    "material.css",
    "roboto.css"

    ])

    mix.scripts([
        "app.js"
    ])
    mix.version(["css/all.css","js/all.js"]);
});
