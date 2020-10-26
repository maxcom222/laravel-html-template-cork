{{-- Functions --}}
@php


if (!function_exists('setTitle')) :
    function setTitle($page_name) {

        // echo $page_name;

        $admin_name = '| CORK - Multipurpose Bootstrap Dashboard Template';

        if ($page_name === 'analytics') :
            echo 'CORK Admin - Multipurpose Bootstrap Dashboard Template';
        elseif ($page_name === 'sales') :
            echo 'Sales Admin ' . $admin_name;

        // Apps
        elseif ($page_name === 'calendar') :
            echo 'Fullcalendar Drag and Drop Event ' . $admin_name;
        elseif ($page_name === 'chat') :
            echo 'Chat Application ' . $admin_name;
        elseif ($page_name === 'contacts') :
            echo 'Contact Profile ' . $admin_name;
        elseif ($page_name === 'invoice') :
            echo 'Invoice ' . $admin_name;
        elseif ($page_name === 'mailbox') :
            echo 'Mailbox ' . $admin_name;
        elseif ($page_name === 'notes') :
            echo 'Notes ' . $admin_name;
        elseif ($page_name === 'scrumboard') :
            echo 'Scrum Task Board ' . $admin_name;
        elseif ($page_name === 'todo-list') :
            echo 'Todo List ' . $admin_name;

        // Authendication
        elseif ($page_name === 'auth_boxed') :
            echo '';
        elseif ($page_name === 'auth_default') :
            echo '';

        // Charts
        elseif ($page_name === 'charts') :
            echo 'Apex Chart '. $admin_name;

        // Components
        elseif ($page_name === 'accordions') :
            echo 'Accordions ' . $admin_name;
        elseif ($page_name === 'blockui') :
            echo 'Block UI ' . $admin_name;
        elseif ($page_name === 'bootstrap_carousel') :
            echo 'Bootstrap Carousel ' . $admin_name;
        elseif ($page_name === 'cards') :
            echo 'Card ' . $admin_name;
        elseif ($page_name === 'countdown') :
            echo 'Countdown ' . $admin_name;
        elseif ($page_name === 'counter') :
            echo 'Counter ' . $admin_name;
        elseif ($page_name === 'lightbox') :
            echo 'Lightbox ' . $admin_name;
        elseif ($page_name === 'list_group') :
            echo 'List Group ' . $admin_name;
        elseif ($page_name === 'media_object') :
            echo 'Media Object ' . $admin_name;
        elseif ($page_name === 'modals') :
            echo 'Modals ' . $admin_name;
        elseif ($page_name === 'pricing_table') :
            echo 'Pricing Tables ' . $admin_name;
        elseif ($page_name === 'session_timeout') :
            echo 'Session Timeout ' . $admin_name;
        elseif ($page_name === 'notifications') :
            echo 'Notifications ' . $admin_name;
        elseif ($page_name === 'sweet_alerts') :
            echo 'SweetAlert ' . $admin_name;
        elseif ($page_name === 'tabs') :
            echo 'Tabs ' . $admin_name;
        elseif ($page_name === 'timeline') :
            echo 'Timeline ' . $admin_name;

        // Drag And Drop
        elseif ($page_name === 'drag_n_drop') :
            echo 'Dragula Drag and Drop ' . $admin_name;

        // Elements
        elseif ($page_name === 'alerts') :
            echo 'Alerts ' . $admin_name;
        elseif ($page_name === 'avatars') :
            echo 'Avatar ' . $admin_name;
        elseif ($page_name === 'badges') :
            echo 'Badge ' . $admin_name;
        elseif ($page_name === 'breadcrumbs') :
            echo 'Breadcrumb ' . $admin_name;
        elseif ($page_name === 'button_group') :
            echo 'Button Group ' . $admin_name;
        elseif ($page_name === 'buttons') :
            echo 'Bootstrap Buttons ' . $admin_name;
        elseif ($page_name === 'color_library') :
            echo 'Color Library ' . $admin_name;
        elseif ($page_name === 'dropdown') :
            echo 'Dropdown ' . $admin_name;
        elseif ($page_name === 'infobox') :
            echo 'Infobox ' . $admin_name;
        elseif ($page_name === 'jumbotron') :
            echo 'Jumbotron ' . $admin_name;
        elseif ($page_name === 'loaders') :
            echo 'Loaders ' . $admin_name;
        elseif ($page_name === 'pagination') :
            echo 'Pagination ' . $admin_name;
        elseif ($page_name === 'popovers') :
            echo 'Popovers ' . $admin_name;
        elseif ($page_name === 'progress_bar') :
            echo 'Bootstrap Progress Bar ' . $admin_name;
        elseif ($page_name === 'search') :
            echo 'Search ' . $admin_name;
        elseif ($page_name === 'tooltips') :
            echo 'Tooltips ' . $admin_name;
        elseif ($page_name === 'treeview') :
            echo 'Tree View ' . $admin_name;
        elseif ($page_name === 'typography') :
            echo 'Typography ' . $admin_name;
        elseif ($page_name === 'font_icons') :
            echo 'Font Icon ' . $admin_name;
        
        // Forms
        elseif ($page_name === 'basic') :
            echo 'Bootstrap Forms ' . $admin_name;
        elseif ($page_name === 'bootstrap_select') :
            echo 'Bootstrap Select ' . $admin_name;
        elseif ($page_name === 'touchspin') :
            echo 'Bootstrap Touchspin ' . $admin_name;
        elseif ($page_name === 'checkbox_radio') :
            echo 'Checkbox and Radio ' . $admin_name;
        elseif ($page_name === 'clipboard') :
            echo 'Clipboard ' . $admin_name;
        elseif ($page_name === 'date_range_picker') :
            echo 'Date and Time picker ' . $admin_name;
        elseif ($page_name === 'file_upload') :
            echo 'File Upload ' . $admin_name;
        elseif ($page_name === 'input_group') :
            echo 'Input Group ' . $admin_name;
        elseif ($page_name === 'input_mask') :
            echo 'Input Mask ' . $admin_name;
        elseif ($page_name === 'layouts') :
            echo 'Form Layouts ' . $admin_name;
        elseif ($page_name === 'markdown') :
            echo 'Markdown Editor ' . $admin_name;
        elseif ($page_name === 'maxlength') :
            echo 'Bootstrap Maxlength ' . $admin_name;
        elseif ($page_name === 'quill') :
            echo 'Quill Editor ' . $admin_name;
        elseif ($page_name === 'select2') :
            echo 'Select2 ' . $admin_name;
        elseif ($page_name === 'switches') :
            echo 'Switches ' . $admin_name;
        elseif ($page_name === 'typeahead') :
            echo 'Typeahead ' . $admin_name;
        elseif ($page_name === 'validation') :
            echo 'Bootstrap Form Validation ' . $admin_name;
        elseif ($page_name === 'wizards') :
            echo 'Wizards ' . $admin_name;

        // Maps
        elseif ($page_name === 'maps') :
            echo 'jVector Maps ' . $admin_name;

        // Pages
        elseif ($page_name === 'comming_soon') :
            echo 'Coming Soon ' . $admin_name;
        elseif ($page_name === 'contact_us') :
            echo 'Contact Form ' . $admin_name;
        elseif ($page_name === 'error404') :
            echo 'Error 404 ' . $admin_name;
        elseif ($page_name === 'error500') :
            echo 'Error 500 ' . $admin_name;
        elseif ($page_name === 'error503') :
            echo 'Error 503 ' . $admin_name;
        elseif ($page_name === 'faq') :
            echo 'FAQ Landing Page ' . $admin_name;
        elseif ($page_name === 'faq2') :
            echo 'FAQs ' . $admin_name;
        elseif ($page_name === 'helpdesk') :
            echo 'Helpdesk ' . $admin_name;
        elseif ($page_name === 'maintenence') :
            echo 'Maintenence HTML Template ' . $admin_name;
        elseif ($page_name === 'privacy') :
            echo 'Privacy Policy ' . $admin_name;
        elseif ($page_name === 'alt_menu') :
            echo 'Alternate Menu ' . $admin_name;

        // Starter Kit
        elseif ($page_name === 'blank_page') :
            echo 'Blank Page ' . $admin_name;
        elseif ($page_name === 'boxed') :
            echo 'Boxed ' . $admin_name;
        elseif ($page_name === 'breadcrumb') :
            echo 'Breadcrumbs ' . $admin_name;

        // Tables
        elseif ($page_name === 'bootstrap_basic_table') :
            echo 'Bootstrap Tables ' . $admin_name;
        elseif ($page_name === 'alternative_pagination') :
            echo 'DataTables Alternative pagination ' . $admin_name;
        elseif ($page_name === 'basic-light') :
            echo 'DataTables Basic Light ' . $admin_name;
        elseif ($page_name === 'basic') :
            echo 'DataTables Basic ' . $admin_name;
        elseif ($page_name === 'custom') :
            echo 'Custom DataTables ' . $admin_name;
        elseif ($page_name === 'html5') :
            echo 'DataTables HTML5 Export ' . $admin_name;
        elseif ($page_name === 'live_dom_ordering') :
            echo 'DataTables Live Dom Ordering ' . $admin_name;
        elseif ($page_name === 'miscellaneous') :
            echo 'Miscellaneous DataTables ' . $admin_name;
        elseif ($page_name === 'multi-column_ordering') :
            echo 'DataTables Multi-column Ordering ' . $admin_name;
        elseif ($page_name === 'multiple_tables') :
            echo 'Multiple DataTables ' . $admin_name;
        elseif ($page_name === 'ordering_sorting') :
            echo 'DataTables Default Order Sorting ' . $admin_name;
        elseif ($page_name === 'range_search') :
            echo 'DataTables Range Search ' . $admin_name;

        // User
        elseif ($page_name === 'account_settings') :
            echo 'Account Settings ' . $admin_name;
        elseif ($page_name === 'profile') :
            echo 'User Profile ' . $admin_name;

        // Widgets
        elseif ($page_name === 'widgets') :
            echo 'Widgets ' . $admin_name;
        endif;
    }
