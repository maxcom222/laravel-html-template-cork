@extends('layouts.app')

@section('content')
            <div class="container">

                <div class="container">

                    <div id="navSection" data-spy="affix" class="nav  sidenav">
                        <div class="sidenav-content">
                            <a href="#countdownSeperator" class="active nav-link">Seperator</a>
                            <a href="#countdownCircle" class="nav-link">Circle</a>
                        </div>
                    </div>
                
                    <div class="row layout-top-spacing">

                        <div id="countdownSeperator" class="col-xl-12 col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Simple Countdown</h4>
                                        </div>                                 
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area text-center">
                                    <div class="container">
                                        <div id="cd-simple">
                                        </div>

                                        <div class="code-section-container show-code">
                                                
                                            <button class="btn toggle-code-snippet"><span>Code</span></button>

                                            <div class="code-section text-left">
                                                <pre>
&lt;div id="cd-simple"&gt;
    &lt;div class="countdown"&gt;
        &lt;div class="clock-count-container"&gt;
            &lt;h1 class="clock-val"&gt;00&lt;/h1&gt;
        &lt;/div&gt;
        &lt;h4 class="clock-text"&gt; Days &lt;/h4&gt;
    &lt;/div&gt;
    &lt;div class="countdown"&gt;
        &lt;div class="clock-count-container"&gt;
            &lt;h1 class="clock-val"&gt;08&lt;/h1&gt;
        &lt;/div&gt;
        &lt;h4 class="clock-text"&gt; Hours &lt;/h4&gt;
    &lt;/div&gt;
    &lt;div class="countdown"&gt;
        &lt;div class="clock-count-container"&gt;
            &lt;h1 class="clock-val"&gt;32&lt;/h1&gt;
        &lt;/div&gt;
        &lt;h4 class="clock-text"&gt; Mins &lt;/h4&gt;
    &lt;/div&gt;
    &lt;div class="countdown"&gt;
        &lt;div class="clock-count-container"&gt;
            &lt;h1 class="clock-val"&gt;45&lt;/h1&gt;
        &lt;/div&gt;
        &lt;h4 class="clock-text"&gt; Sec &lt;/h4&gt;
    &lt;/div&gt;
&lt;/div&gt;</pre>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="countdownCircle" class="col-xl-12 col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Circle Countdown</h4>
                                        </div>                                 
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area text-center">
                                    <div class="container">
                                        <div id="cd-circle">
                                        </div>

                                        <div class="code-section-container">
                                                
                                            <button class="btn toggle-code-snippet"><span>Code</span></button>

                                            <div class="code-section text-left">
                                                <pre>
&lt;div id="cd-circle"&gt;
    &lt;div class="countdown"&gt;
        &lt;div class="clock-count-container"&gt;
            &lt;h1 class="clock-val"&gt;365&lt;/h1&gt;
        &lt;/div&gt;
        &lt;h4 class="clock-text"&gt; Days &lt;/h4&gt;
    &lt;/div&gt;
    &lt;div class="countdown"&gt;
        &lt;div class="clock-count-container"&gt;
            &lt;h1 class="clock-val"&gt;13&lt;/h1&gt;
        &lt;/div&gt;
        &lt;h4 class="clock-text"&gt; Hours &lt;/h4&gt;
    &lt;/div&gt;
    &lt;div class="countdown"&gt;
        &lt;div class="clock-count-container"&gt;
            &lt;h1 class="clock-val"&gt;01&lt;/h1&gt;
        &lt;/div&gt;
        &lt;h4 class="clock-text"&gt; Mins &lt;/h4&gt;
    &lt;/div&gt;
    &lt;div class="countdown"&gt;
        &lt;div class="clock-count-container"&gt;
            &lt;h1 class="clock-val"&gt;13&lt;/h1&gt;
        &lt;/div&gt;
        &lt;h4 class="clock-text"&gt; Sec &lt;/h4&gt;
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
            </div>
@endsection