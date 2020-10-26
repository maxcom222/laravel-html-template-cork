@extends('layouts.app')

@section('content')

            <div class="container">
                <div class="container">

                    <div id="navSection" data-spy="affix" class="nav  sidenav">
                        <div class="sidenav-content">
                            <a href="#fclCopyInput" class="active nav-link">Copy form Input</a>
                            <a href="#fclCopyTextarea" class="nav-link">Copy form Textarea</a>
                            <a href="#fclCoyParagraph" class="nav-link">Copy Text from Paragraph</a>
                            <a href="#fclAdvance" class="nav-link">Advanced</a>
                        </div>
                    </div>
                    
                    <div class="row layout-top-spacing">

                        <div id="fclCopyInput" class="col-lg-12 layout-spacing"> 
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                 
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Copy from input</h4> 
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area clipboard-copy-input">

                                    <p class="">The global Code for all the clipboards is <code>new Clipboard('.btn');</code></p>


                                    <div class="clipboard">
                                        <form class="form-horizontal">
                                            <input type="text" class="form-control mb-4" id="input-copy" value="http://www.admin-dashboard.com">
                                            <a class="mb-1 btn btn-primary" href="javascript:;" data-clipboard-action="copy" data-clipboard-target="#input-copy"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg> Copy from Input</a>
                                            <a class="mb-1 btn btn-dark" href="javascript:;" data-clipboard-action="cut" data-clipboard-target="#input-copy"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg> Cut from Input</a>
                                        </form>
                                    </div>

                                    <div class="code-section-container show-code">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div class="clipboard"&gt;
    &lt;form class="form-horizontal"&gt;
        &lt;input type="text" class="form-control mb-4" id="input-copy" value="http://www.admin-dashboard.com"&gt;
        &lt;a class="mb-1 btn btn-primary" href="javascript:;" data-clipboard-action="copy" data-clipboard-target="#input-copy"&gt;&lt;svg&gt; ... &lt;/svg&gt; Copy from Input&lt;/a&gt;
        &lt;a class="mb-1 btn btn-dark" href="javascript:;" data-clipboard-action="cut" data-clipboard-target="#input-copy"&gt;&lt;svg&gt; ... &lt;/svg&gt; Cut from Input&lt;/a&gt;
    &lt;/form&gt;
&lt;/div&gt;
</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="fclCopyTextarea" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Copy from Text Area</h4> 
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area clipboard-copy-textarea">
                                    <div class="clipboard">
                                        <form class="form-horizontal">
                                            <textarea class="form-control mb-4" rows="3" id="textarea-copy">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</textarea>
                                            <a class="mb-1 btn btn-primary" href="javascript:;" data-clipboard-action="copy" data-clipboard-target="#textarea-copy"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg> Copy from Input</a>
                                            <a class="mb-1 btn btn-dark" href="javascript:;" data-clipboard-action="cut" data-clipboard-target="#textarea-copy"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg> Cut from Input</a>
                                        </form>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div class="clipboard"&gt;
    &lt;form class="form-horizontal"&gt;
        &lt;textarea class="form-control mb-4" rows="3" id="textarea-copy"&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit...&lt;/textarea&gt;
        &lt;a class="mb-1 btn btn-primary" href="javascript:;" data-clipboard-action="copy" data-clipboard-target="#textarea-copy"&gt;&lt;svg&gt; ... &lt;/svg&gt; Copy from Input&lt;/a&gt;
        &lt;a class="mb-1 btn btn-dark" href="javascript:;" data-clipboard-action="cut" data-clipboard-target="#textarea-copy"&gt;&lt;svg&gt; ... &lt;/svg&gt; Cut from Input&lt;/a&gt;
    &lt;/form&gt;
&lt;/div&gt;
</pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    
                    <div class="row">

                        <div id="fclCoyParagraph" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Copy Text from Paragraph</h4> 
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area clipboard-copy-para">
                                    <div class="clipboard copy-txt">
                                        <p class="otp-pass">Here is your OTP <span id="paragraph-copy1">22991</span>.</p>
                                        <p class="mb-4">Please do not share it to anyone</p>
                                        <a class="mb-1 btn btn-primary" href="javascript:;" data-clipboard-action="copy" data-clipboard-target="#paragraph-copy1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg> Copy from Input</a>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div class="clipboard copy-txt"&gt;
    &lt;p class="otp-pass"&gt;Here is your OTP &lt;span id="paragraph-copy1"&gt;22991&lt;/span&gt;.&lt;/p&gt;
    &lt;p class="mb-4"&gt;Please do not share it to anyone&lt;/p&gt;
    &lt;a class="mb-1 btn btn-primary" href="javascript:;" data-clipboard-action="copy" data-clipboard-target="#paragraph-copy1"&gt;&lt;svg&gt; ... &lt;/svg&gt; Copy from Input&lt;/a&gt;
&lt;/div&gt;
</pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="fclAdvance" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Copy Hidden Text (Advanced)</h4> 
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area paragraph-advance">
                                    <div class="clipboard copy-txt">
                                        <p class="mb-4">Link -> <span id="advanced-paragraph">http://www.admin-dashboard.com/code</span></p>
                                        <a class="mb-1 btn btn-primary" href="javascript:;" data-clipboard-action="copy" data-clipboard-target="#advanced-paragraph"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg> Copy Link</a>
                                        <a class="mb-1 btn btn-dark" href="javascript:;" data-clipboard-action="copy" data-clipboard-text="2291"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg> Copy Hidden Code</a>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div class="clipboard copy-txt"&gt;
    &lt;p class="mb-4"&gt;Link -&gt; &lt;span id="advanced-paragraph"&gt;http://www.admin-dashboard.com/code&lt;/span&gt;&lt;/p&gt;
    &lt;a class="mb-1 btn btn-primary" href="javascript:;" data-clipboard-action="copy" data-clipboard-target="#advanced-paragraph"&gt;&lt;svg&gt; ... &lt;/svg&gt; Copy Link&lt;/a&gt;
    &lt;a class="mb-1 btn btn-warning" href="javascript:;" data-clipboard-action="copy" data-clipboard-text="2291"&gt;&lt;svg&gt; ... &lt;/svg&gt; Copy Hidden Code&lt;/a&gt;
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