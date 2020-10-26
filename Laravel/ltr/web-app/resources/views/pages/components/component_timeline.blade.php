@extends('layouts.app')

@section('content')
            <div class="container">

                <div class="container">

                    <div id="navSection" data-spy="affix" class="nav  sidenav">
                        <div class="sidenav-content">
                            <a href="#timelineProfile" class="active nav-link">Profile</a>
                            <a href="#timelineModern" class="nav-link">Modern</a>
                            <a href="#timelineBasic" class="nav-link">Basic</a>
                            <a href="#timelineImages" class="nav-link">Images</a>
                        </div>
                    </div>

                    <div class="row layout-top-spacing">
                        <div id="timelineProfile" class="col-lg-12 layout-spacing">
                             <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4> Profile</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="timeline-simple">
                                        <p class="timeline-title">History</p>

                                        <div class="timeline-list">
                                            <p class="meta-update-day">Today</p>
                                            
                                            <div class="timeline-post-content">
                                                <div class="user-profile">
                                                    <img src="{{asset('storage/img/90x90.jpg')}}" alt="">
                                                </div>
                                                <div class="">
                                                    <h4>Laurie Fox</h4>
                                                    <p class="meta-time-date">5 sec</p>
                                                    <div class="">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                                                        <h6 class="">Trending Style</h6>
                                                        <p class="post-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                        consequat.</p>
                                                        <div class="post-contributers">
                                                            <img src="{{asset('storage/img/90x90.jpg')}}" alt="">
                                                            <img src="{{asset('storage/img/90x90.jpg')}}" alt="">
                                                            <img src="{{asset('storage/img/90x90.jpg')}}" alt="">
                                                            <img src="{{asset('storage/img/90x90.jpg')}}" alt="">
                                                            <img src="{{asset('storage/img/90x90.jpg')}}" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="timeline-post-content post-gallery">
                                                <div class="user-profile">
                                                    <img src="{{asset('storage/img/90x90.jpg')}}" alt="avatar">
                                                </div>
                                                <div class="">
                                                    <h4>Justin Cross</h4>
                                                    <p class="meta-time-date">45 min</p>
                                                    <div class="">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-image"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><polyline points="21 15 16 10 5 21"></polyline></svg>
                                                        <h6 class="">Nature Photography</h6>
                                                        <p class="post-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                        consequat.</p>
                                                        <div class="post-gallery-img">
                                                            <img src="{{asset('storage/img/400x300.jpg')}}" alt="timeline">
                                                            <img src="{{asset('storage/img/400x300.jpg')}}" alt="timeline">
                                                            <img src="{{asset('storage/img/400x300.jpg')}}" alt="timeline">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="timeline-post-content">
                                                <div class="user-profile">
                                                    <img src="{{asset('storage/img/90x90.jpg')}}" alt="avatar">
                                                </div>
                                                <div class="">
                                                    <h4>Sonia Shaw</h4>
                                                    <p class="meta-time-date">2 hr</p>
                                                    <div class="">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                                        <h6 class="">Create new Project</h6>
                                                        <p class="post-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                        consequat.</p>
                                                        <div class="post-contributers">
                                                            <img src="{{asset('storage/img/90x90.jpg')}}" alt="timeline">
                                                            <img src="{{asset('storage/img/90x90.jpg')}}" alt="timeline">
                                                            <img src="{{asset('storage/img/90x90.jpg')}}" alt="timeline">
                                                            <img src="{{asset('storage/img/90x90.jpg')}}" alt="timeline">
                                                            <img src="{{asset('storage/img/90x90.jpg')}}" alt="timeline">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="code-section-container show-code">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div class="timeline-simple"&gt;
    &lt;p class="timeline-title"&gt;History&lt;/p&gt;

    &lt;div class="timeline-list"&gt;
        &lt;p class="meta-update-day"&gt;Today&lt;/p&gt;
        
        &lt;div class="timeline-post-content"&gt;
            &lt;div class="user-profile"&gt;
                &lt;img src="{{asset('storage/img/90x90.jpg')}}" class=""&gt;
            &lt;/div&gt;
            &lt;div class=""&gt;
                &lt;h4&gt;Laurie Fox&lt;/h4&gt;
                &lt;p class="meta-time-date"&gt;5 sec&lt;/p&gt;
                &lt;div class=""&gt;
                    &lt;svg&gt; ... &lt;/svg&gt;
                    &lt;h6 class=""&gt;Trending Style&lt;/h6&gt;
                    &lt;p class="post-text"&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.&lt;/p&gt;
                    &lt;div class="post-contributers"&gt;
                        &lt;img src="{{asset('storage/img/90x90.jpg')}}" class=""&gt;
                        &lt;img src="{{asset('storage/img/90x90.jpg')}}" class=""&gt;
                        &lt;img src="{{asset('storage/img/90x90.jpg')}}" class=""&gt;
                        &lt;img src="{{asset('storage/img/90x90.jpg')}}" class=""&gt;
                        &lt;img src="{{asset('storage/img/90x90.jpg')}}" class=""&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;

        &lt;div class="timeline-post-content post-gallery"&gt;
            &lt;div class="user-profile"&gt;
                &lt;img src="{{asset('storage/img/90x90.jpg')}}" class=""&gt;
            &lt;/div&gt;
            &lt;div class=""&gt;
                &lt;h4&gt;Justin Cross&lt;/h4&gt;
                &lt;p class="meta-time-date"&gt;45 min&lt;/p&gt;
                &lt;div class=""&gt;
                    &lt;svg&gt; ... &lt;/svg&gt;
                    &lt;h6 class=""&gt;Nature Photography&lt;/h6&gt;
                    &lt;p class="post-text"&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.&lt;/p&gt;
                    &lt;div class="post-gallery-img"&gt;
                        &lt;img src="{{asset('storage/img/400x300.jpg')}}" class=""&gt;
                        &lt;img src="{{asset('storage/img/400x300.jpg')}}" class=""&gt;
                        &lt;img src="{{asset('storage/img/400x300.jpg')}}" class=""&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;

        &lt;div class="timeline-post-content"&gt;
            &lt;div class="user-profile"&gt;
                &lt;img src="{{asset('storage/img/90x90.jpg')}}" class=""&gt;
            &lt;/div&gt;
            &lt;div class=""&gt;
                &lt;h4&gt;Sonia Shaw&lt;/h4&gt;
                &lt;p class="meta-time-date"&gt;2 hr&lt;/p&gt;
                &lt;div class=""&gt;
                    &lt;svg&gt; ... &lt;/svg&gt;
                    &lt;h6 class=""&gt;Create new Project&lt;/h6&gt;
                    &lt;p class="post-text"&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.&lt;/p&gt;
                    &lt;div class="post-contributers"&gt;
                        &lt;img src="{{asset('storage/img/90x90.jpg')}}" class=""&gt;
                        &lt;img src="{{asset('storage/img/90x90.jpg')}}" class=""&gt;
                        &lt;img src="{{asset('storage/img/90x90.jpg')}}" class=""&gt;
                        &lt;img src="{{asset('storage/img/90x90.jpg')}}" class=""&gt;
                        &lt;img src="{{asset('storage/img/90x90.jpg')}}" class=""&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div id="timelineModern" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4> Modern </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="container mt-container">
                                                <ul class="modern-timeline pl-0">
                                                    <li>
                                                        <div class="modern-timeline-badge"></div>
                                                        <div class="modern-timeline-panel">
                                                            <div class="modern-timeline-preview"><img src="{{asset('storage/img/509x343.jpg')}}" alt="timeline"></div>
                                                            <div class="modern-timeline-body">
                                                                <h4 class="mb-4">Front-End Framework</h4>
                                                                <p class="mb-4">Map where your photos were taken and discover local points of interest. Map where your photos. Map where your photos were taken and discover.</p>
                                                                <p><a href="javascript:void(0);" class="btn btn-dark mt-2">Read more</a></p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="modern-timeline-badge"></div>
                                                        <div class="modern-timeline-panel">
                                                            <div class="modern-timeline-preview"><img src="{{asset('storage/img/509x343.jpg')}}" alt="timeline"></div>
                                                            <div class="modern-timeline-body">
                                                                <h4 class="mb-4">Web Development</h4>
                                                                <p class="mb-4">Map where your photos were taken and discover local points of interest. Map where your photos. Map where your photos were taken and discover.</p>
                                                                <p><a href="javascript:void(0);" class="btn btn-dark mt-2">Read more</a></p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="modern-timeline-badge"></div>
                                                        <div class="modern-timeline-panel">
                                                            <div class="modern-timeline-preview"><img src="{{asset('storage/img/509x343.jpg')}}" alt="timeline"></div>
                                                            <div class="modern-timeline-body">
                                                                <h4 class="mb-4">Theme Development</h4>
                                                                <p class="mb-4">Map where your photos were taken and discover local points of interest. Map where your photos. Map where your photos were taken and discover.</p>
                                                                <p><a href="javascript:void(0);" class="btn btn-dark mt-2">Read more</a></p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="modern-timeline-badge"></div>
                                                        <div class="modern-timeline-panel">
                                                            <div class="modern-timeline-preview"><img src="{{asset('storage/img/509x343.jpg')}}" alt="timeline"></div>
                                                            <div class="modern-timeline-body">
                                                                <h4 class="mb-4">Plugin Development</h4>
                                                                <p class="mb-4">Map where your photos were taken and discover local points of interest. Map where your photos. Map where your photos were taken and discover.</p>
                                                                <p><a href="javascript:void(0);" class="btn btn-dark mt-2">Read more</a></p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="position-static">
                                                        <div class="modern-timeline-top"></div>
                                                    </li>
                                                    <li class="position-static">
                                                        <div class="modern-timeline-bottom"></div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div class="container mt-container"&gt;
    &lt;ul class="modern-timeline pl-0"&gt;
        &lt;li&gt;
            &lt;div class="modern-timeline-badge"&gt;&lt;/div&gt;
            &lt;div class="modern-timeline-panel"&gt;
                &lt;div class="modern-timeline-preview"&gt;&lt;img src="{{asset('storage/img/509x343.jpg')}}" alt="timeline"&gt;&lt;/div&gt;
                &lt;div class="modern-timeline-body"&gt;
                    &lt;h4 class="mb-4"&gt;Front-End Framework&lt;/h4&gt;
                    &lt;p class="mb-4"&gt;Map where your photos were taken and discover local points of interest. Map where your photos. Map where your photos were taken and discover.&lt;/p&gt;
                    &lt;p&gt;&lt;a href="javascript:void(0);" class="btn btn-outline-primary mt-2"&gt;Read more&lt;/a&gt;&lt;/p&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div class="modern-timeline-badge"&gt;&lt;/div&gt;
            &lt;div class="modern-timeline-panel"&gt;
                &lt;div class="modern-timeline-preview"&gt;&lt;img src="{{asset('storage/img/509x343.jpg')}}" alt="timeline"&gt;&lt;/div&gt;
                &lt;div class="modern-timeline-body"&gt;
                    &lt;h4 class="mb-4"&gt;Web Development&lt;/h4&gt;
                    &lt;p class="mb-4"&gt;Map where your photos were taken and discover local points of interest. Map where your photos. Map where your photos were taken and discover.&lt;/p&gt;
                    &lt;p&gt;&lt;a href="javascript:void(0);" class="btn btn-outline-primary mt-2"&gt;Read more&lt;/a&gt;&lt;/p&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div class="modern-timeline-badge"&gt;&lt;/div&gt;
            &lt;div class="modern-timeline-panel"&gt;
                &lt;div class="modern-timeline-preview"&gt;&lt;img src="{{asset('storage/img/509x343.jpg')}}" alt="timeline"&gt;&lt;/div&gt;
                &lt;div class="modern-timeline-body"&gt;
                    &lt;h4 class="mb-4"&gt;Theme Development&lt;/h4&gt;
                    &lt;p class="mb-4"&gt;Map where your photos were taken and discover local points of interest. Map where your photos. Map where your photos were taken and discover.&lt;/p&gt;
                    &lt;p&gt;&lt;a href="javascript:void(0);" class="btn btn-outline-primary mt-2"&gt;Read more&lt;/a&gt;&lt;/p&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li&gt;
            &lt;div class="modern-timeline-badge"&gt;&lt;/div&gt;
            &lt;div class="modern-timeline-panel"&gt;
                &lt;div class="modern-timeline-preview"&gt;&lt;img src="{{asset('storage/img/509x343.jpg')}}" alt="timeline"&gt;&lt;/div&gt;
                &lt;div class="modern-timeline-body"&gt;
                    &lt;h4 class="mb-4"&gt;Plugin Development&lt;/h4&gt;
                    &lt;p class="mb-4"&gt;Map where your photos were taken and discover local points of interest. Map where your photos. Map where your photos were taken and discover.&lt;/p&gt;
                    &lt;p&gt;&lt;a href="javascript:void(0);" class="btn btn-outline-primary mt-2"&gt;Read more&lt;/a&gt;&lt;/p&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/li&gt;
        &lt;li class="position-static"&gt;
            &lt;div class="modern-timeline-top"&gt;&lt;/div&gt;
        &lt;/li&gt;
        &lt;li class="position-static"&gt;
            &lt;div class="modern-timeline-bottom"&gt;&lt;/div&gt;
        &lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div id="timelineBasic" class="col-lg-12 layout-spacing">
                             <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4> Basic</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area pb-1">
                                    <div class="mt-container mx-auto">
                                        <div class="timeline-line">
                                            
                                            <div class="item-timeline">
                                                <p class="t-time">10:00</p>
                                                <div class="t-dot t-dot-primary">
                                                </div>
                                                <div class="t-text">
                                                    <p>Updated Server Logs</p>
                                                    <p class="t-meta-time">25 mins ago</p>
                                                </div>
                                            </div>

                                            <div class="item-timeline">
                                                <p class="t-time">12:45</p>
                                                <div class="t-dot t-dot-success">
                                                </div>
                                                <div class="t-text">
                                                    <p>Backup Files EOD</p>
                                                    <p class="t-meta-time">2 hrs ago</p>
                                                </div>
                                            </div>

                                            <div class="item-timeline">
                                                <p class="t-time">14:00</p>
                                                <div class="t-dot t-dot-warning">
                                                </div>
                                                <div class="t-text">
                                                    <p>Send Mail to HR and Admin</p>
                                                    <p class="t-meta-time">4 hrs ago</p>
                                                </div>
                                            </div>

                                            <div class="item-timeline">
                                                <p class="t-time">16:00</p>
                                                <div class="t-dot t-dot-info">
                                                </div>
                                                <div class="t-text">
                                                    <p>Conference call with Marketing Manager.</p>
                                                    <p class="t-meta-time">6 hrs ago</p>
                                                </div>
                                            </div>

                                            <div class="item-timeline">
                                                <p class="t-time">17:00</p>
                                                <div class="t-dot t-dot-danger">
                                                </div>
                                                <div class="t-text">
                                                    <p>Collected documents from <a href="javascript:void(0);">Sara</a></p>
                                                    <p class="t-meta-time">9 hrs ago</p>
                                                </div>
                                            </div>

                                            <div class="item-timeline">
                                                <p class="t-time">16:00</p>
                                                <div class="t-dot t-dot-dark">
                                                </div>
                                                <div class="t-text">
                                                    <p>Server rebooted successfully</p>
                                                    <p class="t-meta-time">8 hrs ago</p>
                                                </div>
                                            </div>

                                        </div>                                    
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div class="mt-container mx-auto"&gt;
    &lt;div class="timeline-line"&gt;
        
        &lt;div class="item-timeline"&gt;
            &lt;p class="t-time"&gt;10:00&lt;/p&gt;
            &lt;div class="t-dot t-dot-primary"&gt;
            &lt;/div&gt;
            &lt;div class="t-text"&gt;
                &lt;p&gt;Updated Server Logs&lt;/p&gt;
                &lt;p class="t-meta-time"&gt;25 mins ago&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;

        &lt;div class="item-timeline"&gt;
            &lt;p class="t-time"&gt;12:45&lt;/p&gt;
            &lt;div class="t-dot t-dot-success"&gt;
            &lt;/div&gt;
            &lt;div class="t-text"&gt;
                &lt;p&gt;Backup Files EOD&lt;/p&gt;
                &lt;p class="t-meta-time"&gt;2 hrs ago&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;

        &lt;div class="item-timeline"&gt;
            &lt;p class="t-time"&gt;14:00&lt;/p&gt;
            &lt;div class="t-dot t-dot-warning"&gt;
            &lt;/div&gt;
            &lt;div class="t-text"&gt;
                &lt;p&gt;Send Mail to HR and Admin&lt;/p&gt;
                &lt;p class="t-meta-time"&gt;4 hrs ago&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;

        &lt;div class="item-timeline"&gt;
            &lt;p class="t-time"&gt;16:00&lt;/p&gt;
            &lt;div class="t-dot t-dot-info"&gt;
            &lt;/div&gt;
            &lt;div class="t-text"&gt;
                &lt;p&gt;Conference call with Marketing Manager.&lt;/p&gt;
                &lt;p class="t-meta-time"&gt;6 hrs ago&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;

        &lt;div class="item-timeline"&gt;
            &lt;p class="t-time"&gt;17:00&lt;/p&gt;
            &lt;div class="t-dot t-dot-danger"&gt;
            &lt;/div&gt;
            &lt;div class="t-text"&gt;
                &lt;p&gt;Collected documents from &lt;a href="javascript:void(0);"&gt;Sara&lt;/a&gt;&lt;/p&gt;
                &lt;p class="t-meta-time"&gt;9 hrs ago&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;

        &lt;div class="item-timeline"&gt;
            &lt;p class="t-time"&gt;16:00&lt;/p&gt;
            &lt;div class="t-dot t-dot-dark"&gt;
            &lt;/div&gt;
            &lt;div class="t-text"&gt;
                &lt;p&gt;Server rebooted successfully&lt;/p&gt;
                &lt;p class="t-meta-time"&gt;8 hrs ago&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;

    &lt;/div&gt;                                    
