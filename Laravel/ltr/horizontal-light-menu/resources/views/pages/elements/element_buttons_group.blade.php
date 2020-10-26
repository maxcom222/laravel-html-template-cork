@extends('layouts.app')

@section('content')

            <div class="container">

                <div class="container">

                    <div id="navSection" data-spy="affix" class="nav sidenav">
                        <div class="sidenav-content">
                            <a href="#btnGroupHorizontal" class="active nav-link">Horizontal</a>
                            <a href="#btnGroupInput-group" class="nav-link">Input Group</a>
                            <a href="#btnGroupVertical" class="nav-link">Vertical</a>
                        </div>
                    </div>

                    <div class="row layout-top-spacing">
                        <div id="btnGroupHorizontal" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header"> 
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Horizontal</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area text-center">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-dark">Left</button>
                                        <button type="button" class="btn btn-dark">Middle</button>
                                        <button type="button" class="btn btn-dark">Right</button>
                                    </div>

                                    <div class="code-section-container show-code">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div class="btn-group" role="group" aria-label="Basic example"&gt;
    &lt;button type="button" class="btn btn-dark"&gt;Left&lt;/button&gt;
    &lt;button type="button" class="btn btn-dark"&gt;Middle&lt;/button&gt;
    &lt;button type="button" class="btn btn-dark"&gt;Right&lt;/button&gt;
&lt;/div&gt;
</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div id="btnGroupInput-group" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header"> 
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4> Input Group </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area text-center split-buttons">

                                    <div class="btn-toolbar justify-content-between mr-2" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group mb-2" role="group" aria-label="First group">
                                            <button type="button" class="btn btn-dark">1</button>
                                            <button type="button" class="btn btn-dark">2</button>
                                            <button type="button" class="btn btn-dark">3</button>
                                            <button type="button" class="btn btn-dark">4</button>
                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text" id="btnGroupAddon2">@</div>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Input group example" aria-label="Input group example" aria-describedby="btnGroupAddon2">
                                        </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div class="btn-toolbar justify-content-between mr-2" role="toolbar" aria-label="Toolbar with button groups"&gt;
    &lt;div class="btn-group mb-2" role="group" aria-label="First group"&gt;
        &lt;button type="button" class="btn btn-dark"&gt;1&lt;/button&gt;
        &lt;button type="button" class="btn btn-dark"&gt;2&lt;/button&gt;
        &lt;button type="button" class="btn btn-dark"&gt;3&lt;/button&gt;
        &lt;button type="button" class="btn btn-dark"&gt;4&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class="input-group mb-2"&gt;
        &lt;div class="input-group-prepend"&gt;
            &lt;div class="input-group-text" id="btnGroupAddon2"&gt;@&lt;/div&gt;
        &lt;/div&gt;
        &lt;input type="text" class="form-control" placeholder="Input group example" aria-label="Input group example" aria-describedby="btnGroupAddon2"&gt;
    &lt;/div&gt;
&lt;/div&gt;

</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        
                    </div>

                    <div class="row layout-top-spacing">
                        <div id="btnGroupVertical" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header"> 
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4> Vertical </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area text-center">
                                    <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                                        <button type="button" class="btn btn-dark">Button</button>
                                        <div class="btn-group" role="group">
                                          <button id="btnGroupVerticalDrop1" type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Dropdown <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                          </button>
                                          <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                            <a class="dropdown-item" href="#">Dropdown link</a>
                                            <a class="dropdown-item" href="#">Dropdown link</a>
                                          </div>
                                        </div>
                                        <button type="button" class="btn btn-dark">Button</button>
                                        <button type="button" class="btn btn-dark">Button</button>
                                        <div class="btn-group" role="group">
                                          <button id="btnGroupVerticalDrop2" type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Dropdown <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                          </button>
                                          <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop2">
                                            <a class="dropdown-item" href="#">Dropdown link</a>
                                            <a class="dropdown-item" href="#">Dropdown link</a>
                                          </div>
                                        </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div class="btn-group-vertical" role="group" aria-label="Vertical button group"&gt;
    &lt;button type="button" class="btn btn-dark"&gt;Button&lt;/button&gt;
    &lt;div class="btn-group" role="group"&gt;
      &lt;button id="btnGroupVerticalDrop1" type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"&gt;
        Dropdown &lt;svg&gt; ... &lt;/svg&gt;
      &lt;/button&gt;
      &lt;div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1"&gt;
        &lt;a class="dropdown-item" href="#"&gt;Dropdown link&lt;/a&gt;
        &lt;a class="dropdown-item" href="#"&gt;Dropdown link&lt;/a&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;button type="button" class="btn btn-dark"&gt;Button&lt;/button&gt;
    &lt;button type="button" class="btn btn-dark"&gt;Button&lt;/button&gt;
    &lt;div class="btn-group" role="group"&gt;
      &lt;button id="btnGroupVerticalDrop2" type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"&gt;
        Dropdown &lt;svg&gt; ... &lt;/svg&gt;
      &lt;/button&gt;
      &lt;div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop2"&gt;
        &lt;a class="dropdown-item" href="#"&gt;Dropdown link&lt;/a&gt;
        &lt;a class="dropdown-item" href="#"&gt;Dropdown link&lt;/a&gt;
      &lt;/div&gt;
    &lt;/div&gt;
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