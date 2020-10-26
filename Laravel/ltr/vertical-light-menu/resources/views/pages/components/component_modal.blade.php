@extends('layouts.app')

@section('content')
            <div class="container">
                <div class="container">

                    <div id="navSection" data-spy="affix" class="nav  sidenav">
                        <div class="sidenav-content">
                            <a href="#modalBasic" class="active nav-link">Basic</a>
                            <a href="#modalVerticallyCentered" class="nav-link">Vertically Centered</a>
                            <a href="#modalRemoveAnimation" class="nav-link">Remove animation</a>
                            <a href="#modalOptionalSizes" class="nav-link">Optional sizes</a>
                            <a href="#modalVideo" class="nav-link">Video</a>
                            <a href="#modalAnimationStyleModal" class="nav-link">Animation Style Modal</a>
                            <a href="#modalCustom" class="nav-link">Custom</a>
                        </div>
                    </div>

                    <div class="row layout-top-spacing">
                        <div id="modalBasic" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Basic</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">

                                    <p class="mb-3">Basic Bootastap 4 Modal.</p>

                                    <!-- Button trigger modal -->
                                    <div class="text-center">
                                        <button type="button" class="btn btn-primary mb-2 mr-2" data-toggle="modal" data-target="#exampleModal">
                                          Launch modal
                                        </button>
                                    </div>

                                    <div class="code-section-container show-code">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;!-- Modal --&gt;
