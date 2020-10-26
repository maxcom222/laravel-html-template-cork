@extends('layouts.app')

@section('content')

            <div class="container">

                <div class="container">

                    <div id="navSection" data-spy="affix" class="nav  sidenav">
                        <div class="sidenav-content">
                            <a href="#basic" class="active nav-link">Basic</a>
                            <a href="#form_grid_layouts" class="nav-link">Form Grid Layouts</a>
                            <a href="#helper_text" class="nav-link">Helper Text</a>
                            <a href="#form_sizing" class="nav-link">Sizing</a>
                            <a href="#readonly_input" class="nav-link">Readonly Input</a>
                            <a href="#html_custom_file_upload" class="nav-link">HTML Custom File Upload</a>
                            <a href="#disabled_form" class="nav-link">Disabled Fields</a>
                            <a href="#custom_bs_forms" class="nav-link">Custom Bootstrap Forms</a>
                        </div>
                    </div>
                    
                    <div class="row layout-top-spacing">
                    
                        <div id="basic" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Input Text</h4>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">

                                    <div class="row">
                                        <div class="col-lg-6 col-12 mx-auto">
                                            <form method="post">
                                                <div class="form-group">
                                                    <p>Use input <code>type="text"</code>.</p>
                                                    <label for="t-text" class="sr-only">Text</label>
                                                    <input id="t-text" type="text" name="txt" placeholder="Some Text..." class="form-control" required>
                                                    <input type="submit" name="txt" class="mt-4 btn btn-primary">
                                                </div>
                                            </form>
                                        </div>                                        
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Input Password</h4>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">

                                    <div class="row">
                                        <div class="col-lg-6 col-12 mx-auto">
                                            <form method="post">
                                                <div class="form-group">
                                                    <p>Use input <code>type="password"</code>.</p>
                                                    <label for="p-text" class="sr-only">Password</label>
                                                    <input id="p-text" type="password" name="pass" placeholder="Password" class="form-control" required>
                                                    <input type="submit" name="pass" class="mt-4 btn btn-primary">
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Input Email</h4>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">

                                    <div class="row">

                                        <div class="col-lg-6 col-12 mx-auto">
                                            <form method="post">
                                                <div class="form-group">
                                                    <p>Use input <code>type="email"</code>.</p>
                                                    <label for="e-text" class="sr-only">Email</label>
                                                    <input id="e-text" type="email" name="email" placeholder="email@mail.com" class="form-control" required>
                                                    <input type="submit" name="email" class="mt-4 btn btn-primary">
                                                </div>
                                            </form>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Input Url</h4>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">

                                    <div class="row">
                                        
                                        <div class="col-lg-6 col-12 mx-auto">
                                            <form method="post">
                                                <div class="form-group">
                                                    <p>Use input <code>type="url"</code>.</p>
                                                    <label for="url-text" class="sr-only">Url</label>
                                                    <input id="url-text" type="url" name="url" placeholder="https://dummyurl.com" class="form-control" required>
                                                    <input type="submit" name="url" class="mt-4 btn btn-primary">
                                                </div>
                                            </form>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Input Telephone</h4>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">

                                    <div class="row">
                                        
                                        <div class="col-lg-6 col-12 mx-auto">
                                            <form method="post">
                                                <div class="form-group">
                                                    <p>Use input <code>type="tel"</code>.</p>
                                                    <label for="tel-text" class="sr-only">Telephone</label>
                                                    <input id="tel-text" type="tel" name="tel" placeholder="6-(666)-111-7777" class="form-control" required>
                                                    <input type="submit" name="tel" class="mt-4 btn btn-primary">
                                                </div>
                                            </form>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>


                        <div class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Input Search</h4>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">

                                    <div class="row">
                                        
                                        <div class="col-lg-6 col-12 mx-auto">
                                            <form method="post">
                                                <div class="form-group">
                                                    <p>Use input <code>type="search"</code>.</p>
                                                    <label for="search-text" class="sr-only">Search</label>
                                                    <input id="search-text" type="search" class="form-control" required>
                                                    <input type="submit" name="search" class="mt-4 btn btn-primary">
                                                </div>
                                            </form>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>


                        <div class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Input Range</h4>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">

                                    <div class="row">
                                        
                                        <div class="col-lg-6 col-12 mx-auto">
                                            <form method="post">
                                                <div class="form-group">
                                                    <p>Use input <code>type="range"</code>.</p>
                                                    <label for="range-text" class="sr-only">Range</label>
                                                    <input id="range-text" type="range" name="range" class="form-control">
                                                </div>
                                            </form>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>


                        <div class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Input Custom Range</h4>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">

                                    <div class="row">                                        

                                        <div class="col-lg-6 col-12 mx-auto">
                                            <form method="post">
                                                <div class="form-group">
                                                    <p>Use input <code>type="range"</code>.</p>
                                                    <label for="range-text" class="sr-only">Custom Range</label>
                                                    <label for="customRange1" class="sr-only">Example range</label>
                                                    <input type="range" class="custom-range" id="customRange1">
                                                </div>
                                            </form>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Input With Label</h4>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="row">
                                        <div class="col-lg-6 col-12 mx-auto">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Full Name</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput1" value="Alan Green">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="code-section-container show-code">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div class="form-group"&gt;
    &lt;label for="exampleFormControlInput1"&gt;Full Name&lt;/label&gt;
    &lt;input type="text" class="form-control" id="exampleFormControlInput1" value="Alan Green"&gt;
