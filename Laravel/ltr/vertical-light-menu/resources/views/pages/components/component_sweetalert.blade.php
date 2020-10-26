@extends('layouts.app')

@section('content')
            <div class="container">

                <div class="container">

                    <div id="navSection" data-spy="affix" class="nav  sidenav">
                        <div class="sidenav-content">
                            <a href="#saBasic" class="active nav-link">Basic</a>
                            <a href="#saMessage" class="nav-link">Message</a>
                            <a href="#saDynamic" class="nav-link">Dynamic</a>
                            <a href="#satitle" class="nav-link">A title with text</a>
                            <a href="#saChaining" class="nav-link">Chaining modals</a>
                            <a href="#saAnimation" class="nav-link">Animation</a>
                            <a href="#saAuto" class="nav-link">Auto close timer</a>
                            <a href="#saImage" class="nav-link">Custom image</a>
                            <a href="#saHTML" class="nav-link">Custom HTML</a>
                            <a href="#saWarning" class="nav-link">Warning message</a>
                            <a href="#saCancel" class="nav-link">Cancel</a>
                            <a href="#saCustom" class="nav-link">Custom Style</a>
                            <a href="#saFooter" class="nav-link">Footer</a>
                            <a href="#saRTL" class="nav-link">RTL</a>
                            <a href="#saMixin" class="nav-link">Mixin</a>
                        </div>
                    </div>

                    <div class="row layout-top-spacing" id="cancel-row">

                        <div id="saBasic" class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Basic message</h4>
                                        </div>
                                    </div>
                                </div>                            
                                <div class="widget-content widget-content-area text-center">
                                    <button class="mr-2 btn btn-primary message">Basic message</button>

                                    <div class="code-section-container show-code">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;button class="mr-2 btn btn-primary message"&gt;Basic message&lt;/button&gt;

$('.widget-content .message').on('click', function () {
  swal({
      title: 'Saved succesfully',
      padding: '2em'
    })
})</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="saMessage" class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Success message</h4>
                                        </div>
                                    </div>
                                </div>                            
                                <div class="widget-content widget-content-area text-center">
                                    <button class="mr-2 btn btn-primary success">Success message!</button>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;button class="mr-2 btn btn-primary success"&gt;Success message!&lt;/button&gt;

$('.widget-content .success').on('click', function () {
  swal({
      title: 'Good job!',
      text: "You clicked the!",
      type: 'success',
      padding: '2em'
    })
})</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="saDynamic" class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Dynamic queue</h4>
                                        </div>
                                    </div>
                                </div>                            
                                <div class="widget-content widget-content-area text-center">
                                    <button class="mr-2 btn btn-primary dynamic-queue">Dynamic queue</button>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;button class="mr-2 btn btn-primary dynamic-queue"&gt;Dynamic queue&lt;/button&gt;

$('.widget-content .dynamic-queue').on('click', function () {
    const ipAPI = 'https://api.ipify.org?format=json'
    swal.queue([{
        title: 'Your public IP',
        confirmButtonText: 'Show my public IP',
        text:
          'Your public IP will be received ' +
          'via AJAX request',
        showLoaderOnConfirm: true,
        preConfirm: function() {
          return fetch(ipAPI)
            .then(function (response) { 
                return response.json();
            })
            .then(function(data) {
               return swal.insertQueueStep(data.ip)
            })
            .catch(function() {
              swal.insertQueueStep({
                type: 'error',
                title: 'Unable to get your public IP'
              })
            })
        }
    }])

})</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="satitle" class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>A title with a text under</h4>
                                        </div>
                                    </div>
                                </div>                            
                                <div class="widget-content widget-content-area text-center">
                                    <button class="mr-2 btn btn-primary  title-text">Title &amp; text</button>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;button class="mr-2 btn btn-primary  title-text"&gt;Title &amp; text&lt;/button&gt;

$('.widget-content .title-text').on('click', function () {
  swal({
      title: 'The Internet?',
      text: "That thing is still around?",
      type: 'question',
      padding: '2em'
  })

})</pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="saChaining" class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Chaining modals (queue)</h4>
                                        </div>
                                    </div>
                                </div>                            
                                <div class="widget-content widget-content-area text-center">
                                    <button class="mr-2 btn btn-primary chaining-modals">Chaining modals (queue)</button>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;button class="mr-2 btn btn-primary chaining-modals"&gt;Chaining modals (queue)&lt;/button&gt;

