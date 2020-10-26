@extends('layouts.app')

@section('content')

            <div class="container">
                <div class="container">

                    <div id="navSection" data-spy="affix" class="nav  sidenav">
                        <div class="sidenav-content">
                            <a href="#basic" class="active nav-link">Basic</a>
                            <a href="#methods" class="nav-link">Methods</a>
                        </div>
                    </div>

                    <div class="row layout-top-spacing">

                        <div id="basic" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Static Mask Basic</h4>
                                        </div>                            
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">

                                    <p class="">Input mask are use with <code>input</code> tags.</p>
                                    <div class="mb-5"><code>&lt;input id="elementId" type="text" class="form-control" placeholder=""&gt;</code></div>

                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="form-group">
                                                <label for="static-mask1">99-9999999</label>
                                                <input id="static-mask1" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="form-group">
                                                <label for="static-mask2">aa-9999</label>
                                                <input id="static-mask2" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="code-section-container show-code">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
$('#static-mask1').inputmask("99-9999999");
$('#static-mask2').inputmask({mask: "aa-9999"});
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
                                            <h4>Alternate masks</h4>
                                        </div>                           
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">

                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="form-group">
                                                <label for="alternate-masks1">["99.9", "X"]</label>
                                                <input id="alternate-masks1" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="form-group">
                                                <label for="alternate-masks2">(99.9)|(X)</label>
                                                <input id="alternate-masks2" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>
                                        <div class="code-section text-left">
                                            <pre>
$("#alternate-masks1").inputmask({
  mask: ["99.9", "X"],
  definitions: {
    "X": {
      validator: "[xX]",
      casing: "upper"
    }
  }
});

