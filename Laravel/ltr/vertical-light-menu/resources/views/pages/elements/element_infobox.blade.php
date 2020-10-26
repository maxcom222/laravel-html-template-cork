@extends('layouts.app')

@section('content')
            <div class="container">

                <div class="container">

                    <div id="navSection" data-spy="affix" class="nav sidenav">
                        <div class="sidenav-content">
                            <a href="#infobox1" class="active nav-link">Infobox 1</a>
                            <a href="#infobox2" class="nav-link">Infobox 2</a>
                            <a href="#infobox3" class="nav-link">Infobox 3</a>
                        </div>
                    </div>

                    <div class="row layout-top-spacing">
                        <div id="infobox1" class="col-xl-12 col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4> Infobox 1 </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">

                                    <div class="infobox-1">
                                        <div class="info-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                                        </div>
                                        <h5 class="info-heading">Layout Package</h5>
                                        <p class="info-text">Lorem ipsum dolor sit amet, labore et dolore magna aliqua.</p>
                                        <a class="info-link" href="">Discover <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
                                    </div>

                                    <div class="code-section-container show-code">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div class="infobox-1"&gt;
    &lt;div class="info-icon"&gt;
        &lt;svg&gt; ... &lt;/svg&gt;
    &lt;/div&gt;
    &lt;h5 class="info-heading"&gt;Layout Package&lt;/h5&gt;
    &lt;p class="info-text"&gt;Lorem ipsum dolor sit amet, labore et dolore magna aliqua.&lt;/p&gt;
    &lt;a class="info-link" href=""&gt;Discover &lt;svg&gt; ... &lt;/svg&gt;&lt;/a&gt;
&lt;/div&gt;</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="infobox2" class="col-xl-12 col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4> Infobox 2 </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area text-center">
                                    <div class="infobox-2">
                                        <div class="info-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                                        </div>
                                        <h5 class="info-heading">Layout Package</h5>
                                        <p class="info-text">Lorem ipsum dolor sit amet, labore et dolore magna aliqua.</p>
                                        <a class="info-link" href="">Discover <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div class="infobox-2"&gt;
    &lt;div class="info-icon"&gt;
        &lt;svg&gt; ... &lt;/svg&gt;
    &lt;/div&gt;
    &lt;h5 class="info-heading"&gt;Layout Package&lt;/h5&gt;
    &lt;p class="info-text"&gt;Lorem ipsum dolor sit amet, labore et dolore magna aliqua.&lt;/p&gt;
    &lt;a class="info-link" href=""&gt;Discover &lt;svg&gt; ... &lt;/svg&gt;&lt;/a&gt;
&lt;/div&gt;</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="infobox3" class="col-xl-12 col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4> Infobox 3 </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="infobox-3">
                                        <div class="info-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                                        </div>
                                        <h5 class="info-heading">Layout Package</h5>
                                        <p class="info-text">Lorem ipsum dolor sit amet, labore et dolore magna aliqua.</p>
                                        <a class="info-link" href="">Discover <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div class="infobox-3"&gt;
    &lt;div class="info-icon"&gt;
        &lt;svg&gt; ... &lt;/svg&gt;
    &lt;/div&gt;
    &lt;h5 class="info-heading"&gt;Layout Package&lt;/h5&gt;
    &lt;p class="info-text"&gt;Lorem ipsum dolor sit amet, labore et dolore magna aliqua.&lt;/p&gt;
    &lt;a class="info-link" href=""&gt;Discover &lt;svg&gt; ... &lt;/svg&gt;&lt;/a&gt;
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