@extends('layouts.app')

@section('content')

            <div class="container">
                <div class="container">
                    
                    <div id="navSection" data-spy="affix" class="nav  sidenav">
                        <div class="sidenav-content">
                            <a href="#checkbox" class="active nav-link">Checkbox</a>
                            <a href="#radio" class="nav-link">Radio</a>
                        </div>
                    </div>

                    <div class="row layout-top-spacing">

                        <div id="checkbox" class="col-lg-12">
                            <div class="seperator-header">
                                <h4 class="">Checkbox</h4>
                            </div>
                        </div>

                        <div class="col-lg-12 layout-spacing">
                            <div class="row">

                                <div class="col-lg-12">
                                    <blockquote class="blockquote">
                                        <p class="">These are Theme Checkboxes.</p>
                                        <p class="">Use <code>.new-control</code>, <code>.new-checkbox</code> with <code>label</code> tag, <code>.new-control-input</code> with input <code> type="checkbox"</code> inside the label and <code>.new-control-indicator</code> with <code>span</code> tag inside the label to create theme custom checkboxes.</p>
                                    </blockquote>
                                </div>

                                <!-- Background -->
                                <div class="col-xl-12 col-12 layout-spacing">
                                    <div class="statbox widget box box-shadow">
                                        <div class="widget-header">                                
                                            <div class="row">
                                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                    <h4>Default</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-content widget-content-area">
                                            <p class="mb-4">Use <code>.checkbox-*</code> class to change different colors.</p>

                                            <div class="n-chk">
                                                <label class="new-control new-checkbox">
                                                  <input type="checkbox" class="new-control-input">
                                                  <span class="new-control-indicator"></span>Default
                                                </label>
                                            </div>

                                            <div class="n-chk">
                                                <label class="new-control new-checkbox checkbox-primary">
                                                  <input type="checkbox" class="new-control-input" checked>
                                                  <span class="new-control-indicator"></span>Primary
                                                </label>
                                            </div>

                                            <div class="n-chk">
                                                <label class="new-control new-checkbox checkbox-success">
                                                  <input type="checkbox" class="new-control-input">
                                                  <span class="new-control-indicator"></span>Success
                                                </label>
                                            </div>

                                            <div class="n-chk">
                                                <label class="new-control new-checkbox checkbox-info">
                                                  <input type="checkbox" class="new-control-input">
                                                  <span class="new-control-indicator"></span>Info
                                                </label>
                                            </div>

                                            <div class="n-chk">
                                                <label class="new-control new-checkbox checkbox-warning">
                                                  <input type="checkbox" class="new-control-input">
                                                  <span class="new-control-indicator"></span>Warning
                                                </label>
                                            </div>

                                            <div class="n-chk">
                                                <label class="new-control new-checkbox checkbox-danger">
                                                  <input type="checkbox" class="new-control-input">
                                                  <span class="new-control-indicator"></span>Danger
                                                </label>
                                            </div>

                                            <div class="n-chk">
                                                <label class="new-control new-checkbox checkbox-secondary">
                                                  <input type="checkbox" class="new-control-input">
                                                  <span class="new-control-indicator"></span>Secondary
                                                </label>
                                            </div>

                                            <div class="n-chk">
                                                <label class="new-control new-checkbox checkbox-dark">
                                                  <input type="checkbox" class="new-control-input">
                                                  <span class="new-control-indicator"></span>Dark
                                                </label>
                                            </div>

                                            <div class="code-section-container show-code">
                                                
                                                <button class="btn toggle-code-snippet"><span>Code</span></button>

                                                    <div class="code-section text-left">
                                                        <pre>
&lt;div class="n-chk"&gt;
    &lt;label class="new-control new-checkbox checkbox-primary"&gt;
      &lt;input type="checkbox" class="new-control-input" checked&gt;
      &lt;span class="new-control-indicator"&gt;&lt;/span&gt;Primary
    &lt;/label&gt;
&lt;/div&gt;</pre>
                                                    </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-12 col-12 layout-spacing">
                                    <div class="statbox widget box box-shadow">
                                        <div class="widget-header">                                
                                            <div class="row">
                                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                    <h4>Default Rounded</h4>
                                                </div>                                                                        
                                            </div>
                                        </div>
                                        <div class="widget-content widget-content-area">
                                            <p class="mb-4">Use <code>.new-checkbox-rounded</code> class to create checkboxes rounded.</p>

                                            <div class="n-chk">
                                                <label class="new-control new-checkbox new-checkbox-rounded">
                                                  <input type="checkbox" class="new-control-input">
                                                  <span class="new-control-indicator"></span>Default
                                                </label>
                                            </div>

                                            <div class="n-chk">
                                                <label class="new-control new-checkbox new-checkbox-rounded checkbox-primary">
                                                  <input type="checkbox" class="new-control-input">
                                                  <span class="new-control-indicator"></span>Primary
                                                </label>
                                            </div>

                                            <div class="n-chk">
                                                <label class="new-control new-checkbox new-checkbox-rounded checkbox-success">
                                                  <input type="checkbox" class="new-control-input" checked>
                                                  <span class="new-control-indicator"></span>Success
                                                </label>
                                            </div>

                                            <div class="n-chk">
                                                <label class="new-control new-checkbox new-checkbox-rounded checkbox-info">
                                                  <input type="checkbox" class="new-control-input">
                                                  <span class="new-control-indicator"></span>Info
                                                </label>
                                            </div>

                                            <div class="n-chk">
                                                <label class="new-control new-checkbox new-checkbox-rounded checkbox-warning">
                                                  <input type="checkbox" class="new-control-input">
                                                  <span class="new-control-indicator"></span>Warning
                                                </label>
                                            </div>

                                            <div class="n-chk">
                                                <label class="new-control new-checkbox new-checkbox-rounded checkbox-danger">
                                                  <input type="checkbox" class="new-control-input">
                                                  <span class="new-control-indicator"></span>Danger
                                                </label>
                                            </div>

                                            <div class="n-chk">
                                                <label class="new-control new-checkbox new-checkbox-rounded checkbox-secondary">
                                                  <input type="checkbox" class="new-control-input">
                                                  <span class="new-control-indicator"></span>Secondary
                                                </label>
                                            </div>

                                            <div class="n-chk">
                                                <label class="new-control new-checkbox new-checkbox-rounded checkbox-dark">
                                                  <input type="checkbox" class="new-control-input">
                                                  <span class="new-control-indicator"></span>Dark
                                                </label>
                                            </div>

                                            <div class="code-section-container">
                                                
                                                <button class="btn toggle-code-snippet"><span>Code</span></button>

                                                <div class="code-section text-left">
                                                    <pre>
