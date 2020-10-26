<link href="{{asset('assets/css/loader.css')}}" rel="stylesheet" type="text/css" />
<script src="{{asset('assets/js/loader.js')}}"></script>

<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
<link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />

@if ($page_name != 'coming_soon' && $page_name != 'contact_us' && $page_name != 'error404' && $page_name != 'error500' && $page_name != 'error503' && $page_name != 'faq' && $page_name != 'helpdesk' && $page_name != 'maintenence' && $page_name != 'privacy' && $page_name != 'auth_boxed' && $page_name != 'auth_default')
<link href="{{asset('assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
@endif
<!-- END GLOBAL MANDATORY STYLES -->

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
@switch($page_name)
    @case('analytics')
      {{-- Dashboard --}}
<link href="{{asset('plugins/apex/apexcharts.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('assets/css/dashboard/dash_2.css')}}" rel="stylesheet" type="text/css" />
      @break

    @case('sales')
      {{-- Dashboard 2 --}}
<link href="{{asset('plugins/apex/apexcharts.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('assets/css/dashboard/dash_1.css')}}" rel="stylesheet" type="text/css" />
      @break

    @case('calendar')
      {{-- App Calendar --}}
      <link href="{{asset('plugins/fullcalendar/fullcalendar.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('plugins/fullcalendar/custom-fullcalendar.advance.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('plugins/flatpickr/flatpickr.css')}}" rel="stylesheet" type="text/css">
      <link href="{{asset('plugins/flatpickr/custom-flatpickr.css')}}" rel="stylesheet" type="text/css">
      <link href="{{asset('assets/css/forms/theme-checkbox-radio.css')}}" rel="stylesheet" type="text/css" />
      <style>
          
          .widget-content-area { border-radius: 6px; margin-bottom: 10px; }
          .daterangepicker.dropdown-menu {
              z-index: 1059;
          }
          
      </style>
      @break

    @case('chat')
      {{-- App chat --}}
      <link href="{{asset('assets/css/apps/mailing-chat.css')}}" rel="stylesheet" type="text/css" />
      @break

    @case('contacts')
      {{-- App contacts --}}
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/forms/theme-checkbox-radio.css')}}">
      <link href="{{asset('plugins/jquery-ui/jquery-ui.min.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('assets/css/apps/contacts.css')}}" rel="stylesheet" type="text/css" />
      @break

    @case('invoice')
      {{-- App invoice --}}
      <link href="{{asset('assets/css/apps/invoice.css')}}" rel="stylesheet" type="text/css" />
      @break
    
    @case('mailbox')
      {{-- App Mailbox --}}
      <link rel="stylesheet" type="text/css" href="{{asset('plugins/editors/quill/quill.snow.css')}}">
      <link href="{{asset('assets/css/apps/mailbox.css')}}" rel="stylesheet" type="text/css" />
      <script src="plugins/sweetalerts/promise-polyfill.js"></script>
      <link href="{{asset('plugins/sweetalerts/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('plugins/sweetalerts/sweetalert.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('plugins/notification/snackbar/snackbar.min.css')}}" rel="stylesheet" type="text/css" />
      @break

    @case('notes')
      {{-- App Notes --}}
      <link href="{{asset('assets/css/apps/notes.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('assets/css/forms/theme-checkbox-radio.css')}}" rel="stylesheet" type="text/css" />
      @break
    
    @case('scrumboard')
      {{-- App Scrumboard --}}
      <link href="{{asset('assets/css/apps/scrumboard.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('assets/css/forms/theme-checkbox-radio.css')}}" rel="stylesheet" type="text/css">
      @break

    @case('todo-list')
      {{-- App Todo List --}}
      <link rel="stylesheet" type="text/css" href="{{asset('plugins/editors/quill/quill.snow.css')}}">
      <link href="{{asset('assets/css/apps/todolist.css')}}" rel="stylesheet" type="text/css" />
      @break

    @case('auth_boxed')
      {{-- Auth Lockscreen Boxed --}}
      <link href="{{asset('assets/css/main.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('assets/css/authentication/form-2.css')}}" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/forms/theme-checkbox-radio.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/forms/switches.css')}}">
      @break
    
    @case('auth_default')
      {{-- Auth Lockscreen  --}}
      <link href="{{asset('assets/css/main.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('assets/css/authentication/form-1.css')}}" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/forms/theme-checkbox-radio.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/forms/switches.css')}}">
      @break

    @case('charts')
      {{-- Charts --}}
      <link href="{{asset('assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('plugins/apex/apexcharts.css')}}" rel="stylesheet" type="text/css">
      <style>
          .apexcharts-canvas {
              margin: 0 auto;
          }
      </style>
      @break

    @case('accordions')
      {{-- Componets Accordions --}}
      <link href="{{asset('assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('assets/css/components/tabs-accordian/custom-accordions.css')}}" rel="stylesheet" type="text/css" />
      @break

    @case('blockui')
      {{-- Components Block ui --}}
      <link href="{{asset('assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('assets/css/components/custom-modal.css')}}" rel="stylesheet" type="text/css">
      <link rel="stylesheet" type="text/css" href="{{asset('plugins/animate/animate.css')}}">
      <style>   
        .blockui-growl-message {
            display: none;
            text-align: left;
            padding: 15px;
            background-color: #455a64;
            color: #fff;
            border-radius: 3px;
        }
        .blockui-animation-container { display: none; }
        .multiMessageBlockUi {
            display: none;
            background-color: #455a64;
            color: #fff;
            border-radius: 3px;
            padding: 15px 15px 10px 15px;
        }
        .multiMessageBlockUi i { display: block }
    </style>
      @break

    @case('bootstrap_carousel')
      {{-- Components Bootsrap Carousel --}}
      <link href="{{asset('assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('assets/css/components/custom-carousel.css')}}" rel="stylesheet" type="text/css" />
      @break

    @case('cards')
      {{-- Components Cards --}}
      <link href="{{asset('assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('assets/css/components/cards/card.css')}}" rel="stylesheet" type="text/css" />
      @break

    @case('countdown')
      {{-- Compoents Countdown --}}
      <link href="{{asset('assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('assets/css/components/custom-countdown.css')}}" rel="stylesheet" type="text/css">
      @break

    @case('counter')  
      {{-- Component Counter --}}
      <link href="{{asset('assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('assets/css/components/custom-counter.css')}}" rel="stylesheet" type="text/css">
      @break

    @case('lightbox')
      {{-- Component Lightbox --}}
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/forms/theme-checkbox-radio.css')}}">
      <link href="{{asset('plugins/lightbox/photoswipe.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('plugins/lightbox/default-skin/default-skin.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('plugins/lightbox/custom-photswipe.css')}}" rel="stylesheet" type="text/css" />
      @break

    @case('list_group')
      {{-- Compoent List Group --}}
      <link href="{{asset('assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('assets/css/components/custom-list-group.css')}}" rel="stylesheet" type="text/css">
      @break

    @case('media_object')
      {{-- Componetns media object --}}
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/forms/theme-checkbox-radio.css')}}">
      <link href="{{asset('assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('assets/css/components/custom-media_object.css')}}" rel="stylesheet" type="text/css" />
      @break

    @case('modals')
      {{-- Components Modal --}}
      <link href="{{asset('plugins/animate/animate.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('assets/css/components/custom-modal.css')}}" rel="stylesheet" type="text/css" />  
      @break

    @case('pricing_table')
      {{-- Component Pricing Table --}}
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/forms/switches.css')}}">
      <link href="{{asset('plugins/pricing-table/css/component.css')}}" rel="stylesheet" type="text/css" />
      @break

    @case('session_timeout')
        <style>
            h4.modal-title { color: #000; }
            .modal-content { border: none; }
            .modal-body { text-align: center; }
            .modal-body p {
                color: #515365;
                font-weight: 600;
                margin-bottom: 0; }
            p span.countdown-holder { color: #e7515a; font-size: 18px; }
            .modal-footer { border: none; }
            .progress {
                width: 50%;
                margin: 0 auto;
                border-radius: 30px;
                height: 10px;
            }
            .modal-backdrop { background-color: #060818; }
            @media (min-width: 576px) { .modal-dialog { max-width: 350px; } }
            .layout-px-spacing {
                min-height: calc(100vh - 149px)!important;
            }
        </style>
      @break

    @case('notifications')
      {{-- Components snackbar --}}
      <link href="{{asset('assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('plugins/notification/snackbar/snackbar.min.css')}}" rel="stylesheet" type="text/css" />
      @break

    @case('sweet_alerts')
      {{-- Component Sweetalert --}}
      <link href="{{asset('assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('plugins/animate/animate.css')}}" rel="stylesheet" type="text/css" />
      <script src="{{asset('plugins/sweetalerts/promise-polyfill.js')}}"></script>
      <link href="{{asset('plugins/sweetalerts/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('plugins/sweetalerts/sweetalert.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('assets/css/components/custom-sweetalert.css')}}" rel="stylesheet" type="text/css" />
      @break

    @case('tabs')
      {{-- Components Tabs --}}
      <link href="{{asset('assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('assets/css/components/tabs-accordian/custom-tabs.css')}}" rel="stylesheet" type="text/css" />
      @break

    @case('timeline')
      {{-- Component Timeline --}}
      <link href="{{asset('assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('assets/css/components/timeline/custom-timeline.css')}}" rel="stylesheet" type="text/css" />
      <style>
          .toggle-code-snippet { margin-bottom: 0px; }
      </style>
      @break

    @case('drag_n_drop')
      {{-- Drag and Drop ----> Dragula --}}
      <link href="{{asset('plugins/drag-and-drop/dragula/dragula.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('plugins/drag-and-drop/dragula/example.css')}}" rel="stylesheet" type="text/css" />
      @break

    @case('alerts')
      {{-- Elements Alert --}}
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/elements/alert.css')}}">
      <style>
          .btn-light { border-color: transparent; }
      </style>
      @break

    @case('avatars')
      {{-- Elements avatar --}}
      <link href="{{asset('assets/css/elements/avatar.css')}}" rel="stylesheet" type="text/css" />
      @break

    @case('badges')
      {{-- Elements Badges --}}
      <link href="{{asset('plugins/tagInput/tags-input.css')}}" rel="stylesheet" type="text/css" />
      <style>
          .tags-input-wrapper input { margin: 0 auto; }
      </style>
      @break

    @case('breadcrumbs')
      {{-- Elements Breadcrumb --}}
      <link href="{{asset('assets/css/elements/miscellaneous.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('assets/css/elements/breadcrumb.css')}}" rel="stylesheet" type="text/css" />
      @break

    @case('button_group')
      {{-- Elements Butons groups --}}
      <style>
        .table-bordered td, .table-bordered th { border: 1px solid #ebedf2; }
      </style>
      @break

    @case('buttons')
      {{-- Elements Buttons --}}
      <style>
        .table-bordered td, .table-bordered th { border: 1px solid #ebedf2; }
      </style>
      @break

    @case('color_library')
      {{-- Elemnts Color Library --}}
      <link href="{{asset('assets/css/elements/color_library.css')}}" rel="stylesheet" type="text/css" />
      @break

    @case('dropdown')
      {{-- Elements Dropdown --}}
      <link href="{{asset('assets/css/elements/miscellaneous.css')}}" rel="stylesheet" type="text/css" />
      @break

    @case('infobox')
      {{-- Elements Infobox --}}
      <link href="{{asset('assets/css/elements/infobox.css')}}" rel="stylesheet" type="text/css" />
      @break

    @case('jumbotron')
      {{-- Elemnts Jumbutron --}}
      <link href="{{asset('assets/css/elements/miscellaneous.css')}}" rel="stylesheet" type="text/css" />
      @break

    @case('loaders')
      {{-- Elements Loader  --}}
      <link href="{{asset('plugins/loaders/custom-loader.css')}}" rel="stylesheet" type="text/css" />
      @break

    @case('progress_bar')
      {{-- Elemnts Progress Bar --}}
      <style>
        .t-rotate270 { -webkit-transform: rotate(270deg); transform:rotate(270deg) }
      </style>
      @break

    @case('pagination')
      {{-- Elements Pagination --}}
      <link href="{{asset('assets/css/elements/custom-pagination.css')}}" rel="stylesheet" type="text/css" />
      @break

    @case('popovers')
      {{-- Elements Popovers --}}
      <link href="{{asset('assets/css/elements/popover.css')}}" rel="stylesheet" type="text/css" />
      @break
    
    @case('search')
      {{-- Elements Search --}}
      <link href="{{asset('assets/css/elements/search.css')}}" rel="stylesheet" type="text/css" />
      @break

    @case('tooltips')
      {{-- Elements Tooltips --}}
      <link href="{{asset('assets/css/elements/tooltip.css')}}" rel="stylesheet" type="text/css" />
      @break

    @case('treeview')
      {{-- Elements Tree View --}}
      <link href="{{asset('assets/css/elements/custom-tree_view.css')}}" rel="stylesheet" type="text/css" />
      @break

    @case('typography')
      {{-- Elements Typography --}}
      <link href="{{asset('assets/css/elements/custom-typography.css')}}" rel="stylesheet" type="text/css" />
      @break

    @case('font_icons')
      {{-- Font Icons --}}
      <link href="{{asset('assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css">
      <link rel="stylesheet" href="{{asset('plugins/font-icons/fontawesome/css/regular.css')}}">
      <link rel="stylesheet" href="{{asset('plugins/font-icons/fontawesome/css/fontawesome.css')}}">
      <style>
          .feather-icon .icon-section {
            padding: 30px;
        }
        .feather-icon .icon-section h4 {
            color: #3b3f5c;
            font-size: 17px;
            font-weight: 600;
            margin: 0;
            margin-bottom: 16px;
        }
        .feather-icon .icon-content-container {
            padding: 0 16px;
            width: 86%;
            margin: 0 auto;
            border: 1px solid #bfc9d4;
            border-radius: 6px;
        }
        .feather-icon .icon-section p.fs-text {
            padding-bottom: 30px;
            margin-bottom: 30px;
        }
        .feather-icon .icon-container { cursor: pointer; }
        .feather-icon .icon-container svg {
            color: #3b3f5c;
            margin-right: 6px;
            vertical-align: middle;
            width: 20px;
            height: 20px;
            fill: rgba(0, 23, 55, 0.08);
        }
        .feather-icon .icon-container:hover svg {
            color: #1b55e2;
            fill: rgba(27, 85, 226, 0.23921568627450981);
        }
        .feather-icon .icon-container span { display: none; }
        .feather-icon .icon-container:hover span { color: #1b55e2; }
        .feather-icon .icon-link {
            color: #1b55e2;
            font-weight: 600;
            font-size: 14px;
        }


        /*FAB*/
        .fontawesome .icon-section {
            padding: 30px;
        }
        .fontawesome .icon-section h4 {
            color: #3b3f5c;
            font-size: 17px;
            font-weight: 600;
            margin: 0;
            margin-bottom: 16px;
        }
        .fontawesome .icon-content-container {
            padding: 0 16px;
            width: 86%;
            margin: 0 auto;
            border: 1px solid #bfc9d4;
            border-radius: 6px;
        }
        .fontawesome .icon-section p.fs-text {
            padding-bottom: 30px;
            margin-bottom: 30px;
        }
        .fontawesome .icon-container { cursor: pointer; }
        .fontawesome .icon-container i {
            font-size: 20px;
            color: #3b3f5c;
            vertical-align: middle;
            margin-right: 10px;
        }
        .fontawesome .icon-container:hover i { color: #1b55e2; }
        .fontawesome .icon-container span { color: #888ea8; display: none; }
        .fontawesome .icon-container:hover span { color: #1b55e2; }
        .fontawesome .icon-link {
            color: #1b55e2;
            font-weight: 600;
            font-size: 14px;
        }
      </style>
      @break

    @case('maps')
      {{-- Maps --}}
      <link href="{{asset('assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('plugins/jvector/jquery-jvectormap-2.0.3.css')}}" rel="stylesheet" type="text/css" />
      <style>
          .jvectormap-container {
              border-radius: 14px;
              padding: 20px 0;
          }
          .jvectormap-zoomin, .jvectormap-zoomout, .jvectormap-goback {
              left: 20px;
              border-radius: 50%;
              background: #ffffff;
              padding: 6px 6px;
              color: #3b3f5c;
              border: 2px solid #3b3f5c;
              font-size: 19px;
              font-weight: 700;
              top: 20px;
          }
          .jvectormap-zoomout {
              top: 20px;
              left: 50px;
          }
      </style>
      @break
    
    @case('coming_soon')
      {{-- Pages Coming Soon --}}
      <link href="{{asset('assets/css/main.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('assets/css/pages/coming-soon/style.css')}}" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/forms/theme-checkbox-radio.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/forms/switches.css')}}">
      @break


    @case('contact_us')
      {{-- Pages Contact Us --}}
      <link href="{{asset('assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('assets/css/pages/contact_us.css')}}" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/forms/theme-checkbox-radio.css')}}">
      <style>
        #content {
            width: 100%;
            margin-top: 0;
            margin-left: 0;
        }
        .main-container {
          padding: 0 0 0 0;
        }
      </style>
      @break

    @case('error404')
      {{-- Pages Error 404 --}}
      <link href="{{asset('assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('assets/css/pages/error/style-400.css')}}" rel="stylesheet" type="text/css" />
      <style>
          #content {
              width: 100%;
              margin-top: 0;
              margin-left: 0;
          }
      </style>
      @break

    @case('error500')
      {{-- Pages Error 500 --}}
      <link href="{{asset('assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('assets/css/pages/error/style-500.css')}}" rel="stylesheet" type="text/css" />
      <style>
        #content {
            width: 100%;
            margin-top: 0;
            margin-left: 0;
        }
      </style>
      @break

    @case('error503')
      {{-- Pages Error 503 --}}
      <link href="{{asset('assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('assets/css/pages/error/style-503.css')}}" rel="stylesheet" type="text/css" />
      <style>
        #content {
            width: 100%;
            margin-top: 0;
            margin-left: 0;
        }
      </style>
      @break

    @case('faq')
      {{-- Pages Faq --}}
      <link href="{{asset('assets/css/main.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('assets/css/pages/faq/faq.css')}}" rel="stylesheet" type="text/css" />
      @break

    @case('faq2')
      {{-- Pages Faq 2 --}}
      <link href="{{asset('assets/css/pages/faq/faq2.css')}}" rel="stylesheet" type="text/css" />
      @break

    @case('helpdesk')
      {{-- Pages Helpdesk --}}
      <link href="{{asset('assets/css/main.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('assets/css/pages/helpdesk.css')}}" rel="stylesheet" type="text/css" />
      @break

    @case('maintenence')
      {{-- Pages Maintenence --}}
      <link href="{{asset('assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('assets/css/pages/error/style-maintanence.css')}}" rel="stylesheet" type="text/css" />
      <style>
        #content {
            width: 100%;
            margin-left: 0;
        }
      </style>
      @break
    
    @case('privacy')
      {{-- Pages Privacy --}}
      <link href="{{asset('assets/css/main.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('assets/css/pages/privacy/privacy.css')}}" rel="stylesheet" type="text/css" />
      @break

    @case('alt_menu')
      {{-- Starter Kit ALt menu --}}
      <style>

        /*
            Just for demo purpose ---- Remove it.
        */        
        /*<starter kit design>*/

        .widget-one {

        }
        .widget-one h6 {
            font-size: 20px;
            font-weight: 600;
            letter-spacing: 0px;
            margin-bottom: 22px;
        }
        .widget-one p {
            font-size: 15px;
            margin-bottom: 0;
        }
        
        /*/<starter kit design>*/

      </style>
      @break
    
    @case('boxed')
      {{-- Starter Kit Boxed menu --}}
      <style>
        /*
            The below code is for DEMO purpose --- Use it if you are using this demo otherwise Remove it
        */

        body {
            max-width: 1140px;
            margin: 0 auto;
        }
        .header-container {
            max-width: 1140px;
            margin: 0 auto;
        }
        .sidebar-wrapper {
            left: auto;
        }
        #content {
            transition: auto;
        }

        /*
            ====================
                IE Support
            ====================
        */

        @media all and (-ms-high-contrast: none), (-ms-high-contrast: active) {
            .header-container { width: 100%; }
        }

        /*
            Just for demo purpose ---- Remove it.
        */
        /*<starter kit design>*/

        .widget-one {

        }
        .widget-one h6 {
            font-size: 20px;
            font-weight: 600;
            letter-spacing: 0px;
            margin-bottom: 22px;
        }
        .widget-one p {
            font-size: 15px;
            margin-bottom: 0;
        }

      </style>
      @break
    
    @case('breadcrumb')
      {{-- Starter Kit Breadcrumb --}}
      <style>
        /*
            The below code is for DEMO purpose --- Use it if you are using this demo otherwise Remove it
        */
        .page-title {
            float: none;
            margin-top: 0;
            margin-bottom: 0;
            align-self: center;
            padding-right: 15px;
            border-right: 1px solid #bfc9d4;
            margin-right: 15px;
        }
        .page-title h3 {
            margin-bottom: 0;
        }
        .page-header {
            display: flex;
            /* padding: 45px 0; */
        }
        .breadcrumb-one {
            display: inline-block;
            align-self: center;
        }
        .breadcrumb-one .breadcrumb {
            padding: 0;
            vertical-align: text-bottom;
            margin-bottom: 0;
            background: transparent;
        }
        .breadcrumb-one .breadcrumb-item {
            align-self: center;
        }
        .breadcrumb-one .breadcrumb-item a {
            color: #888ea8;
            vertical-align: text-bottom;
        }
        .breadcrumb-one .breadcrumb-item a svg {
            width: 20px;
            height: 20px;
            vertical-align: sub;
        }
        .breadcrumb-one .breadcrumb-item.active a {
            color: #009688;
        }
        .breadcrumb-one .breadcrumb-item span {
            vertical-align: text-bottom;
        }
        .breadcrumb-one .breadcrumb-item.active {
            color: #009688;
            font-weight: 600;
        }
        .breadcrumb-one .breadcrumb-item+.breadcrumb-item {
            padding: 0px;
        }
        .breadcrumb-one .breadcrumb-item+.breadcrumb-item::before {
            color: #515365;
            font-size: 0;
            content: url('data:image/svg+xml, <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 24 24" fill="none" stroke="%23555" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>');
            vertical-align: text-top;
            padding: 0 6px;
        }


        @media(max-width: 575px) {
            .page-header {
                display: block;
            }
            .page-title {
                margin-bottom: 20px;
                border: none;
                padding-right: 0;
                margin-right: 0;
            }
        }


        /*
            Just for demo purpose ---- Remove it.
        */
        /*<starter kit design>*/

        .widget-one {

        }
        .widget-one h6 {
            font-size: 20px;
            font-weight: 600;
            letter-spacing: 0px;
            margin-bottom: 22px;
        }
        .widget-one p {
            font-size: 15px;
            margin-bottom: 0;
        }

        /*</starter kit design>*/

      </style>
      @break

    @case('bootstrap_basic_table')
      {{-- Table Basic --}}
      <link href="{{asset('assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/forms/theme-checkbox-radio.css')}}">
      <link href="{{asset('assets/css/tables/table-basic.css')}}" rel="stylesheet" type="text/css" />
      @break

    @case('alternative_pagination')
      {{-- Table Datatable Alternative --}}
      <link rel="stylesheet" type="text/css" href="{{asset('plugins/table/datatable/datatables.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('plugins/table/datatable/dt-global_style.css')}}">
      @break

    @case('basic-light')
      {{-- Table Datatable Basic Light --}}
      <link rel="stylesheet" type="text/css" href="{{asset('plugins/table/datatable/datatables-light.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('plugins/table/datatable/dt-global_style-light.css')}}">
      @break

    @case('basic')
      {{-- Table Datatable Basic --}}
      <link rel="stylesheet" type="text/css" href="{{asset('plugins/table/datatable/datatables.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('plugins/table/datatable/dt-global_style.css')}}">
      @break

    @case('custom')
      {{-- Table Datatable Custom --}}
      <link rel="stylesheet" type="text/css" href="{{asset('plugins/table/datatable/datatables.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/forms/theme-checkbox-radio.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('plugins/table/datatable/dt-global_style.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('plugins/table/datatable/custom_dt_custom.css')}}">
      @break

    @case('html5')
      {{-- Table Datatable HTML5 --}}
      <link rel="stylesheet" type="text/css" href="{{asset('plugins/table/datatable/datatables.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('plugins/table/datatable/custom_dt_html5.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('plugins/table/datatable/dt-global_style.css')}}">
      @break

    @case('live_dom_ordering')
      {{-- Table Datatable Live Dom Ordering --}}
      <link rel="stylesheet" type="text/css" href="{{asset('plugins/table/datatable/datatables.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('plugins/table/datatable/dt-global_style.css')}}">
      @break

    @case('miscellaneous')
      {{-- Table Datatable Miscellaneous --}}
      <link rel="stylesheet" type="text/css" href="{{asset('plugins/table/datatable/datatables.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('plugins/table/datatable/custom_dt_miscellaneous.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/forms/theme-checkbox-radio.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('plugins/table/datatable/dt-global_style.css')}}">
      @break

    @case('multi-column_ordering')
      {{-- Table Datatable Multi Coulumn Ordering --}}
      <link rel="stylesheet" type="text/css" href="{{asset('plugins/table/datatable/datatables.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/forms/theme-checkbox-radio.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('plugins/table/datatable/dt-global_style.css')}}">
      @break

    @case('multiple_tables')
      {{-- Table Datatable Multiple Table --}}
      <link rel="stylesheet" type="text/css" href="{{asset('plugins/table/datatable/datatables.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('plugins/table/datatable/dt-global_style.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('plugins/table/datatable/custom_dt_multiple_tables.css')}}">
      @break

    @case('ordering_sorting')
      {{-- Table Dattable Order Sorting --}}
      <link rel="stylesheet" type="text/css" href="{{asset('plugins/table/datatable/datatables.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('plugins/table/datatable/dt-global_style.css')}}">
      @break

    @case('range_search')
      {{-- Table Datatable Range Search --}}
      <link rel="stylesheet" type="text/css" href="{{asset('plugins/table/datatable/datatables.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('plugins/table/datatable/dt-global_style.css')}}">
      <style>
          .table-responsive > .table {
              background: transparent;
          }
      </style>
      @break

    @case('account_settings')
      {{-- User Account Settings --}}
      <link rel="stylesheet" type="text/css" href="{{asset('plugins/dropify/dropify.min.css')}}">
      <link href="{{asset('assets/css/users/account-setting.css')}}" rel="stylesheet" type="text/css" />
      @break

    @case('profile')
      {{-- User Profile --}}
      <link href="{{asset('assets/css/users/user-profile.css')}}" rel="stylesheet" type="text/css" />
      @break

    @case('widgets')
      {{-- Widgets --}}
      <link href="{{asset('plugins/apex/apexcharts.css')}}" rel="stylesheet" type="text/css">
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/widgets/modules-widgets.css')}}">
      @break

    @case('basic')
      {{-- Forms Basic --}}
      <link href="{{asset('assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
      @break

    @case('bootstrap_select')
      {{-- Forms Select --}}
      <link href="{{asset('assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" type="text/css" href="{{asset('plugins/bootstrap-select/bootstrap-select.min.css')}}">
      @break

    @case('touchspin')
      {{-- Forms Bootstrap TouchSpin --}}
      <link href="{{asset('assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" type="text/css" href="{{asset('plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css')}}">
      <style>
          #demo_vertical::-ms-clear, #demo_vertical2::-ms-clear { display: none; }
          input#demo_vertical { border-top-right-radius: 5px; border-bottom-right-radius: 5px; }
          input#demo_vertical2 { border-top-right-radius: 5px; border-bottom-right-radius: 5px; }
      </style>
      @break

    @case('checkbox_radio')
      {{-- Forms Checkbox Radio --}}
      <link href="{{asset('assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/forms/theme-checkbox-radio.css')}}">
      @break

    @case('clipboard')
      {{-- Forms Clipboard --}}
      <link href="{{asset('assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/forms/custom-clipboard.css')}}">
      @break
      
    @case('date_range_picker')
      {{-- Forms Date Range Picker --}}
      <link href="{{asset('plugins/flatpickr/flatpickr.css')}}" rel="stylesheet" type="text/css">
      <link href="{{asset('plugins/noUiSlider/nouislider.min.css')}}" rel="stylesheet" type="text/css">
      <link href="{{asset('assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('plugins/flatpickr/custom-flatpickr.css')}}" rel="stylesheet" type="text/css">
      <link href="{{asset('plugins/noUiSlider/custom-nouiSlider.css')}}" rel="stylesheet" type="text/css">
      <link href="{{asset('plugins/bootstrap-range-Slider/bootstrap-slider.css')}}" rel="stylesheet" type="text/css">
      @break
    
    @case('file_upload')
      {{-- Forms File Upload --}}
      <link href="{{asset('assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('plugins/file-upload/file-upload-with-preview.min.css')}}" rel="stylesheet" type="text/css" />
      @break

    @case('input_group')
      {{-- Forms Input group --}}
      <link href="{{asset('assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/forms/theme-checkbox-radio.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/forms/switches.css')}}">
      @break

    @case('input_mask')
      {{-- Forms Input Mask --}}
      <link href="{{asset('assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
      @break

    @case('layouts')
      {{-- Forms Layouts --}}
      <link href="{{asset('assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
      @break

    @case('markdown')
      {{-- Forms Markdown --}}
      <link href="{{asset('assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" href="{{asset('plugins/editors/markdown/simplemde.min.css')}}">
      @break

    @case('maxlength')
      {{-- Forms Maxlength --}}
      <link href="{{asset('assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
      @break

    @case('quill')
      {{-- Forms Quill --}}
      <link href="{{asset('assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" type="text/css" href="{{asset('plugins/editors/quill/quill.snow.css')}}">
      @break


    @case('select2')
      {{-- Forms Select 2 --}}
      <link href="{{asset('assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" type="text/css" href="{{asset('plugins/select2/select2.min.css')}}">
      @break

    @case('switches')
      {{-- Forms Switch --}}
      <link href="{{asset('assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/forms/switches.css')}}">
      @break

    @case('typeahead')
      {{-- Forms Typeahead --}}
      <link href="{{asset('assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('plugins/autocomplete/autocomplete.css')}}" rel="stylesheet" type="text/css" />
      <style>
          .text-muted { color: #009688 !important; font-size: 12px; }
          .form-group label, label { font-size: 14px; font-weight: 600; color: #888ea8; }
      </style>
      @break

    @case('validation')
      {{-- Forms Validation --}}
      <link href="{{asset('assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
      @break
    
    @case('wizards')
      {{-- Forms Wizards --}}
      <link href="{{asset('assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" type="text/css" href="{{asset('plugins/jquery-step/jquery.steps.css')}}">
      <style>
          #formValidate .wizard > .content {min-height: 25em;}
          #example-vertical.wizard > .content {min-height: 24.5em;}
      </style>
      @break

    @default
        <script>console.log('No custom Styles available.')</script>
@endswitch
<!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->