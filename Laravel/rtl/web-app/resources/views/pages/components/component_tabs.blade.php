@extends('layouts.app')

@section('content')
            <div class="container">
                <div class="container">

                    <div id="navSection" data-spy="affix" class="nav  sidenav">
                        <div class="sidenav-content">
                            <a href="#tabsSimple" class="active nav-link">Simple</a>
                            <a href="#tabsIcons" class="nav-link">Icons</a>
                            <a href="#tabsBordered" class="nav-link">Bordered</a>
                            <a href="#tabsLine" class="nav-link">Line</a>
                            <a href="#tabsAlignments" class="nav-link">Alignments</a>
                            <a href="#tabsWithIcons" class="nav-link">With Icons</a>
                            <a href="#tabsVerticalWithIcon" class="nav-link">Vertical With Icon</a>
                            <a href="#tabsVertical" class="nav-link">Vertical</a>
                        </div>
                    </div>
                    
                    <div class="row layout-top-spacing">

                        <div id="tabsSimple" class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Simple Tabs</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area simple-tab">
                                    <ul class="nav nav-tabs  mb-3 mt-3" id="simpletab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Profile <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Action</a>
                                                <a class="dropdown-item"  id="profile-tab2" data-toggle="tab" href="#profile2" role="tab" aria-controls="profile2" aria-selected="false">Another action</a>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="simpletabContent">
                                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                            <p class="mb-4">
                                              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.                                                
                                            </p>

                                            <p>
                                              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            </p>   
                                        </div>
                                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                            <div class="media">
                                                <img class="mr-3" src="{{asset('storage/img/90x90.jpg')}}" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="profile2" role="tabpanel" aria-labelledby="profile-tab2">
                                            <p class="">
                                                Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            </p>
                                        </div>
                                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                            <p class="">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="code-section-container show-code">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;ul class="nav nav-tabs  mb-3 mt-3" id="simpletab" role="tablist"&gt;
    &lt;li class="nav-item"&gt;
        &lt;a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"&gt;Home&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class="nav-item dropdown"&gt;
        &lt;a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"&gt;Profile &lt;svg&gt; ... &lt;/svg&gt;&lt;/a&gt;
        &lt;div class="dropdown-menu"&gt;
            &lt;a class="dropdown-item" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"&gt;Action&lt;/a&gt;
            &lt;a class="dropdown-item"  id="profile-tab2" data-toggle="tab" href="#profile2" role="tab" aria-controls="profile2" aria-selected="false"&gt;Another action&lt;/a&gt;
        &lt;/div&gt;
    &lt;/li&gt;
    &lt;li class="nav-item"&gt;
        &lt;a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"&gt;Contact&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class="nav-item"&gt;
        &lt;a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"&gt;Disabled&lt;/a&gt;
    &lt;/li&gt;
&lt;/ul&gt;
&lt;div class="tab-content" id="simpletabContent"&gt;
    &lt;div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"&gt;
        &lt;p class="mb-4"&gt;
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        &lt;/p&gt;

        &lt;p&gt;
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        &lt;/p&gt;   
    &lt;/div&gt;
    &lt;div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"&gt;
        &lt;div class="media"&gt;
            &lt;img class="mr-3" src="{{asset('storage/img/90x90.jpg')}}" alt="Generic placeholder image"&gt;
            &lt;div class="media-body"&gt;
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="tab-pane fade" id="profile2" role="tabpanel" aria-labelledby="profile-tab2"&gt;
        &lt;p class=""&gt;
            Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        &lt;/p&gt;
    &lt;/div&gt;
    &lt;div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab"&gt;
        &lt;p class=""&gt;
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        &lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;
</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Simple Pills</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area simple-pills">
                                    <ul class="nav nav-pills mb-3 mt-3" id="pills-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Home</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Profile <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" id="pills-profile-tab" data-toggle="tab" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Action</a>
                                                <a class="dropdown-item"  id="pills-profile-tab2" data-toggle="tab" href="#pills-profile2" role="tab" aria-controls="pills-profile2" aria-selected="false">Another action</a>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                            <p class="mb-4">
                                              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.                                                
                                            </p>

                                            <p>
                                              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            </p>      
                                        </div>
                                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                            <div class="media">
                                                <img class="mr-3" src="{{asset('storage/img/90x90.jpg')}}" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pills-profile2" role="tabpanel" aria-labelledby="pills-profile-tab2">
                                            <p class="">
                                                Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            </p>
                                        </div>
                                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                            <p class="dropcap  dc-outline-primary">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;ul class="nav nav-pills mb-3 mt-3" id="pills-tab" role="tablist"&gt;
    &lt;li class="nav-item"&gt;
        &lt;a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"&gt;Home&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class="nav-item dropdown"&gt;
        &lt;a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"&gt;Profile &lt;svg&gt; ... &lt;/svg&gt;&lt;/a&gt;
        &lt;div class="dropdown-menu"&gt;
            &lt;a class="dropdown-item" id="pills-profile-tab" data-toggle="tab" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false"&gt;Action&lt;/a&gt;
            &lt;a class="dropdown-item"  id="pills-profile-tab2" data-toggle="tab" href="#pills-profile2" role="tab" aria-controls="pills-profile2" aria-selected="false"&gt;Another action&lt;/a&gt;
        &lt;/div&gt;
    &lt;/li&gt;
    &lt;li class="nav-item"&gt;
        &lt;a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false"&gt;Contact&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class="nav-item"&gt;
        &lt;a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"&gt;Disabled&lt;/a&gt;
    &lt;/li&gt;
&lt;/ul&gt;
&lt;div class="tab-content" id="pills-tabContent"&gt;
    &lt;div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"&gt;
        &lt;p class="mb-4"&gt;
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.                                                
        &lt;/p&gt;

        &lt;p&gt;
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        &lt;/p&gt;      
    &lt;/div&gt;
    &lt;div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"&gt;
        &lt;div class="media"&gt;
            &lt;img class="mr-3" src="{{asset('storage/img/90x90.jpg')}}" alt="Generic placeholder image"&gt;
            &lt;div class="media-body"&gt;
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="tab-pane fade" id="pills-profile2" role="tabpanel" aria-labelledby="pills-profile-tab2"&gt;
        &lt;p class=""&gt;
            Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        &lt;/p&gt;
    &lt;/div&gt;
    &lt;div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"&gt;
        &lt;p class="dropcap  dc-outline-primary"&gt;
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        &lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;
</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div id="tabsIcons" class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Icon Tabs</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area icon-tab">
                                    
                                    <ul class="nav nav-tabs  mb-3 mt-3" id="iconTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="icon-home-tab" data-toggle="tab" href="#icon-home" role="tab" aria-controls="icon-home" aria-selected="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg> Home</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> Profile <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" id="icon-profile-tab1" data-toggle="tab" href="#icon-profile" role="tab" aria-controls="icon-profile" aria-selected="false">Action</a>
                                                <a class="dropdown-item"  id="icon-profile-tab2" data-toggle="tab" href="#icon-profile2" role="tab" aria-controls="icon-profile2" aria-selected="false">Another action</a>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="icon-contact-tab" data-toggle="tab" href="#icon-contact" role="tab" aria-controls="icon-contact" aria-selected="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg> Contact</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12" y2="16"></line></svg> Disabled</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="iconTabContent-1">
                                        <div class="tab-pane fade show active" id="icon-home" role="tabpanel" aria-labelledby="icon-home-tab">
                                            <p class="mb-4">
                                              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.                                                
                                            </p>

                                            <p>
                                              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            </p>      
                                        </div>
                                        <div class="tab-pane fade" id="icon-profile" role="tabpanel">
                                            <div class="media">
                                                <img class="mr-3" src="{{asset('storage/img/90x90.jpg')}}" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="icon-profile2" role="tabpanel" aria-labelledby="icon-profile-tab2">
                                            <p class="">
                                                Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            </p>
                                        </div>
                                        <div class="tab-pane fade" id="icon-contact" role="tabpanel" aria-labelledby="icon-contact-tab">
                                            <p class="dropcap  dc-outline-primary">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;ul class="nav nav-tabs  mb-3 mt-3" id="iconTab" role="tablist"&gt;
    &lt;li class="nav-item"&gt;
        &lt;a class="nav-link active" id="icon-home-tab" data-toggle="tab" href="#icon-home" role="tab" aria-controls="icon-home" aria-selected="true"&gt;&lt;svg&gt; ... &lt;/svg&gt; Home&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class="nav-item dropdown"&gt;
        &lt;a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/a&gt;
        &lt;div class="dropdown-menu"&gt;
            &lt;a class="dropdown-item" id="icon-profile-tab" data-toggle="tab" href="#icon-profile" role="tab" aria-controls="icon-profile" aria-selected="false"&gt;Action&lt;/a&gt;
            &lt;a class="dropdown-item"  id="icon-profile-tab" data-toggle="tab" href="#icon-profile2" role="tab" aria-controls="icon-profile2" aria-selected="false"&gt;Another action&lt;/a&gt;
        &lt;/div&gt;
    &lt;/li&gt;
    &lt;li class="nav-item"&gt;
        &lt;a class="nav-link" id="icon-contact-tab" data-toggle="tab" href="#icon-contact" role="tab" aria-controls="icon-contact" aria-selected="false"&gt;&lt;svg&gt; ... &lt;/svg&gt; Contact&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class="nav-item"&gt;
        &lt;a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"&gt;&lt;svg&gt; ... &lt;/svg&gt; Disabled&lt;/a&gt;
    &lt;/li&gt;
