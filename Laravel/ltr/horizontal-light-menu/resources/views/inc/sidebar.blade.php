@if ($page_name != 'coming_soon' && $page_name != 'contact_us' && $page_name != 'error404' && $page_name != 'error500' && $page_name != 'error503' && $page_name != 'faq' && $page_name != 'helpdesk' && $page_name != 'maintenence' && $page_name != 'privacy' && $page_name != 'auth_boxed' && $page_name != 'auth_default')

    <!--  BEGIN TOPBAR  -->
    <div class="topbar-nav header navbar" role="banner">
        <nav id="topbar">
            <ul class="navbar-nav theme-brand flex-row  text-center">
                <li class="nav-item theme-logo">
                    <a href="index.html">
                        <img src="{{asset('public/storage/img/logo2.svg')}}" class="navbar-logo" alt="logo">
                    </a>
                </li>
                <li class="nav-item theme-text">
                    <a href="index.html" class="nav-link"> CORK </a>
                </li>
            </ul>

            <ul class="list-unstyled menu-categories" id="topAccordion">
                
                @if ($page_name != 'alt_menu' && $page_name != 'blank_page' && $page_name != 'boxed' && $page_name != 'breadcrumb' )

                <li class="menu single-menu  {{ ($category_name === 'dashboard') ? 'active' : '' }}">
                    <a href="#dashboard" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle autodroprown">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                            <span>Dashboard</span>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="dashboard" data-parent="#topAccordion">
                        <li class="{{ ($page_name === 'analytics') ? 'active' : '' }}">
                            <a href="/analytics"> Analytics </a>
                        </li>
                        <li class="{{ ($page_name === 'sales') ? 'active' : '' }}">
                            <a href="/sales"> Sales </a>
                        </li>
                    </ul>
                </li>

                <li class="menu single-menu {{ ($category_name === 'apps') ? 'active' : '' }}">
                    <a href="#app" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cpu"><rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect><rect x="9" y="9" width="6" height="6"></rect><line x1="9" y1="1" x2="9" y2="4"></line><line x1="15" y1="1" x2="15" y2="4"></line><line x1="9" y1="20" x2="9" y2="23"></line><line x1="15" y1="20" x2="15" y2="23"></line><line x1="20" y1="9" x2="23" y2="9"></line><line x1="20" y1="14" x2="23" y2="14"></line><line x1="1" y1="9" x2="4" y2="9"></line><line x1="1" y1="14" x2="4" y2="14"></line></svg>
                            <span>Apps</span>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="app" data-parent="#topAccordion">
                        <li class="{{ ($page_name === 'chat') ? 'active' : '' }}">
                            <a href="/apps/chat"> Chat </a>
                        </li>
                        <li class="{{ ($page_name === 'mailbox') ? 'active' : '' }}">
                            <a href="/apps/mailbox"> Mailbox </a>
                        </li>
                        <li class="{{ ($page_name === 'todo-list') ? 'active' : '' }}">
                            <a href="/apps/todoList"> Todo List </a>
                        </li>
                        <li class="{{ ($page_name === 'notes') ? 'active' : '' }}">
                            <a href="/apps/notes">Notes</a>
                        </li>
                        <li class="{{ ($page_name === 'scrumboard') ? 'active' : '' }}">
                            <a href="/apps/scrumboard">Task Board</a>
                        </li>
                        <li class="{{ ($page_name === 'contacts') ? 'active' : '' }}">
                            <a href="/apps/contacts">Contacts</a>
                        </li>
                        <li class="{{ ($page_name === 'invoice') ? 'active' : '' }}">
                            <a href="/apps/invoice">Invoice List</a>
                        </li>
                        <li class="{{ ($page_name === 'calendar') ? 'active' : '' }}">
                            <a href="/apps/calendar"> Calendar</a>
                        </li>
                    </ul>
                </li>
                
                <li class="menu single-menu {{ ($category_name === 'components') ? 'active' : '' }}">
                    <a href="#components" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                            <span>Components</span>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="components" data-parent="#topAccordion">
                        <li class="{{ ($page_name === 'tabs') ? 'active' : '' }}">
                            <a href="/components/tabs"> Tabs </a>
                        </li>
                        <li class="{{ ($page_name === 'accordions') ? 'active' : '' }}">
                            <a href="/components/accordions"> Accordions  </a>
                        </li>
                        <li class="{{ ($page_name === 'modals') ? 'active' : '' }}">
                            <a href="/components/modals"> Modals </a>
                        </li>                            
                        <li class="{{ ($page_name === 'cards') ? 'active' : '' }}">
                            <a href="/components/cards"> Cards </a>
                        </li>
                        <li class="{{ ($page_name === 'bootstrap_carousel') ? 'active' : '' }}">
                            <a href="/components/carousel">Carousel</a>
                        </li>
                        <li class="{{ ($page_name === 'blockui') ? 'active' : '' }}">
                            <a href="/components/blockui"> Block UI </a>
                        </li>
                        <li class="{{ ($page_name === 'countdown') ? 'active' : '' }}">
                            <a href="/components/countdown"> Countdown </a>
                        </li>
                        <li class="{{ ($page_name === 'counter') ? 'active' : '' }}">
                            <a href="/components/counter"> Counter </a>
                        </li>
                        <li class="{{ ($page_name === 'sweet_alerts') ? 'active' : '' }}">
                            <a href="/components/sweet_alerts"> Sweet Alerts </a>
                        </li>
                        <li class="{{ ($page_name === 'timeline') ? 'active' : '' }}">
                            <a href="/components/timeline"> Timeline </a>
                        </li>
                        <li class="{{ ($page_name === 'notifications') ? 'active' : '' }}">
                            <a href="/components/notifications"> Notifications </a>
                        </li>
                        <li class="{{ ($page_name === 'session_timeout') ? 'active' : '' }}">
                            <a href="/components/session_timeout"> Session Timeout </a>
                        </li>
                        <li class="{{ ($page_name === 'media_object') ? 'active' : '' }}">
                            <a href="/components/media_object"> Media Object </a>
                        </li>
                        <li class="{{ ($page_name === 'list_group') ? 'active' : '' }}">
                            <a href="/components/list_group"> List Group </a>
                        </li>
                        <li class="{{ ($page_name === 'pricing_table') ? 'active' : '' }}">
                            <a href="/components/pricing_tables"> Pricing Tables </a>
                        </li>
                        <li class="{{ ($page_name === 'lightbox') ? 'active' : '' }}">
                            <a href="/components/lightbox"> Lightbox </a>
                        </li>
                    </ul>
                </li>


                <li class="menu single-menu  class="{{ ($category_name === 'elements') ? 'active' : '' }}"">
                    <a href="#uiKit" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-zap"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>
                            <span>UI Kit</span>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="uiKit" data-parent="#topAccordion">
                        <li class="{{ ($page_name === 'alerts') ? 'active' : '' }}">
                            <a href="/ui-kit/alerts"> Alerts </a>
                        </li>
                        <li class="{{ ($page_name === 'avatars') ? 'active' : '' }}">
                            <a href="/ui-kit/avatars"> Avatar </a>
                        </li>
                        <li class="{{ ($page_name === 'badges') ? 'active' : '' }}">
                            <a href="/ui-kit/badges"> Badges </a>
                        </li>
                        <li class="{{ ($page_name === 'breadcrumbs') ? 'active' : '' }}">
                            <a href="/ui-kit/breadcrumbs"> Breadcrumbs </a>
                        </li>                            
                        <li class="{{ ($page_name === 'buttons') ? 'active' : '' }}">
                            <a href="/ui-kit/buttons"> Buttons </a>
                        </li>
                        <li class="{{ ($page_name === 'button_group') ? 'active' : '' }}">
                            <a href="/ui-kit/button_group"> Button Groups </a>
                        </li>
                        <li class="{{ ($page_name === 'color_library') ? 'active' : '' }}">
                            <a href="/ui-kit/color_library"> Color Library </a>
                        </li>
                        <li class="{{ ($page_name === 'dropdown') ? 'active' : '' }}">
                            <a href="/ui-kit/dropdown"> Dropdown </a>
                        </li>
                        <li class="{{ ($page_name === 'infobox') ? 'active' : '' }}">
                            <a href="/ui-kit/infobox"> Infobox </a>
                        </li>
                        <li class="{{ ($page_name === 'jumbotron') ? 'active' : '' }}">
                            <a href="/ui-kit/jumbotron"> Jumbotron </a>
                        </li>
                        <li class="{{ ($page_name === 'loaders') ? 'active' : '' }}">
                            <a href="/ui-kit/loaders"> Loader </a>
                        </li>
                        <li class="{{ ($page_name === 'pagination') ? 'active' : '' }}">
                            <a href="/ui-kit/pagination"> Pagination </a>
                        </li>
                        <li class="{{ ($page_name === 'popovers') ? 'active' : '' }}">
                            <a href="/ui-kit/popovers"> Popovers </a>
                        </li>
                        <li class="{{ ($page_name === 'progress_bar') ? 'active' : '' }}">
                            <a href="/ui-kit/progress_bar"> Progress Bar </a>
                        </li>
                        <li class="{{ ($page_name === 'search') ? 'active' : '' }}">
                            <a href="/ui-kit/search"> Search </a>
                        </li>
                        <li class="{{ ($page_name === 'tooltips') ? 'active' : '' }}">
                            <a href="/ui-kit/tooltips"> Tooltips </a>
                        </li>
                        <li class="{{ ($page_name === 'treeview') ? 'active' : '' }}">
                            <a href="/ui-kit/treeview"> Treeview </a>
                        </li>
                        <li class="{{ ($page_name === 'typography') ? 'active' : '' }}">
                            <a href="/ui-kit/typography"> Typography </a>
                        </li>
                    </ul>
                </li>

                <li class="menu single-menu {{ ($category_name === 'bootstrap_basic_table') ? 'active' : '' }} {{ ($category_name === 'datatable') ? 'active' : '' }}">
                    <a href="#tables" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layout"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>
                            <span>Tables</span>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="tables"  data-parent="#topAccordion">
                        <li class="{{ ($category_name === 'bootstrap_basic_table') ? 'active' : '' }}">
                            <a href="/tables/bootstrap_basic"> Basic </a>
                        </li>
                        <li class="sub-sub-submenu-list">
                            <a href="#datatable" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> DataTables <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                            <ul class="collapse list-unstyled sub-submenu" id="datatable" data-parent="#datatable">
                                <li class="{{ ($page_name === 'basic') ? 'active' : '' }}">
                                    <a href="/tables/datatables/basic"> Basic </a>
                                </li>
                                <li class="{{ ($page_name === 'basic-light') ? 'active' : '' }}">
                                    <a href="/tables/datatables/basic-light"> Light </a>
                                </li>
                                <li class="{{ ($page_name === 'ordering_sorting') ? 'active' : '' }}">
                                    <a href="/tables/datatables/ordering_sorting"> Order Sorting </a>
                                </li>
                                <li class="{{ ($page_name === 'multi-column_ordering') ? 'active' : '' }}">
                                    <a href="/tables/datatables/multi-column_ordering"> Multi-Column </a>
                                </li>
                                <li class="{{ ($page_name === 'multiple_tables') ? 'active' : '' }}">
                                    <a href="/tables/datatables/multiple_tables"> Multiple Tables</a>
                                </li>
                                <li class="{{ ($page_name === 'alternative_pagination') ? 'active' : '' }}">
                                    <a href="/tables/datatables/alternative_pagination"> Alt. Pagination</a>
                                </li>
                                <li class="{{ ($page_name === 'custom') ? 'active' : '' }}">
                                    <a href="/tables/datatables/custom"> Custom </a>
                                </li>
                                <li class="{{ ($page_name === 'range_search') ? 'active' : '' }}">
                                    <a href="/tables/datatables/range_search"> Range Search </a>
                                </li>
                                <li class="{{ ($page_name === 'html5') ? 'active' : '' }}">
                                    <a href="/tables/datatables/html5"> HTML5 Export </a>
                                </li>
                                <li class="{{ ($page_name === 'live_dom_ordering') ? 'active' : '' }}">
                                    <a href="/tables/datatables/live_dom_ordering"> Live DOM ordering </a>
                                </li>
                                <li class="{{ ($page_name === 'miscellaneous') ? 'active' : '' }}">
                                    <a href="/tables/datatables/miscellaneous"> Miscellaneous </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="menu single-menu {{ ($category_name === 'forms') ? 'active' : '' }}">
                    <a href="#forms" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect></svg>
                            <span>Forms</span>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="forms"  data-parent="#topAccordion">
                        <li class="{{ ($page_name === 'form_bootstrap_basic') ? 'active' : '' }}">
                            <a href="/forms/basic"> Basic </a>
                        </li>
                        <li class="{{ ($page_name === 'input_group') ? 'active' : '' }}">
                            <a href="/forms/input_group"> Input Group </a>
                        </li>
                        <li class="{{ ($page_name === 'layouts') ? 'active' : '' }}">
                            <a href="/forms/layouts"> Layouts </a>
                        </li>
                        <li class="{{ ($page_name === 'validation') ? 'active' : '' }}">
                            <a href="/forms/validation"> Validation </a>
                        </li>
                        <li class="{{ ($page_name === 'input_mask') ? 'active' : '' }}">
                            <a href="/forms/input_mask"> Input Mask </a>
                        </li>
                        <li class="{{ ($page_name === 'bootstrap_select') ? 'active' : '' }}">
                            <a href="/forms/bootstrap_select"> Bootstrap Select </a>
                        </li>
                        <li class="{{ ($page_name === 'select2') ? 'active' : '' }}">
                            <a href="/forms/select2"> Select2 </a>
                        </li>
                        <li class="{{ ($page_name === 'touchspin') ? 'active' : '' }}">
                            <a href="/forms/touchspin"> TouchSpin </a>
                        </li>
                        <li class="{{ ($page_name === 'maxlength') ? 'active' : '' }}">
                            <a href="/forms/maxlength"> Maxlength </a>
                        </li>
                        <li class="{{ ($page_name === 'checkbox_radio') ? 'active' : '' }}">
                            <a href="/forms/checkbox_radio"> Checkbox &amp; Radio </a>
                        </li>
                        <li class="{{ ($page_name === 'switches') ? 'active' : '' }}">
                            <a href="/forms/switches"> Switches </a>
                        </li>
                        <li class="{{ ($page_name === 'wizards') ? 'active' : '' }}">
                            <a href="/forms/wizards"> Wizards </a>
                        </li>
                        <li class="{{ ($page_name === 'file_upload') ? 'active' : '' }}">
                            <a href="/forms/file_upload"> File Upload </a>
                        </li>
                        <li class="{{ ($page_name === 'quill') ? 'active' : '' }}">
                            <a href="/forms/quill_editor"> Quill Editor </a>
                        </li>
                        <li class="{{ ($page_name === 'markdown') ? 'active' : '' }}">
                            <a href="/forms/markdown_editor"> Markdown Editor </a>
                        </li>
                        <li class="{{ ($page_name === 'date_range_picker') ? 'active' : '' }}">
                            <a href="/forms/date_range_picker"> Date &amp; Range Picker </a>
                        </li>
                        <li class="{{ ($page_name === 'clipboard') ? 'active' : '' }}">
                            <a href="/forms/clipboard"> Clipboard </a>
                        </li>
                        <li class="{{ ($page_name === 'typeahead') ? 'active' : '' }}">
                            <a href="/forms/typeahead"> Typeahead </a>
                        </li>
                    </ul>
                </li>

                <li class="menu single-menu {{ ($category_name === 'pages') ? 'active' : '' }} {{ ($category_name === 'users') ? 'active' : '' }} {{ ($category_name === 'auth') ? 'active' : '' }}">
                    <a href="#page" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                            <span>Pages</span>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="page"  data-parent="#topAccordion">
                        <li class="{{ ($page_name === 'helpdesk') ? 'active' : '' }}">
                            <a href="/pages/helpdesk"> Helpdesk </a>
                        </li>
                        <li class="{{ ($page_name === 'contact_us') ? 'active' : '' }}">
                            <a href="/pages/contact_us_form"> Contact Form </a>
                        </li>
                        <li class="{{ ($page_name === 'faq') ? 'active' : '' }}">
                            <a href="/pages/faq"> FAQ </a>
                        </li>
                        <li class="{{ ($page_name === 'faq2') ? 'active' : '' }}">
                            <a href="/pages/faq2"> FAQ 2 </a>
                        </li>
                        <li class="{{ ($page_name === 'privacy') ? 'active' : '' }}">
                            <a href="/pages/privacy_policy"> Privacy Policy </a>
                        </li>
                        <li class="{{ ($page_name === 'coming_soon') ? 'active' : '' }}">
                            <a href="/pages/coming_soon"> Coming Soon </a>
                        </li>
                        <li class="{{ ($page_name === 'profile') ? 'active' : '' }}">
                            <a href="/users/profile"> Profile </a>
                        </li>
                        <li class="{{ ($page_name === 'account_settings') ? 'active' : '' }}">
                            <a href="/users/account_settings"> Account Settings </a>
                        </li>
                        <li class="sub-sub-submenu-list">
                            <a href="#pages-error" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Error <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                            <ul class="collapse list-unstyled sub-submenu" id="pages-error" data-parent="#more"> 
                                <li class="{{ ($page_name === 'error404') ? 'active' : '' }}">
                                    <a href="/pages/error_404"> 404 </a>
                                </li>
                                <li class="{{ ($page_name === 'error500') ? 'active' : '' }}">
                                    <a href="/pages/error_500"> 500 </a>
                                </li>
                                <li class="{{ ($page_name === 'error503') ? 'active' : '' }}">
                                    <a href="/pages/error_503"> 503 </a>
                                </li>
                                <li class="{{ ($page_name === 'maintenence') ? 'active' : '' }}">
                                    <a href="/pages/maintenence"> Maintanence </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sub-sub-submenu-list">
                            <a href="#user-login" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Login <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                            <ul class="collapse list-unstyled sub-submenu" id="user-login" data-parent="#page"> 
                                <li>
                                    <a href="/authentication/login"> Login </a>
                                </li>
                                <li>
                                    <a href="/authentication/login_boxed"> Login Boxed </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sub-sub-submenu-list">
                            <a href="#user-register" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Register <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                            <ul class="collapse list-unstyled sub-submenu" id="user-register" data-parent="#page"> 
                                <li>
                                    <a href="/authentication/register"> Register </a>
                                </li>
                                <li>
                                    <a href="/authentication/register_boxed"> Register Boxed </a>
                                </li>
                            </ul>
                        </li>

                        <li class="sub-sub-submenu-list">
                            <a href="#user-passRecovery" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Password Recovery <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                            <ul class="collapse list-unstyled sub-submenu" id="user-passRecovery" data-parent="#page"> 
                                <li>
                                    <a href="/authentication/pass_recovery"> Recover ID </a>
                                </li>
                                <li>
                                    <a href="/authentication/pass_recovery_boxed"> Recover ID Boxed </a>
                                </li>
                            </ul>
                        </li>

                        <li class="sub-sub-submenu-list">
                            <a href="#user-lockscreen" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Lockscreen <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                            <ul class="collapse list-unstyled sub-submenu" id="user-lockscreen" data-parent="#page"> 
                                <li>
                                    <a href="/authentication/lockscreen"> Unlock </a>
                                </li>
                                <li>
                                    <a href="/authentication/lockscreen_boxed"> Unlock Boxed </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="menu single-menu {{ ($category_name === 'drag_n_drop') ? 'active' : '' }} {{ ($category_name === 'maps') ? 'active' : '' }} {{ ($category_name === 'charts') ? 'active' : '' }} {{ ($category_name === 'widgets') ? 'active' : '' }} {{ ($category_name === 'fonticons') ? 'active' : '' }}">
                    <a href="#more" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
                            <span>More</span>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="more" data-parent="#topAccordion">
                        <li class="{{ ($category_name === 'drag_n_drop') ? 'active' : '' }}">
                            <a href="/drag_and_drop"> Drag and Drop</a>
                        </li>
                        <li class="{{ ($category_name === 'widgets') ? 'active' : '' }}">
                            <a href="/widgets"> Widgets </a>
                        </li>
                        <li class="{{ ($category_name === 'maps') ? 'active' : '' }}">
                            <a href="/maps"> Vector Maps</a>
                        </li>
                        <li class="{{ ($category_name === 'charts') ? 'active' : '' }}">
                            <a href="/charts"> Charts </a>
                        </li>
                        <li class="{{ ($category_name === 'fonticons') ? 'active' : '' }}">
                            <a href="/font_icons"> Font Icons </a>
                        </li>
                        <li class="sub-sub-submenu-list">
                            <a href="#starter-kit" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Starter Kit <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                            <ul class="collapse list-unstyled sub-submenu eq-animated eq-fadeInUp" id="starter-kit" data-parent="#more">
                                <li>
                                    <a href="/starter-kit/blank_page"> Blank Page </a>
                                </li>
                                <li>
                                    <a href="/starter-kit/breadcrumbs"> Breadcrumb </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="https://designreset.com/cork/documentation/"> Documentation </a>
                        </li>
                    </ul>
                </li>

                @else

                <li class="menu single-menu">
                    <a href="#menu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle autodroprown">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                            <span>Menu 1</span>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="menu1" data-parent="#topAccordion">
                        <li>
                            <a href="javascript:void(0);"> Submenu 1 </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"> Submenu 2 </a>
                        </li>
                    </ul>
                </li>


                <li class="menu single-menu">
                    <a href="#menu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle autodroprown">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                            <span>Menu 2</span>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="menu2" data-parent="#topAccordion">
                        <li>
                            <a href="javascript:void(0);"> Submenu 1 </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"> Submenu 2 </a>
                        </li>
                        <li class="sub-sub-submenu-list">
                            <a href="#sub-sub-category" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Submenu 3 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                            <ul class="collapse list-unstyled sub-submenu" id="sub-sub-category" data-parent="#menu"> 
                                <li>
                                    <a href="javascript:void(0);"> Sub-Submenu 1 </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);"> Sub-Submenu 2 </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);"> Sub-Submenu 3 </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="menu single-menu active">
                    <a href="#starter-kit" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle autodroprown">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
                            <span>Starter Kit</span>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="starter-kit" data-parent="#topAccordion">
                        <li class="{{ ($category_name === 'blank_page') ? 'active' : '' }}">
                            <a href="/starter-kit/blank_page"> Blank Page </a>
                        </li>
                        <li class="{{ ($category_name === 'breadcrumbs') ? 'active' : '' }}">
                            <a href="/starter-kit/breadcrumbs"> Breadcrumb </a>
                        </li>
                    </ul>
                </li>
                
                @endif
            </ul>
        </nav>
    </div>
    <!--  END TOPBAR  -->

@endif