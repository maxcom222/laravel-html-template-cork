@extends('layouts.app')

@section('content')
            <div class="container">

                <div class="container">

                    <div id="navSection" data-spy="affix" class="nav  sidenav">
                        <div class="sidenav-content">
                            <a href="#counterBasic" class="active nav-link">Basic</a>
                            <a href="#counterIcon" class="nav-link">Icon</a>
                        </div>
                    </div>
                
                    <div class="row layout-top-spacing">
                        
                        <div id="counterBasic" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Simple Counter</h4>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area text-center">

                                    <div class="simple--counter-container">
                                        
                                        <div class="counter-container">
                                            <div class="counter-content">
                                                <h1 class="s-counter2 s-counter">710</h1>
                                            </div>
                                            <p class="s-counter-text">HOURS</p>
                                        </div>

                                        <div class="counter-container">
                                            <div class="counter-content">
                                                <h1 class="s-counter3 s-counter">915</h1>
                                            </div>
                                            <p class="s-counter-text">TICKETS</p>
                                        </div>

                                        <div class="counter-container">
                                            <div class="counter-content">
                                                <h1 class="s-counter4 s-counter">580</h1>
                                            </div>
                                            <p class="s-counter-text">CUSTOMERS</p>
                                        </div>

                                    </div>

                                    <div class="code-section-container show-code">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div class="simple--counter-container"&gt;
                                        
    &lt;div class="counter-container"&gt;
        &lt;div class="counter-content"&gt;
            &lt;h1 class="s-counter2 s-counter"&gt;710&lt;/h1&gt;
        &lt;/div&gt;
        &lt;p class="s-counter-text"&gt;HOURS&lt;/p&gt;
    &lt;/div&gt;

    &lt;div class="counter-container"&gt;
        &lt;div class="counter-content"&gt;
            &lt;h1 class="s-counter3 s-counter"&gt;915&lt;/h1&gt;
        &lt;/div&gt;
        &lt;p class="s-counter-text"&gt;TICKETS&lt;/p&gt;
    &lt;/div&gt;

    &lt;div class="counter-container"&gt;
        &lt;div class="counter-content"&gt;
            &lt;h1 class="s-counter4 s-counter"&gt;580&lt;/h1&gt;
        &lt;/div&gt;
        &lt;p class="s-counter-text"&gt;CUSTOMERS&lt;/p&gt;
    &lt;/div&gt;

&lt;/div&gt; </pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="counterIcon" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>With Icon</h4>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area text-center">

                                    <div class="icon--counter-container">
                                        
                                        <div class="counter-container">

                                            <div class="counter-content">
                                                <h1 class="ico-counter1 ico-counter">105</h1>
                                            </div>

                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather counter-ico feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>

                                            <p class="ico-counter-text">Clients</p>
                                        </div>

                                        <div class="counter-container">

                                            <div class="counter-content">
                                                <h1 class="ico-counter2 ico-counter">300</h1>
                                            </div>

                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather counter-ico feather-download-cloud"><polyline points="8 17 12 21 16 17"></polyline><line x1="12" y1="12" x2="12" y2="21"></line><path d="M20.88 18.09A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.29"></path></svg>

                                            <p class="ico-counter-text">Downloads</p>
                                        </div>

                                        <div class="counter-container">
                                            <div class="counter-content">
                                                <h1 class="ico-counter3 ico-counter">58</h1>
                                            </div>

                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather counter-ico feather-award"><circle cx="12" cy="8" r="7"></circle><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline></svg>

                                            <p class="ico-counter-text">Awards</p>
                                        </div>

                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div class="icon--counter-container"&gt;
                                        
    &lt;div class="counter-container"&gt;

        &lt;div class="counter-content"&gt;
            &lt;h1 class="ico-counter1 ico-counter"&gt;105&lt;/h1&gt;
        &lt;/div&gt;

        &lt;svg&gt; ... &lt;/svg&gt;

        &lt;p class="ico-counter-text"&gt;Clients&lt;/p&gt;
    &lt;/div&gt;

    &lt;div class="counter-container"&gt;

        &lt;div class="counter-content"&gt;
            &lt;h1 class="ico-counter2 ico-counter"&gt;300&lt;/h1&gt;
        &lt;/div&gt;

        &lt;svg&gt; ... &lt;/svg&gt;

        &lt;p class="ico-counter-text"&gt;Downloads&lt;/p&gt;
    &lt;/div&gt;

    &lt;div class="counter-container"&gt;
        &lt;div class="counter-content"&gt;
            &lt;h1 class="ico-counter3 ico-counter"&gt;58&lt;/h1&gt;
        &lt;/div&gt;

        &lt;svg&gt; ... &lt;/svg&gt;

        &lt;p class="ico-counter-text"&gt;Awards&lt;/p&gt;
    &lt;/div&gt;

&lt;/div&gt; </pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
@endsection