&lt;/ul&gt;
&lt;div class="tab-content" id="iconTabContent-1"&gt;
    &lt;div class="tab-pane fade show active" id="icon-home" role="tabpanel" aria-labelledby="icon-home-tab"&gt;
        &lt;p class="mb-4"&gt;
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.                                                
        &lt;/p&gt;

        &lt;p&gt;
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        &lt;/p&gt;      
    &lt;/div&gt;
    &lt;div class="tab-pane fade" id="icon-profile" role="tabpanel"&gt;
        &lt;div class="media"&gt;
            &lt;img class="mr-3" src="{{asset('storage/img/90x90.jpg')}}" alt="Generic placeholder image"&gt;
            &lt;div class="media-body"&gt;
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="tab-pane fade" id="icon-profile2" role="tabpanel" aria-labelledby="icon-profile-tab2"&gt;
        &lt;p class=""&gt;
            Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        &lt;/p&gt;
    &lt;/div&gt;
    &lt;div class="tab-pane fade" id="icon-contact" role="tabpanel" aria-labelledby="icon-contact-tab"&gt;
        &lt;p class="dropcap  dc-outline-primary"&gt;
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        &lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;
</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Icon Pills</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area icon-pill">
                                    
                                    <ul class="nav nav-pills mb-3 mt-3" id="icon-pills-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="icon-pills-home-tab" data-toggle="pill" href="#icon-pills-home" role="tab" aria-controls="icon-pills-home" aria-selected="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg> Home</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> Profile <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" id="icon-pills-profile-tab1" data-toggle="tab" href="#icon-pills-profile" role="tab" aria-controls="icon-pills-profile" aria-selected="false">Action</a>
                                                <a class="dropdown-item"  id="icon-pills-profile-tab2" data-toggle="tab" href="#icon-pills-profile2" role="tab" aria-controls="icon-pills-profile2" aria-selected="false">Another action</a>
                                            </div>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" id="icon-pills-contact-tab" data-toggle="pill" href="#icon-pills-contact" role="tab" aria-controls="icon-pills-contact" aria-selected="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg> Contact</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12" y2="16"></line></svg> Disabled</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="icon-pills-tabContent">
                                        <div class="tab-pane fade show active" id="icon-pills-home" role="tabpanel" aria-labelledby="icon-pills-home-tab">
                                            <p class="mb-4">
                                              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.                                                
                                            </p>

                                            <p>
                                              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            </p>      
                                        </div>
                                        <div class="tab-pane fade" id="icon-pills-profile" role="tabpanel" aria-labelledby="icon-pills-profile-tab1">
                                            <div class="media">
                                                <img class="mr-3" src="{{asset('storage/img/90x90.jpg')}}" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="icon-pills-profile2" role="tabpanel" aria-labelledby="icon-pills-profile-tab2">
                                            <p class="">
                                                Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            </p>
                                        </div>

                                        <div class="tab-pane fade" id="icon-pills-contact" role="tabpanel" aria-labelledby="icon-pills-contact-tab">
                                            <p class="dropcap  dc-outline-primary">
                                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;ul class="nav nav-pills mb-3 mt-3" id="icon-pills-tab" role="tablist"&gt;
    &lt;li class="nav-item"&gt;
        &lt;a class="nav-link active" id="icon-pills-home-tab" data-toggle="pill" href="#icon-pills-home" role="tab" aria-controls="icon-pills-home" aria-selected="true"&gt;&lt;svg&gt; ... &lt;/svg&gt; Home&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class="nav-item dropdown"&gt;
        &lt;a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/a&gt;
        &lt;div class="dropdown-menu"&gt;
            &lt;a class="dropdown-item" id="icon-pills-profile-tab1" data-toggle="tab" href="#icon-pills-profile" role="tab" aria-controls="icon-pills-profile" aria-selected="false"&gt;Action&lt;/a&gt;
            &lt;a class="dropdown-item"  id="icon-pills-profile-tab2" data-toggle="tab" href="#icon-pills-profile2" role="tab" aria-controls="icon-pills-profile2" aria-selected="false"&gt;Another action&lt;/a&gt;
        &lt;/div&gt;
    &lt;/li&gt;

    &lt;li class="nav-item"&gt;
        &lt;a class="nav-link" id="icon-pills-contact-tab" data-toggle="pill" href="#icon-pills-contact" role="tab" aria-controls="icon-pills-contact" aria-selected="false"&gt;&lt;svg&gt; ... &lt;/svg&gt; Contact&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class="nav-item"&gt;
        &lt;a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"&gt;&lt;svg&gt; ... &lt;/svg&gt; Disabled&lt;/a&gt;
    &lt;/li&gt;
&lt;/ul&gt;
&lt;div class="tab-content" id="icon-pills-tabContent"&gt;
    &lt;div class="tab-pane fade show active" id="icon-pills-home" role="tabpanel" aria-labelledby="icon-pills-home-tab"&gt;
        &lt;p class="mb-4"&gt;
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.                                                
        &lt;/p&gt;

        &lt;p&gt;
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        &lt;/p&gt;      
    &lt;/div&gt;
    &lt;div class="tab-pane fade" id="icon-pills-profile" role="tabpanel" aria-labelledby="icon-pills-profile-tab1"&gt;
        &lt;div class="media"&gt;
            &lt;img class="mr-3" src="{{asset('storage/img/90x90.jpg')}}" alt="Generic placeholder image"&gt;
            &lt;div class="media-body"&gt;
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;

    &lt;div class="tab-pane fade" id="icon-pills-profile2" role="tabpanel" aria-labelledby="icon-pills-profile-tab2"&gt;
        &lt;p class=""&gt;
            Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        &lt;/p&gt;
    &lt;/div&gt;

    &lt;div class="tab-pane fade" id="icon-pills-contact" role="tabpanel" aria-labelledby="icon-pills-contact-tab"&gt;
        &lt;p class="dropcap  dc-outline-primary"&gt;
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        &lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;
</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div id="tabsBordered" class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Vertical Bordered</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area vertical-border-pill">

                                    <div class="row mb-4 mt-3">
                                        <div class="col-sm-3 col-12">
                                            <div class="nav flex-column nav-pills mb-sm-0 mb-3   text-center mx-auto" id="v-border-pills-tab" role="tablist" aria-orientation="vertical">
                                              <a class="nav-link active" id="v-border-pills-home-tab" data-toggle="pill" href="#v-border-pills-home" role="tab" aria-controls="v-border-pills-home" aria-selected="true">Home</a>
                                              <a class="nav-link  text-center" id="v-border-pills-profile-tab" data-toggle="pill" href="#v-border-pills-profile" role="tab" aria-controls="v-border-pills-profile" aria-selected="false">Profile</a>
                                              <a class="nav-link  text-center" id="v-border-pills-messages-tab" data-toggle="pill" href="#v-border-pills-messages" role="tab" aria-controls="v-border-pills-messages" aria-selected="false">Messages</a>
                                              <a class="nav-link  text-center" id="v-border-pills-settings-tab" data-toggle="pill" href="#v-border-pills-settings" role="tab" aria-controls="v-border-pills-settings" aria-selected="false">Settings</a>
                                            </div>
                                        </div>

                                        <div class="col-sm-9 col-12">
                                            <div class="tab-content" id="v-border-pills-tabContent">
                                              <div class="tab-pane fade show active" id="v-border-pills-home" role="tabpanel" aria-labelledby="v-border-pills-home-tab">
                                                <h4 class="mb-4">We move your world!</h4>
                                                <p class="mb-4">
                                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.                                                
                                                </p>

                                                <p>
                                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                </p>                                            
                                              </div>
                                              <div class="tab-pane fade" id="v-border-pills-profile" role="tabpanel" aria-labelledby="v-border-pills-profile-tab">

                                                <div class="media">
                                                    <img class="mr-3 rounded-circle" src="{{asset('storage/img/90x90.jpg')}}" alt="Generic placeholder image">
                                                    <div class="media-body">
                                                        <h5 class="mt-0 mb-3">Media heading</h5>
                                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                                    </div>
                                                </div>

                                              </div>
                                              <div class="tab-pane fade" id="v-border-pills-messages" role="tabpanel" aria-labelledby="v-border-pills-messages-tab">
                                                <p class="dropcap  dc-outline-primary">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                </p>
                                              </div>

                                              <div class="tab-pane fade" id="v-border-pills-settings" role="tabpanel" aria-labelledby="v-border-pills-settings-tab">
                                                    <blockquote class="blockquote">
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                    </blockquote>
                                              </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div class="row mb-4 mt-3"&gt;
    &lt;div class="col-sm-3 col-12"&gt;
        &lt;div class="nav flex-column nav-pills mb-sm-0 mb-3   text-center mx-auto" id="v-border-pills-tab" role="tablist" aria-orientation="vertical"&gt;
          &lt;a class="nav-link active" id="v-border-pills-home-tab" data-toggle="pill" href="#v-border-pills-home" role="tab" aria-controls="v-border-pills-home" aria-selected="true"&gt;Home&lt;/a&gt;
          &lt;a class="nav-link  text-center" id="v-border-pills-profile-tab" data-toggle="pill" href="#v-border-pills-profile" role="tab" aria-controls="v-border-pills-profile" aria-selected="false"&gt;Profile&lt;/a&gt;
          &lt;a class="nav-link  text-center" id="v-border-pills-messages-tab" data-toggle="pill" href="#v-border-pills-messages" role="tab" aria-controls="v-border-pills-messages" aria-selected="false"&gt;Messages&lt;/a&gt;
          &lt;a class="nav-link  text-center" id="v-border-pills-settings-tab" data-toggle="pill" href="#v-border-pills-settings" role="tab" aria-controls="v-border-pills-settings" aria-selected="false"&gt;Settings&lt;/a&gt;
        &lt;/div&gt;
    &lt;/div&gt;

    &lt;div class="col-sm-9 col-12"&gt;
        &lt;div class="tab-content" id="v-border-pills-tabContent"&gt;
          &lt;div class="tab-pane fade show active" id="v-border-pills-home" role="tabpanel" aria-labelledby="v-border-pills-home-tab"&gt;
            &lt;h4 class="mb-4"&gt;We move your world!&lt;/h4&gt;
            &lt;p class="mb-4"&gt;
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            &lt;/p&gt;

            &lt;p&gt;
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            &lt;/p&gt;
          &lt;/div&gt;
          &lt;div class="tab-pane fade" id="v-border-pills-profile" role="tabpanel" aria-labelledby="v-border-pills-profile-tab"&gt;

            &lt;div class="media"&gt;
                &lt;img class="mr-3 rounded-circle" src="{{asset('storage/img/90x90.jpg')}}" alt="Generic placeholder image"&gt;
                &lt;div class="media-body"&gt;
                    &lt;h5 class="mt-0 mb-3"&gt;Media heading&lt;/h5&gt;
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                &lt;/div&gt;
            &lt;/div&gt;

          &lt;/div&gt;
          &lt;div class="tab-pane fade" id="v-border-pills-messages" role="tabpanel" aria-labelledby="v-border-pills-messages-tab"&gt;
            &lt;p class="dropcap  dc-outline-primary"&gt;
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            &lt;/p&gt;
          &lt;/div&gt;

          &lt;div class="tab-pane fade" id="v-border-pills-settings" role="tabpanel" aria-labelledby="v-border-pills-settings-tab"&gt;
                &lt;blockquote class="blockquote"&gt;
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                &lt;/blockquote&gt;
          &lt;/div&gt;

        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Border Tabs</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area border-tab">
                                    
                                    <ul class="nav nav-tabs mt-3" id="border-tabs" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="border-home-tab" data-toggle="tab" href="#border-home" role="tab" aria-controls="border-home" aria-selected="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg> Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="border-profile-tab" data-toggle="tab" href="#border-profile" role="tab" aria-controls="border-profile" aria-selected="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> Profile</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="border-contact-tab" data-toggle="tab" href="#border-contact" role="tab" aria-controls="border-contact" aria-selected="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg> Contact</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content mb-4" id="border-tabsContent">
                                        <div class="tab-pane fade show active" id="border-home" role="tabpanel" aria-labelledby="border-home-tab">
                                            <h4 class="mb-4">We move your world!</h4>
                                            <p class="mb-4">
                                              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.                                                
                                            </p>

                                            <p>
                                              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            </p>      
                                        </div>
                                        <div class="tab-pane fade" id="border-profile" role="tabpanel" aria-labelledby="border-profile-tab">
                                            <div class="media">
                                                <img class="meta-usr-img mr-3" src="{{asset('storage/img/90x90.jpg')}}" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="border-contact" role="tabpanel" aria-labelledby="border-contact-tab">
                                            <p class="dropcap  dc-outline-primary">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;ul class="nav nav-tabs mt-3" id="border-tabs" role="tablist"&gt;
    &lt;li class="nav-item"&gt;
        &lt;a class="nav-link active" id="border-home-tab" data-toggle="tab" href="#border-home" role="tab" aria-controls="border-home" aria-selected="true"&gt;&lt;svg&gt; ... &lt;/svg&gt; Home&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class="nav-item"&gt;
        &lt;a class="nav-link" id="border-profile-tab" data-toggle="tab" href="#border-profile" role="tab" aria-controls="border-profile" aria-selected="false"&gt;&lt;svg&gt; ... &lt;/svg&gt; Profile&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class="nav-item"&gt;
        &lt;a class="nav-link" id="border-contact-tab" data-toggle="tab" href="#border-contact" role="tab" aria-controls="border-contact" aria-selected="false"&gt;&lt;svg&gt; ... &lt;/svg&gt; Contact&lt;/a&gt;
    &lt;/li&gt;
