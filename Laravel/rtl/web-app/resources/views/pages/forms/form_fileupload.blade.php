@extends('layouts.app')

@section('content')
            <div class="container">
                <div class="container">

                    <div id="navSection" data-spy="affix" class="nav  sidenav">
                        <div class="sidenav-content">
                            <a href="#fuSingleFile" class="active nav-link">Single File</a>
                            <a href="#fuMultipleFile" class="nav-link">Multiple File</a>
                        </div>
                    </div>

                    <div class="row layout-top-spacing">

                        <div id="fuSingleFile" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Single File Upload</h4>
                                        </div>      
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="custom-file-container" data-upload-id="myFirstImage">
                                        <label>Upload (Single File) <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                                        <label class="custom-file-container__custom-file" >
                                            <input type="file" class="custom-file-container__custom-file__custom-file-input" accept="image/*">
                                            <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                            <span class="custom-file-container__custom-file__custom-file-control"></span>
                                        </label>
                                        <div class="custom-file-container__image-preview"></div>
                                    </div>


                                    <div class="code-section-container show-code">
                                                
                                        <button class="btn toggle-code-snippet"><span>HTML</span></button>

                                        <div class="code-section text-left">
                                            <pre>
==========
   HTML
==========

&lt;div class="custom-file-container" data-upload-id="myFirstImage"&gt;
    &lt;label&gt;Upload (Single File) &lt;a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image"&gt;x&lt;/a&gt;&lt;/label&gt;
    &lt;label class="custom-file-container__custom-file" &gt;
        &lt;input type="file" class="custom-file-container__custom-file__custom-file-input" accept="image/*"&gt;
        &lt;input type="hidden" name="MAX_FILE_SIZE" value="10485760" /&gt;
        &lt;span class="custom-file-container__custom-file__custom-file-control"&gt;&lt;/span&gt;
    &lt;/label&gt;
    &lt;div class="custom-file-container__image-preview"&gt;&lt;/div&gt;
&lt;/div&gt;
</pre>
                                        </div>
                                    </div>

                                    <div class="code-section-container show-code">
                                                
                                        <button class="btn toggle-code-snippet"><span>JS</span></button>

                                        <div class="code-section text-left">
                                            <pre>
=================
   Javascript
=================

//First upload
var firstUpload = new FileUploadWithPreview('myFirstImage')

</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="fuMultipleFile" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Multiple File Upload</h4>
                                        </div>      
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="custom-file-container" data-upload-id="mySecondImage">
                                        <label>Upload (Allow Multiple) <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                                        <label class="custom-file-container__custom-file" >
                                            <input type="file" class="custom-file-container__custom-file__custom-file-input" multiple>
                                            <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                            <span class="custom-file-container__custom-file__custom-file-control"></span>
                                        </label>
                                        <div class="custom-file-container__image-preview"></div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>HTML</span></button>

                                        <div class="code-section text-left">
                                            <pre>
==========
   HTML
==========

&lt;div class="custom-file-container" data-upload-id="mySecondImage"&gt;
    &lt;label&gt;Upload (Allow Multiple) &lt;a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image"&gt;x&lt;/a&gt;&lt;/label&gt;
    &lt;label class="custom-file-container__custom-file" &gt;
        &lt;input type="file" class="custom-file-container__custom-file__custom-file-input" multiple&gt;
        &lt;input type="hidden" name="MAX_FILE_SIZE" value="10485760" /&gt;
        &lt;span class="custom-file-container__custom-file__custom-file-control"&gt;&lt;/span&gt;
    &lt;/label&gt;
    &lt;div class="custom-file-container__image-preview"&gt;&lt;/div&gt;
&lt;/div&gt;
</pre>
                                        </div>
                                    </div>


                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>JS</span></button>

                                        <div class="code-section text-left">
                                            <pre>
=================
   Javascript
=================

//Second upload
var secondUpload = new FileUploadWithPreview('mySecondImage')

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