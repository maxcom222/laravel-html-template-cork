@extends('layouts.app')

@section('content')

            <div class="container">

                <div class="container">

                    <div id="navSection" data-spy="affix" class="nav sidenav">
                        <div class="sidenav-content">
                            <a href="#buttonsDefault" class="active nav-link">Default</a>
                            <a href="#buttonsRounded" class="nav-link">Rounded</a>
                            <a href="#buttonsSolid" class="nav-link">Solid</a>
                            <a href="#buttonsOutline" class="nav-link">Outline</a>
                            <a href="#buttonsSizes" class="nav-link">Sizes</a>
                            <a href="#buttonsIcons" class="nav-link">Icons</a>
                            <a href="#buttonsBlock" class="nav-link">Block</a>
                        </div>
                    </div>
                
                    <div class="row layout-top-spacing">

                        <div id="buttonsDefault" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header"> 
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4> Default </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area text-center split-buttons">
                                    <p class="mb-4">Apply <code>.btn</code> class to give default styling.</p>
                                    <div class="row">

                                        <div class="col-lg-6">
                                            <p class="mb-4"><code>.btn-primary</code></p>
                                            <button class="btn btn-primary mb-2">Primary</button>
                                        </div>

                                        <div class="col-lg-6">
                                            <p class="mb-4"><code>.btn-outline-primary</code></p>
                                            <button class="btn btn-outline-primary mb-2">Primary</button>
                                        </div>

                                    </div>

                                    <div class="code-section-container show-code">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;button class="btn btn-primary mb-2">Primary&lt;/button&gt;

&lt;button class="btn btn-outline-primary mb-2"&gt;Primary&lt;/button&gt;</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="buttonsRounded" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header"> 
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4> Rounded </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area text-center split-buttons">
                                    <p class="mb-4">Use <code>.btn-rounded</code> to make buttons rounded.</p>

                                    <div class="row">
                                        
                                        <div class="col-lg-6">
                                            <button class="btn btn-primary btn-rounded mb-2">Primary</button>
                                        </div>

                                        <div class="col-lg-6">
                                            <button class="btn btn-outline-primary btn-rounded mb-2">Primary</button>
                                        </div>

                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;button class="btn btn-primary btn-rounded mb-2">Primary&lt;/button&gt;

&lt;button class="btn btn-outline-primary btn-rounded mb-2"&gt;Primary&lt;/button&gt;</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="buttonsSolid" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header"> 
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Solid</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area text-center split-buttons">
                                    <p class="mb-4">Apply <code>.btn-*</code> class followed by <code>.btn </code> class to create <b>default</b> buttons.</p>

                                    <button class="btn btn-primary mb-2">Primary</button>
                                    <button class="btn btn-info mb-2">Info</button>
                                    <button class="btn btn-success mb-2">Success</button>
                                    <button class="btn btn-warning mb-2">Warning</button>
                                    <button class="btn btn-danger mb-2">Danger</button>
                                    <button class="btn btn-secondary mb-2">Secondary</button>
                                    <button class="btn btn-dark mb-2">Dark</button>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>

&lt;!-- Primary --&gt;
&lt;button class="btn btn-primary mb-2"&gt;Primary&lt;/button&gt;

&lt;!-- Info --&gt;
&lt;button class="btn btn-info mb-2"&gt;Info&lt;/button&gt;

&lt;!-- Success --&gt;
&lt;button class="btn btn-success mb-2"&gt;Success&lt;/button&gt;

&lt;!-- Warning --&gt;
&lt;button class="btn btn-warning mb-2"&gt;Warning&lt;/button&gt;

&lt;!-- Danger --&gt;
&lt;button class="btn btn-danger mb-2"&gt;Danger&lt;/button&gt;

&lt;!-- Secondary --&gt;
&lt;button class="btn btn-secondary mb-2"&gt;Secondary&lt;/button&gt;

