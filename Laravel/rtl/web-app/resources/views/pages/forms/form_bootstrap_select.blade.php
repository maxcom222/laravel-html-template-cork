@extends('layouts.app')

@section('content')

            <div class="container">
                <div class="container">

                    <div id="navSection" data-spy="affix" class="nav  sidenav">
                        <div class="sidenav-content">
                            <a href="#basic" class="active nav-link">Basic</a>
                            <a href="#disabled" class="nav-link">Disabled</a>
                            <a href="#styling" class="nav-link">Styling</a>
                            <a href="#width" class="nav-link">Width</a>
                        </div>
                    </div>
                    
                    <div class="row layout-top-spacing">
                    
                        <div id="basic" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Standard select boxes</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <p>Use <code>.selectpicker</code> class on select element to convert it to Bootstrap Select.</p>
                                    <select class="selectpicker">
                                        <option>Mustard</option>
                                        <option>Ketchup</option>
                                        <option>Relish</option>
                                    </select>

                                    <div class="code-section-container show-code">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;select class="selectpicker"&gt;
    &lt;option&gt;Mustard&lt;/option&gt;
    &lt;option&gt;Ketchup&lt;/option&gt;
    &lt;option&gt;Relish&lt;/option&gt;
&lt;/select&gt;
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
                                            <h4>Select boxes with optgroups</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <p>Add options inside the <code>optgroups</code> to for group options</p>
                                    <select class="selectpicker">
                                        <optgroup label="Picnic">
                                            <option>Mustard</option>
                                            <option>Ketchup</option>
                                            <option>Relish</option>
                                        </optgroup>
                                        <optgroup label="Camping">
                                            <option>Tent</option>
                                            <option>Flashlight</option>
                                            <option>Toilet Paper</option>
                                        </optgroup>
                                    </select>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;select class="selectpicker"&gt;
    &lt;optgroup label="Picnic"&gt;
        &lt;option&gt;Mustard&lt;/option&gt;
        &lt;option&gt;Ketchup&lt;/option&gt;
        &lt;option&gt;Relish&lt;/option&gt;
    &lt;/optgroup&gt;
    &lt;optgroup label="Camping"&gt;
        &lt;option&gt;Tent&lt;/option&gt;
        &lt;option&gt;Flashlight&lt;/option&gt;
        &lt;option&gt;Toilet Paper&lt;/option&gt;
    &lt;/optgroup&gt;
&lt;/select&gt;
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
                                            <h4>Multiple select boxes</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <p>Add <code>multiselect</code> attribute to for multi-selection</p>
                                    <select class="selectpicker" multiple>
                                        <option>Mustard</option>
                                        <option>Ketchup</option>
                                        <option>Relish</option>
                                    </select>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;select class="selectpicker" multiple&gt;
    &lt;option&gt;Mustard&lt;/option&gt;
    &lt;option&gt;Ketchup&lt;/option&gt;
    &lt;option&gt;Relish&lt;/option&gt;
&lt;/select&gt;
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
                                            <h4>Live search</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <p>You can add a search input by passing <code>data-live-search="true"</code> attribute</p>

                                    <select class="selectpicker" data-live-search="true">
                                        <option>Fries</option>
                                        <option>Burger, Shake and a Smile</option>
                                        <option>Sugar, Spice and all things nice</option>
                                    </select>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>
                                        <div class="code-section text-left">
                                            <pre>
&lt;select class="selectpicker" data-live-search="true"&gt;
    &lt;option&gt;Fries&lt;/option&gt;
    &lt;option&gt;Burger, Shake and a Smile&lt;/option&gt;
    &lt;option&gt;Sugar, Spice and all things nice&lt;/option&gt;