$("#alternate-masks2").inputmask("(99.9)|(X)", {
  definitions: {
    "X": {
      validator: "[xX]",
      casing: "upper"
    }
  }
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
                                            <h4>Dynamic Syntax</h4>
                                        </div>                            
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="row">
                                        <div class="col-xl-4">
                                            <div class="form-group">
                                                <label for="dynamic-syntax-1">9-a{1,3}9{1,3}</label>
                                                <input id="dynamic-syntax-1" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="form-group">
                                                <label for="dynamic-syntax-2">aa-9{4}</label>
                                                <input id="dynamic-syntax-2" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="form-group">
                                                <label for="dynamic-syntax-3">aa-9{1,4}</label>
                                                <input id="dynamic-syntax-3" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
$('#dynamic-syntax-1').inputmask("9-a{1,3}9{1,3}"); //mask with dynamic syntax
$('#dynamic-syntax-2').inputmask("aa-9{4}");  //static mask with dynamic syntax
$('#dynamic-syntax-3').inputmask("aa-9{1,4}");  //dynamic mask ~ the 9 def can be occur 1 to 4 times

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
                                            <h4>Date</h4>
                                        </div>                            
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="row">
                                        <div class="col-xl-4">
                                            <div class="form-group">
                                                <label for="date">dd/mm/yyyy</label>
                                                <input id="date" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="form-group">
                                                <label for="date2">99-99-9999</label>
                                                <input id="date2" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="form-group">
                                                <label for="date3">99 December, 9999</label>
                                                <input id="date3" type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
// Date 

$("#date").inputmask("99/99/9999");
$("#date2").inputmask("99-99-9999");
$("#date3").inputmask("99 December, 9999");
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
                                            <h4>Email</h4>
                                        </div>                          
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <label for="email">john@mail.com</label>
                                    <input type="text" class="form-control mb-4" id="email">

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>
                                        <div class="code-section text-left">
                                            <pre>
// Email

$("#email").inputmask(
    {
        mask:"*{1,20}[.*{1,20}][.*{1,20}][.*{1,20}]@*{1,20}[.*{2,6}][.*{1,2}]",
        greedy:!1,onBeforePaste:function(m,a){return(m=m.toLowerCase()).replace("mailto:","")},
        definitions:{"*":
            {
                validator:"[0-9A-Za-z!#$%&'*+/=?^_`{|}~-]",
                cardinality:1,
                casing:"lower"
            }
        }
    }
)
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
                                            <h4>IP</h4>
                                        </div>                       
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <label for="ip-add">192.198.1.1</label>
                                    <input type="text" class="form-control mb-4" id="ip-add">

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
// IP Address

$("#ip-add").inputmask({mask:"999.999.999.999"});
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
                                            <h4>Phone</h4>
                                        </div>                          
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <label for="ph-number">(999) 999-9999</label>
                                    <input type="text" class="form-control mb-4" id="ph-number">

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
// Phone Number

$("#ph-number").inputmask({mask:"(999) 999-9999"});
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
                                            <h4>Currency</h4>
                                        </div>                          
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <label for="currency">$999,9999,999.99</label>
                                    <input type="text" class="form-control mb-4" id="currency">

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>
                                        <div class="code-section text-left">
                                            <pre>
// Currency

$("#currency").inputmask({mask:"$999,9999,999.99"});
</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div id="methods" class="col-lg-12">
                            <div class="seperator-header">
                                <h4 class="">Methods</h4>
                            </div>
                        </div>

                        <div class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Repeat</h4>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="form-group">
                                        <label for="repeater">mask 9999999999</label>
                                        <input id="repeater" type="text" class="form-control" placeholder="">
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>
                                        <div class="code-section text-left">
                                            <pre>
// Repeater

$("#repeater").inputmask({ "mask": "2", "repeat": 4});  // ~ mask "9999999999"
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
                                            <h4>setvalue</h4>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="form-group">
                                        <label for="setVal">Value is set as test@mail.com</label>
                                        <input id="setVal" type="text" class="form-control" placeholder="">
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
// Set Default Value

$("#setVal").inputmask(
    {
        mask:"*{1,20}[.*{1,20}][.*{1,20}][.*{1,20}]@*{1,20}[.*{2,6}][.*{1,2}]",
        greedy:!1,onBeforePaste:function(m,a){return(m=m.toLowerCase()).replace("mailto:","")},
        definitions:{"*":
            {
                validator:"[0-9A-Za-z!#$%&'*+/=?^_`{|}~-]",
                cardinality:1,
                casing:"lower"
            }
        }
    }
)
$('#setVal').on('focus', function(event) {
    $(this).inputmask("setvalue", 'test@mail.com');
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
                                            <h4>isComplete</h4>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="form-group">
                                        <input id="isComplete" type="text" class="form-control" placeholder="">
                                        <small id="isCompleteHelp" class="form-text" style="display: none; color: #2196f3;">The mask is already filled</small>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>
                                        <div class="code-section text-left">
                                            <pre>
// isComplete

$("#isComplete").inputmask({mask:"999.999.999.99"})
$("#isComplete").inputmask("setvalue", "117.247.169.64");
$('#isComplete').on('focus keyup', function(event) {
    event.preventDefault();
    if($(this).inputmask("isComplete")){
        $('#isCompleteHelp').css('display', 'block');
    }
});
$('#isComplete').on('keyup', function(event) {
    event.preventDefault();
    if(!$(this).inputmask("isComplete")){
        $('#isCompleteHelp').css('display', 'none');
    }
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
                                            <h4>OnComplete</h4>
                                        </div>                        
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="form-group">
                                        <input id="oncomplete" type="text" class="form-control" placeholder="">
                                        <small id="oncompleteHelp" class="form-text" style="display: none; color: #009688;">You have successfully completed the mask</small>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
// On Complete

$("#oncomplete").inputmask("99/99/9999",{ oncomplete: function(){ $('#oncompleteHelp').css('display', 'block'); } });
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
                                            <h4>On InComplete</h4>
                                        </div>                         
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="form-group">
                                        <input id="onincomplete" type="text" class="form-control" placeholder="">
                                        <small id="onincompleteHelp" class="form-text" style="display: none; color: #e2a03f;">Incomplete Input Field</small>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
// On InComplete
$("#onincomplete").inputmask("99/99/9999",{ onincomplete: function(){ $('#onincompleteHelp').css('display', 'block'); } });

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
                                            <h4>On cleared</h4>
                                        </div>                          
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="form-group">
                                        <input id="oncleared" type="text" class="form-control" placeholder="">
                                        <small id="onclearedHelp" class="form-text" style="display: none; color: #e7515a;">Plese fill out the field</small>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
// On Cleared
$("#oncleared").inputmask("99/99/9999",{ oncleared: function(){ $('#onclearedHelp').css('display', 'block'); } });

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