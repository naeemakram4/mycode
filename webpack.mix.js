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

//---------Default mix files----------
mix.styles([
    //Template css files to mix.
    'resources/mix/template/plugins/global/plugins.bundle.css',
    'resources/mix/template/css/style.bundle.css',
], 'public/css/template.css')
    .scripts([
        //Template scripts files to mix.
        'resources/mix/template/plugins/global/plugins.bundle.js',
        'resources/mix/template/js/scripts.bundle.js',
    ], 'public/js/template.js')
    .scripts([
        // Form repeater js
        'resources/mix/template/plugins/custom/formrepeater/formrepeater.bundle.js'
    ], 'public/js/form_repeater.js')
    //Css and Js for datatable
    .styles([
        'resources/mix/template/plugins/custom/datatables/datatables.bundle.css'
    ], 'public/css/datatable.css')
    .scripts([
        'resources/mix/template/plugins/custom/datatables/datatables.bundle.js',
        'resources/mix/template/plugins/custom/datatables/datatables-config.js'
    ], 'public/js/datatable.js')

    //Css and Js for Calendar
    .styles([
        'resources/mix/template/plugins/custom/fullcalendar/fullcalendar.bundle.css',
    ], 'public/css/calendar.css')
    .scripts([
        'resources/mix/template/plugins/custom/fullcalendar/fullcalendar.bundle.js',
    ], 'public/js/calendar.js')

    //Template media files.
    .copy([
        'resources/mix/template/media'
    ], 'public/assets/media')

    //Template fonts.
    .copy([
        'resources/mix/template/plugins/global/fonts'
    ], 'public/css/fonts')


//---------Admin Panel mix files----------

//---------Customer Panel mix files----------
mix.scripts([
        //Template scripts files to mix.
        'resources/mix/template/js/custom/utilities/modals/create-account.js',
    ], 'public/js/customer-create-request-form.js')