&lt;div class="n-chk"&gt;
    &lt;label class="new-control new-checkbox new-checkbox-rounded checkbox-primary"&gt;
      &lt;input type="checkbox" class="new-control-input"&gt;
      &lt;span class="new-control-indicator"&gt;&lt;/span&gt;Primary
    &lt;/label&gt;
&lt;/div&gt;
</pre>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-12 col-12 layout-spacing">
                                    <div class="statbox widget box box-shadow">
                                        <div class="widget-header">                                
                                            <div class="row">
                                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                    <h4>Outline</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-content widget-content-area">
                                            <p class="mb-4">Use <code>.checkbox-outline-*</code> class to create checkboxes outlined and change different colors.</p>

                                            <div class="n-chk">
                                                <label class="new-control new-checkbox checkbox-outline-default">
                                                  <input type="checkbox" class="new-control-input">
                                                  <span class="new-control-indicator"></span>Default
                                                </label>
                                            </div>

                                            <div class="n-chk">
                                                <label class="new-control new-checkbox checkbox-outline-primary">
                                                  <input type="checkbox" class="new-control-input">
                                                  <span class="new-control-indicator"></span>Primary
                                                </label>
                                            </div>

                                            <div class="n-chk">
                                                <label class="new-control new-checkbox checkbox-outline-success">
                                                  <input type="checkbox" class="new-control-input">
                                                  <span class="new-control-indicator"></span>Success
                                                </label>
                                            </div>

                                            <div class="n-chk">
                                                <label class="new-control new-checkbox checkbox-outline-info">
                                                  <input type="checkbox" class="new-control-input">
                                                  <span class="new-control-indicator"></span>Info
                                                </label>
                                            </div>

                                            <div class="n-chk">
                                                <label class="new-control new-checkbox checkbox-outline-warning">
                                                  <input type="checkbox" class="new-control-input" checked>
                                                  <span class="new-control-indicator"></span>Warning
                                                </label>
                                            </div>

                                            <div class="n-chk">
                                                <label class="new-control new-checkbox checkbox-outline-danger">
                                                  <input type="checkbox" class="new-control-input">
                                                  <span class="new-control-indicator"></span>Danger
                                                </label>
                                            </div>

                                            <div class="n-chk">
                                                <label class="new-control new-checkbox checkbox-outline-secondary">
                                                  <input type="checkbox" class="new-control-input">
                                                  <span class="new-control-indicator"></span>Secondary
                                                </label>
                                            </div>

                                            <div class="n-chk">
                                                <label class="new-control new-checkbox checkbox-outline-dark">
                                                  <input type="checkbox" class="new-control-input">
                                                  <span class="new-control-indicator"></span>Dark
                                                </label>
                                            </div>

                                            <div class="code-section-container">
                                                
                                                <button class="btn toggle-code-snippet"><span>Code</span></button>

                                                <div class="code-section text-left">
                                                    <pre>
&lt;div class="n-chk"&gt;
    &lt;label class="new-control new-checkbox checkbox-outline-default"&gt;
      &lt;input type="checkbox" class="new-control-input"&gt;
      &lt;span class="new-control-indicator"&gt;&lt;/span&gt;Default
    &lt;/label&gt;
&lt;/div&gt;
</pre>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-12 col-12 layout-spacing">
                                    <div class="statbox widget box box-shadow">
                                        <div class="widget-header">                                
                                            <div class="row">
                                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                    <h4>Outline Rounded</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-content widget-content-area">
                                            <p class="mb-4">Use <code>.new-checkbox-rounded</code> class to create checkboxes rounded.</p>

                                            <div class="n-chk">
                                                <label class="new-control new-checkbox new-checkbox-rounded checkbox-outline-default">
                                                  <input type="checkbox" class="new-control-input">
                                                  <span class="new-control-indicator"></span>Default
                                                </label>
                                            </div>

                                            <div class="n-chk">
                                                <label class="new-control new-checkbox new-checkbox-rounded checkbox-outline-primary">
                                                  <input type="checkbox" class="new-control-input">
                                                  <span class="new-control-indicator"></span>Primary
                                                </label>
                                            </div>

                                            <div class="n-chk">
                                                <label class="new-control new-checkbox new-checkbox-rounded checkbox-outline-success">
                                                  <input type="checkbox" class="new-control-input">
                                                  <span class="new-control-indicator"></span>Success
                                                </label>
                                            </div>

                                            <div class="n-chk">
                                                <label class="new-control new-checkbox new-checkbox-rounded checkbox-outline-info">
                                                  <input type="checkbox" class="new-control-input">
                                                  <span class="new-control-indicator"></span>Info
                                                </label>
                                            </div>

                                            <div class="n-chk">
                                                <label class="new-control new-checkbox new-checkbox-rounded checkbox-outline-warning">
                                                  <input type="checkbox" class="new-control-input">
                                                  <span class="new-control-indicator"></span>Warning
                                                </label>
                                            </div>

                                            <div class="n-chk">
                                                <label class="new-control new-checkbox new-checkbox-rounded checkbox-outline-danger">
                                                  <input type="checkbox" class="new-control-input" checked>
                                                  <span class="new-control-indicator"></span>Danger
                                                </label>
                                            </div>

                                            <div class="n-chk">
                                                <label class="new-control new-checkbox new-checkbox-rounded checkbox-outline-secondary">
                                                  <input type="checkbox" class="new-control-input">
                                                  <span class="new-control-indicator"></span>Secondary
                                                </label>
                                            </div>

                                            <div class="n-chk">
                                                <label class="new-control new-checkbox new-checkbox-rounded checkbox-outline-dark">
                                                  <input type="checkbox" class="new-control-input">
                                                  <span class="new-control-indicator"></span>Dark
                                                </label>
                                            </div>

                                            <div class="code-section-container">
                                                
                                                <button class="btn toggle-code-snippet"><span>Code</span></button>

                                                <div class="code-section text-left">
                                                    <pre>
