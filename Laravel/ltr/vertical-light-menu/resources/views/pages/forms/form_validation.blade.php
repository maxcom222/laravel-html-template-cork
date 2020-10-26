@extends('layouts.app')

@section('content')

            <div class="container">
                <div class="container">

                    <div id="navSection" data-spy="affix" class="nav  sidenav">
                        <div class="sidenav-content">
                            <a href="#basic" class="active nav-link">Basic</a>
                            <a href="#email" class="nav-link">Email</a>
                            <a href="#select" class="nav-link">Select</a>
                            <a href="#custom_styles" class="nav-link">Custom Styles</a>
                            <a href="#browser_default" class="nav-link">Browser Default</a>
                            <a href="#tooltips" class="nav-link">Tooltips</a>
                        </div>
                    </div>
                    
                    <div class="row layout-top-spacing">

                        <div id="basic" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Basic</h4>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <form class="simple-example" action="javascript:void(0);" novalidate>
                                        <div class="form-row">
                                            <div class="col-md-12 mb-4">
                                                <label for="fullName">Full Name</label>
                                                <input type="text" class="form-control" id="fullName" placeholder="" value="" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                                <div class="invalid-feedback">
                                                    Please fill the name
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary submit-fn mt-2" type="submit">Submit form</button>
                                    </form>

                                    <div class="code-section-container show-code">
                                                
                                        <button class="btn toggle-code-snippet"><span>HTML</span></button>
                                        <div class="code-section text-left">
                                            <pre>
==========
   HTML
==========

&lt;form class="simple-example" action="javascript:void(0);" novalidate&gt;
    &lt;div class="form-row"&gt;
        &lt;div class="col-md-12 mb-4"&gt;
            &lt;label for="fullName"&gt;Full Name&lt;/label&gt;
            &lt;input type="text" class="form-control" id="fullName" placeholder="" value="" required&gt;
            &lt;div class="valid-feedback"&gt;
                Looks good!
            &lt;/div&gt;
            &lt;div class="invalid-feedback"&gt;
                Please fill the name
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;button class="btn btn-primary submit-fn mt-2" type="submit"&gt;Submit form&lt;/button&gt;
&lt;/form&gt;

</pre>
                                        </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>JS</span></button>

                                        <div class="code-section text-left">
                                            <pre>
===============
   Javascript
===============

window.addEventListener('load', function() {
// Fetch all the forms we want to apply custom Bootstrap validation styles to
var forms = document.getElementsByClassName('simple-example');
var invalid = $('.simple-example .invalid-feedback');

// Loop over them and prevent submission
var validation = Array.prototype.filter.call(forms, function(form) {
  form.addEventListener('submit', function(event) {
    if (form.checkValidity() === false) {
      event.preventDefault();
      event.stopPropagation();
        invalid.css('display', 'block');
    } else {

        invalid.css('display', 'none');

        form.classList.add('was-validated');
    }
  }, false);
});

}, false);

</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="email" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Email</h4>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <form class="email" novalidate action="javascript:void(0);">
                                        <div class="form-row">
                                            <div class="col-md-12 mb-4">
                                                <label for="e_mail">Email</label>
                                                <input type="email" class="form-control" id="e_mail" placeholder="" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                                <div class="invalid-feedback">
                                                    Please fill the Email
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary mb-4 mt-2" type="submit">Submit form</button>
                                    </form>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>HTML</span></button>

                                        <div class="code-section text-left">
                                            <pre>
===============
     HTML
===============

&lt;form class="email" novalidate action="javascript:void(0);"&gt;
    &lt;div class="form-row"&gt;
        &lt;div class="col-md-12 mb-4"&gt;
            &lt;label for="e_mail"&gt;Email&lt;/label&gt;
            &lt;input type="email" class="form-control" id="e_mail" placeholder="" required&gt;
            &lt;div class="valid-feedback"&gt;
                Looks good!
            &lt;/div&gt;
            &lt;div class="invalid-feedback"&gt;
                Please fill the Email
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;button class="btn btn-primary mb-4 mt-2" type="submit"&gt;Submit form&lt;/button&gt;
&lt;/form&gt;
</pre>
                                        </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>JS</span></button>

                                        <div class="code-section text-left">
                                            <pre>