endif;

if (!function_exists('set_breadcrumb')) {
    function set_breadcrumb($page_name, $category_name) {
        
        $category = ucfirst($category_name);
        
        $removeUnderscore = str_replace('_', ' ', $page_name);

        $removeDash = str_replace('-', ' ', $removeUnderscore);

        $page = ucwords($removeDash);

        if ($page_name === 'analytics') :
            // echo 'CORK Admin - Multipurpose Bootstrap Dashboard Template';
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'sales') :
            // echo 'Sales Admin ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';

        // Apps
        elseif ($page_name === 'calendar') :
            // echo 'Fullcalendar Drag and Drop Event ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'chat') :
            // echo 'Chat Application ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'contacts') :
            // echo 'Contact Profile ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'invoice') :
            // echo 'Invoice ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'mailbox') :
            // echo 'Mailbox ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'notes') :
            // echo 'Notes ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'scrumboard') :
            // echo 'Scrum Task Board ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'todo-list') :
            // echo 'Todo List ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';

        // Charts
        elseif ($page_name === 'charts') :
            // echo 'Apex Chart '. $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>Apex</span></li>';

        // Components
        elseif ($page_name === 'accordions') :
            // echo 'Accordions ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'blockui') :
            // echo 'Block UI ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'bootstrap_carousel') :
            // echo 'Bootstrap Carousel ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'cards') :
            // echo 'Card ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'countdown') :
            // echo 'Countdown ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'counter') :
            // echo 'Counter ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'lightbox') :
            // echo 'Lightbox ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'list_group') :
            // echo 'List Group ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'media_object') :
            // echo 'Media Object ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'modals') :
            // echo 'Modals ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'pricing_table') :
            // echo 'Pricing Tables ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'session_timeout') :
            // echo 'Session Timeout ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'notifications') :
            // echo 'Notifications ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'sweet_alerts') :
            // echo 'SweetAlert ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'tabs') :
            // echo 'Tabs ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'timeline') :
            // echo 'Timeline ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';

        // Drag And Drop
        elseif ($page_name === 'drag_n_drop') :
            // echo 'Dragula Drag and Drop ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">Drag and Drop</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>Dragula</span></li>';

        // Elements
        elseif ($page_name === 'alerts') :
            // echo 'Alerts ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'avatars') :
            // echo 'Avatar ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'badges') :
            // echo 'Badge ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'breadcrumbs') :
            // echo 'Breadcrumb ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'button_group') :
            // echo 'Button Group ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'buttons') :
            // echo 'Bootstrap Buttons ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'color_library') :
            // echo 'Color Library ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'dropdown') :
            // echo 'Dropdown ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'infobox') :
            // echo 'Infobox ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'jumbotron') :
            // echo 'Jumbotron ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'loaders') :
            // echo 'Loaders ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'pagination') :
            // echo 'Pagination ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'popovers') :
            // echo 'Popovers ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'progress_bar') :
            // echo 'Bootstrap Progress Bar ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'search') :
            // echo 'Search ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'tooltips') :
            // echo 'Tooltips ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'treeview') :
            // echo 'Tree View ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'typography') :
            // echo 'Typography ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'font_icons') :
            // echo 'Font Icon ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $page .'</a></li>';
        
        // Forms
        elseif ($page_name === 'basic') :
            // echo 'Bootstrap Forms ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'bootstrap_select') :
            // echo 'Bootstrap Select ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'touchspin') :
            // echo 'Bootstrap Touchspin ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'checkbox_radio') :
            // echo 'Checkbox and Radio ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>Checkbox and Radio</span></li>';
        elseif ($page_name === 'clipboard') :
            // echo 'Clipboard ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'date_range_picker') :
            // echo 'Date and Time picker ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>Date and Range Picker</span></li>';
        elseif ($page_name === 'file_upload') :
            // echo 'File Upload ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'input_group') :
            // echo 'Input Group ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'input_mask') :
            // echo 'Input Mask ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'layouts') :
            // echo 'Form Layouts ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'markdown') :
            // echo 'Markdown Editor ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .' Editor</span></li>';
        elseif ($page_name === 'maxlength') :
            // echo 'Bootstrap Maxlength ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'quill') :
            // echo 'Quill Editor ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .' Editor</span></li>';
        elseif ($page_name === 'select2') :
            // echo 'Select2 ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'switches') :
            // echo 'Switches ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'typeahead') :
            // echo 'Typeahead ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'validation') :
            // echo 'Bootstrap Form Validation ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'wizards') :
            // echo 'Wizards ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';

        // Maps
        elseif ($page_name === 'maps') :
            // echo 'jVector Maps ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>jVector</span></li>';

        // Pages
        elseif ($page_name === 'comming_soon') :
            // echo 'Coming Soon ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'contact_us') :
            // echo 'Contact Form ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'error404') :
            // echo 'Error 404 ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'error500') :
            // echo 'Error 500 ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'error503') :
            // echo 'Error 503 ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'faq') :
            // echo 'FAQ Landing Page ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'faq2') :
            // echo 'FAQs ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>FAQs</span></li>';
        elseif ($page_name === 'helpdesk') :
            // echo 'Helpdesk ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'maintenence') :
            // echo 'Maintenence HTML Template ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'privacy') :
            // echo 'Privacy Policy ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'alt_menu') :
            // echo 'Alternate Menu ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">Starter Kit</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>Alternate Menu</span></li>';

        // Starter Kit
        elseif ($page_name === 'blank_page') :
            // echo 'Blank Page ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">Blank Page</a></li>';
        elseif ($page_name === 'boxed') :
            // echo 'Boxed ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">Starter Kit</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'breadcrumb') :
            // echo 'Breadcrumbs ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">Starter Kit</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';

        // Tables
        elseif ($page_name === 'bootstrap_basic_table') :
            // echo 'Bootstrap Tables ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>Basic</span></li>';
        elseif ($page_name === 'alternative_pagination') :
            // echo 'DataTables Alternative pagination ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">DataTables</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'basic-light') :
            // echo 'DataTables Basic Light ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">DataTables</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>Light</span></li>';
        elseif ($page_name === 'basic') :
            // echo 'DataTables Basic ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">DataTables</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'custom') :
            // echo 'Custom DataTables ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">DataTables</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'html5') :
            // echo 'DataTables HTML5 Export ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">DataTables</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>HTML5 Export</span></li>';
        elseif ($page_name === 'live_dom_ordering') :
            // echo 'DataTables Live Dom Ordering ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">DataTables</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>Live Dom Ordering</span></li>';
        elseif ($page_name === 'miscellaneous') :
            // echo 'Miscellaneous DataTables ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">DataTables</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'multi-column_ordering') :
            // echo 'DataTables Multi-column Ordering ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">DataTables</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>Multi-column</span></li>';
        elseif ($page_name === 'multiple_tables') :
            // echo 'Multiple DataTables ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">DataTables</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>Multiple</span></li>';
        elseif ($page_name === 'ordering_sorting') :
            // echo 'DataTables Default Order Sorting ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">DataTables</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>Order Sorting</span></li>';
        elseif ($page_name === 'range_search') :
            // echo 'DataTables Range Search ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">DataTables</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';

        // User
        elseif ($page_name === 'account_settings') :
            // echo 'Account Settings ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';
        elseif ($page_name === 'profile') :
            // echo 'User Profile ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $category .'</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>' . $page .'</span></li>';

        // Widgets
        elseif ($page_name === 'widgets') :
            // echo 'Widgets ' . $admin_name;
            echo '<li class="breadcrumb-item"><a href="javascript:void(0);">'. $page .'</a></li>';
        endif;


    }
}


// Function to get the client IP address
function get_client_ip() {
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

function scrollspy($offset) {
    echo 'data-target="#navSection" data-spy="scroll" data-offset="'. $offset . '"';
}

@endphp