@if ($page_name != 'coming_soon' && $page_name != 'contact_us' && $page_name != 'error404' && $page_name != 'error500' && $page_name != 'error503' && $page_name != 'faq' && $page_name != 'helpdesk' && $page_name != 'maintenence' && $page_name != 'privacy' && $page_name != 'auth_boxed' && $page_name != 'auth_default')
    <!--  BEGIN SIDEBAR  -->
    {{-- <div class="sidebar-wrapper sidebar-theme">
                
        <nav id="sidebar">

            <ul class="navbar-nav theme-brand flex-row  text-center">
                <li class="nav-item theme-logo">
                    <a href="/">
                        <img src="{{asset('storage/img/90x90.jpg')}}" class="navbar-logo" alt="logo">
                    </a>
                </li>
                <li class="nav-item theme-text">
                    <a href="/" class="nav-link"> CORK </a>
                </li>
            </ul>

            <ul class="list-unstyled menu-categories" id="accordionExample">
                @if ($page_name != 'alt_menu' && $page_name != 'blank_page' && $page_name != 'boxed' && $page_name != 'breadcrumb' )

                    <li class="menu {{ ($category_name === 'dashboard') ? 'active' : '' }}">
                        <a href="#dashboard" data-toggle="collapse" aria-expanded="{{ ($category_name === 'dashboard') ? 'true' : 'false' }}" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.or
                                g/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                <span>Dashboard</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled {{ ($category_name === 'dashboard') ? 'show' : '' }}" id="dashboard" data-parent="#accordionExample">
                            <li class="{{ ($page_name === 'analytics') ? 'active' : '' }}">
                                <a href="/analytics"> Analytics {{$page_name}}</a>
                            </li>
                            <li class="{{ ($page_name === 'sales') ? 'active' : '' }}">
                                <a href="/sales"> Sales </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu menu-heading">
                        <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span>Apps</span></div>
                    </li>

                    <li class="menu {{ ($category_name === 'chat') ? 'active' : '' }}">
                        <a href="/apps/chat" aria-expanded="{{ ($category_name === 'chat') ? 'true' : 'false' }}" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                                <span>Chat</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu {{ ($category_name === 'mailbox') ? 'active' : '' }}">
                        <a href="/apps/mailbox" aria-expanded="{{ ($category_name === 'mailbox') ? 'true' : 'false' }}" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                <span>Mailbox</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu {{ ($category_name === 'todo') ? 'active' : '' }}">
                        <a href="/apps/todoList" aria-expanded="{{ ($category_name === 'todo') ? 'true' : 'false' }}" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                                <span>Todo List</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu {{ ($category_name === 'notes') ? 'active' : '' }}">
                        <a href="/apps/notes" aria-expanded="{{ ($category_name === 'notes') ? 'true' : 'false' }}" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                <span>Notes</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu {{ ($category_name === 'scrumboard') ? 'active' : '' }}">
                        <a href="/apps/scrumboard" aria-expanded="{{ ($category_name === 'scrumboard') ? 'true' : 'false' }}" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-plus"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="12" y1="18" x2="12" y2="12"></line><line x1="9" y1="15" x2="15" y2="15"></line></svg>
                                <span>Scrumboard</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu {{ ($category_name === 'contacts') ? 'active' : '' }}">
                        <a href="/apps/contacts" aria-expanded="{{ ($category_name === 'contacts') ? 'true' : 'false' }}" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                <span>Contacts</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu {{ ($category_name === 'invoice') ? 'active' : '' }}">
                        <a href="/apps/invoice" aria-expanded="{{ ($category_name === 'invoice') ? 'true' : 'false' }}" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                                <span>Invoice List</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu {{ ($category_name === 'calendar') ? 'active' : '' }}">
                        <a href="/apps/calendar" aria-expanded="{{ ($category_name === 'calendar') ? 'true' : 'false' }}" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                <span>Calendar</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu menu-heading">
                        <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span>USER INTERFACE</span></div>
                    </li>

                    <li class="menu {{ ($category_name === 'components') ? 'active' : '' }}">
                        <a href="#components" data-toggle="collapse" aria-expanded="{{ ($category_name === 'components') ? 'true' : 'false' }}" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                                <span>Components</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled {{ ($category_name === 'components') ? 'show' : '' }}" id="components" data-parent="#accordionExample">
                            <li class="{{ ($page_name === 'tabs') ? 'active' : '' }}">
                                <a href="/components/tabs"> Tabs </a>
                            </li>
                            <li class="{{ ($page_name === 'accordion') ? 'active' : '' }}">
                                <a href="/components/accordions"> Accordions  </a>
                            </li>
                            <li class="{{ ($page_name === 'modal') ? 'active' : '' }}">
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
                            <li class="{{ ($page_name === 'sweetalert') ? 'active' : '' }}">
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

                    <li class="menu {{ ($category_name === 'elements') ? 'active' : '' }}">
                        <a href="#elements" data-toggle="collapse" aria-expanded="{{ ($category_name === 'elements') ? 'true' : 'false' }}" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-zap"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>
                                <span>Elements</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled {{ ($category_name === 'elements') ? 'show' : '' }}" id="elements" data-parent="#accordionExample">
                            <li class="{{ ($page_name === 'alerts') ? 'active' : '' }}">
                                <a href="/elements/alerts"> Alerts </a>
                            </li>
                            <li class="{{ ($page_name === 'avatars') ? 'active' : '' }}">
                                <a href="/elements/avatars"> Avatars </a>
                            </li>
                            <li class="{{ ($page_name === 'badges') ? 'active' : '' }}">
                                <a href="/elements/badges"> Badges </a>
                            </li>
                            <li class="{{ ($page_name === 'breadcrumbs') ? 'active' : '' }}">
                                <a href="/elements/breadcrumbs"> Breadcrumbs </a>
                            </li>                            
                            <li class="{{ ($page_name === 'buttons') ? 'active' : '' }}">
                                <a href="/elements/buttons"> Buttons </a>
                            </li>
                            <li class="{{ ($page_name === 'button_group') ? 'active' : '' }}">
                                <a href="/elements/button_group"> Button Group </a>
                            </li>
                            <li class="{{ ($page_name === 'color_library') ? 'active' : '' }}">
                                <a href="/elements/color_library"> Color Library </a>
                            </li>
                            <li class="{{ ($page_name === 'dropdown') ? 'active' : '' }}">
                                <a href="/elements/dropdown"> Dropdown </a>
                            </li>
                            <li class="{{ ($page_name === 'infobox') ? 'active' : '' }}">
                                <a href="/elements/infobox"> Infobox </a>
                            </li>
                            <li class="{{ ($page_name === 'jumbotron') ? 'active' : '' }}">
                                <a href="/elements/jumbotron"> Jumbotron </a>
                            </li>
                            <li class="{{ ($page_name === 'loaders') ? 'active' : '' }}">
                                <a href="/elements/loaders"> Loaders </a>
                            </li>
                            <li class="{{ ($page_name === 'pagination') ? 'active' : '' }}">
                                <a href="/elements/pagination"> Pagination </a>
                            </li>
                            <li class="{{ ($page_name === 'popovers') ? 'active' : '' }}">
                                <a href="/elements/popovers"> Popovers </a>
                            </li>
                            <li class="{{ ($page_name === 'progress_bar') ? 'active' : '' }}">
                                <a href="/elements/progress_bar"> Progress Bar </a>
                            </li>
                            <li class="{{ ($page_name === 'search') ? 'active' : '' }}">
                                <a href="/elements/search"> Search </a>
                            </li>
                            <li class="{{ ($page_name === 'tooltips') ? 'active' : '' }}">
                                <a href="/elements/tooltips"> Tooltips </a>
                            </li>
                            <li class="{{ ($page_name === 'treeview') ? 'active' : '' }}">
                                <a href="/elements/treeview"> Treeview </a>
                            </li>
                            <li class="{{ ($page_name === 'typography') ? 'active' : '' }}">
                                <a href="/elements/typography"> Typography </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu {{ ($category_name === 'fonticons') ? 'active' : '' }}">
                        <a href="/font_icons" aria-expanded="{{ ($category_name === 'fonticons') ? 'true' : 'false' }}" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-target"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg>
                                <span>Font Icons</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu {{ ($category_name === 'widgets') ? 'active' : '' }}">
                        <a href="/widgets" aria-expanded="{{ ($category_name === 'widgets') ? 'true' : 'false' }}" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg>
                                <span>Widgets</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu menu-heading">
                        <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span>TABLES AND FORMS</span></div>
                    </li>

                    <li class="menu {{ ($category_name === 'bootstrap_basic_table') ? 'active' : '' }}">
                        <a href="/tables/bootstrap_basic" aria-expanded="{{ ($category_name === 'bootstrap_basic_table') ? 'true' : 'false' }}" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layout"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>
                                <span>Tables</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu {{ ($category_name === 'datatable') ? 'active' : '' }}">
                        <a href="#datatables" data-toggle="collapse" aria-expanded="{{ ($category_name === 'datatable') ? 'true' : 'false' }}" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                                <span>DataTables</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled {{ ($category_name === 'datatable') ? 'show' : '' }}" id="datatables" data-parent="#accordionExample">
                            <li class="{{ ($page_name === 'basic') ? 'active' : '' }}">
                                <a href="/tables/datatables/basic"> Basic </a>
                            </li>
                            <li class="{{ ($page_name === 'basic-light') ? 'active' : '' }}">
                                <a href="/tables/datatables/basic-light"> Dark </a>
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

                    <li class="menu {{ ($category_name === 'forms') ? 'active' : '' }}">
                        <a href="#forms" data-toggle="collapse" aria-expanded="{{ ($category_name === 'forms') ? 'true' : 'false' }}" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect></svg>
                                <span>Forms</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled {{ ($category_name === 'forms') ? 'show' : '' }}" id="forms" data-parent="#accordionExample">
                            <li class="{{ ($page_name === 'basic') ? 'active' : '' }}">
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
                    
                    <li class="menu menu-heading">
                        <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span>USER AND PAGES</span></div>
                    </li>                    

                    <li class="menu {{ ($category_name === 'users') ? 'active' : '' }}">
                        <a href="#users" data-toggle="collapse" aria-expanded="{{ ($category_name === 'users') ? 'true' : 'false' }}" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                <span>Users</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled {{ ($category_name === 'users') ? 'show' : '' }}" id="users" data-parent="#accordionExample">
                            <li class="{{ ($page_name === 'profile') ? 'active' : '' }}">
                                <a href="/users/profile"> Profile </a>
                            </li>
                            <li class="{{ ($page_name === 'account_setting') ? 'active' : '' }}">
                                <a href="/users/account_settings"> Account Settings </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu {{ ($category_name === 'pages') ? 'active' : '' }}">
                        <a href="#pages" data-toggle="collapse" aria-expanded="{{ ($category_name === 'pages') ? 'true' : 'false' }}" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                                <span>Pages</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled {{ ($category_name === 'pages') ? 'show' : '' }}" id="pages" data-parent="#accordionExample">
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
                            <li class="{{ ($page_name === 'dashboard') ? 'active' : '' }}">
                                <a href="#pages-error" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Error <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="pages-error" data-parent="#pages"> 
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
                        </ul>
                    </li>

                    <li class="menu menu-heading">
                        <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg><span>EXTRA ELEMENTS</span></div>
                    </li>

                    <li class="menu {{ ($category_name === 'auth') ? 'active' : '' }}">
                        <a href="#authentication" data-toggle="collapse" aria-expanded="{{ ($category_name === 'auth') ? 'true' : 'false' }}" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                <span>Authentication</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled {{ ($category_name === 'auth') ? 'show' : '' }}" id="authentication" data-parent="#accordionExample">
                            <li class="{{ ($page_name === 'auth_boxed') ? 'active' : '' }}">
                                <a href="/authentication/login_boxed"> Login Boxed </a>
                            </li>
                            <li class="{{ ($page_name === 'auth_boxed') ? 'active' : '' }}">
                                <a href="/authentication/register_boxed"> Register Boxed </a>
                            </li>
                            <li class="{{ ($page_name === 'auth_boxed') ? 'active' : '' }}">
                                <a href="/authentication/lockscreen_boxed"> Unlock Boxed </a>
                            </li>
                            <li class="{{ ($page_name === 'auth_boxed') ? 'active' : '' }}">
                                <a href="/authentication/pass_recovery_boxed"> Recover ID Boxed </a>
                            </li>
                            <li class="{{ ($page_name === 'auth_default') ? 'active' : '' }}">
                                <a href="/authentication/login"> Login Cover </a>
                            </li>
                            <li class="{{ ($page_name === 'auth_default') ? 'active' : '' }}">
                                <a href="/authentication/register"> Register Cover </a>
                            </li>
                            <li class="{{ ($page_name === 'auth_default') ? 'active' : '' }}">
                                <a href="/authentication/lockscreen"> Unlock Cover </a>
                            </li>
                            <li class="{{ ($page_name === 'auth_default') ? 'active' : '' }}">
                                <a href="/authentication/pass_recovery"> Recover ID Cover </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu {{ ($category_name === 'drag_n_drop') ? 'active' : '' }}">
                        <a href="/drag_and_drop" aria-expanded="{{ ($category_name === 'drag_n_drop') ? 'true' : 'false' }}" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-move"><polyline points="5 9 2 12 5 15"></polyline><polyline points="9 5 12 2 15 5"></polyline><polyline points="15 19 12 22 9 19"></polyline><polyline points="19 9 22 12 19 15"></polyline><line x1="2" y1="12" x2="22" y2="12"></line><line x1="12" y1="2" x2="12" y2="22"></line></svg>
                                <span>Drag and Drop</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu {{ ($category_name === 'maps') ? 'active' : '' }}">
                        <a href="/maps" aria-expanded="{{ ($category_name === 'maps') ? 'true' : 'false' }}" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map"><polygon points="1 6 1 22 8 18 16 22 23 18 23 2 16 6 8 2 1 6"></polygon><line x1="8" y1="2" x2="8" y2="18"></line><line x1="16" y1="6" x2="16" y2="22"></line></svg>
                                <span>Maps</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu {{ ($category_name === 'charts') ? 'active' : '' }}">
                        <a href="/charts" aria-expanded="{{ ($category_name === 'charts') ? 'true' : 'false' }}" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pie-chart"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path><path d="M22 12A10 10 0 0 0 12 2v10z"></path></svg>
                                <span>Charts</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu">
                        <a href="#starter-kit" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-terminal"><polyline points="4 17 10 11 4 5"></polyline><line x1="12" y1="19" x2="20" y2="19"></line></svg>
                                <span>Starter Kit</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="starter-kit" data-parent="#accordionExample">
                            <li class="{{ ($page_name === 'blank_page') ? 'active' : '' }}">
                                <a href="/starter-kit/blank_page"> Blank Page </a>
                            </li>
                            <li class="{{ ($page_name === 'breadcrumb') ? 'active' : '' }}">
                                <a href="/starter-kit/breadcrumb"> Breadcrumb </a>
                            </li>
                            <li class="{{ ($page_name === 'boxed') ? 'active' : '' }}">
                                <a href="/starter-kit/boxed"> Boxed </a>
                            </li>
                            <li class="{{ ($page_name === 'alt_menu') ? 'active' : '' }}">
                                <a href="/starter-kit/alternative_menu"> Alternate Menu </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="../../documentation.html" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
                                <span>Documentation</span>
                            </div>
                        </a>
                    </li>

                @else

                    <li class="menu">
                        <a href="javascript:void(0);" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                <span> Menu 1</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu">
                        <a href="#submenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg>
                                <span> Menu 2</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="submenu" data-parent="#accordionExample">
                            <li>
                                <a href="javascript:void(0);"> Submenu 1 </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);"> Submenu 2 </a>
                            </li>                           
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#submenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                                <span> Menu 3</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="submenu2" data-parent="#accordionExample">
                            <li>
                                <a href="javascript:void(0);"> Submenu 1 </a>
                            </li>
                            <li>
                                <a href="#sm2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Submenu 2 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="sm2" data-parent="#submenu2"> 
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

                    <li class="menu {{ ($category_name === 'starter_kits') ? 'active' : '' }}">
                        <a href="#starter-kit" data-toggle="collapse" aria-expanded="{{ ($category_name === 'starter_kits') ? 'true' : 'false' }}" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-terminal"><polyline points="4 17 10 11 4 5"></polyline><line x1="12" y1="19" x2="20" y2="19"></line></svg>
                                <span>Starter Kit</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled {{ ($category_name === 'starter_kits') ? 'show' : '' }}" id="starter-kit" data-parent="#accordionExample">
                            <li class="{{ ($page_name === 'blank_page') ? 'active' : '' }}">
                                <a href="/starter-kit/blank_page"> Blank Page </a>
                            </li>
                            <li class="{{ ($page_name === 'breadcrumb') ? 'active' : '' }}">
                                <a href="/starter-kit/breadcrumb"> Breadcrumb </a>
                            </li>
                            <li class="{{ ($page_name === 'boxed') ? 'active' : '' }}">
                                <a href="/starter-kit/boxed"> Boxed </a>
                            </li>
                            <li class="{{ ($page_name === 'alt_menu') ? 'active' : '' }}">
                                <a href="/starter-kit/alternative_menu"> Alternate Menu </a>
                            </li>
                        </ul>
                    </li>
                    
                @endif
                
                

                
            </ul>
            
        </nav>

    </div> --}}
    <!--  END SIDEBAR  -->


    <!--  BEGIN FOOTER  -->
    <div class="footer-wrapper">
        <div class="footer-section f-section-1">
            <p class="">Copyright © 2020 <a target="_blank" href="https://designreset.com">DesignReset</a>, All rights reserved.</p>
        </div>
        <div class="footer-section f-section-2">
            <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></p>
        </div>
    </div>
    <!--  END FOOTER  -->

@endif