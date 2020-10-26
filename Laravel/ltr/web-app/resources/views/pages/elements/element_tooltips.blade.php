@extends('layouts.app')

@section('content')
            <div class="container">

                <div class="container">

                    <div id="navSection" data-spy="affix" class="nav sidenav">
                        <div class="sidenav-content">
                            <a href="#tooltipDefault" class="active nav-link">Default</a>
                            <a href="#tooltipDirections" class="nav-link">Directions</a>
                            <a href="#tooltipDismissible" class="nav-link">HTML</a>
                            <a href="#tooltipOptions" class="nav-link">Options</a>
                            <a href="#tooltipColors" class="nav-link">Colors</a>
                        </div>
                    </div>

                    <div class="row layout-top-spacing">
                        <div id="tooltipDefault" class="col-xl-12 col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4> Tooltips </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area text-center">

                                    <a href="javascript:void(0);" class="btn btn-primary mb-3 rounded bs-tooltip" title="Tooltip using ANCHOR tag">
                                        Link
                                    </a>
                                    <button type="button" class="btn btn-success mb-3 rounded bs-tooltip" title="Tooltip using BUTTON tag">
                                        Button
                                    </button>

                                    <div class="code-section-container show-code">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;a href="javascript:void(0);" class="btn btn-primary mb-3 rounded bs-tooltip" title="Tooltip using ANCHOR tag"&gt;
    Link
&lt;/a&gt;
&lt;button type="button" class="btn btn-success mb-3 rounded bs-tooltip" title="Tooltip using BUTTON tag"&gt;
    Button
&lt;/button&gt;
</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="tooltipDirections" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4> Placement</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area tooltip-section">

                                    <div class="row">

                                        <div class="col-lg-6">

                                            <p class="mt-3"><code>data-placement="top"</code></p>

                                            <button type="button" class="btn btn-info mb-2 rounded bs-tooltip" data-placement="top" title="Tooltip on top">
                                                Tooltip on top
                                            </button>
                                        </div>
                                        <div class="col-lg-6">

                                            <p class="mt-3"><code>data-placement="right"</code></p>

                                            <button type="button" class="btn btn-danger mb-2 rounded bs-tooltip" data-placement="right" title="Tooltip on right">
                                                Tooltip on right
                                            </button>
                                        </div>
                                        <div class="col-lg-6">

                                            <p class="mt-3"><code>data-placement="bottom"</code></p>

                                            <button type="button" class="btn btn-warning mb-2 rounded bs-tooltip" data-placement="bottom" title="Tooltip on bottom">
                                                Tooltip on bottom
                                            </button>
                                        </div>
                                        <div class="col-lg-6">

                                            <p class="mt-3"><code>data-placement="left"</code></p>

                                            <button type="button" class="btn btn-secondary mb-2 rounded bs-tooltip" data-placement="left" title="Tooltip on left">
                                                Tooltip on left
                                            </button>
                                        </div>
                                        
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>

&lt;!-- TOP --&gt;                                            
&lt;button type="button" class="btn btn-info mb-2 rounded bs-tooltip" data-placement="top" title="Tooltip on top"&gt;
    Tooltip on top
&lt;/button&gt;

&lt;!-- RIGHT --&gt;                                            
&lt;button type="button" class="btn btn-danger mb-2 rounded bs-tooltip" data-placement="right" title="Tooltip on right"&gt;
    Tooltip on right
&lt;/button&gt;

&lt;!-- BOTTOM --&gt;                                            
&lt;button type="button" class="btn btn-warning mb-2 rounded bs-tooltip" data-placement="bottom" title="Tooltip on bottom"&gt;
    Tooltip on bottom
&lt;/button&gt;

&lt;!-- LEFT --&gt;                                            
&lt;button type="button" class="btn btn-secondary mb-2 rounded bs-tooltip" data-placement="left" title="Tooltip on left"&gt;
    Tooltip on left
&lt;/button&gt;

</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="tooltipDismissible" class="col-xl-12 col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4> HTML </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area text-center">

                                    <button type="button" class="btn btn-dark rounded bs-tooltip" data-toggle="tooltip" data-html="true" title="<em>Tooltip</em> <u>with</u> <b>HTML</b>">
                                        Tooltip with HTML
                                    </button>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;button type="button" class="btn btn-dark rounded bs-tooltip" data-toggle="tooltip" data-html="true" title="&lt;em&gt;Tooltip&lt;/em&gt; &lt;u&gt;with&lt;/u&gt; &lt;b&gt;HTML&lt;/b&gt;"&gt;
    Tooltip with HTML
&lt;/button&gt;</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="tooltipOptions" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Options</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area align-center basic-tooltip">
                                    <div class="row">
                                        <div class="col-lg-6 mb-4">
                                            <p class="mt-3"><code>data-trigger="click"</code></p>
                                            <button type="button" class="mt-1 btn btn-primary bs-tooltip mb-2 rounded" data-trigger="click" title="On Click">
                                                On Click
                                            </button>
                                        </div>

                                        <div class="col-lg-6 mb-4">
                                            <p class="mt-3"><code>Default</code></p>
                                            <button type="button" class="mt-1 btn btn-secondary bs-tooltip mb-2 rounded" title="On Focus">
                                                On Focus
                                            </button>
                                        </div>

                                        <div class="col-lg-6 mb-4">
                                            <p class="mt-3"><code>data-delay="1000"</code></p>
                                            <button type="button" class="mt-1 btn btn-info bs-tooltip mb-2 rounded" data-delay="1000" title="Delay 1s">
                                                Delay
                                            </button>
                                        </div>

                                        <div class="col-lg-6 mb-4">
                                            <p class="mt-3"><code>data-animation="false"</code></p>
                                            <button type="button" class="mt-1 btn btn-dark bs-tooltip mb-2 rounded" data-animation="false" title="Disable Animation">
                                                Disabled Animation
                                            </button>
                                        </div>
                                    </div>


                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;!-- On Click --&gt;
&lt;button type="button" class="mt-1 btn btn-primary bs-tooltip mb-4 ml-2 mr-2 rounded" data-trigger="click" title="On Click"&gt;
    On Click
&lt;/button&gt;

&lt;!-- On Focus --&gt;
&lt;button type="button" class="mt-1 btn btn-secondary bs-tooltip mb-4 ml-2 mr-2 rounded" title="On Focus"&gt;
    On Focus
&lt;/button&gt;

&lt;!-- Delay --&gt;
&lt;button type="button" class="mt-1 btn btn-info bs-tooltip mb-4 ml-2 mr-2 rounded" data-delay="1000" title="Delay 1s"&gt;
    Delay
&lt;/button&gt;

&lt;!-- Disabled Animation --&gt;
&lt;button type="button" class="mt-1 btn btn-dark bs-tooltip mb-4 ml-2 mr-2 rounded" data-animation="false" title="Disable Animation"&gt;
    Disabled Animation
&lt;/button&gt;

</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="tooltipColors" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4> Colors </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area align-center">

                                    <p class="mt-3">Change tooltip template html as shown below to add color scheme.</p>

                                    <button type="button" class="mt-1 btn btn-primary primary mb-2 rounded" data-container="body" data-placement="top" data-html="true"> Primary </button>
                                    <button type="button" class="mt-1 btn btn-success success mb-2 rounded" data-container="body" data-placement="top" data-html="true"> Success </button>
                                    <button type="button" class="mt-1 btn btn-info info mb-2 rounded" data-container="body" data-placement="top" data-html="true"> Info </button>
                                    <button type="button" class="mt-1 btn btn-danger danger mb-2 rounded" data-container="body" data-placement="top" data-html="true"> Danger </button>
                                    <button type="button" class="mt-1 btn btn-warning warning mb-2 rounded" data-container="body" data-placement="top" data-html="true"> Warning </button>
                                    <button type="button" class="mt-1 btn btn-secondary secondary mb-2 rounded" data-container="body" data-placement="top" data-html="true"> Secondary </button>
                                    <button type="button" class="mt-1 btn btn-dark dark mb-2 rounded" data-container="body" data-placement="top" data-html="true"> Dark </button>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;!-- Primary --&gt;
&lt;button type="button" class="mt-1 btn btn-primary primary mb-4 ml-2 mr-2 rounded" data-container="body" data-placement="top" data-html="true"&gt; Primary &lt;/button&gt;

$('.primary').tooltip({
    template: '&lt;div class="tooltip tooltip-primary" role="tooltip"&gt;&lt;div class="arrow"&gt;&lt;/div&gt;&lt;div class="tooltip-inner"&gt;&lt;/div&gt;&lt;/div&gt;',
    title: "Primary"
});

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