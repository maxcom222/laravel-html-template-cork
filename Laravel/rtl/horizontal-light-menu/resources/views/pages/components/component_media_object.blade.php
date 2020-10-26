@extends('layouts.app')

@section('content')

            <div class="container">

                <div class="container">

                    <div id="navSection" data-spy="affix" class="nav  sidenav">
                        <div class="sidenav-content">
                            <a href="#mediaObjectSimple" class="active nav-link">Simple</a>
                            <a href="#mediaObjectOrder" class="nav-link">Order</a>
                            <a href="#mediaObjectAlignment" class="nav-link">Alignment</a>
                            <a href="#mediaObjectList" class="nav-link">List</a>
                            <a href="#mediaObjectNesting" class="nav-link">Nesting</a>
                            <a href="#mediaObjectNotationText" class="nav-link">Notation Text</a>
                            <a href="#mediaObjectNotationIcon" class="nav-link">Notation Icon</a>
                            <a href="#mediaObjectBadge" class="nav-link">Badge</a>
                            <a href="#mediaObjectDropdown" class="nav-link">Dropdown</a>
                            <a href="#mediaObjectIcon" class="nav-link">Labels</a>
                            <a href="#mediaObjectCheckbox" class="nav-link">Checkbox</a>
                            <a href="#mediaObjectRadio" class="nav-link">Radio</a>
                        </div>
                    </div>
                
                    <div class="row layout-top-spacing">
                        <div id="mediaObjectSimple" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Simple</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">

                                    <div class="media">
                                        <img class="rounded" src="{{asset('storage/img/90x90.jpg')}}" alt="pic1">
                                        <div class="media-body">
                                            <h4 class="media-heading">Heading</h4>
                                            <p class="media-text">Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu, gravida neque.</p>
                                        </div>
                                    </div>

                                    <div class="code-section-container show-code">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                                <pre>
&lt;!-- Simple --&gt;
&lt;div class="media"&gt;
    &lt;img class="rounded" src="{{asset('storage/img/90x90.jpg')}}" alt="pic1"&gt;
    &lt;div class="media-body"&gt;
        &lt;h4 class="media-heading"&gt;Heading&lt;/h4&gt;
        &lt;p class="media-text"&gt;Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu, gravida neque.&lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>                    

                        <div id="mediaObjectOrder" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Order</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">

                                    <div class="media">
                                        <div class="media-body">
                                            <h4 class="media-heading">Heading</h4>
                                            <p class="media-text">
                                                Sed dapibus nulla elementum, rutrum neque eu, gravida neque. Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus.
                                            </p>
                                        </div>
                                        <img class="rounded" src="{{asset('storage/img/90x90.jpg')}}" alt="pic1">
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                                <pre>
&lt;!-- Order --&gt;
&lt;div class="media"&gt;
    &lt;div class="media-body"&gt;
        &lt;h4 class="media-heading"&gt;Heading&lt;/h4&gt;
        &lt;p class="media-text"&gt;
            Sed dapibus nulla elementum, rutrum neque eu, gravida neque. Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus.
        &lt;/p&gt;
    &lt;/div&gt;
    &lt;img class="rounded" src="{{asset('storage/img/90x90.jpg')}}" alt="pic1"&gt;
&lt;/div&gt;</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div id="mediaObjectAlignment" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Top-aligned media</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="media">
                                        <img class="rounded" src="{{asset('storage/img/90x90.jpg')}}" alt="pic1">
                                        <div class="media-body">
                                            <h4 class="media-heading">Heading</h4>
                                            <p class="media-text"> Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus.Sed dapibus nulla elementum, rutrum neque eu, gravida neque. Pellentesque pellentesque sed magna vitae porttitor. Integer quis urna eget ligula commodo venenatis in et ligula.</p>
                                        </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                                <pre>
