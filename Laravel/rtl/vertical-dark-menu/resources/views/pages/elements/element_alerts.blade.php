@extends('layouts.app')

@section('content')
            <div class="container">

                <div class="container">

                    <div id="navSection" data-spy="affix" class="nav sidenav">
                        <div class="sidenav-content">
                            <a href="#alertDefault" class="active nav-link">Default</a>
                            <a href="#alertOutline" class="nav-link">Outline</a>
                            <a href="#alertLight" class="nav-link">Light</a>
                            <a href="#alertIcon" class="nav-link">Icon</a>
                            <a href="#alertArrowed" class="nav-link">Arrowed</a>
                            <a href="#alertCustom" class="nav-link">Custom</a>
                        </div>
                    </div>
                
                    <div class="row layout-top-spacing">
                        <div id="alertDefault" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Default Alerts</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">

                                    <div class="alert alert-primary mb-4" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button> <strong>Primary!</strong> Lorem Ipsum is simply dummy text of the printing. </div>

                                    <div class="alert alert-warning mb-4" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button> <strong>Warning!</strong> Lorem Ipsum is simply dummy text of the printing. </div>

                                    <div class="alert alert-success mb-4" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button> <strong>Success!</strong> Lorem Ipsum is simply dummy text of the printing. </div>

                                    <div class="alert alert-info mb-4" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button> <strong>Info!</strong> Lorem Ipsum is simply dummy text of the printing. </div>

                                    <div class="alert alert-dark mb-4" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button> <strong>Error!</strong> Lorem Ipsum is simply dummy text of the printing. </div>

                                    <div class="alert alert-danger mb-4" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button> <strong>Error!</strong> Lorem Ipsum is simply dummy text of the printing. </div>

                                    <div class="code-section-container show-code">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div class="alert alert-primary mb-4" role="alert"&gt;
    &lt;button type="button" class="close" data-dismiss="alert" aria-label="Close"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/button&gt;
    &lt;strong&gt;Primary!&lt;/strong&gt; Lorem Ipsum is simply dummy text of the printing.&lt;/button&gt;
&lt;/div&gt; </pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="alertOutline" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Outline Alerts</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="alert alert-outline-primary mb-4" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button><i class="flaticon-cancel-12 close" data-dismiss="alert"></i> <strong>Primary!</strong> Lorem Ipsum is simply dummy text of the printing. </div>
                                    <div class="alert alert-outline-danger mb-4" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button><i class="flaticon-cancel-12 close" data-dismiss="alert"></i> <strong>Error!</strong> Lorem Ipsum is simply dummy text of the printing. </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div class="alert alert-outline-primary mb-4" role="alert"&gt;
    &lt;button type="button" class="close" data-dismiss="alert" aria-label="Close"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/button&gt;
    &lt;strong&gt;Primary!&lt;/strong&gt; Lorem Ipsum is simply dummy text of the printing.
&lt;/div&gt; </pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div id="alertLight" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Light Alerts</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="alert alert-light-warning mb-4" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button> <strong>Warning!</strong> Lorem Ipsum is simply dummy text of the printing. </div>
                                    <div class="alert alert-light-info mb-4" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button> <strong>Info!</strong> Lorem Ipsum is simply dummy text of the printing. </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div class="alert alert-light-warning mb-4" role="alert"&gt;
    &lt;button type="button" class="close" data-dismiss="alert" aria-label="Close"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/button&gt;
    &lt;strong&gt;Primary!&lt;/strong&gt; Lorem Ipsum is simply dummy text of the printing.
&lt;/div&gt;</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="alertIcon" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Alerts with icon</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">

                                    <div class="alert alert-icon-left alert-light-success mb-4" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" data-dismiss="alert" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-triangle"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12" y2="17"></line></svg>
                                        <strong>Warning!</strong> Lorem Ipsum is simply dummy printing.
                                    </div>

                                    <div class="alert alert-icon-right alert-light-dark mb-4" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" data-dismiss="alert" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
                                        <strong>Warning!</strong> Lorem Ipsum is simply dummy printing.
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div class="alert alert-icon-left alert-light-primary mb-4" role="alert"&gt;
    &lt;button type="button" class="close" data-dismiss="alert" aria-label="Close"&gt;&lt;svg  data-dismiss="alert"&gt; ... &lt;/svg&gt;&lt;/button&gt;
    &lt;svg&gt; ... &lt;/svg&gt;
    &lt;strong&gt;Warning!&lt;/strong&gt; Lorem Ipsum is simply dummy printing.
