@extends('layouts.app')

@section('content')

            <div class="container">
                <div class="container">

                    <div id="navSection" data-spy="affix" class="nav  sidenav">
                        <div class="sidenav-content">
                            <a href="#switch_icons" class="active nav-link">Icons</a>
                            <a href="#switch_solid" class="nav-link">Solid</a>
                            <a href="#switch_outline" class="nav-link">Outline</a>
                        </div>
                    </div>

                    <div class="row layout-top-spacing">

                        <div id="switch_icons" class="col-lg-12">
                            <div class="seperator-header">
                                <h4 class="">Icons</h4>
                            </div>
                        </div>

                        <div class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Default</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area text-center">
                                    <div class="row">
                                        
                                        <div class="col-lg-3 col-md-3 col-sm-4 col-6">
                                            <label class="switch s-icons s-outline  s-outline-default  mb-4 mr-2">
                                                <input type="checkbox" checked>
                                                <span class="slider"></span>
                                            </label>
                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-4 col-6">
                                            <label class="switch s-icons s-outline  s-outline-primary  mb-4 mr-2">
                                                <input type="checkbox" checked>
                                                <span class="slider"></span>
                                            </label>
                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-4 col-6">
                                            <label class="switch s-icons s-outline  s-outline-success  mb-4 mr-2">
                                                <input type="checkbox" checked>
                                                <span class="slider"></span>
                                            </label>
                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-4 col-6">
                                            <label class="switch s-icons s-outline  s-outline-warning  mb-4 mr-2">
                                                <input type="checkbox" checked>
                                                <span class="slider"></span>
                                            </label>
                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-4 col-6">
                                            <label class="switch s-icons s-outline  s-outline-danger  mb-4 mr-2">
                                                <input type="checkbox" checked>
                                                <span class="slider"></span>
                                            </label>
                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-4 col-6">
                                            <label class="switch s-icons s-outline  s-outline-secondary  mb-4 mr-2">
                                                <input type="checkbox" checked>
                                                <span class="slider"></span>
                                            </label>
                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-4 col-6">
                                            <label class="switch s-icons s-outline  s-outline-info  mb-4 mr-2">
                                                <input type="checkbox" checked>
                                                <span class="slider"></span>
                                            </label>
                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-4 col-6">
                                            <label class="switch s-icons s-outline  s-outline-dark  mb-4 mr-2">
                                                <input type="checkbox" checked>
                                                <span class="slider"></span>
                                            </label>
                                        </div>

                                    </div>

                                    <div class="code-section-container show-code">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;label class="switch s-icons s-outline s-outline-default mr-2"&gt;
    &lt;input type="checkbox" checked&gt;
    &lt;span class="slider"&gt;&lt;/span&gt;
&lt;/label&gt;
</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Rounded</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area text-center">
                                    <div class="row">
                                        
                                        <div class="col-lg-3 col-md-3 col-sm-4 col-6">
                                            <label class="switch s-icons s-outline  s-outline-default  mb-4 mr-2">
                                                <input type="checkbox" checked>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-4 col-6">
                                            <label class="switch s-icons s-outline  s-outline-primary  mb-4 mr-2">
                                                <input type="checkbox" checked>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-4 col-6">
                                            <label class="switch s-icons s-outline  s-outline-success  mb-4 mr-2">
                                                <input type="checkbox" checked>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-4 col-6">
                                            <label class="switch s-icons s-outline  s-outline-warning  mb-4 mr-2">
                                                <input type="checkbox" checked>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-4 col-6">
                                            <label class="switch s-icons s-outline  s-outline-danger  mb-4 mr-2">
                                                <input type="checkbox" checked>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-4 col-6">
                                            <label class="switch s-icons s-outline  s-outline-secondary  mb-4 mr-2">
                                                <input type="checkbox" checked>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-4 col-6">
                                            <label class="switch s-icons s-outline  s-outline-info  mb-4 mr-2">
                                                <input type="checkbox" checked>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-4 col-6">
                                            <label class="switch s-icons s-outline  s-outline-dark  mb-4 mr-2">
                                                <input type="checkbox" checked>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>

                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;label class="switch s-icons s-outline s-outline-default mr-2"&gt;
    &lt;input type="checkbox" checked&gt;
    &lt;span class="slider round"&gt;&lt;/span&gt;
&lt;/label&gt;
</pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div id="switch_solid" class="col-lg-12">
                            <div class="seperator-header">
                                <h4 class="">Solid</h4>
                            </div>
                        </div>

                        <div class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Default</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area text-center">
                                    <div class="row">
                                        
                                        <div class="col-lg-3 col-md-3 col-sm-4 col-6">
                                            <label class="switch s-default  mb-4 mr-2">
                                                <input type="checkbox" checked>
                                                <span class="slider"></span>
                                            </label>
                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-4 col-6">
                                            <label class="switch s-primary  mb-4 mr-2">
                                                <input type="checkbox" checked>
                                                <span class="slider"></span>
                                            </label>
                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-4 col-6">
                                            <label class="switch s-success  mb-4 mr-2">
                                                <input type="checkbox" checked>
                                                <span class="slider"></span>
                                            </label>
                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-4 col-6">
                                            <label class="switch s-warning  mb-4 mr-2">
                                                <input type="checkbox" checked>
                                                <span class="slider"></span>
                                            </label>
                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-4 col-6">
                                            <label class="switch s-danger  mb-4 mr-2">
                                                <input type="checkbox" checked>
                                                <span class="slider"></span>
                                            </label>
                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-4 col-6">
                                            <label class="switch s-secondary  mb-4 mr-2">
                                                <input type="checkbox" checked>
                                                <span class="slider"></span>
                                            </label>
                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-4 col-6">
                                            <label class="switch s-info  mb-4 mr-2">
                                                <input type="checkbox" checked>
                                                <span class="slider"></span>
                                            </label>
                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-4 col-6">
                                            <label class="switch s-dark  mb-4 mr-2">
                                                <input type="checkbox" checked>
                                                <span class="slider"></span>
                                            </label>
                                        </div>

                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;label class="switch s-default mr-2"&gt;
    &lt;input type="checkbox" checked&gt;
    &lt;span class="slider"&gt;&lt;/span&gt;
