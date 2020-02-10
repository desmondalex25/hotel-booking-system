var gulp = require('gulp');
//
var elixir = require('laravel-elixir');

// elixir(function (mix) {
//     mix.js([
//         'app.js'] )
// });

elixir(mix => {
    mix.sass('app.scss')
        .webpack('app.js');
});

//
// elixir(function(mix) {
//     mix.styles(['base.css', 'customized.css'])
//         .scripts(['app.js', 'code.js']);
// });