&lt;/div&gt; </pre>
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
                                            <h4>Form controls</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <form>
                                        <div class="form-group mb-4">
                                            <label for="exampleFormControlInput2">Email address</label>
                                            <input type="email" class="form-control" id="exampleFormControlInput2" placeholder="name@example.com">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="exampleFormControlSelect1">Example select</label>
                                            <select class="form-control" id="exampleFormControlSelect1">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="exampleFormControlSelect2">Example multiple select</label>
                                            <select multiple class="form-control" id="exampleFormControlSelect2">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="exampleFormControlTextarea1">Example textarea</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>
                                        <div class="form-group mb-4 mt-3">
                                            <label for="exampleFormControlFile1">Example file input</label>
                                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                        </div>
                                        <input type="submit" name="time" class="mt-4 mb-4 btn btn-primary">
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div id="form_grid_layouts" class="col-lg-12">
                            <div class="seperator-header">
                                <h4 class="">Form Grid Layouts</h4>
                            </div>
                        </div>

                        <div class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Form grid</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                   <form>
                                        <div class="row mb-4">
                                            <div class="col">
                                                <input type="text" class="form-control" placeholder="First name">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" placeholder="Last name">
                                            </div>
                                        </div>
                                        <input type="submit" name="time" class="btn btn-primary">
                                    </form>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>
                                        <div class="code-section text-left">
                                            <pre>
&lt;form&gt;
    &lt;div class="row mb-4"&gt;
        &lt;div class="col"&gt;
            &lt;input type="text" class="form-control" placeholder="First name"&gt;
        &lt;/div&gt;
        &lt;div class="col"&gt;
            &lt;input type="text" class="form-control" placeholder="Last name"&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;input type="submit" name="time" class="btn btn-primary"&gt;
&lt;/form&gt;
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
                                            <h4>Form row</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                   <form>
                                        <div class="form-row mb-4">
                                            <div class="col">
                                              <input type="text" class="form-control" placeholder="First name">
                                            </div>
                                            <div class="col">
                                              <input type="text" class="form-control" placeholder="Last name">
                                            </div>
                                        </div>
                                        <input type="submit" name="time" class="btn btn-primary">
                                    </form>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;form&gt;
    &lt;div class="form-row mb-4"&gt;
        &lt;div class="col"&gt;
          &lt;input type="text" class="form-control" placeholder="First name"&gt;
        &lt;/div&gt;
        &lt;div class="col"&gt;
          &lt;input type="text" class="form-control" placeholder="Last name"&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;input type="submit" name="time" class="mb-4 btn btn-primary"&gt;
