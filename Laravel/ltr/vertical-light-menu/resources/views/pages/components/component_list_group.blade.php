@extends('layouts.app')

@section('content')
            <div class="container">

                <div class="container">

                    <div id="navSection" data-spy="affix" class="nav  sidenav">
                        <div class="sidenav-content">
                            <a href="#listGroupBasic" class="active nav-link">Basic</a>
                            <a href="#listGroupLinks" class="nav-link">Links</a>
                            <a href="#listGroupIcons" class="nav-link">Icons</a>
                            <a href="#listGroupImages" class="nav-link">Images</a>
                            <a href="#listGroupTask" class="nav-link">Task</a>
                        </div>
                    </div>
                
                    <div class="row layout-spacing layout-top-spacing" id="cancel-row">

                        <div id="listGroupBasic" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Basic</h4> 
                                        </div>                   
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <p class="mb-3">Add <code>.active</code> to a <code>.list-group-item</code> to indicate the current active selection.</p>
                                    <ul class="list-group ">
                                        <li class="list-group-item">Cras justo odio</li>
                                        <li class="list-group-item active">Dapibus ac facilisis in</li>
                                        <li class="list-group-item">Morbi leo risus</li>
                                        <li class="list-group-item">Porta ac consectetur ac</li>
                                        <li class="list-group-item">Vestibulum at eros</li>
                                    </ul>

                                    <div class="code-section-container show-code">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                                <pre>
&lt;!-- Basic --&gt;
&lt;ul class="list-group "&gt;
    &lt;li class="list-group-item"&gt;Cras justo odio&lt;/li&gt;
    &lt;li class="list-group-item active"&gt;Dapibus ac facilisis in&lt;/li&gt;
    &lt;li class="list-group-item"&gt;Morbi leo risus&lt;/li&gt;
    &lt;li class="list-group-item"&gt;Porta ac consectetur ac&lt;/li&gt;
    &lt;li class="list-group-item"&gt;Vestibulum at eros&lt;/li&gt;
&lt;/ul&gt;</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="listGroupLinks" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Links</h4> 
                                        </div>                              
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <p class="mb-3">Change all the <code>li</code> tags to <code>a</code> tags to convert it into a link</p>
                                    <div class="list-group ">
                                        <a href="javascript:void(0);" class="list-group-item list-group-item-action">Cras justo odio</a>
                                        <a href="javascript:void(0);" class="list-group-item list-group-item-action active">Dapibus ac facilisis in</a>
                                        <a href="javascript:void(0);" class="list-group-item list-group-item-action">Morbi leo risus</a>
                                        <a href="javascript:void(0);" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
                                        <a href="javascript:void(0);" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Show Code</span></button>

                                        <div class="code-section text-left">
                                                <pre>
&lt;!-- Links --&gt;
&lt;div class="list-group "&gt;
    &lt;a href="javascript:void(0);" class="list-group-item list-group-item-action"&gt;Cras justo odio&lt;/a&gt;
    &lt;a href="javascript:void(0);" class="list-group-item list-group-item-action active"&gt;Dapibus ac facilisis in&lt;/a&gt;
    &lt;a href="javascript:void(0);" class="list-group-item list-group-item-action"&gt;Morbi leo risus&lt;/a&gt;
    &lt;a href="javascript:void(0);" class="list-group-item list-group-item-action"&gt;Porta ac consectetur ac&lt;/a&gt;
    &lt;a href="javascript:void(0);" class="list-group-item list-group-item-action disabled"&gt;Vestibulum at eros&lt;/a&gt;
&lt;/div&gt;</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="listGroupIcons" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Icons</h4> 
                                        </div>                   
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <ul class="list-group list-group-icons-meta">
                                        <li class="list-group-item list-group-item-action">
                                            <div class="media">
                                                <div class="d-flex mr-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="tx-inverse">Messages</h6>
                                                    <p class="mg-b-0">4 New Messages</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item list-group-item-action active">
                                            <div class="media">
                                                <div class="d-flex mr-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="tx-inverse">Locations</h6>
                                                    <p class="mg-b-0">25 New Travel Locations</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item list-group-item-action">
                                            <div class="media">
                                                <div class="d-flex mr-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-droplet"><path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"></path></svg>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="tx-inverse">Flexible</h6>
                                                    <p class="mg-b-0">Customization Flexibility</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                                <pre>