===============
   Javascript
===============

window.addEventListener('load', function() {
// Fetch all the forms we want to apply custom Bootstrap validation styles to
var forms = document.getElementsByClassName('email');
var invalid = $('.email .invalid-feedback');

// Loop over them and prevent submission
var validation = Array.prototype.filter.call(forms, function(form) {
  form.addEventListener('submit', function(event) {
    if (form.checkValidity() === false) {
      event.preventDefault();
      event.stopPropagation();
        invalid.css('display', 'block');
    } else {
        invalid.css('display', 'none');
        form.classList.add('was-validated');
    }
  }, false);
});
}, false);
</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="select" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Select</h4>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <form class="select mt-4" novalidate action="javascript:void(0);">
                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <div id="select_menu" class="form-group mb-4">
                                                    <select class="custom-select" required>
                                                      <option value="">Open this select menu</option>
                                                      <option value="1">One</option>
                                                      <option value="2">Two</option>
                                                      <option value="3">Three</option>
                                                    </select>
                                                    <div class="valid-feedback">Example valid custom select feedback</div>
                                                    <div class="invalid-feedback">
                                                        Please Select the field
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary mt-2" type="submit">Submit form</button>
                                    </form>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>HTML</span></button>

                                        <div class="code-section text-left">
                                            <pre>
===============
    HTML
===============

&lt;form class="select mt-4" novalidate action="javascript:void(0);"&gt;
    &lt;div class="form-row"&gt;
        &lt;div class="col-md-12"&gt;
            &lt;div id="select_menu" class="form-group mb-4"&gt;
                &lt;select class="custom-select" required&gt;
                  &lt;option value=""&gt;Open this select menu&lt;/option&gt;
                  &lt;option value="1"&gt;One&lt;/option&gt;
                  &lt;option value="2"&gt;Two&lt;/option&gt;
                  &lt;option value="3"&gt;Three&lt;/option&gt;
                &lt;/select&gt;
                &lt;div class="valid-feedback"&gt;Example valid custom select feedback&lt;/div&gt;
                &lt;div class="invalid-feedback"&gt;
                    Please Select the field
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;button class="btn btn-primary mt-2" type="submit"&gt;Submit form&lt;/button&gt;
&lt;/form&gt;

</pre>
                                        </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>JS</span></button>

                                        <div class="code-section text-left">
                                            <pre>
===============
   Javascript
===============

window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('select');
    var invalid = $('.select .invalid-feedback');

    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
            invalid.css('display', 'block');
        } else {
            invalid.css('display', 'none');
            form.classList.add('was-validated');
        }
      }, false);
    });
  }, false);

</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div id="custom_styles" class="col-lg-12 layout-spacing col-md-12">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Custom styles</h4>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">                                
                                    <form class="needs-validation" novalidate action="javascript:void(0);">
                                        <div class="form-row">
                                            <div class="col-md-4 mb-4">
                                                <label for="validationCustom01">First name</label>
                                                <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="Shaun" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-4">
                                                <label for="validationCustom02">Last name</label>
                                                <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="Park" required>
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-4">
                                                <label for="validationCustomUsername">Username</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                    </div>
                                                    <input type="text" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>
                                                    <div class="invalid-feedback">
                                                        Please choose a username.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6 mb-4">
                                                <label for="validationCustom03">City</label>
                                                <input type="text" class="form-control" id="validationCustom03" placeholder="City" required>
                                                <div class="invalid-feedback">
                                                    Please provide a valid city.
                                                </div>
                                            </div>
                                            <div class="col-md-3 mb-4">
                                                <label for="validationCustom04">State</label>
                                                <input type="text" class="form-control" id="validationCustom04" placeholder="State" required>
                                                <div class="invalid-feedback">
                                                    Please provide a valid state.
                                                </div>
                                            </div>
                                            <div class="col-md-3 mb-4">
                                                <label for="validationCustom05">Zip</label>
                                                <input type="text" class="form-control" id="validationCustom05" placeholder="Zip" required>
                                                <div class="invalid-feedback">
                                                    Please provide a valid zip.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-4">
                                            <div class="form-check pl-0">
                                                <div class="custom-control custom-checkbox checkbox-success">
                                                    <input type="checkbox" class="custom-control-input" id="invalidCheck" required>
                                                    <label class="custom-control-label" for="invalidCheck">Agree to terms and conditions</label>
                                                    <div class="invalid-feedback">
                                                        You must agree before submitting.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary mt-3" type="submit">Submit form</button>
                                    </form>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>HTML</span></button>
                                        <div class="code-section text-left">
                                            <pre>