&lt;/form&gt;
</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-12  layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Form groups</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <form>
                                        <div class="form-group mb-4">
                                            <label for="formGroupExampleInput">Example label</label>
                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="formGroupExampleInput2">Another label</label>
                                            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                                        </div>
                                        <input type="submit" name="time" class="btn btn-primary">
                                    </form>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;form&gt;
    &lt;div class="form-group mb-4"&gt;
        &lt;label for="formGroupExampleInput"&gt;Example label&lt;/label&gt;
        &lt;input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input"&gt;
    &lt;/div&gt;
    &lt;div class="form-group mb-4"&gt;
        &lt;label for="formGroupExampleInput2"&gt;Another label&lt;/label&gt;
        &lt;input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input"&gt;
    &lt;/div&gt;
    &lt;input type="submit" name="time" class="btn btn-primary"&gt;
&lt;/form&gt;
</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-12  layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Column sizing</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                   <form>
                                        <div class="form-row mb-4">
                                            <div class="col-7">
                                                <input type="text" class="form-control" placeholder="City">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" placeholder="State">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" placeholder="Zip">
                                            </div>
                                        </div>
                                        <input type="submit" name="time" class="btn btn-primary">
                                    </form>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;form&gt;
    &lt;div class="form-row mb-4"&gt;
        &lt;div class="col-7"&gt;
            &lt;input type="text" class="form-control" placeholder="City"&gt;
        &lt;/div&gt;
        &lt;div class="col"&gt;
            &lt;input type="text" class="form-control" placeholder="State"&gt;
        &lt;/div&gt;
        &lt;div class="col"&gt;
            &lt;input type="text" class="form-control" placeholder="Zip"&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;input type="submit" name="time" class="mb-4 btn btn-primary"&gt;
&lt;/form&gt;
</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div id="helper_text" class="col-lg-12">
                            <div class="seperator-header">
                                <h4 class="">Helper Text</h4>
                            </div>
                        </div>

                        <div class="col-xl-12 col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Input with help text ( Default Left)</h4>
                                        </div>                      
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">

                                    <div class="row">
                                        <div class="col-xl-7 mx-auto">
                                            <div class="form-group">
                                                <p>Use <code>small</code> tag and <code>.text-muted</code> for helper text. </p>
                                                <label for="h-text1" class="sr-only">Email address</label>
                                                <input type="text" class="form-control" id="h-text1" aria-describedby="h-text1" placeholder="">
                                                <small id="sh-text1" class="form-text text-muted">I am the helper text.</small>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div class="form-group"&gt;
    &lt;p&gt;Use &lt;code&gt;small&lt;/code&gt; tag and &lt;code&gt;.text-muted&lt;/code&gt; for helper text. &lt;/p&gt;
    &lt;label for="h-text1" class="sr-only"&gt;Email address&lt;/label&gt;
    &lt;input type="text" class="form-control" id="h-text1" aria-describedby="h-text1" placeholder=""&gt;
    &lt;small id="sh-text1" class="form-text text-muted"&gt;I am the helper text.&lt;/small&gt;
&lt;/div&gt;</pre>
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
                                            <h4>Input with badge help text (Default Left)</h4>
                                        </div>                      
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="row">
                                        <div class="col-xl-7 mx-auto">
                                            <div class="form-group">
                                                <p>Wrap the <code>small</code> tag inside the <code>span</code> tag with  <code>.badge</code></p>
                                                <label for="h-text4" class="sr-only">Email address</label>
                                                <input type="text" class="form-control" id="h-text4" aria-describedby="h-text4" placeholder="">
                                                <div class=" mt-1">
                                                    <span class="badge badge-primary">
                                                        <small id="sh-text4" class="form-text mt-0">I am the helper text.</small>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div class="form-group"&gt;
    &lt;p&gt;Wrap the &lt;code&gt;small&lt;/code&gt; tag inside the &lt;code&gt;span&lt;/code&gt; tag with  &lt;code&gt;.badge&lt;/code&gt;&lt;/p&gt;
    &lt;label for="h-text4" class="sr-only"&gt;Email address&lt;/label&gt;
    &lt;input type="text" class="form-control" id="h-text4" aria-describedby="h-text4" placeholder=""&gt;
    &lt;div class=" mt-1"&gt;
        &lt;span class="badge badge-primary"&gt;
            &lt;small id="sh-text4" class="form-text mt-0"&gt;I am the helper text.&lt;/small&gt;
        &lt;/span&gt;
    &lt;/div&gt;
