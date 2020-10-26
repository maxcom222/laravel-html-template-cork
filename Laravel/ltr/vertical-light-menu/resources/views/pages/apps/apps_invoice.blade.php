@extends('layouts.app')

@section('content')

    <div class="layout-px-spacing">
        <div class="row invoice layout-top-spacing">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="app-hamburger-container">
                    <div class="hamburger"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu chat-menu d-xl-none"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></div>
                </div>
                <div class="doc-container">
                    <div class="tab-title">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-12">
                                <div class="search">
                                    <input type="text" class="form-control" placeholder="Search...">
                                </div>
                                <ul class="nav nav-pills inv-list-container d-block" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <div class="nav-link list-actions" id="invoice-00001" data-invoice-id="00001">
                                            <div class="f-m-body">
                                                <div class="f-head">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                                                </div>
                                                <div class="f-body">
                                                    <p class="invoice-number">Invoice #00001</p>
                                                    <p class="invoice-customer-name"><span>To:</span> Jesse Cory</p>
                                                    <p class="invoice-generated-date">Date: 12 Apr 2019</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="nav-item">
                                        <div class="nav-link list-actions" id="invoice-00002" data-invoice-id="00002">
                                            <div class="f-m-body">
                                                <div class="f-head">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                                                </div>
                                                <div class="f-body">
                                                    <p class="invoice-number">Invoice #00002</p>
                                                    <p class="invoice-customer-name"><span>To:</span> Linda Nelson</p>
                                                    <p class="invoice-generated-date">Date: 13 Apr 2019</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="nav-item">
                                        <div class="nav-link list-actions" id="invoice-00003" data-invoice-id="00003">
                                            <div class="f-m-body">
                                                <div class="f-head">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                                                </div>
                                                <div class="f-body">
                                                    <p class="invoice-number">Invoice #00003</p>
                                                    <p class="invoice-customer-name"><span>To:</span> Andy King</p>
                                                    <p class="invoice-generated-date">Date: 13 Apr 2019</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="nav-item">
                                        <div class="nav-link list-actions" id="invoice-00004" data-invoice-id="00004">
                                            <div class="f-m-body">
                                                <div class="f-head">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                                                </div>
                                                <div class="f-body">
                                                    <p class="invoice-number">Invoice #00004</p>
                                                    <p class="invoice-customer-name"><span>To:</span> Luke Ivory</p>
                                                    <p class="invoice-generated-date">Date: 13 Apr 2019</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="nav-item">
                                        <div class="nav-link list-actions" id="invoice-00005" data-invoice-id="00005">
                                            <div class="f-m-body">
                                                <div class="f-head">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                                                </div>
                                                <div class="f-body">
                                                    <p class="invoice-number">Invoice #00005</p>
                                                    <p class="invoice-customer-name"><span>To:</span> Susan Phillips</p>
                                                    <p class="invoice-generated-date">Date: 14 Apr 2019</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="nav-item">
                                        <div class="nav-link list-actions" id="invoice-00006" data-invoice-id="00006">
                                            <div class="f-m-body">
                                                <div class="f-head">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                                                </div>
                                                <div class="f-body">
                                                    <p class="invoice-number">Invoice #00006</p>
                                                    <p class="invoice-customer-name"><span>To:</span> Thomas Granger</p>
                                                    <p class="invoice-generated-date">Date: 15 Apr 2019</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="nav-item">
                                        <div class="nav-link list-actions" id="invoice-00007" data-invoice-id="00007">
                                            <div class="f-m-body">
                                                <div class="f-head">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                                                </div>
                                                <div class="f-body">
                                                    <p class="invoice-number">Invoice #00007</p>
                                                    <p class="invoice-customer-name"><span>To:</span> Donna Rogers</p>
                                                    <p class="invoice-generated-date">Date: 16 Apr 2019</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="nav-item">
                                        <div class="nav-link list-actions" id="invoice-00008" data-invoice-id="00008">
                                            <div class="f-m-body">
                                                <div class="f-head">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                                                </div>
                                                <div class="f-body">
                                                    <p class="invoice-number">Invoice #00008</p>
                                                    <p class="invoice-customer-name"><span>To:</span> Angie Lamb</p>
                                                    <p class="invoice-generated-date">Date: 17 Apr 2019</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="nav-item">
                                        <div class="nav-link list-actions" id="invoice-00009" data-invoice-id="00009">
                                            <div class="f-m-body">
                                                <div class="f-head">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                                                </div>
                                                <div class="f-body">
                                                    <p class="invoice-number">Invoice #00009</p>
                                                    <p class="invoice-customer-name"><span>To:</span> Mary Mcdonald</p>
                                                    <p class="invoice-generated-date">Date: 17 Apr 2019</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="nav-item">
                                        <div class="nav-link list-actions" id="invoice-00010" data-invoice-id="00010">
                                            <div class="f-m-body">
                                                <div class="f-head">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                                                </div>
                                                <div class="f-body">
                                                    <p class="invoice-number">Invoice #00010</p>
                                                    <p class="invoice-customer-name"><span>To:</span> Thomas Granger</p>
                                                    <p class="invoice-generated-date">Date: 18 Apr 2019</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="nav-item">
                                        <div class="nav-link list-actions" id="invoice-00011" data-invoice-id="00011">
                                            <div class="f-m-body">
                                                <div class="f-head">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                                                </div>
                                                <div class="f-body">
                                                    <p class="invoice-number">Invoice #00011</p>
                                                    <p class="invoice-customer-name"><span>To:</span> Sonia Shaw</p>
                                                    <p class="invoice-generated-date">Date: 19 Apr 2019</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="nav-item">
                                        <div class="nav-link list-actions" id="invoice-00012" data-invoice-id="00012">
                                            <div class="f-m-body">
                                                <div class="f-head">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                                                </div>
                                                <div class="f-body">
                                                    <p class="invoice-number">Invoice #00012</p>
                                                    <p class="invoice-customer-name"><span>To:</span> Laurie Fox</p>
                                                    <p class="invoice-generated-date">Date: 19 Apr 2019</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="nav-item">
                                        <div class="nav-link list-actions" id="invoice-00013" data-invoice-id="00013">
                                            <div class="f-m-body">
                                                <div class="f-head">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                                                </div>
                                                <div class="f-body">
                                                    <p class="invoice-number">Invoice #00013</p>
                                                    <p class="invoice-customer-name"><span>To:</span> Ryan McKillop</p>
                                                    <p class="invoice-generated-date">Date: 19 Apr 2019</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="nav-item">
                                        <div class="nav-link list-actions" id="invoice-00014" data-invoice-id="00014">
                                            <div class="f-m-body">
                                                <div class="f-head">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                                                </div>
                                                <div class="f-body">
                                                    <p class="invoice-number">Invoice #00014</p>
                                                    <p class="invoice-customer-name"><span>To:</span> Jimmy Turner</p>
                                                    <p class="invoice-generated-date">Date: 20 Apr 2019</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="nav-item">
                                        <div class="nav-link list-actions" id="invoice-00015" data-invoice-id="00015">
                                            <div class="f-m-body">
                                                <div class="f-head">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                                                </div>
                                                <div class="f-body">
                                                    <p class="invoice-number">Invoice #00015</p>
                                                    <p class="invoice-customer-name"><span>To:</span> Roxanne</p>
                                                    <p class="invoice-generated-date">Date: 20 Apr 2019</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="invoice-container">
                        <div class="invoice-inbox">

                            <div class="inv-not-selected">
                                <p>Open an invoice from the list.</p>
                            </div>

                            <div class="invoice-header-section">
                                <h4 class="inv-number"></h4>
                                <div class="invoice-action">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-printer action-print" data-toggle="tooltip" data-placement="top" data-original-title="Reply"><polyline points="6 9 6 2 18 2 18 9"></polyline><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path><rect x="6" y="14" width="12" height="8"></rect></svg>
                                </div>
                            </div>
                            
                            <div id="ct" class="">
                                
                                <div class="invoice-00001">
                                    <div class="content-section  animated animatedFadeInUp fadeInUp">

                                        <div class="row inv--head-section">

                                            <div class="col-sm-6 col-12">
                                                <h3 class="in-heading">INVOICE</h3>
                                            </div>
                                            <div class="col-sm-6 col-12 align-self-center text-sm-right">
                                                <div class="company-info">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-hexagon"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path></svg>
                                                    <h5 class="inv-brand-name">CORK</h5>
                                                </div>
                                            </div>
                                            
                                        </div>

                                        <div class="row inv--detail-section">

                                            <div class="col-sm-7 align-self-center">
                                                <p class="inv-to">Invoice To</p>
                                            </div>
                                            <div class="col-sm-5 align-self-center  text-sm-right order-sm-0 order-1">
                                                <p class="inv-detail-title">From : XYZ Company</p>
                                            </div>
                                            
                                            <div class="col-sm-7 align-self-center">
                                                <p class="inv-customer-name">Jesse Cory</p>
                                                <p class="inv-street-addr">405 Mulberry Rd. Mc Grady, NC, 28649</p>
                                                <p class="inv-email-address">redq@company.com</p>
                                            </div>
                                            <div class="col-sm-5 align-self-center  text-sm-right order-2">
                                                <p class="inv-list-number"><span class="inv-title">Invoice Number : </span> <span class="inv-number">[invoice number]</span></p>
                                                <p class="inv-created-date"><span class="inv-title">Invoice Date : </span> <span class="inv-date">20 Aug 2019</span></p>
                                                <p class="inv-due-date"><span class="inv-title">Due Date : </span> <span class="inv-date">26 Aug 2019</span></p>
                                            </div>
                                        </div>

                                        <div class="row inv--product-table-section">
                                            <div class="col-12">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead class="">
                                                            <tr>
                                                                <th scope="col">S.No</th>
                                                                <th scope="col">Items</th>
                                                                <th class="text-right" scope="col">Qty</th>
                                                                <th class="text-right" scope="col">Unit Price</th>
                                                                <th class="text-right" scope="col">Amount</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Electric Shaver</td>
                                                                <td class="text-right">20</td>
                                                                <td class="text-right">$300</td>
                                                                <td class="text-right">$2800</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>Earphones</td>
                                                                <td class="text-right">49</td>
                                                                <td class="text-right">$500</td>
                                                                <td class="text-right">$7000</td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>Wireless Router</td>
                                                                <td class="text-right">30</td>
                                                                <td class="text-right">$500</td>
                                                                <td class="text-right">$3500</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4">
                                            <div class="col-sm-5 col-12 order-sm-0 order-1">
                                                <div class="inv--payment-info">
                                                    <div class="row">
                                                        <div class="col-sm-12 col-12">
                                                            <h6 class=" inv-title">Payment Info:</h6>
                                                        </div>
                                                        <div class="col-sm-4 col-12">
                                                            <p class=" inv-subtitle">Bank Name: </p>
                                                        </div>
                                                        <div class="col-sm-8 col-12">
                                                            <p class="">Bank of America</p>
                                                        </div>
                                                        <div class="col-sm-4 col-12">
                                                            <p class=" inv-subtitle">Account Number : </p>
                                                        </div>
                                                        <div class="col-sm-8 col-12">
                                                            <p class="">1234567890</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-7 col-12 order-sm-1 order-0">
                                                <div class="inv--total-amounts text-sm-right">
                                                    <div class="row">
                                                        <div class="col-sm-8 col-7">
                                                            <p class="">Sub Total: </p>
                                                        </div>
                                                        <div class="col-sm-4 col-5">
                                                            <p class="">$13300</p>
                                                        </div>
                                                        <div class="col-sm-8 col-7">
                                                            <p class="">Tax Amount: </p>
                                                        </div>
                                                        <div class="col-sm-4 col-5">
                                                            <p class="">$700</p>
                                                        </div>
                                                        <div class="col-sm-8 col-7">
                                                            <p class=" discount-rate">Discount : <span class="discount-percentage">5%</span> </p>
                                                        </div>
                                                        <div class="col-sm-4 col-5">
                                                            <p class="">$700</p>
                                                        </div>
                                                        <div class="col-sm-8 col-7 grand-total-title">
                                                            <h4 class="">Grand Total : </h4>
                                                        </div>
                                                        <div class="col-sm-4 col-5 grand-total-amount">
                                                            <h4 class="">$14000</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div> 

                                <div class="invoice-00002">
                                    <div class="content-section  animated animatedFadeInUp fadeInUp">

                                        <div class="row inv--head-section">

                                            <div class="col-sm-6 col-12">
                                                <h3 class="in-heading">INVOICE</h3>
                                            </div>
                                            <div class="col-sm-6 col-12 align-self-center text-sm-right">
                                                <div class="company-info">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-hexagon"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path></svg>
                                                    <h5 class="inv-brand-name">CORK</h5>
                                                </div>
                                            </div>
                                            
                                        </div>

                                        <div class="row inv--detail-section">

                                            <div class="col-sm-7 align-self-center">
                                                <p class="inv-to">Invoice To</p>
                                            </div>
                                            <div class="col-sm-5 align-self-center  text-sm-right order-sm-0 order-1">
                                                <p class="inv-detail-title">From : XYZ Company</p>
                                            </div>
                                            
                                            <div class="col-sm-7 align-self-center">
                                                <p class="inv-customer-name">Linda Nelson</p>
                                                <p class="inv-street-addr">405 Mulberry Rd. Mc Grady, NC, 28649</p>
                                                <p class="inv-email-address">redq@company.com</p>
                                            </div>
                                            <div class="col-sm-5 align-self-center  text-sm-right order-2">
                                                <p class="inv-list-number"><span class="inv-title">Invoice Number : </span> <span class="inv-number">[invoice number]</span></p>
                                                <p class="inv-created-date"><span class="inv-title">Invoice Date : </span> <span class="inv-date">20 Aug 2019</span></p>
                                                <p class="inv-due-date"><span class="inv-title">Due Date : </span> <span class="inv-date">26 Aug 2019</span></p>
                                            </div>
                                        </div>

                                        <div class="row inv--product-table-section">
                                            <div class="col-12">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead class="">
                                                            <tr>
                                                                <th scope="col">S.No</th>
                                                                <th scope="col">Items</th>
                                                                <th class="text-right" scope="col">Qty</th>
                                                                <th class="text-right" scope="col">Unit Price</th>
                                                                <th class="text-right" scope="col">Amount</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Electric Shaver</td>
                                                                <td class="text-right">20</td>
                                                                <td class="text-right">$300</td>
                                                                <td class="text-right">$2800</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>Earphones</td>
                                                                <td class="text-right">49</td>
                                                                <td class="text-right">$500</td>
                                                                <td class="text-right">$7000</td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>Wireless Router</td>
                                                                <td class="text-right">30</td>
                                                                <td class="text-right">$500</td>
                                                                <td class="text-right">$3500</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4">
                                            <div class="col-sm-5 col-12 order-sm-0 order-1">
                                                <div class="inv--payment-info">
                                                    <div class="row">
                                                        <div class="col-sm-12 col-12">
                                                            <h6 class=" inv-title">Payment Info:</h6>
                                                        </div>
                                                        <div class="col-sm-4 col-12">
                                                            <p class=" inv-subtitle">Bank Name: </p>
                                                        </div>
                                                        <div class="col-sm-8 col-12">
                                                            <p class="">Bank of America</p>
                                                        </div>
                                                        <div class="col-sm-4 col-12">
                                                            <p class=" inv-subtitle">Account Number : </p>
                                                        </div>
                                                        <div class="col-sm-8 col-12">
                                                            <p class="">1234567890</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-7 col-12 order-sm-1 order-0">
                                                <div class="inv--total-amounts text-sm-right">
                                                    <div class="row">
                                                        <div class="col-sm-8 col-7">
                                                            <p class="">Sub Total: </p>
                                                        </div>
                                                        <div class="col-sm-4 col-5">
                                                            <p class="">$13300</p>
                                                        </div>
                                                        <div class="col-sm-8 col-7">
                                                            <p class="">Tax Amount: </p>
                                                        </div>
                                                        <div class="col-sm-4 col-5">
                                                            <p class="">$700</p>
                                                        </div>
                                                        <div class="col-sm-8 col-7">
                                                            <p class=" discount-rate">Discount : <span class="discount-percentage">5%</span> </p>
                                                        </div>
                                                        <div class="col-sm-4 col-5">
                                                            <p class="">$700</p>
                                                        </div>
                                                        <div class="col-sm-8 col-7 grand-total-title">
                                                            <h4 class="">Grand Total : </h4>
                                                        </div>
                                                        <div class="col-sm-4 col-5 grand-total-amount">
                                                            <h4 class="">$14000</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="invoice-00003">
                                    <div class="content-section  animated animatedFadeInUp fadeInUp">

                                        <div class="row inv--head-section">

                                            <div class="col-sm-6 col-12">
                                                <h3 class="in-heading">INVOICE</h3>
                                            </div>
                                            <div class="col-sm-6 col-12 align-self-center text-sm-right">
                                                <div class="company-info">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-hexagon"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path></svg>
                                                    <h5 class="inv-brand-name">CORK</h5>
                                                </div>
                                            </div>
                                            
                                        </div>

                                        <div class="row inv--detail-section">

                                            <div class="col-sm-7 align-self-center">
                                                <p class="inv-to">Invoice To</p>
                                            </div>
                                            <div class="col-sm-5 align-self-center  text-sm-right order-sm-0 order-1">
                                                <p class="inv-detail-title">From : XYZ Company</p>
                                            </div>
                                            
                                            <div class="col-sm-7 align-self-center">
                                                <p class="inv-customer-name">Andy King</p>
                                                <p class="inv-street-addr">405 Mulberry Rd. Mc Grady, NC, 28649</p>
                                                <p class="inv-email-address">redq@company.com</p>
                                            </div>
                                            <div class="col-sm-5 align-self-center  text-sm-right order-2">
                                                <p class="inv-list-number"><span class="inv-title">Invoice Number : </span> <span class="inv-number">[invoice number]</span></p>
                                                <p class="inv-created-date"><span class="inv-title">Invoice Date : </span> <span class="inv-date">20 Aug 2019</span></p>
                                                <p class="inv-due-date"><span class="inv-title">Due Date : </span> <span class="inv-date">26 Aug 2019</span></p>
                                            </div>
                                        </div>

                                        <div class="row inv--product-table-section">
                                            <div class="col-12">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead class="">
                                                            <tr>
                                                                <th scope="col">S.No</th>
                                                                <th scope="col">Items</th>
                                                                <th class="text-right" scope="col">Qty</th>
                                                                <th class="text-right" scope="col">Unit Price</th>
                                                                <th class="text-right" scope="col">Amount</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Electric Shaver</td>
                                                                <td class="text-right">20</td>
                                                                <td class="text-right">$300</td>
                                                                <td class="text-right">$2800</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>Earphones</td>
                                                                <td class="text-right">49</td>
                                                                <td class="text-right">$500</td>
                                                                <td class="text-right">$7000</td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>Wireless Router</td>
                                                                <td class="text-right">30</td>
                                                                <td class="text-right">$500</td>
                                                                <td class="text-right">$3500</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4">
                                            <div class="col-sm-5 col-12 order-sm-0 order-1">
                                                <div class="inv--payment-info">
                                                    <div class="row">
                                                        <div class="col-sm-12 col-12">
                                                            <h6 class=" inv-title">Payment Info:</h6>
                                                        </div>
                                                        <div class="col-sm-4 col-12">
                                                            <p class=" inv-subtitle">Bank Name: </p>
                                                        </div>
                                                        <div class="col-sm-8 col-12">
                                                            <p class="">Bank of America</p>
                                                        </div>
                                                        <div class="col-sm-4 col-12">
                                                            <p class=" inv-subtitle">Account Number : </p>
                                                        </div>
                                                        <div class="col-sm-8 col-12">
                                                            <p class="">1234567890</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-7 col-12 order-sm-1 order-0">
                                                <div class="inv--total-amounts text-sm-right">
                                                    <div class="row">
                                                        <div class="col-sm-8 col-7">
                                                            <p class="">Sub Total: </p>
                                                        </div>
                                                        <div class="col-sm-4 col-5">
                                                            <p class="">$13300</p>
                                                        </div>
                                                        <div class="col-sm-8 col-7">
                                                            <p class="">Tax Amount: </p>
                                                        </div>
                                                        <div class="col-sm-4 col-5">
                                                            <p class="">$700</p>
                                                        </div>
                                                        <div class="col-sm-8 col-7">
                                                            <p class=" discount-rate">Discount : <span class="discount-percentage">5%</span> </p>
                                                        </div>
                                                        <div class="col-sm-4 col-5">
                                                            <p class="">$700</p>
                                                        </div>
                                                        <div class="col-sm-8 col-7 grand-total-title">
                                                            <h4 class="">Grand Total : </h4>
                                                        </div>
                                                        <div class="col-sm-4 col-5 grand-total-amount">
                                                            <h4 class="">$14000</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="invoice-00004">
                                    <div class="content-section  animated animatedFadeInUp fadeInUp">

                                        <div class="row inv--head-section">

                                            <div class="col-sm-6 col-12">
                                                <h3 class="in-heading">INVOICE</h3>
                                            </div>
                                            <div class="col-sm-6 col-12 align-self-center text-sm-right">
                                                <div class="company-info">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-hexagon"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path></svg>
                                                    <h5 class="inv-brand-name">CORK</h5>
                                                </div>
                                            </div>
                                            
                                        </div>

                                        <div class="row inv--detail-section">

                                            <div class="col-sm-7 align-self-center">
                                                <p class="inv-to">Invoice To</p>
                                            </div>
                                            <div class="col-sm-5 align-self-center  text-sm-right order-sm-0 order-1">
                                                <p class="inv-detail-title">From : XYZ Company</p>
                                            </div>
                                            
                                            <div class="col-sm-7 align-self-center">
                                                <p class="inv-customer-name">Luke Ivory</p>
                                                <p class="inv-street-addr">405 Mulberry Rd. Mc Grady, NC, 28649</p>
                                                <p class="inv-email-address">redq@company.com</p>
                                            </div>
                                            <div class="col-sm-5 align-self-center  text-sm-right order-2">
                                                <p class="inv-list-number"><span class="inv-title">Invoice Number : </span> <span class="inv-number">[invoice number]</span></p>
                                                <p class="inv-created-date"><span class="inv-title">Invoice Date : </span> <span class="inv-date">20 Aug 2019</span></p>
                                                <p class="inv-due-date"><span class="inv-title">Due Date : </span> <span class="inv-date">26 Aug 2019</span></p>
                                            </div>
                                        </div>

                                        <div class="row inv--product-table-section">
                                            <div class="col-12">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead class="">
                                                            <tr>
                                                                <th scope="col">S.No</th>
                                                                <th scope="col">Items</th>
                                                                <th class="text-right" scope="col">Qty</th>
                                                                <th class="text-right" scope="col">Unit Price</th>
                                                                <th class="text-right" scope="col">Amount</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Electric Shaver</td>
                                                                <td class="text-right">20</td>
                                                                <td class="text-right">$300</td>
                                                                <td class="text-right">$2800</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>Earphones</td>
                                                                <td class="text-right">49</td>
                                                                <td class="text-right">$500</td>
                                                                <td class="text-right">$7000</td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>Wireless Router</td>
                                                                <td class="text-right">30</td>
                                                                <td class="text-right">$500</td>
                                                                <td class="text-right">$3500</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4">
                                            <div class="col-sm-5 col-12 order-sm-0 order-1">
                                                <div class="inv--payment-info">
                                                    <div class="row">
                                                        <div class="col-sm-12 col-12">
                                                            <h6 class=" inv-title">Payment Info:</h6>
                                                        </div>
                                                        <div class="col-sm-4 col-12">
                                                            <p class=" inv-subtitle">Bank Name: </p>
                                                        </div>
                                                        <div class="col-sm-8 col-12">
                                                            <p class="">Bank of America</p>
                                                        </div>
                                                        <div class="col-sm-4 col-12">
                                                            <p class=" inv-subtitle">Account Number : </p>
                                                        </div>
                                                        <div class="col-sm-8 col-12">
                                                            <p class="">1234567890</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-7 col-12 order-sm-1 order-0">
                                                <div class="inv--total-amounts text-sm-right">
                                                    <div class="row">
                                                        <div class="col-sm-8 col-7">
                                                            <p class="">Sub Total: </p>
                                                        </div>
                                                        <div class="col-sm-4 col-5">
                                                            <p class="">$13300</p>
                                                        </div>
                                                        <div class="col-sm-8 col-7">
                                                            <p class="">Tax Amount: </p>
                                                        </div>
                                                        <div class="col-sm-4 col-5">
                                                            <p class="">$700</p>
                                                        </div>
                                                        <div class="col-sm-8 col-7">
                                                            <p class=" discount-rate">Discount : <span class="discount-percentage">5%</span> </p>
                                                        </div>
                                                        <div class="col-sm-4 col-5">
                                                            <p class="">$700</p>
                                                        </div>
                                                        <div class="col-sm-8 col-7 grand-total-title">
                                                            <h4 class="">Grand Total : </h4>
                                                        </div>
                                                        <div class="col-sm-4 col-5 grand-total-amount">
                                                            <h4 class="">$14000</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="invoice-00005">
                                    <div class="content-section  animated animatedFadeInUp fadeInUp">

                                        <div class="row inv--head-section">

                                            <div class="col-sm-6 col-12">
                                                <h3 class="in-heading">INVOICE</h3>
                                            </div>
                                            <div class="col-sm-6 col-12 align-self-center text-sm-right">
                                                <div class="company-info">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-hexagon"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path></svg>
                                                    <h5 class="inv-brand-name">CORK</h5>
                                                </div>
                                            </div>
                                            
                                        </div>

                                        <div class="row inv--detail-section">

                                            <div class="col-sm-7 align-self-center">
                                                <p class="inv-to">Invoice To</p>
                                            </div>
                                            <div class="col-sm-5 align-self-center  text-sm-right order-sm-0 order-1">
                                                <p class="inv-detail-title">From : XYZ Company</p>
                                            </div>
                                            
                                            <div class="col-sm-7 align-self-center">
                                                <p class="inv-customer-name">Susan Phillips</p>
                                                <p class="inv-street-addr">405 Mulberry Rd. Mc Grady, NC, 28649</p>
                                                <p class="inv-email-address">redq@company.com</p>
                                            </div>
                                            <div class="col-sm-5 align-self-center  text-sm-right order-2">
                                                <p class="inv-list-number"><span class="inv-title">Invoice Number : </span> <span class="inv-number">[invoice number]</span></p>
                                                <p class="inv-created-date"><span class="inv-title">Invoice Date : </span> <span class="inv-date">20 Aug 2019</span></p>
                                                <p class="inv-due-date"><span class="inv-title">Due Date : </span> <span class="inv-date">26 Aug 2019</span></p>
                                            </div>
                                        </div>

                                        <div class="row inv--product-table-section">
                                            <div class="col-12">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead class="">
                                                            <tr>
                                                                <th scope="col">S.No</th>
                                                                <th scope="col">Items</th>
                                                                <th class="text-right" scope="col">Qty</th>
                                                                <th class="text-right" scope="col">Unit Price</th>
                                                                <th class="text-right" scope="col">Amount</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Electric Shaver</td>
                                                                <td class="text-right">20</td>
                                                                <td class="text-right">$300</td>
                                                                <td class="text-right">$2800</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>Earphones</td>
                                                                <td class="text-right">49</td>
                                                                <td class="text-right">$500</td>
                                                                <td class="text-right">$7000</td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>Wireless Router</td>
                                                                <td class="text-right">30</td>
                                                                <td class="text-right">$500</td>
                                                                <td class="text-right">$3500</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4">
                                            <div class="col-sm-5 col-12 order-sm-0 order-1">
                                                <div class="inv--payment-info">
                                                    <div class="row">
                                                        <div class="col-sm-12 col-12">
                                                            <h6 class=" inv-title">Payment Info:</h6>
                                                        </div>
                                                        <div class="col-sm-4 col-12">
                                                            <p class=" inv-subtitle">Bank Name: </p>
                                                        </div>
                                                        <div class="col-sm-8 col-12">
                                                            <p class="">Bank of America</p>
                                                        </div>
                                                        <div class="col-sm-4 col-12">
                                                            <p class=" inv-subtitle">Account Number : </p>
                                                        </div>
                                                        <div class="col-sm-8 col-12">
                                                            <p class="">1234567890</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-7 col-12 order-sm-1 order-0">
                                                <div class="inv--total-amounts text-sm-right">
                                                    <div class="row">
                                                        <div class="col-sm-8 col-7">
                                                            <p class="">Sub Total: </p>
                                                        </div>
                                                        <div class="col-sm-4 col-5">
                                                            <p class="">$13300</p>
                                                        </div>
                                                        <div class="col-sm-8 col-7">
                                                            <p class="">Tax Amount: </p>
                                                        </div>
                                                        <div class="col-sm-4 col-5">
                                                            <p class="">$700</p>
                                                        </div>
                                                        <div class="col-sm-8 col-7">
                                                            <p class=" discount-rate">Discount : <span class="discount-percentage">5%</span> </p>
                                                        </div>
                                                        <div class="col-sm-4 col-5">
                                                            <p class="">$700</p>
                                                        </div>
                                                        <div class="col-sm-8 col-7 grand-total-title">
                                                            <h4 class="">Grand Total : </h4>
                                                        </div>
                                                        <div class="col-sm-4 col-5 grand-total-amount">
                                                            <h4 class="">$14000</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="invoice-00006">
                                    <div class="content-section  animated animatedFadeInUp fadeInUp">

                                        <div class="row inv--head-section">

                                            <div class="col-sm-6 col-12">
                                                <h3 class="in-heading">INVOICE</h3>
                                            </div>
                                            <div class="col-sm-6 col-12 align-self-center text-sm-right">
                                                <div class="company-info">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-hexagon"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path></svg>
                                                    <h5 class="inv-brand-name">CORK</h5>
                                                </div>
                                            </div>
                                            
                                        </div>

                                        <div class="row inv--detail-section">

                                            <div class="col-sm-7 align-self-center">
                                                <p class="inv-to">Invoice To</p>
                                            </div>
                                            <div class="col-sm-5 align-self-center  text-sm-right order-sm-0 order-1">
                                                <p class="inv-detail-title">From : XYZ Company</p>
                                            </div>
                                            
                                            <div class="col-sm-7 align-self-center">
                                                <p class="inv-customer-name">Thomas Granger</p>
                                                <p class="inv-street-addr">405 Mulberry Rd. Mc Grady, NC, 28649</p>
                                                <p class="inv-email-address">redq@company.com</p>
                                            </div>
                                            <div class="col-sm-5 align-self-center  text-sm-right order-2">
                                                <p class="inv-list-number"><span class="inv-title">Invoice Number : </span> <span class="inv-number">[invoice number]</span></p>
                                                <p class="inv-created-date"><span class="inv-title">Invoice Date : </span> <span class="inv-date">20 Aug 2019</span></p>
                                                <p class="inv-due-date"><span class="inv-title">Due Date : </span> <span class="inv-date">26 Aug 2019</span></p>
                                            </div>
                                        </div>

                                        <div class="row inv--product-table-section">
                                            <div class="col-12">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead class="">
                                                            <tr>
                                                                <th scope="col">S.No</th>
                                                                <th scope="col">Items</th>
                                                                <th class="text-right" scope="col">Qty</th>
                                                                <th class="text-right" scope="col">Unit Price</th>
                                                                <th class="text-right" scope="col">Amount</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Electric Shaver</td>
                                                                <td class="text-right">20</td>
                                                                <td class="text-right">$300</td>
                                                                <td class="text-right">$2800</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>Earphones</td>
                                                                <td class="text-right">49</td>
                                                                <td class="text-right">$500</td>
                                                                <td class="text-right">$7000</td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>Wireless Router</td>
                                                                <td class="text-right">30</td>
                                                                <td class="text-right">$500</td>
                                                                <td class="text-right">$3500</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4">
                                            <div class="col-sm-5 col-12 order-sm-0 order-1">
                                                <div class="inv--payment-info">
                                                    <div class="row">
                                                        <div class="col-sm-12 col-12">
                                                            <h6 class=" inv-title">Payment Info:</h6>
                                                        </div>
                                                        <div class="col-sm-4 col-12">
                                                            <p class=" inv-subtitle">Bank Name: </p>
                                                        </div>
                                                        <div class="col-sm-8 col-12">
                                                            <p class="">Bank of America</p>
                                                        </div>
                                                        <div class="col-sm-4 col-12">
                                                            <p class=" inv-subtitle">Account Number : </p>
                                                        </div>
                                                        <div class="col-sm-8 col-12">
                                                            <p class="">1234567890</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-7 col-12 order-sm-1 order-0">
                                                <div class="inv--total-amounts text-sm-right">
                                                    <div class="row">
                                                        <div class="col-sm-8 col-7">
                                                            <p class="">Sub Total: </p>
                                                        </div>
                                                        <div class="col-sm-4 col-5">
                                                            <p class="">$13300</p>
                                                        </div>
                                                        <div class="col-sm-8 col-7">
                                                            <p class="">Tax Amount: </p>
                                                        </div>
                                                        <div class="col-sm-4 col-5">
                                                            <p class="">$700</p>
                                                        </div>
                                                        <div class="col-sm-8 col-7">
                                                            <p class=" discount-rate">Discount : <span class="discount-percentage">5%</span> </p>
                                                        </div>
                                                        <div class="col-sm-4 col-5">
                                                            <p class="">$700</p>
                                                        </div>
                                                        <div class="col-sm-8 col-7 grand-total-title">
                                                            <h4 class="">Grand Total : </h4>
                                                        </div>
                                                        <div class="col-sm-4 col-5 grand-total-amount">
                                                            <h4 class="">$14000</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="invoice-00007">
                                    <div class="content-section  animated animatedFadeInUp fadeInUp">

                                        <div class="row inv--head-section">

                                            <div class="col-sm-6 col-12">
                                                <h3 class="in-heading">INVOICE</h3>
                                            </div>
                                            <div class="col-sm-6 col-12 align-self-center text-sm-right">
                                                <div class="company-info">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-hexagon"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path></svg>
                                                    <h5 class="inv-brand-name">CORK</h5>
                                                </div>
                                            </div>
                                            
                                        </div>

                                        <div class="row inv--detail-section">

                                            <div class="col-sm-7 align-self-center">
                                                <p class="inv-to">Invoice To</p>
                                            </div>
                                            <div class="col-sm-5 align-self-center  text-sm-right order-sm-0 order-1">
                                                <p class="inv-detail-title">From : XYZ Company</p>
                                            </div>
                                            
                                            <div class="col-sm-7 align-self-center">
                                                <p class="inv-customer-name">Donna Rogers</p>
                                                <p class="inv-street-addr">405 Mulberry Rd. Mc Grady, NC, 28649</p>
                                                <p class="inv-email-address">redq@company.com</p>
                                            </div>
                                            <div class="col-sm-5 align-self-center  text-sm-right order-2">
                                                <p class="inv-list-number"><span class="inv-title">Invoice Number : </span> <span class="inv-number">[invoice number]</span></p>
                                                <p class="inv-created-date"><span class="inv-title">Invoice Date : </span> <span class="inv-date">20 Aug 2019</span></p>
                                                <p class="inv-due-date"><span class="inv-title">Due Date : </span> <span class="inv-date">26 Aug 2019</span></p>
                                            </div>
                                        </div>

                                        <div class="row inv--product-table-section">
                                            <div class="col-12">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead class="">
                                                            <tr>
                                                                <th scope="col">S.No</th>
                                                                <th scope="col">Items</th>
                                                                <th class="text-right" scope="col">Qty</th>
                                                                <th class="text-right" scope="col">Unit Price</th>
                                                                <th class="text-right" scope="col">Amount</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Electric Shaver</td>
                                                                <td class="text-right">20</td>
                                                                <td class="text-right">$300</td>
                                                                <td class="text-right">$2800</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>Earphones</td>
                                                                <td class="text-right">49</td>
                                                                <td class="text-right">$500</td>
                                                                <td class="text-right">$7000</td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>Wireless Router</td>
                                                                <td class="text-right">30</td>
                                                                <td class="text-right">$500</td>
                                                                <td class="text-right">$3500</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4">
                                            <div class="col-sm-5 col-12 order-sm-0 order-1">
                                                <div class="inv--payment-info">
                                                    <div class="row">
                                                        <div class="col-sm-12 col-12">
                                                            <h6 class=" inv-title">Payment Info:</h6>
                                                        </div>
                                                        <div class="col-sm-4 col-12">
                                                            <p class=" inv-subtitle">Bank Name: </p>
                                                        </div>
                                                        <div class="col-sm-8 col-12">
                                                            <p class="">Bank of America</p>
                                                        </div>
                                                        <div class="col-sm-4 col-12">
                                                            <p class=" inv-subtitle">Account Number : </p>
                                                        </div>
                                                        <div class="col-sm-8 col-12">
                                                            <p class="">1234567890</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-7 col-12 order-sm-1 order-0">
                                                <div class="inv--total-amounts text-sm-right">
                                                    <div class="row">
                                                        <div class="col-sm-8 col-7">
                                                            <p class="">Sub Total: </p>
                                                        </div>
                                                        <div class="col-sm-4 col-5">
                                                            <p class="">$13300</p>
                                                        </div>
                                                        <div class="col-sm-8 col-7">
                                                            <p class="">Tax Amount: </p>
                                                        </div>
                                                        <div class="col-sm-4 col-5">
                                                            <p class="">$700</p>
                                                        </div>
                                                        <div class="col-sm-8 col-7">
                                                            <p class=" discount-rate">Discount : <span class="discount-percentage">5%</span> </p>
                                                        </div>
                                                        <div class="col-sm-4 col-5">
                                                            <p class="">$700</p>
                                                        </div>
                                                        <div class="col-sm-8 col-7 grand-total-title">
                                                            <h4 class="">Grand Total : </h4>
                                                        </div>
                                                        <div class="col-sm-4 col-5 grand-total-amount">
                                                            <h4 class="">$14000</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="invoice-00008">
                                    <div class="content-section  animated animatedFadeInUp fadeInUp">

                                        <div class="row inv--head-section">

                                            <div class="col-sm-6 col-12">
                                                <h3 class="in-heading">INVOICE</h3>
                                            </div>
                                            <div class="col-sm-6 col-12 align-self-center text-sm-right">
                                                <div class="company-info">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-hexagon"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path></svg>
                                                    <h5 class="inv-brand-name">CORK</h5>
                                                </div>
                                            </div>
                                            
                                        </div>

                                        <div class="row inv--detail-section">

                                            <div class="col-sm-7 align-self-center">
                                                <p class="inv-to">Invoice To</p>
                                            </div>
                                            <div class="col-sm-5 align-self-center  text-sm-right order-sm-0 order-1">
                                                <p class="inv-detail-title">From : XYZ Company</p>
                                            </div>
                                            
                                            <div class="col-sm-7 align-self-center">
                                                <p class="inv-customer-name">Angie Lamb</p>
                                                <p class="inv-street-addr">405 Mulberry Rd. Mc Grady, NC, 28649</p>
                                                <p class="inv-email-address">redq@company.com</p>
                                            </div>
                                            <div class="col-sm-5 align-self-center  text-sm-right order-2">
                                                <p class="inv-list-number"><span class="inv-title">Invoice Number : </span> <span class="inv-number">[invoice number]</span></p>
                                                <p class="inv-created-date"><span class="inv-title">Invoice Date : </span> <span class="inv-date">20 Aug 2019</span></p>
                                                <p class="inv-due-date"><span class="inv-title">Due Date : </span> <span class="inv-date">26 Aug 2019</span></p>
                                            </div>
                                        </div>

                                        <div class="row inv--product-table-section">
                                            <div class="col-12">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead class="">
                                                            <tr>
                                                                <th scope="col">S.No</th>
                                                                <th scope="col">Items</th>
                                                                <th class="text-right" scope="col">Qty</th>
                                                                <th class="text-right" scope="col">Unit Price</th>
                                                                <th class="text-right" scope="col">Amount</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Electric Shaver</td>
                                                                <td class="text-right">20</td>
                                                                <td class="text-right">$300</td>
                                                                <td class="text-right">$2800</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>Earphones</td>
                                                                <td class="text-right">49</td>
                                                                <td class="text-right">$500</td>
                                                                <td class="text-right">$7000</td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>Wireless Router</td>
                                                                <td class="text-right">30</td>
                                                                <td class="text-right">$500</td>
                                                                <td class="text-right">$3500</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4">
                                            <div class="col-sm-5 col-12 order-sm-0 order-1">
                                                <div class="inv--payment-info">
                                                    <div class="row">
                                                        <div class="col-sm-12 col-12">
                                                            <h6 class=" inv-title">Payment Info:</h6>
                                                        </div>
                                                        <div class="col-sm-4 col-12">
                                                            <p class=" inv-subtitle">Bank Name: </p>
                                                        </div>
                                                        <div class="col-sm-8 col-12">
                                                            <p class="">Bank of America</p>
                                                        </div>
                                                        <div class="col-sm-4 col-12">
                                                            <p class=" inv-subtitle">Account Number : </p>
                                                        </div>
                                                        <div class="col-sm-8 col-12">
                                                            <p class="">1234567890</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-7 col-12 order-sm-1 order-0">
                                                <div class="inv--total-amounts text-sm-right">
                                                    <div class="row">
                                                        <div class="col-sm-8 col-7">
                                                            <p class="">Sub Total: </p>
                                                        </div>
                                                        <div class="col-sm-4 col-5">
                                                            <p class="">$13300</p>
                                                        </div>
                                                        <div class="col-sm-8 col-7">
                                                            <p class="">Tax Amount: </p>
                                                        </div>
                                                        <div class="col-sm-4 col-5">
                                                            <p class="">$700</p>
                                                        </div>
                                                        <div class="col-sm-8 col-7">
                                                            <p class=" discount-rate">Discount : <span class="discount-percentage">5%</span> </p>
                                                        </div>
                                                        <div class="col-sm-4 col-5">
                                                            <p class="">$700</p>
                                                        </div>
                                                        <div class="col-sm-8 col-7 grand-total-title">
                                                            <h4 class="">Grand Total : </h4>
                                                        </div>
                                                        <div class="col-sm-4 col-5 grand-total-amount">
                                                            <h4 class="">$14000</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="invoice-00009">
                                    <div class="content-section  animated animatedFadeInUp fadeInUp">

                                        <div class="row inv--head-section">

                                            <div class="col-sm-6 col-12">
                                                <h3 class="in-heading">INVOICE</h3>
                                            </div>
                                            <div class="col-sm-6 col-12 align-self-center text-sm-right">
                                                <div class="company-info">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-hexagon"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path></svg>
                                                    <h5 class="inv-brand-name">CORK</h5>
                                                </div>
                                            </div>
                                            
                                        </div>

                                        <div class="row inv--detail-section">

                                            <div class="col-sm-7 align-self-center">
                                                <p class="inv-to">Invoice To</p>
                                            </div>
                                            <div class="col-sm-5 align-self-center  text-sm-right order-sm-0 order-1">
                                                <p class="inv-detail-title">From : XYZ Company</p>
                                            </div>
                                            
                                            <div class="col-sm-7 align-self-center">
                                                <p class="inv-customer-name">Mary Mcdonald</p>
                                                <p class="inv-street-addr">405 Mulberry Rd. Mc Grady, NC, 28649</p>
                                                <p class="inv-email-address">redq@company.com</p>
                                            </div>
                                            <div class="col-sm-5 align-self-center  text-sm-right order-2">
                                                <p class="inv-list-number"><span class="inv-title">Invoice Number : </span> <span class="inv-number">[invoice number]</span></p>
                                                <p class="inv-created-date"><span class="inv-title">Invoice Date : </span> <span class="inv-date">20 Aug 2019</span></p>
                                                <p class="inv-due-date"><span class="inv-title">Due Date : </span> <span class="inv-date">26 Aug 2019</span></p>
                                            </div>
                                        </div>

                                        <div class="row inv--product-table-section">
                                            <div class="col-12">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead class="">
                                                            <tr>
                                                                <th scope="col">S.No</th>
                                                                <th scope="col">Items</th>
                                                                <th class="text-right" scope="col">Qty</th>
                                                                <th class="text-right" scope="col">Unit Price</th>
                                                                <th class="text-right" scope="col">Amount</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Electric Shaver</td>
                                                                <td class="text-right">20</td>
                                                                <td class="text-right">$300</td>
                                                                <td class="text-right">$2800</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>Earphones</td>
                                                                <td class="text-right">49</td>
                                                                <td class="text-right">$500</td>
                                                                <td class="text-right">$7000</td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>Wireless Router</td>
                                                                <td class="text-right">30</td>
                                                                <td class="text-right">$500</td>
                                                                <td class="text-right">$3500</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4">
                                            <div class="col-sm-5 col-12 order-sm-0 order-1">
                                                <div class="inv--payment-info">
                                                    <div class="row">
                                                        <div class="col-sm-12 col-12">
                                                            <h6 class=" inv-title">Payment Info:</h6>
                                                        </div>
                                                        <div class="col-sm-4 col-12">
                                                            <p class=" inv-subtitle">Bank Name: </p>
                                                        </div>
                                                        <div class="col-sm-8 col-12">
                                                            <p class="">Bank of America</p>
                                                        </div>
                                                        <div class="col-sm-4 col-12">
                                                            <p class=" inv-subtitle">Account Number : </p>
                                                        </div>
                                                        <div class="col-sm-8 col-12">
                                                            <p class="">1234567890</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-7 col-12 order-sm-1 order-0">
                                                <div class="inv--total-amounts text-sm-right">
                                                    <div class="row">
                                                        <div class="col-sm-8 col-7">
                                                            <p class="">Sub Total: </p>
                                                        </div>
                                                        <div class="col-sm-4 col-5">
                                                            <p class="">$13300</p>
                                                        </div>
                                                        <div class="col-sm-8 col-7">
                                                            <p class="">Tax Amount: </p>
                                                        </div>
                                                        <div class="col-sm-4 col-5">
                                                            <p class="">$700</p>
                                                        </div>
                                                        <div class="col-sm-8 col-7">
                                                            <p class=" discount-rate">Discount : <span class="discount-percentage">5%</span> </p>
                                                        </div>
                                                        <div class="col-sm-4 col-5">
                                                            <p class="">$700</p>
                                                        </div>
                                                        <div class="col-sm-8 col-7 grand-total-title">
                                                            <h4 class="">Grand Total : </h4>
                                                        </div>
                                                        <div class="col-sm-4 col-5 grand-total-amount">
                                                            <h4 class="">$14000</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="invoice-00010">
                                    <div class="content-section  animated animatedFadeInUp fadeInUp">

                                        <div class="row inv--head-section">

                                            <div class="col-sm-6 col-12">
                                                <h3 class="in-heading">INVOICE</h3>
                                            </div>
                                            <div class="col-sm-6 col-12 align-self-center text-sm-right">
                                                <div class="company-info">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-hexagon"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path></svg>
                                                    <h5 class="inv-brand-name">CORK</h5>
                                                </div>
                                            </div>
                                            
                                        </div>

                                        <div class="row inv--detail-section">

                                            <div class="col-sm-7 align-self-center">
                                                <p class="inv-to">Invoice To</p>
                                            </div>
                                            <div class="col-sm-5 align-self-center  text-sm-right order-sm-0 order-1">
                                                <p class="inv-detail-title">From : XYZ Company</p>
                                            </div>
                                            
                                            <div class="col-sm-7 align-self-center">
                                                <p class="inv-customer-name">Thomas Granger</p>
                                                <p class="inv-street-addr">405 Mulberry Rd. Mc Grady, NC, 28649</p>
                                                <p class="inv-email-address">redq@company.com</p>
                                            </div>
                                            <div class="col-sm-5 align-self-center  text-sm-right order-2">
                                                <p class="inv-list-number"><span class="inv-title">Invoice Number : </span> <span class="inv-number">[invoice number]</span></p>
                                                <p class="inv-created-date"><span class="inv-title">Invoice Date : </span> <span class="inv-date">20 Aug 2019</span></p>
                                                <p class="inv-due-date"><span class="inv-title">Due Date : </span> <span class="inv-date">26 Aug 2019</span></p>
                                            </div>
                                        </div>

                                        <div class="row inv--product-table-section">
                                            <div class="col-12">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead class="">
                                                            <tr>
                                                                <th scope="col">S.No</th>
                                                                <th scope="col">Items</th>
                                                                <th class="text-right" scope="col">Qty</th>
                                                                <th class="text-right" scope="col">Unit Price</th>
                                                                <th class="text-right" scope="col">Amount</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Electric Shaver</td>
                                                                <td class="text-right">20</td>
                                                                <td class="text-right">$300</td>
                                                                <td class="text-right">$2800</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>Earphones</td>
                                                                <td class="text-right">49</td>
                                                                <td class="text-right">$500</td>
                                                                <td class="text-right">$7000</td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>Wireless Router</td>
                                                                <td class="text-right">30</td>
                                                                <td class="text-right">$500</td>
                                                                <td class="text-right">$3500</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4">
                                            <div class="col-sm-5 col-12 order-sm-0 order-1">
                                                <div class="inv--payment-info">
                                                    <div class="row">
                                                        <div class="col-sm-12 col-12">
                                                            <h6 class=" inv-title">Payment Info:</h6>
                                                        </div>
                                                        <div class="col-sm-4 col-12">
                                                            <p class=" inv-subtitle">Bank Name: </p>
                                                        </div>
                                                        <div class="col-sm-8 col-12">
                                                            <p class="">Bank of America</p>
                                                        </div>
                                                        <div class="col-sm-4 col-12">
                                                            <p class=" inv-subtitle">Account Number : </p>
                                                        </div>
                                                        <div class="col-sm-8 col-12">
                                                            <p class="">1234567890</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-7 col-12 order-sm-1 order-0">
                                                <div class="inv--total-amounts text-sm-right">
                                                    <div class="row">
                                                        <div class="col-sm-8 col-7">
                                                            <p class="">Sub Total: </p>
                                                        </div>
                                                        <div class="col-sm-4 col-5">
                                                            <p class="">$13300</p>
                                                        </div>
                                                        <div class="col-sm-8 col-7">
                                                            <p class="">Tax Amount: </p>
                                                        </div>
                                                        <div class="col-sm-4 col-5">
                                                            <p class="">$700</p>
                                                        </div>
                                                        <div class="col-sm-8 col-7">
                                                            <p class=" discount-rate">Discount : <span class="discount-percentage">5%</span> </p>
                                                        </div>
                                                        <div class="col-sm-4 col-5">
                                                            <p class="">$700</p>
                                                        </div>
                                                        <div class="col-sm-8 col-7 grand-total-title">
                                                            <h4 class="">Grand Total : </h4>
                                                        </div>
                                                        <div class="col-sm-4 col-5 grand-total-amount">
                                                            <h4 class="">$14000</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="invoice-00011">
                                    <div class="content-section  animated animatedFadeInUp fadeInUp">

                                        <div class="row inv--head-section">

                                            <div class="col-sm-6 col-12">
                                                <h3 class="in-heading">INVOICE</h3>
                                            </div>
                                            <div class="col-sm-6 col-12 align-self-center text-sm-right">
                                                <div class="company-info">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-hexagon"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path></svg>
                                                    <h5 class="inv-brand-name">CORK</h5>
                                                </div>
                                            </div>
                                            
                                        </div>

                                        <div class="row inv--detail-section">

                                            <div class="col-sm-7 align-self-center">
                                                <p class="inv-to">Invoice To</p>
                                            </div>
                                            <div class="col-sm-5 align-self-center  text-sm-right order-sm-0 order-1">
                                                <p class="inv-detail-title">From : XYZ Company</p>
                                            </div>
                                            
                                            <div class="col-sm-7 align-self-center">
                                                <p class="inv-customer-name">Sonia Shaw</p>
                                                <p class="inv-street-addr">405 Mulberry Rd. Mc Grady, NC, 28649</p>
                                                <p class="inv-email-address">redq@company.com</p>
                                            </div>
                                            <div class="col-sm-5 align-self-center  text-sm-right order-2">
                                                <p class="inv-list-number"><span class="inv-title">Invoice Number : </span> <span class="inv-number">[invoice number]</span></p>
                                                <p class="inv-created-date"><span class="inv-title">Invoice Date : </span> <span class="inv-date">20 Aug 2019</span></p>
                                                <p class="inv-due-date"><span class="inv-title">Due Date : </span> <span class="inv-date">26 Aug 2019</span></p>
                                            </div>
                                        </div>

                                        <div class="row inv--product-table-section">
                                            <div class="col-12">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead class="">
                                                            <tr>
                                                                <th scope="col">S.No</th>
                                                                <th scope="col">Items</th>
                                                                <th class="text-right" scope="col">Qty</th>
                                                                <th class="text-right" scope="col">Unit Price</th>
                                                                <th class="text-right" scope="col">Amount</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Electric Shaver</td>
                                                                <td class="text-right">20</td>
                                                                <td class="text-right">$300</td>
                                                                <td class="text-right">$2800</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>Earphones</td>
                                                                <td class="text-right">49</td>
                                                                <td class="text-right">$500</td>
                                                                <td class="text-right">$7000</td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>Wireless Router</td>
                                                                <td class="text-right">30</td>
                                                                <td class="text-right">$500</td>
                                                                <td class="text-right">$3500</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4">
                                            <div class="col-sm-5 col-12 order-sm-0 order-1">
                                                <div class="inv--payment-info">
                                                    <div class="row">
                                                        <div class="col-sm-12 col-12">
                                                            <h6 class=" inv-title">Payment Info:</h6>
                                                        </div>
                                                        <div class="col-sm-4 col-12">
                                                            <p class=" inv-subtitle">Bank Name: </p>
                                                        </div>
                                                        <div class="col-sm-8 col-12">
                                                            <p class="">Bank of America</p>
                                                        </div>
                                                        <div class="col-sm-4 col-12">
                                                            <p class=" inv-subtitle">Account Number : </p>
                                                        </div>
                                                        <div class="col-sm-8 col-12">
                                                            <p class="">1234567890</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-7 col-12 order-sm-1 order-0">
                                                <div class="inv--total-amounts text-sm-right">
                                                    <div class="row">
                                                        <div class="col-sm-8 col-7">
                                                            <p class="">Sub Total: </p>
                                                        </div>
                                                        <div class="col-sm-4 col-5">
                                                            <p class="">$13300</p>
                                                        </div>
                                                        <div class="col-sm-8 col-7">
                                                            <p class="">Tax Amount: </p>
                                                        </div>
                                                        <div class="col-sm-4 col-5">
                                                            <p class="">$700</p>
                                                        </div>
                                                        <div class="col-sm-8 col-7">
                                                            <p class=" discount-rate">Discount : <span class="discount-percentage">5%</span> </p>
                                                        </div>
                                                        <div class="col-sm-4 col-5">
                                                            <p class="">$700</p>
                                                        </div>
                                                        <div class="col-sm-8 col-7 grand-total-title">
                                                            <h4 class="">Grand Total : </h4>
                                                        </div>
                                                        <div class="col-sm-4 col-5 grand-total-amount">
                                                            <h4 class="">$14000</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="invoice-00012">
                                    <div class="content-section  animated animatedFadeInUp fadeInUp">

                                        <div class="row inv--head-section">

                                            <div class="col-sm-6 col-12">
                                                <h3 class="in-heading">INVOICE</h3>
                                            </div>
                                            <div class="col-sm-6 col-12 align-self-center text-sm-right">
                                                <div class="company-info">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-hexagon"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path></svg>
                                                    <h5 class="inv-brand-name">CORK</h5>
                                                </div>
                                            </div>
                                            
                                        </div>

                                        <div class="row inv--detail-section">

                                            <div class="col-sm-7 align-self-center">
                                                <p class="inv-to">Invoice To</p>
                                            </div>
                                            <div class="col-sm-5 align-self-center  text-sm-right order-sm-0 order-1">
                                                <p class="inv-detail-title">From : XYZ Company</p>
                                            </div>
                                            
                                            <div class="col-sm-7 align-self-center">
                                                <p class="inv-customer-name">Laurie Fox</p>
                                                <p class="inv-street-addr">405 Mulberry Rd. Mc Grady, NC, 28649</p>
                                                <p class="inv-email-address">redq@company.com</p>
                                            </div>
                                            <div class="col-sm-5 align-self-center  text-sm-right order-2">
                                                <p class="inv-list-number"><span class="inv-title">Invoice Number : </span> <span class="inv-number">[invoice number]</span></p>
                                                <p class="inv-created-date"><span class="inv-title">Invoice Date : </span> <span class="inv-date">20 Aug 2019</span></p>
                                                <p class="inv-due-date"><span class="inv-title">Due Date : </span> <span class="inv-date">26 Aug 2019</span></p>
                                            </div>
                                        </div>

                                        <div class="row inv--product-table-section">
                                            <div class="col-12">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead class="">
                                                            <tr>
                                                                <th scope="col">S.No</th>
                                                                <th scope="col">Items</th>
                                                                <th class="text-right" scope="col">Qty</th>
                                                                <th class="text-right" scope="col">Unit Price</th>
                                                                <th class="text-right" scope="col">Amount</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Electric Shaver</td>
                                                                <td class="text-right">20</td>
                                                                <td class="text-right">$300</td>
                                                                <td class="text-right">$2800</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>Earphones</td>
                                                                <td class="text-right">49</td>
                                                                <td class="text-right">$500</td>
                                                                <td class="text-right">$7000</td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>Wireless Router</td>
                                                                <td class="text-right">30</td>
                                                                <td class="text-right">$500</td>
                                                                <td class="text-right">$3500</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4">
                                            <div class="col-sm-5 col-12 order-sm-0 order-1">
                                                <div class="inv--payment-info">
                                                    <div class="row">
                                                        <div class="col-sm-12 col-12">
                                                            <h6 class=" inv-title">Payment Info:</h6>
                                                        </div>
                                                        <div class="col-sm-4 col-12">
                                                            <p class=" inv-subtitle">Bank Name: </p>
                                                        </div>
                                                        <div class="col-sm-8 col-12">
                                                            <p class="">Bank of America</p>
                                                        </div>
                                                        <div class="col-sm-4 col-12">
                                                            <p class=" inv-subtitle">Account Number : </p>
                                                        </div>
                                                        <div class="col-sm-8 col-12">
                                                            <p class="">1234567890</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-7 col-12 order-sm-1 order-0">
                                                <div class="inv--total-amounts text-sm-right">
                                                    <div class="row">
                                                        <div class="col-sm-8 col-7">
                                                            <p class="">Sub Total: </p>
                                                        </div>
                                                        <div class="col-sm-4 col-5">
                                                            <p class="">$13300</p>
                                                        </div>
                                                        <div class="col-sm-8 col-7">
                                                            <p class="">Tax Amount: </p>
                                                        </div>
                                                        <div class="col-sm-4 col-5">
                                                            <p class="">$700</p>
                                                        </div>
                                                        <div class="col-sm-8 col-7">
                                                            <p class=" discount-rate">Discount : <span class="discount-percentage">5%</span> </p>
                                                        </div>
                                                        <div class="col-sm-4 col-5">
                                                            <p class="">$700</p>
                                                        </div>
                                                        <div class="col-sm-8 col-7 grand-total-title">
                                                            <h4 class="">Grand Total : </h4>
                                                        </div>
                                                        <div class="col-sm-4 col-5 grand-total-amount">
                                                            <h4 class="">$14000</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="invoice-00013">
                                    <div class="content-section  animated animatedFadeInUp fadeInUp">

                                        <div class="row inv--head-section">

                                            <div class="col-sm-6 col-12">
                                                <h3 class="in-heading">INVOICE</h3>
                                            </div>
                                            <div class="col-sm-6 col-12 align-self-center text-sm-right">
                                                <div class="company-info">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-hexagon"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path></svg>
                                                    <h5 class="inv-brand-name">CORK</h5>
                                                </div>
                                            </div>
                                            
                                        </div>

                                        <div class="row inv--detail-section">

                                            <div class="col-sm-7 align-self-center">
                                                <p class="inv-to">Invoice To</p>
                                            </div>
                                            <div class="col-sm-5 align-self-center  text-sm-right order-sm-0 order-1">
                                                <p class="inv-detail-title">From : XYZ Company</p>
                                            </div>
                                            
                                            <div class="col-sm-7 align-self-center">
                                                <p class="inv-customer-name">Ryan McKillop</p>
                                                <p class="inv-street-addr">405 Mulberry Rd. Mc Grady, NC, 28649</p>
                                                <p class="inv-email-address">redq@company.com</p>
                                            </div>
                                            <div class="col-sm-5 align-self-center  text-sm-right order-2">
                                                <p class="inv-list-number"><span class="inv-title">Invoice Number : </span> <span class="inv-number">[invoice number]</span></p>
                                                <p class="inv-created-date"><span class="inv-title">Invoice Date : </span> <span class="inv-date">20 Aug 2019</span></p>
                                                <p class="inv-due-date"><span class="inv-title">Due Date : </span> <span class="inv-date">26 Aug 2019</span></p>
                                            </div>
                                        </div>

                                        <div class="row inv--product-table-section">
                                            <div class="col-12">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead class="">
                                                            <tr>
                                                                <th scope="col">S.No</th>
                                                                <th scope="col">Items</th>
                                                                <th class="text-right" scope="col">Qty</th>
                                                                <th class="text-right" scope="col">Unit Price</th>
                                                                <th class="text-right" scope="col">Amount</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Electric Shaver</td>
                                                                <td class="text-right">20</td>
                                                                <td class="text-right">$300</td>
                                                                <td class="text-right">$2800</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>Earphones</td>
                                                                <td class="text-right">49</td>
                                                                <td class="text-right">$500</td>
                                                                <td class="text-right">$7000</td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>Wireless Router</td>
                                                                <td class="text-right">30</td>
                                                                <td class="text-right">$500</td>
                                                                <td class="text-right">$3500</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4">
                                            <div class="col-sm-5 col-12 order-sm-0 order-1">
                                                <div class="inv--payment-info">
                                                    <div class="row">
                                                        <div class="col-sm-12 col-12">
                                                            <h6 class=" inv-title">Payment Info:</h6>
                                                        </div>
                                                        <div class="col-sm-4 col-12">
                                                            <p class=" inv-subtitle">Bank Name: </p>
                                                        </div>
                                                        <div class="col-sm-8 col-12">
                                                            <p class="">Bank of America</p>
                                                        </div>
                                                        <div class="col-sm-4 col-12">
                                                            <p class=" inv-subtitle">Account Number : </p>
                                                        </div>
                                                        <div class="col-sm-8 col-12">
                                                            <p class="">1234567890</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-7 col-12 order-sm-1 order-0">
                                                <div class="inv--total-amounts text-sm-right">
                                                    <div class="row">
                                                        <div class="col-sm-8 col-7">
                                                            <p class="">Sub Total: </p>
                                                        </div>
                                                        <div class="col-sm-4 col-5">
                                                            <p class="">$13300</p>
                                                        </div>
                                                        <div class="col-sm-8 col-7">
                                                            <p class="">Tax Amount: </p>
                                                        </div>
                                                        <div class="col-sm-4 col-5">
                                                            <p class="">$700</p>
                                                        </div>
                                                        <div class="col-sm-8 col-7">
                                                            <p class=" discount-rate">Discount : <span class="discount-percentage">5%</span> </p>
                                                        </div>
                                                        <div class="col-sm-4 col-5">
                                                            <p class="">$700</p>
                                                        </div>
                                                        <div class="col-sm-8 col-7 grand-total-title">
                                                            <h4 class="">Grand Total : </h4>
                                                        </div>
                                                        <div class="col-sm-4 col-5 grand-total-amount">
                                                            <h4 class="">$14000</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="invoice-00014">
                                    <div class="content-section  animated animatedFadeInUp fadeInUp">

                                        <div class="row inv--head-section">

                                            <div class="col-sm-6 col-12">
                                                <h3 class="in-heading">INVOICE</h3>
                                            </div>
                                            <div class="col-sm-6 col-12 align-self-center text-sm-right">
                                                <div class="company-info">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-hexagon"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path></svg>
                                                    <h5 class="inv-brand-name">CORK</h5>
                                                </div>
                                            </div>
                                            
                                        </div>

                                        <div class="row inv--detail-section">

                                            <div class="col-sm-7 align-self-center">
                                                <p class="inv-to">Invoice To</p>
                                            </div>
                                            <div class="col-sm-5 align-self-center  text-sm-right order-sm-0 order-1">
                                                <p class="inv-detail-title">From : XYZ Company</p>
                                            </div>
                                            
                                            <div class="col-sm-7 align-self-center">
                                                <p class="inv-customer-name">Jimmy Turner</p>
                                                <p class="inv-street-addr">405 Mulberry Rd. Mc Grady, NC, 28649</p>
                                                <p class="inv-email-address">redq@company.com</p>
                                            </div>
                                            <div class="col-sm-5 align-self-center  text-sm-right order-2">
                                                <p class="inv-list-number"><span class="inv-title">Invoice Number : </span> <span class="inv-number">[invoice number]</span></p>
                                                <p class="inv-created-date"><span class="inv-title">Invoice Date : </span> <span class="inv-date">20 Aug 2019</span></p>
                                                <p class="inv-due-date"><span class="inv-title">Due Date : </span> <span class="inv-date">26 Aug 2019</span></p>
                                            </div>
                                        </div>

                                        <div class="row inv--product-table-section">
                                            <div class="col-12">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead class="">
                                                            <tr>
                                                                <th scope="col">S.No</th>
                                                                <th scope="col">Items</th>
                                                                <th class="text-right" scope="col">Qty</th>
                                                                <th class="text-right" scope="col">Unit Price</th>
                                                                <th class="text-right" scope="col">Amount</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Electric Shaver</td>
                                                                <td class="text-right">20</td>
                                                                <td class="text-right">$300</td>
                                                                <td class="text-right">$2800</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>Earphones</td>
                                                                <td class="text-right">49</td>
                                                                <td class="text-right">$500</td>
                                                                <td class="text-right">$7000</td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>Wireless Router</td>
                                                                <td class="text-right">30</td>
                                                                <td class="text-right">$500</td>
                                                                <td class="text-right">$3500</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4">
                                            <div class="col-sm-5 col-12 order-sm-0 order-1">
                                                <div class="inv--payment-info">
                                                    <div class="row">
                                                        <div class="col-sm-12 col-12">
                                                            <h6 class=" inv-title">Payment Info:</h6>
                                                        </div>
                                                        <div class="col-sm-4 col-12">
                                                            <p class=" inv-subtitle">Bank Name: </p>
                                                        </div>
                                                        <div class="col-sm-8 col-12">
                                                            <p class="">Bank of America</p>
                                                        </div>
                                                        <div class="col-sm-4 col-12">
                                                            <p class=" inv-subtitle">Account Number : </p>
                                                        </div>
                                                        <div class="col-sm-8 col-12">
                                                            <p class="">1234567890</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-7 col-12 order-sm-1 order-0">
                                                <div class="inv--total-amounts text-sm-right">
                                                    <div class="row">
                                                        <div class="col-sm-8 col-7">
                                                            <p class="">Sub Total: </p>
                                                        </div>
                                                        <div class="col-sm-4 col-5">
                                                            <p class="">$13300</p>
                                                        </div>
                                                        <div class="col-sm-8 col-7">
                                                            <p class="">Tax Amount: </p>
                                                        </div>
                                                        <div class="col-sm-4 col-5">
                                                            <p class="">$700</p>
                                                        </div>
                                                        <div class="col-sm-8 col-7">
                                                            <p class=" discount-rate">Discount : <span class="discount-percentage">5%</span> </p>
                                                        </div>
                                                        <div class="col-sm-4 col-5">
                                                            <p class="">$700</p>
                                                        </div>
                                                        <div class="col-sm-8 col-7 grand-total-title">
                                                            <h4 class="">Grand Total : </h4>
                                                        </div>
                                                        <div class="col-sm-4 col-5 grand-total-amount">
                                                            <h4 class="">$14000</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="invoice-00015">
                                    <div class="content-section  animated animatedFadeInUp fadeInUp">

                                        <div class="row inv--head-section">

                                            <div class="col-sm-6 col-12">
                                                <h3 class="in-heading">INVOICE</h3>
                                            </div>
                                            <div class="col-sm-6 col-12 align-self-center text-sm-right">
                                                <div class="company-info">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-hexagon"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path></svg>
                                                    <h5 class="inv-brand-name">CORK</h5>
                                                </div>
                                            </div>
                                            
                                        </div>

                                        <div class="row inv--detail-section">

                                            <div class="col-sm-7 align-self-center">
                                                <p class="inv-to">Invoice To</p>
                                            </div>
                                            <div class="col-sm-5 align-self-center  text-sm-right order-sm-0 order-1">
                                                <p class="inv-detail-title">From : XYZ Company</p>
                                            </div>
                                            
                                            <div class="col-sm-7 align-self-center">
                                                <p class="inv-customer-name">Roxanne</p>
                                                <p class="inv-street-addr">405 Mulberry Rd. Mc Grady, NC, 28649</p>
                                                <p class="inv-email-address">redq@company.com</p>
                                            </div>
                                            <div class="col-sm-5 align-self-center  text-sm-right order-2">
                                                <p class="inv-list-number"><span class="inv-title">Invoice Number : </span> <span class="inv-number">[invoice number]</span></p>
                                                <p class="inv-created-date"><span class="inv-title">Invoice Date : </span> <span class="inv-date">20 Aug 2019</span></p>
                                                <p class="inv-due-date"><span class="inv-title">Due Date : </span> <span class="inv-date">26 Aug 2019</span></p>
                                            </div>
                                        </div>

                                        <div class="row inv--product-table-section">
                                            <div class="col-12">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead class="">
                                                            <tr>
                                                                <th scope="col">S.No</th>
                                                                <th scope="col">Items</th>
                                                                <th class="text-right" scope="col">Qty</th>
                                                                <th class="text-right" scope="col">Unit Price</th>
                                                                <th class="text-right" scope="col">Amount</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Electric Shaver</td>
                                                                <td class="text-right">20</td>
                                                                <td class="text-right">$300</td>
                                                                <td class="text-right">$2800</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>Earphones</td>
                                                                <td class="text-right">49</td>
                                                                <td class="text-right">$500</td>
                                                                <td class="text-right">$7000</td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>Wireless Router</td>
                                                                <td class="text-right">30</td>
                                                                <td class="text-right">$500</td>
                                                                <td class="text-right">$3500</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4">
                                            <div class="col-sm-5 col-12 order-sm-0 order-1">
                                                <div class="inv--payment-info">
                                                    <div class="row">
                                                        <div class="col-sm-12 col-12">
                                                            <h6 class=" inv-title">Payment Info:</h6>
                                                        </div>
                                                        <div class="col-sm-4 col-12">
                                                            <p class=" inv-subtitle">Bank Name: </p>
                                                        </div>
                                                        <div class="col-sm-8 col-12">
                                                            <p class="">Bank of America</p>
                                                        </div>
                                                        <div class="col-sm-4 col-12">
                                                            <p class=" inv-subtitle">Account Number : </p>
                                                        </div>
                                                        <div class="col-sm-8 col-12">
                                                            <p class="">1234567890</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-7 col-12 order-sm-1 order-0">
                                                <div class="inv--total-amounts text-sm-right">
                                                    <div class="row">
                                                        <div class="col-sm-8 col-7">
                                                            <p class="">Sub Total: </p>
                                                        </div>
                                                        <div class="col-sm-4 col-5">
                                                            <p class="">$13300</p>
                                                        </div>
                                                        <div class="col-sm-8 col-7">
                                                            <p class="">Tax Amount: </p>
                                                        </div>
                                                        <div class="col-sm-4 col-5">
                                                            <p class="">$700</p>
                                                        </div>
                                                        <div class="col-sm-8 col-7">
                                                            <p class=" discount-rate">Discount : <span class="discount-percentage">5%</span> </p>
                                                        </div>
                                                        <div class="col-sm-4 col-5">
                                                            <p class="">$700</p>
                                                        </div>
                                                        <div class="col-sm-8 col-7 grand-total-title">
                                                            <h4 class="">Grand Total : </h4>
                                                        </div>
                                                        <div class="col-sm-4 col-5 grand-total-amount">
                                                            <h4 class="">$14000</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class="inv--thankYou">
                            <div class="row">
                                <div class="col-sm-12 col-12">
                                    <p class="">Thank you for doing Business with us.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    
                </div>

            </div>
        </div>
    </div>
    
@endsection