===============
     HTML
===============

&lt;form class="needs-validation" novalidate action="javascript:void(0);"&gt;
    &lt;div class="form-row"&gt;
        &lt;div class="col-md-4 mb-4"&gt;
            &lt;label for="validationCustom01"&gt;First name&lt;/label&gt;
            &lt;input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="Shaun" required&gt;
            &lt;div class="valid-feedback"&gt;
                Looks good!
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="col-md-4 mb-4"&gt;
            &lt;label for="validationCustom02"&gt;Last name&lt;/label&gt;
            &lt;input type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="Park" required&gt;
            &lt;div class="valid-feedback"&gt;
                Looks good!
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="col-md-4 mb-4"&gt;
            &lt;label for="validationCustomUsername"&gt;Username&lt;/label&gt;
            &lt;div class="input-group"&gt;
                &lt;div class="input-group-prepend"&gt;
                    &lt;span class="input-group-text" id="inputGroupPrepend"&gt;@&lt;/span&gt;
                &lt;/div&gt;
                &lt;input type="text" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required&gt;
                &lt;div class="invalid-feedback"&gt;
                    Please choose a username.
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="form-row"&gt;
        &lt;div class="col-md-6 mb-4"&gt;
            &lt;label for="validationCustom03"&gt;City&lt;/label&gt;
            &lt;input type="text" class="form-control" id="validationCustom03" placeholder="City" required&gt;
            &lt;div class="invalid-feedback"&gt;
                Please provide a valid city.
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="col-md-3 mb-4"&gt;
            &lt;label for="validationCustom04"&gt;State&lt;/label&gt;
            &lt;input type="text" class="form-control" id="validationCustom04" placeholder="State" required&gt;
            &lt;div class="invalid-feedback"&gt;
                Please provide a valid state.
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="col-md-3 mb-4"&gt;
            &lt;label for="validationCustom05"&gt;Zip&lt;/label&gt;
            &lt;input type="text" class="form-control" id="validationCustom05" placeholder="Zip" required&gt;
            &lt;div class="invalid-feedback"&gt;
                Please provide a valid zip.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="form-group mb-4"&gt;
        &lt;div class="form-check pl-0"&gt;
            &lt;div class="custom-control custom-checkbox checkbox-success"&gt;
                &lt;input type="checkbox" class="custom-control-input" id="invalidCheck" required&gt;
                &lt;label class="custom-control-label" for="invalidCheck"&gt;Agree to terms and conditions&lt;/label&gt;
                &lt;div class="invalid-feedback"&gt;
                    You must agree before submitting.
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;button class="btn btn-primary mt-3" type="submit"&gt;Submit form&lt;/button&gt;
&lt;/form&gt;
</pre>
                                        </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>JS</span></button>
                                        <div class="code-section text-left">
                                            <pre>
===============
   Javascript
===============

