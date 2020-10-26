@extends('layouts.app')

@section('content')
            <div class="container">

                <div class="container">

                    <div id="navSection" data-spy="affix" class="nav sidenav">
                        <div class="sidenav-content">
                            <a href="#dropdownBasic" class="active nav-link">Basic</a>
                            <a href="#dropdownDirections" class="nav-link">Directions</a>
                            <a href="#dropdownSizes" class="nav-link">Sizes</a>
                            <a href="#dropdownGrouped" class="nav-link">Grouped</a>
                            <a href="#dropdownSplit" class="nav-link">Split</a>
                            <a href="#dropdownCustom" class="nav-link">Custom</a>
                        </div>
                    </div>

                    <div class="row layout-top-spacing">
                        <div id="dropdownBasic" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header"> 
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4> Dropdown </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area text-center split-buttons">
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                            <div class="row">
                                                
                                                <div class="col-lg-6">
                                                    <p class="mb-4"><code>.btn-primary</code></p>
                                                    <div class="btn-group mb-4 mr-2" role="group">
                                                        <button id="btndefault" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
                                                        <div class="dropdown-menu" aria-labelledby="btndefault">
                                                            <a href="javascript:void(0);" class="dropdown-item"><i class="flaticon-home-fill-1 mr-1"></i>Action</a>
                                                            <a href="javascript:void(0);" class="dropdown-item"><i class="flaticon-gear-fill mr-1"></i>Another action</a>
                                                            <a href="javascript:void(0);" class="dropdown-item"><i class="flaticon-bell-fill-2 mr-1"></i>Something else here</a>
                                                            <a href="javascript:void(0);" class="dropdown-item"><i class="flaticon-dots mr-1"></i>Separated link</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <p class="mb-4"><code>.btn-outline-primary</code></p>
                                                    <div class="btn-group mb-4 mr-2" role="group">
                                                        <button id="btnOutline" type="button" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
                                                        <div class="dropdown-menu" aria-labelledby="btnOutline">
                                                            <a href="javascript:void(0);" class="dropdown-item"><i class="flaticon-home-fill-1 mr-1"></i>Action</a>
                                                            <a href="javascript:void(0);" class="dropdown-item"><i class="flaticon-gear-fill mr-1"></i>Another action</a>
                                                            <a href="javascript:void(0);" class="dropdown-item"><i class="flaticon-bell-fill-2 mr-1"></i>Something else here</a>
                                                            <a href="javascript:void(0);" class="dropdown-item"><i class="flaticon-dots mr-1"></i>Separated link</a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                    <div class="code-section-container show-code">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div class="n-chk"&gt;