&lt;/select&gt;
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
                                            <h4>Keywords</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <p>Add key words to options to improve their searchability using <code>data-tokens</code>.</p>
                                    <select class="selectpicker" data-live-search="true">
                                        <option data-tokens="ketchup mustard">Hot Dog</option>
                                        <option data-tokens="mustard">Burger, Shake and a Smile</option>
                                        <option data-tokens="frosting">Sugar, Spice and all things nice</option>
                                    </select>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;select class="selectpicker" data-live-search="true"&gt;
    &lt;option data-tokens="ketchup mustard"&gt;Hot Dog&lt;/option&gt;
    &lt;option data-tokens="mustard"&gt;Burger, Shake and a Smile&lt;/option&gt;
    &lt;option data-tokens="frosting"&gt;Sugar, Spice and all things nice&lt;/option&gt;
&lt;/select&gt;
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
                                            <h4>Limit the number of selections</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <p>Limit the number of options that can be selected via the <code> data-max-options</code>.</p>
                                    <select class="selectpicker" multiple data-max-options="2">
                                        <option>Mustard</option>
                                        <option>Ketchup</option>
                                        <option>Relish</option>
                                    </select>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;select class="selectpicker" multiple data-max-options="2"&gt;
    &lt;option&gt;Mustard&lt;/option&gt;
    &lt;option&gt;Ketchup&lt;/option&gt;
    &lt;option&gt;Relish&lt;/option&gt;
&lt;/select&gt;
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
                                            <h4>Limit the number of selections in groups</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <p>Limit the number of group that can be selected using <code> maxOptionsText</code>.</p>
                                    <select class="selectpicker" multiple>
                                        <optgroup label="Condiments" data-max-options="2">
                                            <option>Mustard</option>
                                            <option>Ketchup</option>
                                            <option>Relish</option>
                                        </optgroup>
                                        <optgroup label="Breads" data-max-options="2">
                                            <option>Plain</option>
                                            <option>Steamed</option>
                                            <option>Toasted</option>
                                        </optgroup>
                                    </select>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;select class="selectpicker" multiple&gt;
    &lt;optgroup label="Condiments" data-max-options="2"&gt;
        &lt;option&gt;ustard^&lt;/option&gt;
        &lt;option&gt;etchup^&lt;/option&gt;
        &lt;option&gt;elish^&lt;/option&gt;
    &lt;/optgroup&gt;
    &lt;optgroup label="Breads" data-max-options="2"&gt;
        &lt;option&gt;lain^&lt;/option&gt;
        &lt;option&gt;teamed^&lt;/option&gt;
        &lt;option&gt;oasted^&lt;/option&gt;
    &lt;/optgroup&gt;
&lt;/select&gt;
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
                                            <h4>Placeholder</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <p>Using the <code>title</code> attribute will set the default placeholder.</p>

                                    <select class="selectpicker" multiple title="Choose options">
                                        <option>Mustard</option>
                                        <option>Ketchup</option>
                                        <option>Relish</option>
                                    </select>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;select class="selectpicker" multiple title="Choose options"&gt;
    &lt;option&gt;Mustard&lt;/option&gt;
    &lt;option&gt;Ketchup&lt;/option&gt;
    &lt;option&gt;Relish&lt;/option&gt;
&lt;/select&gt;
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
                                            <h4>Selected text</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <p>Set the <code>title</code> attribute on individual options to display alternative text when the option is selected</p>
                                    <select class="selectpicker">
                                        <option title="Combo 1">Hot Dog, Fries and a Soda</option>
                                        <option title="Combo 2">Burger, Shake and a Smile</option>
                                        <option title="Combo 3">Sugar, Spice and all things nice</option>
                                    </select>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>
                                        <div class="code-section text-left">
                                            <pre>
&lt;select class="selectpicker"&gt;
    &lt;option title="Combo 1"&gt;Hot Dog, Fries and a Soda&lt;/option&gt;
    &lt;option title="Combo 2"&gt;Burger, Shake and a Smile&lt;/option&gt;
    &lt;option title="Combo 3"&gt;Sugar, Spice and all things nice&lt;/option&gt;
