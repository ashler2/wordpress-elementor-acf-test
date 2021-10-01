const mix = require('laravel-mix');

mix.js('./src/js/app.js', './build/js').sass('./src/scss/styles.scss', './build/css')