$('.widget-content .chaining-modals').on('click', function () {
  swal.mixin({
    input: 'text',
    confirmButtonText: 'Next &rarr;',
    showCancelButton: true,
    progressSteps: ['1', '2', '3'],
    padding: '2em',
  }).queue([
    {
      title: 'Question 1',
      text: 'Chaining swal2 modals is easy'
    },
    'Question 2',
    'Question 3'
  ]).then(function(result) {
    if (result.value) {
      swal({
        title: 'All done!',
        padding: '2em',
        html:
          'Your answers: &lt;pre&gt;' +
            JSON.stringify(result.value) +
          '&lt;/pre&gt;',
        confirmButtonText: 'Lovely!'
      })
    }
  })
})</pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="saAnimation" class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Custom animation</h4>
                                        </div>
                                    </div>
                                </div>                            
                                <div class="widget-content widget-content-area text-center">
                                    <button class="mr-2 btn btn-primary html-jquery">Custom animation</button>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;button class="mr-2 btn btn-primary html-jquery"&gt;Custom animation&lt;/button&gt;

$('.widget-content .html-jquery').on('click', function () {
  swal({
    title: 'Custom animation with Animate.css',
    animation: false,
    customClass: 'animated tada',
    padding: '2em'
  })
})</pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="saAuto" class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Message with auto close timer</h4>
                                        </div>
                                    </div>
                                </div>                            
                                <div class="widget-content widget-content-area text-center">
                                    <button class="mr-2 btn btn-primary timer">Message timer</button>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;button class="mr-2 btn btn-primary timer"&gt;Message timer&lt;/button&gt;

$('.widget-content .timer').on('click', function () {
  swal({
    title: 'Auto close alert!',
    text: 'I will close in 2 seconds.',
    timer: 2000,
    padding: '2em',
    onOpen: function () {
      swal.showLoading()
    }
  }).then(function (result) {
    if (
      // Read more about handling dismissals
      result.dismiss === swal.DismissReason.timer
    ) {
      console.log('I was closed by the timer')
    }
  })
})</pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="saImage" class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Message with custom image</h4>
                                        </div>
                                    </div>
                                </div>                            
                                <div class="widget-content widget-content-area text-center">
                                    <button class="mr-2 btn btn-primary custom-image">Message with custom image</button>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;button class="mr-2 btn btn-primary custom-image"&gt;Message with custom image&lt;/button&gt;

$('.widget-content .custom-image').on('click', function () {
  swal({
    title: 'Sweet!',
    text: 'Modal with a custom image.',
    imageUrl: 'assets/img/thumbs-up.jpg',
    imageWidth: 400,
    imageHeight: 200,
    imageAlt: 'Custom image',
    animation: false,
    padding: '2em'
  })
})</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="saHTML" class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Custom HTML description and buttons</h4>
                                        </div>
                                    </div>
                                </div>                            
                                <div class="widget-content widget-content-area text-center">
                                    <button class="mr-2 btn btn-primary  html">Custom Description &amp; buttons</button>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;button class="mr-2 btn btn-primary  html"&gt;Custom Description &amp; buttons&lt;/button&gt;

$('.widget-content .html').on('click', function () {
  swal({
    title: '&lt;i&gt;HTML&lt;/i&gt; &lt;u&gt;example&lt;/u&gt;',
    type: 'info',
    html:
      'You can use &lt;b&gt;bold text&lt;/b&gt;, ' +
      '&lt;a href="//github.com"&gt;links&lt;/a&gt; ' +
      'and other HTML tags',
    showCloseButton: true,
    showCancelButton: true,
    focusConfirm: false,
    confirmButtonText:
      '&lt;i class="flaticon-checked-1"&gt;&lt;/i&gt; Great!',
    confirmButtonAriaLabel: 'Thumbs up, great!',
    cancelButtonText:
    '&lt;i class="flaticon-cancel-circle"&gt;&lt;/i&gt; Cancel',
    cancelButtonAriaLabel: 'Thumbs down',
    padding: '2em'
  })

})</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="saWarning" class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Warning message, with "Confirm" button</h4>
                                        </div>
                                    </div>
                                </div>                            
                                <div class="widget-content widget-content-area text-center">
                                    <button class="mr-2 btn btn-primary  warning confirm">Confirm</button>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;button class="mr-2 btn btn-primary  warning confirm"&gt;Confirm&lt;/button&gt;

