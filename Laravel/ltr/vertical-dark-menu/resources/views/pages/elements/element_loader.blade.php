@extends('layouts.app')

@section('content')

            <div class="container">

                <div class="container">

                    <div id="navSection" data-spy="affix" class="nav sidenav">
                        <div class="sidenav-content">
                            <a href="#loaderWith-buttons" class="active nav-link">With Buttons</a>
                            <a href="#loaderPositions" class="nav-link">Positions</a>
                            <a href="#loaderSizes" class="nav-link">Sizes</a>
                            <a href="#loaderColors" class="nav-link">Colors</a>
                            <a href="#loaderCustom" class="nav-link">Custom</a>
                        </div>
                    </div>

                    <div class="row  layout-top-spacing">

                        <div id="loaderWith-buttons" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Loaders with Buttons</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <button class="btn btn-info btn-lg mb-3 mr-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-loader spin mr-2"><line x1="12" y1="2" x2="12" y2="6"></line><line x1="12" y1="18" x2="12" y2="22"></line><line x1="4.93" y1="4.93" x2="7.76" y2="7.76"></line><line x1="16.24" y1="16.24" x2="19.07" y2="19.07"></line><line x1="2" y1="12" x2="6" y2="12"></line><line x1="18" y1="12" x2="22" y2="12"></line><line x1="4.93" y1="19.07" x2="7.76" y2="16.24"></line><line x1="16.24" y1="7.76" x2="19.07" y2="4.93"></line></svg>  Loading</button>
                                    <button class="btn btn-danger btn-lg mb-3 mr-3"><span class="spinner-border text-white mr-2 align-self-center loader-sm ">Loading...</span> Loading</button>
                                    <button class="btn btn-secondary btn-lg mb-3 mr-3"><span class="spinner-grow text-white mr-2 align-self-center loader-sm">Loading...</span> Loading</button>
                                    <div class="row">
                                        <div class="col-lg-12">
                                        </div>
                                        <div class="col-lg-12">
                                        </div>
                                        <div class="col-lg-12">
                                        </div>
                                    </div>

                                    <div class="code-section-container show-code">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;button class="btn btn-info btn-lg mb-3 mr-3"&gt;&lt;svg&gt;&lt;/svg&gt;  Loading&lt;/button&gt;

&lt;button class="btn btn-danger btn-lg mb-3 mr-3"&gt;
    &lt;div class="spinner-border text-white mr-2 align-self-center loader-sm "&gt;Loading...&lt;/div&gt;
Loading&lt;/button&gt;

&lt;button class="btn btn-secondary btn-lg mb-3 mr-3"&gt;
    &lt;div class="spinner-grow text-white mr-2 align-self-center loader-sm"&gt;Loading...&lt;/div&gt;
Loading&lt;/button&gt;

</pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div id="loaderPositions" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Position</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area text-center">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <p class="">Default Button</p>
                                            <button class="btn btn-primary btn-lg mb-4 mr-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-loader spin mr-2"><line x1="12" y1="2" x2="12" y2="6"></line><line x1="12" y1="18" x2="12" y2="22"></line><line x1="4.93" y1="4.93" x2="7.76" y2="7.76"></line><line x1="16.24" y1="16.24" x2="19.07" y2="19.07"></line><line x1="2" y1="12" x2="6" y2="12"></line><line x1="18" y1="12" x2="22" y2="12"></line><line x1="4.93" y1="19.07" x2="7.76" y2="16.24"></line><line x1="16.24" y1="7.76" x2="19.07" y2="4.93"></line></svg>  Loading</button>
                                        </div>
                                        <div class="col-xl-6">
                                            <p class="">Outline Button</p>
                                            <button class="btn btn-outline-primary btn-lg mb-4 mr-3">Loading <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-loader spin ml-2"><line x1="12" y1="2" x2="12" y2="6"></line><line x1="12" y1="18" x2="12" y2="22"></line><line x1="4.93" y1="4.93" x2="7.76" y2="7.76"></line><line x1="16.24" y1="16.24" x2="19.07" y2="19.07"></line><line x1="2" y1="12" x2="6" y2="12"></line><line x1="18" y1="12" x2="22" y2="12"></line><line x1="4.93" y1="19.07" x2="7.76" y2="16.24"></line><line x1="16.24" y1="7.76" x2="19.07" y2="4.93"></line></svg></button>
                                        </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;!-- Default Button --&gt;
&lt;button class="btn btn-primary btn-lg mr-3"&gt;&lt;svg&gt; ... &lt;/svg&gt;Loading&lt;/button&gt;

&lt;!-- Outline Button --&gt;
&lt;button class="btn btn-outline-primary btn-lg mr-3"&gt;Loading &lt;svg&gt; ... &lt;/svg&gt;&lt;/button&gt;</pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        
                        <div id="loaderSizes" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Sizes</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area text-center">
                                    <div class="d-flex justify-content-between mx-5 mt-3 mb-5">
                                        <div class="spinner-border text-success  align-self-center loader-lg">Loading...</div>
                                        <div class="spinner-border text-success  align-self-center">Loading...</div>
                                        <div class="spinner-border text-success  align-self-center loader-sm ">Loading...</div>
                                    </div>

                                    <div class="d-flex justify-content-between mx-5 mt-3 mb-5">
                                        <div class="spinner-border spinner-border-reverse align-self-center loader-lg text-secondary">Loading...</div>
                                        <div class="spinner-border spinner-border-reverse align-self-center text-secondary">Loading...</div>
                                        <div class="spinner-border spinner-border-reverse align-self-center loader-sm text-secondary">Loading...</div>
                                    </div>

                                    <div class="d-flex justify-content-between mx-5 mt-3">
                                        <div class="spinner-grow text-info align-self-center loader-lg">Loading...</div>
                                        <div class="spinner-grow text-info align-self-center">Loading...</div>
                                        <div class="spinner-grow text-info align-self-center loader-sm">Loading...</div>                                    
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div class="d-flex justify-content-between mx-5 mt-3 mb-5"&gt;
    &lt;div class="spinner-border text-success align-self-center loader-lg"&gt;Loading...&lt;/div&gt;
    &lt;div class="spinner-border text-success align-self-center"&gt;Loading...&lt;/div&gt;
    &lt;div class="spinner-border text-success align-self-center loader-sm "&gt;Loading...&lt;/div&gt;
