@extends('layouts.app')

@section('content')
            <div class="container">
                <div class="container">

                    <div id="navSection" data-spy="affix" class="nav sidenav">
                        <div class="sidenav-content">
                            <a href="#tableSimple" class="active nav-link">Simple</a>
                            <a href="#tableHover" class="nav-link">Hover</a>
                            <a href="#tableStriped" class="nav-link">Striped</a>
                            <a href="#tableLight" class="nav-link">Light</a>
                            <a href="#tableCaption" class="nav-link">Caption</a>
                            <a href="#tableProgress" class="nav-link">Progress</a>
                            <a href="#tableContextual" class="nav-link">Contextual</a>
                            <a href="#tableDropdown" class="nav-link">Dropdown</a>
                            <a href="#tableFooter" class="nav-link">Footer</a>
                            <a href="#tableCheckbox" class="nav-link">Checkbox</a>
                        </div>
                    </div>

                    <div class="row layout-top-spacing">
                        <div id="tableSimple" class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Simple Table</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="table-responsive">
                                        <table class="table table-bordered mb-4">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Date</th>
                                                    <th>Sale</th>
                                                    <th class="text-center">Status</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Shaun Park</td>
                                                    <td>10/08/2019</td>
                                                    <td>320</td>
                                                    <td class="text-center"><span class="text-success">Complete</span></td>
                                                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 icon"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></td>
                                                </tr>
                                                <tr>
                                                    <td>Alma Clarke</td>
                                                    <td>11/08/2019</td>
                                                    <td>420</td>
                                                    <td class="text-center"><span class="text-secondary">Pending</span></td>
                                                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 icon"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></td>
                                                </tr>
                                                <tr>
                                                    <td>Xavier</td>
                                                    <td>12/08/2019</td>
                                                    <td>130</td>
                                                    <td class="text-center"><span class="text-info">In progress</span></td>
                                                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 icon"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></td>
                                                </tr>
                                                <tr>
                                                    <td>Vincent Carpenter</td>
                                                    <td>13/08/2019</td>
                                                    <td>260</td>
                                                    <td class="text-center"><span class="text-danger">Canceled</span></td>
                                                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 icon"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="code-section-container show-code">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                                <pre>
&lt;div class="table-responsive"&gt;
    &lt;table class="table table-bordered mb-4"&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th&gt;Name&lt;/th&gt;
                &lt;th&gt;Date&lt;/th&gt;
                &lt;th&gt;Sale&lt;/th&gt;
                &lt;th class="text-center"&gt;Status&lt;/th&gt;
                &lt;th&gt;&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;td&gt;Shaun Park&lt;/td&gt;
                &lt;td&gt;10/08/2019&lt;/td&gt;
                &lt;td&gt;320&lt;/td&gt;
                &lt;td class="text-center"&gt;&lt;span class="text-success"&gt;Complete&lt;/span&gt;&lt;/td&gt;
                &lt;td class="text-center"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Alma Clarke&lt;/td&gt;
                &lt;td&gt;11/08/2019&lt;/td&gt;
                &lt;td&gt;420&lt;/td&gt;
                &lt;td class="text-center"&gt;&lt;span class="text-secondary"&gt;Pending&lt;/span&gt;&lt;/td&gt;
                &lt;td class="text-center"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Xavier&lt;/td&gt;
                &lt;td&gt;12/08/2019&lt;/td&gt;
                &lt;td&gt;130&lt;/td&gt;
                &lt;td class="text-center"&gt;&lt;span class="text-info"&gt;In progress&lt;/span&gt;&lt;/td&gt;
                &lt;td class="text-center"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Vincent Carpenter&lt;/td&gt;
                &lt;td&gt;13/08/2019&lt;/td&gt;
                &lt;td&gt;260&lt;/td&gt;
                &lt;td class="text-center"&gt;&lt;span class="text-danger"&gt;Canceled&lt;/span&gt;&lt;/td&gt;
                &lt;td class="text-center"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;
    </pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        
                        <div id="tableHover" class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Hover Table</h4>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover mb-4">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Date</th>
                                                    <th>Sale</th>
                                                    <th class="text-center">Status</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Shaun Park</td>
                                                    <td>10/08/2019</td>
                                                    <td>320</td>
                                                    <td class="text-center"><span class="text-success">Complete</span></td>
                                                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 icon"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></td>
                                                </tr>
                                                <tr>
                                                    <td> Alma Clarke</td>
                                                    <td>11/08/2019</td>
                                                    <td>420</td>
                                                    <td class="text-center"><span class="text-secondary">Pending</span></td>
                                                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 icon"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></td>
                                                </tr>
                                                <tr>
                                                    <td>Xavier</td>
                                                    <td>12/08/2019</td>
                                                    <td>130</td>
                                                    <td class="text-center"><span class="text-info">In progress</span></td>
                                                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 icon"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></td>
                                                </tr>
                                                <tr>
                                                    <td>Vincent Carpenter</td>
                                                    <td>13/08/2019</td>
                                                    <td>260</td>
                                                    <td class="text-center"><span class="text-danger">Canceled</span></td>
                                                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 icon"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                                <pre>
