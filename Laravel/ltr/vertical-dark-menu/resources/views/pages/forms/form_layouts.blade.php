@extends('layouts.app')

@section('content')

            <div class="container">
                <div class="container">

                    <div id="navSection" data-spy="affix" class="nav  sidenav">
                        <div class="sidenav-content">
                            <a href="#flStackForm" class="active nav-link">Stack Forms</a>
                            <a href="#flHorizontalForm" class="nav-link">Horizontal form</a>
                            <a href="#flRegistrationForm" class="nav-link">Registration Forms</a>
                            <a href="#flLoginForm" class="nav-link">Login Form</a>
                            <a href="#flFormsGrid" class="nav-link">Forms Grid</a>
                            <a href="#flInlineForm" class="nav-link">Inline forms</a>
                            <a href="#flAutoSizing" class="nav-link">Auto-sizing</a>
                            <a href="#flActionButtons" class="nav-link">Actions Buttons</a>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div id="flStackForm" class="col-lg-12 layout-spacing layout-top-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Stack Forms</h4>
                                        </div>                                                                        
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <form>
                                        <div class="form-group mb-3">
                                            <input type="email" class="form-control" id="sEmail" aria-describedby="emailHelp1" placeholder="Email address">
                                            <small id="emailHelp1" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                        </div>
                                        <div class="form-group mb-4">
                                            <input type="password" class="form-control" id="sPassword" placeholder="Password">
                                        </div>
                                        <div class="form-group form-check pl-0">
                                            <div class="custom-control custom-checkbox checkbox-info">
                                                <input type="checkbox" class="custom-control-input" id="sChkbox">
                                                <label class="custom-control-label" for="sChkbox">Subscribe to weekly newsletter</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                                    </form>

                                    <div class="code-section-container show-code">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;form>
    &lt;div class="form-group mb-3"&gt;
        &lt;input type="email" class="form-control" id="sEmail" aria-describedby="emailHelp1" placeholder="Email address"&gt;
        &lt;small id="emailHelp1" class="form-text text-muted"&gt;We'll never share your email with anyone else.&lt;/small&gt;
    &lt;/div&gt;
    &lt;div class="form-group mb-4"&gt;
        &lt;input type="password" class="form-control" id="sPassword" placeholder="Password"&gt;
    &lt;/div&gt;
    &lt;div class="form-group form-check pl-0"&gt;
        &lt;div class="custom-control custom-checkbox checkbox-info"&gt;
            &lt;input type="checkbox" class="custom-control-input" id="sChkbox"&gt;
            &lt;label class="custom-control-label" for="sChkbox"&gt;Subscribe to weekly newsletter&lt;/label&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;button type="submit" class="btn btn-primary mt-3"&gt;Submit&lt;/button&gt;