&lt;!-- Top Aligned Media --&gt;
&lt;div class="media"&gt;
    &lt;img class="rounded" src="{{asset('storage/img/90x90.jpg')}}" alt="pic1"&gt;
    &lt;div class="media-body"&gt;
        &lt;h4 class="media-heading"&gt;Heading&lt;/h4&gt;
        &lt;p class="media-text"&gt; Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus.Sed dapibus nulla elementum, rutrum neque eu, gravida neque. Pellentesque pellentesque sed magna vitae porttitor. Integer quis urna eget ligula commodo venenatis in et ligula.&lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;</pre>
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
                                            <h4>Center-aligned media</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="media">
                                        <img class="align-self-center rounded" src="{{asset('storage/img/90x90.jpg')}}" alt="pic1">
                                        <div class="media-body">
                                            <h4 class="media-heading">Heading</h4>
                                            <p class="media-text">Pellentesque pellentesque sed magna vitae porttitor. Integer quis urna eget ligula commodo venenatis in et ligula. Integer eget lorem sodales, sodales dui vel, mattis erat. Sed dapibus nulla elementum, rutrum neque eu, gravida neque. Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra.</p>
                                        </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                                <pre>
&lt;!-- Center Aligned Media --&gt;
&lt;div class="media"&gt;
    &lt;img class="align-self-center rounded" src="{{asset('storage/img/90x90.jpg')}}" alt="pic1"&gt;
    &lt;div class="media-body"&gt;
        &lt;h4 class="media-heading"&gt;Heading&lt;/h4&gt;
        &lt;p class="media-text"&gt;Pellentesque pellentesque sed magna vitae porttitor. Integer quis urna eget ligula commodo venenatis in et ligula. Integer eget lorem sodales, sodales dui vel, mattis erat. Sed dapibus nulla elementum, rutrum neque eu, gravida neque. Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra.&lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Bottom-aligned media</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">

                                    <div class="media">
                                        <img class="align-self-end rounded" src="{{asset('storage/img/90x90.jpg')}}" alt="pic1">
                                        <div class="media-body">
                                            <h4 class="media-heading">Heading</h4>
                                            <p class="media-text">Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu, gravida neque. Pellentesque pellentesque sed magna vitae porttitor. Integer quis urna eget ligula commodo venenatis in et ligula. Integer eget lorem sodales, sodales dui vel, mattis erat. Fusce condimentum cursus mauris et ornare.</p>
                                        </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                                <pre>
&lt;!-- Bottom Aligned Media --&gt;
&lt;div class="media"&gt;
    &lt;img class="align-self-end rounded" src="{{asset('storage/img/90x90.jpg')}}" alt="pic1"&gt;
    &lt;div class="media-body"&gt;
        &lt;h4 class="media-heading"&gt;Heading&lt;/h4&gt;
        &lt;p class="media-text"&gt;Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu, gravida neque. Pellentesque pellentesque sed magna vitae porttitor. Integer quis urna eget ligula commodo venenatis in et ligula. Integer eget lorem sodales, sodales dui vel, mattis erat. Fusce condimentum cursus mauris et ornare.&lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;</pre>
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
                                            <h4>Right Aligned</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area media-right-aligned">

                                    <div class="media">
                                        <div class="media-body text-right">
                                            <h4 class="media-heading">Heading</h4>
                                            <p class="media-text">Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu, gravida neque.</p>
                                        </div>
                                        <img class="rounded" src="{{asset('storage/img/90x90.jpg')}}" alt="pic1">
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                                <pre>
&lt;!-- Right Aligned --&gt;
&lt;div class="media"&gt;
    &lt;div class="media-body text-right"&gt;
        &lt;h4 class="media-heading"&gt;Heading&lt;/h4&gt;
        &lt;p class="media-text"&gt;Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu, gravida neque.&lt;/p&gt;
    &lt;/div&gt;
    &lt;img class="rounded" src="{{asset('storage/img/90x90.jpg')}}" alt="pic1"&gt;
&lt;/div&gt;
</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div id="mediaObjectList" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Media list</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <ul class="list-unstyled">
                                        <li class="media">
                                            <img class="rounded" src="{{asset('storage/img/90x90.jpg')}}" alt="pic1">
                                            <div class="media-body">
                                                <h4 class="media-heading">Heading</h4>
                                                <p class="media-text">Sed dapibus nulla elementum, rutrum neque eu, gravida neque. Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus.</p>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <img class="rounded" src="{{asset('storage/img/90x90.jpg')}}" alt="pic1">
                                            <div class="media-body">
                                                <h4 class="media-heading">Heading</h4>
                                                <p class="media-text">Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu, gravida neque.</p>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <img class="rounded" src="{{asset('storage/img/90x90.jpg')}}" alt="pic1">
                                            <div class="media-body">
                                                <h4 class="media-heading">Heading</h4>
                                                <p class="media-text">Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu, gravida neque. Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra.</p>
                                            </div>
                                        </li>
                                    </ul>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                                <pre>
&lt;!-- Media List --&gt;
&lt;ul class="list-unstyled"&gt;
    &lt;li class="media"&gt;
        &lt;img class="rounded" src="{{asset('storage/img/90x90.jpg')}}" alt="pic1"&gt;
        &lt;div class="media-body"&gt;
            &lt;h4 class="media-heading"&gt;Heading&lt;/h4&gt;
            &lt;p class="media-text"&gt;Sed dapibus nulla elementum, rutrum neque eu, gravida neque. Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus.&lt;/p&gt;
        &lt;/div&gt;
    &lt;/li&gt;
    &lt;li class="media"&gt;
        &lt;img class="rounded" src="{{asset('storage/img/90x90.jpg')}}" alt="pic1"&gt;
        &lt;div class="media-body"&gt;
            &lt;h4 class="media-heading"&gt;Heading&lt;/h4&gt;
            &lt;p class="media-text"&gt;Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu, gravida neque.&lt;/p&gt;
        &lt;/div&gt;
    &lt;/li&gt;
    &lt;li class="media"&gt;
        &lt;img class="rounded" src="{{asset('storage/img/90x90.jpg')}}" alt="pic1"&gt;
        &lt;div class="media-body"&gt;
            &lt;h4 class="media-heading"&gt;Heading&lt;/h4&gt;
            &lt;p class="media-text"&gt;Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu, gravida neque. Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra.&lt;/p&gt;
        &lt;/div&gt;
    &lt;/li&gt;
&lt;/ul&gt;</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div id="mediaObjectNesting" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Nesting</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area nesting">

                                    <div class="media">
                                        <img class="meta-usr-img rounded" src="{{asset('storage/img/90x90.jpg')}}" alt="pic1">
                                        <div class="media-body">
                                            <h4 class="media-heading">Heading</h4>
                                            <p class="media-text">Sed dapibus nulla elementum, rutrum neque eu, gravida neque. Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus.</p>

                                            <div class="media">
                                                <a class="meta-usr-img" href="javascript:void(0);">
                                                    <img class="rounded" src="{{asset('storage/img/90x90.jpg')}}" alt="pic2">
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading">Heading</h4>
                                                    <p class="media-text">Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu, gravida neque. Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                                <pre>
&lt;!-- Nesting --&gt;
&lt;div class="media"&gt;
    &lt;img class="meta-usr-img rounded" src="{{asset('storage/img/90x90.jpg')}}" alt="pic1"&gt;
    &lt;div class="media-body"&gt;
        &lt;h4 class="media-heading"&gt;Heading&lt;/h4&gt;
        &lt;p class="media-text"&gt;Sed dapibus nulla elementum, rutrum neque eu, gravida neque. Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus.&lt;/p&gt;

        &lt;div class="media"&gt;
            &lt;a class="meta-usr-img" href="javascript:void(0);"&gt;
                &lt;img class="rounded" src="{{asset('storage/img/90x90.jpg')}}" alt="pic2"&gt;
            &lt;/a&gt;
            &lt;div class="media-body"&gt;
                &lt;h4 class="media-heading"&gt;Heading&lt;/h4&gt;
                &lt;p class="media-text"&gt;Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu, gravida neque. Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra.&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div id="mediaObjectNotationText" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Notation Text</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area notation-text">

                                    <div class="media">
                                        <img class="rounded" src="{{asset('storage/img/90x90.jpg')}}" alt="pic1">
                                        <div class="media-body">
                                            <h4 class="media-heading">Heading</h4>
                                            <p class="media-text">Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu, gravida neque.</p>
                                            <div class="media-notation">
                                                <a href="javascript:void(0);" class=""> Reply </a>
                                                <a href="javascript:void(0);" class=""> Edit </a>
                                                <a href="javascript:void(0);" class=""> Delete </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                                <pre>