&lt;/select&gt;
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
                                            <h4>Selected text format</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <p>Specify how the selection is displayed with the <code> data-selected-text-format</code> attribute on a multiple select</p>
                                    <select class="selectpicker" multiple data-selected-text-format="count">
                                        <option>Mustard</option>
                                        <option>Ketchup</option>
                                        <option>Relish</option>
                                    </select>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;select class="selectpicker" multiple data-selected-text-format="count"&gt;
    &lt;option&gt;Mustard&lt;/option&gt;
    &lt;option&gt;Ketchup&lt;/option&gt;
    &lt;option&gt;Relish&lt;/option&gt;
&lt;/select&gt;
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
                                            <h4>Selected text format</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <p><code>count > x</code> : Where x is the number of items selected when the display format changes from values to count.</p>
                                    <select class="selectpicker" multiple data-selected-text-format="count > 3">
                                        <option>Mustard</option>
                                        <option>Ketchup</option>
                                        <option>Relish</option>
                                        <option>Onions</option>
                                    </select>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;select class="selectpicker" multiple data-selected-text-format="count > 3"&gt;
    &lt;option&gt;Mustard&lt;/option&gt;
    &lt;option&gt;Ketchup&lt;/option&gt;
    &lt;option&gt;Relish&lt;/option&gt;
    &lt;option&gt;Onions&lt;/option&gt;
&lt;/select&gt;
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
                                            <h4>Style individual options</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <p>Classes and styles added to options are transferred to the select box.</p>
                                    <select class="selectpicker">
                                        <option>Mustard</option>
                                        <option class="bg-danger">Ketchup</option>
                                        <option style="background: #8dbf42; color: #fff;">Relish</option>
                                    </select>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;select class="selectpicker"&gt;
    &lt;option&gt;Mustard&lt;/option&gt;
    &lt;option class="bg-danger"&gt;Ketchup&lt;/option&gt;
    &lt;option style="background: #8dbf42; color: #fff;"&gt;Relish&lt;/option&gt;
&lt;/select&gt;
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
                                            <h4>Custom content</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <p>Insert custom HTML into the option with the <code>data-content</code> attribute</p>
                                    <select class="selectpicker">
                                        <option data-content="<span class='badge badge-primary'>Primary</span>">Primary</option>
                                        <option data-content="<span class='badge badge-secondary'>Secondary</span>">Secondary</option>
                                        <option data-content="<span class='badge badge-success'>Success</span>">Success</option>
                                        <option data-content="<span class='badge badge-warning'>Warning</span>">Warning</option>
                                    </select>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;select class="selectpicker"&gt;
    &lt;option data-content="&lt;span class='badge badge-primary'&gt;Primary&lt;/span&gt;"&gt;Primary&lt;/option&gt;
    &lt;option data-content="&lt;span class='badge badge-secondary'&gt;Secondary&lt;/span&gt;"&gt;Secondary&lt;/option&gt;
    &lt;option data-content="&lt;span class='badge badge-success'&gt;Success&lt;/span&gt;"&gt;Success&lt;/option&gt;
    &lt;option data-content="&lt;span class='badge badge-warning'&gt;Warning&lt;/span&gt;"&gt;Warning&lt;/option&gt;
&lt;/select&gt;
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
                                            <h4>Show Subtext</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <p>Add subtext to an option or optgroup with the  <code>data-subtext</code> attribute.</p>
                                    <select class="selectpicker" data-show-subtext="true">
                                        <option data-subtext="French's">Mustard</option>
                                        <option data-subtext="Heinz">Ketchup</option>
                                        <option data-subtext="Sweet">Relish</option>
                                        <option data-subtext="Miracle Whip">Mayonnaise</option>
                                        <option data-divider="true">divider</option>
                                        <option data-subtext="Honey">Barbecue Sauce</option>
                                        <option data-subtext="Ranch">Salad Dressing</option>
                                        <option data-subtext="Sweet &amp; Spicy">Tabasco</option>
                                        <option data-subtext="Chunky">Salsa</option>
                                    </select>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;select class="selectpicker" data-show-subtext="true"&gt;
    &lt;option data-subtext="French's"&gt;Mustard&lt;/option&gt;
    &lt;option data-subtext="Heinz"&gt;Ketchup&lt;/option&gt;
    &lt;option data-subtext="Sweet"&gt;Relish&lt;/option&gt;
    &lt;option data-subtext="Miracle Whip"&gt;Mayonnaise&lt;/option&gt;
    &lt;option data-divider="true"&gt;divider&lt;/option&gt;
    &lt;option data-subtext="Honey"&gt;Barbecue Sauce&lt;/option&gt;
    &lt;option data-subtext="Ranch"&gt;Salad Dressing&lt;/option&gt;
    &lt;option data-subtext="Sweet &amp; Spicy"&gt;Tabasco&lt;/option&gt;
    &lt;option data-subtext="Chunky"&gt;Salsa&lt;/option&gt;
