const mix = require('laravel-mix');


 mix
   .js('./resources/js/app.js', './public/app.js')
//    .js('./resources/js/admin/admin.js', './public/admin.js')
   .sass('./resources/scss/style.scss', './public/style.css')
//    .sass('./resources/scss/admin/style.scss', './public/admin.css')
   .options({
     autoprefixer: 'last 3 versions'

   })
   .copyDirectory('./resources/assets', './public/assets')
//    .copyDirectory('./resources/docs', './public/docs')
   .browserSync({
     watch: true,
     // server: './public',
     proxy: 'http://cardboard.local'
   })
   .version();