&lt;/div&gt;</pre>
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
                                            <h4>Input with block badge help text (Default Left)</h4>
                                        </div>                      
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="row">
                                        <div class="col-xl-7 mx-auto">
                                            <div class="form-group">
                                                <p>Use <code>.w-100</code> class to the <code>span</code> tag to make block.</p>
                                                <label for="h-text7" class="sr-only">Email address</label>
                                                <input type="text" class="form-control" id="h-text7" aria-describedby="h-text7" placeholder="">
                                                <div class="mt-1">
                                                    <span class="badge badge-primary w-100">
                                                        <small id="sh-text7" class="form-text mt-0 text-left">I am the helper text.</small>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                        <pre>
&lt;div class="form-group"&gt;
    &lt;p&gt;Use &lt;code&gt;.w-100&lt;/code&gt; class to the &lt;code&gt;span&lt;/code&gt; tag to make block.&lt;/p&gt;
    &lt;label for="h-text7" class="sr-only"&gt;Email address&lt;/label&gt;
    &lt;input type="text" class="form-control" id="h-text7" aria-describedby="h-text7" placeholder=""&gt;
    &lt;div class="mt-1"&gt;
        &lt;span class="badge badge-primary w-100"&gt;
            &lt;small id="sh-text7" class="form-text mt-0 text-left"&gt;I am the helper text.&lt;/small&gt;
        &lt;/span&gt;
    &lt;/div&gt;
&lt;/div&gt;</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-12  layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Inline Help text</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <form class="form-inline mb-4">
                                        <div class="form-group  d-block text-left">
                                            <label for="inputPassword6" class="d-block">Password</label>
                                            <input type="password" id="inputPassword6" class=" form-control mt-2" aria-describedby="passwordHelpInline">
                                            <small id="passwordHelpInline" class="text-muted">
                                                Min 8-20 char
                                            </small>
                                        </div>
                                    </form>
                                    <input type="submit" name="time" class="btn btn-primary">

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;form class="form-inline mb-4"&gt;
    &lt;div class="form-group  d-block text-left"&gt;
        &lt;label for="inputPassword6" class="d-block"&gt;Password&lt;/label&gt;
        &lt;input type="password" id="inputPassword6" class=" form-control mt-2" aria-describedby="passwordHelpInline"&gt;
        &lt;small id="passwordHelpInline" class="text-muted"&gt;
            Min 8-20 char
        &lt;/small&gt;
    &lt;/div&gt;
&lt;/form&gt;
&lt;input type="submit" name="time" class="btn btn-primary"&gt;
</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div id="form_sizing" class="col-lg-12">
                            <div class="seperator-header">
                                <h4 class="">Sizing</h4>
                            </div>
                        </div>

                        <div class="col-lg-12 col-12  layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Input Fields</h4>
                                        </div>     
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">

                                    <div class="row">
                                        
                                        <div class="col-xl-4">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Large Input</label>
                                                <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg">
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Default Input</label>
                                                <input class="form-control" type="text" placeholder="Default input">
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Small Input</label>
                                                <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;!-- Large Input --&gt;
&lt;div class="form-group"&gt;
    &lt;label for="exampleFormControlInput1"&gt;Large Input&lt;/label&gt;
    &lt;input class="form-control form-control-lg" type="text" placeholder=".form-control-lg"&gt;
&lt;/div&gt;

&lt;!-- Default Input --&gt;
&lt;div class="form-group"&gt;
    &lt;label for="exampleFormControlInput1"&gt;Default Input&lt;/label&gt;
    &lt;input class="form-control" type="text" placeholder="Default input"&gt;
&lt;/div&gt;

&lt;!-- Small Input --&gt;
&lt;div class="form-group"&gt;
    &lt;label for="exampleFormControlInput1"&gt;Small Input&lt;/label&gt;
    &lt;input class="form-control form-control-sm" type="text" placeholder=".form-control-sm"&gt;