&lt;/ul&gt;
&lt;div class="tab-content mb-4" id="border-tabsContent"&gt;
    &lt;div class="tab-pane fade show active" id="border-home" role="tabpanel" aria-labelledby="border-home-tab"&gt;
        &lt;h4 class="mb-4"&gt;We move your world!&lt;/h4&gt;
        &lt;p class="mb-4"&gt;
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.                                                
        &lt;/p&gt;

        &lt;p&gt;
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        &lt;/p&gt;      
    &lt;/div&gt;
    &lt;div class="tab-pane fade" id="border-profile" role="tabpanel" aria-labelledby="border-profile-tab"&gt;
        &lt;div class="media"&gt;
            &lt;img class="meta-usr-img mr-3" src="{{asset('storage/img/90x90.jpg')}}" alt="Generic placeholder image"&gt;
            &lt;div class="media-body"&gt;
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="tab-pane fade" id="border-contact" role="tabpanel" aria-labelledby="border-contact-tab"&gt;
        &lt;p class="dropcap  dc-outline-primary"&gt;
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        &lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;
</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Border Top</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area border-top-tab">
                                    <ul class="nav nav-tabs mb-3 mt-3" id="borderTop" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="border-top-home-tab" data-toggle="tab" href="#border-top-home" role="tab" aria-controls="border-top-home" aria-selected="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg> Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="border-top-profile-tab" data-toggle="tab" href="#border-top-profile" role="tab" aria-controls="border-top-profile" aria-selected="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> Profile</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="border-top-contact-tab" data-toggle="tab" href="#border-top-contact" role="tab" aria-controls="border-top-contact" aria-selected="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg> Contact</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="border-top-setting-tab" data-toggle="tab" href="#border-top-setting" role="tab" aria-controls="border-top-setting" aria-selected="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg> Settings</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="borderTopContent">
                                        <div class="tab-pane fade show active" id="border-top-home" role="tabpanel" aria-labelledby="border-top-home-tab">
                                            <h4 class="mb-4">We move your world!</h4>
                                            <p class="mb-4">
                                              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.                                                
                                            </p>

                                            <p>
                                              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            </p>      
                                        </div>
                                        <div class="tab-pane fade" id="border-top-profile" role="tabpanel" aria-labelledby="border-top-profile-tab">
                                            <div class="media">
                                                <img class="mr-3" src="{{asset('storage/img/90x90.jpg')}}" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="border-top-contact" role="tabpanel" aria-labelledby="border-top-contact-tab">
                                            <p class="dropcap  dc-outline-primary">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            </p>
                                        </div>
                                        <div class="tab-pane fade" id="border-top-setting" role="tabpanel" aria-labelledby="border-top-setting-tab">
                                            <blockquote class="blockquote">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            </blockquote>
                                        </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;ul class="nav nav-tabs mb-3 mt-3" id="borderTop" role="tablist"&gt;
    &lt;li class="nav-item"&gt;
        &lt;a class="nav-link active" id="border-top-home-tab" data-toggle="tab" href="#border-top-home" role="tab" aria-controls="border-top-home" aria-selected="true"&gt;&lt;svg&gt; ... &lt;/svg&gt; Home&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class="nav-item"&gt;
        &lt;a class="nav-link" id="border-top-profile-tab" data-toggle="tab" href="#border-top-profile" role="tab" aria-controls="border-top-profile" aria-selected="false"&gt;&lt;svg&gt; ... &lt;/svg&gt; Profile&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class="nav-item"&gt;
        &lt;a class="nav-link" id="border-top-contact-tab" data-toggle="tab" href="#border-top-contact" role="tab" aria-controls="border-top-contact" aria-selected="false"&gt;&lt;svg&gt; ... &lt;/svg&gt; Contact&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class="nav-item"&gt;
        &lt;a class="nav-link" id="border-top-setting-tab" data-toggle="tab" href="#border-top-setting" role="tab" aria-controls="border-top-setting" aria-selected="false"&gt;&lt;svg&gt; ... &lt;/svg&gt; Settings&lt;/a&gt;
    &lt;/li&gt;
&lt;/ul&gt;
&lt;div class="tab-content" id="borderTopContent"&gt;
    &lt;div class="tab-pane fade show active" id="border-top-home" role="tabpanel" aria-labelledby="border-top-home-tab"&gt;
        &lt;h4 class="mb-4"&gt;We move your world!&lt;/h4&gt;
        &lt;p class="mb-4"&gt;
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.                                                
        &lt;/p&gt;

        &lt;p&gt;
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        &lt;/p&gt;      
    &lt;/div&gt;
    &lt;div class="tab-pane fade" id="border-top-profile" role="tabpanel" aria-labelledby="border-top-profile-tab"&gt;
        &lt;div class="media"&gt;
            &lt;img class="mr-3" src="{{asset('storage/img/90x90.jpg')}}" alt="Generic placeholder image"&gt;
            &lt;div class="media-body"&gt;
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="tab-pane fade" id="border-top-contact" role="tabpanel" aria-labelledby="border-top-contact-tab"&gt;
        &lt;p class="dropcap  dc-outline-primary"&gt;
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        &lt;/p&gt;
    &lt;/div&gt;
    &lt;div class="tab-pane fade" id="border-top-setting" role="tabpanel" aria-labelledby="border-top-setting-tab"&gt;
        &lt;blockquote class="blockquote"&gt;
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        &lt;/blockquote&gt;
    &lt;/div&gt;
&lt;/div&gt;
</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div id="tabsLine" class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Line</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area underline-content">
                                    
                                    <ul class="nav nav-tabs  mb-3" id="lineTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="underline-home-tab" data-toggle="tab" href="#underline-home" role="tab" aria-controls="underline-home" aria-selected="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg> Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="underline-profile-tab" data-toggle="tab" href="#underline-profile" role="tab" aria-controls="underline-profile" aria-selected="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> Profile</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="underline-contact-tab" data-toggle="tab" href="#underline-contact" role="tab" aria-controls="underline-contact" aria-selected="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg> Contact</a>
                                        </li>
                                    </ul>

                                    <div class="tab-content" id="lineTabContent-3">
                                        <div class="tab-pane fade show active" id="underline-home" role="tabpanel" aria-labelledby="underline-home-tab">
                                            <p class="mb-4">
                                              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.                                                
                                            </p>

                                            <p>
                                              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            </p>      
                                        </div>
                                        <div class="tab-pane fade" id="underline-profile" role="tabpanel" aria-labelledby="underline-profile-tab">
                                           <div class="media">
                                                <img class="mr-3" src="{{asset('storage/img/90x90.jpg')}}" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                                </div>
                                              </div>
                                        </div>
                                        <div class="tab-pane fade" id="underline-contact" role="tabpanel" aria-labelledby="underline-contact-tab">
                                            <p class="dropcap  dc-outline-primary">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;ul class="nav nav-tabs  mb-3" id="lineTab" role="tablist"&gt;
    &lt;li class="nav-item"&gt;
        &lt;a class="nav-link active" id="underline-home-tab" data-toggle="tab" href="#underline-home" role="tab" aria-controls="underline-home" aria-selected="true"&gt;&lt;svg&gt; ... &lt;/svg&gt; Home&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class="nav-item"&gt;
        &lt;a class="nav-link" id="underline-profile-tab" data-toggle="tab" href="#underline-profile" role="tab" aria-controls="underline-profile" aria-selected="false"&gt;&lt;svg&gt; ... &lt;/svg&gt; Profile&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class="nav-item"&gt;
        &lt;a class="nav-link" id="underline-contact-tab" data-toggle="tab" href="#underline-contact" role="tab" aria-controls="underline-contact" aria-selected="false"&gt;&lt;svg&gt; ... &lt;/svg&gt; Contact&lt;/a&gt;
    &lt;/li&gt;
&lt;/ul&gt;

&lt;div class="tab-content" id="lineTabContent-3"&gt;
    &lt;div class="tab-pane fade show active" id="underline-home" role="tabpanel" aria-labelledby="underline-home-tab"&gt;
        &lt;p class="mb-4"&gt;
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.                                                
        &lt;/p&gt;

        &lt;p&gt;
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        &lt;/p&gt;      
    &lt;/div&gt;
    &lt;div class="tab-pane fade" id="underline-profile" role="tabpanel" aria-labelledby="underline-profile-tab"&gt;
       &lt;div class="media"&gt;
            &lt;img class="mr-3" src="{{asset('storage/img/90x90.jpg')}}" alt="Generic placeholder image"&gt;
            &lt;div class="media-body"&gt;
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
            &lt;/div&gt;
          &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="tab-pane fade" id="underline-contact" role="tabpanel" aria-labelledby="underline-contact-tab"&gt;
        &lt;p class="dropcap  dc-outline-primary"&gt;
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        &lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;
</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Animated Line</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area animated-underline-content">
                                    
                                    <ul class="nav nav-tabs  mb-3" id="animateLine" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="animated-underline-home-tab" data-toggle="tab" href="#animated-underline-home" role="tab" aria-controls="animated-underline-home" aria-selected="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg> Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="animated-underline-profile-tab" data-toggle="tab" href="#animated-underline-profile" role="tab" aria-controls="animated-underline-profile" aria-selected="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> Profile</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="animated-underline-contact-tab" data-toggle="tab" href="#animated-underline-contact" role="tab" aria-controls="animated-underline-contact" aria-selected="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg> Contact</a>
                                        </li>
                                    </ul>

                                    <div class="tab-content" id="animateLineContent-4">
                                        <div class="tab-pane fade show active" id="animated-underline-home" role="tabpanel" aria-labelledby="animated-underline-home-tab">
                                                <p class="mb-4">
                                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.                                                
                                                </p>

                                                <p>
                                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                </p>      
                                        </div>
                                        <div class="tab-pane fade" id="animated-underline-profile" role="tabpanel" aria-labelledby="animated-underline-profile-tab">
                                            <div class="media">
                                                <img class="mr-3" src="{{asset('storage/img/90x90.jpg')}}" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                                </div>
                                              </div>
                                        </div>
                                        <div class="tab-pane fade" id="animated-underline-contact" role="tabpanel" aria-labelledby="animated-underline-contact-tab">
                                            <p class="dropcap  dc-outline-primary">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;ul class="nav nav-tabs  mb-3" id="animateLine" role="tablist"&gt;
    &lt;li class="nav-item"&gt;
        &lt;a class="nav-link active" id="animated-underline-home-tab" data-toggle="tab" href="#animated-underline-home" role="tab" aria-controls="animated-underline-home" aria-selected="true"&gt;&lt;svg&gt; ... &lt;/svg&gt; Home&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class="nav-item"&gt;
        &lt;a class="nav-link" id="animated-underline-profile-tab" data-toggle="tab" href="#animated-underline-profile" role="tab" aria-controls="animated-underline-profile" aria-selected="false"&gt;&lt;svg&gt; ... &lt;/svg&gt; Profile&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class="nav-item"&gt;
        &lt;a class="nav-link" id="animated-underline-contact-tab" data-toggle="tab" href="#animated-underline-contact" role="tab" aria-controls="animated-underline-contact" aria-selected="false"&gt;&lt;svg&gt; ... &lt;/svg&gt; Contact&lt;/a&gt;
    &lt;/li&gt;
&lt;/ul&gt;