&lt;div class="n-chk"&gt;
    &lt;label class="new-control new-checkbox new-checkbox-rounded checkbox-outline-primary"&gt;
      &lt;input type="checkbox" class="new-control-input"&gt;
      &lt;span class="new-control-indicator"&gt;&lt;/span&gt;Primary
    &lt;/label&gt;
&lt;/div&gt;
</pre>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-12 col-12 layout-spacing">
                                    <div class="statbox widget box box-shadow">
                                        <div class="widget-header">                                
                                            <div class="row">
                                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                    <h4>Default Text Color</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-content widget-content-area">
                                            <p class="mb-4">Use <code>.new-checkbox-text</code> class to make text colored as checkbox.</p>

                                            <div class="row">

                                                <div class="col-md-6 col-6">

                                                    <div class="n-chk">
                                                        <label class="new-control new-checkbox new-checkbox-text">
                                                          <input type="checkbox" class="new-control-input">
                                                          <span class="new-control-indicator"></span><span class="new-chk-content">Default</span>
                                                        </label>
                                                    </div>

                                                    <div class="n-chk">
                                                        <label class="new-control new-checkbox new-checkbox-text checkbox-primary">
                                                          <input type="checkbox" class="new-control-input">
                                                          <span class="new-control-indicator"></span><span class="new-chk-content">Primary</span>
                                                        </label>
                                                    </div>

                                                    <div class="n-chk">
                                                        <label class="new-control new-checkbox new-checkbox-text checkbox-success">
                                                          <input type="checkbox" class="new-control-input">
                                                          <span class="new-control-indicator"></span><span class="new-chk-content">Success</span>
                                                        </label>
                                                    </div>

                                                    <div class="n-chk">
                                                        <label class="new-control new-checkbox new-checkbox-text checkbox-info">
                                                          <input type="checkbox" class="new-control-input">
                                                          <span class="new-control-indicator"></span><span class="new-chk-content">Info</span>
                                                        </label>
                                                    </div>

                                                    <div class="n-chk">
                                                        <label class="new-control new-checkbox new-checkbox-text checkbox-warning">
                                                          <input type="checkbox" class="new-control-input">
                                                          <span class="new-control-indicator"></span><span class="new-chk-content">Warning</span>
                                                        </label>
                                                    </div>

                                                    <div class="n-chk">
                                                        <label class="new-control new-checkbox new-checkbox-text checkbox-danger">
                                                          <input type="checkbox" class="new-control-input">
                                                          <span class="new-control-indicator"></span><span class="new-chk-content">Danger</span>
                                                        </label>
                                                    </div>

                                                    <div class="n-chk">
                                                        <label class="new-control new-checkbox new-checkbox-text checkbox-secondary">
                                                          <input type="checkbox" class="new-control-input">
                                                          <span class="new-control-indicator"></span><span class="new-chk-content">Secondary</span>
                                                        </label>
                                                    </div>

                                                    <div class="n-chk">
                                                        <label class="new-control new-checkbox new-checkbox-text checkbox-dark">
                                                          <input type="checkbox" class="new-control-input" checked>
                                                          <span class="new-control-indicator"></span><span class="new-chk-content">Dark</span>
                                                        </label>
                                                    </div>

                                                </div>

                                                <div class="col-md-6 col-6">
                                                    
                                                    <div class="n-chk">
                                                        <label class="new-control new-checkbox checkbox-outline-default new-checkbox-text">
                                                          <input type="checkbox" class="new-control-input">
                                                          <span class="new-control-indicator"></span><span class="new-chk-content">Default</span>
                                                        </label>
                                                    </div>

                                                    <div class="n-chk">
                                                        <label class="new-control new-checkbox checkbox-outline-primary new-checkbox-text">
                                                          <input type="checkbox" class="new-control-input">
                                                          <span class="new-control-indicator"></span><span class="new-chk-content">Primary</span>
                                                        </label>
                                                    </div>

                                                    <div class="n-chk">
                                                        <label class="new-control new-checkbox checkbox-outline-success new-checkbox-text">
                                                          <input type="checkbox" class="new-control-input">
                                                          <span class="new-control-indicator"></span><span class="new-chk-content">Success</span>
                                                        </label>
                                                    </div>

                                                    <div class="n-chk">
                                                        <label class="new-control new-checkbox checkbox-outline-info new-checkbox-text">
                                                          <input type="checkbox" class="new-control-input">
                                                          <span class="new-control-indicator"></span><span class="new-chk-content">Info</span>
                                                        </label>
                                                    </div>

                                                    <div class="n-chk">
                                                        <label class="new-control new-checkbox checkbox-outline-warning new-checkbox-text">
                                                          <input type="checkbox" class="new-control-input">
                                                          <span class="new-control-indicator"></span><span class="new-chk-content">Warning</span>
                                                        </label>
                                                    </div>

                                                    <div class="n-chk">
                                                        <label class="new-control new-checkbox checkbox-outline-danger new-checkbox-text">
                                                          <input type="checkbox" class="new-control-input">
                                                          <span class="new-control-indicator"></span><span class="new-chk-content">Danger</span>
                                                        </label>
                                                    </div>

                                                    <div class="n-chk">
                                                        <label class="new-control new-checkbox checkbox-outline-secondary new-checkbox-text">
                                                          <input type="checkbox" class="new-control-input" checked>
                                                          <span class="new-control-indicator"></span><span class="new-chk-content">Secondary</span>
                                                        </label>
                                                    </div>

                                                    <div class="n-chk">
                                                        <label class="new-control new-checkbox checkbox-outline-dark new-checkbox-text">
                                                          <input type="checkbox" class="new-control-input">
                                                          <span class="new-control-indicator"></span><span class="new-chk-content">Dark</span>
                                                        </label>
                                                    </div>

                                                </div>

                                            </div>

                                            <div class="code-section-container">
                                                
                                                <button class="btn toggle-code-snippet"><span>Code</span></button>

                                                <div class="code-section text-left">
                                                    <pre>