&lt;/div&gt;
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
                                            <h4>Select Field</h4>
                                        </div>     
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">

                                    <div class="row">
                                        
                                        <div class="col-xl-4 mb-xl-0 mb-2">
                                            <select class="form-control form-control-lg">
                                                <option>Large select</option>
                                                <option>One</option>
                                                <option>Two</option>
                                                <option>Three</option>
                                            </select>
                                        </div>
                                        <div class="col-xl-4 mb-xl-0 mb-2">
                                            <select class="form-control">
                                                <option>Default select</option>
                                                <option>One</option>
                                                <option>Two</option>
                                                <option>Three</option>
                                            </select>
                                        </div>
                                        <div class="col-xl-4 mb-xl-0 mb-2">
                                            <select class="form-control form-control-sm">
                                                <option>Small select</option>
                                                <option>One</option>
                                                <option>Two</option>
                                                <option>Three</option>
                                            </select>
                                        </div>

                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;!-- Large Input --&gt;
&lt;select class="form-control form-control-lg"&gt;
    &lt;option&gt;Large select&lt;/option&gt;
    &lt;option&gt;One&lt;/option&gt;
    &lt;option&gt;Two&lt;/option&gt;
    &lt;option&gt;Three&lt;/option&gt;
&lt;/select&gt;

&lt;!-- Default Input --&gt;
&lt;select class="form-control"&gt;
    &lt;option&gt;Default select&lt;/option&gt;
    &lt;option&gt;One&lt;/option&gt;
    &lt;option&gt;Two&lt;/option&gt;
    &lt;option&gt;Three&lt;/option&gt;
&lt;/select&gt;

&lt;!-- Small Input --&gt;
&lt;select class="form-control form-control-sm"&gt;
    &lt;option&gt;Small select&lt;/option&gt;
    &lt;option&gt;One&lt;/option&gt;
    &lt;option&gt;Two&lt;/option&gt;
    &lt;option&gt;Three&lt;/option&gt;
&lt;/select&gt;
</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-12  layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Horizontal form label sizing</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <form>
                                        <div class="form-group row  mb-4">
                                            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control form-control-sm" id="colFormLabelSm" placeholder="col-form-label-sm">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-4">
                                            <label for="colFormLabel" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="colFormLabel" placeholder="col-form-label">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-4">
                                            <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control form-control-lg" id="colFormLabelLg" placeholder="col-form-label-lg">
                                            </div>
                                        </div>
                                        <input type="submit" name="time" class="mb-4 btn btn-primary">
                                    </form>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div class="form-group row  mb-4"&gt;
    &lt;label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm"&gt;Email&lt;/label&gt;
    &lt;div class="col-sm-10"&gt;
        &lt;input type="email" class="form-control form-control-sm" id="colFormLabelSm" placeholder="col-form-label-sm"&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="form-group row mb-4"&gt;
    &lt;label for="colFormLabel" class="col-sm-2 col-form-label"&gt;Email&lt;/label&gt;
    &lt;div class="col-sm-10"&gt;
        &lt;input type="email" class="form-control" id="colFormLabel" placeholder="col-form-label"&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class="form-group row mb-4"&gt;
    &lt;label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg"&gt;Email&lt;/label&gt;
    &lt;div class="col-sm-10"&gt;
        &lt;input type="email" class="form-control form-control-lg" id="colFormLabelLg" placeholder="col-form-label-lg"&gt;
    &lt;/div&gt;
&lt;/div&gt;
</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="readonly_input" class="col-lg-12">
                            <div class="seperator-header">
                                <h4 class="">Readonly</h4>
                            </div>
                        </div>

                        <div class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Input Readonly</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                   <input class="form-control" type="text" placeholder="Readonly input here…" readonly>

                                   <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>
                                       <div class="code-section text-left">
                                            <pre>
&lt;input class="form-control" type="text" placeholder="Readonly input here…" readonly&gt;
</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="html_custom_file_upload" class="col-lg-12">
                            <div class="seperator-header">
                                <h4 class="">HTML Custom File Upload</h4>
                            </div>
                        </div>

                        <div class="col-lg-12 col-12  layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>File Upload</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div class="custom-file mb-4"&gt;
    &lt;input type="file" class="custom-file-input" id="customFile"&gt;
    &lt;label class="custom-file-label" for="customFile"&gt;Choose file&lt;/label&gt;