&lt;div class="tab-content" id="animateLineContent-4"&gt;
    &lt;div class="tab-pane fade show active" id="animated-underline-home" role="tabpanel" aria-labelledby="animated-underline-home-tab"&gt;
            &lt;p class="mb-4"&gt;
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.                                                
            &lt;/p&gt;

            &lt;p&gt;
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            &lt;/p&gt;      
    &lt;/div&gt;
    &lt;div class="tab-pane fade" id="animated-underline-profile" role="tabpanel" aria-labelledby="animated-underline-profile-tab"&gt;
        &lt;div class="media"&gt;
            &lt;img class="mr-3" src="{{asset('storage/img/90x90.jpg')}}" alt="Generic placeholder image"&gt;
            &lt;div class="media-body"&gt;
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
            &lt;/div&gt;
          &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="tab-pane fade" id="animated-underline-contact" role="tabpanel" aria-labelledby="animated-underline-contact-tab"&gt;
        &lt;p class="dropcap  dc-outline-primary"&gt;
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        &lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;
</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Vertical Line Tab</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area vertical-line-pill">
                                    
                                    <div class="row mb-4 mt-3">
                                        <div class="col-sm-3 col-12">
                                            <div class="nav flex-column nav-pills mb-sm-0 mb-3 text-center mx-auto" id="v-line-pills-tab" role="tablist" aria-orientation="vertical">
                                              <a class="nav-link active mb-3" id="v-line-pills-home-tab" data-toggle="pill" href="#v-line-pills-home" role="tab" aria-controls="v-line-pills-home" aria-selected="true">Home</a>
                                              <a class="nav-link mb-3  text-center" id="v-line-pills-profile-tab" data-toggle="pill" href="#v-line-pills-profile" role="tab" aria-controls="v-line-pills-profile" aria-selected="false">Profile</a>
                                              <a class="nav-link mb-3  text-center" id="v-line-pills-messages-tab" data-toggle="pill" href="#v-line-pills-messages" role="tab" aria-controls="v-line-pills-messages" aria-selected="false">Messages</a>
                                              <a class="nav-link  text-center" id="v-line-pills-settings-tab" data-toggle="pill" href="#v-line-pills-settings" role="tab" aria-controls="v-line-pills-settings" aria-selected="false">Settings</a>
                                            </div>
                                        </div>

                                        <div class="col-sm-9 col-12">
                                            <div class="tab-content" id="v-line-pills-tabContent">
                                              <div class="tab-pane fade show active" id="v-line-pills-home" role="tabpanel" aria-labelledby="v-line-pills-home-tab">
                                                <h4 class="mb-4">We move your world!</h4>
                                                <p class="mb-4">
                                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.                                                
                                                </p>

                                                <p>
                                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                </p>                                            
                                              </div>
                                              <div class="tab-pane fade" id="v-line-pills-profile" role="tabpanel" aria-labelledby="v-line-pills-profile-tab">

                                                <div class="media">
                                                    <img class="mr-3 rounded-circle" src="{{asset('storage/img/90x90.jpg')}}" alt="Generic placeholder image">
                                                    <div class="media-body">
                                                        <h5 class="mt-0">Media heading</h5>
                                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                                    </div>
                                                </div>

                                              </div>
                                              <div class="tab-pane fade" id="v-line-pills-messages" role="tabpanel" aria-labelledby="v-line-pills-messages-tab">
                                                <p class="dropcap  dc-outline-primary">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                </p>
                                              </div>
                                              <div class="tab-pane fade" id="v-line-pills-settings" role="tabpanel" aria-labelledby="v-line-pills-settings-tab">
                                                <blockquote class="blockquote">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                </blockquote>
                                              </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div class="row mb-4 mt-3"&gt;
    &lt;div class="col-sm-3 col-12"&gt;
        &lt;div class="nav flex-column nav-pills mb-sm-0 mb-3 text-center mx-auto" id="v-line-pills-tab" role="tablist" aria-orientation="vertical"&gt;
          &lt;a class="nav-link active mb-3" id="v-line-pills-home-tab" data-toggle="pill" href="#v-line-pills-home" role="tab" aria-controls="v-line-pills-home" aria-selected="true"&gt;Home&lt;/a&gt;
          &lt;a class="nav-link mb-3  text-center" id="v-line-pills-profile-tab" data-toggle="pill" href="#v-line-pills-profile" role="tab" aria-controls="v-line-pills-profile" aria-selected="false"&gt;Profile&lt;/a&gt;
          &lt;a class="nav-link mb-3  text-center" id="v-line-pills-messages-tab" data-toggle="pill" href="#v-line-pills-messages" role="tab" aria-controls="v-line-pills-messages" aria-selected="false"&gt;Messages&lt;/a&gt;
          &lt;a class="nav-link  text-center" id="v-line-pills-settings-tab" data-toggle="pill" href="#v-line-pills-settings" role="tab" aria-controls="v-line-pills-settings" aria-selected="false"&gt;Settings&lt;/a&gt;
        &lt;/div&gt;
    &lt;/div&gt;

    &lt;div class="col-sm-9 col-12"&gt;
        &lt;div class="tab-content" id="v-line-pills-tabContent"&gt;
          &lt;div class="tab-pane fade show active" id="v-line-pills-home" role="tabpanel" aria-labelledby="v-line-pills-home-tab"&gt;
            &lt;h4 class="mb-4"&gt;We move your world!&lt;/h4&gt;
            &lt;p class="mb-4"&gt;
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.                                                
            &lt;/p&gt;

            &lt;p&gt;
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            &lt;/p&gt;                                            
          &lt;/div&gt;
          &lt;div class="tab-pane fade" id="v-line-pills-profile" role="tabpanel" aria-labelledby="v-line-pills-profile-tab"&gt;

            &lt;div class="media"&gt;
                &lt;img class="mr-3 rounded-circle" src="{{asset('storage/img/90x90.jpg')}}" alt="Generic placeholder image"&gt;
                &lt;div class="media-body"&gt;
                    &lt;h5 class="mt-0"&gt;Media heading&lt;/h5&gt;
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                &lt;/div&gt;
            &lt;/div&gt;

          &lt;/div&gt;
          &lt;div class="tab-pane fade" id="v-line-pills-messages" role="tabpanel" aria-labelledby="v-line-pills-messages-tab"&gt;
            &lt;p class="dropcap  dc-outline-primary"&gt;
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            &lt;/p&gt;
          &lt;/div&gt;
          &lt;div class="tab-pane fade" id="v-line-pills-settings" role="tabpanel" aria-labelledby="v-line-pills-settings-tab"&gt;
            &lt;blockquote class="blockquote"&gt;
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            &lt;/blockquote&gt;
          &lt;/div&gt;

        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div id="tabsAlignments" class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4 class="justify-tab">Justify Tabs</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area justify-tab">
                                    
                                    <ul class="nav nav-tabs  mb-3 mt-3 nav-fill" id="justifyTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="justify-home-tab" data-toggle="tab" href="#justify-home" role="tab" aria-controls="justify-home" aria-selected="true">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="justify-profile-tab" data-toggle="tab" href="#justify-profile" role="tab" aria-controls="justify-profile" aria-selected="false">Profile</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="justify-contact-tab" data-toggle="tab" href="#justify-contact" role="tab" aria-controls="justify-contact" aria-selected="false">Contact</a>
                                        </li>
                                    </ul>

                                    <div class="tab-content" id="justifyTabContent">
                                        <div class="tab-pane fade show active" id="justify-home" role="tabpanel" aria-labelledby="justify-home-tab">
                                            <p class="mb-4">
                                              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.                                                
                                            </p>

                                            <p>
                                              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            </p>
                                        </div>
                                        <div class="tab-pane fade" id="justify-profile" role="tabpanel" aria-labelledby="justify-profile-tab">
                                            <div class="media">
                                                <img class="mr-3" src="{{asset('storage/img/90x90.jpg')}}" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                                </div>
                                              </div>
                                        </div>
                                        <div class="tab-pane fade" id="justify-contact" role="tabpanel" aria-labelledby="justify-contact-tab">
                                            <p class="dropcap  dc-outline-primary">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;ul class="nav nav-tabs  mb-3 mt-3 nav-fill" id="justifyTab" role="tablist"&gt;
    &lt;li class="nav-item"&gt;
        &lt;a class="nav-link active" id="justify-home-tab" data-toggle="tab" href="#justify-home" role="tab" aria-controls="justify-home" aria-selected="true"&gt;Home&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class="nav-item"&gt;
        &lt;a class="nav-link" id="justify-profile-tab" data-toggle="tab" href="#justify-profile" role="tab" aria-controls="justify-profile" aria-selected="false"&gt;Profile&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class="nav-item"&gt;
        &lt;a class="nav-link" id="justify-contact-tab" data-toggle="tab" href="#justify-contact" role="tab" aria-controls="justify-contact" aria-selected="false"&gt;Contact&lt;/a&gt;
    &lt;/li&gt;
&lt;/ul&gt;

&lt;div class="tab-content" id="justifyTabContent"&gt;
    &lt;div class="tab-pane fade show active" id="justify-home" role="tabpanel" aria-labelledby="justify-home-tab"&gt;
        &lt;p class="mb-4"&gt;
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.                                                
        &lt;/p&gt;

        &lt;p&gt;
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        &lt;/p&gt;
    &lt;/div&gt;
    &lt;div class="tab-pane fade" id="justify-profile" role="tabpanel" aria-labelledby="justify-profile-tab"&gt;
        &lt;div class="media"&gt;
            &lt;img class="mr-3" src="{{asset('storage/img/90x90.jpg')}}" alt="Generic placeholder image"&gt;
            &lt;div class="media-body"&gt;
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
            &lt;/div&gt;
          &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="tab-pane fade" id="justify-contact" role="tabpanel" aria-labelledby="justify-contact-tab"&gt;
        &lt;p class="dropcap  dc-outline-primary"&gt;
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        &lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;
</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Justify Pills</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area justify-pill">
                                    
                                    <ul class="nav nav-pills mb-3 mt-3 nav-fill" id="justify-pills-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="justify-pills-home-tab" data-toggle="pill" href="#justify-pills-home" role="tab" aria-controls="justify-pills-home" aria-selected="true">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="justify-pills-profile-tab" data-toggle="pill" href="#justify-pills-profile" role="tab" aria-controls="justify-pills-profile" aria-selected="false">Profile</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="justify-pills-contact-tab" data-toggle="pill" href="#justify-pills-contact" role="tab" aria-controls="justify-pills-contact" aria-selected="false">Contact</a>
                                        </li>
                                    </ul>

                                    <div class="tab-content" id="justify-pills-tabContent">
                                        <div class="tab-pane fade show active" id="justify-pills-home" role="tabpanel" aria-labelledby="justify-pills-home-tab">
                                            <p class="mb-4">
                                              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.                                                
                                            </p>

                                            <p>
                                              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            </p>      
                                        </div>
                                        <div class="tab-pane fade" id="justify-pills-profile" role="tabpanel" aria-labelledby="justify-pills-profile-tab">
                                            <div class="media">
                                                <img class="mr-3" src="{{asset('storage/img/90x90.jpg')}}" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                                </div>
                                              </div>
                                        </div>
                                        <div class="tab-pane fade" id="justify-pills-contact" role="tabpanel" aria-labelledby="justify-pills-contact-tab">
                                            <p class="dropcap  dc-outline-primary">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;ul class="nav nav-pills mb-3 mt-3 nav-fill" id="justify-pills-tab" role="tablist"&gt;
    &lt;li class="nav-item"&gt;
        &lt;a class="nav-link active" id="justify-pills-home-tab" data-toggle="pill" href="#justify-pills-home" role="tab" aria-controls="justify-pills-home" aria-selected="true"&gt;Home&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class="nav-item"&gt;
        &lt;a class="nav-link" id="justify-pills-profile-tab" data-toggle="pill" href="#justify-pills-profile" role="tab" aria-controls="justify-pills-profile" aria-selected="false"&gt;Profile&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class="nav-item"&gt;
        &lt;a class="nav-link" id="justify-pills-contact-tab" data-toggle="pill" href="#justify-pills-contact" role="tab" aria-controls="justify-pills-contact" aria-selected="false"&gt;Contact&lt;/a&gt;
    &lt;/li&gt;