&lt;/select&gt;
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
                                            <h4>Menu size</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <p>The size of the menu can also be specifed using the <code>data-size</code> attribute.</p>
                                    <select class="selectpicker" data-size="5">
                                        <option>Mustard</option>
                                        <option>Ketchup</option>
                                        <option>Relish</option>
                                        <option>Mayonnaise</option>
                                        <option>Barbecue Sauce</option>
                                        <option>Salad Dressing</option>
                                        <option>Tabasco</option>
                                        <option>Salsa</option>
                                        <option>Mustard</option>
                                        <option>Ketchup</option>
                                        <option>Relish</option>
                                        <option>Mayonnaise</option>
                                        <option>Barbecue Sauce</option>
                                        <option>Salad Dressing</option>
                                        <option>Tabasco</option>
                                        <option>Salsa</option>
                                        <option>Mustard</option>
                                        <option>Ketchup</option>
                                        <option>Relish</option>
                                        <option>Mayonnaise</option>
                                        <option>Barbecue Sauce</option>
                                        <option>Salad Dressing</option>
                                        <option>Tabasco</option>
                                        <option>Salsa</option>
                                    </select>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;select class="selectpicker" data-size="5"&gt;
    &lt;option&gt;Mustard&lt;/option&gt;
    &lt;option&gt;Ketchup&lt;/option&gt;
    &lt;option&gt;Relish&lt;/option&gt;
    &lt;option&gt;Mayonnaise&lt;/option&gt;
    &lt;option&gt;Barbecue Sauce&lt;/option&gt;
    &lt;option&gt;Salad Dressing&lt;/option&gt;
    &lt;option&gt;Tabasco&lt;/option&gt;
    &lt;option&gt;Salsa&lt;/option&gt;
    &lt;option&gt;Mustard&lt;/option&gt;
    &lt;option&gt;Ketchup&lt;/option&gt;
    &lt;option&gt;Relish&lt;/option&gt;
    &lt;option&gt;Mayonnaise&lt;/option&gt;
    &lt;option&gt;Barbecue Sauce&lt;/option&gt;
    &lt;option&gt;Salad Dressing&lt;/option&gt;
    &lt;option&gt;Tabasco&lt;/option&gt;
    &lt;option&gt;Salsa&lt;/option&gt;
    &lt;option&gt;Mustard&lt;/option&gt;
    &lt;option&gt;Ketchup&lt;/option&gt;
    &lt;option&gt;Relish&lt;/option&gt;
    &lt;option&gt;Mayonnaise&lt;/option&gt;
    &lt;option&gt;Barbecue Sauce&lt;/option&gt;
    &lt;option&gt;Salad Dressing&lt;/option&gt;
    &lt;option&gt;Tabasco&lt;/option&gt;
    &lt;option&gt;Salsa&lt;/option&gt;
&lt;/select&gt;
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
                                            <h4>Select / Deselect all options</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <p>Adds two buttons to the top of the menu - <strong>Select All</strong> & <strong>Deselect All</strong> with <code>data-actions-box="true"</code>.</p>
                                    <select class="selectpicker" multiple data-actions-box="true">
                                        <option>Mustard</option>
                                        <option>Ketchup</option>
                                        <option>Relish</option>
                                    </select>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;select class="selectpicker" multiple data-actions-box="true"&gt;
    &lt;option&gt;Mustard&lt;/option&gt;
    &lt;option&gt;Ketchup&lt;/option&gt;
    &lt;option&gt;Relish&lt;/option&gt;