&lt;/div&gt;
</pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="disabled_form" class="col-lg-12">
                            <div class="seperator-header">
                                <h4 class="">Disabled</h4>
                            </div>
                        </div>

                        <div class="col-lg-12 col-12  layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Disabled Fields</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <form>
                                        <fieldset disabled>
                                            <div class="form-group mb-4">
                                                <label for="disabledTextInput">Disabled input</label>
                                                <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
                                            </div>
                                            <div class="form-group mb-4">
                                                <label for="disabledSelect">Disabled select menu</label>
                                                <select id="disabledSelect" class="form-control">
                                                    <option>Disabled select</option>
                                                </select>
                                            </div>
                                            <div class="form-check mt-5 mb-3 pl-0">
                                                <div class="custom-control custom-checkbox mb-4">
                                                    <input type="checkbox" class="custom-control-input" id="disabledFieldsetCheck">
                                                    <label class="custom-control-label" for="disabledFieldsetCheck">Can't check this</label>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary mt-0">Submit</button>
                                        </fieldset>
                                    </form>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;form&gt;
    &lt;fieldset disabled&gt;
        &lt;div class="form-group mb-4"&gt;
            &lt;label for="disabledTextInput"&gt;Disabled input&lt;/label&gt;
            &lt;input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input"&gt;
        &lt;/div&gt;
        &lt;div class="form-group mb-4"&gt;
            &lt;label for="disabledSelect"&gt;Disabled select menu&lt;/label&gt;
            &lt;select id="disabledSelect" class="form-control"&gt;
                &lt;option&gt;Disabled select&lt;/option&gt;
            &lt;/select&gt;
        &lt;/div&gt;
        &lt;div class="form-check mt-5 mb-3 pl-0"&gt;
            &lt;div class="custom-control custom-checkbox mb-4"&gt;
                &lt;input type="checkbox" class="custom-control-input" id="disabledFieldsetCheck"&gt;
                &lt;label class="custom-control-label" for="disabledFieldsetCheck"&gt;Can't check this&lt;/label&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;button type="submit" class="btn btn-primary mt-0"&gt;Submit&lt;/button&gt;
    &lt;/fieldset&gt;
&lt;/form&gt;
</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row layout-spacing">

                        <div id="custom_bs_forms" class="col-lg-12">
                            <div class="seperator-header">
                                <h4 class="">Custom</h4>
                            </div>
                        </div>

                        <div class="col-lg-12 col-12  layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Checkboxes</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div class="custom-control custom-checkbox"&gt;
    &lt;input type="checkbox" class="custom-control-input" id="customCheck1"&gt;
    &lt;label class="custom-control-label" for="customCheck1"&gt;Check this custom checkbox&lt;/label&gt;
&lt;/div&gt;
</pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-12  layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Inline radio</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadioInline1">Toggle this custom radio</label>
                                        </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadioInline2">Toggle this custom radio</label>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
    &lt;div class="custom-control custom-radio custom-control-inline"&gt;
        &lt;input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input"&gt;
        &lt;label class="custom-control-label" for="customRadioInline1"&gt;Toggle this custom radio&lt;/label&gt;
        &lt;/div&gt;
    &lt;div class="custom-control custom-radio custom-control-inline"&gt;
        &lt;input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input"&gt;
        &lt;label class="custom-control-label" for="customRadioInline2"&gt;Toggle this custom radio&lt;/label&gt;
    &lt;/div&gt;
    </pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-12  layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Radio</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio1">Toggle this custom radio</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio2">Or toggle this other custom radio</label>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div class="custom-control custom-radio"&gt;
    &lt;input type="radio" id="customRadio1" name="customRadio" class="custom-control-input"&gt;
    &lt;label class="custom-control-label" for="customRadio1"&gt;Toggle this custom radio&lt;/label&gt;
&lt;/div&gt;
&lt;div class="custom-control custom-radio"&gt;
    &lt;input type="radio" id="customRadio2" name="customRadio" class="custom-control-input"&gt;
    &lt;label class="custom-control-label" for="customRadio2"&gt;Or toggle this other custom radio&lt;/label&gt;