&lt;/div&gt;

&lt;div class="d-flex justify-content-between mx-5 mt-3 mb-5"&gt;
    &lt;div class="spinner-border spinner-border-reverse align-self-center loader-lg text-secondary"&gt;Loading...&lt;/div&gt;
    &lt;div class="spinner-border spinner-border-reverse align-self-center text-secondary"&gt;Loading...&lt;/div&gt;
    &lt;div class="spinner-border spinner-border-reverse align-self-center loader-sm text-secondary"&gt;Loading...&lt;/div&gt;
&lt;/div&gt;

&lt;div class="d-flex justify-content-between mx-5 mt-3"&gt;
    &lt;div class="spinner-grow text-info align-self-center loader-lg"&gt;Loading...&lt;/div&gt;
    &lt;div class="spinner-grow text-info align-self-center"&gt;Loading...&lt;/div&gt;
    &lt;div class="spinner-grow text-info align-self-center loader-sm"&gt;Loading...&lt;/div&gt;
&lt;/div&gt;

</pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="loaderColors" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Colors</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area text-center">
                                    <div class="d-flex justify-content-between mx-5 mt-3 mb-5">
                                        <div class="spinner-border text-success  align-self-center ">Loading...</div>
                                        <div class="spinner-border text-danger  align-self-center">Loading...</div>
                                        <div class="spinner-border text-warning  align-self-center  ">Loading...</div>
                                        <div class="spinner-border text-primary  align-self-center  ">Loading...</div>
                                    </div>

                                    <div class="d-flex justify-content-between mx-5 mt-3 mb-5">
                                        <div class="spinner-border spinner-border-reverse align-self-center text-dark">Loading...</div>
                                        <div class="spinner-border spinner-border-reverse align-self-center text-secondary">Loading...</div>
                                        <div class="spinner-border spinner-border-reverse align-self-center text-primary">Loading...</div>
                                        <div class="spinner-border spinner-border-reverse align-self-center text-danger">Loading...</div>                                    
                                    </div>

                                    <div class="d-flex justify-content-between mx-5 mt-3 mb-5">
                                        <div class="spinner-grow text-info align-self-center">Loading...</div>
                                        <div class="spinner-grow text-danger align-self-center">Loading...</div>
                                        <div class="spinner-grow text-secondary align-self-center">Loading...</div>
                                        <div class="spinner-grow text-warning align-self-center">Loading...</div>                                    
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div class="d-flex justify-content-between mx-5 mt-3 mb-5"&gt;
    &lt;div class="spinner-border text-success align-self-center "&gt;Loading...&lt;/div&gt;
    &lt;div class="spinner-border text-danger align-self-center"&gt;Loading...&lt;/div&gt;
    &lt;div class="spinner-border text-warning align-self-center  "&gt;Loading...&lt;/div&gt;
    &lt;div class="spinner-border text-primary align-self-center  "&gt;Loading...&lt;/div&gt;
&lt;/div&gt;

&lt;div class="d-flex justify-content-between mx-5 mt-3 mb-5"&gt;
    &lt;div class="spinner-border spinner-border-reverse align-self-center text-dark"&gt;Loading...&lt;/div&gt;
    &lt;div class="spinner-border spinner-border-reverse align-self-center text-secondary"&gt;Loading...&lt;/div&gt;
    &lt;div class="spinner-border spinner-border-reverse align-self-center text-primary"&gt;Loading...&lt;/div&gt;
    &lt;div class="spinner-border spinner-border-reverse align-self-center text-danger"&gt;Loading...&lt;/div&gt;
&lt;/div&gt;

&lt;div class="d-flex justify-content-between mx-5 mt-3 mb-5"&gt;
    &lt;div class="spinner-grow text-info align-self-center"&gt;Loading...&lt;/div&gt;
    &lt;div class="spinner-grow text-danger align-self-center"&gt;Loading...&lt;/div&gt;
    &lt;div class="spinner-grow text-secondary align-self-center"&gt;Loading...&lt;/div&gt;
    &lt;div class="spinner-grow text-warning align-self-center"&gt;Loading...&lt;/div&gt;
&lt;/div&gt;

</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row pt-5 layout-spacing">

                        <div id="loaderCustom" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Custom</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="loader mx-auto"></div>
                                        </div>
                                        <div class="col-4">
                                            <div class="loader dual-loader mx-auto"></div>
                                        </div>
                                        <div class="col-4">
                                            <div class="loader multi-loader mx-auto"></div>
                                        </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div class="loader mx-auto">&lt;/div&gt;
&lt;div class="loader dual-loader mx-auto"&gt;&lt;/div&gt;
&lt;div class="loader multi-loader mx-auto"&gt;&lt;/div&gt;
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