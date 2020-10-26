@extends('layouts.app')

@section('content')
            <div class="container">
                <div class="container">

                    <div id="navSection" data-spy="affix" class="nav  sidenav">
                        <div class="sidenav-content">
                            <a href="#blockUIblocking" class="active nav-link">Blocking</a>
                            <a href="#blockUIgrowl" class="nav-link">Growl</a>
                            <a href="#blockUIposition" class="nav-link">Position</a>
                            <a href="#blockUIautoUnblock" class="nav-link">Auto Unblocking</a>
                            <a href="#blockUICallback" class="nav-link">Callback</a>
                            <a href="#blockUIDefMessage" class="nav-link">Default Message</a>
                            <a href="#blockUIAnimation" class="nav-link">Animation</a>
                            <a href="#blockUIModal" class="nav-link">Modal</a>
                            <a href="#blockUIOverlay" class="nav-link">Overlay</a>
                            <a href="#blockUIStyle" class="nav-link">Style</a>
                            <a href="#blockUIMultipleMessage" class="nav-link">Muliple Message</a>
                        </div>
                    </div>
                
                    <div class="row layout-spacing layout-top-spacing" id="cancel-row">

                        <div id="blockUIblocking" class="col-xl-12 col-sm-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Page blocking</h4>
                                        </div>
                                    </div>
                                </div>                            
                                <div class="widget-content widget-content-area text-center">
                                    <button id="block-page" class="mr-2 btn btn-primary">Block the whole page</button>

                                    <div class="code-section-container show-code">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;button id="block-page" class="mr-2 btn btn-primary"&gt;Block the whole page&lt;/button&gt;

$('#block-page').on('click', function() {
    $.blockUI({
        message: '&lt;svg&gt; ... &lt;/svg&gt;',
        fadeIn: 800, 
        timeout: 2000, //unblock after 2 seconds
        overlayCSS: {
            backgroundColor: '#1b2024',
            opacity: 0.8,
            zIndex: 1200,
            cursor: 'wait'
        },
        css: {
            border: 0,
            color: '#fff',
            zIndex: 1201,
            padding: 0,
            backgroundColor: 'transparent'
        }
    });
});
</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="blocking" class="col-xl-12 col-sm-12 layout-spacing">
                            <div class="statbox widget box box-shadow" id="reload">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Layout area blocking</h4>
                                        </div>
                                    </div>
                                </div>                            
                                <div class="widget-content widget-content-area text-center">
                                    <button id="block-content" class="mr-2 btn btn-primary message">Layout area blocking</button>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;button id="block-content" class="mr-2 btn btn-primary message"&gt;Layout area blocking&lt;/button&gt;

$('#block-content').on('click', function() {
    var block = $('#reload');
    $(block).block({ 
        message: '&lt;svg&gt; ... &lt;/svg&gt;',
        timeout: 2000, //unblock after 2 seconds
        overlayCSS: {
            backgroundColor: '#000',
            opacity: 0.8,
            cursor: 'wait'
        },
        css: {
            border: 0,
            color: '#fff',
            padding: 0,
            backgroundColor: 'transparent'
        }
    });
});
</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="blockUIgrowl" class="col-xl-12 col-sm-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Growl</h4>
                                        </div>
                                    </div>
                                </div>                            
                                <div class="widget-content widget-content-area text-center">
                                    <button id="block-growl" class="mr-2 btn btn-primary message">Growl</button>
                                    <div class="blockui-growl-message">
                                        <i class="flaticon-exclamation"></i>&nbsp; BlockUI Growl Notification
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;button id="block-growl" class="mr-2 btn btn-primary message"&gt;Growl&lt;/button&gt;
&lt;div class="blockui-growl-message"&gt;
    &lt;i class="flaticon-exclamation"&gt;&lt;/i&gt;&nbsp; BlockUI Growl Notification
&lt;/div&gt;