&lt;/div&gt;</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div id="timelineImages" class="col-lg-12 layout-spacing">
                             <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4> With Images </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="mt-container mx-auto">
                                        <div class="timeline-alter">
                                            
                                            <div class="item-timeline">
                                                <div class="t-time">
                                                    <p class="">09:00</p>
                                                </div>
                                                <div class="t-img">
                                                    <img src="{{asset('storage/img/90x90.jpg')}}" alt="avatar">
                                                </div>
                                                <div class="t-meta-time">
                                                    <p class="">25 mins ago</p>
                                                </div>
                                                
                                                <div class="t-text">
                                                    <p>Conference call with Marketing Manager.</p>
                                                </div>
                                            </div>

                                            <div class="item-timeline">
                                                <div class="t-time">
                                                    <p class="">10:00</p>
                                                </div>
                                                <div class="t-usr-txt">
                                                    <p><span>L</span></p>
                                                </div>
                                                <div class="t-meta-time">
                                                    <p class="">2 hrs ago</p>
                                                </div>
                                                
                                                <div class="t-text">
                                                    <p>Server rebooted successfully</p>
                                                </div>
                                            </div>

                                            <div class="item-timeline">
                                                <div class="t-time">
                                                    <p class="">11:00</p>
                                                </div>
                                                <div class="t-img">
                                                    <img src="{{asset('storage/img/90x90.jpg')}}" alt="avatar">
                                                </div>
                                                <div class="t-meta-time">
                                                    <p class="">4 hrs ago</p>
                                                </div>
                                                
                                                <div class="t-text">
                                                    <p>Backup Files EOD</p>
                                                </div>
                                            </div>

                                            <div class="item-timeline">
                                                <div class="t-time">
                                                    <p class="">12:00</p>
                                                </div>
                                                <div class="t-img">
                                                    <img src="{{asset('storage/img/90x90.jpg')}}" alt="avatar">
                                                </div>
                                                <div class="t-meta-time">
                                                    <p class="">6 hrs ago</p>
                                                </div>
                                                
                                                <div class="t-text">
                                                    <p>Collected documents from <a href="javascript:void(0);">Sara</a></p>
                                                </div>
                                            </div>

                                            <div class="item-timeline">
                                                <div class="t-time">
                                                    <p class="">14:00</p>
                                                </div>
                                                <div class="t-usr-txt">
                                                    <p><span>G</span></p>
                                                </div>
                                                <div class="t-meta-time">
                                                    <p class="">9 hrs ago</p>
                                                </div>
                                                
                                                <div class="t-text">
                                                    <p>PDF file Download</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div class="mt-container mx-auto"&gt;
    &lt;div class="timeline-alter"&gt;
        
        &lt;div class="item-timeline"&gt;
            &lt;div class="t-time"&gt;
                &lt;p class=""&gt;09:00&lt;/p&gt;
            &lt;/div&gt;
            &lt;div class="t-img"&gt;
                &lt;img src="{{asset('storage/img/90x90.jpg')}}"&gt;
            &lt;/div&gt;
            &lt;div class="t-meta-time"&gt;
                &lt;p class=""&gt;25 mins ago&lt;/p&gt;
            &lt;/div&gt;
            
            &lt;div class="t-text"&gt;
                &lt;p&gt;Conference call with Marketing Manager.&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;

        &lt;div class="item-timeline"&gt;
            &lt;div class="t-time"&gt;
                &lt;p class=""&gt;10:00&lt;/p&gt;
            &lt;/div&gt;
            &lt;div class="t-usr-txt"&gt;
                &lt;p&gt;&lt;span&gt;L&lt;/span&gt;&lt;/p&gt;
            &lt;/div&gt;
            &lt;div class="t-meta-time"&gt;
                &lt;p class=""&gt;2 hrs ago&lt;/p&gt;
            &lt;/div&gt;
            
            &lt;div class="t-text"&gt;
                &lt;p&gt;Server rebooted successfully&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;

        &lt;div class="item-timeline"&gt;
            &lt;div class="t-time"&gt;
                &lt;p class=""&gt;11:00&lt;/p&gt;
            &lt;/div&gt;
            &lt;div class="t-img"&gt;
                &lt;img src="{{asset('storage/img/90x90.jpg')}}"&gt;
            &lt;/div&gt;
            &lt;div class="t-meta-time"&gt;
                &lt;p class=""&gt;4 hrs ago&lt;/p&gt;
            &lt;/div&gt;
            
            &lt;div class="t-text"&gt;
                &lt;p&gt;Backup Files EOD&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;

        &lt;div class="item-timeline"&gt;
            &lt;div class="t-time"&gt;
                &lt;p class=""&gt;12:00&lt;/p&gt;
            &lt;/div&gt;
            &lt;div class="t-img"&gt;
                &lt;img src="{{asset('storage/img/90x90.jpg')}}"&gt;
            &lt;/div&gt;
            &lt;div class="t-meta-time"&gt;
                &lt;p class=""&gt;6 hrs ago&lt;/p&gt;
            &lt;/div&gt;
            
            &lt;div class="t-text"&gt;
                &lt;p&gt;Collected documents from &lt;a href="javascript:void(0);"&gt;Sara&lt;/a&gt;&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;

        &lt;div class="item-timeline"&gt;
            &lt;div class="t-time"&gt;
                &lt;p class=""&gt;14:00&lt;/p&gt;
            &lt;/div&gt;
            &lt;div class="t-usr-txt"&gt;
                &lt;p&gt;&lt;span&gt;G&lt;/span&gt;&lt;/p&gt;
            &lt;/div&gt;
            &lt;div class="t-meta-time"&gt;
                &lt;p class=""&gt;9 hrs ago&lt;/p&gt;
            &lt;/div&gt;
            
            &lt;div class="t-text"&gt;
                &lt;p&gt;PDF file Download&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;

    &lt;/div&gt;
&lt;/div&gt;</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div> 

                </div>

            </div>
@endsection