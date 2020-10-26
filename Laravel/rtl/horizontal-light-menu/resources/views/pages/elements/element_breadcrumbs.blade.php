@extends('layouts.app')

@section('content')

            <div class="container">

                <div class="container">

                    <div id="navSection" data-spy="affix" class="nav sidenav">
                        <div class="sidenav-content">
                            <a href="#breadcrumbDefault" class="active nav-link">Default</a>
                            <a href="#breadcrumbBasic" class="active nav-link">Basic</a>
                            <a href="#breadcrumbArrowed" class="nav-link">Arrowed</a>
                            <a href="#breadcrumbDotted" class="nav-link">Dotted</a>
                            <a href="#breadcrumbWith-icon" class="nav-link">With Icon</a>
                        </div>
                    </div>

                    <div class="row layout-top-spacing">
                        <div id="breadcrumbDefault" class="col-xl-12 col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Default</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">

                                    <nav class="breadcrumb-one" aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg></a></li>
                                            <li class="breadcrumb-item"><a href="javascript:void(0);">Components</a></li>
                                            <li class="breadcrumb-item active" aria-current="page"><span>UI Kit</span></li>
                                        </ol>
                                    </nav>

                                    <div class="code-section-container show-code">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;nav class="breadcrumb-one" aria-label="breadcrumb"&gt;
    &lt;ol class="breadcrumb"&gt;
        &lt;li class="breadcrumb-item"&gt;&lt;a href="javascript:void(0);"&gt;&lt;svg&gt;...&lt;/svg&gt;&lt;/a&gt;&lt;/li&gt;
        &lt;li class="breadcrumb-item"&gt;&lt;a href="javascript:void(0);"&gt;Components&lt;/a&gt;&lt;/li&gt;
        &lt;li class="breadcrumb-item active" aria-current="page"&gt;UI Kit&lt;/li&gt;
    &lt;/ol&gt;
&lt;/nav&gt;
</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="breadcrumbBasic" class="col-xl-12 col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Basic</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">

                                    <nav class="breadcrumb-one" aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="javascript:void(0);">Components</a></li>
                                            <li class="breadcrumb-item active" aria-current="page"><span>UI Kit</span></li>
                                        </ol>
                                    </nav>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;nav class="breadcrumb-one" aria-label="breadcrumb"&gt;
    &lt;ol class="breadcrumb"&gt;
        &lt;li class="breadcrumb-item"&gt;&lt;a href="javascript:void(0);"&gt;Components&lt;/a&gt;&lt;/li&gt;
        &lt;li class="breadcrumb-item active" aria-current="page"&gt;UI Kit&lt;/li&gt;
    &lt;/ol&gt;
&lt;/nav&gt;
</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>


                        <div id="breadcrumbArrowed" class="col-xl-12 col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Arrowed</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area text-center">

                                    <nav class="breadcrumb-two" aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Components</a></li>
                                            <li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">UI Kit</a></li>
                                        </ol>
                                    </nav>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;nav class="breadcrumb-two" aria-label="breadcrumb"&gt;
    &lt;ol class="breadcrumb"&gt;
        &lt;li class="breadcrumb-item"&gt;&lt;a href="javascript:void(0);"&gt;Home&lt;/a&gt;&lt;/li&gt;
        &lt;li class="breadcrumb-item active"&gt;&lt;a href="javascript:void(0);"&gt;Components&lt;/a&gt;&lt;/li&gt;
        &lt;li class="breadcrumb-item" aria-current="page"&gt;&lt;a href="javascript:void(0);"&gt;UI Kit&lt;/a&gt;&lt;/li&gt;
    &lt;/ol&gt;
&lt;/nav&gt;
</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div id="breadcrumbDotted" class="col-xl-12 col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Dotted Seperators</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">

                                    <div class="breadcrumb-five">
                                        <ul class="breadcrumb">
                                            <li class="mb-2"><a href="javscript:void(0);">Home</a>
                                            </li>
                                            <li class="active mb-2"><a href="javscript:void(0);">Components</a></li>
                                            <li class="mb-2"><a href="javscript:void(0);">UI Kit</a></li>
                                        </ul>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div class="breadcrumb-five"&gt;
    &lt;ul class="breadcrumb"&gt;
        &lt;li class="mb-2"&gt;&lt;a href="javscript:void(0);"&gt;Home&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class="active mb-2"&gt;&lt;a href="javscript:void(0);"&gt;Components&lt;/a&gt;&lt;/li&gt;
        &lt;li class="mb-2"&gt;&lt;a href="javscript:void(0);"&gt;UI Kit&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;
</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="breadcrumbWith-icon" class="col-xl-12 col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>With Icons</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">

                                    <div class="breadcrumb-four">
                                        <ul class="breadcrumb">
                                            <li><a href="javscript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg></a>
                                            </li>
                                            <li class="active"><a href="javscript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg> <span>Components</span></a></li>
                                            <li><a href="javscript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cpu"><rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect><rect x="9" y="9" width="6" height="6"></rect><line x1="9" y1="1" x2="9" y2="4"></line><line x1="15" y1="1" x2="15" y2="4"></line><line x1="9" y1="20" x2="9" y2="23"></line><line x1="15" y1="20" x2="15" y2="23"></line><line x1="20" y1="9" x2="23" y2="9"></line><line x1="20" y1="14" x2="23" y2="14"></line><line x1="1" y1="9" x2="4" y2="9"></line><line x1="1" y1="14" x2="4" y2="14"></line></svg> <span>UI Kit</span></a></li>
                                        </ul>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div class="breadcrumb-four"&gt;
    &lt;ul class="breadcrumb"&gt;
        &lt;li&gt;&lt;a href="javscript:void(0);"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/a&gt;
        &lt;/li&gt;
        &lt;li class="active"&gt;&lt;a href="javscript:void(0);"&gt;&lt;svg&gt; ... &lt;/svg&gt; Components&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="javscript:void(0);"&gt;&lt;svg&gt; ... &lt;/svg&gt; UI Kit&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
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