const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */
let productionSourceMaps = false;

mix

    // Javascript add
    .scripts([
        'resources/js/variables.js',
        'resources/js/ajaxCEP.js',
        'resources/js/ajaxName.js',
        'resources/js/ajaxRef.js',
        'resources/js/ajaxAdd.js',
        'resources/js/ajaxRemove.js',
    ],'public/site/js/ajax.js')
    .scripts('node_modules/bootstrap/dist/js/bootstrap.js','public/site/js/bootstrap.js').sourceMaps(productionSourceMaps, 'source-map')
    .scripts('node_modules/jquery/dist/jquery.js','public/site/js/jquery.js')
    .scripts('node_modules/axios/dist/axios.js','public/site/js/axios.js').sourceMaps(productionSourceMaps, 'source-map')

    //CSS add
    .css('node_modules/bootstrap/dist/css/bootstrap.css','public/site/css/bootstrap.css')

    //MAP

    .version();