&lt;div class="table-responsive"&gt;
    &lt;table class="table table-bordered table-hover table-striped mb-4"&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th&gt;Name&lt;/th&gt;
                &lt;th&gt;Date&lt;/th&gt;
                &lt;th&gt;Sale&lt;/th&gt;
                &lt;th class="text-center"&gt;Status&lt;/th&gt;
                &lt;th&gt;&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;td&gt;Shaun Park&lt;/td&gt;
                &lt;td&gt;10/08/2019&lt;/td&gt;
                &lt;td&gt;320&lt;/td&gt;
                &lt;td class="text-center"&gt;&lt;span class="text-success"&gt;Complete&lt;/span&gt;&lt;/td&gt;
                &lt;td class="text-center"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt; Alma Clarke&lt;/td&gt;
                &lt;td&gt;11/08/2019&lt;/td&gt;
                &lt;td&gt;420&lt;/td&gt;
                &lt;td class="text-center"&gt;&lt;span class="text-secondary"&gt;Pending&lt;/span&gt;&lt;/td&gt;
                &lt;td class="text-center"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Xavier&lt;/td&gt;
                &lt;td&gt;12/08/2019&lt;/td&gt;
                &lt;td&gt;130&lt;/td&gt;
                &lt;td class="text-center"&gt;&lt;span class="text-info"&gt;In progress&lt;/span&gt;&lt;/td&gt;
                &lt;td class="text-center"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Vincent Carpenter&lt;/td&gt;
                &lt;td&gt;13/08/2019&lt;/td&gt;
                &lt;td&gt;260&lt;/td&gt;
                &lt;td class="text-center"&gt;&lt;span class="text-danger"&gt;Canceled&lt;/span&gt;&lt;/td&gt;
                &lt;td class="text-center"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;
    </pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    
                        <div id="tableStriped" class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Striped Table</h4>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped mb-4">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Date</th>
                                                    <th>Sale</th>
                                                    <th class="text-center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div class="usr-img-frame mr-2 rounded-circle">
                                                                <img alt="avatar" class="img-fluid rounded-circle" src="{{asset('storage/img/90x90.jpg')}}">
                                                            </div>
                                                            <p class="align-self-center mb-0">Shaun</p>
                                                        </div>
                                                    </td>
                                                    <td>10/08/2019</td>
                                                    <td>320</td>
                                                    <td class=" text-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x t-icon t-hover-icon"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div class="usr-img-frame mr-2 rounded-circle">
                                                                <img alt="avatar" class="img-fluid rounded-circle" src="{{asset('storage/img/90x90.jpg')}}">
                                                            </div>
                                                            <p  class="align-self-center mb-0">Alma</p>
                                                        </div>
                                                    </td>
                                                    <td>11/08/2019</td>
                                                    <td>420</td>
                                                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x t-icon t-hover-icon"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div class="usr-img-frame mr-2 rounded-circle">
                                                                <img alt="avatar" class="img-fluid rounded-circle" src="{{asset('storage/img/90x90.jpg')}}">
                                                            </div>
                                                            <p  class="align-self-center mb-0">Kelly</p>
                                                        </div>
                                                    </td>
                                                    <td>12/08/2019</td>
                                                    <td>130</td>
                                                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x t-icon t-hover-icon"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex">
                                                            <div class="usr-img-frame mr-2 rounded-circle">
                                                                <img alt="avatar" class="img-fluid rounded-circle" src="{{asset('storage/img/90x90.jpg')}}">
                                                            </div>
                                                            <p  class="align-self-center mb-0">Vincent</p>
                                                        </div>
                                                    </td>
                                                    <td>13/08/2019</td>
                                                    <td>260</td>
                                                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x t-icon t-hover-icon"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div class="table-responsive"&gt;
    &lt;table class="table table-bordered table-striped mb-4"&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th&gt;Name&lt;/th&gt;
                &lt;th&gt;Date&lt;/th&gt;
                &lt;th&gt;Sale&lt;/th&gt;
                &lt;th class="text-center"&gt;Action&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;td&gt;
                    &lt;div class="d-flex"&gt;
                        &lt;div class="usr-img-frame mr-2 rounded-circle"&gt;
                            &lt;img alt="avatar" class="img-fluid rounded-circle" src="{{asset('storage/img/90x90.jpg')}}"&gt;
                        &lt;/div&gt;
                        &lt;p class="align-self-center mb-0"&gt;Shaun&lt;/p&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;10/08/2019&lt;/td&gt;
                &lt;td&gt;320&lt;/td&gt;
                &lt;td class=" text-center"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;
                    &lt;div class="d-flex"&gt;
                        &lt;div class="usr-img-frame mr-2 rounded-circle"&gt;
                            &lt;img alt="avatar" class="img-fluid rounded-circle" src="{{asset('storage/img/90x90.jpg')}}"&gt;
                        &lt;/div&gt;
                        &lt;p  class="align-self-center mb-0"&gt;Alma&lt;/p&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;11/08/2019&lt;/td&gt;
                &lt;td&gt;420&lt;/td&gt;
                &lt;td class="text-center"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;
                    &lt;div class="d-flex"&gt;
                        &lt;div class="usr-img-frame mr-2 rounded-circle"&gt;
                            &lt;img alt="avatar" class="img-fluid rounded-circle" src="{{asset('storage/img/90x90.jpg')}}"&gt;
                        &lt;/div&gt;
                        &lt;p  class="align-self-center mb-0"&gt;Kelly&lt;/p&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;12/08/2019&lt;/td&gt;
                &lt;td&gt;130&lt;/td&gt;
                &lt;td class="text-center"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;
                    &lt;div class="d-flex"&gt;
                        &lt;div class="usr-img-frame mr-2 rounded-circle"&gt;
                            &lt;img alt="avatar" class="img-fluid rounded-circle" src="{{asset('storage/img/90x90.jpg')}}"&gt;
                        &lt;/div&gt;
                        &lt;p  class="align-self-center mb-0"&gt;Vincent&lt;/p&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;13/08/2019&lt;/td&gt;
                &lt;td&gt;260&lt;/td&gt;
                &lt;td class="text-center"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;
    </pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="tableLight" class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Table Light</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-light mb-4">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">#</th>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Email</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td>John</td>
                                                    <td>Doe</td>
                                                    <td>johndoe@yahoo.com</td>
                                                    <td class=" text-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x t-icon"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">2</td>
                                                    <td>Andy</td>
                                                    <td>King</td>
                                                    <td>andyking@gmail.com</td>
                                                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x t-icon"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">3</td>
                                                    <td>Lisa</td>
                                                    <td>Doe</td>
                                                    <td>lisadoe@live.com</td>
                                                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x t-icon"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">4</td>
                                                    <td>Vincent</td>
                                                    <td>Carpenter</td>
                                                    <td>vinnyc@outlook.com</td>
                                                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x t-icon"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div class="table-responsive"&gt;
    &lt;table class="table table-hover table-dark mb-4"&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th class="text-center"&gt;#&lt;/th&gt;
                &lt;th&gt;First Name&lt;/th&gt;
                &lt;th&gt;Last Name&lt;/th&gt;
                &lt;th&gt;Email&lt;/th&gt;
                &lt;th&gt;&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;td class="text-center"&gt;1&lt;/td&gt;
                &lt;td&gt;John&lt;/td&gt;
                &lt;td&gt;Doe&lt;/td&gt;
                &lt;td&gt;johndoe@yahoo.com&lt;/td&gt;
                &lt;td class=" text-center"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td class="text-center"&gt;2&lt;/td&gt;
                &lt;td&gt;Andy&lt;/td&gt;
                &lt;td&gt;King&lt;/td&gt;
                &lt;td&gt;andyking@gmail.com&lt;/td&gt;
                &lt;td class="text-center"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td class="text-center"&gt;3&lt;/td&gt;
                &lt;td&gt;Lisa&lt;/td&gt;
                &lt;td&gt;Doe&lt;/td&gt;
                &lt;td&gt;lisadoe@live.com&lt;/td&gt;
                &lt;td class="text-center"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td class="text-center"&gt;4&lt;/td&gt;
                &lt;td&gt;Vincent&lt;/td&gt;
                &lt;td&gt;Carpenter&lt;/td&gt;
                &lt;td&gt;vinnyc@outlook.com&lt;/td&gt;
                &lt;td class="text-center"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;
    </pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="tableCaption" class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Captions</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="table-responsive">
                                        <table class="table mb-4">
                                          <caption>List of all users</caption>
                                          <thead>
                                                <tr>
                                                    <th class="text-center">#</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th class="">Status</th>
                                                    <th>Register</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td class="text-success">Shaun Park</td>
                                                    <td>johndoe@yahoo.com</td>
                                                    <td class=""><span class=" shadow-none badge outline-badge-primary">Complete</span></td>
                                                    <td>5 min ago</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">2</td>
                                                    <td class="text-success">Andy King</td>
                                                    <td>andyking@gmail.com</td>
                                                    <td class=""><span class="badge outline-badge-secondary shadow-none">Pending</span></td>
                                                    <td>10 min ago</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">3</td>
                                                    <td class="text-success">Mary McDonald</td>
                                                    <td>lisadoe@live.com</td>
                                                    <td class=""><span class="badge outline-badge-info shadow-none">In Progress</span></td>
                                                    <td>1 hour ago</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">4</td>
                                                    <td class="text-success">Vincent Carpenter</td>
                                                    <td>vinnyc@outlook.com</td>
                                                    <td class=""><span class="badge outline-badge-danger shadow-none">Cancel</span></td>
                                                    <td>1 day ago</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                                <pre>