&lt;/ul&gt;

&lt;div class="tab-content" id="justify-pills-tabContent"&gt;
    &lt;div class="tab-pane fade show active" id="justify-pills-home" role="tabpanel" aria-labelledby="justify-pills-home-tab"&gt;
        &lt;p class="mb-4"&gt;
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.                                                
        &lt;/p&gt;

        &lt;p&gt;
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        &lt;/p&gt;      
    &lt;/div&gt;
    &lt;div class="tab-pane fade" id="justify-pills-profile" role="tabpanel" aria-labelledby="justify-pills-profile-tab"&gt;
        &lt;div class="media"&gt;
            &lt;img class="mr-3" src="{{asset('storage/img/90x90.jpg')}}" alt="Generic placeholder image"&gt;
            &lt;div class="media-body"&gt;
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
            &lt;/div&gt;
          &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="tab-pane fade" id="justify-pills-contact" role="tabpanel" aria-labelledby="justify-pills-contact-tab"&gt;
        &lt;p class="dropcap  dc-outline-primary"&gt;
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        &lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;
</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Justify Center Tabs</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area tab-justify-centered">
                                    
                                    <ul class="nav nav-tabs  mb-3 mt-3 justify-content-center" id="justifyCenterTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="justify-center-home-tab" data-toggle="tab" href="#justify-center-home" role="tab" aria-controls="justify-center-home" aria-selected="true">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="justify-center-profile-tab" data-toggle="tab" href="#justify-center-profile" role="tab" aria-controls="justify-center-profile" aria-selected="false">Profile</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="justify-center-contact-tab" data-toggle="tab" href="#justify-center-contact" role="tab" aria-controls="justify-center-contact" aria-selected="false">Contact</a>
                                        </li>
                                    </ul>

                                    <div class="tab-content" id="justifyCenterTabContent">
                                        <div class="tab-pane fade show active" id="justify-center-home" role="tabpanel" aria-labelledby="justify-center-home-tab">
                                            <p class="mb-4">
                                              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.                                                
                                            </p>

                                            <p>
                                              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            </p>      
                                        </div>
                                        <div class="tab-pane fade" id="justify-center-profile" role="tabpanel" aria-labelledby="justify-center-profile-tab">
                                            <div class="media">
                                                <img class="mr-3" src="{{asset('storage/img/90x90.jpg')}}" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                                </div>
                                              </div>
                                        </div>
                                        <div class="tab-pane fade" id="justify-center-contact" role="tabpanel" aria-labelledby="justify-center-contact-tab">
                                            <p class="dropcap  dc-outline-primary">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;ul class="nav nav-tabs  mb-3 mt-3 justify-content-center" id="justifyCenterTab" role="tablist"&gt;
    &lt;li class="nav-item"&gt;
        &lt;a class="nav-link active" id="justify-center-home-tab" data-toggle="tab" href="#justify-center-home" role="tab" aria-controls="justify-center-home" aria-selected="true"&gt;Home&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class="nav-item"&gt;
        &lt;a class="nav-link" id="justify-center-profile-tab" data-toggle="tab" href="#justify-center-profile" role="tab" aria-controls="justify-center-profile" aria-selected="false"&gt;Profile&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class="nav-item"&gt;
        &lt;a class="nav-link" id="justify-center-contact-tab" data-toggle="tab" href="#justify-center-contact" role="tab" aria-controls="justify-center-contact" aria-selected="false"&gt;Contact&lt;/a&gt;
    &lt;/li&gt;
&lt;/ul&gt;

&lt;div class="tab-content" id="justifyCenterTabContent"&gt;
    &lt;div class="tab-pane fade show active" id="justify-center-home" role="tabpanel" aria-labelledby="justify-center-home-tab"&gt;
        &lt;p class="mb-4"&gt;
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.                                                
        &lt;/p&gt;

        &lt;p&gt;
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        &lt;/p&gt;      
    &lt;/div&gt;
    &lt;div class="tab-pane fade" id="justify-center-profile" role="tabpanel" aria-labelledby="justify-center-profile-tab"&gt;
        &lt;div class="media"&gt;
            &lt;img class="mr-3" src="{{asset('storage/img/90x90.jpg')}}" alt="Generic placeholder image"&gt;
            &lt;div class="media-body"&gt;
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
            &lt;/div&gt;
          &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="tab-pane fade" id="justify-center-contact" role="tabpanel" aria-labelledby="justify-center-contact-tab"&gt;
        &lt;p class="dropcap  dc-outline-primary"&gt;
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        &lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;
</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Justify Center Pills</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area pill-justify-centered">
                                    
                                    <ul class="nav nav-pills mb-3 mt-3 justify-content-center" id="justify-center-pills-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="justify-center-pills-home-tab" data-toggle="pill" href="#justify-center-pills-home" role="tab" aria-controls="justify-center-pills-home" aria-selected="true">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="justify-center-pills-profile-tab" data-toggle="pill" href="#justify-center-pills-profile" role="tab" aria-controls="justify-center-pills-profile" aria-selected="false">Profile</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="justify-center-pills-contact-tab" data-toggle="pill" href="#justify-center-pills-contact" role="tab" aria-controls="justify-center-pills-contact" aria-selected="false">Contact</a>
                                        </li>
                                    </ul>

                                    <div class="tab-content" id="justify-center-pills-tabContent">
                                        <div class="tab-pane fade show active" id="justify-center-pills-home" role="tabpanel" aria-labelledby="justify-center-pills-home-tab">
                                                <p class="mb-4">
                                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.                                                
                                                </p>

                                                <p>
                                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                </p>      
                                        </div>
                                        <div class="tab-pane fade" id="justify-center-pills-profile" role="tabpanel" aria-labelledby="justify-center-pills-profile-tab">
                                            <div class="media">
                                                <img class="mr-3" src="{{asset('storage/img/90x90.jpg')}}" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                                </div>
                                              </div>
                                        </div>
                                        <div class="tab-pane fade" id="justify-center-pills-contact" role="tabpanel" aria-labelledby="justify-center-pills-contact-tab">
                                            <p class="dropcap  dc-outline-primary">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;ul class="nav nav-pills mb-3 mt-3 justify-content-center" id="justify-center-pills-tab" role="tablist"&gt;
    &lt;li class="nav-item"&gt;
        &lt;a class="nav-link active" id="justify-center-pills-home-tab" data-toggle="pill" href="#justify-center-pills-home" role="tab" aria-controls="justify-center-pills-home" aria-selected="true"&gt;Home&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class="nav-item"&gt;
        &lt;a class="nav-link" id="justify-center-pills-profile-tab" data-toggle="pill" href="#justify-center-pills-profile" role="tab" aria-controls="justify-center-pills-profile" aria-selected="false"&gt;Profile&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class="nav-item"&gt;
        &lt;a class="nav-link" id="justify-center-pills-contact-tab" data-toggle="pill" href="#justify-center-pills-contact" role="tab" aria-controls="justify-center-pills-contact" aria-selected="false"&gt;Contact&lt;/a&gt;
    &lt;/li&gt;
&lt;/ul&gt;

&lt;div class="tab-content" id="justify-center-pills-tabContent"&gt;
    &lt;div class="tab-pane fade show active" id="justify-center-pills-home" role="tabpanel" aria-labelledby="justify-center-pills-home-tab"&gt;
            &lt;p class="mb-4"&gt;
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            &lt;/p&gt;

            &lt;p&gt;
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            &lt;/p&gt;      
    &lt;/div&gt;
    &lt;div class="tab-pane fade" id="justify-center-pills-profile" role="tabpanel" aria-labelledby="justify-center-pills-profile-tab"&gt;
        &lt;div class="media"&gt;
            &lt;img class="mr-3" src="{{asset('storage/img/90x90.jpg')}}" alt="Generic placeholder image"&gt;
            &lt;div class="media-body"&gt;
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
            &lt;/div&gt;
          &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="tab-pane fade" id="justify-center-pills-contact" role="tabpanel" aria-labelledby="justify-center-pills-contact-tab"&gt;
        &lt;p class="dropcap  dc-outline-primary"&gt;
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        &lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;
</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Justify Right Tabs</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area tab-justify-right">
                                    
                                    <ul class="nav nav-tabs  mb-3 mt-3 justify-content-end" id="justifyRightTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="justify-right-home-tab" data-toggle="tab" href="#justify-right-home" role="tab" aria-controls="justify-right-home" aria-selected="true">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="justify-right-profile-tab" data-toggle="tab" href="#justify-right-profile" role="tab" aria-controls="justify-right-profile" aria-selected="false">Profile</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="justify-right-contact-tab" data-toggle="tab" href="#justify-right-contact" role="tab" aria-controls="justify-right-contact" aria-selected="false">Contact</a>
                                        </li>
                                    </ul>

                                    <div class="tab-content" id="justifyRightTabContent">
                                        <div class="tab-pane fade show active" id="justify-right-home" role="tabpanel" aria-labelledby="justify-right-home-tab">
                                            <p class="mb-4">
                                              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.                                                
                                            </p>

                                            <p>
                                              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            </p>      
                                        </div>
                                        <div class="tab-pane fade" id="justify-right-profile" role="tabpanel" aria-labelledby="justify-right-profile-tab">
                                            <div class="media">
                                                <img class="mr-3" src="{{asset('storage/img/90x90.jpg')}}" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                                </div>
                                              </div>
                                        </div>
                                        <div class="tab-pane fade" id="justify-right-contact" role="tabpanel" aria-labelledby="justify-right-contact-tab">
                                            <p class="dropcap  dc-outline-primary">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;ul class="nav nav-tabs  mb-3 mt-3 justify-content-end" id="justifyRightTab" role="tablist"&gt;
    &lt;li class="nav-item"&gt;
        &lt;a class="nav-link active" id="justify-right-home-tab" data-toggle="tab" href="#justify-right-home" role="tab" aria-controls="justify-right-home" aria-selected="true"&gt;Home&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class="nav-item"&gt;
        &lt;a class="nav-link" id="justify-right-profile-tab" data-toggle="tab" href="#justify-right-profile" role="tab" aria-controls="justify-right-profile" aria-selected="false"&gt;Profile&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class="nav-item"&gt;
        &lt;a class="nav-link" id="justify-right-contact-tab" data-toggle="tab" href="#justify-right-contact" role="tab" aria-controls="justify-right-contact" aria-selected="false"&gt;Contact&lt;/a&gt;
    &lt;/li&gt;
&lt;/ul&gt;