// Growl notification
$('#block-growl').on('click', function() {
    $.blockUI({
        message: $('.blockui-growl-message'), 
        fadeIn: 700, 
        fadeOut: 700, 
        timeout: 3000, //unblock after 3 seconds
        showOverlay: false, 
        centerY: false, 
        css: { 
            width: '250px',
            backgroundColor: 'transparent',
            top: '20px',
            left: 'auto',
            right: '20px',
            border: 0,
            opacity: .95,
            zIndex: 1200,
        } 
    }); 
});

    </pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="blockUIposition" class="col-xl-12 col-sm-12 layout-spacing">
                            <div class="statbox widget box box-shadow" id="m-s-reload">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Message position</h4>
                                        </div>
                                    </div>
                                </div>                            
                                <div class="widget-content widget-content-area text-center">
                                    <button id="message-position" class="mr-2 btn btn-primary">Message position</button>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;button id="message-position" class="mr-2 btn btn-primary"&gt;Message position&lt;/button&gt;

$('#message-position').on('click', function() {
    var block = $('#m-s-reload');
    $(block).block({ 
        message: '&lt;svg&gt; ... &lt;/svg&gt;',
        timeout: 2000, //unblock after 2 seconds
        centerX: 0,
        centerY: 0,
        overlayCSS: {
            backgroundColor: '#fff',
            opacity: 0.8,
            cursor: 'wait'
        },
        css: {
            width: 35,
            top: '15px',
            left: '',
            right: '10px',
            bottom: 0,
            border: 0,
            padding: 0,
            backgroundColor: 'transparent'
        }
    });
});
</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="blockUIautoUnblock" class="col-xl-12 col-sm-12 layout-spacing">
                            <div class="statbox widget box box-shadow" id="a-u-reload">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Auto Unblocking</h4>
                                        </div>
                                    </div>
                                </div>                            
                                <div class="widget-content widget-content-area text-center">
                                    <button id="auto-unblock" class="mr-2 btn btn-primary">Auto Unblock</button>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;button id="auto-unblock" class="mr-2 btn btn-primary"&gt;Auto Unblock&lt;/button&gt;

$('#auto-unblock').on('click', function() {
    var block = $('#a-u-reload');
    $(block).block({
        message: '&lt;svg&gt; ... &lt;/svg&gt;',
        timeout: 2000, //unblock after 2 seconds
        overlayCSS: {
            backgroundColor: '#fff',
            opacity: 0.8,
            cursor: 'wait'
        },
        css: {
            border: 0,
            padding: 0,
            backgroundColor: 'transparent'
        }
    });
});
</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="blockUICallback" class="col-xl-12 col-sm-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>onBlock callback</h4>
                                        </div>
                                    </div>
                                </div>                            
                                <div class="widget-content widget-content-area text-center">
                                    <button id="block-callback" class="mr-2 btn btn-primary">onBlock callback</button>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;button id="block-callback" class="mr-2 btn btn-primary"&gt;onBlock callback&lt;/button&gt;

$('#block-callback').on('click', function() {
    $.blockUI({
        message: '&lt;svg&gt; ... &lt;/svg&gt;',
        fadeIn: 800, 
        timeout: 2000, //unblock after 2 seconds
        overlayCSS: {
            backgroundColor: '#1b2024',
            opacity: 0.8,
            zIndex: 1200,
            cursor: 'wait'
        },
        css: {
            border: 0,
            color: '#fff',
            zIndex: 1201,
            padding: 0,
            backgroundColor: 'transparent'
        },
        onBlock: function() {
            alert('Page is now blocked. FadeIn completed.'); 
        } 
    });
});
</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="blockUIDefMessage" class="col-xl-12 col-sm-12 layout-spacing">
                            <div class="statbox widget box box-shadow" id="d-t-reload">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Block with default message</h4>
                                        </div>
                                    </div>
                                </div>                            
                                <div class="widget-content widget-content-area text-center">
                                    <button id="default-message" class="mr-2 btn btn-primary">Default Message</button>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;button id="default-message" class="mr-2 btn btn-primary"&gt;Default Message&lt;/button&gt;