&lt;div class="n-chk"&gt;
    &lt;label class="new-control new-checkbox new-checkbox-text checkbox-primary"&gt;
      &lt;input type="checkbox" class="new-control-input"&gt;
      &lt;span class="new-control-indicator"&gt;&lt;/span&gt;&lt;span class="new-chk-content"&gt;Primary&lt;/span&gt;
    &lt;/label&gt;
&lt;/div&gt;
</pre>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-12 col-12 layout-spacing">
                                    <div class="statbox widget box box-shadow">
                                        <div class="widget-header">                                
                                            <div class="row">
                                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                    <h4>Rounded Text Color</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-content widget-content-area">
                                            <p class="mb-4">Use <code>.new-checkbox-rounded</code> class to make text colored as checkbox.</p>

                                            <div class="row">

                                                <div class="col-md-6 col-6">

                                                    <div class="n-chk">
                                                        <label class="new-control new-checkbox new-checkbox-rounded new-checkbox-text">
                                                          <input type="checkbox" class="new-control-input">
                                                          <span class="new-control-indicator"></span><span class="new-chk-content">Default</span>
                                                        </label>
                                                    </div>

                                                    <div class="n-chk">
                                                        <label class="new-control new-checkbox new-checkbox-rounded new-checkbox-text checkbox-primary">
                                                          <input type="checkbox" class="new-control-input">
                                                          <span class="new-control-indicator"></span><span class="new-chk-content">Primary</span>
                                                        </label>
                                                    </div>

                                                    <div class="n-chk">
                                                        <label class="new-control new-checkbox new-checkbox-rounded new-checkbox-text checkbox-success">
                                                          <input type="checkbox" class="new-control-input">
                                                          <span class="new-control-indicator"></span><span class="new-chk-content">Success</span>
                                                        </label>
                                                    </div>

                                                    <div class="n-chk">
                                                        <label class="new-control new-checkbox new-checkbox-rounded new-checkbox-text checkbox-info">
                                                          <input type="checkbox" class="new-control-input">
                                                          <span class="new-control-indicator"></span><span class="new-chk-content">Info</span>
                                                        </label>
                                                    </div>

                                                    <div class="n-chk">
                                                        <label class="new-control new-checkbox new-checkbox-rounded new-checkbox-text checkbox-warning">
                                                          <input type="checkbox" class="new-control-input">
                                                          <span class="new-control-indicator"></span><span class="new-chk-content">Warning</span>
                                                        </label>
                                                    </div>

                                                    <div class="n-chk">
                                                        <label class="new-control new-checkbox new-checkbox-rounded new-checkbox-text checkbox-danger">
                                                          <input type="checkbox" class="new-control-input" checked>
                                                          <span class="new-control-indicator"></span><span class="new-chk-content">Danger</span>
                                                        </label>
                                                    </div>

                                                    <div class="n-chk">
                                                        <label class="new-control new-checkbox new-checkbox-rounded new-checkbox-text checkbox-secondary">
                                                          <input type="checkbox" class="new-control-input">
                                                          <span class="new-control-indicator"></span><span class="new-chk-content">Secondary</span>
                                                        </label>
                                                    </div>

                                                    <div class="n-chk">
                                                        <label class="new-control new-checkbox new-checkbox-rounded new-checkbox-text checkbox-dark">
                                                          <input type="checkbox" class="new-control-input">
                                                          <span class="new-control-indicator"></span><span class="new-chk-content">Dark</span>
                                                        </label>
                                                    </div>

                                                </div>

                                                <div class="col-md-6 col-6">
                                                    
                                                    <div class="n-chk">
                                                        <label class="new-control new-checkbox new-checkbox-rounded new-checkbox-text checkbox-outline-default">
                                                          <input type="checkbox" class="new-control-input">
                                                          <span class="new-control-indicator"></span><span class="new-chk-content">Default</span>
                                                        </label>
                                                    </div>

                                                    <div class="n-chk">
                                                        <label class="new-control new-checkbox new-checkbox-rounded new-checkbox-text checkbox-outline-primary">
                                                          <input type="checkbox" class="new-control-input">
                                                          <span class="new-control-indicator"></span><span class="new-chk-content">Primary</span>
                                                        </label>
                                                    </div>

                                                    <div class="n-chk">
                                                        <label class="new-control new-checkbox new-checkbox-rounded new-checkbox-text checkbox-outline-success">
                                                          <input type="checkbox" class="new-control-input">
                                                          <span class="new-control-indicator"></span><span class="new-chk-content">Success</span>
                                                        </label>
                                                    </div>

                                                    <div class="n-chk">
                                                        <label class="new-control new-checkbox new-checkbox-rounded new-checkbox-text checkbox-outline-info">
                                                          <input type="checkbox" class="new-control-input">
                                                          <span class="new-control-indicator"></span><span class="new-chk-content">Info</span>
                                                        </label>
                                                    </div>

                                                    <div class="n-chk">
                                                        <label class="new-control new-checkbox new-checkbox-rounded new-checkbox-text checkbox-outline-warning">
                                                          <input type="checkbox" class="new-control-input" checked>
                                                          <span class="new-control-indicator"></span><span class="new-chk-content">Warning</span>
                                                        </label>
                                                    </div>

                                                    <div class="n-chk">
                                                        <label class="new-control new-checkbox new-checkbox-rounded new-checkbox-text checkbox-outline-danger">
                                                          <input type="checkbox" class="new-control-input">
                                                          <span class="new-control-indicator"></span><span class="new-chk-content">Danger</span>
                                                        </label>
                                                    </div>

                                                    <div class="n-chk">
                                                        <label class="new-control new-checkbox new-checkbox-rounded new-checkbox-text checkbox-outline-secondary">
                                                          <input type="checkbox" class="new-control-input">
                                                          <span class="new-control-indicator"></span><span class="new-chk-content">Secondary</span>
                                                        </label>
                                                    </div>

                                                    <div class="n-chk">
                                                        <label class="new-control new-checkbox new-checkbox-rounded new-checkbox-text checkbox-outline-dark">
                                                          <input type="checkbox" class="new-control-input">
                                                          <span class="new-control-indicator"></span><span class="new-chk-content">Dark</span>
                                                        </label>
                                                    </div>

                                                </div>

                                            </div>

                                            <div class="code-section-container">
                                                
                                                <button class="btn toggle-code-snippet"><span>Code</span></button>
                                                <div class="code-section text-left">
                                                    <pre>
