<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::group(['middleware' => 'auth'] , function() {

    // $this->middleware

    Route::get('/analytics', function() {
        // $category_name = '';
        $data = [
            'category_name' => 'dashboard',
            'page_name' => 'analytics',
            'has_scrollspy' => 0,
            'scrollspy_offset' => '',
        ];
        // $pageName = 'analytics';
        return view('dashboard2')->with($data);
    });
    
    Route::get('/sales', function() {
        // $category_name = '';
        $data = [
            'category_name' => 'dashboard',
            'page_name' => 'sales',
            'has_scrollspy' => 0,
            'scrollspy_offset' => '',
        ];
        // $pageName = 'sales';
        return view('dashboard')->with($data);
    });



    // APPS
    Route::prefix('apps')->group(function () {
        Route::get('/calendar', function() {
            // $category_name = 'calendar';
            $data = [
                'category_name' => 'apps',
                'page_name' => 'calendar',
                'has_scrollspy' => 0,
                'scrollspy_offset' => '',
            ];
            // $pageName = 'calendar';
            return view('pages.apps.apps_calendar')->with($data);
        });
        Route::get('/chat', function() {
            // $category_name = 'chat';
            $data = [
                'category_name' => 'apps',
                'page_name' => 'chat',
                'has_scrollspy' => 0,
                'scrollspy_offset' => '',
            ];
            // $pageName = 'chat';
            return view('pages.apps.apps_chat')->with($data);
        });
        Route::get('/contacts', function() {
            // $category_name = 'contacts';
            $data = [
                'category_name' => 'apps',
                'page_name' => 'contacts',
                'has_scrollspy' => 0,
                'scrollspy_offset' => '',
            ];
            // $pageName = 'contacts';
            return view('pages.apps.apps_contacts')->with($data);
        });
        Route::get('/invoice', function() {
            // $category_name = 'invoice';
            $data = [
                'category_name' => 'apps',
                'page_name' => 'invoice',
                'has_scrollspy' => 0,
                'scrollspy_offset' => '',
            ];
            // $pageName = 'invoice';
            return view('pages.apps.apps_invoice')->with($data);
        });
        Route::get('/mailbox', function() {
            // $category_name = 'mailbox';
            $data = [
                'category_name' => 'apps',
                'page_name' => 'mailbox',
                'has_scrollspy' => 0,
                'scrollspy_offset' => '',
            ];
            // $pageName = 'mailbox';
            return view('pages.apps.apps_mailbox')->with($data);
        });
        Route::get('/notes', function() {
            // $category_name = 'notes';
            $data = [
                'category_name' => 'apps',
                'page_name' => 'notes',
                'has_scrollspy' => 0,
                'scrollspy_offset' => '',
            ];
            // $pageName = 'notes';
            return view('pages.apps.apps_notes')->with($data);
        });
        Route::get('/scrumboard', function() {
            $category_name = 'scrumboard';
            $data = [
                'category_name' => 'apps',
                'page_name' => 'scrumboard',
                'has_scrollspy' => 0,
                'scrollspy_offset' => '',
            ];
            // $pageName = 'scrumboard';
            return view('pages.apps.apps_scrumboard')->with($data);
        });
        Route::get('/todoList', function() {
            // $category_name = 'todo-list';
            $data = [
                'category_name' => 'apps',
                'page_name' => 'todo-list',
                'has_scrollspy' => 0,
                'scrollspy_offset' => '',
            ];
            // $pageName = 'todo-list';
            return view('pages.apps.apps_todoList')->with($data);
        });
    });

    // Authentication
    Route::prefix('authentication')->group(function () {
        Route::get('/lockscreen_boxed', function() {
            // $category_name = 'auth';
            $data = [
                'category_name' => 'auth',
                'page_name' => 'auth_boxed',
                'has_scrollspy' => 0,
                'scrollspy_offset' => '',
            ];
            // $pageName = 'auth_boxed';
            return view('pages.authentication.auth_lockscreen_boxed')->with($data);
        });
        Route::get('/lockscreen', function() {
            // $category_name = 'auth';
            $data = [
                'category_name' => 'auth',
                'page_name' => 'auth_default',
                'has_scrollspy' => 0,
                'scrollspy_offset' => '',
            ];
            // $pageName = 'auth_default';
            return view('pages.authentication.auth_lockscreen')->with($data);
        });
        Route::get('/login_boxed', function() {
            // $category_name = 'auth';
            $data = [
                'category_name' => 'auth',
                'page_name' => 'auth_boxed',
                'has_scrollspy' => 0,
                'scrollspy_offset' => '',
            ];
            // $pageName = 'auth_boxed';
            return view('pages.authentication.auth_login_boxed')->with($data);
        });
        Route::get('/login', function() {
            // $category_name = 'auth';
            $data = [
                'category_name' => 'auth',
                'page_name' => 'auth_default',
                'has_scrollspy' => 0,
                'scrollspy_offset' => '',
            ];
            // $pageName = 'auth_default';
            return view('pages.authentication.auth_login')->with($data);
        });
        Route::get('/pass_recovery_boxed', function() {
            // $category_name = 'auth';
            $data = [
                'category_name' => 'auth',
                'page_name' => 'auth_boxed',
                'has_scrollspy' => 0,
                'scrollspy_offset' => '',
            ];
            // $pageName = 'auth_boxed';
            return view('pages.authentication.auth_pass_recovery_boxed')->with($data);
        });
        Route::get('/pass_recovery', function() {
            // $category_name = 'auth';
            $data = [
                'category_name' => 'auth',
                'page_name' => 'auth_default',
                'has_scrollspy' => 0,
                'scrollspy_offset' => '',
            ];
            // $pageName = 'auth_default';
            return view('pages.authentication.auth_pass_recovery')->with($data);
        });
        Route::get('/register_boxed', function() {
            // $category_name = 'auth';
            $data = [
                'category_name' => 'auth',
                'page_name' => 'auth_boxed',
                'has_scrollspy' => 0,
                'scrollspy_offset' => '',
            ];
            // $pageName = 'auth_boxed';
            return view('pages.authentication.auth_register_boxed')->with($data);
        });
        Route::get('/register', function() {
            // $category_name = 'auth';
            $data = [
                'category_name' => 'auth',
                'page_name' => 'auth_default',
                'has_scrollspy' => 0,
                'scrollspy_offset' => '',
            ];
            // $pageName = 'auth_default';
            return view('pages.authentication.auth_register')->with($data);
        });
    });


    // Charts
    // Route::prefix('charts')->group(function () {
        Route::get('/charts', function() {
            // $category_name = 'chart';
            $data = [
                'category_name' => 'charts',
                'page_name' => 'charts',
                'has_scrollspy' => 1,
                'scrollspy_offset' => 140,

            ];
            // $pageName = 'charts';
            return view('pages.charts.charts_apex')->with($data);
        });
    // });


    // Components
    Route::prefix('components')->group(function () {
        Route::get('/accordions', function() {
            // $category_name = '';
            $data = [
                'category_name' => 'components',
                'page_name' => 'accordions',
                'has_scrollspy' => 1,
                'scrollspy_offset' => 100,

            ];
            // $pageName = 'accordion';
            return view('pages.components.component_accordion')->with($data);
        });
        Route::get('/blockui', function() {
            // $category_name = '';
            $data = [
                'category_name' => 'components',
                'page_name' => 'blockui',
                'has_scrollspy' => 1,
                'scrollspy_offset' => 100,

            ];
            // $pageName = 'blockui';
            return view('pages.components.component_blockui')->with($data);
        });
        Route::get('/carousel', function() {
            // $category_name = '';
            $data = [
                'category_name' => 'components',
                'page_name' => 'bootstrap_carousel',
                'has_scrollspy' => 1,
                'scrollspy_offset' => 100,

            ];
            // $pageName = 'bootstrap_carousel';
            return view('pages.components.component_bootstrap_carousel')->with($data);
        });
        Route::get('/cards', function() {
            // $category_name = '';
            $data = [
                'category_name' => 'components',
                'page_name' => 'cards',
                'has_scrollspy' => 1,
                'scrollspy_offset' => 100,

            ];
            // $pageName = 'cards';
            return view('pages.components.component_cards')->with($data);
        });
        Route::get('/countdown', function() {
            // $category_name = '';
            $data = [
                'category_name' => 'components',
                'page_name' => 'countdown',
                'has_scrollspy' => 1,
                'scrollspy_offset' => 100,

            ];
            // $pageName = 'countdown';
            return view('pages.components.component_countdown')->with($data);
        });
        Route::get('/counter', function() {
            // $category_name = '';
            $data = [
                'category_name' => 'components',
                'page_name' => 'counter',
                'has_scrollspy' => 1,
                'scrollspy_offset' => 100,

            ];
            // $pageName = 'counter';
            return view('pages.components.component_counter')->with($data);
        });
        Route::get('/lightbox', function() {
            // $category_name = '';
            $data = [
                'category_name' => 'components',
                'page_name' => 'lightbox',
                'has_scrollspy' => 0,
                'scrollspy_offset' => '',

            ];
            // $pageName = 'lightbox';
            return view('pages.components.component_lightbox')->with($data);
        });
        Route::get('/list_group', function() {
            // $category_name = '';
            $data = [
                'category_name' => 'components',
                'page_name' => 'list_group',
                'has_scrollspy' => 1,
                'scrollspy_offset' => 100,

            ];
            // $pageName = 'list_group';
            return view('pages.components.component_list_group')->with($data);
        });
        Route::get('/media_object', function() {
            // $category_name = '';
            $data = [
                'category_name' => 'components',
                'page_name' => 'media_object',
                'has_scrollspy' => 1,
                'scrollspy_offset' => 100,

            ];
            // $pageName = 'media_object';
            return view('pages.components.component_media_object')->with($data);
        });
        Route::get('/modals', function() {
            // $category_name = '';
            $data = [
                'category_name' => 'components',
                'page_name' => 'modals',
                'has_scrollspy' => 1,
                'scrollspy_offset' => 100,

            ];
            // $pageName = 'modal';
            return view('pages.components.component_modal')->with($data);
        });
        Route::get('/pricing_tables', function() {
            // $category_name = '';
            $data = [
                'category_name' => 'components',
                'page_name' => 'pricing_table',
                'has_scrollspy' => 0,
                'scrollspy_offset' => '',

            ];
            // $pageName = 'pricing_table';
            return view('pages.components.component_pricing_table')->with($data);
        });
        Route::get('/session_timeout', function() {
            // $category_name = '';
            $data = [
                'category_name' => 'components',
                'page_name' => 'session_timeout',
                'has_scrollspy' => 1,
                'scrollspy_offset' => 100,

            ];
            // $pageName = 'session_timeout';
            return view('pages.components.component_session_timeout')->with($data);
        });
        Route::get('/notifications', function() {
            // $category_name = '';
            $data = [
                'category_name' => 'components',
                'page_name' => 'notifications',
                'has_scrollspy' => 1,
                'scrollspy_offset' => 100,

            ];
            // $pageName = 'snackbar';
            return view('pages.components.component_snackbar')->with($data);
        });
        Route::get('/sweet_alerts', function() {
            // $category_name = '';
            $data = [
                'category_name' => 'components',
                'page_name' => 'sweet_alerts',
                'has_scrollspy' => 1,
                'scrollspy_offset' => 100,

            ];
            // $pageName = 'sweetalert';
            return view('pages.components.component_sweetalert')->with($data);
        });
        Route::get('/tabs', function() {
            // $category_name = '';
            $data = [
                'category_name' => 'components',
                'page_name' => 'tabs',
                'has_scrollspy' => 1,
                'scrollspy_offset' => 100,

            ];
            // $pageName = 'tabs';
            return view('pages.components.component_tabs')->with($data);
        });
        Route::get('/timeline', function() {
            // $category_name = '';
            $data = [
                'category_name' => 'components',
                'page_name' => 'timeline',
                'has_scrollspy' => 1,
                'scrollspy_offset' => 100,

            ];
            // $pageName = 'timeline';
            return view('pages.components.component_timeline')->with($data);
        });
    });


    // Drag and Drop
    // Route::prefix('drag_n_drop')->group(function () {
    Route::get('/drag_and_drop', function() {
        // $category_name = '';
        $data = [
            'category_name' => 'drag_n_drop',
            'page_name' => 'drag_n_drop',
                'has_scrollspy' => 0,
                'scrollspy_offset' => '',

        ];
        // $pageName = 'drag_n_drop';
        return view('pages.drag_and_drop.dragndrop_dragula')->with($data);
    });
    // });


    // Elements
    Route::prefix('elements')->group(function () {
        Route::get('/alerts', function() {
            // $category_name = '';
            $data = [
                'category_name' => 'elements',
                'page_name' => 'alerts',
                'has_scrollspy' => 1,
                'scrollspy_offset' => 140,

            ];
            // $pageName = 'alerts';
            return view('pages.elements.element_alerts')->with($data);
        });
        Route::get('/avatars', function() {
            // $category_name = '';
            $data = [
                'category_name' => 'elements',
                'page_name' => 'avatars',
                'has_scrollspy' => 1,
                'scrollspy_offset' => 140,

            ];
            // $pageName = 'avatars';
            return view('pages.elements.element_avatar')->with($data);
        });
        Route::get('/badges', function() {
            // $category_name = '';
            $data = [
                'category_name' => 'elements',
                'page_name' => 'badges',
                'has_scrollspy' => 1,
                'scrollspy_offset' => 140,

            ];
            // $pageName = 'badges';
            return view('pages.elements.element_badges')->with($data);
        });
        Route::get('/breadcrumbs', function() {
            // $category_name = '';
            $data = [
                'category_name' => 'elements',
                'page_name' => 'breadcrumbs',
                'has_scrollspy' => 1,
                'scrollspy_offset' => 140,

            ];
            // $pageName = 'breadcrumbs';
            return view('pages.elements.element_breadcrumbs')->with($data);
        });
        Route::get('/button_group', function() {
            // $category_name = '';
            $data = [
                'category_name' => 'elements',
                'page_name' => 'button_group',
                'has_scrollspy' => 1,
                'scrollspy_offset' => 140,

            ];
            // $pageName = 'buttons_group';
            return view('pages.elements.element_buttons_group')->with($data);
        });
        Route::get('/buttons', function() {
            // $category_name = '';
            $data = [
                'category_name' => 'elements',
                'page_name' => 'buttons',
                'has_scrollspy' => 1,
                'scrollspy_offset' => 140,

            ];
            // $pageName = 'buttons';
            return view('pages.elements.element_buttons')->with($data);
        });
        Route::get('/color_library', function() {
            // $category_name = '';
            $data = [
                'category_name' => 'elements',
                'page_name' => 'color_library',
                'has_scrollspy' => 1,
                'scrollspy_offset' => 140,

            ];
            // $pageName = 'color_library';
            return view('pages.elements.element_color_library')->with($data);
        });
        Route::get('/dropdown', function() {
            // $category_name = '';
            $data = [
                'category_name' => 'elements',
                'page_name' => 'dropdown',
                'has_scrollspy' => 1,
                'scrollspy_offset' => 140,

            ];
            // $pageName = 'dropdown';
            return view('pages.elements.element_dropdown')->with($data);
        });
        Route::get('/infobox', function() {
            // $category_name = '';
            $data = [
                'category_name' => 'elements',
                'page_name' => 'infobox',
                'has_scrollspy' => 1,
                'scrollspy_offset' => 140,

            ];
            // $pageName = 'infobox';
            return view('pages.elements.element_infobox')->with($data);
        });
        Route::get('/jumbotron', function() {
            // $category_name = '';
            $data = [
                'category_name' => 'elements',
                'page_name' => 'jumbotron',
                'has_scrollspy' => 1,
                'scrollspy_offset' => 140,

            ];
            // $pageName = 'jumbotron';
            return view('pages.elements.element_jumbotron')->with($data);
        });
        Route::get('/loaders', function() {
            // $category_name = '';
            $data = [
                'category_name' => 'elements',
                'page_name' => 'loaders',
                'has_scrollspy' => 1,
                'scrollspy_offset' => 140,

            ];
            // $pageName = 'loader';
            return view('pages.elements.element_loader')->with($data);
        });
        Route::get('/pagination', function() {
            // $category_name = '';
            $data = [
                'category_name' => 'elements',
                'page_name' => 'pagination',
                'has_scrollspy' => 1,
                'scrollspy_offset' => 140,

            ];
            // $pageName = 'pagination';
            return view('pages.elements.element_pagination')->with($data);
        });
        Route::get('/popovers', function() {
            // $category_name = '';
            $data = [
                'category_name' => 'elements',
                'page_name' => 'popovers',
                'has_scrollspy' => 1,
                'scrollspy_offset' => 140,

            ];
            // $pageName = 'popovers';
            return view('pages.elements.element_popovers')->with($data);
        });
        Route::get('/progress_bar', function() {
            // $category_name = '';
            $data = [
                'category_name' => 'elements',
                'page_name' => 'progress_bar',
                'has_scrollspy' => 1,
                'scrollspy_offset' => 140,

            ];
            // $pageName = 'progress_bar';
            return view('pages.elements.element_progress_bar')->with($data);
        });
        Route::get('/search', function() {
            // $category_name = '';
            $data = [
                'category_name' => 'elements',
                'page_name' => 'search',
                'has_scrollspy' => 1,
                'scrollspy_offset' => 140,

            ];
            // $pageName = 'search';
            return view('pages.elements.element_search')->with($data);
        });
        Route::get('/tooltips', function() {
            // $category_name = '';
            $data = [
                'category_name' => 'elements',
                'page_name' => 'tooltips',
                'has_scrollspy' => 1,
                'scrollspy_offset' => 140,

            ];
            // $pageName = 'tooltips';
            return view('pages.elements.element_tooltips')->with($data);
        });
        Route::get('/treeview', function() {
            // $category_name = '';
            $data = [
                'category_name' => 'elements',
                'page_name' => 'treeview',
                'has_scrollspy' => 1,
                'scrollspy_offset' => 140,

            ];
            // $pageName = 'treeview';
            return view('pages.elements.element_treeview')->with($data);
        });
        Route::get('/typography', function() {
            // $category_name = '';
            $data = [
                'category_name' => 'elements',
                'page_name' => 'typography',
                'has_scrollspy' => 1,
                'scrollspy_offset' => 140,

            ];
            // $pageName = 'typography';
            return view('pages.elements.element_typography')->with($data);
        });
    });

    // Font Icons
    // Route::prefix('fonticons')->group(function () {
    Route::get('/font_icons', function() {
        // $category_name = 'fonticons';
        $data = [
            'category_name' => 'fonticons',
            'page_name' => 'font_icons',
                'has_scrollspy' => 1,
                'scrollspy_offset' => 140,

        ];
        // $pageName = 'fonticons';
        return view('pages.fonticons.fonticons')->with($data);
    });
    // });

    // Forms
    Route::prefix('forms')->group(function () {
        Route::get('/basic', function() {
            // $category_name = '';
            $data = [
                'category_name' => 'forms',
                'page_name' => 'basic',
                'has_scrollspy' => 1,
                'scrollspy_offset' => 100,

            ];
            // $pageName = 'bootstrap_basic';
            return view('pages.forms.form_bootstrap_basic')->with($data);
        });
        Route::get('/bootstrap_select', function() {
            // $category_name = '';
            $data = [
                'category_name' => 'forms',
                'page_name' => 'bootstrap_select',
                'has_scrollspy' => 1,
                'scrollspy_offset' => 100,

            ];
            // $pageName = 'bootstrap_select';
            return view('pages.forms.form_bootstrap_select')->with($data);
        });
        Route::get('/touchspin', function() {
            // $category_name = '';
            $data = [
                'category_name' => 'forms',
                'page_name' => 'touchspin',
                'has_scrollspy' => 1,
                'scrollspy_offset' => 100,

            ];
            // $pageName = 'bootstrap_touchspin';
            return view('pages.forms.form_bootstrap_touchspin')->with($data);
        });
        Route::get('/checkbox_radio', function() {
            // $category_name = '';
            $data = [
                'category_name' => 'forms',
                'page_name' => 'checkbox_radio',
                'has_scrollspy' => 1,
                'scrollspy_offset' => 100,

            ];
            // $pageName = 'checkbox_radio';
            return view('pages.forms.form_checkbox_radio')->with($data);
        });
        Route::get('/clipboard', function() {
            // $category_name = '';
            $data = [
                'category_name' => 'forms',
                'page_name' => 'clipboard',
                'has_scrollspy' => 1,
                'scrollspy_offset' => 100,

            ];
            // $pageName = 'clipboard';
            return view('pages.forms.form_clipboard')->with($data);
        });
        Route::get('/date_range_picker', function() {
            // $category_name = '';
            $data = [
                'category_name' => 'forms',
                'page_name' => 'date_range_picker',
                'has_scrollspy' => 1,
                'scrollspy_offset' => 100,

            ];
            // $pageName = 'date_range_picker';
            return view('pages.forms.form_date_range_picker')->with($data);
        });
        Route::get('/file_upload', function() {
            // $category_name = '';
            $data = [
                'category_name' => 'forms',
                'page_name' => 'file_upload',
                'has_scrollspy' => 1,
                'scrollspy_offset' => 100,

            ];
            // $pageName = 'fileupload';
            return view('pages.forms.form_fileupload')->with($data);
        });
        Route::get('/input_group', function() {
            // $category_name = '';
            $data = [
                'category_name' => 'forms',
                'page_name' => 'input_group',
                'has_scrollspy' => 1,
                'scrollspy_offset' => 100,

            ];
            // $pageName = 'input_group_basic';
            return view('pages.forms.form_input_group_basic')->with($data);
        });
        Route::get('/input_mask', function() {
            // $category_name = '';
            $data = [
                'category_name' => 'forms',
                'page_name' => 'input_mask',
                'has_scrollspy' => 1,
                'scrollspy_offset' => 100,

            ];
            // $pageName = 'input_mask';
            return view('pages.forms.form_input_mask')->with($data);
        });
        Route::get('/layouts', function() {
            // $category_name = '';
            $data = [
                'category_name' => 'forms',
                'page_name' => 'layouts',
                'has_scrollspy' => 1,
                'scrollspy_offset' => 100,

            ];
            // $pageName = 'layouts';
            return view('pages.forms.form_layouts')->with($data);
        });
        Route::get('/markdown_editor', function() {
            // $category_name = '';
            $data = [
                'category_name' => 'forms',
                'page_name' => 'markdown',
                'has_scrollspy' => 1,
                'scrollspy_offset' => 100,

            ];
            // $pageName = 'markdown';
            return view('pages.forms.form_markdown')->with($data);
        });
        Route::get('/maxlength', function() {
            // $category_name = '';
            $data = [
                'category_name' => 'forms',
                'page_name' => 'maxlength',
                'has_scrollspy' => 1,
                'scrollspy_offset' => 100,

            ];
            // $pageName = 'maxlength';
            return view('pages.forms.form_maxlength')->with($data);
        });
        Route::get('/quill_editor', function() {
            // $category_name = '';
            $data = [
                'category_name' => 'forms',
                'page_name' => 'quill',
                'has_scrollspy' => 1,
                'scrollspy_offset' => 100,

            ];
            // $pageName = 'quill';
            return view('pages.forms.form_quill')->with($data);
        });
        Route::get('/select2', function() {
            // $category_name = '';
            $data = [
                'category_name' => 'forms',
                'page_name' => 'select2',
                'has_scrollspy' => 1,
                'scrollspy_offset' => 100,

            ];
            // $pageName = 'select2';
            return view('pages.forms.form_select2')->with($data);
        });
        Route::get('/switches', function() {
            // $category_name = '';
            $data = [
                'category_name' => 'forms',
                'page_name' => 'switches',
                'has_scrollspy' => 1,
                'scrollspy_offset' => 100,

            ];
            // $pageName = 'switches';
            return view('pages.forms.form_switches')->with($data);
        });
        Route::get('/typeahead', function() {
            // $category_name = '';
            $data = [
                'category_name' => 'forms',
                'page_name' => 'typeahead',
                'has_scrollspy' => 1,
                'scrollspy_offset' => 100,

            ];
            // $pageName = 'typeahead';
            return view('pages.forms.form_typeahead')->with($data);
        });
        Route::get('/validation', function() {
            // $category_name = '';
            $data = [
                'category_name' => 'forms',
                'page_name' => 'validation',
                'has_scrollspy' => 1,
                'scrollspy_offset' => 100,

            ];
            // $pageName = 'validation';
            return view('pages.forms.form_validation')->with($data);
        });
        Route::get('/wizards', function() {
            // $category_name = '';
            $data = [
                'category_name' => 'forms',
                'page_name' => 'wizards',
                'has_scrollspy' => 1,
                'scrollspy_offset' => 100,

            ];
            // $pageName = 'wizard';
            return view('pages.forms.form_wizard')->with($data);
        });
    });

    // Maps
    Route::get('/maps', function() {
        // $category_name = '';
        $data = [
            'category_name' => 'maps',
            'page_name' => 'maps',
                'has_scrollspy' => 1,
                'scrollspy_offset' => 140,

        ];
        // $pageName = 'maps';
        return view('pages.maps.map_jvector')->with($data);
    });


    // Pages
    Route::prefix('pages')->group(function () {
        Route::get('/coming_soon', function() {
            // $category_name = '';
            $data = [
                'category_name' => 'pages',
                'page_name' => 'coming_soon',
                'has_scrollspy' => 0,
                'scrollspy_offset' => '',

            ];
            // $pageName = 'coming_soon';
            return view('pages.pages.pages_coming_soon')->with($data);
        });
        Route::get('/contact_us_form', function() {
            // $category_name = '';
            $data = [
                'category_name' => 'pages',
                'page_name' => 'contact_us',
                'has_scrollspy' => 0,
                'scrollspy_offset' => '',

            ];
            // $pageName = 'contact_us';
            return view('pages.pages.pages_contact_us')->with($data);
        });
        Route::get('/error_404', function() {
            // $category_name = '';
            $data = [
                'category_name' => 'pages',
                'page_name' => 'error404',
                'has_scrollspy' => 0,
                'scrollspy_offset' => '',

            ];
            // $pageName = 'error404';
            return view('pages.pages.pages_error404')->with($data);
        });
        Route::get('/error_500', function() {
            // $category_name = '';
            $data = [
                'category_name' => 'pages',
                'page_name' => 'error500',
                'has_scrollspy' => 0,
                'scrollspy_offset' => '',

            ];
            // $pageName = 'error500';
            return view('pages.pages.pages_error500')->with($data);
        });
        Route::get('/error_503', function() {
            // $category_name = '';
            $data = [
                'category_name' => 'pages',
                'page_name' => 'error503',
                'has_scrollspy' => 0,
                'scrollspy_offset' => '',

            ];
            // $pageName = 'error503';
            return view('pages.pages.pages_error503')->with($data);
        });
        Route::get('/faq', function() {
            // $category_name = '';
            $data = [
                'category_name' => 'pages',
                'page_name' => 'faq',
                'has_scrollspy' => 0,
                'scrollspy_offset' => '',

            ];
            // $pageName = 'faq';
            return view('pages.pages.pages_faq')->with($data);
        });
        Route::get('/faq2', function() {
            // $category_name = '';
            $data = [
                'category_name' => 'pages',
                'page_name' => 'faq2',
                'has_scrollspy' => 0,
                'scrollspy_offset' => '',

            ];
            // $pageName = 'faq2';
            return view('pages.pages.pages_faq2')->with($data);
        });
        Route::get('/helpdesk', function() {
            // $category_name = '';
            $data = [
                'category_name' => 'pages',
                'page_name' => 'helpdesk',
                'has_scrollspy' => 0,
                'scrollspy_offset' => '',

            ];
            // $pageName = 'helpdesk';
            return view('pages.pages.pages_helpdesk')->with($data);
        });
        Route::get('/maintenence', function() {
            // $category_name = '';
            $data = [
                'category_name' => 'pages',
                'page_name' => 'maintenence',
                'has_scrollspy' => 0,
                'scrollspy_offset' => '',

            ];
            // $pageName = 'maintenence';
            return view('pages.pages.pages_maintenence')->with($data);
        });
        Route::get('/privacy_policy', function() {
            // $category_name = '';
            $data = [
                'category_name' => 'pages',
                'page_name' => 'privacy',
                'has_scrollspy' => 0,
                'scrollspy_offset' => '',

            ];
            // $pageName = 'privacy';
            return view('pages.pages.pages_privacy')->with($data);
        });
    });

    // Starter Kit
    Route::prefix('starter-kit')->group(function () {
        Route::get('/alternative_menu', function() {
            // $category_name = '';
            $data = [
                'category_name' => 'starter_kits',
                'page_name' => 'alt_menu',
                'has_scrollspy' => 0,
                'scrollspy_offset' => '',

            ];
            // $pageName = 'alt_menu';
            return view('pages.starter-kit.starter_kit_alt_menu')->with($data);
        });
        Route::get('/blank_page', function() {
            // $category_name = '';
            $data = [
                'category_name' => 'starter_kits',
                'page_name' => 'blank_page',
                'has_scrollspy' => 0,
                'scrollspy_offset' => '',

            ];
            // $pageName = 'blank_page';
            return view('pages.starter-kit.starter_kit_blank_page')->with($data);
        });
        Route::get('/boxed', function() {
            // $category_name = '';
            $data = [
                'category_name' => 'starter_kits',
                'page_name' => 'boxed',
                'has_scrollspy' => 0,
                'scrollspy_offset' => '',

            ];
            // $pageName = 'boxed';
            return view('pages.starter-kit.starter_kit_boxed')->with($data);
        });
        Route::get('/breadcrumbs', function() {
            // $category_name = '';
            $data = [
                'category_name' => 'starter_kits',
                'page_name' => 'breadcrumb',
                'has_scrollspy' => 0,
                'scrollspy_offset' => '',

            ];
            // $pageName = 'breadcrumb';
            return view('pages.starter-kit.starter_kit_breadcrumbs')->with($data);
        });        
    });


    // Tables
    Route::prefix('tables')->group(function () {
        Route::get('/bootstrap_basic', function() {
            // $category_name = '';
            $data = [
                'category_name' => 'bootstrap_basic_table',
                'page_name' => 'bootstrap_basic_table',
                'has_scrollspy' => 1,
                'scrollspy_offset' => 140,

            ];
            // $pageName = 'bootstrap_basic_table';
            return view('pages.tables.table_basic')->with($data);
        });
        Route::prefix('datatables')->group(function () {
            Route::get('/alternative_pagination', function() {
                // $category_name = '';
                $data = [
                    'category_name' => 'datatable',
                    'page_name' => 'alternative_pagination',
                'has_scrollspy' => 0,
                'scrollspy_offset' => '',

                ];
                // $pageName = 'alternative_pagination';
                return view('pages.tables.table_dt_alternative_pagination')->with($data);
            });
            Route::get('/basic-light', function() {
                // $category_name = '';
                $data = [
                    'category_name' => 'datatable',
                    'page_name' => 'basic-light',
                'has_scrollspy' => 0,
                'scrollspy_offset' => '',

                ];
                // $pageName = 'basic-light';
                return view('pages.tables.table_dt_basic-light')->with($data);
            });
            Route::get('/basic', function() {
                // $category_name = '';
                $data = [
                    'category_name' => 'datatable',
                    'page_name' => 'basic',
                'has_scrollspy' => 0,
                'scrollspy_offset' => '',

                ];
                // $pageName = 'basic';
                return view('pages.tables.table_dt_basic')->with($data);
            });
            Route::get('/custom', function() {
                // $category_name = '';
                $data = [
                    'category_name' => 'datatable',
                    'page_name' => 'custom',
                'has_scrollspy' => 0,
                'scrollspy_offset' => '',

                ];
                // $pageName = 'custom';
                return view('pages.tables.table_dt_custom')->with($data);
            });
            Route::get('/html5', function() {
                // $category_name = '';
                $data = [
                    'category_name' => 'datatable',
                    'page_name' => 'html5',
                'has_scrollspy' => 0,
                'scrollspy_offset' => '',

                ];
                // $pageName = 'html5';
                return view('pages.tables.table_dt_html5')->with($data);
            });
            Route::get('/live_dom_ordering', function() {
                // $category_name = '';
                $data = [
                    'category_name' => 'datatable',
                    'page_name' => 'live_dom_ordering',
                'has_scrollspy' => 0,
                'scrollspy_offset' => '',

                ];
                // $pageName = 'live_dom_ordering';
                return view('pages.tables.table_dt_live_dom_ordering')->with($data);
            });
            Route::get('/miscellaneous', function() {
                // $category_name = '';
                $data = [
                    'category_name' => 'datatable',
                    'page_name' => 'miscellaneous',
                'has_scrollspy' => 0,
                'scrollspy_offset' => '',

                ];
                // $pageName = 'miscellaneous';
                return view('pages.tables.table_dt_miscellaneous')->with($data);
            });
            Route::get('/multi-column_ordering', function() {
                // $category_name = '';
                $data = [
                    'category_name' => 'datatable',
                    'page_name' => 'multi-column_ordering',
                'has_scrollspy' => 0,
                'scrollspy_offset' => '',

                ];
                // $pageName = 'multi-column_ordering';
                return view('pages.tables.table_dt_multi-column_ordering')->with($data);
            });
            Route::get('/multiple_tables', function() {
                // $category_name = '';
                $data = [
                    'category_name' => 'datatable',
                    'page_name' => 'multiple_tables',
                'has_scrollspy' => 0,
                'scrollspy_offset' => '',

                ];
                // $pageName = 'multiple_tables';
                return view('pages.tables.table_dt_multiple_tables')->with($data);
            });
            Route::get('/ordering_sorting', function() {
                // $category_name = '';
                $data = [
                    'category_name' => 'datatable',
                    'page_name' => 'ordering_sorting',
                'has_scrollspy' => 0,
                'scrollspy_offset' => '',

                ];
                // $pageName = 'ordering_sorting';
                return view('pages.tables.table_dt_ordering_sorting')->with($data);
            });
            Route::get('/range_search', function() {
                // $category_name = '';
                $data = [
                    'category_name' => 'datatable',
                    'page_name' => 'range_search',
                'has_scrollspy' => 0,
                'scrollspy_offset' => '',

                ];
                // $pageName = 'range_search';
                return view('pages.tables.table_dt_range_search')->with($data);
            });
        });
    });

    // Users
    Route::prefix('users')->group(function () {
        Route::get('/account_settings', function() {
            // $category_name = '';
            $data = [
                'category_name' => 'users',
                'page_name' => 'account_settings',
                'has_scrollspy' => 0,
                'scrollspy_offset' => '',

            ];
            // $pageName = 'account_settings';
            return view('pages.users.user_account_setting')->with($data);
        });
        Route::get('/profile', function() {
            // $category_name = '';
            $data = [
                'category_name' => 'users',
                'page_name' => 'profile',
                'has_scrollspy' => 0,
                'scrollspy_offset' => '',

            ];
            // $pageName = 'profile';
            return view('pages.users.user_profile')->with($data);
        });
    });

    // Widgets
    Route::get('/widgets', function() {
        // $category_name = '';
        $data = [
            'category_name' => 'widgets',
            'page_name' => 'widgets',
                'has_scrollspy' => 0,
                'scrollspy_offset' => '',

        ];
        // $pageName = 'widgets';
        return view('pages.widgets.widgets')->with($data);
    });


});

Auth::routes();

Route::get('/', 'HomeController@index');

Route::get('/register', function() {
    return redirect('/login');    
});
Route::get('/password/reset', function() {
    return redirect('/login');    
});

Route::get('/', function() {
    return redirect('/sales');    
});