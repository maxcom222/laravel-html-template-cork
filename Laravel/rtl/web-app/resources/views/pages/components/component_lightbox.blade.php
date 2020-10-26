@extends('layouts.app')

@section('content')
            <div class="layout-px-spacing">
                <div class="row" id="cancel-row">
                    <div class="col-lg-12 layout-spacing layout-top-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Lightbox</h4> 
                                    </div>          
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">

                                <div id="demo-test-gallery" class="demo-gallery" data-pswp-uid="1">

                                    <a class="img-1" href="{{asset('storage/img/1280x857.jpg')}}" data-size="1600x1068" data-med="{{asset('storage/img/1280x857.jpg')}}" data-med-size="1024x683" data-author="Samuel Rohl">
                                        <img src="{{asset('storage/img/1280x857.jpg')}}" alt="image-gallery">
                                        <figure>This is dummy caption. It has been placed here solely to demonstrate the look and feel of finished, typeset text.</figure>
                                    </a>

                                    <a class="img-2" href="{{asset('storage/img/1280x857.jpg')}}" data-size="1600x1068" data-med="{{asset('storage/img/1280x857.jpg')}}" data-med-size="1024x683" data-author="Samuel Rohl">
                                        <img src="{{asset('storage/img/1280x857.jpg')}}" alt="image-gallery">
                                        <figure>This is dummy caption. It has been placed here solely to demonstrate the look and feel of finished, typeset text.</figure>
                                    </a>

                                    <a class="img-3" href="{{asset('storage/img/1280x857.jpg')}}" data-size="1600x1067" data-med="{{asset('storage/img/1280x857.jpg')}}" data-med-size="1024x683" data-author="Michael Hull">
                                        <img src="{{asset('storage/img/1280x857.jpg')}}" alt="image-gallery">
                                        <figure>Dummy caption. It's Greek to you. Unless, of course, you're Greek, in which case, it really makes no sense.</figure>
                                    </a>

                                    <a class="img-4" href="{{asset('storage/img/1280x857.jpg')}}" data-size="1600x1600" data-med="{{asset('storage/img/1280x857.jpg')}}" data-med-size="1024x1024" data-author="Folkert Gorter">
                                        <img src="{{asset('storage/img/1280x857.jpg')}}" alt="image-gallery">
                                        <figure>This is dummy caption.</figure>
                                    </a>

                                    <a class="img-5" href="{{asset('storage/img/1280x857.jpg')}}" data-size="1600x1067" data-med="{{asset('storage/img/1280x857.jpg')}}" data-med-size="1024x683" data-author="Thomas Lefebvre">
                                        <img src="{{asset('storage/img/1280x857.jpg')}}" alt="image-gallery">
                                        <figure>It's a dummy caption. He who searches for meaning here will be sorely disappointed.</figure>
                                    </a>

                                    <a class="img-6" href="{{asset('storage/img/1280x857.jpg')}}" data-size="1600x1067" data-med="{{asset('storage/img/1280x857.jpg')}}" data-med-size="1024x683" data-author="Thomas Lefebvre">
                                        <img src="{{asset('storage/img/1280x857.jpg')}}" alt="image-gallery">
                                        <figure>It's a dummy caption. He who searches for meaning here will be sorely disappointed.</figure>
                                    </a>
                                    
                                </div>
                                <div class="style-select">
                                    <h5 style="visibility: hidden;">Demo gallery style</h5>
                                    <div class="radio mb-4">
                                        <div class="d-flex">
                                            <div class="n-chk">
                                                <label class="new-control new-radio radio-info">
                                                  <input type="radio" id="radio-all-controls" class="new-control-input" name="gallery-style" checked>
                                                  <span class="new-control-indicator"></span>
                                                    <span class="">
                                                        All controls<br/>
                                                        <span>caption, share and fullscreen buttons, tap to toggle controls</span>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="radio mb-4">
                                        <div class="d-flex">
                                            <div class="n-chk">
                                                <label class="new-control new-radio radio-info">
                                                  <input type="radio" id="radio-minimal-black" class="new-control-input" name="gallery-style">
                                                  <span class="new-control-indicator"></span>
                                                    <span class="">
                                                        Minimal<br/>
                                                        <span>no caption, transparent background, tap to close</span>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                

                                <!-- Root element of PhotoSwipe. Must have class pswp. -->
                                <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

                                    <!-- Background of PhotoSwipe. It's a separate element, as animating opacity is faster than rgba(). -->
                                    <div class="pswp__bg"></div>

                                    <!-- Slides wrapper with overflow:hidden. -->
                                    <div class="pswp__scroll-wrap">
                                        <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
                                        <!-- don't modify these 3 pswp__item elements, data is added later on. -->
                                        <div class="pswp__container">
                                            <div class="pswp__item"></div>
                                            <div class="pswp__item"></div>
                                            <div class="pswp__item"></div>
                                        </div>

                                        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
                                        <div class="pswp__ui pswp__ui--hidden">

                                            <div class="pswp__top-bar">

                                                <!--  Controls are self-explanatory. Order can be changed. -->
                                                <div class="pswp__counter"></div>
                                                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                                                <button class="pswp__button pswp__button--share" title="Share"></button>
                                                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                                                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                                                <!-- element will get class pswp__preloader--active when preloader is running -->
                                                <div class="pswp__preloader">
                                                    <div class="pswp__preloader__icn">
                                                      <div class="pswp__preloader__cut">
                                                        <div class="pswp__preloader__donut"></div>
                                                      </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                                                <div class="pswp__share-tooltip"></div> 
                                            </div>
                                            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                                            </button>
                                            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                                            </button>
                                            <div class="pswp__caption">
                                                <div class="pswp__caption__center"></div>
                                            </div>

                                          </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection