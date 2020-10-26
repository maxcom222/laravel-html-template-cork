@extends('layouts.app')

@section('content')

            <div class="container">
                <div class="container">

                    <div id="navSection" data-spy="affix" class="nav  sidenav">
                        <div class="sidenav-content">
                            <a href="#fs2Basic" class="active nav-link">Baic</a>
                            <a href="#fs2Nested" class="nav-link">Nested</a>
                            <a href="#fs2DisablingOptions" class="nav-link">Disabling Options</a>
                            <a href="#fs2Placeholder" class="nav-link">Placeholder</a>
                            <a href="#fs2Tagging" class="nav-link">Tagging</a>
                            <a href="#fs2LimitTagging" class="nav-link">Limit Tagging</a>
                        </div>
                    </div>
                    
                    <div class="row layout-top-spacing" id="cancel-row">
                    
                        <div id="fs2Basic" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Basic</h4>
                                        </div>            
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <p>Use <code>select2()</code> function on select element to convert it to Select 2.</p>
                                    <select class="form-control  basic">
                                      <option selected="selected">orange</option>
                                      <option>white</option>
                                      <option>purple</option>
                                    </select>

                                    <div class="code-section-container show-code">
                                                
                                        <button class="btn toggle-code-snippet"><span>HTML</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;select class="form-control  basic"&gt;
    &lt;option selected="selected"&gt;orange&lt;/option&gt;
    &lt;option&gt;white&lt;/option&gt;
    &lt;option&gt;purple&lt;/option&gt;
&lt;/select&gt;
</pre>
                                        </div>
                                    </div>

                                    <div class="code-section-container show-code">
                                                
                                        <button class="btn toggle-code-snippet"><span>JS</span></button>

                                        <div class="code-section text-left">
                                            <pre>
var ss = $(".basic").select2({
    tags: true,
});
</pre>
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
                                            <h4>Small Select2</h4>
                                        </div>            
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <p>Use <code>data('select2')</code> function to get container of select2.</p>
                                    <select class="form-control form-small">
                                      <option selected="selected">orange</option>
                                      <option>white</option>
                                      <option>purple</option>
                                    </select>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>HTML</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;select class="form-control form-small"&gt;
    &lt;option selected="selected"&gt;orange&lt;/option&gt;
    &lt;option&gt;white&lt;/option&gt;
    &lt;option&gt;purple&lt;/option&gt;
&lt;/select&gt;
</pre>
                                        </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>JS</span></button>

                                        <div class="code-section text-left">
                                            <pre>
var formSmall = $(".form-small").select2({ tags: true });
formSmall.data('select2').$container.addClass('form-control-sm')
</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="fs2Nested" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Nested</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <p>Add options inside the <code>optgroups</code> to for group options.</p>
                                    <select class="form-control nested">
                                        <optgroup label="Group1">
                                            <option selected="selected">orange</option>
                                            <option>white</option>
                                            <option>purple</option>
                                        </optgroup>
                                        <optgroup label="Group2">
                                            <option>purple</option>
                                            <option>orange</option>
                                            <option>white</option>
                                        </optgroup>
                                        <optgroup label="Group3">
                                            <option>white</option>
                                            <option>purple</option>
                                            <option>orange</option>
                                        </optgroup>
                                    </select>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>HTML</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;select class="form-control nested"&gt;
    &lt;optgroup label="Group1"&gt;
        &lt;option selected="selected"&gt;orange&lt;/option&gt;
        &lt;option&gt;white&lt;/option&gt;
        &lt;option&gt;purple&lt;/option&gt;
    &lt;/optgroup&gt;
    &lt;optgroup label="Group2"&gt;
        &lt;option&gt;purple&lt;/option&gt;
        &lt;option&gt;orange&lt;/option&gt;
        &lt;option&gt;white&lt;/option&gt;
    &lt;/optgroup&gt;
    &lt;optgroup label="Group3"&gt;
        &lt;option&gt;white&lt;/option&gt;
        &lt;option&gt;purple&lt;/option&gt;
        &lt;option&gt;orange&lt;/option&gt;
    &lt;/optgroup&gt;
