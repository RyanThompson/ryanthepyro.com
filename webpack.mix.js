let mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

/*
 |--------------------------------------------------------------------------
 | Webpack Configuration
 |--------------------------------------------------------------------------
 |
 | Configure webpack...
 |
 */
mix.webpackConfig({
    // externals: {
    //     "@anomaly/streams-platform": "streams"
    // },
    plugins: [
        require('@tailwindcss/ui'),
        require('postcss-import'),
        require('tailwindcss'),
        require('autoprefixer'),
    ],
});

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

mix
.js('resources/assets/js/app.js', 'public/js')
.sass('resources/assets/scss/app.scss', 'public/css')
.options({
    processCssUrls: false,
    postCss: [
        tailwindcss('./tailwind.config.js'),
    ],
})
.sourceMaps();