&lt;/label&gt;
</pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Rounded</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area text-center">
                                    <div class="row">
                                        
                                        <div class="col-lg-3 col-md-3 col-sm-4 col-6">
                                            <label class="switch s-default  mb-4 mr-2">
                                                <input type="checkbox" checked>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-4 col-6">
                                            <label class="switch s-primary  mb-4 mr-2">
                                                <input type="checkbox" checked>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-4 col-6">
                                            <label class="switch s-success  mb-4 mr-2">
                                                <input type="checkbox" checked>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-4 col-6">
                                            <label class="switch s-warning  mb-4 mr-2">
                                                <input type="checkbox" checked>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-4 col-6">
                                            <label class="switch s-danger  mb-4 mr-2">
                                                <input type="checkbox" checked>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-4 col-6">
                                            <label class="switch s-secondary  mb-4 mr-2">
                                                <input type="checkbox" checked>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-4 col-6">
                                            <label class="switch s-info  mb-4 mr-2">
                                                <input type="checkbox" checked>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-4 col-6">
                                            <label class="switch s-dark  mb-4 mr-2">
                                                <input type="checkbox" checked>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>

                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;label class="switch s-default mr-2"&gt;
    &lt;input type="checkbox" checked&gt;
    &lt;span class="slider round"&gt;&lt;/span&gt;
&lt;/label&gt;
</pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div id="switch_outline" class="col-lg-12">
                            <div class="seperator-header">
                                <h4 class="">Outline</h4>
                            </div>
                        </div>

                        <div class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Default</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area text-center">
                                    <div class="row">
                                        
                                        <div class="col-lg-3 col-md-3 col-sm-4 col-6">
                                            <label class="switch  s-outline  s-outline-default  mb-4 mr-2">
                                                <input type="checkbox" checked>
                                                <span class="slider"></span>
                                            </label>
                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-4 col-6">
                                            <label class="switch  s-outline  s-outline-primary  mb-4 mr-2">
                                                <input type="checkbox" checked>
                                                <span class="slider"></span>
                                            </label>
                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-4 col-6">
                                            <label class="switch  s-outline  s-outline-success  mb-4 mr-2">
                                                <input type="checkbox" checked>
                                                <span class="slider"></span>
                                            </label>
                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-4 col-6">
                                            <label class="switch  s-outline  s-outline-warning  mb-4 mr-2">
                                                <input type="checkbox" checked>
                                                <span class="slider"></span>
                                            </label>
                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-4 col-6">
                                            <label class="switch  s-outline  s-outline-danger  mb-4 mr-2">
                                                <input type="checkbox" checked>
                                                <span class="slider"></span>
                                            </label>
                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-4 col-6">
                                            <label class="switch  s-outline  s-outline-secondary  mb-4 mr-2">
                                                <input type="checkbox" checked>
                                                <span class="slider"></span>
                                            </label>
                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-4 col-6">
                                            <label class="switch  s-outline  s-outline-info  mb-4 mr-2">
                                                <input type="checkbox" checked>
                                                <span class="slider"></span>
                                            </label>
                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-4 col-6">
                                            <label class="switch  s-outline  s-outline-dark  mb-4 mr-2">
                                                <input type="checkbox" checked>
                                                <span class="slider"></span>
                                            </label>
                                        </div>

                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;label class="switch  s-outline  s-outline-default  mb-4 mr-2"&gt;
    &lt;input type="checkbox" checked&gt;
    &lt;span class="slider"&gt;&lt;/span&gt;
&lt;/label&gt;
</pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Rounded</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area text-center">
                                    <div class="row">
                                        
                                        <div class="col-lg-3 col-md-3 col-sm-4 col-6">
                                            <label class="switch s-outline s-outline-default  mb-4 mr-2">
                                                <input type="checkbox" checked>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-4 col-6">
                                            <label class="switch s-outline s-outline-primary  mb-4 mr-2">
                                                <input type="checkbox" checked>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-4 col-6">
                                            <label class="switch s-outline s-outline-success  mb-4 mr-2">
                                                <input type="checkbox" checked>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-4 col-6">
                                            <label class="switch s-outline s-outline-warning  mb-4 mr-2">
                                                <input type="checkbox" checked>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-4 col-6">
                                            <label class="switch s-outline s-outline-danger  mb-4 mr-2">
                                                <input type="checkbox" checked>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-4 col-6">
                                            <label class="switch s-outline s-outline-secondary  mb-4 mr-2">
                                                <input type="checkbox" checked>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-4 col-6">
                                            <label class="switch s-outline s-outline-info  mb-4 mr-2">
                                                <input type="checkbox" checked>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-4 col-6">
                                            <label class="switch s-outline s-outline-dark  mb-4 mr-2">
                                                <input type="checkbox" checked>
                                                <span class="slider round"></span>
                                            </label>
                                        </div>

                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;label class="switch s-outline s-outline-default  mb-4 mr-2"&gt;
    &lt;input type="checkbox" checked&gt;
    &lt;span class="slider round"&gt;&lt;/span&gt;
&lt;/label&gt;
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