window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
}, false);
</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div id="browser_default" class="col-lg-12 layout-spacing col-md-12">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Browser defaults</h4>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <form>
                                        <div class="form-row">
                                            <div class="col-md-4 mb-4">
                                                <label for="validationDefault01">First name</label>
                                                <input type="text" class="form-control" id="validationDefault01" placeholder="First name" value="Shaun" required>
                                            </div>
                                            <div class="col-md-4 mb-4">
                                                <label for="validationDefault02">Last name</label>
                                                <input type="text" class="form-control" id="validationDefault02" placeholder="Last name" value="Park" required>
                                            </div>
                                            <div class="col-md-4 mb-4">
                                                <label for="validationDefaultUsername">Username</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="inputGroupPrepend2">@</span>
                                                    </div>
                                                    <input type="text" class="form-control" id="validationDefaultUsername" placeholder="Username" aria-describedby="inputGroupPrepend2" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6 mb-4">
                                                <label for="validationDefault03">City</label>
                                                <input type="text" class="form-control" id="validationDefault03" placeholder="City" required>
                                            </div>
                                            <div class="col-md-3 mb-4">
                                                <label for="validationDefault04">State</label>
                                                <input type="text" class="form-control" id="validationDefault04" placeholder="State" required>
                                            </div>
                                            <div class="col-md-3 mb-4">
                                                <label for="validationDefault05">Zip</label>
                                                <input type="text" class="form-control" id="validationDefault05" placeholder="Zip" required>
                                            </div>
                                        </div>
                                        <div class="form-group mb-4">
                                            <div class="custom-control custom-checkbox checkbox-info">
                                                <input type="checkbox" class="custom-control-input" id="invalidCheck2" required>
                                                <label class="custom-control-label" for="invalidCheck2">Agree to terms and conditions</label>
                                                <div class="invalid-feedback">
                                                    Agree to terms and conditions
                                                </div>
                                            </div>
                                        </div>
                                      <button class="btn btn-primary mt-3" type="submit">Submit form</button>
                                    </form>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
===============
     HTML
===============

&lt;form&gt;
    &lt;div class="form-row"&gt;
        &lt;div class="col-md-4 mb-4"&gt;
            &lt;label for="validationDefault01"&gt;First name&lt;/label&gt;
            &lt;input type="text" class="form-control" id="validationDefault01" placeholder="First name" value="Shaun" required&gt;
        &lt;/div&gt;
        &lt;div class="col-md-4 mb-4"&gt;
            &lt;label for="validationDefault02"&gt;Last name&lt;/label&gt;
            &lt;input type="text" class="form-control" id="validationDefault02" placeholder="Last name" value="Park" required&gt;
        &lt;/div&gt;
        &lt;div class="col-md-4 mb-4"&gt;
            &lt;label for="validationDefaultUsername"&gt;Username&lt;/label&gt;
            &lt;div class="input-group"&gt;
                &lt;div class="input-group-prepend"&gt;
                    &lt;span class="input-group-text" id="inputGroupPrepend2"&gt;@&lt;/span&gt;
                &lt;/div&gt;
                &lt;input type="text" class="form-control" id="validationDefaultUsername" placeholder="Username" aria-describedby="inputGroupPrepend2" required&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="form-row"&gt;
        &lt;div class="col-md-6 mb-4"&gt;
            &lt;label for="validationDefault03"&gt;City&lt;/label&gt;
            &lt;input type="text" class="form-control" id="validationDefault03" placeholder="City" required&gt;
        &lt;/div&gt;
        &lt;div class="col-md-3 mb-4"&gt;
            &lt;label for="validationDefault04"&gt;State&lt;/label&gt;
            &lt;input type="text" class="form-control" id="validationDefault04" placeholder="State" required&gt;
        &lt;/div&gt;
        &lt;div class="col-md-3 mb-4"&gt;
            &lt;label for="validationDefault05"&gt;Zip&lt;/label&gt;
            &lt;input type="text" class="form-control" id="validationDefault05" placeholder="Zip" required&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="form-group mb-4"&gt;
        &lt;div class="custom-control custom-checkbox checkbox-info"&gt;
            &lt;input type="checkbox" class="custom-control-input" id="invalidCheck2" required&gt;
            &lt;label class="custom-control-label" for="invalidCheck2"&gt;Agree to terms and conditions&lt;/label&gt;
            &lt;div class="invalid-feedback"&gt;
                Agree to terms and conditions
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
  &lt;button class="btn btn-primary mt-3" type="submit"&gt;Submit form&lt;/button&gt;