&lt;/select&gt;
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
                                            <h4>Divider</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <p>Add <code>data-divider="true"</code> to an option to turn it into a divider.</p>
                                    <select class="selectpicker">
                                        <option>Mustard</option>
                                        <option>Ketchup</option>
                                        <option>Relish</option>
                                        <option>Mayonnaise</option>
                                        <option>Barbecue Sauce</option>
                                        <option>Salad Dressing</option>
                                        <option>Tabasco</option>
                                        <option>Salsa</option>
                                        <option>Mustard</option>
                                        <option>Ketchup</option>
                                        <option>Relish</option>
                                        <option data-divider="true">divider</option>
                                        <option>Mayonnaise</option>
                                        <option>Barbecue Sauce</option>
                                        <option>Salad Dressing</option>
                                        <option>Tabasco</option>
                                        <option>Salsa</option>
                                        <option>Mustard</option>
                                        <option>Ketchup</option>
                                        <option>Relish</option>
                                        <option>Mayonnaise</option>
                                        <option>Barbecue Sauce</option>
                                        <option>Salad Dressing</option>
                                        <option>Tabasco</option>
                                        <option>Salsa</option>
                                    </select>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;select class="selectpicker"&gt;
    &lt;option&gt;Mustard&lt;/option&gt;
    &lt;option&gt;Ketchup&lt;/option&gt;
    &lt;option&gt;Relish&lt;/option&gt;
    &lt;option&gt;Mayonnaise&lt;/option&gt;
    &lt;option&gt;Barbecue Sauce&lt;/option&gt;
    &lt;option&gt;Salad Dressing&lt;/option&gt;
    &lt;option&gt;Tabasco&lt;/option&gt;
    &lt;option&gt;Salsa&lt;/option&gt;
    &lt;option&gt;Mustard&lt;/option&gt;
    &lt;option&gt;Ketchup&lt;/option&gt;
    &lt;option&gt;Relish&lt;/option&gt;
    &lt;option data-divider="true"&gt;divider&lt;/option&gt;
    &lt;option&gt;Mayonnaise&lt;/option&gt;
    &lt;option&gt;Barbecue Sauce&lt;/option&gt;
    &lt;option&gt;Salad Dressing&lt;/option&gt;
    &lt;option&gt;Tabasco&lt;/option&gt;
    &lt;option&gt;Salsa&lt;/option&gt;
    &lt;option&gt;Mustard&lt;/option&gt;
    &lt;option&gt;Ketchup&lt;/option&gt;
    &lt;option&gt;Relish&lt;/option&gt;
    &lt;option&gt;Mayonnaise&lt;/option&gt;
    &lt;option&gt;Barbecue Sauce&lt;/option&gt;
    &lt;option&gt;Salad Dressing&lt;/option&gt;
    &lt;option&gt;Tabasco&lt;/option&gt;
    &lt;option&gt;Salsa&lt;/option&gt;