&lt;div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"&gt;
    &lt;div class="modal-dialog" role="document"&gt;
        &lt;div class="modal-content"&gt;
            &lt;div class="modal-header"&gt;
                &lt;h5 class="modal-title" id="exampleModalLabel"&gt;Modal title&lt;/h5&gt;
                &lt;button type="button" class="close" data-dismiss="modal" aria-label="Close"&gt;
                  &lt;svg&gt; ... &lt;/svg&gt;
                &lt;/button&gt;
            &lt;/div&gt;
            &lt;div class="modal-body"&gt;
                &lt;p class="modal-text"&gt;Mauris mi tellus, pharetra vel mattis sed, tempus ultrices eros. Phasellus egestas sit amet velit sed luctus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse potenti. Vivamus ultrices sed urna ac pulvinar. Ut sit amet ullamcorper mi. &lt;/p&gt;
            &lt;/div&gt;
            &lt;div class="modal-footer"&gt;
                &lt;button class="btn" data-dismiss="modal"&gt;&lt;i class="flaticon-cancel-12"&gt;&lt;/i&gt; Discard&lt;/button&gt;
                &lt;button type="button" class="btn btn-primary"&gt;Save&lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</pre>
                                        </div>
                                    </div>


                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p class="modal-text">Mauris mi tellus, pharetra vel mattis sed, tempus ultrices eros. Phasellus egestas sit amet velit sed luctus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse potenti. Vivamus ultrices sed urna ac pulvinar. Ut sit amet ullamcorper mi. </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                                                    <button type="button" class="btn btn-primary">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="modalVerticallyCentered" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Vertically centered</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <p class="mb-3">Use <code>.modal-dialog-centered</code> class to vertically align modal.</p>

                                    <div class="text-center">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary mb-2 mr-2" data-toggle="modal" data-target="#exampleModalCenter">
                                          Launch modal
                                        </button>
                                    </div>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalCenterTitle">Vertically Aligned</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <h4 class="modal-heading mb-4 mt-2">Aligned Center</h4>
                                                        <p class="modal-text">In hac habitasse platea dictumst. Proin sollicitudin et lacus in tincidunt. Integer nisl ex, sollicitudin eget nulla nec, pharetra lacinia nisl. Aenean nec nunc ex. Integer varius neque at dolor scelerisque porttitor.</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                                                    <button type="button" class="btn btn-primary">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div id="modalRemoveAnimation" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Remove animation</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <p class="mb-3">Remove <code>.fade</code> class to remove animation.</p>
                                    <div class="text-center">
                                        <button type="button" class="btn btn-primary mb-2 mr-2" data-toggle="modal" data-target="#exampleModalRemoveAnimation">
                                            Launch modal
                                        </button> 
                                    </div>
                                    <div id="exampleModalRemoveAnimation" class="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalPopoversLabel">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header" id="exampleModalPopoversLabel">
                                            <h5 class="modal-title" id="exampleModalRemoveAnimationLabel1">No Animations</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                              <p class="modal-text">Proin sollicitudin et lacus in tincidunt. Integer nisl ex, sollicitudin eget nulla nec, pharetra lacinia nisl. Aenean nec nunc ex. Integer varius neque at dolor scelerisque porttitor. </p>
                                          </div>
                                          <div class="modal-footer">
                                            <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                                            <button type="button" class="btn btn-primary">Save</button>
                                          </div>
                                        </div>
                                       </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="modalOptionalSizes" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Optional sizes</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">

                                    <p class="mb-3">Use <code>.modal-xl</code> class for extra large, <code>.modal-lg</code> class for large and <code>.modal-sm</code> for small ( modal ).</p>

                                    <div class="text-center">
                                        <!-- xtra Large modal -->
                                        <button type="button" class="btn btn-primary mb-2 mr-2" data-toggle="modal" data-target=".bd-example-modal-xl">Extra large</button>
                                        <!-- Lage modal -->
                                        <button type="button" class="btn btn-primary mb-2 mr-2" data-toggle="modal" data-target=".bd-example-modal-lg">Large</button>
                                        <!-- Small modal -->
                                        <button type="button" class="btn btn-primary mb-2 mr-2" data-toggle="modal" data-target=".bd-example-modal-sm">Small</button>
                                    </div>

                                    <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                      <div class="modal-dialog modal-xl" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="myExtraLargeModalLabel">Extra Large</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p class="modal-text">Mauris mi tellus, pharetra vel mattis sed, tempus ultrices eros. Phasellus egestas sit amet velit sed luctus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse potenti. Vivamus ultrices sed urna ac pulvinar. Ut sit amet ullamcorper mi.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                                                <button type="button" class="btn btn-primary">Save</button>
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                    
                                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="myLargeModalLabel">Large</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p class="modal-text">Mauris mi tellus, pharetra vel mattis sed, tempus ultrices eros. Phasellus egestas sit amet velit sed luctus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse potenti. Vivamus ultrices sed urna ac pulvinar. Ut sit amet ullamcorper mi.</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                                                    <button type="button" class="btn btn-primary">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-sm" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="mySmallModalLabel">Small</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p class="modal-text">Mauris mi tellus, pharetra vel mattis sed, tempus ultrices eros. Phasellus egestas sit amet velit sed luctus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse potenti. Vivamus ultrices sed urna ac pulvinar. Ut sit amet ullamcorper mi.</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                                                    <button type="button" class="btn btn-primary">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div id="modalVideo" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Video</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area  text-center modal-video">

                                    <p class="mb-3">Bootstap Modal has been extended to use videos inside them.</p>

                                    <button id="yt-video-link" type="button" class="btn btn-primary mb-2 mr-2">Play Youtube</button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="videoMedia1" tabindex="-1" role="dialog" aria-labelledby="videoMedia1Label" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header" id="videoMedia1Label">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                                    </button>
                                                </div>
                                                <div class="modal-body p-0">
                                                    <div class="video-container">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <button id="vimeo-video-link" type="button" class="btn btn-primary mb-2 mr-2">Play Vimeo</button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="videoMedia2" tabindex="-1" role="dialog" aria-labelledby="videoMedia2Label" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header" id="videoMedia2Label">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                                    </button>
                                                </div>
                                                <div class="modal-body p-0">
                                                    <div class="video-container">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="code-section-container show-code">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
===========
  Youtube
===========