&lt;/form&gt;
</pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div id="tooltips" class="col-lg-12 layout-spacing col-md-12">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Tooltips</h4>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <form class="needs-validation" novalidate action="javascript:void(0);">
                                        <div class="form-row">
                                            <div class="col-md-4 mb-5">
                                                <label for="validationTooltip01">First name</label>
                                                <input type="text" class="form-control" id="validationTooltip01" placeholder="First name" value="Shaun" required>
                                                <div class="valid-tooltip">
                                                    Looks good!
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-5">
                                                <label for="validationTooltip02">Last name</label>
                                                <input type="text" class="form-control" id="validationTooltip02" placeholder="Last name" value="Park" required>
                                                <div class="valid-tooltip">
                                                    Looks good!
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-5">
                                                <label for="validationTooltipUsername">Username</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                                                    </div>
                                                    <input type="text" class="form-control" id="validationTooltipUsername" placeholder="Username" aria-describedby="validationTooltipUsernamePrepend" required>
                                                    <div class="invalid-tooltip">
                                                        Please choose a unique and valid username.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6 mb-5">
                                                <label for="validationTooltip03">City</label>
                                                <input type="text" class="form-control" id="validationTooltip03" placeholder="City" required>
                                                <div class="invalid-tooltip">
                                                    Please provide a valid city.
                                                </div>
                                            </div>
                                            <div class="col-md-3 mb-5">
                                                <label for="validationTooltip04">State</label>
                                                <input type="text" class="form-control" id="validationTooltip04" placeholder="State" required>
                                                <div class="invalid-tooltip">
                                                    Please provide a valid state.
                                                </div>
                                            </div>
                                            <div class="col-md-3 mb-5">
                                                <label for="validationTooltip05">Zip</label>
                                                <input type="text" class="form-control" id="validationTooltip05" placeholder="Zip" required>
                                                <div class="invalid-tooltip">
                                                    Please provide a valid zip.
                                                </div>
                                            </div>
                                        </div>
                                      <button class="btn btn-primary mt-2" type="submit">Submit form</button>
                                    </form>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>HTML</span></button>
                                        <div class="code-section text-left">
                                            <pre>
===============
     HTML
===============

&lt;form class="needs-validation" novalidate action="javascript:void(0);"&gt;
    &lt;div class="form-row"&gt;
        &lt;div class="col-md-4 mb-5"&gt;
            &lt;label for="validationTooltip01"&gt;First name&lt;/label&gt;
            &lt;input type="text" class="form-control" id="validationTooltip01" placeholder="First name" value="Shaun" required&gt;
            &lt;div class="valid-tooltip"&gt;
                Looks good!
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="col-md-4 mb-5"&gt;
            &lt;label for="validationTooltip02"&gt;Last name&lt;/label&gt;
            &lt;input type="text" class="form-control" id="validationTooltip02" placeholder="Last name" value="Park" required&gt;
            &lt;div class="valid-tooltip"&gt;
                Looks good!
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="col-md-4 mb-5"&gt;
            &lt;label for="validationTooltipUsername"&gt;Username&lt;/label&gt;
            &lt;div class="input-group"&gt;
                &lt;div class="input-group-prepend"&gt;
                    &lt;span class="input-group-text" id="validationTooltipUsernamePrepend"&gt;@&lt;/span&gt;
                &lt;/div&gt;
                &lt;input type="text" class="form-control" id="validationTooltipUsername" placeholder="Username" aria-describedby="validationTooltipUsernamePrepend" required&gt;
                &lt;div class="invalid-tooltip"&gt;
                    Please choose a unique and valid username.
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="form-row"&gt;
        &lt;div class="col-md-6 mb-5"&gt;
            &lt;label for="validationTooltip03"&gt;City&lt;/label&gt;
            &lt;input type="text" class="form-control" id="validationTooltip03" placeholder="City" required&gt;
            &lt;div class="invalid-tooltip"&gt;
                Please provide a valid city.
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="col-md-3 mb-5"&gt;
            &lt;label for="validationTooltip04"&gt;State&lt;/label&gt;
            &lt;input type="text" class="form-control" id="validationTooltip04" placeholder="State" required&gt;
            &lt;div class="invalid-tooltip"&gt;
                Please provide a valid state.
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="col-md-3 mb-5"&gt;
            &lt;label for="validationTooltip05"&gt;Zip&lt;/label&gt;
            &lt;input type="text" class="form-control" id="validationTooltip05" placeholder="Zip" required&gt;
            &lt;div class="invalid-tooltip"&gt;
                Please provide a valid zip.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
  &lt;button class="btn btn-primary mt-2" type="submit"&gt;Submit form&lt;/button&gt;
&lt;/form&gt;
</pre>
                                        </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>JS</span></button>

                                        <div class="code-section text-left">
                                            <pre>
===============
   Javascript
===============

window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
}, false);
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