&lt;!-- Notation Text --&gt;
&lt;div class="media"&gt;
    &lt;img class="rounded" src="{{asset('storage/img/90x90.jpg')}}" alt="pic1"&gt;
    &lt;div class="media-body"&gt;
        &lt;h4 class="media-heading"&gt;Heading&lt;/h4&gt;
        &lt;p class="media-text"&gt;Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu, gravida neque.&lt;/p&gt;
        &lt;div class="media-notation"&gt;
            &lt;a href="javascript:void(0);" class=""&gt; Reply &lt;/a&gt;
            &lt;a href="javascript:void(0);" class=""&gt; Edit &lt;/a&gt;
            &lt;a href="javascript:void(0);" class=""&gt; Delete &lt;/a&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div> 

                        <div id="mediaObjectNotationIcon" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Notation Text with Icon</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area notation-text-icon">

                                    <div class="media">
                                        <img class=" rounded" src="{{asset('storage/img/90x90.jpg')}}" alt="pic1">
                                        <div class="media-body">
                                            <h4 class="media-heading">Heading</h4>
                                            <p class="media-text">Sed dapibus nulla elementum, rutrum neque eu, gravida neque. Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus.</p>
                                            <div class="media-notation">
                                                <a href="javascript:void(0);" class=""><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg> Reply </a>
                                                <a href="javascript:void(0);" class=""><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg> Edit </a>
                                                <a href="javascript:void(0);" class=""><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg> Delete </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                                <pre>
&lt;!-- Notation Text with Icon --&gt;
&lt;div class="media"&gt;
    &lt;img class=" rounded" src="{{asset('storage/img/90x90.jpg')}}" alt="pic1"&gt;
    &lt;div class="media-body"&gt;
        &lt;h4 class="media-heading"&gt;Heading&lt;/h4&gt;
        &lt;p class="media-text"&gt;Sed dapibus nulla elementum, rutrum neque eu, gravida neque. Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus.&lt;/p&gt;
        &lt;div class="media-notation"&gt;
            &lt;a href="javascript:void(0);" class=""&gt;&lt;svg&gt; ... &lt;/svg&gt; Reply &lt;/a&gt;
            &lt;a href="javascript:void(0);" class=""&gt;&lt;svg&gt; ... &lt;/svg&gt; Edit &lt;/a&gt;
            &lt;a href="javascript:void(0);" class=""&gt;&lt;svg&gt; ... &lt;/svg&gt; Delete &lt;/a&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div> 
                    </div>

                    <div class="row">
                        <div id="mediaObjectBadge" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Badge</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area m-o-label">

                                    <div class="media">
                                        <img class="rounded" src="{{asset('storage/img/90x90.jpg')}}" alt="pic1">
                                        <div class="media-body">
                                            <h4 class="media-heading"><span class="media-title"> Heading</span><span class="badge badge-primary">Web Designer</span></h4>
                                            <p class="media-text">Sed dapibus nulla elementum, rutrum neque eu, gravida neque. Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus.</p>
                                        </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                                <pre>
&lt;!-- Badge --&gt;
&lt;div class="media"&gt;
    &lt;img class="rounded" src="{{asset('storage/img/90x90.jpg')}}" alt="pic1"&gt;
    &lt;div class="media-body"&gt;
        &lt;h4 class="media-heading"&gt;&lt;span class="media-title"&gt; Heading&lt;/span&gt;&lt;span class="badge badge-primary"&gt;Web Designer&lt;/span&gt;&lt;/h4&gt;
        &lt;p class="media-text"&gt;Sed dapibus nulla elementum, rutrum neque eu, gravida neque. Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus.&lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div id="mediaObjectDropdown" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Dropdown List</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area m-o-dropdown-list">

                                    <div class="media">
                                        <img class=" rounded" src="{{asset('storage/img/90x90.jpg')}}" alt="pic1">
                                        <div class="media-body">
                                            <div class="media-heading">
                                                <span class="media-title"> Heading</span>
                                                <div class="dropdown-list dropdown" role="group">
                                                    <a href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                                    </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="javascript:void(0);"><span>Start chat</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg></a>
                                                        <a class="dropdown-item" href="javascript:void(0);"><span>Make a call</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg></a>
                                                        <span class="dropdown-divider"></span>
                                                        <a class="dropdown-item" href="javascript:void(0);"><span>Statistics</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart-2"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="media-text">Sed dapibus nulla elementum, rutrum neque eu, gravida neque. Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus.</p>
                                        </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                                <pre>