&lt;/div&gt;
</pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-12  layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Disabled</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input" id="customCheckDisabled" disabled>
                                        <label class="custom-control-label" for="customCheckDisabled">Check this custom checkbox</label>
                                    </div>

                                    <div class="custom-control custom-radio mb-4">
                                        <input type="radio" id="radio3" name="radioDisabled" class="custom-control-input" disabled>
                                        <label class="custom-control-label" for="radio3">Toggle this custom radio</label>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>
                                        <div class="code-section text-left">
                                            <pre>
&lt;div class="custom-control custom-checkbox mb-3"&gt;
    &lt;input type="checkbox" class="custom-control-input" id="customCheckDisabled" disabled&gt;
    &lt;label class="custom-control-label" for="customCheckDisabled"&gt;Check this custom checkbox&lt;/label&gt;
&lt;/div&gt;

&lt;div class="custom-control custom-radio mb-4"&gt;
    &lt;input type="radio" id="radio3" name="radioDisabled" class="custom-control-input" disabled&gt;
    &lt;label class="custom-control-label" for="radio3"&gt;Toggle this custom radio&lt;/label&gt;
&lt;/div&gt;
</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-12  layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Select menu</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <select class="custom-select mb-4">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>
                                        <div class="code-section text-left">
                                            <pre>
&lt;select class="custom-select mb-4"&gt;
    &lt;option selected&gt;Open this select menu&lt;/option&gt;
    &lt;option value="1"&gt;One&lt;/option&gt;
    &lt;option value="2"&gt;Two&lt;/option&gt;
    &lt;option value="3"&gt;Three&lt;/option&gt;
&lt;/select&gt;
</pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-12  layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Select menu sizing</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <select class="custom-select custom-select-lg">
                                      <option selected>Open this select menu</option>
                                      <option value="1">One</option>
                                      <option value="2">Two</option>
                                      <option value="3">Three</option>
                                    </select>

                                    <select class="custom-select custom-select-sm mt-4">
                                      <option selected>Open this select menu</option>
                                      <option value="1">One</option>
                                      <option value="2">Two</option>
                                      <option value="3">Three</option>
                                    </select>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>
                                        <div class="code-section text-left">
                                            <pre>
&lt;select class="custom-select custom-select-lg"&gt;
  &lt;option selected&gt;Open this select menu&lt;/option&gt;
  &lt;option value="1"&gt;One&lt;/option&gt;
  &lt;option value="2"&gt;Two&lt;/option&gt;
  &lt;option value="3"&gt;Three&lt;/option&gt;
&lt;/select&gt;

&lt;select class="custom-select custom-select-sm"&gt;
  &lt;option selected&gt;Open this select menu&lt;/option&gt;
  &lt;option value="1"&gt;One&lt;/option&gt;
  &lt;option value="2"&gt;Two&lt;/option&gt;
  &lt;option value="3"&gt;Three&lt;/option&gt;
&lt;/select&gt;
</pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-12  layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Multi select</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <select class="custom-select" multiple>
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>
                                        <div class="code-section text-left">
                                            <pre>
&lt;select class="custom-select" multiple&gt;
    &lt;option selected&gt;Open this select menu&lt;/option&gt;
    &lt;option value="1"&gt;One&lt;/option&gt;
    &lt;option value="2"&gt;Two&lt;/option&gt;
    &lt;option value="3"&gt;Three&lt;/option&gt;
&lt;/select&gt;
</pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-12  layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Select size</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <select class="custom-select mb-4" size="4">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                        <option value="3">Four</option>
                                        <option value="3">Five</option>
                                    </select>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;select class="custom-select mb-4" size="4"&gt;
    &lt;option selected&gt;Open this select menu&lt;/option&gt;
    &lt;option value="1"&gt;One&lt;/option&gt;
    &lt;option value="2"&gt;Two&lt;/option&gt;
    &lt;option value="3"&gt;Three&lt;/option&gt;
    &lt;option value="3"&gt;Four&lt;/option&gt;
    &lt;option value="3"&gt;Five&lt;/option&gt;
&lt;/select&gt;
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