&lt;div class="table-responsive"&gt;
    &lt;table class="table mb-4"&gt;
      &lt;caption&gt;List of all users&lt;/caption&gt;
      &lt;thead&gt;
            &lt;tr&gt;
                &lt;th class="text-center"&gt;#&lt;/th&gt;
                &lt;th&gt;Name&lt;/th&gt;
                &lt;th&gt;Email&lt;/th&gt;
                &lt;th class=""&gt;Status&lt;/th&gt;
                &lt;th&gt;Register&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;td class="text-center"&gt;1&lt;/td&gt;
                &lt;td class="text-primary"&gt;Shaun Park&lt;/td&gt;
                &lt;td&gt;johndoe@yahoo.com&lt;/td&gt;
                &lt;td class=""&gt;&lt;span class=" shadow-none badge outline-badge-primary"&gt;Complete&lt;/span&gt;&lt;/td&gt;
                &lt;td&gt;5 min ago&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td class="text-center"&gt;2&lt;/td&gt;
                &lt;td class="text-primary"&gt;Andy King&lt;/td&gt;
                &lt;td&gt;andyking@gmail.com&lt;/td&gt;
                &lt;td class=""&gt;&lt;span class="badge outline-badge-secondary shadow-none"&gt;Pending&lt;/span&gt;&lt;/td&gt;
                &lt;td&gt;10 min ago&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td class="text-center"&gt;3&lt;/td&gt;
                &lt;td class="text-primary"&gt;Mary McDonald&lt;/td&gt;
                &lt;td&gt;lisadoe@live.com&lt;/td&gt;
                &lt;td class=""&gt;&lt;span class="badge outline-badge-info shadow-none"&gt;In Progress&lt;/span&gt;&lt;/td&gt;
                &lt;td&gt;1 hour ago&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td class="text-center"&gt;4&lt;/td&gt;
                &lt;td class="text-primary"&gt;Vincent Carpenter&lt;/td&gt;
                &lt;td&gt;vinnyc@outlook.com&lt;/td&gt;
                &lt;td class=""&gt;&lt;span class="badge outline-badge-danger shadow-none"&gt;Cancel&lt;/span&gt;&lt;/td&gt;
                &lt;td&gt;1 day ago&lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;
    </pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        
                        <div id="tableProgress" class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Progress Table</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">#</th>
                                                    <th>Name</th>
                                                    <th>Progress</th>
                                                    <th>Sales</th>
                                                    <th class="text-center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td>John Doe</td>
                                                    <td>                                                    
                                                        <div class="progress br-30">
                                                            <div class="progress-bar br-30 bg-primary" role="progressbar" style="width: 29.56%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                    <td><p class="text-danger">29.56%</p></td>
                                                    <td class="text-center">
                                                        <ul class="table-controls">
                                                            <li><a href="javascript:void(0);"  data-toggle="tooltip" data-placement="top" title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a></li>
                                                            <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></a></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">2</td>
                                                    <td>Andy King</td>
                                                    <td>                                                    
                                                        <div class="progress br-30">
                                                            <div class="progress-bar br-30 bg-warning" role="progressbar" style="width: 19.15%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                    <td><p class="text-danger">19.15%</p></td>
                                                    <td class="text-center">
                                                        <ul class="table-controls">
                                                            <li><a href="javascript:void(0);"  data-toggle="tooltip" data-placement="top" title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a></li>
                                                            <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></a></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">3</td>
                                                    <td>Lisa Doe</td>
                                                    <td>                                                    
                                                        <div class="progress br-30">
                                                            <div class="progress-bar br-30 bg-success" role="progressbar" style="width: 39.00%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                    <td><p class="text-danger">39.00%</p></td>
                                                    <td class="text-center">
                                                        <ul class="table-controls">
                                                            <li><a href="javascript:void(0);"  data-toggle="tooltip" data-placement="top" title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a></li>
                                                            <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></a></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">4</td>
                                                    <td>Vincent Carpenter</td>
                                                    <td>                                                    
                                                        <div class="progress br-30">
                                                            <div class="progress-bar br-30 bg-secondary" role="progressbar" style="width: 88.03%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                    <td><p class="text-success">88.03%</p></td>
                                                    <td class="text-center">
                                                        <ul class="table-controls">
                                                            <li><a href="javascript:void(0);"  data-toggle="tooltip" data-placement="top" title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a></li>
                                                            <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></a></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                                <pre>