&lt;!-- Icons --&gt;
&lt;ul class="list-group list-group-icons-meta"&gt;
    &lt;li class="list-group-item list-group-item-action"&gt;
        &lt;div class="media"&gt;
            &lt;div class="d-flex mr-3"&gt;
                &lt;svg&gt; ... &lt;/svg&gt;
            &lt;/div&gt;
            &lt;div class="media-body"&gt;
                &lt;h6 class="tx-inverse"&gt;Messages&lt;/h6&gt;
                &lt;p class="mg-b-0"&gt;4 New Messages&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/li&gt;
    &lt;li class="list-group-item list-group-item-action active"&gt;
        &lt;div class="media"&gt;
            &lt;div class="d-flex mr-3"&gt;
                &lt;svg&gt; ... &lt;/svg&gt;
            &lt;/div&gt;
            &lt;div class="media-body"&gt;
                &lt;h6 class="tx-inverse"&gt;Locations&lt;/h6&gt;
                &lt;p class="mg-b-0"&gt;25 New Travel Locations&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/li&gt;
    &lt;li class="list-group-item list-group-item-action"&gt;
        &lt;div class="media"&gt;
            &lt;div class="d-flex mr-3"&gt;
                &lt;svg&gt; ... &lt;/svg&gt;
            &lt;/div&gt;
            &lt;div class="media-body"&gt;
                &lt;h6 class="tx-inverse"&gt;Flexible&lt;/h6&gt;
                &lt;p class="mg-b-0"&gt;Customization Flexibility&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/li&gt;
&lt;/ul&gt;</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="listGroupImages" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Images</h4> 
                                        </div>                   
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <ul class="list-group list-group-media">
                                        <li class="list-group-item list-group-item-action">
                                            <div class="media">
                                                <div class="mr-3">
                                                    <img alt="avatar" src="{{asset('storage/img/90x90.jpg')}}" class="img-fluid rounded-circle">
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="tx-inverse">Luke Ivory</h6>
                                                    <p class="mg-b-0">Project Lead</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item list-group-item-action active">
                                            <div class="media">
                                                <div class="mr-3">
                                                    <img alt="avatar" src="{{asset('storage/img/90x90.jpg')}}" class="img-fluid rounded-circle">
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="tx-inverse">Sonia Shaw</h6>
                                                    <p class="mg-b-0">Web Designer</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item list-group-item-action ">
                                            <div class="media">
                                                <div class="mr-3">
                                                    <img alt="avatar" src="{{asset('storage/img/90x90.jpg')}}" class="img-fluid rounded-circle">
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="tx-inverse">Dale Butler</h6>
                                                    <p class="mg-b-0">Developer</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                                <pre>
&lt;!-- Images --&gt;
&lt;ul class="list-group list-group-media"&gt;
    &lt;li class="list-group-item list-group-item-action"&gt;
        &lt;div class="media"&gt;
            &lt;div class="mr-3"&gt;
                &lt;img alt="avatar" src="{{asset('storage/img/90x90.jpg')}}" class="img-fluid rounded-circle"&gt;
            &lt;/div&gt;
            &lt;div class="media-body"&gt;
                &lt;h6 class="tx-inverse"&gt;Luke Ivory&lt;/h6&gt;
                &lt;p class="mg-b-0"&gt;Project Lead&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/li&gt;
    &lt;li class="list-group-item list-group-item-action active"&gt;
        &lt;div class="media"&gt;
            &lt;div class="mr-3"&gt;
                &lt;img alt="avatar" src="{{asset('storage/img/90x90.jpg')}}" class="img-fluid rounded-circle"&gt;
            &lt;/div&gt;
            &lt;div class="media-body"&gt;
                &lt;h6 class="tx-inverse"&gt;Sonia Shaw&lt;/h6&gt;
                &lt;p class="mg-b-0"&gt;Web Designer&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/li&gt;
    &lt;li class="list-group-item list-group-item-action "&gt;
        &lt;div class="media"&gt;
            &lt;div class="mr-3"&gt;
                &lt;img alt="avatar" src="{{asset('storage/img/90x90.jpg')}}" class="img-fluid rounded-circle"&gt;
            &lt;/div&gt;
            &lt;div class="media-body"&gt;
                &lt;h6 class="tx-inverse"&gt;Dale Butler&lt;/h6&gt;
                &lt;p class="mg-b-0"&gt;Developer&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/li&gt;
