@extends('layouts.app')

@section('content')

            <div class="container">
                <div class="container">

                    <div id="navSection" data-spy="affix" class="nav  sidenav">
                        <div class="sidenav-content">
                            <a href="#card_1" class="active nav-link">Card 1</a>
                            <a href="#card_2" class="nav-link">Card 2</a>
                            <a href="#card_3" class="nav-link">Card 3</a>
                            <a href="#card_4" class="nav-link">Card 4</a>
                            <a href="#card_5" class="nav-link">Card 5</a>
                            <a href="#card_6" class="nav-link">Card 6</a>
                            <a href="#card_7" class="nav-link">Card 7</a>
                            <a href="#card_8" class="nav-link">Card 8</a>
                            <a href="#card_9" class="nav-link">Card 9</a>
                        </div>
                    </div>

                    <div class="row">

                        <div id="card_1" class="col-lg-12 layout-spacing layout-top-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Card 1</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">

                                    <div class="card component-card_1">
                                        <div class="card-body">
                                            <div class="icon-svg">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-droplet"><path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"></path></svg>
                                            </div>
                                            <h5 class="card-title">Simple</h5>
                                            <p class="card-text">Mauris nisi felis, placerat in volutpat id, varius et sapien.</p>
                                        </div>
                                    </div>

                                    <div class="code-section-container show-code">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
        &lt;div class="card component-card_1"&gt;
            &lt;div class="card-body"&gt;
                &lt;div class="icon-svg"&gt;
                    &lt;svg&gt; ... &lt;/svg&gt;
                &lt;/div&gt;
                &lt;h5 class="card-title"&gt;Simple&lt;/h5&gt;
                &lt;p class="card-text"&gt;Mauris nisi felis, placerat in volutpat id, varius et sapien.&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="card_2" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Card 2</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">

                                    <div class="card component-card_2">
                                        <img src="{{asset('storage/img/400x300.jpg')}}" class="card-img-top" alt="widget-card-2">
                                        <div class="card-body">
                                            <h5 class="card-title">CLI Based</h5>
                                            <p class="card-text">Etiam sed augue ac justo tincidunt posuere. Vivamus euismod eros, nec risus malesuada.</p>
                                            <a href="#" class="btn btn-primary">Explore More</a>
                                        </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
        &lt;div class="card component-card_2"&gt;
            &lt;img src="{{asset('storage/img/400x300.jpg')}}" class="card-img-top" alt="widget-card-2"&gt;
            &lt;div class="card-body"&gt;
                &lt;h5 class="card-title"&gt;CLI Based&lt;/h5&gt;
                &lt;p class="card-text"&gt;Etiam sed augue ac justo tincidunt posuere. Vivamus euismod eros, nec risus malesuada.&lt;/p&gt;
                &lt;a href="#" class="btn btn-primary"&gt;Explore More&lt;/a&gt;
            &lt;/div&gt;
        &lt;/div&gt;</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="card_3" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Card 3</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">

                                    <div class="card component-card_3">
                                        <div class="card-body">
                                            <img src="{{asset('storage/img/90x90.jpg')}}" class="card-img-top" alt="...">
                                            <h5 class="card-user_name">Luke Ivory</h5>
                                            <p class="card-user_occupation">Manager</p>
                                            <div class="card-star_rating">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star fill"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star fill"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star fill"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star fill"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                            </div>
                                            <p class="card-text"> Maecenas nec mi vel lacus condimentum rhoncus dignissim egestas orci. Integer blandit porta placerat. Vestibulum in ultricies. </p>
                                        </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
        &lt;div class="card component-card_3"&gt;
            &lt;div class="card-body"&gt;
                &lt;img src="{{asset('storage/img/90x90.jpg')}}" class="card-img-top" alt="..."&gt;
                &lt;h5 class="card-user_name"&gt;Luke Ivory&lt;/h5&gt;
                &lt;p class="card-user_occupation"&gt;Manager&lt;/p&gt;
                &lt;div class="card-star_rating"&gt;
                    &lt;svg&gt; ... &lt;/svg&gt;
                    &lt;svg&gt; ... &lt;/svg&gt;
                    &lt;svg&gt; ... &lt;/svg&gt;
                    &lt;svg&gt; ... &lt;/svg&gt;
                    &lt;svg&gt; ... &lt;/svg&gt;
                &lt;/div&gt;
                &lt;p class="card-text"&gt; Maecenas nec mi vel lacus condimentum rhoncus dignissim egestas orci. Integer blandit porta placerat. Vestibulum in ultricies. &lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="card_4" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Card 4</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">

                                    <div class="card component-card_4">
                                        <div class="card-body">
                                            <div class="user-profile">
                                                <img src="{{asset('storage/img/90x90.jpg')}}" class="" alt="...">
                                            </div>
                                            <div class="user-info">
                                                <h5 class="card-user_name">Luke Ivory</h5>
                                                <p class="card-user_occupation">Manager</p>
                                                <div class="card-star_rating">
                                                   <span class="badge badge-primary">4.5</span>
                                                </div>
                                                <p class="card-text"> Maecenas nec mi vel lacus condimentum rhoncus dignissim egestas orci. Integer blandit porta placerat. Vestibulum in ultricies. </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
        &lt;div class="card component-card_4"&gt;
            &lt;div class="card-body"&gt;
                &lt;div class="user-profile"&gt;
                    &lt;img src="{{asset('storage/img/90x90.jpg')}}" class="" alt="..."&gt;
                &lt;/div&gt;
                &lt;div class="user-info"&gt;
                    &lt;h5 class="card-user_name"&gt;Luke Ivory&lt;/h5&gt;
                    &lt;p class="card-user_occupation"&gt;Manager&lt;/p&gt;
                    &lt;div class="card-star_rating"&gt;
                       &lt;span class="badge badge-primary"&gt;4.5&lt;/span&gt;
                    &lt;/div&gt;
                    &lt;p class="card-text"&gt; Maecenas nec mi vel lacus condimentum rhoncus dignissim egestas orci. Integer blandit porta placerat. Vestibulum in ultricies. &lt;/p&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="card_5" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Card 5</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">

                                    <div class="card component-card_5">
                                        <div class="card-body">
                                            <p class="card-text"> Maecenas nec mi vel lacus condimentum rhoncus dignissim egestas orci. Integer blandit porta placerat. Vestibulum in ultricies. </p>
                                            <div class="user-info">
                                                <img src="{{asset('storage/img/90x90.jpg')}}" class="card-img-top" alt="...">
                                                <div class="media-body">
                                                    <h5 class="card-user_name">Luke Ivory</h5>
                                                    <p class="card-user_occupation">Manager</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
        &lt;div class="card component-card_5"&gt;
            &lt;div class="card-body"&gt;
                &lt;p class="card-text"&gt; Maecenas nec mi vel lacus condimentum rhoncus dignissim egestas orci. Integer blandit porta placerat. Vestibulum in ultricies. &lt;/p&gt;
                &lt;div class="user-info"&gt;
                    &lt;img src="{{asset('storage/img/90x90.jpg')}}" class="card-img-top" alt="..."&gt;
                    &lt;div class="media-body"&gt;
                        &lt;h5 class="card-user_name"&gt;Luke Ivory&lt;/h5&gt;
                        &lt;p class="card-user_occupation"&gt;Manager&lt;/p&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="card_6" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Card 6</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">

                                    <div class="card component-card_6">
                                        <div class="card-body">
                                            <p class="card-text"> Maecenas nec mi vel lacus condimentum rhoncus dignissim egestas orci. Integer blandit porta placerat. Vestibulum in ultricies. </p>
                                            <div class="user-info">
                                                <div class="media-body">
                                                    <h5 class="card-user_name">Luke Ivory</h5>
                                                    <p class="card-user_occupation">Manager</p>
                                                </div>
                                            </div>
                                            <div class="card-star_rating">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star fill"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star fill"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star fill"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star fill"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
        &lt;div class="card component-card_6"&gt;
            &lt;div class="card-body"&gt;
                &lt;p class="card-text"&gt; Maecenas nec mi vel lacus condimentum rhoncus dignissim egestas orci. Integer blandit porta placerat. Vestibulum in ultricies. &lt;/p&gt;
                &lt;div class="user-info"&gt;
                    &lt;div class="media-body"&gt;
                        &lt;h5 class="card-user_name"&gt;Luke Ivory&lt;/h5&gt;
                        &lt;p class="card-user_occupation"&gt;Manager&lt;/p&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;div class="card-star_rating"&gt;
                    &lt;svg&gt; ... &lt;/svg&gt;
                    &lt;svg&gt; ... &lt;/svg&gt;
                    &lt;svg&gt; ... &lt;/svg&gt;
                    &lt;svg&gt; ... &lt;/svg&gt;
                    &lt;svg&gt; ... &lt;/svg&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="card_7" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Card 7</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">

                                    <div class="card component-card_7">
                                        <div class="card-body">
                                            <h5 class="card-text">Rating</h5>
                                            <h6 class="rating-count">(4.3)</h6>
                                            <div class="rating-stars">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star fill"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star fill"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star fill"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star fill"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                <span class="r-rating-num">(94)</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
        &lt;div class="card component-card_7"&gt;
            &lt;div class="card-body"&gt;
                &lt;h5 class="card-text"&gt;Rating&lt;/h5&gt;
                &lt;h6 class="rating-count"&gt;(4.3)&lt;/h6&gt;
                &lt;div class="rating-stars"&gt;
                    &lt;svg&gt; ... &lt;/svg&gt;
                    &lt;svg&gt; ... &lt;/svg&gt;
                    &lt;svg&gt; ... &lt;/svg&gt;
                    &lt;svg&gt; ... &lt;/svg&gt;
                    &lt;svg&gt; ... &lt;/svg&gt;
                    &lt;span class="r-rating-num"&gt;(94)&lt;/span&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="card_8" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Card 8</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">

                                    <div class="card component-card_8">
                                        <div class="card-body">

                                            <div class="progress-order">
                                                <div class="progress-order-header">
                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-6 col-12">
                                                            <h6>Placed Order</h6>
                                                        </div>
                                                        <div class="col-md-6 pl-0 col-sm-6 col-12 text-right">
                                                            <span class="badge badge-info">IN PROGRESS</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="progress-order-body">
                                                    <div class="row mt-4">
                                                        <div class="col-md-12">
                                                            <ul class="list-inline badge-collapsed-img mb-0 mb-3">
                                                                <li class="list-inline-item chat-online-usr">
                                                                    <img alt="avatar" src="{{asset('storage/img/90x90.jpg')}}" class="ml-0">
                                                                </li>
                                                                <li class="list-inline-item chat-online-usr">
                                                                    <img alt="avatar" src="{{asset('storage/img/90x90.jpg')}}">
                                                                </li>
                                                                <li class="list-inline-item chat-online-usr">
                                                                    <img alt="avatar" src="{{asset('storage/img/90x90.jpg')}}">
                                                                </li>
                                                                <li class="list-inline-item chat-online-usr">
                                                                    <img alt="avatar" src="{{asset('storage/img/90x90.jpg')}}">
                                                                </li>
                                                                <li class="list-inline-item badge-notify mr-0">
                                                                    <div class="notification">
                                                                        <span class="badge badge-info badge-pill">+5 more</span>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-12 text-right">
                                                            <span class=" p-o-percentage mr-4">60%</span>
                                                            <div class="progress p-o-progress mt-2">
                                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
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
        &lt;div class="card component-card_8"&gt;
            &lt;div class="card-body"&gt;

                &lt;div class="progress-order"&gt;
                    &lt;div class="progress-order-header"&gt;
                        &lt;div class="row"&gt;
                            &lt;div class="col-md-6 col-sm-6 col-12"&gt;
                                &lt;h6&gt;Placed Order&lt;/h6&gt;
                            &lt;/div&gt;
                            &lt;div class="col-md-6 pl-0 col-sm-6 col-12 text-right"&gt;
                                &lt;span class="badge badge-info"&gt;IN PROGRESS&lt;/span&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;

                    &lt;div class="progress-order-body"&gt;
                        &lt;div class="row mt-4"&gt;
                            &lt;div class="col-md-12"&gt;
                                &lt;ul class="list-inline badge-collapsed-img mb-0 mb-3"&gt;
                                    &lt;li class="list-inline-item chat-online-usr"&gt;
                                        &lt;img alt="avatar" src="{{asset('storage/img/90x90.jpg')}}" class="ml-0"&gt;
                                    &lt;/li&gt;
                                    &lt;li class="list-inline-item chat-online-usr"&gt;
                                        &lt;img alt="avatar" src="{{asset('storage/img/90x90.jpg')}}"&gt;
                                    &lt;/li&gt;
                                    &lt;li class="list-inline-item chat-online-usr"&gt;
                                        &lt;img alt="avatar" src="{{asset('storage/img/90x90.jpg')}}"&gt;
                                    &lt;/li&gt;
                                    &lt;li class="list-inline-item chat-online-usr"&gt;
                                        &lt;img alt="avatar" src="{{asset('storage/img/90x90.jpg')}}"&gt;
                                    &lt;/li&gt;
                                    &lt;li class="list-inline-item badge-notify mr-0"&gt;
                                        &lt;div class="notification"&gt;
                                            &lt;span class="badge badge-info badge-pill"&gt;+5 more&lt;/span&gt;
                                        &lt;/div&gt;
                                    &lt;/li&gt;
                                &lt;/ul&gt;
                            &lt;/div&gt;
                            &lt;div class="col-md-12 text-right"&gt;
                                &lt;span class=" p-o-percentage mr-4"&gt;60%&lt;/span&gt;
                                &lt;div class="progress p-o-progress mt-2"&gt;
                                    &lt;div class="progress-bar bg-primary" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;

            &lt;/div&gt;
        &lt;/div&gt;</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="card_9" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Card 9</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">

                                    <div class="card component-card_9">
                                        <img src="{{asset('storage/img/400x300.jpg')}}" class="card-img-top" alt="widget-card-2">
                                        <div class="card-body">
                                            <p class="meta-date">25 Sep 2019</p>

                                            <h5 class="card-title">How to Start a Blog in 5 Easy Steps.</h5>
                                            <p class="card-text">Vestibulum vestibulum tortor ut eros tincidunt, ut rutrum elit volutpat.</p>

                                            <div class="meta-info">
                                                <div class="meta-user">
                                                    <div class="avatar avatar-sm">
                                                        <span class="avatar-title rounded-circle">AG</span>
                                                    </div>
                                                    <div class="user-name">Luke Ivory</div>
                                                </div>

                                                <div class="meta-action">
                                                    <div class="meta-likes">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg> 51
                                                    </div>

                                                    <div class="meta-view">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg> 250
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
        &lt;div class="card component-card_9"&gt;
            &lt;img src="{{asset('storage/img/400x300.jpg')}}" class="card-img-top" alt="widget-card-2"&gt;
            &lt;div class="card-body"&gt;
                &lt;p class="meta-date"&gt;25 Sep 2019&lt;/p&gt;

                &lt;h5 class="card-title"&gt;How to Start a Blog in 5 Easy Steps.&lt;/h5&gt;
                &lt;p class="card-text"&gt;Vestibulum vestibulum tortor ut eros tincidunt, ut rutrum elit volutpat.&lt;/p&gt;

                &lt;div class="meta-info"&gt;
                    &lt;div class="meta-user"&gt;
                        &lt;div class="avatar avatar-sm"&gt;
                            &lt;span class="avatar-title rounded-circle"&gt;AG&lt;/span&gt;
                        &lt;/div&gt;
                        &lt;div class="user-name"&gt;Luke Ivory&lt;/div&gt;
                    &lt;/div&gt;

                    &lt;div class="meta-action"&gt;
                        &lt;div class="meta-likes"&gt;
                            &lt;svg&gt; ... &lt;/svg&gt; 51
                        &lt;/div&gt;

                        &lt;div class="meta-view"&gt;
                            &lt;svg&gt; ... &lt;/svg&gt; 250
                        &lt;/div&gt;
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

                </div>
            </div>
@endsection