$('#default-message').on('click', function() {
    var block = $('#d-t-reload');
    $(block).block({
        message: '&lt;span class="text-semibold"&gt;Please wait...&lt;/span&gt;',
        timeout: 2000, //unblock after 2 seconds
        overlayCSS: {
            backgroundColor: '#fff',
            opacity: 0.8,
            cursor: 'wait'
        },
        css: {
            border: 0,
            padding: 0,
            color: '#e7515a',
            backgroundColor: 'transparent'
        }
    });
});

</pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="blockUIAnimation" class="col-xl-12 col-sm-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Message Animation</h4>
                                        </div>
                                    </div>
                                </div>                            
                                <div class="widget-content widget-content-area text-center">
                                    <button class="mr-2 btn btn-primary" id="message-animation" data-animation="fadeInDown">Message Animation</button>

                                    <div class="blockui-animation-container">
                                        <span class="text-semibold"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-loader spin no-edge-top"><line x1="12" y1="2" x2="12" y2="6"></line><line x1="12" y1="18" x2="12" y2="22"></line><line x1="4.93" y1="4.93" x2="7.76" y2="7.76"></line><line x1="16.24" y1="16.24" x2="19.07" y2="19.07"></line><line x1="2" y1="12" x2="6" y2="12"></line><line x1="18" y1="12" x2="22" y2="12"></line><line x1="4.93" y1="19.07" x2="7.76" y2="16.24"></line><line x1="16.24" y1="7.76" x2="19.07" y2="4.93"></line></svg></span>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;button class="mr-2 btn btn-primary" id="message-animation" data-animation="fadeInDown"&gt;Message Animation&lt;/button&gt;
&lt;div class="blockui-animation-container"&gt;
    &lt;span class="text-semibold"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/span&gt;
&lt;/div&gt;

$('#message-animation').on('click', function() {
    var block = $(this).parent();
    $(block).block({
        message: $('.blockui-animation-container'),
        timeout: 3000, //unblock after 3 seconds
        overlayCSS: {
            backgroundColor: '#fff',
            opacity: 0.8,
            cursor: 'wait'
        },
        css: {
            width: 36,
            height: 36,
            color: '#000',
            border: 0,
            padding: 0,
            backgroundColor: 'transparent'
        }
    });

    var animation = $(this).data("animation");
    $('.blockui-animation-container').addClass("animated " + animation).one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend", function () {
        $(this).removeClass("animated " + animation);
    });
});

</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="blockUIModal" class="col-xl-12 col-sm-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Modal</h4>
                                        </div>
                                    </div>
                                </div>                            
                                <div class="widget-content widget-content-area text-center">
                                    <button class="mr-2 btn btn-primary message" data-toggle="modal" data-target="#exampleModal">Modal</button>

                                    <!-- Modal -->
                                    <div class="modal fade text-left" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content" id="modal-reload">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <form>
                                              <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                              </div>
                                              <div class="form-group">
                                                <label for="exampleInputPassword1">Password</label>
                                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                              </div>
                                              <div class="form-check pl-0">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="exampleCheck1">
                                                    <label class="custom-control-label" for="exampleCheck1">Check me out</label>
                                                </div>
                                              </div>
                                            </form>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn" data-dismiss="modal">Close</button>

                                            <button id="modal-blockui" type="button" class="btn btn-primary">Save</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;button class="mr-2 btn btn-primary message" data-toggle="modal" data-target="#exampleModal"&gt;Modal&lt;/button&gt;

$('#modal-blockui').on('click', function() {
    var block = $('#modal-reload');
    $(block).block({ 
        message: '&lt;svg&gt; ... &lt;/svg&gt;',
        showOverlay: false,
        timeout: 2000, //unblock after 2 seconds
        css: {
            border: 0,
            color: '#000',
            padding: 0,
            backgroundColor: 'transparent'
        }
    });
});
</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="blockUIOverlay" class="col-xl-12 col-sm-12 layout-spacing">
                            <div class="statbox widget box box-shadow" id="custom-overlay">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Custom Overlay</h4>
                                        </div>
                                    </div>
                                </div>                            
                                <div class="widget-content widget-content-area text-center">
                                    <button id="overlay-custom" class="mr-2 btn btn-primary">Overlay</button>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;button id="overlay-custom" class="mr-2 btn btn-primary"&gt;Overlay&lt;/button&gt;