&lt;label class="new-control new-radio square-radio new-radio-text radio-primary"&gt;
&lt;input type="radio" class="new-control-input" name="custom-radio-6"&gt;
&lt;span class="new-control-indicator"&gt;&lt;/span&gt;&lt;span class="new-radio-content"&gt;Primary&lt;/span&gt;
&lt;/label&gt;
&lt;/div&gt;
</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="dropdownDirections" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header"> 
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Dropup </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area text-center split-buttons">
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                            <p class="mb-4">Use <code>.dropup</code> class to open dropdown menu in upward direction.</p>

                                            <div class="row">
                                                
                                                <div class="col-lg-6">
                                                    <div class="btn-group dropup mb-4 mr-2" role="group">
                                                        <button id="btnDropUp" type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Up <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up"><polyline points="18 15 12 9 6 15"></polyline></svg></button>
                                                        <div class="dropdown-menu" aria-labelledby="btnDropUp">
                                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                                            <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                                            <a href="javascript:void(0);" class="dropdown-item">Something else here</a>
                                                            <div class="divider dropdown-item"></div>
                                                            <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="btn-group dropup mb-4 mr-2" role="group">
                                                        <button id="btnDropUpOutline" type="button" class="btn btn-outline-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Up <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up"><polyline points="18 15 12 9 6 15"></polyline></svg></button>
                                                        <div class="dropdown-menu" aria-labelledby="btnDropUpOutline">
                                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                                            <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                                            <a href="javascript:void(0);" class="dropdown-item">Something else here</a>
                                                            <div class="divider dropdown-item"></div>
                                                            <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header"> 
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Dropright </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area text-center split-buttons">
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                            <p class="mb-4">Use <code>.dropright</code> class to open dropdown menu in right direction.</p>

                                            <div class="row">
                                                
                                                <div class="col-lg-6">
                                                    <div class="btn-group dropright mb-4 mr-2" role="group">
                                                        <button id="btnDropRight" type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Right <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></button>
                                                        <div class="dropdown-menu" aria-labelledby="btnDropRight">
                                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                                            <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                                            <a href="javascript:void(0);" class="dropdown-item">Something else here</a>
                                                            <div class="divider dropdown-item"></div>
                                                            <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="btn-group dropright mb-4 mr-2" role="group">
                                                        <button id="btnDropRightOutline" type="button" class="btn btn-outline-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Right <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></button>
                                                        <div class="dropdown-menu" aria-labelledby="btnDropRightOutline">
                                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                                            <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                                            <a href="javascript:void(0);" class="dropdown-item">Something else here</a>
                                                            <div class="divider dropdown-item"></div>
                                                            <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header"> 
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Dropleft </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area text-center split-buttons">
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                            <p class="mb-4">Use <code>.dropleft</code> class to open dropdown menu in left direction.</p>

                                            <div class="row">
                                                
                                                <div class="col-lg-6">
                                                    <div class="btn-group dropleft mb-4 mr-2" role="group">
                                                        <button id="btnDropLeft" type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg> Left</button>
                                                        <div class="dropdown-menu" aria-labelledby="btnDropLeft">
                                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                                            <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                                            <a href="javascript:void(0);" class="dropdown-item">Something else here</a>
                                                            <div class="divider dropdown-item"></div>
                                                            <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="btn-group dropleft mb-4 mr-2" role="group">
                                                        <button id="btnDropLeftOutline" type="button" class="btn btn-outline-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg> Left</button>
                                                        <div class="dropdown-menu" aria-labelledby="btnDropLeftOutline">
                                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                                            <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                                            <a href="javascript:void(0);" class="dropdown-item">Something else here</a>
                                                            <div class="divider dropdown-item"></div>
                                                            <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="dropdownSizes" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header"> 
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Small Button </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area text-center split-buttons">
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                            <p class="mb-4">Use <code>.btn-sm</code> class to make small button dropdown menu.</p>

                                            <div class="row">
                                                
                                                <div class="col-lg-6">
                                                    <div class="btn-group mb-4 mr-2">
                                                        <button class="btn btn-dark btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Small button <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                                            <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                                            <a href="javascript:void(0);" class="dropdown-item">Something else here</a>
                                                            <div class="divider dropdown-item"></div>
                                                            <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="btn-group mb-4 mr-2">
                                                        <button class="btn btn-outline-dark btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Small button <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                                            <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                                            <a href="javascript:void(0);" class="dropdown-item">Something else here</a>
                                                            <div class="divider dropdown-item"></div>
                                                            <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header"> 
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Large Button </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area text-center split-buttons">
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                            <p class="mb-4">Use <code>.btn-lg</code> class to make large button dropdown menu.</p>

                                            <div class="row">
                                                
                                                <div class="col-lg-6">
                                                    <div class="btn-group mb-4 mr-2 btn-group-lg">
                                                        <button class="btn btn-success btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Large button <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                                            <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                                            <a href="javascript:void(0);" class="dropdown-item">Something else here</a>
                                                            <div class="divider dropdown-item"></div>
                                                            <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="btn-group mb-4 mr-2 btn-group-lg">
                                                        <button class="btn btn-outline-success btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Large button <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                                            <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                                            <a href="javascript:void(0);" class="dropdown-item">Something else here</a>
                                                            <div class="divider dropdown-item"></div>
                                                            <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="dropdownGrouped" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header"> 
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Grouped Dropdown Buttons</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area text-center split-buttons">
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                            <p class="mb-4">Use <code>.btn-group</code> class to make group buttons.</p>

                                            <div class="row">

                                                <div class="col-lg-6">
                                                    <div class="btn-group  mb-4 mr-2" role="group" aria-label="Button group with nested dropdown">
                                                        <button type="button" class="btn btn-secondary">1</button>
                                                        <button type="button" class="btn btn-secondary">2</button>
                                                        <div class="btn-group" role="group">
                                                            <button id="btnGroupDefault" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Dropdown <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                                            </button>
                                                            <div class="dropdown-menu" aria-labelledby="btnGroupDefault">
                                                                <a class="dropdown-item" href="javascript:void(0);">Dropdown link</a>
                                                                <a class="dropdown-item" href="javascript:void(0);">Dropdown link</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="btn-group  mb-4 mr-2" role="group" aria-label="Button group with nested dropdown">
                                                        <button type="button" class="btn btn-outline-secondary">1</button>
                                                        <button type="button" class="btn btn-outline-secondary">2</button>
                                                        <div class="btn-group" role="group">
                                                            <button id="btnGroupOutline" type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Dropdown <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                                            </button>
                                                            <div class="dropdown-menu" aria-labelledby="btnGroupOutline">
                                                                <a class="dropdown-item" href="javascript:void(0);">Dropdown link</a>
                                                                <a class="dropdown-item" href="javascript:void(0);">Dropdown link</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="code-section-container">
                                                
                                                <button class="btn toggle-code-snippet"><span>Code</span></button>

                                                <div class="code-section text-left">
                                                    <pre>