&lt;/form&gt;
</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        
                        <div id="flHorizontalForm" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Horizontal form</h4>
                                        </div>                                                                        
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <form>
                                        <div class="form-group row mb-4">
                                            <label for="hEmail" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Email</label>
                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                                <input type="email" class="form-control" id="hEmail" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-4">
                                            <label for="hPassword" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Password</label>
                                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                                <input type="password" class="form-control" id="hPassword" placeholder="">
                                            </div>
                                        </div>
                                        <fieldset class="form-group mb-4">
                                            <div class="row">
                                                <label class="col-form-label col-xl-2 col-sm-3 col-sm-2 pt-0">Choose Segements</label>
                                                <div class="col-xl-10 col-lg-9 col-sm-10">
                                                    <div class="form-check mb-2">
                                                        <div class="custom-control custom-radio classic-radio-info">
                                                            <input type="radio" id="hRadio1" name="classicRadio" class="custom-control-input">
                                                            <label class="custom-control-label" for="hRadio1">Segements 1</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-check mb-2">
                                                        <div class="custom-control custom-radio classic-radio-info">
                                                            <input type="radio" id="hRadio2" name="classicRadio" class="custom-control-input">
                                                            <label class="custom-control-label" for="hRadio2">Segements 2</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-check disabled">
                                                        <div class="custom-control custom-radio classic-radio-default">
                                                            <input type="radio" id="hRadio3" name="classicRadio" class="custom-control-input" disabled>
                                                            <label class="custom-control-label" for="hRadio3">Segements 3   ( disabled )</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <div class="form-group row">
                                            <div class="col-sm-2">Apply</div>
                                            <div class="col-sm-10">
                                                <div class="form-check pl-0">

                                                    <div class="custom-control custom-checkbox checkbox-info">
                                                        <input type="checkbox" class="custom-control-input" id="hChkbox">
                                                        <label class="custom-control-label" for="hChkbox">Terms Conditions</label>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary mt-3">Lets Go</button>
                                            </div>
                                        </div>
                                    </form>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;form&gt;
    &lt;div class="form-group row mb-4"&gt;
        &lt;label for="hEmail" class="col-xl-2 col-sm-3 col-sm-2 col-form-label"&gt;Email&lt;/label&gt;
        &lt;div class="col-xl-10 col-lg-9 col-sm-10"&gt;
            &lt;input type="email" class="form-control" id="hEmail" placeholder=""&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="form-group row mb-4"&gt;
        &lt;label for="hPassword" class="col-xl-2 col-sm-3 col-sm-2 col-form-label"&gt;Password&lt;/label&gt;
        &lt;div class="col-xl-10 col-lg-9 col-sm-10"&gt;
            &lt;input type="password" class="form-control" id="hPassword" placeholder=""&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;fieldset class="form-group mb-4"&gt;
        &lt;div class="row"&gt;
            &lt;label class="col-form-label col-xl-2 col-sm-3 col-sm-2 pt-0"&gt;Choose Segements&lt;/label&gt;
            &lt;div class="col-xl-10 col-lg-9 col-sm-10"&gt;
                &lt;div class="form-check mb-2"&gt;
                    &lt;div class="custom-control custom-radio classic-radio-info"&gt;
                        &lt;input type="radio" id="hRadio1" name="classicRadio" class="custom-control-input"&gt;
                        &lt;label class="custom-control-label" for="hRadio1"&gt;Segements 1&lt;/label&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;div class="form-check mb-2"&gt;
                    &lt;div class="custom-control custom-radio classic-radio-info"&gt;
                        &lt;input type="radio" id="hRadio2" name="classicRadio" class="custom-control-input"&gt;
                        &lt;label class="custom-control-label" for="hRadio2"&gt;Segements 2&lt;/label&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;div class="form-check disabled"&gt;
                    &lt;div class="custom-control custom-radio classic-radio-default"&gt;
                        &lt;input type="radio" id="hRadio3" name="classicRadio" class="custom-control-input" disabled&gt;
                        &lt;label class="custom-control-label" for="hRadio3"&gt;Segements 3   ( disabled )&lt;/label&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/fieldset&gt;
    &lt;div class="form-group row"&gt;
        &lt;div class="col-sm-2"&gt;Apply&lt;/div&gt;
        &lt;div class="col-sm-10"&gt;
            &lt;div class="form-check pl-0"&gt;

                &lt;div class="custom-control custom-checkbox checkbox-info"&gt;
                    &lt;input type="checkbox" class="custom-control-input" id="hChkbox"&gt;
                    &lt;label class="custom-control-label" for="hChkbox"&gt;Terms Conditions&lt;/label&gt;
                &lt;/div&gt;

            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="form-group row"&gt;
        &lt;div class="col-sm-10"&gt;
            &lt;button type="submit" class="btn btn-primary mt-3"&gt;Lets Go&lt;/button&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/form&gt;
</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div id="flRegistrationForm" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Registration Forms</h4>
                                        </div>                                                                        
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <form>
                                        <div class="form-group mb-4">
                                            <input type="email" class="form-control" id="rEmail" placeholder="Email address *">
                                        </div>
                                        <div class="form-group mb-4">
                                            <input type="password" class="form-control" id="rPassword" placeholder="Password *">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="rConfirmPassword" placeholder="Confirm Password *">
                                        </div>
                                        <small id="emailHelp2" class="form-text text-muted">*Required Fields</small>
                                        <div class="form-group form-check pl-0 mt-5">
                                            <div class="custom-control custom-checkbox checkbox-info">
                                                <input type="checkbox" class="custom-control-input" id="rChkbox">
                                                <label class="custom-control-label" for="rChkbox">Subscribe to weekly newsletter</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                                    </form>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;form&gt;
    &lt;div class="form-group mb-4"&gt;
        &lt;input type="email" class="form-control" id="rEmail" placeholder="Email address *"&gt;
    &lt;/div&gt;
    &lt;div class="form-group mb-4"&gt;
        &lt;input type="password" class="form-control" id="rPassword" placeholder="Password *"&gt;
    &lt;/div&gt;
    &lt;div class="form-group"&gt;
        &lt;input type="password" class="form-control" id="rConfirmPassword" placeholder="Confirm Password *"&gt;
    &lt;/div&gt;
    &lt;small id="emailHelp2" class="form-text text-muted"&gt;*Required Fields&lt;/small&gt;
    &lt;div class="form-group form-check pl-0 mt-5"&gt;
        &lt;div class="custom-control custom-checkbox checkbox-info"&gt;
            &lt;input type="checkbox" class="custom-control-input" id="rChkbox"&gt;
            &lt;label class="custom-control-label" for="rChkbox"&gt;Subscribe to weekly newsletter&lt;/label&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;button type="submit" class="btn btn-primary mt-3"&gt;Submit&lt;/button&gt;
