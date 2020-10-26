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
mix.options({
    processCssUrls: false
});

/*
    ========================
            Assets
    ========================
*/

mix.sass('resources/sass/assets/structure.scss', 'public/assets/css/')
    .sass('resources/sass/assets/loader.scss', 'public/assets/css/')
    .sass('resources/sass/assets/main.scss', 'public/assets/css/')
    .sass('resources/sass/assets/scrollspy.scss', 'public/assets/css/')

    // Apps
   .sass('resources/sass/assets/apps/contacts.scss', 'public/assets/css/apps')
   .sass('resources/sass/assets/apps/invoice.scss', 'public/assets/css/apps')
   .sass('resources/sass/assets/apps/mailbox.scss', 'public/assets/css/apps')
   .sass('resources/sass/assets/apps/mailing-chat.scss', 'public/assets/css/apps')
   .sass('resources/sass/assets/apps/notes.scss', 'public/assets/css/apps')
   .sass('resources/sass/assets/apps/scrumboard.scss', 'public/assets/css/apps')
   .sass('resources/sass/assets/apps/todolist.scss', 'public/assets/css/apps')
   
   // Authentication
   .sass('resources/sass/assets/authentication/form-1.scss', 'public/assets/css/authentication')
   .sass('resources/sass/assets/authentication/form-2.scss', 'public/assets/css/authentication')

   // Components
   .sass('resources/sass/assets/components/custom-carousel.scss', 'public/assets/css/components')
   .sass('resources/sass/assets/components/custom-countdown.scss', 'public/assets/css/components')
   .sass('resources/sass/assets/components/custom-counter.scss', 'public/assets/css/components')
   .sass('resources/sass/assets/components/custom-list-group.scss', 'public/assets/css/components')
   .sass('resources/sass/assets/components/custom-media_object.scss', 'public/assets/css/components')
   .sass('resources/sass/assets/components/custom-modal.scss', 'public/assets/css/components')
   .sass('resources/sass/assets/components/custom-sweetalert.scss', 'public/assets/css/components')
   .sass('resources/sass/assets/components/cards/card.scss', 'public/assets/css/components/cards')
   .sass('resources/sass/assets/components/tabs-accordian/custom-accordions.scss', 'public/assets/css/components/tabs-accordian')
   .sass('resources/sass/assets/components/tabs-accordian/custom-tabs.scss', 'public/assets/css/components/tabs-accordian')
   .sass('resources/sass/assets/components/timeline/custom-timeline.scss', 'public/assets/css/components/timeline')

    // Element
   .sass('resources/sass/assets/elements/alert.scss', 'public/assets/css/elements/')
   .sass('resources/sass/assets/elements/avatar.scss', 'public/assets/css/elements/')
   .sass('resources/sass/assets/elements/breadcrumb.scss', 'public/assets/css/elements/')
   .sass('resources/sass/assets/elements/custom-pagination.scss', 'public/assets/css/elements/')
   .sass('resources/sass/assets/elements/custom-tree_view.scss', 'public/assets/css/elements/')
   .sass('resources/sass/assets/elements/infobox.scss', 'public/assets/css/elements/')
   .sass('resources/sass/assets/elements/miscellaneous.scss', 'public/assets/css/elements/')
   .sass('resources/sass/assets/elements/popover.scss', 'public/assets/css/elements/')
   .sass('resources/sass/assets/elements/search.scss', 'public/assets/css/elements/')
   .sass('resources/sass/assets/elements/tooltip.scss', 'public/assets/css/elements/')

    // Forms
   .sass('resources/sass/assets/forms/bootstrap-form.scss', 'public/assets/css/forms/')
   .sass('resources/sass/assets/forms/custom-clipboard.scss', 'public/assets/css/forms/')
   .sass('resources/sass/assets/forms/switches.scss', 'public/assets/css/forms/')
   .sass('resources/sass/assets/forms/theme-checkbox-radio.scss', 'public/assets/css/forms/')

    // Pages
   .sass('resources/sass/assets/pages/coming-soon/style.scss', 'public/assets/css/pages/coming-soon/')
   .sass('resources/sass/assets/pages/error/style-400.scss', 'public/assets/css/pages/error/')
   .sass('resources/sass/assets/pages/error/style-500.scss', 'public/assets/css/pages/error/')
   .sass('resources/sass/assets/pages/error/style-503.scss', 'public/assets/css/pages/error/')
   .sass('resources/sass/assets/pages/error/style-maintanence.scss', 'public/assets/css/pages/error/')
   .sass('resources/sass/assets/pages/faq/faq.scss', 'public/assets/css/pages/faq/')
   .sass('resources/sass/assets/pages/faq/faq2.scss', 'public/assets/css/pages/faq/')
   .sass('resources/sass/assets/pages/privacy/privacy.scss', 'public/assets/css/pages/privacy/')
   .sass('resources/sass/assets/pages/contact_us.scss', 'public/assets/css/pages/')
   .sass('resources/sass/assets/pages/helpdesk.scss', 'public/assets/css/pages/')

    // Tables
   .sass('resources/sass/assets/tables/table-basic.scss', 'public/assets/css/tables/')

   // Users
   .sass('resources/sass/assets/users/account-setting.scss', 'public/assets/css/users/')
   .sass('resources/sass/assets/users/user-profile.scss', 'public/assets/css/users/')

   // Widgets
   .sass('resources/sass/assets/widgets/modules-widgets.scss', 'public/assets/css/widgets/')

    /*
        ========================
                Plugins
        ========================
    */

    // Animate
   .sass('resources/sass/plugins/animate/animate.scss', 'public/plugins/animate/')
   
   // Autocomplete
   .sass('resources/sass/plugins/autocomplete/autocomplete.scss', 'public/plugins/autocomplete/')

   // Bootstrap Range Slider
   .sass('resources/sass/plugins/bootstrap-range-Slider/bootstrap-slider.scss', 'public/plugins/bootstrap-range-Slider/')
   
   // Bootstrap Select
   .sass('resources/sass/plugins/bootstrap-select/bootstrap-select.min.scss', 'public/plugins/bootstrap-select/')
   
   // Bootstrap Touchspin
   .sass('resources/sass/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.min.scss', 'public/plugins/bootstrap-touchspin/')

   // Drag and Drop
   .sass('resources/sass/plugins/drag-and-drop/dragula/dragula.scss', 'public/plugins/drag-and-drop/dragula/')
   .sass('resources/sass/plugins/drag-and-drop/dragula/example.scss', 'public/plugins/drag-and-drop/dragula/')
   
   // Dropify
   .sass('resources/sass/plugins/dropify/dropify.min.scss', 'public/plugins/dropify/')
   
   // Editors
   .sass('resources/sass/plugins/editors/markdown/simplemde.min.scss', 'public/plugins/editors/markdown/')
   .sass('resources/sass/plugins/editors/quill/quill.bubble.scss', 'public/plugins/editors/quill/')
   .sass('resources/sass/plugins/editors/quill/quill.snow.scss', 'public/plugins/editors/quill/')

   // File Upload
   .sass('resources/sass/plugins/file-upload/file-upload-with-preview.min.scss', 'public/plugins/file-upload/')
   
   // Flatpickr
   .sass('resources/sass/plugins/flatpickr/custom-flatpickr.scss', 'public/plugins/flatpickr/')
   
   // Fullcalendar
   .sass('resources/sass/plugins/fullcalendar/custom-fullcalendar.advance.scss', 'public/plugins/fullcalendar/')
   .sass('resources/sass/plugins/fullcalendar/fullcalendar.min.scss', 'public/plugins/fullcalendar/')
   .sass('resources/sass/plugins/fullcalendar/fullcalendar.scss', 'public/plugins/fullcalendar/')

   // Jquery Step
   .sass('resources/sass/plugins/jquery-step/jquery.steps.scss', 'public/plugins/jquery-step/')
   
   // jVector
   .sass('resources/sass/plugins/jvector/jquery-jvectormap-2.0.3.scss', 'public/plugins/jvector/')
   
   // lightbox
   .sass('resources/sass/plugins/lightbox/custom-photswipe.scss', 'public/plugins/lightbox/')
   .sass('resources/sass/plugins/lightbox/photoswipe.scss', 'public/plugins/lightbox/')

   // Loaders
   .sass('resources/sass/plugins/loaders/custom-loader.scss', 'public/plugins/loaders/')
   
   // noUiSlider
   .sass('resources/sass/plugins/noUiSlider/custom-nouiSlider.scss', 'public/plugins/noUiSlider/')
   
   // Perfect Scrollbar
   .sass('resources/sass/plugins/perfect-scrollbar/perfect-scrollbar.scss', 'public/plugins/perfect-scrollbar/')
   
   // Pricing Table
   .sass('resources/sass/plugins/pricing-table/css/component.scss', 'public/plugins/pricing-table/')
   
   // Select2
   .sass('resources/sass/plugins/select2/select2.min.scss', 'public/plugins/select2/')
   
   // SweetAlerts
   .sass('resources/sass/plugins/sweetalerts/sweetalert.scss', 'public/plugins/sweetalerts/')
   .sass('resources/sass/plugins/sweetalerts/sweetalert2.min.scss', 'public/plugins/sweetalerts/')

   // DataTable
   .sass('resources/sass/plugins/table/datatable/custom_dt_custom.scss', 'public/plugins/table/datatable/')
   .sass('resources/sass/plugins/table/datatable/custom_dt_html5.scss', 'public/plugins/table/datatable/')
   .sass('resources/sass/plugins/table/datatable/custom_dt_miscellaneous.scss', 'public/plugins/table/datatable/')
   .sass('resources/sass/plugins/table/datatable/custom_dt_multiple_tables.scss', 'public/plugins/table/datatable/')
   .sass('resources/sass/plugins/table/datatable/datatables.scss', 'public/plugins/table/datatable/')
   .sass('resources/sass/plugins/table/datatable/datatables-light.scss', 'public/plugins/table/datatable/')
   .sass('resources/sass/plugins/table/datatable/dt-global_style.scss', 'public/plugins/table/datatable/')
   .sass('resources/sass/plugins/table/datatable/dt-global_style-light.scss', 'public/plugins/table/datatable/')
   
   // Tag Input
   .sass('resources/sass/plugins/tagInput/tags-input.scss', 'public/plugins/tagInput/');
