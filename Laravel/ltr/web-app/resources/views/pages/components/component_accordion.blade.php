@extends('layouts.app')

@section('content')
            <div class="container">
                <div class="container">

                    <div id="navSection" data-spy="affix" class="nav sidenav">
                        <div class="sidenav-content">
                            <a href="#accordionBasic" class="active nav-link">Basic</a>
                            <a href="#accordionWithout-spacing" class="nav-link">Without Spacing</a>
                            <a href="#accordionIcons" class="nav-link">Icons</a>
                            <a href="#accordionNo-icons" class="nav-link">No Icons</a>
                        </div>
                    </div>

                    <div class="row layout-top-spacing">
                        <div class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div id="accordionBasic" class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Basic</h4>
                                        </div>
                                    </div>
                                </div> 
                                <div class="widget-content widget-content-area">
                                    <div id="toggleAccordion">
                                      <div class="card">
                                        <div class="card-header" id="headingOne1">
                                          <section class="mb-0 mt-0">
                                            <div role="menu" class="collapsed" data-toggle="collapse" data-target="#defaultAccordionOne" aria-expanded="true" aria-controls="defaultAccordionOne">
                                              Collapsible Group Item #1  <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                            </div>
                                          </section>
                                        </div>

                                        <div id="defaultAccordionOne" class="collapse" aria-labelledby="headingOne1" data-parent="#toggleAccordion">
                                          <div class="card-body">
                                                <p class="">
                                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.                                                
                                                </p>

                                                <p class="">
                                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                </p>  
                                          </div>
                                        </div>
                                      </div>
                                      <div class="card">
                                        <div class="card-header" id="headingTwo1">
                                          <section class="mb-0 mt-0">
                                            <div role="menu" class="" data-toggle="collapse" data-target="#defaultAccordionTwo" aria-expanded="false" aria-controls="defaultAccordionTwo">
                                              Collapsible Group Item #2  <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                            </div>
                                          </section>
                                        </div>
                                        <div id="defaultAccordionTwo" class="collapse show" aria-labelledby="headingTwo1" data-parent="#toggleAccordion">
                                            <div class="card-body">
                                                <ul class="list-unstyled">
                                                    <li><a href="javascript:void(0);" class="">Apple</a></li>
                                                    <li><a href="javascript:void(0);" class="">Orange</a></li>
                                                    <li><a href="javascript:void(0);" class="">Banana</a></li>
                                                    <li><a href="javascript:void(0);" class="">list</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                      </div>
                                      <div class="card">
                                        <div class="card-header" id="headingThree1">
                                          <section class="mb-0 mt-0">
                                            <div role="menu" class="collapsed" data-toggle="collapse" data-target="#defaultAccordionThree" aria-expanded="false" aria-controls="defaultAccordionThree">
                                              Collapsible Group Item #3 <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                            </div>
                                          </section>
                                        </div>
                                        <div id="defaultAccordionThree" class="collapse" aria-labelledby="headingThree1" data-parent="#toggleAccordion">
                                          <div class="card-body">
                                            <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>

                                            <button class="btn btn-primary mt-4">Accept</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                    <div class="code-section-container show-code">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div id="toggleAccordion"&gt;
    &lt;div class="card"&gt;
        &lt;div class="card-header" id="..."&gt;
            &lt;section class="mb-0 mt-0"&gt;
                &lt;div role="menu" class="collapsed" data-toggle="collapse" data-target="#defaultAccordionOne" aria-expanded="true" aria-controls="defaultAccordionOne"&gt;
                    Collapsible Group Item #1  &lt;div class="icons"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/div&gt;
                &lt;/div&gt;
            &lt;/section&gt;
        &lt;/div&gt;

        &lt;div id="defaultAccordionOne" class="collapse" aria-labelledby="..." data-parent="#toggleAccordion"&gt;
            &lt;div class="card-body"&gt;
            
                .......................
                .......................

            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;

    &lt;div class="card"&gt;
        &lt;div class="card-header" id="..."&gt;
            &lt;section class="mb-0 mt-0"&gt;
                &lt;div role="menu" class="" data-toggle="collapse" data-target="#defaultAccordionTwo" aria-expanded="false" aria-controls="defaultAccordionTwo"&gt;
                    Collapsible Group Item #2  &lt;div class="icons"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/div&gt;
                &lt;/div&gt;
            &lt;/section&gt;
        &lt;/div&gt;
        &lt;div id="defaultAccordionTwo" class="collapse show" aria-labelledby="..." data-parent="#toggleAccordion"&gt;
            &lt;div class="card-body"&gt;
            
                .......................
                .......................

            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;

    &lt;div class="card"&gt;
        &lt;div class="card-header" id="..."&gt;
            &lt;h5 class="mb-0 mt-0"&gt;
                &lt;div role="menu" class="collapsed" data-toggle="collapse" data-target="#defaultAccordionThree" aria-expanded="false" aria-controls="defaultAccordionThree"&gt;
                Collapsible Group Item #3 &lt;div class="icons"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/div&gt;
            &lt;/div&gt;
            &lt;/h5&gt;
        &lt;/div&gt;
        &lt;div id="defaultAccordionThree" class="collapse" aria-labelledby="..." data-parent="#toggleAccordion"&gt;
            &lt;div class="card-body"&gt;

                .......................
                .......................

            &lt;/div&gt;
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
                                <div id="accordionWithout-spacing" class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Without Spacing</h4>
                                        </div>
                                    </div>
                                </div> 
                                <div class="widget-content widget-content-area icon-accordion-content">

                                    <p class="mb-3">Add <code>.no-outer-spacing</code> class in parent <code>div</code> of <code>div.card</code> element.</p>

                                    <div id="withoutSpacing" class="no-outer-spacing">
                                        <div class="card no-outer-spacing">
                                            <div class="card-header" id="headingOne2">
                                                <section class="mb-0 mt-0">
                                                    <div role="menu" class="" data-toggle="collapse" data-target="#withoutSpacingAccordionOne" aria-expanded="true" aria-controls="withoutSpacingAccordionOne">
                                                        Collapsible Group Item #1  <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                                    </div>
                                                </section>
                                            </div>

                                            <div id="withoutSpacingAccordionOne" class="collapse show" aria-labelledby="headingOne2" data-parent="#withoutSpacing">
                                                <div class="card-body">
                                                    <p class="">
                                                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.                                                
                                                    </p>

                                                    <p class="">
                                                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                    </p>  
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card no-outer-spacing">
                                            <div class="card-header" id="headingTwo2">
                                                <section class="mb-0 mt-0">
                                                    <div role="menu" class="collapsed" data-toggle="collapse" data-target="#withoutSpacingAccordionTwo" aria-expanded="false" aria-controls="withoutSpacingAccordionTwo">
                                                        Collapsible Group Item #2  <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                                    </div>
                                                </section>
                                            </div>
                                            <div id="withoutSpacingAccordionTwo" class="collapse" aria-labelledby="headingTwo2" data-parent="#withoutSpacing">
                                                <div class="card-body">
                                                    <ul class="list-unstyled">
                                                        <li><a href="javascript:void(0);" class="">Apple</a></li>
                                                        <li><a href="javascript:void(0);" class="">Orange</a></li>
                                                        <li><a href="javascript:void(0);" class="">Banana</a></li>
                                                        <li><a href="javascript:void(0);" class="">list</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card no-outer-spacing">
                                            <div class="card-header" id="headingThree10">
                                                <section class="mb-0 mt-0">
                                                    <div role="menu" class="collapsed" data-toggle="collapse" data-target="#withoutSpacingAccordionThree" aria-expanded="false" aria-controls="withoutSpacingAccordionThree">
                                                        Collapsible Group Item #3 <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                                    </div>
                                                </section>
                                            </div>
                                            <div id="withoutSpacingAccordionThree" class="collapse" aria-labelledby="headingThree10" data-parent="#withoutSpacing">
                                                <div class="card-body">
                                                    <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>

                                                    <button class="btn btn-primary mt-4">Accept</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div id="withoutSpacing" class="no-outer-spacing"&gt;
    &lt;div class="card"&gt;
        &lt;div class="card-header" id="headingOne2"&gt;
            &lt;section class="mb-0 mt-0"&gt;
                &lt;div role="menu" class="" data-toggle="collapse" data-target="#withoutSpacingAccordionOne" aria-expanded="true" aria-controls="withoutSpacingAccordionOne"&gt;
                    Collapsible Group Item #1  &lt;div class="icons"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/div&gt;
                &lt;/div&gt;
            &lt;/section&gt;
        &lt;/div&gt;

        &lt;div id="withoutSpacingAccordionOne" class="collapse show" aria-labelledby="headingOne2" data-parent="#withoutSpacing"&gt;
            &lt;div class="card-body"&gt;
                
                ................
                ................

            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;

    &lt;div class="card"&gt;
        &lt;div class="card-header" id="headingTwo4"&gt;
            &lt;section class="mb-0 mt-0"&gt;
                &lt;div role="menu" class="collapsed" data-toggle="collapse" data-target="#withoutSpacingAccordionTwo" aria-expanded="false" aria-controls="withoutSpacingAccordionTwo"&gt;
                    Collapsible Group Item #2  &lt;div class="icons"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/div&gt;
                &lt;/div&gt;
            &lt;/section&gt;
        &lt;/div&gt;
        &lt;div id="withoutSpacingAccordionTwo" class="collapse" aria-labelledby="headingTwo4" data-parent="#withoutSpacing"&gt;
            &lt;div class="card-body"&gt;

                ................
                ................

            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="card"&gt;
        &lt;div class="card-header" id="headingThree4"&gt;
            &lt;section class="mb-0 mt-0"&gt;
                &lt;div role="menu" class="collapsed" data-toggle="collapse" data-target="#withoutSpacingAccordionThree" aria-expanded="false" aria-controls="withoutSpacingAccordionThree"&gt;
                    Collapsible Group Item #3 &lt;div class="icons"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/div&gt;
                &lt;/div&gt;
            &lt;/section&gt;
        &lt;/div&gt;
        &lt;div id="withoutSpacingAccordionThree" class="collapse" aria-labelledby="headingThree4" data-parent="#withoutSpacing"&gt;
            &lt;div class="card-body"&gt;
                    
                ................
                ................

            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div id="accordionIcons" class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Icons</h4>
                                        </div>
                                    </div>
                                </div> 
                                <div class="widget-content widget-content-area">

                                    <p class="mb-3">Add <code>div.accordion-icon</code> with <code>svg</code> icon placed inside it.</p>

                                    <div id="iconsAccordion" class="accordion-icons">
                                        <div class="card">
                                            <div class="card-header" id="headingOne3">
                                                <section class="mb-0 mt-0">
                                                    <div role="menu" class="collapsed" data-toggle="collapse" data-target="#iconAccordionOne" aria-expanded="true" aria-controls="iconAccordionOne">
                                                        <div class="accordion-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
                                                        Collapsible Group Item #1  <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                                    </div>
                                                </section>
                                            </div>

                                            <div id="iconAccordionOne" class="collapse" aria-labelledby="headingOne3" data-parent="#iconsAccordion">
                                                <div class="card-body">
                                                    <p class="">
                                                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.                                                
                                                    </p>

                                                    <p class="">
                                                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                    </p>  
                                                </div>
                                            </div>
                                      </div>

                                        <div class="card">
                                            <div class="card-header" id="headingTwo3">
                                                <section class="mb-0 mt-0">
                                                    <div role="menu" class="collapsed" data-toggle="collapse" data-target="#iconAccordionTwo" aria-expanded="false" aria-controls="iconAccordionTwo">
                                                        <div class="accordion-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg></div>
                                                        Collapsible Group Item #2  <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                                    </div>
                                                </section>
                                            </div>
                                            <div id="iconAccordionTwo" class="collapse" aria-labelledby="headingTwo3" data-parent="#iconsAccordion">
                                                <div class="card-body">
                                                    <ul class="list-unstyled">
                                                        <li><a href="javascript:void(0);" class="">Apple</a></li>
                                                        <li><a href="javascript:void(0);" class="">Orange</a></li>
                                                        <li><a href="javascript:void(0);" class="">Banana</a></li>
                                                        <li><a href="javascript:void(0);" class="">list</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingThree8">
                                                <section class="mb-0 mt-0">
                                                    <div role="menu" class="" data-toggle="collapse" data-target="#iconAccordionThree" aria-expanded="false" aria-controls="iconAccordionThree">
                                                        <div class="accordion-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layout"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg></div>
                                                        Collapsible Group Item #3 <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                                    </div>
                                                </section>
                                            </div>
                                            <div id="iconAccordionThree" class="collapse show" aria-labelledby="headingThree8" data-parent="#iconsAccordion">
                                            <div class="card-body">
                                                <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>

                                                <button class="btn btn-primary mt-4">Accept</button>
                                            </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div id="iconsAccordion" class="accordion-icons"&gt;
    &lt;div class="card"&gt;
        &lt;div class="card-header" id="..."&gt;
            &lt;section class="mb-0 mt-0"&gt;
                &lt;div role="menu" class="collapsed" data-toggle="collapse" data-target="#iconAccordionOne" aria-expanded="true" aria-controls="iconAccordionOne"&gt;
                    &lt;div class="accordion-icon"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/div&gt;
                    Collapsible Group Item #1  &lt;div class="icons"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/div&gt;
                &lt;/div&gt;
            &lt;/section&gt;
        &lt;/div&gt;

        &lt;div id="iconAccordionOne" class="collapse" aria-labelledby="..." data-parent="#iconsAccordion"&gt;
            &lt;div class="card-body"&gt;
                
                ..................
                ..................

            &lt;/div&gt;
        &lt;/div&gt;
  &lt;/div&gt;

    &lt;div class="card"&gt;
        &lt;div class="card-header" id="..."&gt;
            &lt;section class="mb-0 mt-0"&gt;
                &lt;div role="menu" class="collapsed" data-toggle="collapse" data-target="#iconAccordionTwo" aria-expanded="false" aria-controls="iconAccordionTwo"&gt;
                    &lt;div class="accordion-icon"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/div&gt;
                    Collapsible Group Item #2  &lt;div class="icons"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/div&gt;
                &lt;/div&gt;
            &lt;/section&gt;
        &lt;/div&gt;
        &lt;div id="iconAccordionTwo" class="collapse" aria-labelledby="..." data-parent="#iconsAccordion"&gt;
            &lt;div class="card-body"&gt;

                ...................
                ...................

            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="card"&gt;
        &lt;div class="card-header" id="..."&gt;
            &lt;section class="mb-0 mt-0"&gt;
                &lt;div role="menu" class="" data-toggle="collapse" data-target="#iconAccordionThree" aria-expanded="false" aria-controls="iconAccordionThree"&gt;
                    &lt;div class="accordion-icon"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/div&gt;
                    Collapsible Group Item #3 &lt;div class="icons"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/div&gt;
                &lt;/div&gt;
            &lt;/section&gt;
        &lt;/div&gt;
        &lt;div id="iconAccordionThree" class="collapse show" aria-labelledby="..." data-parent="#iconsAccordion"&gt;
        &lt;div class="card-body"&gt;
            
            ..................
            ..................

        &lt;/div&gt;
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
                                <div id="accordionNo-icons" class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>No Icons</h4>
                                        </div>
                                    </div>
                                </div> 
                                <div class="widget-content widget-content-area creative3-accordion-content">

                                    <p class="mb-3">Remove <code>div.icons</code> completely and also (if required) remove <code>div.accordion-icon</code>.</p>

                                    <div id="noIconsAccordion" class="no-icons">
                                      <div class="card">
                                        <div class="card-header" id="headingOne4">
                                          <section class="mb-0 mt-0">
                                            <div role="menu" class="" data-toggle="collapse" data-target="#noIconAccordionOne" aria-expanded="true" aria-controls="noIconAccordionOne">
                                              Collapsible Group Item #1
                                            </div>
                                          </section>
                                        </div>

                                        <div id="noIconAccordionOne" class="collapse show" aria-labelledby="headingOne4" data-parent="#noIconsAccordion">
                                          <div class="card-body">
                                                <p class="">
                                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.                                                
                                                </p>

                                                <p class="">
                                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                </p>  
                                          </div>
                                        </div>
                                      </div>
                                      <div class="card">
                                        <div class="card-header" id="headingTwo4">
                                          <section class="mb-0 mt-0">
                                            <div role="menu" class="collapsed" data-toggle="collapse" data-target="#noIconAccordionTwo" aria-expanded="false" aria-controls="noIconAccordionTwo">
                                              Collapsible Group Item #2
                                            </div>
                                          </section>
                                        </div>
                                        <div id="noIconAccordionTwo" class="collapse" aria-labelledby="headingTwo4" data-parent="#noIconsAccordion">
                                            <div class="card-body">
                                                <ul class="list-unstyled">
                                                    <li><a href="javascript:void(0);" class="">Apple</a></li>
                                                    <li><a href="javascript:void(0);" class="">Orange</a></li>
                                                    <li><a href="javascript:void(0);" class="">Banana</a></li>
                                                    <li><a href="javascript:void(0);" class="">list</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                      </div>
                                      <div class="card">
                                        <div class="card-header" id="headingThree4">
                                          <section class="mb-0 mt-0">
                                            <div role="menu" class="collapsed" data-toggle="collapse" data-target="#noIconAccordionThree" aria-expanded="false" aria-controls="noIconAccordionThree">
                                              Collapsible Group Item #3
                                            </div>
                                          </section>
                                        </div>
                                        <div id="noIconAccordionThree" class="collapse" aria-labelledby="headingThree4" data-parent="#noIconsAccordion">
                                          <div class="card-body">
                                            <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>

                                            <button class="btn btn-primary mt-4">Accept</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div id="toggleAccordion"&gt;
    &lt;div class="card"&gt;
        &lt;div class="card-header" id="..."&gt;
            &lt;section class="mb-0 mt-0"&gt;
                &lt;div role="menu" class="collapsed" data-toggle="collapse" data-target="#defaultAccordionOne" aria-expanded="true" aria-controls="defaultAccordionOne"&gt;
                    Collapsible Group Item #1
                &lt;/div&gt;
            &lt;/section&gt;
        &lt;/div&gt;

        &lt;div id="defaultAccordionOne" class="collapse" aria-labelledby="..." data-parent="#toggleAccordion"&gt;
            &lt;div class="card-body"&gt;
            
                .......................
                .......................

            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;

    &lt;div class="card"&gt;
        &lt;div class="card-header" id="..."&gt;
            &lt;section class="mb-0 mt-0"&gt;
                &lt;div role="menu" class="" data-toggle="collapse" data-target="#defaultAccordionTwo" aria-expanded="false" aria-controls="defaultAccordionTwo"&gt;
                    Collapsible Group Item #2
                &lt;/div&gt;
            &lt;/section&gt;
        &lt;/div&gt;
        &lt;div id="defaultAccordionTwo" class="collapse show" aria-labelledby="..." data-parent="#toggleAccordion"&gt;
            &lt;div class="card-body"&gt;
            
                .......................
                .......................

            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;

    &lt;div class="card"&gt;
        &lt;div class="card-header" id="..."&gt;
            &lt;section class="mb-0 mt-0"&gt;
                &lt;div role="menu" class="collapsed" data-toggle="collapse" data-target="#defaultAccordionThree" aria-expanded="false" aria-controls="defaultAccordionThree"&gt;
                Collapsible Group Item #3
            &lt;/div&gt;
            &lt;/section&gt;
        &lt;/div&gt;
        &lt;div id="defaultAccordionThree" class="collapse" aria-labelledby="..." data-parent="#toggleAccordion"&gt;
            &lt;div class="card-body"&gt;

                .......................
                .......................

            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
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