&lt;div class="n-chk"&gt;
    &lt;label class="new-control new-checkbox new-checkbox-rounded new-checkbox-text"&gt;
      &lt;input type="checkbox" class="new-control-input"&gt;
      &lt;span class="new-control-indicator"&gt;&lt;/span&gt;&lt;span class="new-chk-content"&gt;Default&lt;/span&gt;
    &lt;/label&gt;
&lt;/div&gt;
</pre>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <div id="radio" class="col-lg-12">
                                    <div class="seperator-header">
                                        <h4 class="">Radio</h4>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <blockquote class="blockquote">
                                        <p class="">These are Theme Radio.</p>
                                        <p class="">Use <code>.new-control</code>, <code>.new-radio</code> with <code>label</code> tag, <code>.new-control-input</code> with input <code> type="radio"</code> inside the label and <code>.new-control-indicator</code> with <code>span</code> tag inside the label to create theme custom radio.</p>
                                    </blockquote>
                                </div>

                                <!-- Background -->
                                <div class="col-xl-12 col-12 layout-spacing">
                                    <div class="statbox widget box box-shadow">
                                        <div class="widget-header">                                
                                            <div class="row">
                                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                    <h4>Default</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-content widget-content-area">
                                            <p class="mb-4">Use <code>.radio-*</code> class to change different colors.</p>

                                            <div class="n-chk">
                                                <label class="new-control new-radio">
                                                  <input type="radio" class="new-control-input" name="custom-radio-1">
                                                  <span class="new-control-indicator"></span>Default
                                                </label>
                                            </div>

                                            <div class="n-chk">
                                                <label class="new-control new-radio radio-primary">
                                                  <input type="radio" class="new-control-input" name="custom-radio-1" checked>
                                                  <span class="new-control-indicator"></span>Primary
                                                </label>
                                            </div>

                                            <div class="n-chk">
                                                <label class="new-control new-radio radio-success">
                                                  <input type="radio" class="new-control-input" name="custom-radio-1">
                                                  <span class="new-control-indicator"></span>Success
                                                </label>
                                            </div>

                                            <div class="n-chk">
                                                <label class="new-control new-radio radio-info">
                                                  <input type="radio" class="new-control-input" name="custom-radio-1">
                                                  <span class="new-control-indicator"></span>Info
                                                </label>
                                            </div>

                                            <div class="n-chk">
                                                <label class="new-control new-radio radio-warning">
                                                  <input type="radio" class="new-control-input" name="custom-radio-1">
                                                  <span class="new-control-indicator"></span>Warning
                                                </label>
                                            </div>

                                            <div class="n-chk">
                                                <label class="new-control new-radio radio-danger">
                                                  <input type="radio" class="new-control-input" name="custom-radio-1">
                                                  <span class="new-control-indicator"></span>Danger
                                                </label>
                                            </div>

                                            <div class="n-chk">
                                                <label class="new-control new-radio radio-secondary">
                                                  <input type="radio" class="new-control-input" name="custom-radio-1">
                                                  <span class="new-control-indicator"></span>Secondary
                                                </label>
                                            </div>

                                            <div class="n-chk">
                                                <label class="new-control new-radio radio-dark">
                                                  <input type="radio" class="new-control-input" name="custom-radio-1">
                                                  <span class="new-control-indicator"></span>Dark
                                                </label>
                                            </div>

                                            <div class="code-section-container">
                                                
                                                <button class="btn toggle-code-snippet"><span>Code</span></button>

                                                <div class="code-section text-left">
                                                    <pre>
