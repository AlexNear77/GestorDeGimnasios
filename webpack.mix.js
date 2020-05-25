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

 //Eso es para que laravel mix adapte los que hagamos en app.js y app.scss
mix.js('resources/js/app.js', 'public/js').js('resources/js/sideBar.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css').sass('resources/sass/sideBar.scss', 'public/css');
//Esto es para que se actualize el proyecto cada vez que hacemos cambios 
//Al Ejecutar el comando npm run watch
mix.browserSync('http://127.0.0.1:8000/');

// Esto para que no tenga que hacer ctrl+shift+r para actualizar los cambios 
if(mix.inProduction){
    mix.version();
}