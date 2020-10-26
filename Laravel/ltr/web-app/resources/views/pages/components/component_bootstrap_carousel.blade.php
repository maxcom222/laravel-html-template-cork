@extends('layouts.app')

@section('content')

            <div class="container">
                <div class="container">

                    <div id="navSection" data-spy="affix" class="nav  sidenav">
                        <div class="sidenav-content">
                            <a href="#custom_carousel" class="active nav-link">Custom Carousel</a>
                            <a href="#slides_only" class="nav-link">Slides only</a>
                            <a href="#with_controls" class="nav-link">With controls</a>
                            <a href="#with_indicators" class="nav-link">With indicators</a>
                            <a href="#with_captions" class="nav-link">With captions</a>
                        </div>
                    </div>
                
                    <div class="row layout-top-spacing">
                        <div id="custom_carousel" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Custom Carousel</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area  style-custom-1">
                                    <div class="container" style="max-width: 928px;">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 mb-5 p-0">
                                                <div id="style1" class="carousel slide style-custom-1" data-ride="carousel">
                                                    <ol class="carousel-indicators">
                                                        <li data-target="#style1" data-slide-to="0" class="active"></li>
                                                        <li data-target="#style1" data-slide-to="1"></li>
                                                        <li data-target="#style1" data-slide-to="2"></li>
                                                    </ol>
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <img class="d-block w-100 slide-image" src="{{asset('storage/img/600x300.jpg')}}" alt="First slide">
                                                            <div class="carousel-caption">
                                                                <span class="badge">Lifestyle</span>
                                                                <h3>How To Make More Blog By Doing Less</h3>
                                                                <div class="media">
                                                                    <img src="{{asset('storage/img/90x90.jpg')}}" class="" alt="avatar">
                                                                    <div class="media-body">
                                                                        <h6 class="user-name">User name</h6>
                                                                        <p class="meta-time"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg> May, 14 2019</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img class="d-block w-100 slide-image" src="{{asset('storage/img/600x300.jpg')}}" alt="Second slide">
                                                            <div class="carousel-caption">
                                                                <span class="badge">Lifestyle</span>
                                                                <h3>How To Make Blog</h3>
                                                                <div class="media">
                                                                    <img src="{{asset('storage/img/90x90.jpg')}}" class="" alt="avatar">
                                                                    <div class="media-body">
                                                                        <h6 class="user-name">User name</h6>
                                                                        <p class="meta-time"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg> May, 14 2019</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img class="d-block w-100 slide-image" src="{{asset('storage/img/600x300.jpg')}}" alt="Third slide">
                                                            <div class="carousel-caption">
                                                                <span class="badge">Lifestyle</span>
                                                                <h3>Best Blog Android Apps</h3>
                                                                <div class="media">
                                                                    <img src="{{asset('storage/img/90x90.jpg')}}" class="" alt="avatar">
                                                                    <div class="media-body">
                                                                        <h6 class="user-name">User name</h6>
                                                                        <p class="meta-time"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg> May, 14 2019</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a class="carousel-control-prev" href="#style1" role="button" data-slide="prev">
                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="carousel-control-next" href="#style1" role="button" data-slide="next">
                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="code-section-container show-code">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                                <pre>
