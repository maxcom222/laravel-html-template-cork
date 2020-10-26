@extends('layouts.app')

@section('content')
            <div class="layout-px-spacing">
                
                <div class="row" id="cancel-row">

                    <div class="col-lg-12 layout-spacing layout-top-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Toggle</h4>
                                    </div>           
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">

                                <div class="container">
                                    
                                    <!-- Billing Cycle  -->
                                    <div class="billing-cycle-radios mt-5">
                                        <div class="radio billed-yearly-radio">
                                            <div class="d-flex justify-content-center">
                                                <span class="txt-monthly">Monthly</span>
                                                <label class="switch s-icons s-outline  s-outline-success">
                                                    <input type="checkbox" id="radio-6">
                                                    <span class="slider round"></span>
                                                </label>

                                                <span class="txt-yearly">Yearly <span class="badge badge-pill badge-success">20% Off</span></span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Pricing Plans Container -->
                                    <div class="pricing-plans-container mt-5 d-md-flex d-block">
                                        <!-- Plan -->
                                        <div class="pricing-plan mb-5">
                                            <h3>Cloud Hosting</h3>
                                            <p class="margin-top-10">cPanel/WHM included. Intel Xeon E3 with guaranteed 2GB RAM.</p>
                                            <div class="pricing-plan-label billed-monthly-label"><strong>$25</strong>/ monthly</div>
                                            <div class="pricing-plan-label billed-yearly-label"><strong>$290</strong>/ yearly</div>
                                            <div class="pricing-plan-features mb-4">
                                                <strong>Cloud Hosting Features</strong>
                                                <ul>
                                                    <li>Single Domain</li>
                                                    <li>50 GB SSD</li>
                                                    <li>1 TB Premium Bandwidth</li>
                                                </ul>
                                            </div>
                                            <a href="javascript:void(0);" class="button btn btn-dark btn-block margin-top-20">Buy Now</a>
                                        </div>
                                        <!-- Plan -->
                                        <div class="pricing-plan mb-5 mt-md-0 recommended">
                                            <div class="recommended-badge">Most Popular</div>
                                            <h3>VPS Hosting</h3>
                                            <p class="margin-top-10">cPanel/WHM included. Intel Xeon E5 with guaranteed 4GB RAM.</p>
                                            <div class="pricing-plan-label billed-monthly-label"><strong>$70</strong>/ monthly</div>
                                            <div class="pricing-plan-label billed-yearly-label"><strong>$670</strong>/ yearly</div>
                                            <div class="pricing-plan-features mb-4">
                                                <strong>VPS Hosting Features</strong>
                                                <ul>
                                                    <li>5 Domains</li>
                                                    <li>100 GB SSD</li>
                                                    <li>2 TB Premium Bandwidth</li>
                                                </ul>
                                            </div>
                                            <a href="javascript:void(0);" class="button btn btn-default btn-block margin-top-20">Buy Now</a>
                                        </div>
                                        <!-- Plan -->
                                        <div class="pricing-plan mb-5">
                                            <h3>Business Hosting</h3>
                                            <p class="margin-top-10">cPanel/WHM included. Intel Xeon E5 with guaranteed 8GB RAM.</p>
                                            <div class="pricing-plan-label billed-monthly-label"><strong>$115</strong>/ monthly</div>
                                            <div class="pricing-plan-label billed-yearly-label"><strong>$1100</strong>/ yearly</div>
                                            <div class="pricing-plan-features mb-4">
                                                <strong>Business Hosting Features</strong>
                                                <ul>
                                                    <li>Unlimited Domains</li>
                                                    <li>1 TB SSD</li>
                                                    <li>5 TB Premium Bandwidth</li>
                                                </ul>
                                            </div>
                                            <a href="javascript:void(0);" class="button btn btn-dark btn-block margin-top-20">Buy Now</a>
                                        </div>
                                    </div>


                                    <div class="code-section-container show-code">
                                                
                                <button class="btn toggle-code-snippet"><span>Code</span></button>

                                <div class="code-section text-left">
                                    <pre>
    &lt;div class="container"&gt;
        &lt;div class="row"&gt;
            &lt;div class="col-lg-12"&gt;
                &lt;!-- Billing Cycle  --&gt;
                &lt;div class="billing-cycle-radios mt-5"&gt;
                    &lt;div class="radio billed-yearly-radio"&gt;
                        &lt;div class="d-flex justify-content-center"&gt;
                            &lt;span class="txt-monthly"&gt;Monthly&lt;/span&gt;
                            &lt;label class="switch s-icons s-outline  s-outline-success"&gt;
                                &lt;input type="checkbox" id="radio-6"&gt;
                                &lt;span class="slider round"&gt;&lt;/span&gt;
                            &lt;/label&gt;
                            &lt;span class="txt-yearly"&gt;Yearly &lt;span class="badge badge-pill badge-primary"&gt;20% Off&lt;/span&gt;&lt;/span&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;

                &lt;!-- Pricing Plans Container --&gt;
                &lt;div class="pricing-plans-container mt-5 d-md-flex d-block"&gt;
                    &lt;!-- Plan --&gt;
                    &lt;div class="pricing-plan mb-5"&gt;
                        &lt;h3&gt;Cloud Hosting&lt;/h3&gt;
                        &lt;p class="margin-top-10"&gt;cPanel/WHM included. Intel Xeon E3 with guaranteed 2GB RAM.&lt;/p&gt;
                        &lt;div class="pricing-plan-label billed-monthly-label"&gt;&lt;strong&gt;$25&lt;/strong&gt;/ monthly&lt;/div&gt;
                        &lt;div class="pricing-plan-label billed-yearly-label"&gt;&lt;strong&gt;$290&lt;/strong&gt;/ yearly&lt;/div&gt;
                        &lt;div class="pricing-plan-features mb-4"&gt;
                            &lt;strong&gt;Cloud Hosting Features&lt;/strong&gt;
                            &lt;ul&gt;
                                &lt;li&gt;Single Domain&lt;/li&gt;
                                &lt;li&gt;50 GB SSD&lt;/li&gt;
                                &lt;li&gt;1 TB Premium Bandwidth&lt;/li&gt;
                            &lt;/ul&gt;
                        &lt;/div&gt;
                        &lt;a href="javascript:void(0);" class="button btn btn-primary btn-block margin-top-20"&gt;Buy Now&lt;/a&gt;
                    &lt;/div&gt;
                    &lt;!-- Plan --&gt;
                    &lt;div class="pricing-plan mb-5 mt-md-0 recommended"&gt;
                        &lt;div class="recommended-badge"&gt;Most Popular&lt;/div&gt;
                        &lt;h3&gt;VPS Hosting&lt;/h3&gt;
                        &lt;p class="margin-top-10"&gt;cPanel/WHM included. Intel Xeon E5 with guaranteed 4GB RAM.&lt;/p&gt;
                        &lt;div class="pricing-plan-label billed-monthly-label"&gt;&lt;strong&gt;$70&lt;/strong&gt;/ monthly&lt;/div&gt;
                        &lt;div class="pricing-plan-label billed-yearly-label"&gt;&lt;strong&gt;$670&lt;/strong&gt;/ yearly&lt;/div&gt;
                        &lt;div class="pricing-plan-features mb-4"&gt;
                            &lt;strong&gt;VPS Hosting Features&lt;/strong&gt;
                            &lt;ul&gt;
                                &lt;li&gt;5 Domains&lt;/li&gt;
                                &lt;li&gt;100 GB SSD&lt;/li&gt;
                                &lt;li&gt;2 TB Premium Bandwidth&lt;/li&gt;
                            &lt;/ul&gt;
                        &lt;/div&gt;
                        &lt;a href="javascript:void(0);" class="button btn btn-default btn-block margin-top-20"&gt;Buy Now&lt;/a&gt;
                    &lt;/div&gt;
                    &lt;!-- Plan --&gt;
                    &lt;div class="pricing-plan mb-5"&gt;
                        &lt;h3&gt;Business Hosting&lt;/h3&gt;
                        &lt;p class="margin-top-10"&gt;cPanel/WHM included. Intel Xeon E5 with guaranteed 8GB RAM.&lt;/p&gt;
                        &lt;div class="pricing-plan-label billed-monthly-label"&gt;&lt;strong&gt;$115&lt;/strong&gt;/ monthly&lt;/div&gt;
                        &lt;div class="pricing-plan-label billed-yearly-label"&gt;&lt;strong&gt;$1100&lt;/strong&gt;/ yearly&lt;/div&gt;
                        &lt;div class="pricing-plan-features mb-4"&gt;
                            &lt;strong&gt;Business Hosting Features&lt;/strong&gt;
                            &lt;ul&gt;
                                &lt;li&gt;Unlimited Domains&lt;/li&gt;
                                &lt;li&gt;1 TB SSD&lt;/li&gt;
                                &lt;li&gt;5 TB Premium Bandwidth&lt;/li&gt;
                            &lt;/ul&gt;
                        &lt;/div&gt;
                        &lt;a href="javascript:void(0);" class="button btn btn-primary btn-block margin-top-20"&gt;Buy Now&lt;/a&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;</pre>
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
                                        <h4>Animated</h4>
                                    </div>           
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="container">                                    
                                    <div id="pricingWrapper" class="row">
                                        <div class="col-md-6 col-lg-4">
                                            <div class="card stacked mt-5">
                                                <div class="card-header pt-0">
                                                    <span class="card-price">$49</span>
                                                    <h3 class="card-title mt-3 mb-1">Freelancer</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                </div>
                                                <div class="card-body">
                                                    <ul class="list-group list-group-minimal mb-3">
                                                        <li class="list-group-item d-flex justify-content-between align-items-center">Support forum
                                                        </li>
                                                        <li class="list-group-item d-flex justify-content-between align-items-center">Free hosting
                                                        </li>
                                                        <li class="list-group-item d-flex justify-content-between align-items-center">2 hours of support
                                                        </li>
                                                        <li class="list-group-item d-flex justify-content-between align-items-center">5GB of storage space
                                                        </li>
                                                    </ul>
                                                    <a href="" class="btn btn-block btn-primary">Buy Now</a>
                                                </div>
                                            </div>
                                        </div>                              
                                        <div class="col-md-6 col-lg-4">
                                            <div class="card stacked mt-5">
                                                <div class="card-header pt-0">
                                                    <span class="card-price">$89</span>
                                                    <h3 class="card-title mt-3 mb-1">Small business</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                </div>
                                                <div class="card-body">
                                                    <ul class="list-group list-group-minimal mb-3">
                                                        <li class="list-group-item d-flex justify-content-between align-items-center">Unlimited calls
                                                        </li>
                                                        <li class="list-group-item d-flex justify-content-between align-items-center">Free hosting
                                                        </li>
                                                        <li class="list-group-item d-flex justify-content-between align-items-center">10 hours of support
                                                        </li>
                                                        <li class="list-group-item d-flex justify-content-between align-items-center">100GB of storage space
                                                        </li>
                                                    </ul>
                                                    <a href="" class="btn btn-block btn-primary">Buy Now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4">
                                            <div class="card stacked mt-5">
                                                <div class="card-header pt-0">
                                                    <span class="card-price">$129</span>
                                                    <h3 class="card-title mt-3 mb-1">Larger business</h3>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                </div>
                                                <div class="card-body">
                                                    <ul class="list-group list-group-minimal mb-3">
                                                        <li class="list-group-item d-flex justify-content-between align-items-center">Unlimited calls
                                                        </li>
                                                        <li class="list-group-item d-flex justify-content-between align-items-center">Free hosting
                                                        </li>
                                                        <li class="list-group-item d-flex justify-content-between align-items-center">Unlimited hours of support
                                                        </li>
                                                        <li class="list-group-item d-flex justify-content-between align-items-center">1TB of storage space
                                                        </li>
                                                    </ul>
                                                    <a href="" class="btn btn-block btn-primary">Buy Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                <button class="btn toggle-code-snippet"><span>Code</span></button>

                                <div class="code-section text-left">
                                    <pre>
    &lt;div class="container"&gt;
        &lt;div id="pricingWrapper" class="row"&gt;
            &lt;div class="col-md-6 col-lg-4"&gt;
                &lt;div class="card stacked mt-5"&gt;
                    &lt;div class="card-header pt-0"&gt;
                        &lt;span class="card-price"&gt;$49&lt;/span&gt;
                        &lt;h3 class="card-title mt-3 mb-1"&gt;Freelancer&lt;/h3&gt;
                        &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit.&lt;/p&gt;
                    &lt;/div&gt;
                    &lt;div class="card-body"&gt;
                        &lt;ul class="list-group list-group-minimal mb-3"&gt;
                            &lt;li class="list-group-item d-flex justify-content-between align-items-center"&gt;Support forum
                            &lt;/li&gt;
                            &lt;li class="list-group-item d-flex justify-content-between align-items-center"&gt;Free hosting
                            &lt;/li&gt;
                            &lt;li class="list-group-item d-flex justify-content-between align-items-center"&gt;2 hours of support
                            &lt;/li&gt;
                            &lt;li class="list-group-item d-flex justify-content-between align-items-center"&gt;5GB of storage space
                            &lt;/li&gt;
                        &lt;/ul&gt;
                        &lt;a href="" class="btn btn-block btn-primary"&gt;Buy Now&lt;/a&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
          
            &lt;div class="col-md-6 col-lg-4"&gt;
                &lt;div class="card stacked mt-5"&gt;
                    &lt;div class="card-header pt-0"&gt;
                        &lt;span class="card-price"&gt;$89&lt;/span&gt;
                        &lt;h3 class="card-title mt-3 mb-1"&gt;Small business&lt;/h3&gt;
                        &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit.&lt;/p&gt;
                    &lt;/div&gt;
                    &lt;div class="card-body"&gt;
                        &lt;ul class="list-group list-group-minimal mb-3"&gt;
                            &lt;li class="list-group-item d-flex justify-content-between align-items-center"&gt;Unlimited calls
                            &lt;/li&gt;
                            &lt;li class="list-group-item d-flex justify-content-between align-items-center"&gt;Free hosting
                            &lt;/li&gt;
                            &lt;li class="list-group-item d-flex justify-content-between align-items-center"&gt;10 hours of support
                            &lt;/li&gt;
                            &lt;li class="list-group-item d-flex justify-content-between align-items-center"&gt;100GB of storage space
                            &lt;/li&gt;
                        &lt;/ul&gt;
                        &lt;a href="" class="btn btn-block btn-primary"&gt;Buy Now&lt;/a&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class="col-md-6 col-lg-4"&gt;
                &lt;div class="card stacked mt-5"&gt;
                    &lt;div class="card-header pt-0"&gt;
                        &lt;span class="card-price"&gt;$129&lt;/span&gt;
                        &lt;h3 class="card-title mt-3 mb-1"&gt;Larger business&lt;/h3&gt;
                        &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit.&lt;/p&gt;
                    &lt;/div&gt;
                    &lt;div class="card-body"&gt;
                        &lt;ul class="list-group list-group-minimal mb-3"&gt;
                            &lt;li class="list-group-item d-flex justify-content-between align-items-center"&gt;Unlimited calls
                            &lt;/li&gt;
                            &lt;li class="list-group-item d-flex justify-content-between align-items-center"&gt;Free hosting
                            &lt;/li&gt;
                            &lt;li class="list-group-item d-flex justify-content-between align-items-center"&gt;Unlimited hours of support
                            &lt;/li&gt;
                            &lt;li class="list-group-item d-flex justify-content-between align-items-center"&gt;1TB of storage space
                            &lt;/li&gt;
                        &lt;/ul&gt;
                        &lt;a href="" class="btn btn-block btn-primary"&gt;Buy Now&lt;/a&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;</pre>
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
                                        <h4>Basic</h4>
                                    </div>           
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="container">
                                    <section class="pricing-section bg-7 mt-5">
                                        <div class="pricing pricing--norbu">
                                            <div class="pricing__item">
                                                <h3 class="pricing__title">Beginner Savers</h3>
                                                <p class="pricing__sentence">For people who are starting out in the water saving business</p>
                                                <div class="pricing__price"><span class="pricing__currency">$</span>19<span class="pricing__period">/ month</span></div>
                                                <ul class="pricing__feature-list text-center">
                                                    <li class="pricing__feature"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg> Free water saving e-book</li>
                                                    <li class="pricing__feature"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg> Free access to forums</li>
                                                    <li class="pricing__feature"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg> Beginners tips</li>
                                                </ul>
                                                <button class="pricing__action mx-auto mb-4">Buy</button>
                                            </div>
                                            <div class="pricing__item pricing__item--featured">
                                                <h3 class="pricing__title">Advanced Savers</h3>
                                                <p class="pricing__sentence">For experienced water savers who'd like to push their limits</p>
                                                <div class="pricing__price"><span class="pricing__currency">$</span>29<span class="pricing__period">/ month</span></div>
                                                <ul class="pricing__feature-list text-center">
                                                    <li class="pricing__feature"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg> Free water saving e-book</li>
                                                    <li class="pricing__feature"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg> Free access to forums</li>
                                                    <li class="pricing__feature"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg> Advanced saving tips</li>
                                                </ul>
                                                <button class="pricing__action mx-auto mb-4">Buy</button>
                                            </div>
                                            <div class="pricing__item">
                                                <h3 class="pricing__title">Pro Savers</h3>
                                                <p class="pricing__sentence">For all the professionals who'd like to educate others, too</p>
                                                <div class="pricing__price"><span class="pricing__currency">$</span>79<span class="pricing__period">/ month</span></div>
                                                <ul class="pricing__feature-list text-center">
                                                    <li class="pricing__feature"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg> Access to all books</li>
                                                    <li class="pricing__feature"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg> Unlimited board topics</li>
                                                    <li class="pricing__feature"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg> Beginners tips</li>
                                                </ul>
                                                <button class="pricing__action mx-auto mb-4">Buy</button>
                                            </div>
                                        </div>
                                    </section>

                                    <div class="code-section-container">

                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
            &lt;div class="row"&gt;
                &lt;div class="col-lg-12"&gt;
                    &lt;section class="pricing-section bg-7 mt-5"&gt;
                        &lt;div class="pricing pricing--norbu"&gt;
                            &lt;div class="pricing__item"&gt;
                                &lt;h3 class="pricing__title"&gt;Beginner Savers&lt;/h3&gt;
                                &lt;p class="pricing__sentence"&gt;For people who are starting out in the water saving business&lt;/p&gt;
                                &lt;div class="pricing__price"&gt;&lt;span class="pricing__currency"&gt;$&lt;/span&gt;19&lt;span class="pricing__period"&gt;/ month&lt;/span&gt;&lt;/div&gt;
                                &lt;ul class="pricing__feature-list text-center"&gt;
                                    &lt;li class="pricing__feature"&gt;&lt;svg&gt; ... &lt;/svg&gt; Free water saving e-book&lt;/li&gt;
                                    &lt;li class="pricing__feature"&gt;&lt;svg&gt; ... &lt;/svg&gt; Free access to forums&lt;/li&gt;
                                    &lt;li class="pricing__feature"&gt;&lt;svg&gt; ... &lt;/svg&gt; Beginners tips&lt;/li&gt;
                                &lt;/ul&gt;
                                &lt;button class="pricing__action mx-auto mb-4"&gt;Buy&lt;/button&gt;
                            &lt;/div&gt;
                            &lt;div class="pricing__item pricing__item--featured"&gt;
                                &lt;h3 class="pricing__title"&gt;Advanced Savers&lt;/h3&gt;
                                &lt;p class="pricing__sentence"&gt;For experienced water savers who'd like to push their limits&lt;/p&gt;
                                &lt;div class="pricing__price"&gt;&lt;span class="pricing__currency"&gt;$&lt;/span&gt;29&lt;span class="pricing__period"&gt;/ month&lt;/span&gt;&lt;/div&gt;
                                &lt;ul class="pricing__feature-list text-center"&gt;
                                    &lt;li class="pricing__feature"&gt;&lt;svg&gt; ... &lt;/svg&gt; Free water saving e-book&lt;/li&gt;
                                    &lt;li class="pricing__feature"&gt;&lt;svg&gt; ... &lt;/svg&gt; Free access to forums&lt;/li&gt;
                                    &lt;li class="pricing__feature"&gt;&lt;svg&gt; ... &lt;/svg&gt; Advanced saving tips&lt;/li&gt;
                                &lt;/ul&gt;
                                &lt;button class="pricing__action mx-auto mb-4"&gt;Buy&lt;/button&gt;
                            &lt;/div&gt;
                            &lt;div class="pricing__item"&gt;
                                &lt;h3 class="pricing__title"&gt;Pro Savers&lt;/h3&gt;
                                &lt;p class="pricing__sentence"&gt;For all the professionals who'd like to educate others, too&lt;/p&gt;
                                &lt;div class="pricing__price"&gt;&lt;span class="pricing__currency"&gt;$&lt;/span&gt;79&lt;span class="pricing__period"&gt;/ month&lt;/span&gt;&lt;/div&gt;
                                &lt;ul class="pricing__feature-list text-center"&gt;
                                    &lt;li class="pricing__feature"&gt;&lt;svg&gt; ... &lt;/svg&gt; Access to all books&lt;/li&gt;
                                    &lt;li class="pricing__feature"&gt;&lt;svg&gt; ... &lt;/svg&gt; Unlimited board topics&lt;/li&gt;
                                    &lt;li class="pricing__feature"&gt;&lt;svg&gt; ... &lt;/svg&gt; Beginners tips&lt;/li&gt;
                                &lt;/ul&gt;
                                &lt;button class="pricing__action mx-auto mb-4"&gt;Buy&lt;/button&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/section&gt;    
                &lt;/div&gt;
            &lt;/div&gt;</pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>

            </div>
@endsection