&lt;/form&gt;
</pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div id="flLoginForm" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Login Form</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <form>
                                        <div class="form-group mb-4">
                                            <input type="text" class="form-control" id="lFullName" placeholder="Full Name *">
                                        </div>
                                        <div class="form-group mb-4">
                                            <input type="email" class="form-control" id="lEmail" placeholder="Email address *">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="lPassword" placeholder="Password *">
                                        </div>
                                        <small id="emailHelp" class="form-text text-muted">*Required Fields</small>
                                        <button type="submit" class="btn btn-primary mt-4">Submit</button>
                                    </form>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;form&gt;
    &lt;div class="form-group mb-4"&gt;
        &lt;input type="text" class="form-control" id="lFullName" placeholder="Full Name *"&gt;
    &lt;/div&gt;
    &lt;div class="form-group mb-4"&gt;
        &lt;input type="email" class="form-control" id="lEmail" placeholder="Email address *"&gt;
    &lt;/div&gt;
    &lt;div class="form-group"&gt;
        &lt;input type="password" class="form-control" id="lPassword" placeholder="Password *"&gt;
    &lt;/div&gt;
    &lt;small id="emailHelp" class="form-text text-muted"&gt;*Required Fields&lt;/small&gt;
    &lt;button type="submit" class="btn btn-primary mt-4"&gt;Submit&lt;/button&gt;
&lt;/form&gt;
</pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div id="flFormsGrid" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Forms Grid</h4>
                                        </div>                                                                        
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <form>
                                        <div class="form-row mb-4">
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail4">Email</label>
                                                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputPassword4">Password</label>
                                                <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="inputAddress">Address</label>
                                            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="inputAddress2">Address 2</label>
                                            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                        </div>
                                        <div class="form-row mb-4">
                                            <div class="form-group col-md-6">
                                                <label for="inputCity">City</label>
                                                <input type="text" class="form-control" id="inputCity">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputState">State</label>
                                                <select id="inputState" class="form-control">
                                                    <option selected>Choose...</option>
                                                    <option>...</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label for="inputZip">Zip</label>
                                                <input type="text" class="form-control" id="inputZip">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-check pl-0">
                                                <div class="custom-control custom-checkbox checkbox-info">
                                                    <input type="checkbox" class="custom-control-input" id="gridCheck">
                                                    <label class="custom-control-label" for="gridCheck">Check me out</label>
                                                </div>
                                            </div>
                                        </div>
                                      <button type="submit" class="btn btn-primary mt-3">Sign in</button>
                                    </form>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;form&gt;
    &lt;div class="form-row mb-4"&gt;
        &lt;div class="form-group col-md-6"&gt;
            &lt;label for="inputEmail4"&gt;Email&lt;/label&gt;
            &lt;input type="email" class="form-control" id="inputEmail4" placeholder="Email"&gt;
        &lt;/div&gt;
        &lt;div class="form-group col-md-6"&gt;
            &lt;label for="inputPassword4"&gt;Password&lt;/label&gt;
            &lt;input type="password" class="form-control" id="inputPassword4" placeholder="Password"&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="form-group mb-4"&gt;
        &lt;label for="inputAddress"&gt;Address&lt;/label&gt;
        &lt;input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St"&gt;
    &lt;/div&gt;
    &lt;div class="form-group mb-4"&gt;
        &lt;label for="inputAddress2"&gt;Address 2&lt;/label&gt;
        &lt;input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor"&gt;
    &lt;/div&gt;
    &lt;div class="form-row mb-4"&gt;
        &lt;div class="form-group col-md-6"&gt;
            &lt;label for="inputCity"&gt;City&lt;/label&gt;
            &lt;input type="text" class="form-control" id="inputCity"&gt;
        &lt;/div&gt;
        &lt;div class="form-group col-md-4"&gt;
            &lt;label for="inputState"&gt;State&lt;/label&gt;
            &lt;select id="inputState" class="form-control"&gt;
                &lt;option selected&gt;Choose...&lt;/option&gt;
                &lt;option&gt;...&lt;/option&gt;
            &lt;/select&gt;
        &lt;/div&gt;
        &lt;div class="form-group col-md-2"&gt;
            &lt;label for="inputZip"&gt;Zip&lt;/label&gt;
            &lt;input type="text" class="form-control" id="inputZip"&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="form-group"&gt;
        &lt;div class="form-check pl-0"&gt;
            &lt;div class="custom-control custom-checkbox checkbox-info"&gt;
                &lt;input type="checkbox" class="custom-control-input" id="gridCheck"&gt;
                &lt;label class="custom-control-label" for="gridCheck"&gt;Check me out&lt;/label&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
  &lt;button type="submit" class="btn btn-primary mt-3"&gt;Sign in&lt;/button&gt;