$('.widget-content .warning.confirm').on('click', function () {
  swal({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Delete',
      padding: '2em'
    }).then(function(result) {
      if (result.value) {
        swal(
          'Deleted!',
          'Your file has been deleted.',
          'success'
        )
      }
    })
})</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="saCancel" class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Execute something else for "Cancel".</h4>
                                        </div>
                                    </div>
                                </div>                            
                                <div class="widget-content widget-content-area text-center">
                                    <button class="mr-2 btn btn-primary  warning cancel">Addition else for "Cancel".</button>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;button class="mr-2 btn btn-primary  warning cancel"&gt;Addition else for "Cancel".&lt;/button&gt;

$('.widget-content .warning.cancel').on('click', function () {
  const swalWithBootstrapButtons = swal.mixin({
    confirmButtonClass: 'btn btn-success btn-rounded',
    cancelButtonClass: 'btn btn-danger btn-rounded mr-3',
    buttonsStyling: false,
  })

  swalWithBootstrapButtons({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    type: 'warning',
    showCancelButton: true,
    confirmButtonText: 'Yes, delete it!',
    cancelButtonText: 'No, cancel!',
    reverseButtons: true,
    padding: '2em'
  }).then(function(result) {
    if (result.value) {
      swalWithBootstrapButtons(
        'Deleted!',
        'Your file has been deleted.',
        'success'
      )
    } else if (
      // Read more about handling dismissals
      result.dismiss === swal.DismissReason.cancel
    ) {
      swalWithBootstrapButtons(
        'Cancelled',
        'Your imaginary file is safe :)',
        'error'
      )
    }
  })
})</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="saCustom" class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>A message with custom width, padding and background</h4>
                                        </div>
                                    </div>
                                </div>                            
                                <div class="widget-content widget-content-area text-center">
                                    <button class="mr-2 btn btn-primary  custom-width-padding-background">Custom Message</button>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;button class="mr-2 btn btn-primary  custom-width-padding-background"&gt;Custom Message&lt;/button&gt;

$('.widget-content .custom-width-padding-background').on('click', function () {
  swal({
    title: 'Custom width, padding, background.',
    width: 600,
    padding: "7em",
    customClass: "background-modal",
    background: '#fff url(assets/img/sweet-bg.jpg) no-repeat 100% 100%',
  })
})</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="saFooter" class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>With Footer</h4>
                                        </div>
                                    </div>
                                </div>                            
                                <div class="widget-content widget-content-area text-center">
                                    <button class="mr-2 btn btn-primary  footer">With Footer</button>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;button class="mr-2 btn btn-primary  footer"&gt;With Footer&lt;/button&gt;

$('.widget-content .footer').on('click', function () {
  swal({
    type: 'error',
    title: 'Oops...',
    text: 'Something went wrong!',
    footer: '&lt;a href&gt;Why do I have this issue?&lt;/a&gt;',
    padding: '2em'
  })
})</pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="saRTL" class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>RTL Support</h4>
                                        </div>
                                    </div>
                                </div>                            
                                <div class="widget-content widget-content-area text-center">
                                    <button class="mr-2 btn btn-primary  RTL">RTL</button>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;button class="mr-2 btn btn-primary  RTL"&gt;RTL&lt;/button&gt;

$('.widget-content .RTL').on('click', function () {
  swal({
    title: 'هل تريد الاستمرار؟',
    confirmButtonText:  'نعم',
    cancelButtonText:  'لا',
    showCancelButton: true,
    showCloseButton: true,
    padding: '2em',
    target: document.getElementById('rtl-container')
  })

})</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="saMixin" class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Mixin</h4>
                                        </div>
                                    </div>
                                </div>                            
                                <div class="widget-content widget-content-area text-center">
                                    <button class="mr-2 btn btn-primary  mixin">Mixin</button>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;button class="mr-2 btn btn-primary  mixin"&gt;Mixin&lt;/button&gt;

$('.widget-content .mixin').on('click', function () {
  const toast = swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    padding: '2em'
  });

  toast({
    type: 'success',
    title: 'Signed in successfully',
    padding: '2em',
  })

})</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
@endsection