&lt;/div&gt;

&lt;div class="alert alert-icon-right alert-light-primary mb-4" role="alert"&gt;
    &lt;button type="button" class="close" data-dismiss="alert" aria-label="Close"&gt;&lt;svg  data-dismiss="alert"&gt; ... &lt;/svg&gt;&lt;/button&gt;
    &lt;svg&gt; ... &lt;/svg&gt;
    &lt;strong&gt;Warning!&lt;/strong&gt; Lorem Ipsum is simply dummy printing.
&lt;/div&gt; </pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="alertArrowed" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Arrowed Alerts</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">

                                    <div class="alert alert-arrow-left alert-icon-left alert-light-primary mb-4" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" data-dismiss="alert" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>
                                        <strong>Warning!</strong> Lorem Ipsum is simply dummy printing.
                                    </div>

                                    <div class="alert alert-arrow-right alert-icon-right alert-light-danger mb-4" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" data-dismiss="alert" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12" y2="16"></line></svg>
                                        <strong>Warning!</strong> Lorem Ipsum is simply dummy printing.
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div class="alert alert-arrow-left alert-icon-left alert-light-primary mb-4"
role="alert"&gt;
    &lt;button type="button" class="close" data-dismiss="alert" aria-label="Close"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/button&gt;
    &lt;svg&gt; ... &lt;/svg&gt;
    &lt;strong&gt;Warning!&lt;/strong&gt; Lorem Ipsum is simply dummy printing.
&lt;/div&gt;

&lt;div class="alert alert-arrow-right alert-icon-right alert-light-primary mb-4"
role="alert"&gt;
    &lt;button type="button" class="close" data-dismiss="alert" aria-label="Close"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/button&gt;
    &lt;svg&gt; ... &lt;/svg&gt;
    &lt;strong&gt;Warning!&lt;/strong&gt; Lorem Ipsum is simply dummy printing.
&lt;/div&gt; </pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="alertCustom" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Custom Alerts</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">

                                    <div class="alert custom-alert-1 mb-4" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"  data-dismiss="alert" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                                        <div class="media">
                                            <div class="alert-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-triangle"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12" y2="17"></line></svg>
                                            </div>
                                            <div class="media-body">
                                                <div class="alert-text">
                                                    <strong>Warning! </strong><span> Lorem Ipsum is simply dummy text of the printing.</span> 
                                                </div>
                                                <div class="alert-btn">
                                                    <button type="button" class="btn btn-default btn-dismiss">Accept</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left mb-5">
                                            <pre>
&lt;div class="alert custom-alert-1 mb-4" role="alert"&gt;
    &lt;button type="button" class="close" data-dismiss="alert" aria-label="Close"&gt;&lt;svg&gt; .... &lt;/svg&gt;&lt;/button&gt;
    &lt;div class="media"&gt;
        &lt;div class="alert-icon"&gt;
            &lt;svg&gt; .... &lt;/svg&gt;
        &lt;/div&gt;
        &lt;div class="media-body"&gt;
            &lt;div class="alert-text"&gt;
                &lt;strong&gt;Warning! &lt;/strong&gt;&lt;span&gt; Lorem Ipsum is simply dummy text of the printing.&lt;/span&gt; 
            &lt;/div&gt;
            &lt;div class="alert-btn"&gt;
                &lt;button type="button" class="btn btn-default btn-dismiss"&gt;Accept&lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</pre>
                                        </div>
                                    </div>

                                    <div class="alert alert-gradient mb-4" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"  data-dismiss="alert" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button> <strong>New!</strong> Alert with gradient.</div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>
                                        <div class="code-section text-left mb-5">
                                            <pre>
&lt;div class="alert alert-gradient mb-4" role="alert"&gt;
    &lt;button type="button" class="close" data-dismiss="alert" aria-label="Close"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/button&gt;
    &lt;strong&gt;New!&lt;/strong&gt; Alert with gradient.
&lt;/div&gt; </pre>
                                        </div>
                                    </div>

                                    <div class="alert alert-background mb-4" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"  data-dismiss="alert" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button> <strong>New!</strong> Alert with background image. </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div class="alert alert-background mb-4" role="alert"&gt;
    &lt;button type="button" class="close" data-dismiss="alert" aria-label="Close"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/button&gt;
    &lt;strong&gt;New!&lt;/strong&gt; Alert with background image.
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