$('#overlay-custom').on('click', function() {
    var block = $('#custom-overlay');
    $(block).block({ 
        message: '&lt;svg&gt; ... &lt;/svg&gt;',
        timeout: 2000, //unblock after 2 seconds
        overlayCSS: {
            backgroundColor: '#515365',
            opacity: 0.9,
            cursor: 'wait'
        },
        css: {
            border: 0,
            padding: 0,
            color: '#fff',
            backgroundColor: 'transparent'
        }
    });
});

</pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div id="blockUIStyle" class="col-xl-12 col-sm-12 layout-spacing">
                            <div class="statbox widget box box-shadow" id="c-style">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Custom Style</h4>
                                        </div>
                                    </div>
                                </div>                            
                                <div class="widget-content widget-content-area text-center">
                                    <button id="custom-message" class="mr-2 btn btn-primary">Custom</button>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;button id="custom-message" class="mr-2 btn btn-primary"&gt;Custom&lt;/button&gt;

$('#custom-message').on('click', function() {
    var block = $('#c-style');
    $(block).block({
        message: '&lt;span class="text-semibold"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/i&gt;&nbsp; Updating data&lt;/span&gt;',
        timeout: 2000, //unblock after 2 seconds
        overlayCSS: {
            backgroundColor: '#fff',
            opacity: 0.8,
            cursor: 'wait'
        },
        css: {
            border: 0,
            padding: '10px 15px',
            color: '#fff',
            width: 'auto',
            '-webkit-border-radius': 2,
            '-moz-border-radius': 2,
            backgroundColor: '#0e1726'
        }
    });
});
</pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="blockUIMultipleMessage" class="col-xl-12 col-sm-12 layout-spacing">
                            <div class="statbox widget box box-shadow" id="multi-message">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Multiple Message</h4>
                                        </div>
                                    </div>
                                </div>                            
                                <div class="widget-content widget-content-area text-center">
                                    <button id="multiple-messages" class="mr-2 btn btn-primary">Multiple</button>

                                    <div class="multiMessageBlockUi">
                                        <i class="flaticon-circle-reload-line spin"></i>
                                        <span class="text-semibold display-block">Loading</span>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;button id="multiple-messages" class="mr-2 btn btn-primary"&gt;Multiple&lt;/button&gt;

&lt;div class="multiMessageBlockUi"&gt;
    &lt;i class="flaticon-circle-reload-line spin"&gt;&lt;/i&gt;
    &lt;span class="text-semibold display-block"&gt;Loading&lt;/span&gt;
&lt;/div&gt;

$('#multiple-messages').on('click', function() {
    var message = $(this).next('.multiMessageBlockUi');
    var block = $(this).parent();
    $(block).block({ 
        message: message,
        overlayCSS: {
            backgroundColor: '#fff',
            opacity: 0.8,
            cursor: 'wait'
        },
        css: {
            width: 100,
            '-webkit-border-radius': 2,
            '-moz-border-radius': 2,
            border: 0,
            padding: 0,
            backgroundColor: 'transparent'
        },
        onBlock: function(){
            clearTimeout();
        }
    });

    window.setTimeout(function () {
       message.html('&lt;svg&gt; ... &lt;/svg&gt; &lt;span class="text-semibold display-block"&gt;Loading&lt;/span&gt;')
    }, 0); 

    window.setTimeout(function () {
       message.html('&lt;svg&gt; ... &lt;/svg&gt; &lt;span class="text-semibold display-block"&gt;Please wait&lt;/span&gt;')
    }, 2000); 

    window.setTimeout(function () {
       message.addClass('bg-danger').html('&lt;i class="flaticon-danger-3"&gt;&lt;/i&gt; &lt;span class="text-semibold display-block"&gt;Load error&lt;/span&gt;')
    }, 4000);

    window.setTimeout(function () {
       $(block).unblock({
        onUnblock: function(){
            message.removeClass('bg-danger');
        }
       });
    }, 6000);
});
</pre>                                </div>

                                    </div>
    
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                
            </div>
@endsection