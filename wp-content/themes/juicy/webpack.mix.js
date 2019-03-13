const mix = require('laravel-mix');
require('laravel-mix-tailwind');

mix
  .js('src/js/app.js', 'build/')
  .sass('src/sass/app.scss', 'build/')
  .setPublicPath('build/')
  .options({
    processCssUrls: false
  })
  .tailwind();