&lt;/select&gt;
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
                                            <h4>Menu header</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <p>Add a header to the dropdown menu <code>data-header="Select a condiment"</code></p>
                                    <select class="selectpicker" data-header="Select a condiment"  data-size="5">
                                        <option>Mustard</option>
                                        <option>Ketchup</option>
                                        <option>Relish</option>
                                        <option>Mayonnaise</option>
                                        <option>Barbecue Sauce</option>
                                        <option>Salad Dressing</option>
                                        <option>Tabasco</option>
                                        <option>Salsa</option>
                                        <option>Mustard</option>
                                        <option>Ketchup</option>
                                        <option>Relish</option>
                                        <option>Mayonnaise</option>
                                        <option>Barbecue Sauce</option>
                                        <option>Salad Dressing</option>
                                        <option>Tabasco</option>
                                        <option>Salsa</option>
                                        <option>Mustard</option>
                                        <option>Ketchup</option>
                                        <option>Relish</option>
                                        <option>Mayonnaise</option>
                                        <option>Barbecue Sauce</option>
                                        <option>Salad Dressing</option>
                                        <option>Tabasco</option>
                                        <option>Salsa</option>
                                    </select>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;select class="selectpicker" data-header="Select a condiment"  data-size="5"&gt;
    &lt;option&gt;Mustard&lt;/option&gt;
    &lt;option&gt;Ketchup&lt;/option&gt;
    &lt;option&gt;Relish&lt;/option&gt;
    &lt;option&gt;Mayonnaise&lt;/option&gt;
    &lt;option&gt;Barbecue Sauce&lt;/option&gt;
    &lt;option&gt;Salad Dressing&lt;/option&gt;
    &lt;option&gt;Tabasco&lt;/option&gt;
    &lt;option&gt;Salsa&lt;/option&gt;
    &lt;option&gt;Mustard&lt;/option&gt;
    &lt;option&gt;Ketchup&lt;/option&gt;
    &lt;option&gt;Relish&lt;/option&gt;
    &lt;option&gt;Mayonnaise&lt;/option&gt;
    &lt;option&gt;Barbecue Sauce&lt;/option&gt;
    &lt;option&gt;Salad Dressing&lt;/option&gt;
    &lt;option&gt;Tabasco&lt;/option&gt;
    &lt;option&gt;Salsa&lt;/option&gt;
    &lt;option&gt;Mustard&lt;/option&gt;
    &lt;option&gt;Ketchup&lt;/option&gt;
    &lt;option&gt;Relish&lt;/option&gt;
    &lt;option&gt;Mayonnaise&lt;/option&gt;
    &lt;option&gt;Barbecue Sauce&lt;/option&gt;
    &lt;option&gt;Salad Dressing&lt;/option&gt;
    &lt;option&gt;Tabasco&lt;/option&gt;
    &lt;option&gt;Salsa&lt;/option&gt;
&lt;/select&gt;
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
                                            <h4>Dropup menu</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <p>Add <code>dropupAuto</code> to automatically change postion according to window.</p>
                                    <select class="selectpicker dropup">
                                        <option>Mustard</option>
                                        <option>Ketchup</option>
                                        <option>Relish</option>
                                        <option>Mayonnaise</option>
                                    </select>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;select class="selectpicker dropup"&gt;
    &lt;option&gt;Mustard&lt;/option&gt;
    &lt;option&gt;Ketchup&lt;/option&gt;
    &lt;option&gt;Relish&lt;/option&gt;
    &lt;option&gt;Mayonnaise&lt;/option&gt;
&lt;/select&gt;
</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="disabled" class="col-lg-12">
                            <div class="seperator-header">
                                <h4 class="">Disabled</h4>
                            </div>
                        </div>

                        <div class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Disabled select box</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <p>Disable Select box using <code>disabled</code> attribute on <code>select</code> element.</p>
                                    <select class="selectpicker" disabled>
                                        <option>Mustard</option>
                                        <option>Ketchup</option>
                                        <option>Relish</option>
                                    </select>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;select class="selectpicker" disabled&gt;
    &lt;option&gt;Mustard&lt;/option&gt;
    &lt;option&gt;Ketchup&lt;/option&gt;
    &lt;option&gt;Relish&lt;/option&gt;
&lt;/select&gt;
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
                                            <h4>Disabled options</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <p>Disable Select Option using <code>disabled</code> attribute on select <code>option</code> element.</p>
                                    <select class="selectpicker">
                                        <option>Mustard</option>
                                        <option disabled>Ketchup</option>
                                        <option>Relish</option>
                                    </select>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;select class="selectpicker"&gt;
    &lt;option&gt;Mustard&lt;/option&gt;
    &lt;option disabled&gt;Ketchup&lt;/option&gt;
    &lt;option&gt;Relish&lt;/option&gt;