&lt;!-- Dropdown List --&gt;
&lt;div class="media"&gt;
    &lt;img class=" rounded" src="{{asset('storage/img/90x90.jpg')}}" alt="pic1"&gt;
    &lt;div class="media-body"&gt;
        &lt;h4 class="media-heading"&gt;&lt;span class="media-title"&gt; Heading&lt;/span&gt;
            &lt;span class="dropdown-list dropdown"&gt;
                &lt;i role="menu" class="flaticon-dot-three sr-only" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"&gt;sdfdsf&lt;/i&gt;
                &lt;svg&gt; ... &lt;/svg&gt;

              &lt;span class="dropdown-menu" aria-labelledby="dropdownMenuButton2"&gt;
                &lt;a class="dropdown-item" href="javascript:void(0);"&gt;&lt;span&gt;Start chat&lt;/span&gt; &lt;svg&gt; ... &lt;/svg&gt;&lt;/a&gt;
                &lt;a class="dropdown-item" href="javascript:void(0);"&gt;&lt;span&gt;Make a call&lt;/span&gt; &lt;svg&gt; ... &lt;/svg&gt;&lt;/a&gt;
                &lt;span class="dropdown-divider"&gt;&lt;/span&gt;
                &lt;a class="dropdown-item" href="javascript:void(0);"&gt;&lt;span&gt;Statistics&lt;/span&gt; &lt;svg&gt; ... &lt;/svg&gt;&lt;/a&gt;
              &lt;/span&gt;
            &lt;/span&gt;
        &lt;/h4&gt;
        &lt;p class="media-text"&gt;Sed dapibus nulla elementum, rutrum neque eu, gravida neque. Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus.&lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div id="mediaObjectIcon" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Labels</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area m-o-label-icon">

                                    <div class="media">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle label-icon label-danger"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                                        <div class="media-body">
                                            <h4 class="media-heading"><span class="media-title"> Heading</span>
                                            </h4>
                                            <p class="media-text">Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu, gravida neque. Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra.</p>
                                        </div>
                                    </div>

                                    <div class="media">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-triangle label-icon label-warning"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12" y2="17"></line></svg>
                                        <div class="media-body mb-2">
                                            <h4 class="media-heading"><span class="media-title"> Heading</span>
                                            </h4>
                                            <p class="media-text">Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu, gravida neque.</p>
                                        </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                                <pre>
&lt;!-- Label --&gt;
&lt;div class="media"&gt;
    &lt;svg&gt; ... &lt;/svg&gt;
    &lt;div class="media-body"&gt;
        &lt;h4 class="media-heading"&gt;&lt;span class="media-title"&gt; Heading&lt;/span&gt;
        &lt;/h4&gt;
        &lt;p class="media-text"&gt;Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu, gravida neque. Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra.&lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;

&lt;div class="media"&gt;
    &lt;svg&gt; ... &lt;/svg&gt;
    &lt;div class="media-body mb-2"&gt;
        &lt;h4 class="media-heading"&gt;&lt;span class="media-title"&gt; Heading&lt;/span&gt;
        &lt;/h4&gt;
        &lt;p class="media-text"&gt;Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu, gravida neque.&lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div id="mediaObjectCheckbox" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Checkbox</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area m-o-chkbox">

                                    <div class="media">
                                        <div class="n-chk">
                                            <label class="new-control new-checkbox checkbox-dark" style="height: 18px;">
                                              <input type="checkbox" class="new-control-input">
                                              <span class="new-control-indicator"></span>
                                            </label>
                                        </div>

                                        <div class="media-body">
                                            <h4 class="media-heading"><span class="media-title"> Heading</span>
                                            </h4>
                                            <p class="media-text">Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu, gravida neque. Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra.</p>
                                        </div>
                                    </div>

                                    <div class="media">
                                        <div class="n-chk">
                                            <label class="new-control new-checkbox checkbox-dark" style="height: 18px;">
                                              <input type="checkbox" class="new-control-input" checked>
                                              <span class="new-control-indicator"></span>
                                            </label>
                                        </div>

                                        <div class="media-body">
                                            <h4 class="media-heading"><span class="media-title"> Heading</span>
                                            </h4>
                                            <p class="media-text">Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu, gravida neque.</p>
                                        </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                                <pre>