&lt;button id="yt-video-link" type="button" class="btn btn-primary mb-2 mr-2"&gt;Play Youtube&lt;/button&gt;
&lt;!-- Modal --&gt;
&lt;div class="modal fade" id="videoMedia1" tabindex="-1" role="dialog" aria-labelledby="videoMedia1Label" aria-hidden="true"&gt;
    &lt;div class="modal-dialog modal-lg" role="document"&gt;
        &lt;div class="modal-content"&gt;
            &lt;div class="modal-header" id="videoMedia1Label"&gt;
                &lt;button type="button" class="close" data-dismiss="modal" aria-label="Close"&gt;
                  &lt;svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"&gt;&lt;line x1="18" y1="6" x2="6" y2="18"&gt;&lt;/line&gt;&lt;line x1="6" y1="6" x2="18" y2="18"&gt;&lt;/line&gt;&lt;/svg&gt;
                &lt;/button&gt;
            &lt;/div&gt;
            &lt;div class="modal-body p-0"&gt;
                &lt;div class="video-container"&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;

===========
  Vimeo
===========

&lt;button id="vimeo-video-link" type="button" class="btn btn-primary mb-2 mr-2"&gt;Play Vimeo&lt;/button&gt;
&lt;!-- Modal --&gt;
&lt;div class="modal fade" id="videoMedia2" tabindex="-1" role="dialog" aria-labelledby="videoMedia2Label" aria-hidden="true"&gt;
    &lt;div class="modal-dialog modal-lg" role="document"&gt;
        &lt;div class="modal-content"&gt;
            &lt;div class="modal-header" id="videoMedia2Label"&gt;
                &lt;button type="button" class="close" data-dismiss="modal" aria-label="Close"&gt;
                  &lt;svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"&gt;&lt;line x1="18" y1="6" x2="6" y2="18"&gt;&lt;/line&gt;&lt;line x1="6" y1="6" x2="18" y2="18"&gt;&lt;/line&gt;&lt;/svg&gt;
                &lt;/button&gt;
            &lt;/div&gt;
            &lt;div class="modal-body p-0"&gt;
                &lt;div class="video-container"&gt;
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
                    
                    <div class="row">
                        <div id="modalAnimationStyleModal" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Animation Style Modal</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area  text-center">
                                    <p class="mb-2 mt-3">Use the following class given below for modal animation.</p>

                                    <div class="row">
                                            
                                        <div class="col-lg-6">
                                            <p class="mb-2 mt-3"><code>.fadeInDown</code></p>
                                            <!-- Fade in down modal -->
                                            <button type="button" class="btn btn-primary mb-2 mr-2" data-toggle="modal" data-target="#fadeinModal">FadeIn</button>
                                        </div>
                                        <div class="col-lg-6">
                                            <p class="mb-2 mt-3"><code>.slideInUp</code></p>
                                            <!-- Slide in up modal -->
                                            <button type="button" class="btn btn-warning mb-2 mr-2" data-toggle="modal" data-target="#slideupModal">SlideIn Up</button>
                                        </div>
                                        <div class="col-lg-6">
                                            <p class="mb-2 mt-3"><code>.fadeInUp</code></p>
                                            <!-- Fade in up modal -->
                                            <button type="button" class="btn btn-success mb-2 mr-2" data-toggle="modal" data-target="#fadeupModal">FadeIn Up</button>
                                        </div>
                                        <div class="col-lg-6">
                                            <p class="mb-2 mt-3"><code>.rotateInDownLeft</code></p>
                                            <!-- Rotate in right modal -->
                                            <button type="button" class="btn btn-info mb-2 mr-2" data-toggle="modal" data-target="#rotateleftModal">RotateIn Left</button>
                                        </div>
                                        <div class="col-lg-6">
                                            <p class="mb-2 mt-3"><code>.fadeInLeft</code></p>
                                            <!-- Fade in left modal -->
                                            <button type="button" class="btn btn-secondary mb-2 mr-2" data-toggle="modal" data-target="#fadeleftModal">FadeIn Left</button>
                                        </div>
                                        <div class="col-lg-6">
                                            <p class="mb-2 mt-3"><code>.zoomInUp</code></p>
                                            <!-- Zoom in up modal -->
                                            <button type="button" class="btn btn-danger mb-2 mr-2" data-toggle="modal" data-target="#zoomupModal">ZoomIn Up</button>
                                        </div>
                                        <div class="col-lg-6">
                                            <p class="mb-2 mt-3"><code>.fadeInRight</code></p>
                                            <!-- Fade in right modal -->
                                            <button type="button" class="btn btn-dark mb-2 mr-2" data-toggle="modal" data-target="#faderightModal">FadeIn Right</button>
                                        </div>

                                    </div>

                                        <div id="fadeinModal" class="modal animated fadeInDown" role="dialog">
                                            <div class="modal-dialog">
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Modal Header</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                          <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                                        </button>
                                                    </div>

                                                    <div class="modal-body">
                                                          <p class="modal-text">Nulla imperdiet sed ipsum non lacinia. Duis accumsan egestas nulla, vel commodo orci tempus quis. Fusce malesuada felis nec vehicula luctus. Proin luctus sapien nunc, quis varius dui gravida quis. Sed eget elit a augue porta elementum ut nec nibh. Morbi non dolor ac quam commodo interdum.</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                                                        <button type="button" class="btn btn-primary">Save</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    
                                        <div id="slideupModal" class="modal animated slideInUp custo-slideInUp" role="dialog">
                                            <div class="modal-dialog">
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Modal Header</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                          <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                      <p class="modal-text">Nulla imperdiet sed ipsum non lacinia. Duis accumsan egestas nulla, vel commodo orci tempus quis. Fusce malesuada felis nec vehicula luctus. Proin luctus sapien nunc, quis varius dui gravida quis. Sed eget elit a augue porta elementum ut nec nibh. Morbi non dolor ac quam commodo interdum.</p>
                                                    </div>
                                                    <div class="modal-footer md-button">
                                                        <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                                                        <button type="button" class="btn btn-primary">Save</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    
                                        <div id="fadeupModal" class="modal animated fadeInUp custo-fadeInUp" role="dialog">
                                            <div class="modal-dialog">
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Modal Header</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                          <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                          <p class="modal-text">Nulla imperdiet sed ipsum non lacinia. Duis accumsan egestas nulla, vel commodo orci tempus quis. Fusce malesuada felis nec vehicula luctus. Proin luctus sapien nunc, quis varius dui gravida quis. Sed eget elit a augue porta elementum ut nec nibh. Morbi non dolor ac quam commodo interdum.</p>
                                                    </div>
                                                    <div class="modal-footer md-button">
                                                        <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                                                        <button type="button" class="btn btn-primary">Save</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    
                                        <div id="rotateleftModal" class="modal animated rotateInDownLeft custo-rotateInDownLeft" role="dialog">
                                            <div class="modal-dialog">
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Modal Header</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                          <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                          <p class="modal-text">Nulla imperdiet sed ipsum non lacinia. Duis accumsan egestas nulla, vel commodo orci tempus quis. Fusce malesuada felis nec vehicula luctus. Proin luctus sapien nunc, quis varius dui gravida quis. Sed eget elit a augue porta elementum ut nec nibh. Morbi non dolor ac quam commodo interdum.</p>
                                                    </div>
                                                    <div class="modal-footer md-button">
                                                        <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                                                        <button type="button" class="btn btn-primary">Save</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    
                                        <div id="fadeleftModal" class="modal animated fadeInLeft custo-fadeInLeft" role="dialog">
                                            <div class="modal-dialog">
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Modal Header</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                          <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                          <p class="modal-text">Nulla imperdiet sed ipsum non lacinia. Duis accumsan egestas nulla, vel commodo orci tempus quis. Fusce malesuada felis nec vehicula luctus. Proin luctus sapien nunc, quis varius dui gravida quis. Sed eget elit a augue porta elementum ut nec nibh. Morbi non dolor ac quam commodo interdum.</p>
                                                    </div>
                                                    <div class="modal-footer md-button">
                                                        <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                                                        <button type="button" class="btn btn-primary">Save</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    
                                        <div id="zoomupModal" class="modal animated zoomInUp custo-zoomInUp" role="dialog">
                                            <div class="modal-dialog">
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Modal Header</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                          <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                          <p class="modal-text">Nulla imperdiet sed ipsum non lacinia. Duis accumsan egestas nulla, vel commodo orci tempus quis. Fusce malesuada felis nec vehicula luctus. Proin luctus sapien nunc, quis varius dui gravida quis. Sed eget elit a augue porta elementum ut nec nibh. Morbi non dolor ac quam commodo interdum.</p>
                                                    </div>
                                                    <div class="modal-footer md-button">
                                                        <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                                                        <button type="button" class="btn btn-primary">Save</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="faderightModal" class="modal animated fadeInRight custo-fadeInRight" role="dialog">
                                            <div class="modal-dialog">
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Modal Header</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                          <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                          <p class="modal-text">Nulla imperdiet sed ipsum non lacinia. Duis accumsan egestas nulla, vel commodo orci tempus quis. Fusce malesuada felis nec vehicula luctus. Proin luctus sapien nunc, quis varius dui gravida quis. Sed eget elit a augue porta elementum ut nec nibh. Morbi non dolor ac quam commodo interdum.</p>
                                                    </div>
                                                    <div class="modal-footer md-button">
                                                        <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                                                        <button type="button" class="btn btn-primary">Save</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                </div>
                            </div>
                        </div>

                        <div id="modalCustom" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Custom</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area  text-center advance-content signinModal-content">
                                    <p class="mb-4">More Custom Modals.</p>

                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-warning mb-2 mr-2" data-toggle="modal" data-target="#standardModal">
                                      Standard
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade modal-notification" id="standardModal" tabindex="-1" role="dialog" aria-labelledby="standardModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document" id="standardModalLabel">
                                        <div class="modal-content">
                                          <div class="modal-body text-center">
                                              <div class="icon-content">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>
                                              </div>
                                              <p class="modal-text">Vivamus vitae hendrerit neque. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi consequat auctor turpis, vitae dictum augue efficitur vitae. Vestibulum a risus ipsum. Quisque nec lacus dolor. Quisque ornare tempor orci id rutrum.</p>
                                           </div>
                                          <div class="modal-footer justify-content-between">
                                            <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                                            <button type="button" class="btn btn-primary">Save</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-info mb-2 mr-2" data-toggle="modal" data-target="#tabsModal">
                                      Tabs
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="tabsModal" tabindex="-1" role="dialog" aria-labelledby="tabsModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="tabsModalLabel">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                                <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content" id="myTabContent">
                                                  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                                        <p class="modal-text">Vivamus vitae hendrerit neque. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi consequat auctor turpis, vitae dictum augue efficitur vitae. Vestibulum a risus ipsum. Quisque nec lacus dolor. Quisque ornare tempor orci id rutrum.</p></div>
                                                  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                                        <p class="modal-text">Fusce ac fringilla ex. Sed ligula ipsum, fringilla ut orci nec, suscipit commodo felis. Sed imperdiet eros dignissim, vehicula erat vel, rutrum lorem. In porttitor id ante nec laoreet. Etiam quis sapien ac nunc ullamcorper elementum. Fusce ullamcorper ante convallis nisl eleifend, sit amet dapibus urna eleifend.</p></div>
                                                  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                                        <p class="modal-text">Pellentesque semper tortor id ligula ultrices suscipit. Donec viverra vulputate lectus non consectetur. Donec ac interdum lacus. Donec euismod nisi at justo molestie elementum. Vivamus vitae hendrerit neque. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p></div>
                                                </div>
                                            </div>
                                          <div class="modal-footer">
                                            <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                                            <button type="button" class="btn btn-primary">Save</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>


                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-danger mb-2 mr-2" data-toggle="modal" data-target="#profileModal">
                                      Profile
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade profile-modal" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="profileModalLabel" aria-hidden="true">
                                      <div class="modal-dialog modal-sm" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>

                                          <div class="modal-header justify-content-center" id="profileModalLabel">
                                            <div class="modal-profile mt-4">
                                                <img alt="avatar" src="{{asset('storage/img/90x90.jpg')}}" class="rounded-circle">
                                            </div>
                                          </div>
                                          <div class="modal-body text-center">
                                                <p class="mt-2">Click on view to access your profile.</p>
                                          </div>
                                          <div class="modal-footer justify-content-center mb-4">
                                            <button type="button" class="btn">View</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-dark mb-2 mr-2" data-toggle="modal" data-target="#loginModal">
                                      Login
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade login-modal" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">

                                          <div class="modal-header" id="loginModalLabel">
                                            <h4 class="modal-title">Login</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                                          </div>
                                          <div class="modal-body">
                                            <form class="mt-0">
                                              <div class="form-group">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                                <input type="email" class="form-control mb-2" id="exampleInputEmail1" placeholder="Email">
                                              </div>
                                              <div class="form-group">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                                <input type="password" class="form-control mb-4" id="exampleInputPassword1" placeholder="Password">
                                              </div>
                                              <button type="submit" class="btn btn-primary mt-2 mb-2 btn-block">Login</button>
                                            </form>

                                            <div class="division">
                                                  <span>OR</span>
                                            </div>

                                            <div class="social">
                                                <a href="javascript:void(0);" class="btn social-fb"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg> <span class="brand-name">Facebook</span></a>
                                                <a href="javascript:void(0);" class="btn social-github"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg> <span class="brand-name">Github</span></a>
                                            </div>


                                          </div>
                                          <div class="modal-footer justify-content-center">
                                            <div class="forgot login-footer">
                                                <span>Looking to <a href="javascript:void(0);">create an account</a>?</span>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-secondary mb-2 mr-2" data-toggle="modal" data-target="#registerModal">
                                      Register
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade register-modal" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">

                                          <div class="modal-header" id="registerModalLabel">
                                            <h4 class="modal-title">Register</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                                          </div>
                                          <div class="modal-body">
                                            <form class="mt-0">
                                               <div class="form-group">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                                <input type="text" class="form-control mb-2" id="exampleInputUsername1" placeholder="Username">
                                              </div>
                                              <div class="form-group">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-at-sign"><circle cx="12" cy="12" r="4"></circle><path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path></svg>
                                                <input type="email" class="form-control mb-2" id="exampleInputEmail2" placeholder="Email">
                                              </div>
                                              <div class="form-group">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                                <input type="password" class="form-control mb-4" id="exampleInputPassword2" placeholder="Password">
                                              </div>
                                              <button type="submit" class="btn btn-primary mt-2 mb-2 btn-block">Register</button>
                                            </form>

                                            <div class="division">
                                                  <span>OR</span>
                                            </div>

                                            <div class="social">
                                                <a href="javascript:void(0);" class="btn social-fb"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg> <span class="brand-name">Facebook</span></a>
                                                <a href="javascript:void(0);" class="btn social-github"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg> <span class="brand-name">Github</span></a>
                                            </div>

                                          </div>
                                          <div class="modal-footer justify-content-center">
                                            <div class="forgot login-footer">
                                                <span>Already have <a href="javascript:void(0);">Login</a>?</span>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-success mb-2 mr-2" data-toggle="modal" data-target="#sliderModal">
                                      Slider
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="sliderModal" tabindex="-1" role="dialog" aria-labelledby="basicModalLabel" aria-hidden="true">
                                      <div class="modal-dialog modal-dialog-centered" id="basicModalLabel" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body p-0">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true"><svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></span>
                                                </button>
                                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                                    <ol class="carousel-indicators">
                                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
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
                                                        <span class="flaticon-left-arrow-1 carousel-control-prev-icon" aria-hidden="true"></span> 
                                                        <span class="carousel-control-prev-text"> Previous</span>
                                                    </a>
                                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                                        <span class="carousel-control-next-text"> Next</span>
                                                        <span class="flaticon-right-arrow-1 carousel-control-next-icon" aria-hidden="true"></span> 
                                                    </a>
                                                </div>
                                            </div>
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