&lt;div class="tab-content" id="justifyRightTabContent"&gt;
    &lt;div class="tab-pane fade show active" id="justify-right-home" role="tabpanel" aria-labelledby="justify-right-home-tab"&gt;
        &lt;p class="mb-4"&gt;
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.                                                
        &lt;/p&gt;

        &lt;p&gt;
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        &lt;/p&gt;      
    &lt;/div&gt;
    &lt;div class="tab-pane fade" id="justify-right-profile" role="tabpanel" aria-labelledby="justify-right-profile-tab"&gt;
        &lt;div class="media"&gt;
            &lt;img class="mr-3" src="{{asset('storage/img/90x90.jpg')}}" alt="Generic placeholder image"&gt;
            &lt;div class="media-body"&gt;
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
            &lt;/div&gt;
          &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="tab-pane fade" id="justify-right-contact" role="tabpanel" aria-labelledby="justify-right-contact-tab"&gt;
        &lt;p class="dropcap  dc-outline-primary"&gt;
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        &lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;
</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Justify Right Pills</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area pill-justify-right">
                                    
                                    <ul class="nav nav-pills mb-3 mt-3 justify-content-end" id="justify-right-pills-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="justify-right-pills-home-tab" data-toggle="pill" href="#justify-right-pills-home" role="tab" aria-controls="justify-right-pills-home" aria-selected="true">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="justify-right-pills-profile-tab" data-toggle="pill" href="#justify-right-pills-profile" role="tab" aria-controls="justify-right-pills-profile" aria-selected="false">Profile</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="justify-right-pills-contact-tab" data-toggle="pill" href="#justify-right-pills-contact" role="tab" aria-controls="justify-right-pills-contact" aria-selected="false">Contact</a>
                                        </li>
                                    </ul>

                                    <div class="tab-content" id="justify-right-pills-tabContent">
                                        <div class="tab-pane fade show active" id="justify-right-pills-home" role="tabpanel" aria-labelledby="justify-right-pills-home-tab">
                                            <p class="mb-4">
                                              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.                                                
                                            </p>
                                            <p>
                                              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            </p>      
                                        </div>
                                        <div class="tab-pane fade" id="justify-right-pills-profile" role="tabpanel" aria-labelledby="justify-right-pills-profile-tab">
                                            <div class="media">
                                                <img class="mr-3" src="{{asset('storage/img/90x90.jpg')}}" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                                </div>
                                              </div>
                                        </div>
                                        <div class="tab-pane fade" id="justify-right-pills-contact" role="tabpanel" aria-labelledby="justify-right-pills-contact-tab">
                                            <p class="dropcap  dc-outline-primary">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;ul class="nav nav-pills mb-3 mt-3 justify-content-end" id="justify-right-pills-tab" role="tablist"&gt;
    &lt;li class="nav-item"&gt;
        &lt;a class="nav-link active" id="justify-right-pills-home-tab" data-toggle="pill" href="#justify-right-pills-home" role="tab" aria-controls="justify-right-pills-home" aria-selected="true"&gt;Home&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class="nav-item"&gt;
        &lt;a class="nav-link" id="justify-right-pills-profile-tab" data-toggle="pill" href="#justify-right-pills-profile" role="tab" aria-controls="justify-right-pills-profile" aria-selected="false"&gt;Profile&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class="nav-item"&gt;
        &lt;a class="nav-link" id="justify-right-pills-contact-tab" data-toggle="pill" href="#justify-right-pills-contact" role="tab" aria-controls="justify-right-pills-contact" aria-selected="false"&gt;Contact&lt;/a&gt;
    &lt;/li&gt;
&lt;/ul&gt;

&lt;div class="tab-content" id="justify-right-pills-tabContent"&gt;
    &lt;div class="tab-pane fade show active" id="justify-right-pills-home" role="tabpanel" aria-labelledby="justify-right-pills-home-tab"&gt;
        &lt;p class="mb-4"&gt;
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.                                                
        &lt;/p&gt;
        &lt;p&gt;
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        &lt;/p&gt;      
    &lt;/div&gt;
    &lt;div class="tab-pane fade" id="justify-right-pills-profile" role="tabpanel" aria-labelledby="justify-right-pills-profile-tab"&gt;
        &lt;div class="media"&gt;
            &lt;img class="mr-3" src="{{asset('storage/img/90x90.jpg')}}" alt="Generic placeholder image"&gt;
            &lt;div class="media-body"&gt;
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
            &lt;/div&gt;
          &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="tab-pane fade" id="justify-right-pills-contact" role="tabpanel" aria-labelledby="justify-right-pills-contact-tab"&gt;
        &lt;p class="dropcap  dc-outline-primary"&gt;
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        &lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;
</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div id="tabsWithIcons" class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Pills with Icon</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area rounded-pills-icon">
                                    
                                    <ul class="nav nav-pills mb-4 mt-3  justify-content-center" id="rounded-pills-icon-tab" role="tablist">
                                        <li class="nav-item ml-2 mr-2">
                                            <a class="nav-link mb-2 active text-center" id="rounded-pills-icon-home-tab" data-toggle="pill" href="#rounded-pills-icon-home" role="tab" aria-controls="rounded-pills-icon-home" aria-selected="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg> Home</a>
                                        </li>
                                        <li class="nav-item ml-2 mr-2">
                                            <a class="nav-link mb-2 text-center" id="rounded-pills-icon-profile-tab" data-toggle="pill" href="#rounded-pills-icon-profile" role="tab" aria-controls="rounded-pills-icon-profile" aria-selected="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> Profile</a>
                                        </li>
                                        <li class="nav-item ml-2 mr-2">
                                            <a class="nav-link mb-2 text-center" id="rounded-pills-icon-contact-tab" data-toggle="pill" href="#rounded-pills-icon-contact" role="tab" aria-controls="rounded-pills-icon-contact" aria-selected="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg> Contact</a>
                                        </li>

                                        <li class="nav-item ml-2 mr-2">
                                            <a class="nav-link mb-2 text-center" id="rounded-pills-icon-settings-tab" data-toggle="pill" href="#rounded-pills-icon-settings" role="tab" aria-controls="rounded-pills-icon-settings" aria-selected="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg> Settings</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="rounded-pills-icon-tabContent">
                                        <div class="tab-pane fade show active" id="rounded-pills-icon-home" role="tabpanel" aria-labelledby="rounded-pills-icon-home-tab">
                                            <p class="mb-4">
                                              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.                                                
                                            </p>

                                            <p>
                                              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            </p>      
                                        </div>
                                        <div class="tab-pane fade" id="rounded-pills-icon-profile" role="tabpanel" aria-labelledby="rounded-pills-icon-profile-tab">
                                            <div class="media">
                                                <img class="mr-3" src="{{asset('storage/img/90x90.jpg')}}" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                                </div>
                                              </div>
                                        </div>
                                        <div class="tab-pane fade" id="rounded-pills-icon-contact" role="tabpanel" aria-labelledby="rounded-pills-icon-contact-tab">
                                            <p class="dropcap  dc-outline-primary">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            </p>
                                        </div>
                                        <div class="tab-pane fade" id="rounded-pills-icon-settings" role="tabpanel" aria-labelledby="rounded-pills-icon-settings-tab">
                                            <blockquote class="blockquote">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            </blockquote>
                                        </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;ul class="nav nav-pills mb-4 mt-3  justify-content-center" id="rounded-pills-icon-tab" role="tablist"&gt;
    &lt;li class="nav-item ml-2 mr-2"&gt;
        &lt;a class="nav-link mb-2 active text-center" id="rounded-pills-icon-home-tab" data-toggle="pill" href="#rounded-pills-icon-home" role="tab" aria-controls="rounded-pills-icon-home" aria-selected="true"&gt;&lt;svg&gt; ... &lt;/svg&gt; Home&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class="nav-item ml-2 mr-2"&gt;
        &lt;a class="nav-link mb-2 text-center" id="rounded-pills-icon-profile-tab" data-toggle="pill" href="#rounded-pills-icon-profile" role="tab" aria-controls="rounded-pills-icon-profile" aria-selected="false"&gt;&lt;svg&gt; ... &lt;/svg&gt; Profile&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class="nav-item ml-2 mr-2"&gt;
        &lt;a class="nav-link mb-2 text-center" id="rounded-pills-icon-contact-tab" data-toggle="pill" href="#rounded-pills-icon-contact" role="tab" aria-controls="rounded-pills-icon-contact" aria-selected="false"&gt;&lt;svg&gt; ... &lt;/svg&gt; Contact&lt;/a&gt;
    &lt;/li&gt;

    &lt;li class="nav-item ml-2 mr-2"&gt;
        &lt;a class="nav-link mb-2 text-center" id="rounded-pills-icon-settings-tab" data-toggle="pill" href="#rounded-pills-icon-settings" role="tab" aria-controls="rounded-pills-icon-settings" aria-selected="false"&gt;&lt;svg&gt; ... &lt;/svg&gt; Settings&lt;/a&gt;
    &lt;/li&gt;
&lt;/ul&gt;
&lt;div class="tab-content" id="rounded-pills-icon-tabContent"&gt;
    &lt;div class="tab-pane fade show active" id="rounded-pills-icon-home" role="tabpanel" aria-labelledby="rounded-pills-icon-home-tab"&gt;
        &lt;p class="mb-4"&gt;
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.                                                
        &lt;/p&gt;

        &lt;p&gt;
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        &lt;/p&gt;      
    &lt;/div&gt;
    &lt;div class="tab-pane fade" id="rounded-pills-icon-profile" role="tabpanel" aria-labelledby="rounded-pills-icon-profile-tab"&gt;
        &lt;div class="media"&gt;
            &lt;img class="mr-3" src="{{asset('storage/img/90x90.jpg')}}" alt="Generic placeholder image"&gt;
            &lt;div class="media-body"&gt;
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
            &lt;/div&gt;
          &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="tab-pane fade" id="rounded-pills-icon-contact" role="tabpanel" aria-labelledby="rounded-pills-icon-contact-tab"&gt;
        &lt;p class="dropcap  dc-outline-primary"&gt;
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        &lt;/p&gt;
    &lt;/div&gt;
    &lt;div class="tab-pane fade" id="rounded-pills-icon-settings" role="tabpanel" aria-labelledby="rounded-pills-icon-settings-tab"&gt;
        &lt;blockquote class="blockquote"&gt;
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        &lt;/blockquote&gt;
    &lt;/div&gt;
&lt;/div&gt;
</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Circle with Icon</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area rounded-circle-pills-icon">
                                    
                                    <ul class="nav nav-pills mb-4 mt-3  justify-content-center" id="rounded-circle-pills-icon-tab" role="tablist">
                                        <li class="nav-item mr-2">
                                            <a class="nav-link mb-1 rounded-circle active" id="rounded-circle-pills-icon-home-tab" data-toggle="pill" href="#rounded-circle-pills-icon-home" role="tab" aria-controls="rounded-circle-pills-icon-home" aria-selected="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg></a>
                                        </li>
                                        <li class="nav-item ml-2 mr-2">
                                            <a class="nav-link mb-1 rounded-circle" id="rounded-circle-pills-icon-profile-tab" data-toggle="pill" href="#rounded-circle-pills-icon-profile" role="tab" aria-controls="rounded-circle-pills-icon-profile" aria-selected="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg></a>
                                        </li>
                                        <li class="nav-item ml-2 mr-2">
                                            <a class="nav-link mb-1 rounded-circle" id="rounded-circle-pills-icon-contact-tab" data-toggle="pill" href="#rounded-circle-pills-icon-contact" role="tab" aria-controls="rounded-circle-pills-icon-contact" aria-selected="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg></a>
                                        </li>

                                        <li class="nav-item ml-2 mr-2">
                                            <a class="nav-link mb-1 rounded-circle" id="rounded-circle-pills-icon-settings-tab" data-toggle="pill" href="#rounded-circle-pills-icon-settings" role="tab" aria-controls="rounded-circle-pills-icon-settings" aria-selected="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg></a>
                                        </li>
                                    </ul>

                                    <div class="tab-content" id="rounded-circle-pills-icon-tabContent">
                                        <div class="tab-pane fade show active" id="rounded-circle-pills-icon-home" role="tabpanel" aria-labelledby="rounded-circle-pills-icon-home-tab">
                                            <p class="mb-4">
                                              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.                                                
                                            </p>

                                            <p>
                                              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            </p>
                                            </div>
                                        <div class="tab-pane fade" id="rounded-circle-pills-icon-profile" role="tabpanel" aria-labelledby="rounded-circle-pills-icon-profile-tab">
                                            <div class="media">
                                                <img class="mr-3" src="{{asset('storage/img/90x90.jpg')}}" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                                </div>
                                              </div>
                                        </div>
                                        <div class="tab-pane fade" id="rounded-circle-pills-icon-contact" role="tabpanel" aria-labelledby="rounded-circle-pills-icon-contact-tab">
                                            <p class="dropcap  dc-outline-primary">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                            </p>
                                        </div>
                                        <div class="tab-pane fade" id="rounded-circle-pills-icon-settings" role="tabpanel" aria-labelledby="rounded-pills-icon-settings-tab">
                                            <blockquote class="blockquote">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            </blockquote>
                                        </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;ul class="nav nav-pills mb-4 mt-3  justify-content-center" id="rounded-circle-pills-icon-tab" role="tablist"&gt;
    &lt;li class="nav-item mr-2"&gt;
        &lt;a class="nav-link mb-1 rounded-circle active" id="rounded-circle-pills-icon-home-tab" data-toggle="pill" href="#rounded-circle-pills-icon-home" role="tab" aria-controls="rounded-circle-pills-icon-home" aria-selected="true"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class="nav-item ml-2 mr-2"&gt;
        &lt;a class="nav-link mb-1 rounded-circle" id="rounded-circle-pills-icon-profile-tab" data-toggle="pill" href="#rounded-circle-pills-icon-profile" role="tab" aria-controls="rounded-circle-pills-icon-profile" aria-selected="false"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/a&gt;
    &lt;/li&gt;
    &lt;li class="nav-item ml-2 mr-2"&gt;
        &lt;a class="nav-link mb-1 rounded-circle" id="rounded-circle-pills-icon-contact-tab" data-toggle="pill" href="#rounded-circle-pills-icon-contact" role="tab" aria-controls="rounded-circle-pills-icon-contact" aria-selected="false"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/a&gt;
    &lt;/li&gt;

    &lt;li class="nav-item ml-2 mr-2"&gt;
        &lt;a class="nav-link mb-1 rounded-circle" id="rounded-circle-pills-icon-settings-tab" data-toggle="pill" href="#rounded-circle-pills-icon-settings" role="tab" aria-controls="rounded-circle-pills-icon-settings" aria-selected="false"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/a&gt;
    &lt;/li&gt;
&lt;/ul&gt;

&lt;div class="tab-content" id="rounded-circle-pills-icon-tabContent"&gt;
    &lt;div class="tab-pane fade show active" id="rounded-circle-pills-icon-home" role="tabpanel" aria-labelledby="rounded-circle-pills-icon-home-tab"&gt;
        &lt;p class="mb-4"&gt;
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.                                                
        &lt;/p&gt;

        &lt;p&gt;
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        &lt;/p&gt;
        &lt;/div&gt;
    &lt;div class="tab-pane fade" id="rounded-circle-pills-icon-profile" role="tabpanel" aria-labelledby="rounded-circle-pills-icon-profile-tab"&gt;
        &lt;div class="media"&gt;
            &lt;img class="mr-3" src="{{asset('storage/img/90x90.jpg')}}" alt="Generic placeholder image"&gt;
            &lt;div class="media-body"&gt;
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
            &lt;/div&gt;
          &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="tab-pane fade" id="rounded-circle-pills-icon-contact" role="tabpanel" aria-labelledby="rounded-circle-pills-icon-contact-tab"&gt;
        &lt;p class="dropcap  dc-outline-primary"&gt;
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        &lt;/p&gt;
    &lt;/div&gt;
    &lt;div class="tab-pane fade" id="rounded-circle-pills-icon-settings" role="tabpanel" aria-labelledby="rounded-pills-icon-settings-tab"&gt;
        &lt;blockquote class="blockquote"&gt;
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        &lt;/blockquote&gt;
    &lt;/div&gt;