&lt;div class="table-responsive"&gt;
    &lt;table class="table table-bordered"&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th class="text-center"&gt;#&lt;/th&gt;
                &lt;th&gt;Name&lt;/th&gt;
                &lt;th&gt;Progress&lt;/th&gt;
                &lt;th&gt;Sales&lt;/th&gt;
                &lt;th class="text-center"&gt;Action&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;td class="text-center"&gt;1&lt;/td&gt;
                &lt;td&gt;John Doe&lt;/td&gt;
                &lt;td&gt;                                                    
                    &lt;div class="progress br-30"&gt;
                        &lt;div class="progress-bar br-30 bg-primary" role="progressbar" style="width: 29.56%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;&lt;p class="text-danger"&gt;29.56%&lt;/p&gt;&lt;/td&gt;
                &lt;td class="text-center"&gt;
                    &lt;ul class="table-controls"&gt;
                        &lt;li&gt;&lt;a href="javascript:void(0);"  data-toggle="tooltip" data-placement="top" title="Edit"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/a&gt;&lt;/li&gt;
                        &lt;li&gt;&lt;a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Delete"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/a&gt;&lt;/li&gt;
                    &lt;/ul&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td class="text-center"&gt;2&lt;/td&gt;
                &lt;td&gt;Andy King&lt;/td&gt;
                &lt;td&gt;                                                    
                    &lt;div class="progress br-30"&gt;
                        &lt;div class="progress-bar br-30 bg-warning" role="progressbar" style="width: 19.15%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;&lt;p class="text-danger"&gt;19.15%&lt;/p&gt;&lt;/td&gt;
                &lt;td class="text-center"&gt;
                    &lt;ul class="table-controls"&gt;
                        &lt;li&gt;&lt;a href="javascript:void(0);"  data-toggle="tooltip" data-placement="top" title="Edit"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/a&gt;&lt;/li&gt;
                        &lt;li&gt;&lt;a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Delete"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/a&gt;&lt;/li&gt;
                    &lt;/ul&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td class="text-center"&gt;3&lt;/td&gt;
                &lt;td&gt;Lisa Doe&lt;/td&gt;
                &lt;td&gt;                                                    
                    &lt;div class="progress br-30"&gt;
                        &lt;div class="progress-bar br-30 bg-success" role="progressbar" style="width: 39.00%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;&lt;p class="text-danger"&gt;39.00%&lt;/p&gt;&lt;/td&gt;
                &lt;td class="text-center"&gt;
                    &lt;ul class="table-controls"&gt;
                        &lt;li&gt;&lt;a href="javascript:void(0);"  data-toggle="tooltip" data-placement="top" title="Edit"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/a&gt;&lt;/li&gt;
                        &lt;li&gt;&lt;a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Delete"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/a&gt;&lt;/li&gt;
                    &lt;/ul&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td class="text-center"&gt;4&lt;/td&gt;
                &lt;td&gt;Vincent Carpenter&lt;/td&gt;
                &lt;td&gt;                                                    
                    &lt;div class="progress br-30"&gt;
                        &lt;div class="progress-bar br-30 bg-secondary" role="progressbar" style="width: 88.03%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"&gt;&lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;&lt;p class="text-success"&gt;88.03%&lt;/p&gt;&lt;/td&gt;
                &lt;td class="text-center"&gt;
                    &lt;ul class="table-controls"&gt;
                        &lt;li&gt;&lt;a href="javascript:void(0);"  data-toggle="tooltip" data-placement="top" title="Edit"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/a&gt;&lt;/li&gt;
                        &lt;li&gt;&lt;a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Delete"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/a&gt;&lt;/li&gt;
                    &lt;/ul&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;
    </pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="tableContextual" class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Contextual</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="table-responsive">
                                        <table class="table mb-4 contextual-table">
                                            <thead>
                                                <tr class="">
                                                    <th class="text-center">#</th>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Email</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="table-default">
                                                    <td class="text-center">1</td>
                                                    <td>John</td>
                                                    <td>Doe</td>
                                                    <td>johndoe@yahoo.com</td>
                                                </tr>
                                                <tr class="table-primary">
                                                    <td class="text-center">2</td>
                                                    <td>Andy</td>
                                                    <td>King</td>
                                                    <td>andyking@gmail.com</td>
                                                </tr>
                                                <tr class="table-secondary">
                                                    <td class="text-center">3</td>
                                                    <td>Lisa</td>
                                                    <td>Doe</td>
                                                    <td>lisadoe@live.com</td>
                                                </tr>
                                                <tr class="table-success">
                                                    <td class="text-center">4</td>
                                                    <td>Vincent</td>
                                                    <td>Carpenter</td>
                                                    <td>vinnyc@outlook.com</td>
                                                </tr>
                                                <tr class="table-dark">
                                                    <td class="text-center">5</td>
                                                    <td>Amy</td>
                                                    <td>Diaz</td>
                                                    <td>amydiaz@gmail.com</td>
                                                </tr>
                                                <tr class="table-danger">
                                                    <td class="text-center">6</td>
                                                    <td>Nia</td>
                                                    <td>Hillyer</td>
                                                    <td>niahill@gmail.com</td>
                                                </tr>

                                                <tr class="table-info">
                                                    <td class="text-center">7</td>
                                                    <td>Marry</td>
                                                    <td>McDonald</td>
                                                    <td>marryMcD@gmail.com</td>
                                                </tr>
                                                <tr class="table-warning">
                                                    <td class="text-center">8</td>
                                                    <td>Shaun</td>
                                                    <td>Park</td>
                                                    <td>spark@adobe.com</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div class="table-responsive"&gt;
    &lt;table class="table mb-4 contextual-table"&gt;
        &lt;thead&gt;
            &lt;tr class=""&gt;
                &lt;th class="text-center"&gt;#&lt;/th&gt;
                &lt;th&gt;First Name&lt;/th&gt;
                &lt;th&gt;Last Name&lt;/th&gt;
                &lt;th&gt;Email&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr class="table-default"&gt;
                &lt;td class="text-center"&gt;1&lt;/td&gt;
                &lt;td&gt;John&lt;/td&gt;
                &lt;td&gt;Doe&lt;/td&gt;
                &lt;td&gt;johndoe@yahoo.com&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr class="table-primary"&gt;
                &lt;td class="text-center"&gt;2&lt;/td&gt;
                &lt;td&gt;Andy&lt;/td&gt;
                &lt;td&gt;King&lt;/td&gt;
                &lt;td&gt;andyking@gmail.com&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr class="table-secondary"&gt;
                &lt;td class="text-center"&gt;3&lt;/td&gt;
                &lt;td&gt;Lisa&lt;/td&gt;
                &lt;td&gt;Doe&lt;/td&gt;
                &lt;td&gt;lisadoe@live.com&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr class="table-success"&gt;
                &lt;td class="text-center"&gt;4&lt;/td&gt;
                &lt;td&gt;Vincent&lt;/td&gt;
                &lt;td&gt;Carpenter&lt;/td&gt;
                &lt;td&gt;vinnyc@outlook.com&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr class="table-warning"&gt;
                &lt;td class="text-center"&gt;5&lt;/td&gt;
                &lt;td&gt;Shaun&lt;/td&gt;
                &lt;td&gt;Park&lt;/td&gt;
                &lt;td&gt;spark@adobe.com&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr class="table-danger"&gt;
                &lt;td class="text-center"&gt;6&lt;/td&gt;
                &lt;td&gt;Nia&lt;/td&gt;
                &lt;td&gt;Hillyer&lt;/td&gt;
                &lt;td&gt;niahill@gmail.com&lt;/td&gt;
            &lt;/tr&gt;

            &lt;tr class="table-info"&gt;
                &lt;td class="text-center"&gt;7&lt;/td&gt;
                &lt;td&gt;Marry&lt;/td&gt;
                &lt;td&gt;McDonald&lt;/td&gt;
                &lt;td&gt;marryMcD@gmail.com&lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr class="table-dark"&gt;
                &lt;td class="text-center"&gt;8&lt;/td&gt;
                &lt;td&gt;Amy&lt;/td&gt;
                &lt;td&gt;Diaz&lt;/td&gt;
                &lt;td&gt;amydiaz@gmail.com&lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;
    </pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        
                        <div id="tableDropdown" class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Dropdown</h4>
                                        </div>          
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="table-responsive">
                                        <table class="table table-bordered mb-4">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Date</th>
                                                    <th>Sale</th>
                                                    <th class="text-center">Status</th>
                                                    <th class="text-center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Shaun</td>
                                                    <td>10/08/2019</td>
                                                    <td>320</td>
                                                    <td class="text-center"><span class="badge badge-success">Approved</span></td>
                                                    <td class="text-center">
                                                        
                                                        <div class="dropdown custom-dropdown">
                                                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                                            </a>

                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                                                <a class="dropdown-item" href="javascript:void(0);">Download</a>
                                                                <a class="dropdown-item" href="javascript:void(0);">Share</a>
                                                                <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                            </div>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Alma</td>
                                                    <td>11/08/2019</td>
                                                    <td>420</td>
                                                    <td class="text-center"><span class="badge badge-primary">In Progress</span></td>
                                                    <td class="text-center">
                                                        
                                                        <div class="dropdown custom-dropdown">
                                                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                                            </a>

                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink2">
                                                                <a class="dropdown-item" href="javascript:void(0);">Download</a>
                                                                <a class="dropdown-item" href="javascript:void(0);">Share</a>
                                                                <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Kelly</td>
                                                    <td>12/08/2019</td>
                                                    <td>130</td>
                                                    <td class="text-center"><span class="badge badge-warning">Suspended</span></td>
                                                    <td class="text-center">
                                                        
                                                        <div class="dropdown custom-dropdown">
                                                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                                            </a>

                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink3">
                                                                <a class="dropdown-item" href="javascript:void(0);">Download</a>
                                                                <a class="dropdown-item" href="javascript:void(0);">Share</a>
                                                                <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Xavier</td>
                                                    <td>13/08/2019</td>
                                                    <td>260</td>
                                                    <td class="text-center"><span class="badge badge-danger">Blocked</span></td>
                                                    <td class="text-center">
                                                        
                                                        <div class="dropdown custom-dropdown">
                                                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                                            </a>

                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink4">
                                                                <a class="dropdown-item" href="javascript:void(0);">Download</a>
                                                                <a class="dropdown-item" href="javascript:void(0);">Share</a>
                                                                <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Andy</td>
                                                    <td>14/08/2019</td>
                                                    <td>99</td>
                                                    <td class="text-center"><span class="badge badge-secondary">On leave</span></td>
                                                    <td class="text-center">                                                    
                                                        <div class="dropdown custom-dropdown">
                                                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                                            </a>

                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink5">
                                                                <a class="dropdown-item" href="javascript:void(0);">Download</a>
                                                                <a class="dropdown-item" href="javascript:void(0);">Share</a>
                                                                <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Justin</td>
                                                    <td>15/08/2019</td>
                                                    <td>555</td>
                                                    <td class="text-center"><span class="badge badge-info">Pending</span></td>
                                                    <td class="text-center">                                                    
                                                        <div class="dropdown custom-dropdown">
                                                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                                            </a>

                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink6">
                                                                <a class="dropdown-item" href="javascript:void(0);">Download</a>
                                                                <a class="dropdown-item" href="javascript:void(0);">Share</a>
                                                                <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Amy</td>
                                                    <td>16/08/2019</td>
                                                    <td>300</td>
                                                    <td class="text-center"><span class="badge badge-dark">Deleted</span></td>
                                                    <td class="text-center">
                                                        
                                                        <div class="dropdown custom-dropdown">
                                                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                                            </a>

                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink7">
                                                                <a class="dropdown-item" href="javascript:void(0);">Download</a>
                                                                <a class="dropdown-item" href="javascript:void(0);">Share</a>
                                                                <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div class="table-responsive"&gt;
    &lt;table class="table table-bordered mb-4"&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th&gt;Name&lt;/th&gt;
                &lt;th&gt;Date&lt;/th&gt;
                &lt;th&gt;Sale&lt;/th&gt;
                &lt;th class="text-center"&gt;Status&lt;/th&gt;
                &lt;th class="text-center"&gt;Action&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;td&gt;Shaun&lt;/td&gt;
                &lt;td&gt;10/08/2019&lt;/td&gt;
                &lt;td&gt;320&lt;/td&gt;
                &lt;td class="text-center"&gt;&lt;span class="badge badge-success"&gt;Approved&lt;/span&gt;&lt;/td&gt;
                &lt;td class="text-center"&gt;
                    
                    &lt;div class="dropdown custom-dropdown"&gt;
                        &lt;a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"&gt;
                            &lt;svg&gt; ... &lt;/svg&gt;
                        &lt;/a&gt;

                        &lt;div class="dropdown-menu" aria-labelledby="dropdownMenuLink1"&gt;
                            &lt;a class="dropdown-item" href="javascript:void(0);"&gt;Download&lt;/a&gt;
                            &lt;a class="dropdown-item" href="javascript:void(0);"&gt;Share&lt;/a&gt;
                            &lt;a class="dropdown-item" href="javascript:void(0);"&gt;Edit&lt;/a&gt;
                            &lt;a class="dropdown-item" href="javascript:void(0);"&gt;Delete&lt;/a&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;

                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Alma&lt;/td&gt;
                &lt;td&gt;11/08/2019&lt;/td&gt;
                &lt;td&gt;420&lt;/td&gt;
                &lt;td class="text-center"&gt;&lt;span class="badge badge-primary"&gt;In Progress&lt;/span&gt;&lt;/td&gt;
                &lt;td class="text-center"&gt;
                    
                    &lt;div class="dropdown custom-dropdown"&gt;
                        &lt;a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"&gt;
                            &lt;svg&gt; ... &lt;/svg&gt;
                        &lt;/a&gt;

                        &lt;div class="dropdown-menu" aria-labelledby="dropdownMenuLink2"&gt;
                            &lt;a class="dropdown-item" href="javascript:void(0);"&gt;Download&lt;/a&gt;
                            &lt;a class="dropdown-item" href="javascript:void(0);"&gt;Share&lt;/a&gt;
                            &lt;a class="dropdown-item" href="javascript:void(0);"&gt;Edit&lt;/a&gt;
                            &lt;a class="dropdown-item" href="javascript:void(0);"&gt;Delete&lt;/a&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Kelly&lt;/td&gt;
                &lt;td&gt;12/08/2019&lt;/td&gt;
                &lt;td&gt;130&lt;/td&gt;
                &lt;td class="text-center"&gt;&lt;span class="badge badge-warning"&gt;Suspended&lt;/span&gt;&lt;/td&gt;
                &lt;td class="text-center"&gt;
                    
                    &lt;div class="dropdown custom-dropdown"&gt;
                        &lt;a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"&gt;
                            &lt;svg&gt; ... &lt;/svg&gt;
                        &lt;/a&gt;

                        &lt;div class="dropdown-menu" aria-labelledby="dropdownMenuLink3"&gt;
                            &lt;a class="dropdown-item" href="javascript:void(0);"&gt;Download&lt;/a&gt;
                            &lt;a class="dropdown-item" href="javascript:void(0);"&gt;Share&lt;/a&gt;
                            &lt;a class="dropdown-item" href="javascript:void(0);"&gt;Edit&lt;/a&gt;
                            &lt;a class="dropdown-item" href="javascript:void(0);"&gt;Delete&lt;/a&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Xavier&lt;/td&gt;
                &lt;td&gt;13/08/2019&lt;/td&gt;
                &lt;td&gt;260&lt;/td&gt;
                &lt;td class="text-center"&gt;&lt;span class="badge badge-danger"&gt;Blocked&lt;/span&gt;&lt;/td&gt;
                &lt;td class="text-center"&gt;
                    
                    &lt;div class="dropdown custom-dropdown"&gt;
                        &lt;a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"&gt;
                            &lt;svg&gt; ... &lt;/svg&gt;
                        &lt;/a&gt;

                        &lt;div class="dropdown-menu" aria-labelledby="dropdownMenuLink4"&gt;
                            &lt;a class="dropdown-item" href="javascript:void(0);"&gt;Download&lt;/a&gt;
                            &lt;a class="dropdown-item" href="javascript:void(0);"&gt;Share&lt;/a&gt;
                            &lt;a class="dropdown-item" href="javascript:void(0);"&gt;Edit&lt;/a&gt;
                            &lt;a class="dropdown-item" href="javascript:void(0);"&gt;Delete&lt;/a&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Andy&lt;/td&gt;
                &lt;td&gt;14/08/2019&lt;/td&gt;
                &lt;td&gt;99&lt;/td&gt;
                &lt;td class="text-center"&gt;&lt;span class="badge badge-secondary"&gt;On leave&lt;/span&gt;&lt;/td&gt;
                &lt;td class="text-center"&gt;                                                    
                    &lt;div class="dropdown custom-dropdown"&gt;
                        &lt;a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"&gt;
                            &lt;svg&gt; ... &lt;/svg&gt;
                        &lt;/a&gt;

                        &lt;div class="dropdown-menu" aria-labelledby="dropdownMenuLink5"&gt;
                            &lt;a class="dropdown-item" href="javascript:void(0);"&gt;Download&lt;/a&gt;
                            &lt;a class="dropdown-item" href="javascript:void(0);"&gt;Share&lt;/a&gt;
                            &lt;a class="dropdown-item" href="javascript:void(0);"&gt;Edit&lt;/a&gt;
                            &lt;a class="dropdown-item" href="javascript:void(0);"&gt;Delete&lt;/a&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Justin&lt;/td&gt;
                &lt;td&gt;15/08/2019&lt;/td&gt;
                &lt;td&gt;555&lt;/td&gt;
                &lt;td class="text-center"&gt;&lt;span class="badge badge-info"&gt;Pending&lt;/span&gt;&lt;/td&gt;
                &lt;td class="text-center"&gt;                                                    
                    &lt;div class="dropdown custom-dropdown"&gt;
                        &lt;a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"&gt;
                            &lt;svg&gt; ... &lt;/svg&gt;
                        &lt;/a&gt;

                        &lt;div class="dropdown-menu" aria-labelledby="dropdownMenuLink6"&gt;
                            &lt;a class="dropdown-item" href="javascript:void(0);"&gt;Download&lt;/a&gt;
                            &lt;a class="dropdown-item" href="javascript:void(0);"&gt;Share&lt;/a&gt;
                            &lt;a class="dropdown-item" href="javascript:void(0);"&gt;Edit&lt;/a&gt;
                            &lt;a class="dropdown-item" href="javascript:void(0);"&gt;Delete&lt;/a&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Amy&lt;/td&gt;
                &lt;td&gt;16/08/2019&lt;/td&gt;
                &lt;td&gt;300&lt;/td&gt;
                &lt;td class="text-center"&gt;&lt;span class="badge badge-dark"&gt;Deleted&lt;/span&gt;&lt;/td&gt;
                &lt;td class="text-center"&gt;
                    
                    &lt;div class="dropdown custom-dropdown"&gt;
                        &lt;a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"&gt;
                            &lt;svg&gt; ... &lt;/svg&gt;
                        &lt;/a&gt;

                        &lt;div class="dropdown-menu" aria-labelledby="dropdownMenuLink7"&gt;
                            &lt;a class="dropdown-item" href="javascript:void(0);"&gt;Download&lt;/a&gt;
                            &lt;a class="dropdown-item" href="javascript:void(0);"&gt;Share&lt;/a&gt;
                            &lt;a class="dropdown-item" href="javascript:void(0);"&gt;Edit&lt;/a&gt;
                            &lt;a class="dropdown-item" href="javascript:void(0);"&gt;Delete&lt;/a&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;
    </pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="tableFooter" class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Table with Footer</h4>
                                        </div>                       
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-condensed mb-4">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Position</th>
                                                    <th>Office</th>
                                                    <th class="text-center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Xavier</td>
                                                    <td>Developer</td>
                                                    <td>London</td>
                                                    <td class="text-center">
                                                        <ul class="table-controls">
                                                            <li><a href="javascript:void(0);"  data-toggle="tooltip" data-placement="top" title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle text-primary"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg></a></li>
                                                            <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle text-danger"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg></a></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Andy King</td>
                                                    <td>Designer</td>
                                                    <td>New York</td>
                                                    <td class="text-center">
                                                        <ul class="table-controls">
                                                            <li><a href="javascript:void(0);"  data-toggle="tooltip" data-placement="top" title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle text-primary"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg></a></li>
                                                            <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle text-danger"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg></a></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Mary McDonald</td>
                                                    <td>Accountant</td>
                                                    <td>Amazon</td>
                                                    <td class="text-center">
                                                        <ul class="table-controls">
                                                            <li><a href="javascript:void(0);"  data-toggle="tooltip" data-placement="top" title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle text-primary"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg></a></li>
                                                            <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle text-danger"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg></a></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Vincent Carpenter</td>
                                                    <td>Data Scientist</td>
                                                    <td>Canada</td>
                                                    <td class="text-center">
                                                        <ul class="table-controls">
                                                            <li><a href="javascript:void(0);"  data-toggle="tooltip" data-placement="top" title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle text-primary"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg></a></li>
                                                            <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle text-danger"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg></a></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Position</th>
                                                    <th>Office</th>
                                                    <th class="text-center">Action</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div class="table-responsive"&gt;
    &lt;table class="table table-bordered table-hover table-condensed mb-4"&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th&gt;Name&lt;/th&gt;
                &lt;th&gt;Position&lt;/th&gt;
                &lt;th&gt;Office&lt;/th&gt;
                &lt;th class="text-center"&gt;Action&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;td&gt;Xavier&lt;/td&gt;
                &lt;td&gt;Developer&lt;/td&gt;
                &lt;td&gt;London&lt;/td&gt;
                &lt;td class="text-center"&gt;
                    &lt;ul class="table-controls"&gt;
                        &lt;li&gt;&lt;a href="javascript:void(0);"  data-toggle="tooltip" data-placement="top" title="Edit"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/a&gt;&lt;/li&gt;
                        &lt;li&gt;&lt;a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Delete"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/a&gt;&lt;/li&gt;
                    &lt;/ul&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Andy King&lt;/td&gt;
                &lt;td&gt;Designer&lt;/td&gt;
                &lt;td&gt;New York&lt;/td&gt;
                &lt;td class="text-center"&gt;
                    &lt;ul class="table-controls"&gt;
                        &lt;li&gt;&lt;a href="javascript:void(0);"  data-toggle="tooltip" data-placement="top" title="Edit"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/a&gt;&lt;/li&gt;
                        &lt;li&gt;&lt;a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Delete"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/a&gt;&lt;/li&gt;
                    &lt;/ul&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Mary McDonald&lt;/td&gt;
                &lt;td&gt;Accountant&lt;/td&gt;
                &lt;td&gt;Amazon&lt;/td&gt;
                &lt;td class="text-center"&gt;
                    &lt;ul class="table-controls"&gt;
                        &lt;li&gt;&lt;a href="javascript:void(0);"  data-toggle="tooltip" data-placement="top" title="Edit"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/a&gt;&lt;/li&gt;
                        &lt;li&gt;&lt;a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Delete"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/a&gt;&lt;/li&gt;
                    &lt;/ul&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td&gt;Vincent Carpenter&lt;/td&gt;
                &lt;td&gt;Data Scientist&lt;/td&gt;
                &lt;td&gt;Canada&lt;/td&gt;
                &lt;td class="text-center"&gt;
                    &lt;ul class="table-controls"&gt;
                        &lt;li&gt;&lt;a href="javascript:void(0);"  data-toggle="tooltip" data-placement="top" title="Edit"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/a&gt;&lt;/li&gt;
                        &lt;li&gt;&lt;a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Delete"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/a&gt;&lt;/li&gt;
                    &lt;/ul&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
        &lt;tfoot&gt;
            &lt;tr&gt;
                &lt;th&gt;Name&lt;/th&gt;
                &lt;th&gt;Position&lt;/th&gt;
                &lt;th&gt;Office&lt;/th&gt;
                &lt;th class="text-center"&gt;Action&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/tfoot&gt;
    &lt;/table&gt;