&lt;/form&gt;
</pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div id="flInlineForm" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Inline forms</h4>
                                        </div>                                                                        
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <form class="form-inline justify-content-center">
                                        <label class="sr-only" for="inlineFormInputName2">Name</label>
                                        <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Jane Doe">
                                        <label class="sr-only" for="inlineFormInputGroupUsername2">Username</label>
                                        <div class="input-group mb-2 mr-sm-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">@</div>
                                            </div>
                                            <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Username">
                                        </div>
                                        <div class="form-check mb-2 mr-sm-2">
                                            <div class="custom-control custom-checkbox checkbox-info">
                                                <input type="checkbox" class="custom-control-input" id="inlineFormCheck">
                                                <label class="custom-control-label" for="inlineFormCheck">Remember me</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary mb-2">Submit</button>
                                    </form>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>
                                        <div class="code-section text-left">
                                            <pre>
&lt;form class="form-inline justify-content-center"&gt;
    &lt;label class="sr-only" for="inlineFormInputName2"&gt;Name&lt;/label&gt;
    &lt;input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Jane Doe"&gt;
    &lt;label class="sr-only" for="inlineFormInputGroupUsername2"&gt;Username&lt;/label&gt;
    &lt;div class="input-group mb-2 mr-sm-2"&gt;
        &lt;div class="input-group-prepend"&gt;
            &lt;div class="input-group-text"&gt;@&lt;/div&gt;
        &lt;/div&gt;
        &lt;input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Username"&gt;
    &lt;/div&gt;
    &lt;div class="form-check mb-2 mr-sm-2"&gt;
        &lt;div class="custom-control custom-checkbox checkbox-info"&gt;
            &lt;input type="checkbox" class="custom-control-input" id="inlineFormCheck"&gt;
            &lt;label class="custom-control-label" for="inlineFormCheck"&gt;Remember me&lt;/label&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;button type="submit" class="btn btn-primary mb-2"&gt;Submit&lt;/button&gt;
&lt;/form&gt;
</pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="flAutoSizing" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Auto-sizing</h4>
                                        </div>                                                                        
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <form>
                                        <div class="form-row align-items-center justify-content-center">
                                            <div class="col-auto">
                                                <label class="sr-only" for="inlineFormInput">Name</label>
                                                <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Jane Doe">
                                            </div>
                                            <div class="col-auto">
                                                <label class="sr-only" for="inlineFormInputGroup">Username</label>
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">@</div>
                                                    </div>
                                                    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="form-check mb-2 pl-0">
                                                    <div class="custom-control custom-checkbox checkbox-info">
                                                        <input type="checkbox" class="custom-control-input" id="autoSizingCheck">
                                                        <label class="custom-control-label" for="autoSizingCheck">Remember me</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <button type="submit" class="btn btn-primary mb-2">Submit</button>
                                            </div>
                                        </div>
                                    </form>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>
                                        <div class="code-section text-left">
                                            <pre>
