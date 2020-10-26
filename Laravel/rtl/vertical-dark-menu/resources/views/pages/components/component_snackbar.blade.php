@extends('layouts.app')

@section('content')
            <div class="container">

                <div class="container">

                    <div id="navSection" data-spy="affix" class="nav  sidenav">
                        <div class="sidenav-content">
                            <a href="#bs_toast" class="active nav-link">Bootstrap Toast</a>
                            <a href="#snackbar_toast" class="nav-link">SnackBar</a>
                        </div>
                    </div>

                    <div class="row layout-top-spacing" id="cancel-row">

                        <div id="bs_toast" class="col-lg-12">
                            <div class="seperator-header">
                                <h4 class="">Bootstrap Toast</h4>
                            </div>
                        </div>

                        <div id="snackbarBasic" class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Basic</h4>
                                        </div>
                                    </div>
                                </div>                            
                                <div class="widget-content widget-content-area">

                                    <button id="toast-btn" class="btn btn-primary">Open Toast</button>

                                    <div style="position: absolute; top: 0; right: 0;z-index: 9999; margin-left: 20px; margin-right: 20px;">
                                        <div class="toast toast-primary fade hide" role="alert" data-delay="6000" aria-live="assertive" aria-atomic="true">
                                            <div class="toast-header">
                                                <strong class="mr-auto">Bootstrap</strong>
                                                <small class="meta-time">just now</small>
                                                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="toast-body">
                                                Hello, world! This is a toast message.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="code-section-container show-code">
                                                
                                        <button class="btn toggle-code-snippet"><span>HTML</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;button id="toast-btn" class="btn btn-primary"&gt;Open Toast&lt;/button&gt;

&lt;!-- Toast Element --&gt;

&lt;div style="position: absolute; top: 0; right: 22px;left: 22px;z-index: 9999;"&gt;
    &lt;div class="toast toast-primary fade hide" role="alert" data-delay="6000" aria-live="assertive" aria-atomic="true"&gt;
        &lt;div class="toast-header"&gt;
            &lt;strong class="mr-auto"&gt;Bootstrap&lt;/strong&gt;
            &lt;small class="meta-time"&gt;just now&lt;/small&gt;
            &lt;button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close"&gt;
                &lt;span aria-hidden="true"&gt;&times;&lt;/span&gt;
            &lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="toast-body"&gt;
            Hello, world! This is a toast message.
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</pre>
                                        </div>
                                    </div>

                                    <div class="code-section-container show-code">
                                                
                                        <button class="btn toggle-code-snippet"><span>CSS</span></button>

                                        <div class="code-section text-left">
                                            <pre>
// Get the Toast button
var toastButton = document.getElementById("toast-btn");
// Get the Toast element
var toastElement = document.getElementsByClassName("toast")[0];

toastButton.onclick = function() {
    $('.toast').toast('show');
}
</pre>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>


                        <div id="snackbar_toast" class="col-lg-12">
                            <div class="seperator-header">
                                <h4 class="">SnackBar</h4>
                            </div>
                        </div>

                        <div class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Basic</h4>
                                        </div>
                                    </div>
                                </div>                            
                                <div class="widget-content widget-content-area text-center">
                                    <button class="btn btn-primary default">Default</button>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;button class="btn btn-primary default"&gt;Default&lt;/button&gt;

$('.default').click(function() {
   Snackbar.show({text: 'Example notification text.', duration: 100000});
});</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="snackbarPosition" class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Top Left</h4>
                                        </div>
                                    </div>
                                </div>                            
                                <div class="widget-content widget-content-area text-center">
                                    <button class="btn btn-success top-left">Top Left</button>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;button class="btn btn-success top-left"&gt;Top Left&lt;/button&gt;

$('.top-left').click(function() {
    Snackbar.show({
        text: 'Example notification text.',
        pos: 'top-left'
    });
});
</pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Top Center</h4>
                                        </div>
                                    </div>
                                </div>                            
                                <div class="widget-content widget-content-area text-center">
                                    <button class="btn btn-info top-center">Top Center</button>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;button class="btn btn-info top-center"&gt;Top Center&lt;/button&gt;

$('.top-center').click(function() {
    Snackbar.show({
        text: 'Example notification text.',
        pos: 'top-center'
    });
});
</pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                    

                        <div class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Top Right</h4>
                                        </div>
                                    </div>
                                </div>                            
                                <div class="widget-content widget-content-area text-center">
                                    <button class="btn btn-danger top-right">Top Right</button>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;button class="btn btn-danger top-right"&gt;Top Right&lt;/button&gt;

$('.top-right').click(function() {
    Snackbar.show({
        text: 'Example notification text.',
        pos: 'top-right'
    });
});
</pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Bottom Left</h4>
                                        </div>
                                    </div>
                                </div>                            
                                <div class="widget-content widget-content-area text-center">
                                    <button class="btn btn-warning bottom-left">Bottom Left</button>
                                    
                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;button class="btn btn-warning bottom-left"&gt;Bottom Left&lt;/button&gt;

$('.bottom-left').click(function() {
    Snackbar.show({
        text: 'Example notification text.',
        pos: 'bottom-left'
    });
});
</pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Bottom Center</h4>
                                        </div>
                                    </div>
                                </div>                            
                                <div class="widget-content widget-content-area text-center">
                                    <button class="btn btn-secondary bottom-center">Bottom Center</button>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;button class="btn btn-secondary bottom-center"&gt;Bottom Center&lt;/button&gt;