&lt;/select&gt;
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
                                            <h4>Disabled options groups</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <p>Disable Select Group using <code>disabled</code> attribute on select <code>optgroup</code> element</p>
                                    <select class="selectpicker test">
                                        <optgroup label="Picnic" disabled>
                                            <option>Mustard</option>
                                            <option>Ketchup</option>
                                            <option>Relish</option>
                                        </optgroup>
                                        <optgroup label="Camping">
                                            <option>Tent</option>
                                            <option>Flashlight</option>
                                            <option>Toilet Paper</option>
                                        </optgroup>
                                    </select>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;select class="selectpicker test"&gt;
    &lt;optgroup label="Picnic" disabled&gt;
        &lt;option&gt;Mustard&lt;/option&gt;
        &lt;option&gt;Ketchup&lt;/option&gt;
        &lt;option&gt;Relish&lt;/option&gt;
    &lt;/optgroup&gt;
    &lt;optgroup label="Camping"&gt;
        &lt;option&gt;Tent&lt;/option&gt;
        &lt;option&gt;Flashlight&lt;/option&gt;
        &lt;option&gt;Toilet Paper&lt;/option&gt;
    &lt;/optgroup&gt;
&lt;/select&gt;
</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="styling" class="col-lg-12">
                            <div class="seperator-header">
                                <h4 class="">Styling</h4>
                            </div>
                        </div>

                        <div class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Styling</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area text-center">
                                    <p>You can set the button classes via the <code>data-style</code> attribute</p>

                                    <select class="selectpicker mb-4 ml-2" data-style="custom-styling btn btn-outline-primary">
                                        <option>Mustard</option>
                                        <option>Ketchup</option>
                                        <option>Relish</option>
                                        <option>Onions</option>
                                    </select>

                                    <select class="selectpicker mb-4 ml-2" data-style="custom-styling btn btn-outline-info">
                                        <option>Mustard</option>
                                        <option>Ketchup</option>
                                        <option>Relish</option>
                                        <option>Onions</option>
                                    </select>

                                    <select class="selectpicker mb-4 ml-2" data-style="custom-styling btn btn-outline-success">
                                        <option>Mustard</option>
                                        <option>Ketchup</option>
                                        <option>Relish</option>
                                        <option>Onions</option>
                                    </select>

                                    <select class="selectpicker mb-4 ml-2" data-style="custom-styling btn btn-outline-warning">
                                        <option>Mustard</option>
                                        <option>Ketchup</option>
                                        <option>Relish</option>
                                        <option>Onions</option>
                                    </select>

                                    <select class="selectpicker mb-4 ml-2" data-style="custom-styling btn btn-outline-danger">
                                        <option>Mustard</option>
                                        <option>Ketchup</option>
                                        <option>Relish</option>
                                        <option>Onions</option>
                                    </select>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;select class="selectpicker mb-4 ml-2" data-style="custom-styling btn btn-outline-primary"&gt;
    &lt;option&gt;Mustard&lt;/option&gt;
    &lt;option&gt;Ketchup&lt;/option&gt;
    &lt;option&gt;Relish&lt;/option&gt;
    &lt;option&gt;Onions&lt;/option&gt;