&lt;form&gt;
    &lt;div class="form-row align-items-center justify-content-center"&gt;
        &lt;div class="col-auto"&gt;
            &lt;label class="sr-only" for="inlineFormInput"&gt;Name&lt;/label&gt;
            &lt;input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Jane Doe"&gt;
        &lt;/div&gt;
        &lt;div class="col-auto"&gt;
            &lt;label class="sr-only" for="inlineFormInputGroup"&gt;Username&lt;/label&gt;
            &lt;div class="input-group mb-2"&gt;
                &lt;div class="input-group-prepend"&gt;
                    &lt;div class="input-group-text"&gt;@&lt;/div&gt;
                &lt;/div&gt;
                &lt;input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username"&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="col-auto"&gt;
            &lt;div class="form-check mb-2 pl-0"&gt;
                &lt;div class="custom-control custom-checkbox checkbox-info"&gt;
                    &lt;input type="checkbox" class="custom-control-input" id="autoSizingCheck"&gt;
                    &lt;label class="custom-control-label" for="autoSizingCheck"&gt;Remember me&lt;/label&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="col-auto"&gt;
            &lt;button type="submit" class="btn btn-primary mt-3"&gt;Submit&lt;/button&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/form&gt;
</pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                    <div class="row layout-spacing">
                        <div id="flActionButtons" class="col-lg-12">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Actions Buttons</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <form class="form-vertical" action="#">
                                        <div class="form-group mb-4">
                                            <label class="control-label">First Name:</label>
                                            <input type="text" name="first_name" class="form-control" >
                                        </div>
                                        <div class="form-group mb-4">
                                            <label class="control-label">Email:</label>
                                            <div class="input-group"> 
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">@</div>
                                                </div>
                                                <input type="text" name="email" class="form-control" > 
                                            </div> 
                                        </div>
                                        <div class="form-group mb-4">
                                            <label class="control-label">Website:</label>
                                            <input type="text" name="website" value="https://" class="form-control" > 
                                        </div>
                                        <div class="form-group mb-4">
                                            <label class="control-label">Password:</label>
                                            <div class="input-group mb-4">
                                                <input type="password" name="pass" class="form-control" > 
                                                <span class="input-group-addon"><i class="icon-user"></i></span> 
                                            </div>
                                        </div>
                                        <div class="form-group mb-4">
                                            <label class="control-label">Confirm Password:</label>
                                            <div class="input-group">
                                                <input type="password" name="cpass" class="form-control">
                                                <span class="input-group-addon"><i class="icon-user"></i></span> 
                                            </div>
                                        </div>
                                            <input type="submit" value="Submit" class="btn btn-primary ml-3 mt-3"> 
                                    </form>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>
                                        <div class="code-section text-left">
                                            <pre>
&lt;form class="form-vertical" action="#"&gt;
    &lt;div class="form-group mb-4"&gt;
        &lt;label class="control-label"&gt;First Name:&lt;/label&gt;
        &lt;input type="text" name="first_name" class="form-control" &gt;
    &lt;/div&gt;
    &lt;div class="form-group mb-4"&gt;
        &lt;label class="control-label"&gt;Email:&lt;/label&gt;
        &lt;div class="input-group"&gt; 
            &lt;div class="input-group-prepend"&gt;
                &lt;div class="input-group-text"&gt;@&lt;/div&gt;
            &lt;/div&gt;
            &lt;input type="text" name="email" class="form-control" &gt; 
        &lt;/div&gt; 
    &lt;/div&gt;
    &lt;div class="form-group mb-4"&gt;
        &lt;label class="control-label"&gt;Website:&lt;/label&gt;
        &lt;input type="text" name="website" value="https://" class="form-control" &gt; 
    &lt;/div&gt;
    &lt;div class="form-group mb-4"&gt;
        &lt;label class="control-label"&gt;Password:&lt;/label&gt;
        &lt;div class="input-group mb-4"&gt;
            &lt;input type="password" name="pass" class="form-control" &gt; 
            &lt;span class="input-group-addon"&gt;&lt;i class="icon-user"&gt;&lt;/i&gt;&lt;/span&gt; 
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="form-group mb-4"&gt;
        &lt;label class="control-label"&gt;Confirm Password:&lt;/label&gt;
        &lt;div class="input-group"&gt;
            &lt;input type="password" name="cpass" class="form-control"&gt;
            &lt;span class="input-group-addon"&gt;&lt;i class="icon-user"&gt;&lt;/i&gt;&lt;/span&gt; 
        &lt;/div&gt;
    &lt;/div&gt;
        &lt;input type="submit" value="Submit" class="btn btn-primary ml-3 mt-3"&gt; 
&lt;/form&gt;
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