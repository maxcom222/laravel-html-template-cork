@extends('layouts.app')

@section('content')
            <div class="container">

                <div class="container">

                    <div id="navSection" data-spy="affix" class="nav sidenav">
                        <div class="sidenav-content">
                            <a href="#paginationDefault" class="active nav-link">Default</a>
                            <a href="#paginationSolid" class="nav-link">Solid</a>
                            <a href="#paginationIcons" class="nav-link">Icons</a>
                            <a href="#paginationNo-spacing" class="nav-link">No Spacing</a>
                            <a href="#paginationCustom" class="nav-link">Custom</a>
                        </div>
                    </div>

                    <div class="row layout-top-spacing" id="cancel-row">

                        <div id="paginationDefault" class="col-xl-12 col-sm-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Default</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area text-center">

                                    <div class="paginating-container pagination-default">

                                        <ul class="pagination">
                                            <li class="prev"><a href="javascript:void(0);">Prev</a></li>
                                            <li><a href="javascript:void(0);">1</a></li>
                                            <li class="active"><a href="javascript:void(0);">2</a></li>
                                            <li><a href="javascript:void(0);">3</a></li>
                                            <li class="next"><a href="javascript:void(0);">Next</a></li>
                                        </ul>

                                    </div>


                                    <div class="code-section-container show-code">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div class="paginating-container pagination-default"&gt;
    &lt;ul class="pagination"&gt;
        &lt;li class="prev"&gt;&lt;a href="javascript:void(0);"&gt;Prev&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="javascript:void(0);"&gt;1&lt;/a&gt;&lt;/li&gt;
        &lt;li class="active"&gt;&lt;a href="javascript:void(0);"&gt;2&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="javascript:void(0);"&gt;3&lt;/a&gt;&lt;/li&gt;
        &lt;li class="next"&gt;&lt;a href="javascript:void(0);"&gt;Next&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>


                        <div id="paginationSolid" class="col-xl-12 col-sm-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Solid</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area text-center">

                                    <div class="paginating-container pagination-solid">

                                        <ul class="pagination">
                                            <li class="prev"><a href="javascript:void(0);">Prev</a></li>
                                            <li><a href="javascript:void(0);">1</a></li>
                                            <li class="active"><a href="javascript:void(0);">2</a></li>
                                            <li><a href="javascript:void(0);">3</a></li>
                                            <li class="next"><a href="javascript:void(0);">Next</a></li>
                                        </ul>

                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div class="paginating-container pagination-solid"&gt;
    &lt;ul class="pagination"&gt;
        &lt;li class="prev"&gt;&lt;a href="javascript:void(0);"&gt;Prev&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="javascript:void(0);"&gt;1&lt;/a&gt;&lt;/li&gt;
        &lt;li class="active"&gt;&lt;a href="javascript:void(0);"&gt;2&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="javascript:void(0);"&gt;3&lt;/a&gt;&lt;/li&gt;
        &lt;li class="next"&gt;&lt;a href="javascript:void(0);"&gt;Next&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="paginationIcons" class="col-xl-12 col-sm-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>With Icons</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area text-center">

                                    <div class="paginating-container pagination-solid">

                                        <ul class="pagination">
                                            <li  class="prev"><a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg></a></li>
                                            <li><a href="javascript:void(0);">1</a></li>
                                            <li class="active"><a href="javascript:void(0);">2</a></li>
                                            <li><a href="javascript:void(0);">3</a></li>
                                            <li class="next"><a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></a></li>
                                        </ul>

                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div class="paginating-container pagination-solid"&gt;
    &lt;ul class="pagination"&gt;
        &lt;li  class="prev"&gt;&lt;a href="javascript:void(0);"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="javascript:void(0);"&gt;1&lt;/a&gt;&lt;/li&gt;
        &lt;li class="active"&gt;&lt;a href="javascript:void(0);"&gt;2&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="javascript:void(0);"&gt;3&lt;/a&gt;&lt;/li&gt;
        &lt;li class="next"&gt;&lt;a href="javascript:void(0);"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>


                        <div id="paginationNo-spacing" class="col-xl-12 col-sm-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>No Spacing</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area text-center">

                                    <div class="pagination-no_spacing">

                                        <ul class="pagination">
                                            <li><a href="javascript:void(0);" class="prev"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg></a></li>
                                            <li><a href="javascript:void(0);">1</a></li>
                                            <li><a href="javascript:void(0);" class="active">2</a></li>
                                            <li><a href="javascript:void(0);">3</a></li>
                                            <li><a href="javascript:void(0);" class="next"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></a></li>
                                        </ul>

                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div class="pagination-no_spacing"&gt;
    &lt;ul class="pagination"&gt;
        &lt;li&gt;&lt;a href="javascript:void(0);" class="prev"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="javascript:void(0);"&gt;1&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="javascript:void(0);" class="active"&gt;2&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="javascript:void(0);"&gt;3&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="javascript:void(0);" class="next"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="paginationCustom" class="col-xl-12 col-sm-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Custom Solid</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area text-center">

                                    <div class="pagination-custom_solid">
                                        
                                        <a href="javascript:void(0);" class="prev"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg></a>

                                        <ul class="pagination">
                                            <li><a href="javascript:void(0);">1</a></li>
                                            <li><a href="javascript:void(0);" class="active">2</a></li>
                                            <li><a href="javascript:void(0);">3</a></li>
                                        </ul>

                                        <a href="javascript:void(0);" class="next"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></a>

                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div class="pagination-custom_solid"&gt;                                        
    &lt;a href="javascript:void(0);" class="prev"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/a&gt;
    &lt;ul class="pagination"&gt;
        &lt;li&gt;&lt;a href="javascript:void(0);"&gt;1&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="javascript:void(0);" class="active"&gt;2&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="javascript:void(0);"&gt;3&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
    &lt;a href="javascript:void(0);" class="next"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/a&gt;
&lt;/div&gt;</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>


                        <div class="col-xl-12 col-sm-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Custom Outline</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area text-center">

                                    <div class="pagination-custom_outline">

                                        <a href="javascript:void(0);" class="prev"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg></a>

                                        <ul class="pagination">
                                            <li><a href="javascript:void(0);">1</a></li>
                                            <li class="active"><a href="javascript:void(0);">2</a></li>
                                            <li><a href="javascript:void(0);">3</a></li>
                                        </ul>

                                        <a href="javascript:void(0);" class="next"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></a>

                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div class="pagination-custom_outline"&gt;
    &lt;a href="javascript:void(0);" class="prev"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/a&gt;
    &lt;ul class="pagination"&gt;
        &lt;li&gt;&lt;a href="javascript:void(0);"&gt;1&lt;/a&gt;&lt;/li&gt;
        &lt;li class="active"&gt;&lt;a href="javascript:void(0);"&gt;2&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="javascript:void(0);"&gt;3&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
    &lt;a href="javascript:void(0);" class="next"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/a&gt;
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