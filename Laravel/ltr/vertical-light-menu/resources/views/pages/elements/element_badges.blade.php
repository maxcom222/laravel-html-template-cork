@extends('layouts.app')

@section('content')
            <div class="container">

                <div class="container">
                    
                    <div id="navSection" data-spy="affix" class="nav sidenav">
                        <div class="sidenav-content">
                            <a href="#badgeDefault" class="active nav-link">Default</a>
                            <a href="#badgeOutline" class="nav-link">Outline</a>
                            <a href="#badgePills" class="nav-link">Pills</a>
                            <a href="#badgeClassic" class="nav-link">Classic</a>
                            <a href="#badgeWith-headings" class="active nav-link">With Headings</a>
                            <a href="#badgeTags" class="active nav-link">Tags</a>
                            <a href="#badgeCustom" class="active nav-link">Custom</a>
                        </div>
                    </div>

                    <div class="row layout-top-spacing">
                        <div id="badgeDefault" class="col-lg-12 mx-auto layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4> Badges</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area text-center">
                                    <span class="badge badge-primary">Primary</span>
                                    <span class="badge badge-info">Info</span>
                                    <span class="badge badge-success">Success</span>
                                    <span class="badge badge-secondary">Secondary</span>
                                    <span class="badge badge-warning">Warning</span>
                                    <span class="badge badge-danger">Danger</span>
                                    <span class="badge badge-dark">Dark</span>

                                    <div class="code-section-container show-code">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;span class=&quot;badge badge-primary&quot;&gt; Primary &lt;/span&gt;
&lt;span class=&quot;badge badge-info&quot;&gt; Info &lt;/span&gt;
&lt;span class=&quot;badge badge-success&quot;&gt; Success &lt;/span&gt;
&lt;span class=&quot;badge badge-secondary&quot;&gt; Secondary &lt;/span&gt;
&lt;span class=&quot;badge badge-warning&quot;&gt; Warning &lt;/span&gt;
&lt;span class=&quot;badge badge-danger&quot;&gt; Danger &lt;/span&gt;
&lt;span class=&quot;badge badge-dark&quot;&gt; Dark &lt;/span&gt; </pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="badgeOutline" class="col-lg-12 mx-auto layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4> Outline</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area text-center">
                                    <span class="badge outline-badge-primary">Primary</span>
                                    <span class="badge outline-badge-info">Info</span>
                                    <span class="badge outline-badge-success">Success</span>
                                    <span class="badge outline-badge-secondary">Secondary</span>
                                    <span class="badge outline-badge-warning">Warning</span>
                                    <span class="badge outline-badge-danger">Danger</span>
                                    <span class="badge outline-badge-dark">Dark</span>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>
                                        <div class="code-section text-left">
                                            <pre>
&lt;span class=&quot;badge outline-badge-primary&quot;&gt; Primary &lt;/span&gt;
&lt;span class=&quot;badge outline-badge-info&quot;&gt; Info &lt;/span&gt;
&lt;span class=&quot;badge outline-badge-success&quot;&gt; Success &lt;/span&gt;
&lt;span class=&quot;badge outline-badge-secondary&quot;&gt; Secondary &lt;/span&gt;
&lt;span class=&quot;badge outline-badge-warning&quot;&gt; Warning &lt;/span&gt;
&lt;span class=&quot;badge outline-badge-danger&quot;&gt; Danger &lt;/span&gt;
&lt;span class=&quot;badge outline-badge-dark&quot;&gt; Dark &lt;/span&gt;</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="badgePills" class="col-lg-12 mx-auto layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Pills</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area text-center">
                                    <p class="mb-4">Use <code>.badge-pills</code> class for pills.</p>
                                    <div class="row mb-4">
                                        <div class="col-6">
                                            <span class="badge badge-pills badge-primary">Primary</span>
                                        </div>
                                        <div class="col-6">
                                            <span class="badge badge-pills outline-badge-primary">Primary</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="badgeClassic" class="col-lg-12 mx-auto layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Classic</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area text-center">
                                    <p class="mb-4">Use <code>.badge-classic</code> class for classic.</p>
                                    <div class="row mb-4">
                                        <div class="col-6">
                                            <span class="badge badge-classic badge-primary">Primary</span>
                                        </div>
                                        <div class="col-6">
                                            <span class="badge badge-classic outline-badge-primary">Primary</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="badgeWith-headings" class="col-lg-12 mx-auto layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4> Badges with Heading</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <p class="mb-4">Badges scale to match the size of the immediate parent element by using relative font sizing and em units.</p>
                                        </div>
                                    </div>
                                    <h1>Example heading <span class="badge badge-primary">Primary</span></h1>
                                    <h2>Example heading <span class="badge badge-success">success</span></h2>
                                    <h3>Example heading <span class="badge badge-info">info</span></h3>
                                    <h4>Example heading <span class="badge badge-warning">warning</span></h4>
                                    <h5>Example heading <span class="badge badge-danger">danger</span></h5>
                                    <h6>Example heading <span class="badge badge-dark">dark</span></h6>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>
                                        <div class="code-section text-left">
                                            <pre>