&lt;!-- Dark --&gt;
&lt;button class="btn btn-dark mb-2"&gt;Dark&lt;/button&gt;</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="buttonsOutline" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header"> 
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Outline</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area text-center split-buttons">
                                    <p class="mb-4">Apply <code>.btn-outline-*</code> class followed by <code>.btn </code> class to create <b>outline</b> buttons.</p>

                                    <button class="btn btn-outline-primary mb-2">Primary</button>
                                    <button class="btn btn-outline-info mb-2">Info</button>
                                    <button class="btn btn-outline-success mb-2">Success</button>
                                    <button class="btn btn-outline-warning mb-2">Warning</button>
                                    <button class="btn btn-outline-danger mb-2">Danger</button>
                                    <button class="btn btn-outline-secondary mb-2">Secondary</button>
                                    <button class="btn btn-outline-dark mb-2">Dark</button>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>

&lt;!-- Primary --&gt;
&lt;button class="btn btn-outline-primary mb-2"&gt;Primary&lt;/button&gt;

&lt;!-- Info --&gt;
&lt;button class="btn btn-outline-info mb-2"&gt;Info&lt;/button&gt;

&lt;!-- Success --&gt;
&lt;button class="btn btn-outline-success mb-2"&gt;Success&lt;/button&gt;

&lt;!-- Warning --&gt;
&lt;button class="btn btn-outline-warning mb-2"&gt;Warning&lt;/button&gt;

&lt;!-- Danger --&gt;
&lt;button class="btn btn-outline-danger mb-2"&gt;Danger&lt;/button&gt;

&lt;!-- Secondary --&gt;
&lt;button class="btn btn-outline-secondary mb-2"&gt;Secondary&lt;/button&gt;

&lt;!-- Dark --&gt;
&lt;button class="btn btn-outline-dark mb-2"&gt;Dark&lt;/button&gt;</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>


                    </div>

                    
                    <div class="row">
                        <div id="buttonsSizes" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Button Sizes</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area text-center">
                                    <button class="btn btn-primary mb-4 mr-2 btn-lg">Large button</button>
                                    <button class="btn btn-secondary mb-4 mr-2">Default button</button>
                                    <button class="btn btn-warning mb-4 mr-2 btn-sm">Small button</button>
                                    <button class="btn btn-dark mb-4 mr-2 btn-sm disabled">Disabled Button</button>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;button class="btn btn-primary mb-4 mr-2 btn-lg"&gt;Large button&lt;/button&gt;

&lt;button class="btn btn-secondary mb-4 mr-2"&gt;Default button&lt;/button&gt;

&lt;button class="btn btn-warning mb-4 mr-2 btn-sm"&gt;Small button&lt;/button&gt;

&lt;button class="btn btn-dark mb-4 mr-2 btn-sm disabled"&gt;Disabled Button&lt;/button&gt;
</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="buttonsIcons" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Button with Icons</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area text-center">
                                    <button class="btn btn-primary mb-2 mr-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg> Left</button>
                                    <button class="btn btn-warning mb-2 mr-2 btn-rounded">Right <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></button>
                                    <button class="btn btn-danger mb-2 mr-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg></button>
                                    <button class="btn btn-dark mb-2 mr-2 rounded-circle"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sun"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg></button>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;button class="btn btn-primary mb-2 mr-2"&gt;&lt;svg&gt; ... &lt;/svg&gt; Left&lt;/button&gt;

&lt;button class="btn btn-warning mb-2 mr-2 btn-rounded"&gt;Right &lt;svg&gt; ... &lt;/svg&gt;&lt;/button&gt;

&lt;button class="btn btn-danger mb-2 mr-2"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/button&gt;

&lt;button class="btn btn-dark mb-2 mr-2 rounded-circle"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/button&gt;
</pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div id="buttonsBlock" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header"> 
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4> Block Buttons </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area text-center">
                                    <button class="btn btn-primary btn-block mb-4 mr-2">Button</button>
                                    <input type="submit" class="btn btn-info btn-block mb-4 mr-2" value="Input">
                                    <a href="javascript:void(0);" class="btn btn-success btn-block mb-4 mr-2">Link</a>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>
                                        <div class="code-section text-left">
                                            <pre>
&lt;button class="btn btn-primary btn-block mb-4 mr-2"&gt;Button&lt;/button&gt;

&lt;input type="submit" class="btn btn-info btn-block mb-4 mr-2" value="Input"&gt;

&lt;a href="javascript:void(0);" class="btn btn-success btn-block mb-4 mr-2"&gt;Link&lt;/a&gt;
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