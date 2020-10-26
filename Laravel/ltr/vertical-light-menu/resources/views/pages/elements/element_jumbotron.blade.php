@extends('layouts.app')

@section('content')
            <div class="container">

                <div class="container">

                    <div id="navSection" data-spy="affix" class="nav sidenav">
                        <div class="sidenav-content">
                            <a href="#jumbotronBasic" class="active nav-link">Basic</a>
                            <a href="#jumbotronFluid" class="nav-link">Fluid</a>
                        </div>
                    </div>

                    <div class="row layout-top-spacing">
                        <div id="jumbotronBasic" class="col-xl-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4> Jumbotron</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area text-center">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="jumbotron">
                                              <h2 class="display-4 mb-5  mt-4">Hello, world!</h2>
                                              <p class="lead mt-3 mb-4">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                                              <hr class="my-4">
                                              <p class="mb-5">It uses utility classes for typography and spacing to space content out within the larger container.</p>
                                              <p class="lead">
                                                <a class="btn btn-dark" href="javscript:void(0);" role="button">Learn more</a>
                                              </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="code-section-container show-code">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div class="row"&gt;
    &lt;div class="col-lg-12"&gt;
        &lt;div class="jumbotron"&gt;
          &lt;h2 class="display-4 mb-5  mt-4"&gt;Hello, world!&lt;/h2&gt;
          &lt;p class="lead mt-3 mb-4"&gt;This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.&lt;/p&gt;
          &lt;hr class="my-4"&gt;
          &lt;p class="mb-5"&gt;It uses utility classes for typography and spacing to space content out within the larger container.&lt;/p&gt;
          &lt;p class="lead"&gt;
            &lt;a class="btn btn-dark" href="javscript:void(0);" role="button"&gt;Learn more&lt;/a&gt;
          &lt;/p&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="jumbotronFluid" class="col-xl-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4> Jumbotron Fluid</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area text-center">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="jumbotron jumbotron-fluid">
                                              <div class="container">
                                                <h2 class="display-4 mb-5  mt-4">Fluid Jumbotron</h2>
                                                <p class="lead mt-3 mb-4">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
                                                <br/>
                                                <blockquote class="blockquote media-object">
                                                    <div class="media">
                                                        <div class="usr-img mr-2">
                                                            <img alt="avatar" src="{{asset('storage/img/90x90.jpg')}}" class="br-30">
                                                        </div>
                                                        <div class="media-body align-self-center">
                                                           <p class="d-inline">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                                        </div>
                                                    </div>
                                                    <small class="text-right">Someone famous <cite title="Source Title">Source Title</cite></small>
                                                </blockquote>
                                              </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div class="row"&gt;
    &lt;div class="col-lg-12"&gt;
        &lt;div class="jumbotron jumbotron-fluid"&gt;
          &lt;div class="container"&gt;
            &lt;h2 class="display-4 mb-5  mt-4"&gt;Fluid Jumbotron&lt;/h2&gt;
            &lt;p class="lead mt-3 mb-4"&gt;This is a modified jumbotron that occupies the entire horizontal space of its parent.&lt;/p&gt;
            &lt;br/&gt;
            &lt;blockquote class="blockquote media-object"&gt;
                &lt;div class="media"&gt;
                    &lt;div class="usr-img mr-2"&gt;
                        &lt;img alt="avatar" src="{{asset('storage/img/90x90.jpg')}}" class="br-30"&gt;
                    &lt;/div&gt;
                    &lt;div class="media-body align-self-center"&gt;
                       &lt;p class="d-inline"&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.&lt;/p&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;small class="text-right"&gt;Someone famous &lt;cite title="Source Title"&gt;Source Title&lt;/cite&gt;&lt;/small&gt;
            &lt;/blockquote&gt;
          &lt;/div&gt;
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