$('.bottom-center').click(function() {
    Snackbar.show({
        text: 'Example notification text.',
        pos: 'bottom-center'
    });
});
</pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Bottom right</h4>
                                        </div>
                                    </div>
                                </div>                            
                                <div class="widget-content widget-content-area text-center">
                                    <button class="btn btn-dark bottom-right">Bottom right</button>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;button class="btn btn-dark bottom-right"&gt;Bottom right&lt;/button&gt;

$('.bottom-right').click(function() {
    Snackbar.show({
        text: 'Example notification text.',
        pos: 'bottom-right'
    });
});
</pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="snackbarMethods" class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>No Action</h4>
                                        </div>
                                    </div>
                                </div>                            
                                <div class="widget-content widget-content-area text-center">
                                    <button class="btn btn-warning no-action">No Action</button>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;button class="btn btn-default no-action"&gt;No Action&lt;/button&gt;

$('.no-action').click(function() {
    Snackbar.show({
        showAction: false
    });
});
</pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Action Text</h4>
                                        </div>
                                    </div>
                                </div>                            
                                <div class="widget-content widget-content-area text-center">
                                    <button class="btn btn-primary action-text">Action Text</button>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;button class="btn btn-button-2 action-text"&gt;Action Text&lt;/button&gt;

$('.action-text').click(function() {
    Snackbar.show({
        actionText: 'Thanks!'
    });
});
</pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Text Color</h4>
                                        </div>
                                    </div>
                                </div>                            
                                <div class="widget-content widget-content-area text-center">
                                    <button class="btn btn-danger text-color">Text Color</button>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;button class="btn btn-button-3 text-color"&gt;Text Color&lt;/button&gt;

$('.text-color').click(function() {
    Snackbar.show({
        actionTextColor: '#e2a03f',
    });
});
</pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Click Callback</h4>
                                        </div>
                                    </div>
                                </div>                            
                                <div class="widget-content widget-content-area text-center">
                                    <button class="btn btn-info click-callback">Click Callback</button>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;button class="btn btn-button-4 click-callback"&gt;Click Callback&lt;/button&gt;

$('.click-callback').click(function() {
    Snackbar.show({
        text: 'Custom callback when action button is clicked.',
        width: 'auto',
        onActionClick: function(element) {
            //Set opacity of element to 0 to close Snackbar 
            $(element).css('opacity', 0);
            Snackbar.show({
                text: 'Thanks for clicking the  <strong>Dismiss</strong>  button!',
                showActionButton: false
            });
        }
    });
});
</pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Duration</h4>
                                        </div>
                                    </div>
                                </div>                            
                                <div class="widget-content widget-content-area text-center">
                                    <button class="btn btn-dark duration">Duration</button>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;button class="btn btn-button-5 duration"&gt;Duration&lt;/button&gt;

$('.duration').click(function() {
    Snackbar.show({
        text: 'Duration set to 5s',
        duration: 5000,
    });
});
</pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="snackbarBGColor" class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Background Color</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area text-center">
                                    <button class="btn mb-2 btn-primary snackbar-bg-primary">Primary</button>
                                    <button class="btn mb-2 btn-info snackbar-bg-info">Info</button>
                                    <button class="btn mb-2 btn-success snackbar-bg-success">Success</button>
                                    <button class="btn mb-2 btn-warning snackbar-bg-warning">Warning</button>
                                    <button class="btn mb-2 btn-danger snackbar-bg-danger">Danger</button>
                                    <button class="btn mb-2 btn-dark snackbar-bg-dark">Dark</button>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre class="HTML">
============= 
    Primary 
=============

&lt;button class="btn btn-primary snackbar-bg-primary"&gt;Primary&lt;/button&gt;

$('.snackbar-bg-primary').click(function() {
    Snackbar.show({
        text: 'Primary',
        actionTextColor: '#fff',
        backgroundColor: '#1b55e2'
    });
});

============= 
    Info 
=============

&lt;button class="btn btn-info snackbar-bg-info"&gt;Info&lt;/button&gt;

$('.snackbar-bg-info').click(function() {
    Snackbar.show({
        text: 'Info',
        actionTextColor: '#fff',
        backgroundColor: '#2196f3'
    });
});

============= 
   Success 
=============

&lt;button class="btn btn-success snackbar-bg-success"&gt;Success&lt;/button&gt;

$('.snackbar-bg-success').click(function() {
    Snackbar.show({
        text: 'Success',
        actionTextColor: '#fff',
        backgroundColor: '#8dbf42'
    });
});

============= 
   Warning 
=============

&lt;button class="btn btn-warning snackbar-bg-warning"&gt;Warning&lt;/button&gt;

$('.snackbar-bg-warning').click(function() {
    Snackbar.show({
        text: 'Warning',
        actionTextColor: '#fff',
        backgroundColor: '#e2a03f'
    });
});

============= 
   Danger 
=============

&lt;button class="btn btn-danger snackbar-bg-danger"&gt;Danger&lt;/button&gt;

$('.snackbar-bg-danger').click(function() {
    Snackbar.show({
        text: 'Danger',
        actionTextColor: '#fff',
        backgroundColor: '#e7515a'
    });
});

============= 
   Dark 
=============

&lt;button class="btn btn-dark snackbar-bg-dark"&gt;Dark&lt;/button&gt;

$('.snackbar-bg-dark').click(function() {
    Snackbar.show({
        text: 'Dark',
        actionTextColor: '#fff',
        backgroundColor: '#3b3f5c'
    });
});

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