&lt;div class="container" style="max-width: 928px;"&gt;
    &lt;div class="row"&gt;
        &lt;div class="col-lg-12 col-md-12 mb-5 p-0"&gt;
            &lt;div id="style1" class="carousel slide style-custom-1" data-ride="carousel"&gt;
                &lt;ol class="carousel-indicators"&gt;
                    &lt;li data-target="#style1" data-slide-to="0" class="active"&gt;&lt;/li&gt;
                    &lt;li data-target="#style1" data-slide-to="1"&gt;&lt;/li&gt;
                    &lt;li data-target="#style1" data-slide-to="2"&gt;&lt;/li&gt;
                &lt;/ol&gt;
                &lt;div class="carousel-inner"&gt;
                    &lt;div class="carousel-item active"&gt;
                        &lt;img class="d-block w-100 slide-image" src="{{asset('storage/img/600x300.jpg')}}" alt="First slide"&gt;
                        &lt;div class="carousel-caption"&gt;
                            .................
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class="carousel-item"&gt;
                        &lt;img class="d-block w-100 slide-image" src="{{asset('storage/img/600x300.jpg')}}" alt="Second slide"&gt;
                        &lt;div class="carousel-caption"&gt;
                            .................
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class="carousel-item"&gt;
                        &lt;img class="d-block w-100 slide-image" src="{{asset('storage/img/600x300.jpg')}}" alt="Third slide"&gt;
                        &lt;div class="carousel-caption"&gt;
                            .................
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;a class="carousel-control-prev" href="#style1" role="button" data-slide="prev"&gt;
                    &lt;span class="carousel-control-prev-icon" aria-hidden="true"&gt;&lt;/span&gt;
                    &lt;span class="sr-only"&gt;Previous&lt;/span&gt;
                &lt;/a&gt;
                &lt;a class="carousel-control-next" href="#style1" role="button" data-slide="next"&gt;
                    &lt;span class="carousel-control-next-icon" aria-hidden="true"&gt;&lt;/span&gt;
                    &lt;span class="sr-only"&gt;Next&lt;/span&gt;
                &lt;/a&gt;
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

                    <div class="row">
                        <div id="slides_only" class="col-lg-12 col-md-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Slides only</h4> 
                                        </div>                             
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <img class="d-block w-100" src="{{asset('storage/img/600x300.jpg')}}" alt="First slide">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" src="{{asset('storage/img/600x300.jpg')}}" alt="Second slide">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" src="{{asset('storage/img/600x300.jpg')}}" alt="Third slide">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel"&gt;
    &lt;div class="carousel-inner"&gt;
        &lt;div class="carousel-item active"&gt;
            &lt;img class="d-block w-100" src="{{asset('storage/img/600x300.jpg')}}" alt="First slide"&gt;
        &lt;/div&gt;
        &lt;div class="carousel-item"&gt;
            &lt;img class="d-block w-100" src="{{asset('storage/img/600x300.jpg')}}" alt="Second slide"&gt;
        &lt;/div&gt;
        &lt;div class="carousel-item"&gt;
            &lt;img class="d-block w-100" src="{{asset('storage/img/600x300.jpg')}}" alt="Third slide"&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div id="with_controls" class="col-lg-12 col-md-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>With controls</h4> 
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <img class="d-block w-100" src="{{asset('storage/img/600x300.jpg')}}" alt="First slide">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" src="{{asset('storage/img/600x300.jpg')}}" alt="Second slide">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" src="{{asset('storage/img/600x300.jpg')}}" alt="Third slide">
                                                    </div>
                                                </div>
                                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>                                            
                                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div id="carouselExampleControls" class="carousel slide" data-ride="carousel"&gt;
    &lt;div class="carousel-inner"&gt;
        &lt;div class="carousel-item active"&gt;
            &lt;img class="d-block w-100" src="{{asset('storage/img/600x300.jpg')}}" alt="First slide"&gt;
        &lt;/div&gt;
        &lt;div class="carousel-item"&gt;
            &lt;img class="d-block w-100" src="{{asset('storage/img/600x300.jpg')}}" alt="Second slide"&gt;
        &lt;/div&gt;
        &lt;div class="carousel-item"&gt;
            &lt;img class="d-block w-100" src="{{asset('storage/img/600x300.jpg')}}" alt="Third slide"&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"&gt;
        &lt;span class="carousel-control-prev-icon" aria-hidden="true"&gt;&lt;/span&gt;
        &lt;span class="sr-only"&gt;Previous&lt;/span&gt;
    &lt;/a&gt;                                            
    &lt;a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"&gt;
        &lt;span class="carousel-control-next-icon" aria-hidden="true"&gt;&lt;/span&gt;
        &lt;span class="sr-only"&gt;Next&lt;/span&gt;
    &lt;/a&gt;