&lt;/div&gt;
</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div id="tabsVerticalWithIcon" class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Vertical Rounded With Icon</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area rounded-vertical-pills-icon">
                                    
                                    <div class="row mb-4 mt-3">
                                        <div class="col-sm-4 col-12">
                                            <div class="nav flex-column nav-pills mb-sm-0 mb-3" id="rounded-vertical-pills-tab" role="tablist" aria-orientation="vertical">
                                              <a class="nav-link mb-2 active mx-auto" id="rounded-vertical-pills-home-tab" data-toggle="pill" href="#rounded-vertical-pills-home" role="tab" aria-controls="rounded-vertical-pills-home" aria-selected="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg> Home</a>
                                              <a class="nav-link mb-2 mx-auto" id="rounded-vertical-pills-profile-tab" data-toggle="pill" href="#rounded-vertical-pills-profile" role="tab" aria-controls="rounded-vertical-pills-profile" aria-selected="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> Profile</a>
                                              <a class="nav-link mb-2 mx-auto" id="rounded-vertical-pills-messages-tab" data-toggle="pill" href="#rounded-vertical-pills-messages" role="tab" aria-controls="rounded-vertical-pills-messages" aria-selected="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg> Messages</a>
                                            </div>
                                        </div>

                                        <div class="col-sm-8 col-12">
                                            <div class="tab-content" id="rounded-vertical-pills-tabContent">
                                              <div class="tab-pane fade show active" id="rounded-vertical-pills-home" role="tabpanel" aria-labelledby="rounded-vertical-pills-home-tab">
                                                <h4 class="mb-4">We move your world!</h4>
                                                <p class="mb-4">
                                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.                                                
                                                </p>

                                                <p>
                                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                </p>      
                                              </div>
                                              <div class="tab-pane fade" id="rounded-vertical-pills-profile" role="tabpanel" aria-labelledby="rounded-vertical-pills-profile-tab">
                                                <div class="media mt-4 mb-3 mr-2">
                                                    <img class="mr-3" src="{{asset('storage/img/90x90.jpg')}}" alt="Generic placeholder image">
                                                    <div class="media-body">
                                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                                    </div>
                                                  </div>
                                              </div>
                                              <div class="tab-pane fade" id="rounded-vertical-pills-messages" role="tabpanel" aria-labelledby="rounded-vertical-pills-messages-tab">
                                                <p class="dropcap  dc-outline-primary">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                </p>
                                               </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div class="row mb-4 mt-3"&gt;
    &lt;div class="col-sm-4 col-12"&gt;
        &lt;div class="nav flex-column nav-pills mb-sm-0 mb-3" id="rounded-vertical-pills-tab" role="tablist" aria-orientation="vertical"&gt;
          &lt;a class="nav-link mb-2 active mx-auto" id="rounded-vertical-pills-home-tab" data-toggle="pill" href="#rounded-vertical-pills-home" role="tab" aria-controls="rounded-vertical-pills-home" aria-selected="true"&gt;&lt;svg&gt; ... &lt;/svg&gt; Home&lt;/a&gt;
          &lt;a class="nav-link mb-2 mx-auto" id="rounded-vertical-pills-profile-tab" data-toggle="pill" href="#rounded-vertical-pills-profile" role="tab" aria-controls="rounded-vertical-pills-profile" aria-selected="false"&gt;&lt;svg&gt; ... &lt;/svg&gt; Profile&lt;/a&gt;
          &lt;a class="nav-link mb-2 mx-auto" id="rounded-vertical-pills-messages-tab" data-toggle="pill" href="#rounded-vertical-pills-messages" role="tab" aria-controls="rounded-vertical-pills-messages" aria-selected="false"&gt;&lt;svg&gt; ... &lt;/svg&gt; Messages&lt;/a&gt;
        &lt;/div&gt;
    &lt;/div&gt;

    &lt;div class="col-sm-8 col-12"&gt;
        &lt;div class="tab-content" id="rounded-vertical-pills-tabContent"&gt;
          &lt;div class="tab-pane fade show active" id="rounded-vertical-pills-home" role="tabpanel" aria-labelledby="rounded-vertical-pills-home-tab"&gt;
            &lt;h4 class="mb-4"&gt;We move your world!&lt;/h4&gt;
            &lt;p class="mb-4"&gt;
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.                                                
            &lt;/p&gt;

            &lt;p&gt;
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            &lt;/p&gt;      
          &lt;/div&gt;
          &lt;div class="tab-pane fade" id="rounded-vertical-pills-profile" role="tabpanel" aria-labelledby="rounded-vertical-pills-profile-tab"&gt;
            &lt;div class="media mt-4 mb-3 mr-2"&gt;
                &lt;img class="mr-3" src="{{asset('storage/img/90x90.jpg')}}" alt="Generic placeholder image"&gt;
                &lt;div class="media-body"&gt;
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                &lt;/div&gt;
              &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="tab-pane fade" id="rounded-vertical-pills-messages" role="tabpanel" aria-labelledby="rounded-vertical-pills-messages-tab"&gt;
            &lt;p class="dropcap  dc-outline-primary"&gt;
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            &lt;/p&gt;
           &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Vertical Circle With Icon</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area rounded-circle-vertical-pills-icon">
                                    
                                    <div class="row mb-4 mt-3">
                                        <div class="col-sm-4 col-12">
                                            <div class="nav flex-column nav-pills" id="rounded-circle-vertical-pills-tab" role="tablist" aria-orientation="vertical">
                                              <a class="nav-link  rounded-circle mb-3  mx-auto active" id="rounded-circle-vertical-pills-home-tab" data-toggle="pill" href="#rounded-circle-vertical-pills-home" role="tab" aria-controls="rounded-circle-vertical-pills-home" aria-selected="true">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                              </a>
                                              <a class="nav-link  rounded-circle mb-3  mx-auto" id="rounded-circle-vertical-pills-profile-tab" data-toggle="pill" href="#rounded-circle-vertical-pills-profile" role="tab" aria-controls="rounded-circle-vertical-pills-profile" aria-selected="false">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                            </a>
                                              <a class="nav-link rounded-circle mb-3  mx-auto" id="rounded-circle-vertical-pills-messages-tab" data-toggle="pill" href="#rounded-circle-vertical-pills-messages" role="tab" aria-controls="rounded-circle-vertical-pills-messages" aria-selected="false">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                            </a>
                                            </div>
                                        </div>

                                        <div class="col-sm-8 col-12">
                                            <div class="tab-content" id="rounded-circle-vertical-pills-tabContent">
                                              <div class="tab-pane fade show active" id="rounded-circle-vertical-pills-home" role="tabpanel" aria-labelledby="rounded-circle-vertical-pills-home-tab">
                                              <h4 class="mb-4">We move your world!</h4>
                                                <p class="mb-4">
                                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.                                                
                                                </p>

                                                <p>
                                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                </p>      
                                              </div>
                                              <div class="tab-pane fade" id="rounded-circle-vertical-pills-profile" role="tabpanel" aria-labelledby="rounded-circle-vertical-pills-profile-tab">
                                                <div class="media mt-4 mb-3 mr-2">
                                                    <img class="mr-3" src="{{asset('storage/img/90x90.jpg')}}" alt="Generic placeholder image">
                                                    <div class="media-body">
                                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                                    </div>
                                                  </div>
                                              </div>
                                              <div class="tab-pane fade" id="rounded-circle-vertical-pills-messages" role="tabpanel" aria-labelledby="rounded-circle-vertical-pills-messages-tab">
                                                <p class="dropcap  dc-outline-primary">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                </p>
                                              </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div class="row mb-4 mt-3"&gt;
    &lt;div class="col-sm-4 col-12"&gt;
        &lt;div class="nav flex-column nav-pills" id="rounded-circle-vertical-pills-tab" role="tablist" aria-orientation="vertical"&gt;
          &lt;a class="nav-link  rounded-circle mb-3  mx-auto active" id="rounded-circle-vertical-pills-home-tab" data-toggle="pill" href="#rounded-circle-vertical-pills-home" role="tab" aria-controls="rounded-circle-vertical-pills-home" aria-selected="true"&gt;
            &lt;svg&gt; ... &lt;/svg&gt;
          &lt;/a&gt;
          &lt;a class="nav-link  rounded-circle mb-3  mx-auto" id="rounded-circle-vertical-pills-profile-tab" data-toggle="pill" href="#rounded-circle-vertical-pills-profile" role="tab" aria-controls="rounded-circle-vertical-pills-profile" aria-selected="false"&gt;
            &lt;svg&gt; ... &lt;/svg&gt;
        &lt;/a&gt;
          &lt;a class="nav-link rounded-circle mb-3  mx-auto" id="rounded-circle-vertical-pills-messages-tab" data-toggle="pill" href="#rounded-circle-vertical-pills-messages" role="tab" aria-controls="rounded-circle-vertical-pills-messages" aria-selected="false"&gt;
            &lt;svg&gt; ... &lt;/svg&gt;
        &lt;/a&gt;
        &lt;/div&gt;
    &lt;/div&gt;

    &lt;div class="col-sm-8 col-12"&gt;
        &lt;div class="tab-content" id="rounded-circle-vertical-pills-tabContent"&gt;
          &lt;div class="tab-pane fade show active" id="rounded-circle-vertical-pills-home" role="tabpanel" aria-labelledby="rounded-circle-vertical-pills-home-tab"&gt;
          &lt;h4 class="mb-4"&gt;We move your world!&lt;/h4&gt;
            &lt;p class="mb-4"&gt;
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.                                                
            &lt;/p&gt;

            &lt;p&gt;
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            &lt;/p&gt;      
          &lt;/div&gt;
          &lt;div class="tab-pane fade" id="rounded-circle-vertical-pills-profile" role="tabpanel" aria-labelledby="rounded-circle-vertical-pills-profile-tab"&gt;
            &lt;div class="media mt-4 mb-3 mr-2"&gt;
                &lt;img class="mr-3" src="{{asset('storage/img/90x90.jpg')}}" alt="Generic placeholder image"&gt;
                &lt;div class="media-body"&gt;
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                &lt;/div&gt;
              &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="tab-pane fade" id="rounded-circle-vertical-pills-messages" role="tabpanel" aria-labelledby="rounded-circle-vertical-pills-messages-tab"&gt;
            &lt;p class="dropcap  dc-outline-primary"&gt;
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            &lt;/p&gt;
          &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div id="tabsVertical" class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Vertical Pills</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area vertical-pill">
                                    <div class="row mb-4 mt-3">
                                        <div class="col-sm-3 col-12">
                                            <div class="nav flex-column nav-pills mb-sm-0 mb-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                              <a class="nav-link active mb-2" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
                                              <a class="nav-link mb-2" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
                                              <a class="nav-link mb-2" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Text</a>
                                              <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
                                            </div>
                                        </div>

                                        <div class="col-sm-9 col-12">
                                            <div class="tab-content" id="v-pills-tabContent">
                                              <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                <h4 class="mb-4">We move your world!</h4>
                                                <p class="mb-4">
                                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.                                                
                                                </p>

                                                <p>
                                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                </p>
                                              </div>
                                              <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                                <div class="media">
                                                    <img class="mr-3" src="{{asset('storage/img/90x90.jpg')}}" alt="Generic placeholder image">
                                                    <div class="media-body">
                                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                                    </div>
                                                  </div>
                                              </div>
                                              <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                                <p class="dropcap  dc-outline-primary">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                </p>
                                              </div>
                                              <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                                <blockquote class="blockquote">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                </blockquote>
                                              </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div class="row mb-4 mt-3"&gt;
    &lt;div class="col-sm-3 col-12"&gt;
        &lt;div class="nav flex-column nav-pills mb-sm-0 mb-3" id="v-pills-tab" role="tablist" aria-orientation="vertical"&gt;
          &lt;a class="nav-link active mb-2" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"&gt;Home&lt;/a&gt;
          &lt;a class="nav-link mb-2" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"&gt;Profile&lt;/a&gt;
          &lt;a class="nav-link mb-2" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false"&gt;Text&lt;/a&gt;
          &lt;a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false"&gt;Settings&lt;/a&gt;
        &lt;/div&gt;
    &lt;/div&gt;

    &lt;div class="col-sm-9 col-12"&gt;
        &lt;div class="tab-content" id="v-pills-tabContent"&gt;
          &lt;div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab"&gt;
            &lt;h4 class="mb-4"&gt;We move your world!&lt;/h4&gt;
            &lt;p class="mb-4"&gt;
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.                                                
            &lt;/p&gt;

            &lt;p&gt;
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            &lt;/p&gt;
          &lt;/div&gt;
          &lt;div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab"&gt;
            &lt;div class="media"&gt;
                &lt;img class="mr-3" src="{{asset('storage/img/90x90.jpg')}}" alt="Generic placeholder image"&gt;
                &lt;div class="media-body"&gt;
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                &lt;/div&gt;
              &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab"&gt;
            &lt;p class="dropcap  dc-outline-primary"&gt;
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            &lt;/p&gt;
          &lt;/div&gt;
          &lt;div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab"&gt;
            &lt;blockquote class="blockquote"&gt;
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            &lt;/blockquote&gt;
          &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Justify Vertical Pills Right</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area vertical-pill-right">
                                    <div class="row mb-4 mt-3">
                                        <div class="col-sm-9 col-12 order-sm-0 order-1">
                                            <div class="tab-content" id="v-right-pills-tabContent">
                                              <div class="tab-pane fade show active" id="v-right-pills-home" role="tabpanel" aria-labelledby="v-right-pills-home-tab">
                                                <h4 class="mb-4">We move your world!</h4>
                                                <p class="mb-4">
                                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.                                                
                                                </p>

                                                <p>
                                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                </p>      
                                              </div>
                                              <div class="tab-pane fade" id="v-right-pills-profile" role="tabpanel" aria-labelledby="v-right-pills-profile-tab">
                                                    <div class="media">
                                                        <img class="mr-3" src="{{asset('storage/img/90x90.jpg')}}" alt="Generic placeholder image">
                                                        <div class="media-body">
                                                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                                        </div>
                                                    </div>
                                              </div>
                                              <div class="tab-pane fade" id="v-right-pills-messages" role="tabpanel" aria-labelledby="v-right-pills-messages-tab">
                                                <p class="dropcap  dc-outline-primary">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                </p>
                                              </div>
                                              <div class="tab-pane fade" id="v-right-pills-settings" role="tabpanel" aria-labelledby="v-right-pills-settings-tab">
                                                <blockquote class="blockquote">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                </blockquote>
                                              </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-3 col-12">
                                            <div class="nav flex-column nav-pills mb-sm-0 mb-3" id="v-right-pills-tab" role="tablist" aria-orientation="vertical">
                                              <a class="nav-link active mb-2" id="v-right-pills-home-tab" data-toggle="pill" href="#v-right-pills-home" role="tab" aria-controls="v-right-pills-home" aria-selected="true">Home</a>
                                              <a class="nav-link mb-2" id="v-right-pills-profile-tab" data-toggle="pill" href="#v-right-pills-profile" role="tab" aria-controls="v-right-pills-profile" aria-selected="false">Profile</a>
                                              <a class="nav-link mb-2" id="v-right-pills-messages-tab" data-toggle="pill" href="#v-right-pills-messages" role="tab" aria-controls="v-right-pills-messages" aria-selected="false">Text</a>
                                              <a class="nav-link" id="v-right-pills-settings-tab" data-toggle="pill" href="#v-right-pills-settings" role="tab" aria-controls="v-right-pills-settings" aria-selected="false">Settings</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div class="row mb-4 mt-3"&gt;
    &lt;div class="col-sm-9 col-12 order-sm-0 order-1"&gt;
        &lt;div class="tab-content" id="v-right-pills-tabContent"&gt;
          &lt;div class="tab-pane fade show active" id="v-right-pills-home" role="tabpanel" aria-labelledby="v-right-pills-home-tab"&gt;
            &lt;h4 class="mb-4"&gt;We move your world!&lt;/h4&gt;
            &lt;p class="mb-4"&gt;
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.                                                
            &lt;/p&gt;

            &lt;p&gt;
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            &lt;/p&gt;      
          &lt;/div&gt;
          &lt;div class="tab-pane fade" id="v-right-pills-profile" role="tabpanel" aria-labelledby="v-right-pills-profile-tab"&gt;
                &lt;div class="media"&gt;
                    &lt;img class="mr-3" src="{{asset('storage/img/90x90.jpg')}}" alt="Generic placeholder image"&gt;
                    &lt;div class="media-body"&gt;
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    &lt;/div&gt;
                &lt;/div&gt;
          &lt;/div&gt;
          &lt;div class="tab-pane fade" id="v-right-pills-messages" role="tabpanel" aria-labelledby="v-right-pills-messages-tab"&gt;
            &lt;p class="dropcap  dc-outline-primary"&gt;
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            &lt;/p&gt;
          &lt;/div&gt;
          &lt;div class="tab-pane fade" id="v-right-pills-settings" role="tabpanel" aria-labelledby="v-right-pills-settings-tab"&gt;
            &lt;blockquote class="blockquote"&gt;
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            &lt;/blockquote&gt;
          &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;

    &lt;div class="col-sm-3 col-12"&gt;
        &lt;div class="nav flex-column nav-pills mb-sm-0 mb-3" id="v-right-pills-tab" role="tablist" aria-orientation="vertical"&gt;
          &lt;a class="nav-link active mb-2" id="v-right-pills-home-tab" data-toggle="pill" href="#v-right-pills-home" role="tab" aria-controls="v-right-pills-home" aria-selected="true"&gt;Home&lt;/a&gt;
          &lt;a class="nav-link mb-2" id="v-right-pills-profile-tab" data-toggle="pill" href="#v-right-pills-profile" role="tab" aria-controls="v-right-pills-profile" aria-selected="false"&gt;Profile&lt;/a&gt;
          &lt;a class="nav-link mb-2" id="v-right-pills-messages-tab" data-toggle="pill" href="#v-right-pills-messages" role="tab" aria-controls="v-right-pills-messages" aria-selected="false"&gt;Text&lt;/a&gt;
          &lt;a class="nav-link" id="v-right-pills-settings-tab" data-toggle="pill" href="#v-right-pills-settings" role="tab" aria-controls="v-right-pills-settings" aria-selected="false"&gt;Settings&lt;/a&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                
            </div>
@endsection