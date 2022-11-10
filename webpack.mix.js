let mix = require('laravel-mix');

mix.setPublicPath('dist');

mix.js('src/app.js','dist');

mix.sass('src/app.scss','dist').options({
    // https://laravel.com/docs/8.x/mix#url-processing
    processCssUrls: false
});

// https://github.com/drud/ddev-browsersync#laravel-mix-configuration
// Use the HOSTNAME provided by DDEV
let url = `${process.env.DDEV_PROJECT}.${process.env.DDEV_TLD}`;
mix.browserSync({
    proxy: "localhost",
    host: url, // only for cli output, does not really matter. This will
    // output http://ddev-laravelmix-browsersync.ddev.site:3000, but in
    // in HTTPS is supported and it receives request from localhost.
    open: false,
    ui: false
});