&lt;/select&gt;
</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="width" class="col-lg-12">
                            <div class="seperator-header">
                                <h4 class="">Width</h4>
                            </div>
                        </div>

                        <div class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Grid</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <p>Wrap selects in grid columns, or any custom parent element, to easily enforce desired widths.</p>
                                    <div class="bs-docs-example">
                                        <div class="row">
                                            <div class="col-sm-3 col-12">
                                                <div class="form-group">
                                                    <select class="selectpicker form-control">
                                                        <option>Mustard</option>
                                                        <option>Ketchup</option>
                                                        <option>Relish</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-9 col-12">
                                                <div class="form-group">
                                                    <select class="selectpicker form-control">
                                                        <option>Mustard</option>
                                                        <option>Ketchup</option>
                                                        <option>Relish</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4 col-12">
                                                <div class="form-group">
                                                    <select class="selectpicker form-control">
                                                        <option>Mustard</option>
                                                        <option>Ketchup</option>
                                                        <option>Relish</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-8 col-12">
                                                <div class="form-group">
                                                    <select class="selectpicker form-control">
                                                        <option>Mustard</option>
                                                        <option>Ketchup</option>
                                                        <option>Relish</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-5 col-12">
                                                <div class="form-group">
                                                    <select class="selectpicker form-control">
                                                        <option>Mustard</option>
                                                        <option>Ketchup</option>
                                                        <option>Relish</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-7 col-12">
                                                <div class="form-group">
                                                    <select class="selectpicker form-control">
                                                        <option>Mustard</option>
                                                        <option>Ketchup</option>
                                                        <option>Relish</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div class="row"&gt;
    &lt;div class="col-sm-3 col-12"&gt;
        &lt;div class="form-group"&gt;
            &lt;select class="selectpicker form-control"&gt;
                &lt;option&gt;Mustard&lt;/option&gt;
                &lt;option&gt;Ketchup&lt;/option&gt;
                &lt;option&gt;Relish&lt;/option&gt;
            &lt;/select&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="col-sm-9 col-12"&gt;
        &lt;div class="form-group"&gt;
            &lt;select class="selectpicker form-control"&gt;
                &lt;option&gt;Mustard&lt;/option&gt;
                &lt;option&gt;Ketchup&lt;/option&gt;
                &lt;option&gt;Relish&lt;/option&gt;
            &lt;/select&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
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
                                            <h4>Custom Width</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <p>use the <code>data-width</code> attribute to set the width of the select</p>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h6>Data Width = "fit"</h6>
                                        </div>
                                        <div class="col-sm-12">
                                            <select class="selectpicker mb-4" data-width="fit">
                                                <option>Mustard</option>
                                                <option>Ketchup</option>
                                                <option>Relish</option>
                                                <option>Onions</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-12 mt-4">
                                            <h6>Data Width = "200px"</h6>
                                        </div>
                                        <div class="col-sm-12">
                                            <select class="selectpicker mb-4" data-width="200px">
                                                <option>Mustard</option>
                                                <option>Ketchup</option>
                                                <option>Relish</option>
                                                <option>Onions</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-12 mt-4">
                                            <h6>Data Width = "75%"</h6>
                                        </div>
                                        <div class="col-sm-12">
                                            <select class="selectpicker mb-4" data-width="75%">
                                                <option>Mustard</option>
                                                <option>Ketchup</option>
                                                <option>Relish</option>
                                                <option>Onions</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
==================
Data Width = "fit"
==================
&lt;div class="col-sm-12"&gt;
    &lt;select class="selectpicker mb-4" data-width="fit"&gt;
        &lt;option&gt;Mustard&lt;/option&gt;
        &lt;option&gt;Ketchup&lt;/option&gt;
        &lt;option&gt;Relish&lt;/option&gt;
        &lt;option&gt;Onions&lt;/option&gt;
    &lt;/select&gt;
&lt;/div&gt;


==================
Data Width = "200px"
==================

&lt;div class="col-sm-12"&gt;
    &lt;select class="selectpicker mb-4" data-width="200px"&gt;
        &lt;option&gt;Mustard&lt;/option&gt;
        &lt;option&gt;Ketchup&lt;/option&gt;
        &lt;option&gt;Relish&lt;/option&gt;
        &lt;option&gt;Onions&lt;/option&gt;
    &lt;/select&gt;
&lt;/div&gt;

==================
Data Width = "75%"
==================
&lt;div class="col-sm-12"&gt;
    &lt;select class="selectpicker mb-4" data-width="75%"&gt;
        &lt;option&gt;Mustard&lt;/option&gt;
        &lt;option&gt;Ketchup&lt;/option&gt;
        &lt;option&gt;Relish&lt;/option&gt;
        &lt;option&gt;Onions&lt;/option&gt;
    &lt;/select&gt;
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