&lt;/ul&gt;</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="listGroupTask" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Task</h4> 
                                        </div>                   
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <ul class="list-group task-list-group">
                                        <li class="list-group-item list-group-item-action">
                                            <div class="n-chk">
                                                <label class="new-control new-checkbox checkbox-primary w-100 justify-content-between">
                                                  <input type="checkbox" class="new-control-input">
                                                  <span class="new-control-indicator"></span>
                                                    <span class="ml-2">
                                                        List groups are a flexible and powerful component for displaying simple.
                                                    </span>
                                                    <span class="ml-3 d-block">
                                                        <span class="badge badge-secondary">Project</span>
                                                    </span>
                                                </label>
                                            </div>
                                        </li>
                                        <li class="list-group-item list-group-item-action active">
                                            <div class="n-chk">
                                                <label class="new-control new-checkbox checkbox-primary w-100 justify-content-between">
                                                  <input type="checkbox" class="new-control-input">
                                                  <span class="new-control-indicator"></span>
                                                    <span class="ml-2">
                                                        List groups are a flexible and powerful component for displaying simple.
                                                    </span>
                                                    <span class="ml-3 d-block">
                                                        <span class="badge badge-primary">Urgent</span>
                                                    </span>
                                                </label>
                                            </div>
                                        </li>
                                        <li class="list-group-item list-group-item-action">
                                            <div class="n-chk">
                                                <label class="new-control new-checkbox checkbox-primary w-100 justify-content-between">
                                                  <input type="checkbox" class="new-control-input">
                                                  <span class="new-control-indicator"></span>
                                                      <span class="ml-2">List groups are a flexible and powerful component for displaying simple.</span>
                                                      <span class="ml-3 d-block">
                                                          <span class="badge badge-success">Success</span>
                                                      </span>
                                                </label>
                                            </div>
                                        </li>
                                    </ul>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                                <pre>
&lt;!-- Task --&gt;
&lt;ul class="list-group task-list-group"&gt;
    &lt;li class="list-group-item list-group-item-action"&gt;
        &lt;div class="n-chk"&gt;
            &lt;label class="new-control new-checkbox checkbox-primary w-100 justify-content-between"&gt;
              &lt;input type="checkbox" class="new-control-input"&gt;
              &lt;span class="new-control-indicator"&gt;&lt;/span&gt;
                &lt;span class="ml-2"&gt;
                    List groups are a flexible and powerful component for displaying simple.
                &lt;/span&gt;
                &lt;span class="ml-3 d-block"&gt;
                    &lt;span class="badge badge-secondary"&gt;Project&lt;/span&gt;
                &lt;/span&gt;
            &lt;/label&gt;
        &lt;/div&gt;
    &lt;/li&gt;
    &lt;li class="list-group-item list-group-item-action active"&gt;
        &lt;div class="n-chk"&gt;
            &lt;label class="new-control new-checkbox checkbox-primary w-100 justify-content-between"&gt;
              &lt;input type="checkbox" class="new-control-input"&gt;
              &lt;span class="new-control-indicator"&gt;&lt;/span&gt;
                &lt;span class="ml-2"&gt;
                    List groups are a flexible and powerful component for displaying simple.
                &lt;/span&gt;
                &lt;span class="ml-3 d-block"&gt;
                    &lt;span class="badge badge-primary"&gt;Urgent&lt;/span&gt;
                &lt;/span&gt;
            &lt;/label&gt;
        &lt;/div&gt;
    &lt;/li&gt;
    &lt;li class="list-group-item list-group-item-action"&gt;
        &lt;div class="n-chk"&gt;
            &lt;label class="new-control new-checkbox checkbox-primary w-100 justify-content-between"&gt;
              &lt;input type="checkbox" class="new-control-input"&gt;
              &lt;span class="new-control-indicator"&gt;&lt;/span&gt;
                  &lt;span class="ml-2"&gt;List groups are a flexible and powerful component for displaying simple.&lt;/span&gt;
                  &lt;span class="ml-3 d-block"&gt;
                      &lt;span class="badge badge-success"&gt;Success&lt;/span&gt;
                  &lt;/span&gt;
            &lt;/label&gt;
        &lt;/div&gt;
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