&lt;div class="n-chk"&gt;
&lt;label class="new-control new-radio square-radio new-radio-text radio-primary"&gt;
&lt;input type="radio" class="new-control-input" name="custom-radio-6"&gt;
&lt;span class="new-control-indicator"&gt;&lt;/span&gt;&lt;span class="new-radio-content"&gt;Primary&lt;/span&gt;
&lt;/label&gt;
&lt;/div&gt;
</pre>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="dropdownSplit" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header"> 
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4> Split </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area text-center split-buttons">
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                            <div class="row">
                                                
                                                <div class="col-lg-6">
                                                    <p class="mb-4"><code>.btn-primary</code></p>
                                                    <div class="btn-group  mb-4 mr-2">
                                                        <button type="button" class="btn btn-primary">Action</button>
                                                        <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                            <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                                                            <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <p class="mb-4"><code>.btn-outline-primary</code></p>
                                                    <div class="btn-group  mb-4 mr-2">
                                                        <button type="button" class="btn btn-outline-primary">Action</button>
                                                        <button type="button" class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                            <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                                                            <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div class="n-chk"&gt;
&lt;label class="new-control new-radio square-radio new-radio-text radio-primary"&gt;
&lt;input type="radio" class="new-control-input" name="custom-radio-6"&gt;
&lt;span class="new-control-indicator"&gt;&lt;/span&gt;&lt;span class="new-radio-content"&gt;Primary&lt;/span&gt;
&lt;/label&gt;
&lt;/div&gt;
</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="dropdownCustom" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Custom Dropdown</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area text-center">
                                    <p class="mb-5">Use <code>.custom-dropdown</code> class on <code>div</code> tag of a dropdown .</p>

                                    <div class="row">
                                       <div class="col-md-3 col-sm-3 col-3 mb-5">
                                           <div class="dropdown dropup custom-dropdown">
                                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                </a>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink-1">
                                                    <a class="dropdown-item" href="javascript:void(0);">Account</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Profile</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Settings</a>
                                                </div>
                                            </div>
                                       </div> 
                                       <div class="col-md-3 col-sm-3 col-3 mb-5">
                                            <div class="dropdown  custom-dropdown">
                                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                                </a>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink-2">
                                                    <a class="dropdown-item" href="javascript:void(0);">Account</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Profile</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Settings</a>
                                                </div>
                                            </div>
                                       </div> 
                                       <div class="col-md-3 col-sm-3 col-3 mb-5">
                                            <div class="dropdown dropup  custom-dropdown-icon">
                                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink-3">
                                                    <a class="dropdown-item" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> Profile</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg> Notification</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg> Settings</a>
                                                </div>
                                            </div>      
                                       </div> 
                                       <div class="col-md-3 col-sm-3 col-3 mb-5">
                                            <div class="dropdown  custom-dropdown-icon">
                                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink-4">
                                                    <a class="dropdown-item" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> Profile</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg> Notification</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg> Settings</a>
                                                </div>
                                            </div>
                                       </div> 
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div class="n-chk"&gt;
&lt;label class="new-control new-radio square-radio new-radio-text radio-primary"&gt;
&lt;input type="radio" class="new-control-input" name="custom-radio-6"&gt;
&lt;span class="new-control-indicator"&gt;&lt;/span&gt;&lt;span class="new-radio-content"&gt;Primary&lt;/span&gt;
&lt;/label&gt;
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