&lt;h1&gt;Example heading &lt;span class="badge badge-primary"&gt;Primary&lt;/span&gt;&lt;/h1&gt;
&lt;h2&gt;Example heading &lt;span class="badge badge-success"&gt;success&lt;/span&gt;&lt;/h2&gt;
&lt;h3&gt;Example heading &lt;span class="badge badge-info"&gt;info&lt;/span&gt;&lt;/h3&gt;
&lt;h4&gt;Example heading &lt;span class="badge badge-warning"&gt;warning&lt;/span&gt;&lt;/h4&gt;
&lt;h5&gt;Example heading &lt;span class="badge badge-danger"&gt;danger&lt;/span&gt;&lt;/h5&gt;
&lt;h6&gt;Example heading &lt;span class="badge badge-dark"&gt;dark&lt;/span&gt;&lt;/h6&gt; </pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="badgeTags" class="col-lg-12 mx-auto layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Tags</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area text-center tags-content">
                                    <div>
                                        <input type="text" id="skill-input">
                                    </div>

                                    <div class="code-section-container">
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>
                                        <div class="code-section text-left">
                                            <pre>
&lt;input type="text" id="skill-input"&gt; </pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        
                        <div id="badgeCustom" class="col-lg-12 mx-auto layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4> Custom Badges</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area text-center">

                                    <button type="button" class="btn btn-primary position-relative mt-3 mb-3 ml-2">
                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg> Facebook</span>
                                        <span class="badge badge-danger counter">9</span>
                                    </button>

                                    <button type="button" class="btn btn-info position-relative mt-3 mb-3 ml-2">
                                        <span>Twitter</span>
                                        <span class="badge badge-danger counter">4</span>
                                    </button>

                                    <button type="button" class="btn btn-secondary position-relative mt-3 mb-3 ml-2">
                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg> </span>
                                        <span class="badge badge-danger counter">8</span>
                                    </button>

                                   <button type="button" class="btn btn-dark mt-3 mb-3 ml-2">
                                      Notifications <span class="badge badge-light ml-2">4</span>
                                    </button>

                                    <span class="badge-chip badge-warning mt-3 mb-3 ml-2 position-relative">
                                        <img src="{{asset('storage/img/90x90.jpg')}}" alt="Person" width="96" height="96">
                                        <span class="text">John Doe</span>
                                    </span>

                                    <span class="badge-chip badge-danger mt-3 mb-3 ml-2">
                                        <img src="{{asset('storage/img/90x90.jpg')}}" alt="Person" width="96" height="96">
                                        <span class="text">John Doe</span>
                                        <span class="closebtn pl-2" onclick="this.parentElement.style.display='none'">&times;</span>
                                    </span>

                                    <div class="code-section-container">

                                        <button class="btn toggle-code-snippet"><span>Code</span></button>
                                        <div class="code-section text-left">
                                            <pre>
&lt;button type="button" class="btn btn-primary position-relative mt-3 mb-3 ml-2"&gt;
    &lt;span&gt;&lt;svg&gt; ... &lt;/svg&gt; Facebook&lt;/span&gt;
    &lt;span class="badge badge-danger counter"&gt;22&lt;/span&gt;
&lt;/button&gt;

&lt;button type="button" class="btn btn-info position-relative mt-3 mb-3 ml-2"&gt;
    &lt;span&gt;Twitter&lt;/span&gt;
    &lt;span class="badge badge-danger counter"&gt;22&lt;/span&gt;
&lt;/button&gt;

&lt;button type="button" class="btn btn-secondary position-relative mt-3 mb-3 ml-2"&gt;
    &lt;span&gt;&lt;svg&gt; ... &lt;/svg&gt; &lt;/span&gt;
    &lt;span class="badge badge-danger counter"&gt;22&lt;/span&gt;
&lt;/button&gt;

&lt;button type="button" class="btn btn-dark mt-3 mb-3 ml-2"&gt;
    Notifications &lt;span class="badge badge-light"&gt;4&lt;/span&gt;
&lt;/button&gt;

&lt;span class="badge-chip badge-warning mt-3 mb-3 ml-2 position-relative"&gt;
    &lt;img src="{{asset('storage/img/90x90.jpg')}}" alt="Person" width="96" height="96"&gt;
    &lt;span class="text"&gt;John Doe&lt;/span&gt;
&lt;/span&gt;

&lt;span class="badge-chip badge-danger mt-3 mb-3 ml-2"&gt;
    &lt;img src="{{asset('storage/img/90x90.jpg')}}" alt="Person" width="96" height="96"&gt;
    &lt;span class="text"&gt;John Doe&lt;/span&gt;
    &lt;span class="closebtn pl-2" onclick="this.parentElement.style.display='none'"&gt;&times;
    &lt;/span&gt;
&lt;/span&gt; </pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>

            </div>

@endsection