&lt;/div&gt;
    </pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>                    
                    
                        <div id="tableCheckbox" class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Checkboxes</h4>
                                        </div>                       
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped table-checkable table-highlight-head mb-4">
                                            <thead>
                                                <tr>
                                                    <th class="checkbox-column">
                                                        <label class="new-control new-checkbox checkbox-primary" style="height: 18px; margin: 0 auto;">
                                                            <input type="checkbox" class="new-control-input todochkbox" id="todoAll">
                                                            <span class="new-control-indicator"></span>
                                                        </label>
                                                    </th>
                                                    <th class="">Name</th>
                                                    <th class="">Date</th>
                                                    <th class="">Sales</th>
                                                    <th class="text-center">Icons</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="checkbox-column">
                                                        <label class="new-control new-checkbox checkbox-primary" style="height: 18px; margin: 0 auto;">
                                                            <input type="checkbox" class="new-control-input todochkbox" id="todo-1">
                                                            <span class="new-control-indicator"></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <p class="mb-0">Shaun Park</p>
                                                    </td>
                                                    <td>10/08/2019</td>
                                                    <td>320</td>

                                                    <td class="text-center">
                                                        <ul class="table-controls">
                                                            <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Settings"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings text-primary"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg></a> </li>
                                                            <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 text-success"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a></li>
                                                            <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 text-danger"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></a></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="checkbox-column">
                                                        <label class="new-control new-checkbox checkbox-primary" style="height: 18px; margin: 0 auto;">
                                                            <input type="checkbox" class="new-control-input todochkbox" id="todo-2">
                                                            <span class="new-control-indicator"></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <p  class="mb-0">Alma Clarke</p>
                                                    </td>
                                                    <td>11/08/2019</td>
                                                    <td>420</td>
                                                    <td class="text-center">
                                                        <ul class="table-controls">
                                                            <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Settings"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings text-primary"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg></a> </li>
                                                            <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 text-success"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a></li>
                                                            <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 text-danger"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></a></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="checkbox-column">
                                                        <label class="new-control new-checkbox checkbox-primary" style="height: 18px; margin: 0 auto;">
                                                            <input type="checkbox" class="new-control-input todochkbox" id="todo-3">
                                                            <span class="new-control-indicator"></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <p class="mb-0">Kelly Young</p>
                                                    </td>
                                                    <td>12/08/2019</td>
                                                    <td>130</td>
                                                    <td class="text-center">
                                                        <ul class="table-controls">
                                                            <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Settings"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings text-primary"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg></a> </li>
                                                            <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 text-success"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a></li>
                                                            <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 text-danger"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></a></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="checkbox-column">
                                                        <label class="new-control new-checkbox checkbox-primary" style="height: 18px; margin: 0 auto;">
                                                            <input type="checkbox" class="new-control-input todochkbox" id="todo-4">
                                                            <span class="new-control-indicator"></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <p  class="mb-0">Vincent Carpenter</p>
                                                    </td>
                                                    <td>13/08/2019</td>
                                                    <td>260</td>
                                                    <td class="text-center">
                                                        <ul class="table-controls">
                                                            <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Settings"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings text-primary"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg></a> </li>
                                                            <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 text-success"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a></li>
                                                            <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 text-danger"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></a></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="checkbox-column">
                                                        <label class="new-control new-checkbox checkbox-primary" style="height: 18px; margin: 0 auto;">
                                                            <input type="checkbox" class="new-control-input todochkbox" id="todo-5">
                                                            <span class="new-control-indicator"></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <p  class="mb-0">Andy King</p>
                                                    </td>
                                                    <td>14/08/2019</td>
                                                    <td>180</td>
                                                    <td class="text-center">
                                                        <ul class="table-controls">
                                                            <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Settings"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings text-primary"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg></a> </li>
                                                            <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 text-success"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a></li>
                                                            <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 text-danger"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></a></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                                <pre>