&lt;div class="n-chk"&gt;
    &lt;label class="new-control new-radio radio-primary"&gt;
      &lt;input type="radio" class="new-control-input" name="custom-radio-1" checked&gt;
      &lt;span class="new-control-indicator"&gt;&lt;/span&gt;Primary
    &lt;/label&gt;
&lt;/div&gt;
</pre>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-12 col-12 layout-spacing">
                                    <div class="statbox widget box box-shadow">
                                        <div class="widget-header">                                
                                            <div class="row">
                                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                    <h4>Classic</h4>
                                                </div>                                                                        
                                            </div>
                                        </div>
                                        <div class="widget-content widget-content-area">
                                            <p class="mb-4">Use <code>.radio-classic-*</code> class to make classic.</p>

                                            <div class="n-chk">
                                                <label class="new-control new-radio radio-classic-default">
                                                  <input type="radio" class="new-control-input" name="custom-radio-2">
                                                  <span class="new-control-indicator"></span>Default
                                                </label>
                                            </div>

                                            <div class="n-chk">
                                                <label class="new-control new-radio radio-classic-primary">
                                                  <input type="radio" class="new-control-input" name="custom-radio-2">
                                                  <span class="new-control-indicator"></span>Primary
                                                </label>
                                            </div>

                                            <div class="n-chk">
                                                <label class="new-control new-radio radio-classic-success">
                                                  <input type="radio" class="new-control-input" name="custom-radio-2" checked>
                                                  <span class="new-control-indicator"></span>Success
                                                </label>
                                            </div>

                                            <div class="n-chk">
                                                <label class="new-control new-radio radio-classic-info">
                                                  <input type="radio" class="new-control-input" name="custom-radio-2">
                                                  <span class="new-control-indicator"></span>Info
                                                </label>
                                            </div>

                                            <div class="n-chk">
                                                <label class="new-control new-radio radio-classic-warning">
                                                  <input type="radio" class="new-control-input" name="custom-radio-2">
                                                  <span class="new-control-indicator"></span>Warning
                                                </label>
                                            </div>

                                            <div class="n-chk">
                                                <label class="new-control new-radio radio-classic-danger">
                                                  <input type="radio" class="new-control-input" name="custom-radio-2">
                                                  <span class="new-control-indicator"></span>Danger
                                                </label>
                                            </div>

                                            <div class="n-chk">
                                                <label class="new-control new-radio radio-classic-secondary">
                                                  <input type="radio" class="new-control-input" name="custom-radio-2">
                                                  <span class="new-control-indicator"></span>Secondary
                                                </label>
                                            </div>

                                            <div class="n-chk">
                                                <label class="new-control new-radio radio-classic-dark">
                                                  <input type="radio" class="new-control-input" name="custom-radio-2">
                                                  <span class="new-control-indicator"></span>Dark
                                                </label>
                                            </div>

                                            <div class="code-section-container">
                                                
                                                <button class="btn toggle-code-snippet"><span>Code</span></button>
                                                <div class="code-section text-left">
                                                    <pre>
&lt;div class="n-chk"&gt;
    &lt;label class="new-control new-radio radio-classic-primary"&gt;
      &lt;input type="radio" class="new-control-input" name="custom-radio-2"&gt;
      &lt;span class="new-control-indicator"&gt;&lt;/span&gt;Primary
    &lt;/label&gt;
&lt;/div&gt;
</pre>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-12 col-12 layout-spacing">
                                    <div class="statbox widget box box-shadow">
                                        <div class="widget-header">                                
                                            <div class="row">
                                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                    <h4>Square</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-content widget-content-area">
                                            <p class="mb-4">Use <code>.square-radio</code> class to make squares.</p>

                                            <div class="n-chk">
                                                <label class="new-control new-radio square-radio">
                                                  <input type="radio" class="new-control-input" name="custom-radio-3">
                                                  <span class="new-control-indicator"></span>Default
                                                </label>
                                            </div>

                                            <div class="n-chk">
                                                <label class="new-control new-radio square-radio radio-primary">
                                                  <input type="radio" class="new-control-input" name="custom-radio-3">
                                                  <span class="new-control-indicator"></span>Primary
                                                </label>
                                            </div>

                                            <div class="n-chk">
                                                <label class="new-control new-radio square-radio radio-success">
                                                  <input type="radio" class="new-control-input" name="custom-radio-3">
                                                  <span class="new-control-indicator"></span>Success
                                                </label>
                                            </div>

                                            <div class="n-chk">
                                                <label class="new-control new-radio square-radio radio-info">
                                                  <input type="radio" class="new-control-input" name="custom-radio-3" checked>
                                                  <span class="new-control-indicator"></span>Info
                                                </label>
                                            </div>

                                            <div class="n-chk">
                                                <label class="new-control new-radio square-radio radio-warning">
                                                  <input type="radio" class="new-control-input" name="custom-radio-3">
                                                  <span class="new-control-indicator"></span>Warning
                                                </label>
                                            </div>

                                            <div class="n-chk">
                                                <label class="new-control new-radio square-radio radio-danger">
                                                  <input type="radio" class="new-control-input" name="custom-radio-3">
                                                  <span class="new-control-indicator"></span>Danger
                                                </label>
                                            </div>

                                            <div class="n-chk">
                                                <label class="new-control new-radio square-radio radio-secondary">
                                                  <input type="radio" class="new-control-input" name="custom-radio-3">
                                                  <span class="new-control-indicator"></span>Secondary
                                                </label>
                                            </div>

                                            <div class="n-chk">
                                                <label class="new-control new-radio square-radio radio-dark">
                                                  <input type="radio" class="new-control-input" name="custom-radio-3">
                                                  <span class="new-control-indicator"></span>Dark
                                                </label>
                                            </div>

                                            <div class="code-section-container">
                                                
                                                <button class="btn toggle-code-snippet"><span>Code</span></button>
                                                <div class="code-section text-left">
                                                    <pre>
