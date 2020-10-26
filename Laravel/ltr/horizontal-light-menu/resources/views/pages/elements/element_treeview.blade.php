@extends('layouts.app')

@section('content')

            <div class="container">

                <div class="container">

                    <div id="navSection" data-spy="affix" class="nav sidenav">
                        <div class="sidenav-content">
                            <a href="#treeviewAnimated" class="active nav-link">Animated</a>
                            <a href="#treeviewBasic" class="nav-link">Basic</a>
                        </div>
                    </div>

                    <div class="row layout-top-spacing">

                        <div id="treeviewAnimated" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Animated</h4>
                                        </div>
                                    </div>
                                </div>                            
                                <div class="widget-content widget-content-area">
                                    <ul class="file-tree">
                                        <li class="file-tree-folder">CSS
                                            <ul>
                                                <li>style.css</li>
                                            </ul>
                                        </li>
                                        <li class="file-tree-folder empty">Images</li>
                                        <li class="file-tree-folder">HTML
                                            <ul>
                                                <li class="file-tree-folder">PAGES
                                                    <ul>
                                                        <li>file name </li>
                                                        <li>file name </li>
                                                        <li>file name </li>
                                                    </ul>
                                                </li>
                                                <li>file name </li>
                                                <li>file name </li>
                                            </ul>
                                        </li>
                                        <li>index.html </li>
                                        <li>components.html </li>
                                    </ul>

                                    <div class="code-section-container show-code">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
    &lt;ul class="file-tree"&gt;
        &lt;li class="file-tree-folder"&gt;CSS
            &lt;ul&gt;
                &lt;li&gt;style.css&lt;/li&gt;
            &lt;/ul&gt;
        &lt;/li&gt;
        &lt;li class="file-tree-folder empty"&gt;Images&lt;/li&gt;
        &lt;li class="file-tree-folder"&gt;HTML
            &lt;ul&gt;
                &lt;li class="file-tree-folder"&gt;PAGES
                    &lt;ul&gt;
                        &lt;li&gt;file name &lt;/li&gt;
                        &lt;li&gt;file name &lt;/li&gt;
                        &lt;li&gt;file name &lt;/li&gt;
                    &lt;/ul&gt;
                &lt;/li&gt;
                &lt;li&gt;file name &lt;/li&gt;
                &lt;li&gt;file name &lt;/li&gt;
            &lt;/ul&gt;
        &lt;/li&gt;
        &lt;li&gt;index.html &lt;/li&gt;
        &lt;li&gt;components.html &lt;/li&gt;
    &lt;/ul&gt;</pre>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="treeviewBasic" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Basic</h4>
                                        </div>
                                    </div>
                                </div>                            
                                <div class="widget-content widget-content-area">
                                    <ul id="myUL">
                                        <li>
                                            <span class="caret">Parent Node</span>
                                            <ul class="nested active">
                                                <li>
                                                    <span class="caret caret-down">img</span>
                                                    <ul class="nested">
                                                    </ul>
                                                </li>
                                                <li>
                                                    <span class="caret caret-down">css</span>
                                                    <ul class="nested">
                                                        <li>style.css</li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <span class="caret caret-down">js</span>
                                                    <ul class="nested">
                                                        <li>script.js</li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <span>index.html</span>
                                                </li>
                                            </ul>
                                        </li>
                                   </ul>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                       <div class="code-section text-left">
                                            <pre>
&lt;ul id="myUL"&gt;
    &lt;li&gt;
        &lt;span class="caret"&gt;Parent Node&lt;/span&gt;
        &lt;ul class="nested active"&gt;
            &lt;li&gt;
                &lt;span class="caret caret-down"&gt;img&lt;/span&gt;
                &lt;ul class="nested"&gt;
                &lt;/ul&gt;
            &lt;/li&gt;
            &lt;li&gt;
                &lt;span class="caret caret-down"&gt;css&lt;/span&gt;
                &lt;ul class="nested"&gt;
                    &lt;li&gt;style.css&lt;/li&gt;
                &lt;/ul&gt;
            &lt;/li&gt;
            &lt;li&gt;
                &lt;span class="caret caret-down"&gt;js&lt;/span&gt;
                &lt;ul class="nested"&gt;
                    &lt;li&gt;script.js&lt;/li&gt;
                &lt;/ul&gt;
            &lt;/li&gt;
            &lt;li&gt;
                &lt;li&gt;index.html&lt;/li&gt;
            &lt;/li&gt;
        &lt;/ul&gt;
    &lt;/li&gt;
&lt;/ul&gt;</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

@endsection