&lt;/div&gt;
</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div id="with_indicators" class="col-lg-12 col-md-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>With indicators</h4> 
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                                <ol class="carousel-indicators">
                                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active m"></li>
                                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                                </ol>
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <img class="d-block w-100" src="{{asset('storage/img/600x300.jpg')}}" alt="First slide">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" src="{{asset('storage/img/600x300.jpg')}}" alt="Second slide">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" src="{{asset('storage/img/600x300.jpg')}}" alt="Third slide">
                                                    </div>
                                                </div>
                                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"&gt;
    &lt;ol class="carousel-indicators"&gt;
        &lt;li data-target="#carouselExampleIndicators" data-slide-to="0" class="active m"&gt;&lt;/li&gt;
        &lt;li data-target="#carouselExampleIndicators" data-slide-to="1"&gt;&lt;/li&gt;
        &lt;li data-target="#carouselExampleIndicators" data-slide-to="2"&gt;&lt;/li&gt;
    &lt;/ol&gt;
    &lt;div class="carousel-inner"&gt;
        &lt;div class="carousel-item active"&gt;
            &lt;img class="d-block w-100" src="{{asset('storage/img/600x300.jpg')}}" alt="First slide"&gt;
        &lt;/div&gt;
        &lt;div class="carousel-item"&gt;
            &lt;img class="d-block w-100" src="{{asset('storage/img/600x300.jpg')}}" alt="Second slide"&gt;
        &lt;/div&gt;
        &lt;div class="carousel-item"&gt;
            &lt;img class="d-block w-100" src="{{asset('storage/img/600x300.jpg')}}" alt="Third slide"&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"&gt;
        &lt;span class="carousel-control-prev-icon" aria-hidden="true"&gt;&lt;/span&gt;
        &lt;span class="sr-only"&gt;Previous&lt;/span&gt;
    &lt;/a&gt;
    &lt;a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next"&gt;
        &lt;span class="carousel-control-next-icon" aria-hidden="true"&gt;&lt;/span&gt;
        &lt;span class="sr-only"&gt;Next&lt;/span&gt;
    &lt;/a&gt;
&lt;/div&gt;
</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="with_captions" class="col-lg-12 col-md-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>With captions</h4> 
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                                                <ol class="carousel-indicators">
                                                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                                                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                                                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                                                </ol>
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <img class="d-block w-100" src="{{asset('storage/img/600x300.jpg')}}" alt="First slide">
                                                        <div class="carousel-caption d-none d-sm-block">
                                                            <h3>First slide</h3>
                                                            <h5>Lorem ipsum dolor sit amet, dolore magna aliqua.</h5>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" src="{{asset('storage/img/600x300.jpg')}}" alt="Second slide">
                                                        <div class="carousel-caption d-none d-sm-block">
                                                            <h3>Second slide</h3>
                                                            <h5>Lorem ipsum dolor sit amet, dolore magna aliqua.</h5>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" src="{{asset('storage/img/600x300.jpg')}}" alt="Third slide">
                                                        <div class="carousel-caption d-none d-sm-block">
                                                            <h3>Third slide</h3>
                                                            <h5>Lorem ipsum dolor sit amet, dolore magna aliqua.</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel"&gt;
    &lt;ol class="carousel-indicators"&gt;
        &lt;li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"&gt;&lt;/li&gt;
        &lt;li data-target="#carouselExampleCaptions" data-slide-to="1"&gt;&lt;/li&gt;
        &lt;li data-target="#carouselExampleCaptions" data-slide-to="2"&gt;&lt;/li&gt;
    &lt;/ol&gt;
    &lt;div class="carousel-inner"&gt;
        &lt;div class="carousel-item active"&gt;
            &lt;img class="d-block w-100" src="{{asset('storage/img/600x300.jpg')}}" alt="First slide"&gt;
            &lt;div class="carousel-caption d-none d-sm-block"&gt;
                &lt;h3&gt;First slide&lt;/h3&gt;
                &lt;h5&gt;Lorem ipsum dolor sit amet, dolore magna aliqua.&lt;/h5&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="carousel-item"&gt;
            &lt;img class="d-block w-100" src="{{asset('storage/img/600x300.jpg')}}" alt="Second slide"&gt;
            &lt;div class="carousel-caption d-none d-sm-block"&gt;
                &lt;h3&gt;Second slide&lt;/h3&gt;
                &lt;h5&gt;Lorem ipsum dolor sit amet, dolore magna aliqua.&lt;/h5&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="carousel-item"&gt;
            &lt;img class="d-block w-100" src="{{asset('storage/img/600x300.jpg')}}" alt="Third slide"&gt;
            &lt;div class="carousel-caption d-none d-sm-block"&gt;
                &lt;h3&gt;Third slide&lt;/h3&gt;
                &lt;h5&gt;Lorem ipsum dolor sit amet, dolore magna aliqua.&lt;/h5&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev"&gt;
        &lt;span class="carousel-control-prev-icon" aria-hidden="true"&gt;&lt;/span&gt;
        &lt;span class="sr-only"&gt;Previous&lt;/span&gt;
    &lt;/a&gt;
    &lt;a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next"&gt;
        &lt;span class="carousel-control-next-icon" aria-hidden="true"&gt;&lt;/span&gt;
        &lt;span class="sr-only"&gt;Next&lt;/span&gt;
    &lt;/a&gt;
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