&lt;!-- Checkbox --&gt;
&lt;div class="media"&gt;
    &lt;div class="n-chk"&gt;
        &lt;label class="new-control new-checkbox checkbox-dark" style="height: 18px;"&gt;
          &lt;input type="checkbox" class="new-control-input"&gt;
          &lt;span class="new-control-indicator"&gt;&lt;/span&gt;
        &lt;/label&gt;
    &lt;/div&gt;

    &lt;div class="media-body"&gt;
        &lt;h4 class="media-heading"&gt;&lt;span class="media-title"&gt; Heading&lt;/span&gt;
        &lt;/h4&gt;
        &lt;p class="media-text"&gt;Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu, gravida neque. Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra.&lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;

&lt;div class="media"&gt;
    &lt;div class="n-chk"&gt;
        &lt;label class="new-control new-checkbox checkbox-dark" style="height: 18px;"&gt;
          &lt;input type="checkbox" class="new-control-input" checked&gt;
          &lt;span class="new-control-indicator"&gt;&lt;/span&gt;
        &lt;/label&gt;
    &lt;/div&gt;

    &lt;div class="media-body"&gt;
        &lt;h4 class="media-heading"&gt;&lt;span class="media-title"&gt; Heading&lt;/span&gt;
        &lt;/h4&gt;
        &lt;p class="media-text"&gt;Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu, gravida neque.&lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;</pre>
                                        </div>
                                    </div>                                   

                                </div>
                            </div>
                        </div> 

                        <div id="mediaObjectRadio" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Radio</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area m-o-radio">

                                    <div class="media">
                                        <div class="n-chk">
                                            <label class="new-control new-radio radio-classic-dark" style="height: 18px;">
                                              <input type="radio" class="new-control-input" name="custom-radio-1">
                                              <span class="new-control-indicator"></span>
                                            </label>
                                        </div>

                                        <div class="media-body">
                                            <h4 class="media-heading"><span class="media-title"> Heading</span>
                                            </h4>
                                            <p class="media-text">Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu, gravida neque.</p>
                                        </div>
                                    </div>

                                    <div class="media">
                                        <div class="n-chk">
                                            <label class="new-control new-radio radio-classic-dark" style="height: 18px;">
                                              <input type="radio" class="new-control-input" name="custom-radio-1" checked>
                                              <span class="new-control-indicator"></span>
                                            </label>
                                        </div>

                                        <div class="media-body">
                                            <h4 class="media-heading"><span class="media-title"> Heading</span>
                                            </h4>
                                            <p class="media-text">Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu, gravida neque. Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra.</p>
                                        </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                                <pre>
&lt;!-- Radio --&gt;
&lt;div class="media"&gt;
    &lt;div class="n-chk"&gt;
        &lt;label class="new-control new-radio radio-classic-dark" style="height: 18px;"&gt;
          &lt;input type="radio" class="new-control-input" name="custom-radio-1"&gt;
          &lt;span class="new-control-indicator"&gt;&lt;/span&gt;
        &lt;/label&gt;
    &lt;/div&gt;

    &lt;div class="media-body"&gt;
        &lt;h4 class="media-heading"&gt;&lt;span class="media-title"&gt; Heading&lt;/span&gt;
        &lt;/h4&gt;
        &lt;p class="media-text"&gt;Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra. Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu, gravida neque.&lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;

&lt;div class="media"&gt;
    &lt;div class="n-chk"&gt;
        &lt;label class="new-control new-radio radio-classic-dark" style="height: 18px;"&gt;
          &lt;input type="radio" class="new-control-input" name="custom-radio-1" checked&gt;
          &lt;span class="new-control-indicator"&gt;&lt;/span&gt;
        &lt;/label&gt;
    &lt;/div&gt;

    &lt;div class="media-body"&gt;
        &lt;h4 class="media-heading"&gt;&lt;span class="media-title"&gt; Heading&lt;/span&gt;
        &lt;/h4&gt;
        &lt;p class="media-text"&gt;Aenean dignissim sed ante eget dapibus. Sed dapibus nulla elementum, rutrum neque eu, gravida neque. Fusce condimentum cursus mauris et ornare. Mauris fermentum mi id sollicitudin viverra.&lt;/p&gt;
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
@endsection