&lt;div class="n-chk"&gt;
    &lt;label class="new-control new-radio square-radio radio-primary"&gt;
      &lt;input type="radio" class="new-control-input" name="custom-radio-3"&gt;
      &lt;span class="new-control-indicator"&gt;&lt;/span&gt;Primary
    &lt;/label&gt;
&lt;/div&gt;
</pre>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-12 col-12 layout-spacing">
                                    <div class="statbox widget box box-shadow">
                                        <div class="widget-header">                                
                                            <div class="row">
                                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                    <h4>Default Text Color</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-content widget-content-area">
                                            <p class="mb-4">Use <code>.new-radio-text</code> class to make text colored as checkbox.</p>

                                            <div class="n-chk">
                                                <label class="new-control new-radio new-radio-text">
                                                  <input type="radio" class="new-control-input" name="custom-radio-4">
                                                  <span class="new-control-indicator"></span><span class="new-radio-content">Default</span>
                                                </label>
                                            </div>

                                            <div class="n-chk">
                                                <label class="new-control new-radio new-radio-text radio-primary">
                                                  <input type="radio" class="new-control-input" name="custom-radio-4">
                                                  <span class="new-control-indicator"></span><span class="new-radio-content">Primary</span>
                                                </label>
                                            </div>

                                            <div class="n-chk">
                                                <label class="new-control new-radio new-radio-text radio-success">
                                                  <input type="radio" class="new-control-input" name="custom-radio-4">
                                                  <span class="new-control-indicator"></span><span class="new-radio-content">Success</span>
                                                </label>
                                            </div>

                                            <div class="n-chk">
                                                <label class="new-control new-radio new-radio-text radio-info">
                                                  <input type="radio" class="new-control-input" name="custom-radio-4">
                                                  <span class="new-control-indicator"></span><span class="new-radio-content">Info</span>
                                                </label>
                                            </div>

                                            <div class="n-chk">
                                                <label class="new-control new-radio new-radio-text radio-warning">
                                                  <input type="radio" class="new-control-input" name="custom-radio-4" checked>
                                                  <span class="new-control-indicator"></span><span class="new-radio-content">Warning</span>
                                                </label>
                                            </div>

                                            <div class="n-chk">
                                                <label class="new-control new-radio new-radio-text radio-danger">
                                                  <input type="radio" class="new-control-input" name="custom-radio-4">
                                                  <span class="new-control-indicator"></span><span class="new-radio-content">Danger</span>
                                                </label>
                                            </div>

                                            <div class="n-chk">
                                                <label class="new-control new-radio new-radio-text radio-secondary">
                                                  <input type="radio" class="new-control-input" name="custom-radio-4">
                                                  <span class="new-control-indicator"></span><span class="new-radio-content">Secondary</span>
                                                </label>
                                            </div>

                                            <div class="n-chk">
                                                <label class="new-control new-radio new-radio-text radio-dark">
                                                  <input type="radio" class="new-control-input" name="custom-radio-4">
                                                  <span class="new-control-indicator"></span><span class="new-radio-content">Dark</span>
                                                </label>
                                            </div>

                                            <div class="code-section-container">
                                                
                                                <button class="btn toggle-code-snippet"><span>Code</span></button>

                                                <div class="code-section text-left">
                                                    <pre>
&lt;div class="n-chk"&gt;
    &lt;label class="new-control new-radio new-radio-text radio-primary"&gt;
      &lt;input type="radio" class="new-control-input" name="custom-radio-4"&gt;
      &lt;span class="new-control-indicator"&gt;&lt;/span&gt;&lt;span class="new-radio-content"&gt;Primary&lt;/span&gt;
    &lt;/label&gt;
