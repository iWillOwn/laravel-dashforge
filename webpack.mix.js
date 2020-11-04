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

mix
    .js('resources/js/app.js', 'public/js')
    .sass('resources/scss/dashforge.scss', 'public/assets/css')
    .sass('resources/scss/pages/auth.scss', 'public/assets/css/dashforge.auth.css')
    .sass('resources/scss/pages/calendar.scss', 'public/assets/css/dashforge.calendar.css')
    .sass('resources/scss/pages/chat.scss', 'public/assets/css/dashforge.chat.css')
    .sass('resources/scss/pages/contacts.scss', 'public/assets/css/dashforge.contacts.css')
    .sass('resources/scss/pages/dashboard.scss', 'public/assets/css/dashforge.dashboard.css')
    .sass('resources/scss/pages/demo.scss', 'public/assets/css/dashforge.demo.css')
    .sass('resources/scss/pages/filemgr.scss', 'public/assets/css/dashforge.filemgr.css')
    .sass('resources/scss/pages/landing.scss', 'public/assets/css/dashforge.landing.css')
    .sass('resources/scss/pages/mail.scss', 'public/assets/css/dashforge.mail.css')
    .sass('resources/scss/pages/profile.scss', 'public/assets/css/dashforge.profile.css')
    .sass('resources/scss/skins/charcoal.scss', 'public/assets/css/skin.charcoal.css')
    .sass('resources/scss/skins/cool.scss', 'public/assets/css/skin.cool.css')
    .sass('resources/scss/skins/dark.scss', 'public/assets/css/skin.dark.css')
    .sass('resources/scss/skins/deepblue.scss', 'public/assets/css/skin.deepblue.css')
    .sass('resources/scss/skins/gradient1.scss', 'public/assets/css/skin.gradient1.css')
    .sass('resources/scss/skins/light.scss', 'public/assets/css/skin.light.css')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ])
    .options({
        processCssUrls: false
    });