&lt;div class="table-responsive"&gt;
    &lt;table class="table table-bordered table-hover table-striped table-checkable table-highlight-head mb-4"&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th class="checkbox-column"&gt;
                    &lt;div class="custom-control custom-checkbox checkbox-primary"&gt;
                      &lt;input type="checkbox" class="custom-control-input todochkbox" id="todoAll"&gt;
                      &lt;label class="custom-control-label" for="todoAll"&gt;&lt;/label&gt;
                    &lt;/div&gt;
                &lt;/th&gt;
                &lt;th class=""&gt;Name&lt;/th&gt;
                &lt;th class=""&gt;Date&lt;/th&gt;
                &lt;th class=""&gt;Sales&lt;/th&gt;
                &lt;th class="text-center"&gt;Icons&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;td class="checkbox-column"&gt;
                    &lt;div class="custom-control custom-checkbox checkbox-primary"&gt;
                      &lt;input type="checkbox" class="custom-control-input todochkbox" id="todo-1"&gt;
                      &lt;label class="custom-control-label" for="todo-1"&gt;&lt;/label&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;
                    &lt;p class="mb-0"&gt;Shaun Park&lt;/p&gt;
                &lt;/td&gt;
                &lt;td&gt;10/08/2019&lt;/td&gt;
                &lt;td&gt;320&lt;/td&gt;

                &lt;td class="text-center"&gt;
                    &lt;ul class="table-controls"&gt;
                        &lt;li&gt;&lt;a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Settings"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/a&gt; &lt;/li&gt;
                        &lt;li&gt;&lt;a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Edit"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/a&gt;&lt;/li&gt;
                        &lt;li&gt;&lt;a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Delete"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/a&gt;&lt;/li&gt;
                    &lt;/ul&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td class="checkbox-column"&gt;
                    &lt;div class="custom-control custom-checkbox checkbox-primary"&gt;
                      &lt;input type="checkbox" class="custom-control-input todochkbox" id="todo-2"&gt;
                      &lt;label class="custom-control-label" for="todo-2"&gt;&lt;/label&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;
                    &lt;p  class="mb-0"&gt;Alma Clarke&lt;/p&gt;
                &lt;/td&gt;
                &lt;td&gt;11/08/2019&lt;/td&gt;
                &lt;td&gt;420&lt;/td&gt;
                &lt;td class="text-center"&gt;
                    &lt;ul class="table-controls"&gt;
                        &lt;li&gt;&lt;a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Settings"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/a&gt; &lt;/li&gt;
                        &lt;li&gt;&lt;a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Edit"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/a&gt;&lt;/li&gt;
                        &lt;li&gt;&lt;a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Delete"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/a&gt;&lt;/li&gt;
                    &lt;/ul&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td class="checkbox-column"&gt;
                    &lt;div class="custom-control custom-checkbox checkbox-primary"&gt;
                      &lt;input type="checkbox" class="custom-control-input todochkbox" id="todo-3"&gt;
                      &lt;label class="custom-control-label" for="todo-3"&gt;&lt;/label&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;
                    &lt;p class="mb-0"&gt;Kelly Young&lt;/p&gt;
                &lt;/td&gt;
                &lt;td&gt;12/08/2019&lt;/td&gt;
                &lt;td&gt;130&lt;/td&gt;
                &lt;td class="text-center"&gt;
                    &lt;ul class="table-controls"&gt;
                        &lt;li&gt;&lt;a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Settings"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/a&gt; &lt;/li&gt;
                        &lt;li&gt;&lt;a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Edit"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/a&gt;&lt;/li&gt;
                        &lt;li&gt;&lt;a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Delete"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/a&gt;&lt;/li&gt;
                    &lt;/ul&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td class="checkbox-column"&gt;
                    &lt;div class="custom-control custom-checkbox checkbox-primary"&gt;
                      &lt;input type="checkbox" class="custom-control-input todochkbox" id="todo-4"&gt;
                      &lt;label class="custom-control-label" for="todo-4"&gt;&lt;/label&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;
                    &lt;p  class="mb-0"&gt;Vincent Carpenter&lt;/p&gt;
                &lt;/td&gt;
                &lt;td&gt;13/08/2019&lt;/td&gt;
                &lt;td&gt;260&lt;/td&gt;
                &lt;td class="text-center"&gt;
                    &lt;ul class="table-controls"&gt;
                        &lt;li&gt;&lt;a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Settings"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/a&gt; &lt;/li&gt;
                        &lt;li&gt;&lt;a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Edit"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/a&gt;&lt;/li&gt;
                        &lt;li&gt;&lt;a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Delete"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/a&gt;&lt;/li&gt;
                    &lt;/ul&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;td class="checkbox-column"&gt;
                    &lt;div class="custom-control custom-checkbox checkbox-primary"&gt;
                      &lt;input type="checkbox" class="custom-control-input todochkbox" id="todo-5"&gt;
                      &lt;label class="custom-control-label" for="todo-5"&gt;&lt;/label&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td&gt;
                    &lt;p  class="mb-0"&gt;Andy King&lt;/p&gt;
                &lt;/td&gt;
                &lt;td&gt;14/08/2019&lt;/td&gt;
                &lt;td&gt;180&lt;/td&gt;
                &lt;td class="text-center"&gt;
                    &lt;ul class="table-controls"&gt;
                        &lt;li&gt;&lt;a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Settings"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/a&gt; &lt;/li&gt;
                        &lt;li&gt;&lt;a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Edit"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/a&gt;&lt;/li&gt;
                        &lt;li&gt;&lt;a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Delete"&gt;&lt;svg&gt; ... &lt;/svg&gt;&lt;/a&gt;&lt;/li&gt;
                    &lt;/ul&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
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