&lt;/select&gt;
</pre>
                                        </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>JS</span></button>

                                        <div class="code-section text-left">
                                            <pre>
$(".nested").select2({
    tags: true
});
</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="fs2DisablingOptions" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Disabling options</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <p>Disable Select using <code>disabled</code> attribute.</p>
                                    <select class="form-control disabled-results">
                                      <option value="one">First</option>
                                      <option value="two" disabled="disabled">Second</option>
                                      <option value="three">Third</option>
                                    </select>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>HTML</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;select class="form-control disabled-results"&gt;
    &lt;option value="one"&gt;First&lt;/option&gt;
    &lt;option value="two" disabled="disabled"&gt;Second&lt;/option&gt;
    &lt;option value="three"&gt;Third&lt;/option&gt;
&lt;/select&gt;
</pre>
                                        </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>JS</span></button>

                                        <div class="code-section text-left">
                                            <pre>
$(".disabled-results").select2();
</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="fs2Placeholder" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Placeholder</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <p>Apply Placeholder by setting option <code>placeholder</code> option.</p>
                                    <select class="placeholder js-states form-control">
                                        <option>Choose...</option>
                                        <option value="one">First</option>
                                        <option value="two">Second</option>
                                        <option value="three">Third</option>
                                        <option value="four">Fourth</option>
                                        <option value="five">Fifth</option>
                                    </select>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>HTML</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;select class="placeholder js-states form-control"&gt;
    &lt;option&gt;Choose...&lt;/option&gt;
    &lt;option value="one"&gt;First&lt;/option&gt;
    &lt;option value="two"&gt;Second&lt;/option&gt;
    &lt;option value="three"&gt;Third&lt;/option&gt;
    &lt;option value="four"&gt;Fourth&lt;/option&gt;
    &lt;option value="five"&gt;Fifth&lt;/option&gt;
&lt;/select&gt;
</pre>
                                        </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>JS</span></button>

                                        <div class="code-section text-left">
                                            <pre>
$(".placeholder").select2({
    placeholder: "Make a Selection",
    allowClear: true
});
</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="fs2Tagging" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Tagging with multi-value select boxes</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <p>Set <code>tags: true</code> to convert select 2 in Tag mode.</p>
                                    <select class="form-control tagging" multiple="multiple">
                                      <option>orange</option>
                                      <option>white</option>
                                      <option>purple</option>
                                    </select>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>HTML</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;select class="form-control tagging" multiple="multiple"&gt;
    &lt;option&gt;orange&lt;/option&gt;
    &lt;option&gt;white&lt;/option&gt;
    &lt;option&gt;purple&lt;/option&gt;
&lt;/select&gt;
</pre>
                                        </div>
                                    </div>


                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>JS</span></button>

                                        <div class="code-section text-left">
                                            <pre>
$(".tagging").select2({
    tags: true
});
</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="fs2LimitTagging" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Limiting the number of Tagging</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <p>Set <code>maximumSelectionLength: 2</code> with <code>tags: true</code> to limit selectin in Tag mode.</p>
                                    <select class="form-control tagging" multiple="multiple">
                                      <option>orange</option>
                                      <option>white</option>
                                      <option>purple</option>
                                    </select>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>HTML</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;select class="form-control tagging" multiple="multiple"&gt;
    &lt;option&gt;orange&lt;/option&gt;
    &lt;option&gt;white&lt;/option&gt;
    &lt;option&gt;purple&lt;/option&gt;
&lt;/select&gt;
</pre>
                                        </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>JS</span></button>

                                        <div class="code-section text-left">
                                            <pre>
var ss = $(".basic").select2({
    tags: true,
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