&lt;/div&gt;
</pre>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-12 col-12 layout-spacing">
                                    <div class="statbox widget box box-shadow">
                                        <div class="widget-header">                                
                                            <div class="row">
                                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                    <h4>Classic Text Color</h4>
                                                </div>                                                                        
                                            </div>
                                        </div>
                                        <div class="widget-content widget-content-area">
                                            <p class="mb-4">Use <code>.radio-classic-*</code> class to make text colored as checkbox..</p>

                                            <div class="n-chk">
                                                <label class="new-control new-radio new-radio-text radio-classic-default">
                                                  <input type="radio" class="new-control-input" name="custom-radio-5">
                                                  <span class="new-control-indicator"></span><span class="new-radio-content">Default</span>
                                                </label>
                                            </div>

                                            <div class="n-chk">
                                                <label class="new-control new-radio new-radio-text radio-classic-primary">
                                                  <input type="radio" class="new-control-input" name="custom-radio-5">
                                                  <span class="new-control-indicator"></span><span class="new-radio-content">Primary</span>
                                                </label>
                                            </div>

                                            <div class="n-chk">
                                                <label class="new-control new-radio new-radio-text radio-classic-success">
                                                  <input type="radio" class="new-control-input" name="custom-radio-5">
                                                  <span class="new-control-indicator"></span><span class="new-radio-content">Success</span>
                                                </label>
                                            </div>

                                            <div class="n-chk">
                                                <label class="new-control new-radio new-radio-text radio-classic-info">
                                                  <input type="radio" class="new-control-input" name="custom-radio-5">
                                                  <span class="new-control-indicator"></span><span class="new-radio-content">Info</span>
                                                </label>
                                            </div>

                                            <div class="n-chk">
                                                <label class="new-control new-radio new-radio-text radio-classic-warning">
                                                  <input type="radio" class="new-control-input" name="custom-radio-5">
                                                  <span class="new-control-indicator"></span><span class="new-radio-content">Warning</span>
                                                </label>
                                            </div>

                                            <div class="n-chk">
                                                <label class="new-control new-radio new-radio-text radio-classic-danger">
                                                  <input type="radio" class="new-control-input" name="custom-radio-5" checked>
                                                  <span class="new-control-indicator"></span><span class="new-radio-content">Danger</span>
                                                </label>
                                            </div>

                                            <div class="n-chk">
                                                <label class="new-control new-radio new-radio-text radio-classic-secondary">
                                                  <input type="radio" class="new-control-input" name="custom-radio-5">
                                                  <span class="new-control-indicator"></span><span class="new-radio-content">Secondary</span>
                                                </label>
                                            </div>

                                            <div class="n-chk">
                                                <label class="new-control new-radio new-radio-text radio-classic-dark">
                                                  <input type="radio" class="new-control-input" name="custom-radio-5">
                                                  <span class="new-control-indicator"></span><span class="new-radio-content">Dark</span>
                                                </label>
                                            </div>

                                            <div class="code-section-container">
                                                
                                                <button class="btn toggle-code-snippet"><span>Code</span></button>

                                                <div class="code-section text-left">
                                                    <pre>
&lt;div class="n-chk"&gt;
    &lt;label class="new-control new-radio new-radio-text radio-classic-primary"&gt;
      &lt;input type="radio" class="new-control-input" name="custom-radio-5"&gt;
      &lt;span class="new-control-indicator"&gt;&lt;/span&gt;&lt;span class="new-radio-content"&gt;Primary&lt;/span&gt;
    &lt;/label&gt;
&lt;/div&gt;

</pre>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-12 col-12 layout-spacing">
                                    <div class="statbox widget box box-shadow">
                                        <div class="widget-header">                                
                                            <div class="row">
                                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                    <h4>Square Text Color</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-content widget-content-area">
                                            <p class="mb-4">Use <code>.square-radio</code> class to make text colored as checkbox.</p>

                                            <div class="n-chk">
                                                <label class="new-control new-radio square-radio new-radio-text">
                                                  <input type="radio" class="new-control-input" name="custom-radio-6">
                                                  <span class="new-control-indicator"></span><span class="new-radio-content">Default</span>
                                                </label>
                                            </div>

                                            <div class="n-chk">
                                                <label class="new-control new-radio square-radio new-radio-text radio-primary">
                                                  <input type="radio" class="new-control-input" name="custom-radio-6">
                                                  <span class="new-control-indicator"></span><span class="new-radio-content">Primary</span>
                                                </label>
                                            </div>

                                            <div class="n-chk">
                                                <label class="new-control new-radio square-radio new-radio-text radio-success">
                                                  <input type="radio" class="new-control-input" name="custom-radio-6">
                                                  <span class="new-control-indicator"></span><span class="new-radio-content">Success</span>
                                                </label>
                                            </div>

                                            <div class="n-chk">
                                                <label class="new-control new-radio square-radio new-radio-text radio-info">
                                                  <input type="radio" class="new-control-input" name="custom-radio-6">
                                                  <span class="new-control-indicator"></span><span class="new-radio-content">Info</span>
                                                </label>
                                            </div>

                                            <div class="n-chk">
                                                <label class="new-control new-radio square-radio new-radio-text radio-warning">
                                                  <input type="radio" class="new-control-input" name="custom-radio-6">
                                                  <span class="new-control-indicator"></span><span class="new-radio-content">Warning</span>
                                                </label>
                                            </div>

                                            <div class="n-chk">
                                                <label class="new-control new-radio square-radio new-radio-text radio-danger">
                                                  <input type="radio" class="new-control-input" name="custom-radio-6">
                                                  <span class="new-control-indicator"></span><span class="new-radio-content">Danger</span>
                                                </label>
                                            </div>

                                            <div class="n-chk">
                                                <label class="new-control new-radio square-radio new-radio-text radio-secondary">
                                                  <input type="radio" class="new-control-input" name="custom-radio-6" checked>
                                                  <span class="new-control-indicator"></span><span class="new-radio-content">Secondary</span>
                                                </label>
                                            </div>

                                            <div class="n-chk">
                                                <label class="new-control new-radio square-radio new-radio-text radio-dark">
                                                  <input type="radio" class="new-control-input" name="custom-radio-6">
                                                  <span class="new-control-indicator"></span><span class="new-radio-content">Dark</span>
                                                </label>
                                            </div>

                                            <div class="code-section-container">
                                                
                                                <button class="btn toggle-code-snippet"><span>Code</span></button>

                                                <div class="code-section text-left">
                                                    <pre>
&lt;div class="n-chk"&gt;
    &lt;label class="new-control new-radio square-radio new-radio-text radio-primary"&gt;
      &lt;input type="radio" class="new-control-input" name="custom-radio-6"&gt;
      &lt;span class="new-control-indicator"&gt;&lt;/span&gt;&lt;span class="new-radio-content"&gt;Primary&lt;/span&gt;
    &lt;/label&gt;
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

                </div>
            </div>
@endsection