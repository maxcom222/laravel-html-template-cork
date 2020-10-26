@extends('layouts.app')

@section('content')

            <div class="container">
                <div class="container">

                    <div id="navSection" data-spy="affix" class="nav  sidenav">
                        <div class="sidenav-content">
                            <a href="#date_time_picker" class="active nav-link">Date Time Picker</a>
                            <a href="#js_range_slider" class="nav-link">JS Range Slider</a>
                            <a href="#noUi_sliders" class="nav-link">noUi Sliders</a>
                        </div>
                    </div>
                    
                    <div class="row">

                        <div id="date_time_picker" class="col-lg-12 layout-top-spacing">
                            <div class="seperator-header">
                                <h4 class="">Date and Time Picker</h4>
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
                                <div class="widget-content widget-content-area">
                                    <p>Date time picker is powered by <span class="text-danger">flatpickr.js</span> that gives the ability to user to select date or time.</p>
                                    <div class="form-group mb-0">
                                        <input id="basicFlatpickr" value="2019-09-04" class="form-control flatpickr flatpickr-input active" type="text" placeholder="Select Date..">
                                    </div>

                                    <div class="code-section-container show-code">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
var f1 = flatpickr(document.getElementById('basicFlatpickr'));
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
                                            <h4>Date Time</h4> 
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <p>Use <code>enableTime: true</code> and <code>dateFormat: "Y-m-d H:i"</code> option to enable time support</p>
                                    <div class="form-group mb-0">
                                        <input id="dateTimeFlatpickr" value="2019-09-19 12:00" class="form-control flatpickr flatpickr-input active" type="text" placeholder="Select Date..">
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
var f2 = flatpickr(document.getElementById('dateTimeFlatpickr'), {
    enableTime: true,
    dateFormat: "Y-m-d H:i",
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
                                            <h4>Range Calendar</h4> 
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <p>Use <code>mode: range</code> select the date with range.</p>

                                    <div class="form-group mb-0">
                                        <input id="rangeCalendarFlatpickr" class="form-control flatpickr flatpickr-input active" type="text" placeholder="Select Date..">
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
var f3 = flatpickr(document.getElementById('rangeCalendarFlatpickr'), {
    mode: "range"
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
                                            <h4>Preloading Time</h4> 
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <p>Use <code>noCalendar: true</code> with Date Time options to disable calendar and show time picker only.</p>
                                    <div class="form-group mb-0">
                                        <input id="timeFlatpickr" class="form-control flatpickr flatpickr-input active" type="text" placeholder="Select Date..">
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
var f4 = flatpickr(document.getElementById('timeFlatpickr'), {
    enableTime: true,
    noCalendar: true,
    dateFormat: "H:i",
    defaultDate: "13:45"
});
</pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div id="js_range_slider" class="col-lg-12">
                            <div class="seperator-header">
                                <h4 class="">Javascript Range Slider</h4>
                            </div>
                        </div>

                        <div class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                 
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Postion : Top-Left</h4> 
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="custom-progress progress-up" style="width: 100%">
                                        <div class="range-count"><span class="range-count-number" data-rangecountnumber="0">0</span> <span class="range-count-unit">%</span></div>
                                        <input type="range" min="0" max="100" class="custom-range progress-range-counter" value="0">
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div class="custom-progress progress-up" style="width: 100%"&gt;
    &lt;div class="range-count"&gt;&lt;span class="range-count-number" data-rangecountnumber="0"&gt;0&lt;/span&gt; &lt;span class="range-count-unit"&gt;%&lt;/span&gt;&lt;/div&gt;
    &lt;input type="range" min="0" max="100" class="custom-range progress-range-counter" value="0"&gt;
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
                                            <h4> Postion : Top-Right</h4> 
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="custom-progress top-right progress-up" style="width: 100%">
                                        <div class="range-count"><span class="range-count-number" data-rangecountnumber="0">0</span> <span class="range-count-unit">%</span></div>
                                        <input type="range" min="0" max="100" class="custom-range progress-range-counter" value="0">
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div class="custom-progress top-right progress-up" style="width: 100%"&gt;
    &lt;div class="range-count"&gt;&lt;span class="range-count-number" data-rangecountnumber="0"&gt;0&lt;/span&gt; &lt;span class="range-count-unit"&gt;%&lt;/span&gt;&lt;/div&gt;
    &lt;input type="range" min="0" max="100" class="custom-range progress-range-counter" value="0"&gt;
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
                                            <h4>Postion : Bottom-Left</h4> 
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="custom-progress progress-down" style="width: 100%">
                                        <input type="range" min="0" max="100" class="custom-range progress-range-counter" value="0">

                                        <div class="range-count"><span class="range-count-number" data-rangecountnumber="0">0</span> <span class="range-count-unit">%</span></div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div class="custom-progress progress-down" style="width: 100%"&gt;
    &lt;input type="range" min="0" max="100" class="custom-range progress-range-counter" value="0"&gt;
    &lt;div class="range-count"&gt;&lt;span class="range-count-number" data-rangecountnumber="0"&gt;0&lt;/span&gt; &lt;span class="range-count-unit"&gt;%&lt;/span&gt;&lt;/div&gt;
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
                                            <h4> Postion : Bottom-Right</h4> 
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="custom-progress bottom-right progress-down" style="width: 100%">
                                        <input type="range" min="0" max="100" class="custom-range progress-range-counter" value="0">

                                        <div class="range-count"><span class="range-count-number" data-rangecountnumber="0">0</span> <span class="range-count-unit">%</span></div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div class="custom-progress bottom-right progress-down" style="width: 100%"&gt;
    &lt;input type="range" min="0" max="100" class="custom-range progress-range-counter" value="0"&gt;
    &lt;div class="range-count"&gt;&lt;span class="range-count-number" data-rangecountnumber="0"&gt;0&lt;/span&gt; &lt;span class="range-count-unit"&gt;%&lt;/span&gt;&lt;/div&gt;
&lt;/div&gt;
</pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        
                        <div id="noUi_sliders" class="col-lg-12">
                            <div class="seperator-header">
                                <h4 class="">noUI Slider</h4>
                            </div>
                        </div>

                        <div class="col-lg-12 layout-spacing">
                            <div class="row">
                                <div class="col-lg-12 mb-4">
                                    <div class="statbox widget box box-shadow">
                                        <div class="widget-header">
                                            <div class="row">
                                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                    <h4 class="mb-4">Using HTML5 input elements</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-content widget-content-area align-center">
                                            <div class="container">
                                                <div id="html5"></div>
                                                <br/>
                                                <div class="row mt-4 mb-4">
                                                    <div class="col-lg-6 mb-3">
                                                        <select id="input-select" class="form-control"></select>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <input type="number" class="form-control" min="-20" max="40" step="1" id="input-number">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="code-section-container">
                                                
                                                <button class="btn toggle-code-snippet"><span>HTML</span></button>


                                                <div class="code-section text-left">
                                                    <pre>
=============
    HTML
=============

&lt;div class="container"&gt;
    &lt;div id="html5"&gt;&lt;/div&gt;
    &lt;br/&gt;
    &lt;div class="row mt-4 mb-4"&gt;
        &lt;div class="col-lg-6 mb-3"&gt;
            &lt;select id="input-select" class="form-control"&gt;&lt;/select&gt;
        &lt;/div&gt;
        &lt;div class="col-lg-6"&gt;
            &lt;input type="number" class="form-control" min="-20" max="40" step="1" id="input-number"&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</pre>
                                                </div>
                                            </div>


                                            <div class="code-section-container">
                                                
                                                <button class="btn toggle-code-snippet"><span>JS</span></button>


                                                <div class="code-section text-left">
                                                    <pre>
=============
   Javascript
=============
    
var html5Slider = document.getElementById('html5');

noUiSlider.create(html5Slider, {
    start: [ 10, 30 ],
    connect: true,
    tooltips: true,
    range: {
        'min': -20,
        'max': 40
    }
});
</pre>
                                                </div>
                                            </div>

                                        </div>
                                    </div>  
                                </div>
                                
                                <div class="col-lg-12">
                                    <div class="statbox widget box box-shadow">
                                        <div class="widget-header">
                                            <div class="row">
                                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                    <h4 class="mb-4">Non linear slider</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-content widget-content-area align-center">
                                            <div class="container">
                                                <div id="nonlinear"></div>
                                                <br/>
                                                <div class="row mt-4 mb-4">
                                                     <div class="col-lg-6">
                                                         <span class="example-val" id="lower-value"></span>
                                                     </div>
                                                     <div class="col-lg-6 text-right">
                                                         <span class="example-val" id="upper-value"></span>
                                                     </div>
                                                </div>
                                            </div>

                                            <div class="code-section-container">
                                                
                                                <button class="btn toggle-code-snippet"><span>HTML</span></button>
                                                <div class="code-section text-left">
                                                    <pre>
=============
    HTML
=============

&lt;div class="container"&gt;
    &lt;div id="nonlinear"&gt;&lt;/div&gt;
    &lt;br/&gt;
    &lt;div class="row mt-4 mb-4"&gt;
         &lt;div class="col-lg-6"&gt;
             &lt;span class="example-val" id="lower-value"&gt;&lt;/span&gt;
         &lt;/div&gt;
         &lt;div class="col-lg-6 text-right"&gt;
             &lt;span class="example-val" id="upper-value"&gt;&lt;/span&gt;
         &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</pre>
                                                </div>
                                            </div>

                                            <div class="code-section-container">
                                                    
                                                <button class="btn toggle-code-snippet"><span>JS</span></button>

                                                <div class="code-section text-left">
                                                    <pre>
=============
   Javascript
=============
    
/*--------Non linear slider----------*/

var nonLinearSlider = document.getElementById('nonlinear');

noUiSlider.create(nonLinearSlider, {
    connect: true,
    behaviour: 'tap',
    tooltips: true,
    start: [ 500, 4000 ],
    range: {
        // Starting at 500, step the value by 500,
        // until 4000 is reached. From there, step by 1000.
        'min': [ 0 ],
        '10%': [ 500, 500 ],
        '50%': [ 4000, 1000 ],
        'max': [ 10000 ]
    }
});

var nodes = [
    document.getElementById('lower-value'), // 0
    document.getElementById('upper-value')  // 1
];

// Display the slider value and how far the handle moved
// from the left edge of the slider.
nonLinearSlider.noUiSlider.on('update', function ( values, handle, unencoded, isTap, positions ) {
    nodes[handle].innerHTML = values[handle] + ' &lt;span class="precentage-val"&gt;' + positions[handle].toFixed(2) + '% &lt;/span&gt;';
});
</pre>
                                                </div>
                                            </div>

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
                                            <h4 class="mb-4">Locking sliders together</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area align-center">
                                    <div class="container">
                                        <div class="row mb-4">
                                            <div class="col-lg-12 mb-5">
                                                <div id="slider1"></div>
                                                <span class="example-val mt-4 d-inline-block" id="slider1-span"></span>
                                            </div>
                                        </div>
                                        <br/>
                                        <div class="row mb-0">
                                            <div class="col-lg-12 mb-5">
                                                <div id="slider2"></div>
                                                <span class="example-val mt-4 d-inline-block" id="slider2-span"></span>
                                            </div>
                                        </div>
                                        <div class="row">                                              
                                            <div class="col-lg-12">
                                                <button id="lockbutton" class="btn btn-primary mb-4" style="float: right; margin: 20px 0 0;">lock</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>HTML</span></button>


                                        <div class="code-section text-left">
                                            <pre>
=============
    HTML
=============

&lt;div class="container"&gt;
    &lt;div class="row mb-4"&gt;
        &lt;div class="col-lg-12 mb-5"&gt;
            &lt;div id="slider1"&gt;&lt;/div&gt;
            &lt;span class="example-val mt-4 d-inline-block" id="slider1-span"&gt;&lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;br/&gt;
    &lt;div class="row mb-0"&gt;
        &lt;div class="col-lg-12 mb-5"&gt;
            &lt;div id="slider2"&gt;&lt;/div&gt;
            &lt;span class="example-val mt-4 d-inline-block" id="slider2-span"&gt;&lt;/span&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="row"&gt;                                              
        &lt;div class="col-lg-12"&gt;
            &lt;button id="lockbutton" class="btn btn-primary mb-4" style="float: right; margin: 20px 0 0;"&gt;lock&lt;/button&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</pre>
                                        </div>
                                    </div>


                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>JS</span></button>

                                        <div class="code-section text-left">
                                            <pre>

=============
   Javascript
=============
    
/*-----Locking sliders together-----*/

// setting up button clicks

// Store the locked state and slider values.

var lockedState = false,
    lockedSlider = false,
    lockedValues = [60, 80],
    slider1 = document.getElementById('slider1'),
    slider2 = document.getElementById('slider2'),
    lockButton = document.getElementById('lockbutton'),
    slider1Value = document.getElementById('slider1-span'),
    slider2Value = document.getElementById('slider2-span');

// When the button is clicked, the locked
// state is inverted.

lockButton.addEventListener('click', function(){
    lockedState = !lockedState;
    this.textContent = lockedState ? 'unlock' : 'lock';
});


// cross updating

function crossUpdate ( value, slider ) {

    // If the sliders aren't interlocked, don't
    // cross-update.
    if ( !lockedState ) return;

    // Select whether to increase or decrease
    // the other slider value.
    var a = slider1 === slider ? 0 : 1, b = a ? 0 : 1;

    // Offset the slider value.
    value -= lockedValues[b] - lockedValues[a];

    // Set the value
    slider.noUiSlider.set(value);
}

// initializing silders

noUiSlider.create(slider1, {
    start: 60,
    // Disable animation on value-setting,
    // so the sliders respond immediately.
    animate: false,
    tooltips: true,
    range: {
        min: 50,
        max: 100
    }
});

noUiSlider.create(slider2, {
    start: 80,
    animate: false,
    tooltips: true,
    range: {
        min: 50,
        max: 100
    }
});

slider1.noUiSlider.on('update', function( values, handle ){
    slider1Value.innerHTML = values[handle];
});

slider2.noUiSlider.on('update', function( values, handle ){
    slider2Value.innerHTML = values[handle];
});

// linking sliders together

function setLockedValues ( ) {
    lockedValues = [
        Number(slider1.noUiSlider.get()),
        Number(slider2.noUiSlider.get())
    ];
}

slider1.noUiSlider.on('change', setLockedValues);
slider2.noUiSlider.on('change', setLockedValues);

// The value will be send to the other slider,
// using a custom function as the serialization
// method. The function uses the global 'lockedState'
// variable to decide whether the other slider is updated.

slider1.noUiSlider.on('slide', function( values, handle ){
    crossUpdate(values[handle], slider2);
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