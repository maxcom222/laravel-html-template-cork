@extends('layouts.app')

@section('content')

            <div class="container">

                <div class="container">

                    <div id="navSection" data-spy="affix" class="nav sidenav">
                        <div class="sidenav-content">
                            <a href="#typographyHeading" class="active nav-link">Heading</a>
                            <a href="#typographyInline-elements" class="nav-link">Inline Elements</a>
                            <a href="#typographyLists" class="nav-link">Lists</a>
                            <a href="#typographyBlockquotes" class="nav-link">Blockquotes</a>
                        </div>
                    </div>

                    <div class="row layout-top-spacing">

                        <div id="typographyHeading" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Heading</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="font-family-showcase">
                                        <div class="font-family-text"><p> The quick brown fox </p></div>
                                        <div class="font-family-info">
                                            <h5>Nunito</h5>
                                            <a href="https://fonts.google.com" target="_blank" class="font-family-credit">Google Fonts</a>
                                            <div class="font-family-link">
                                                <a class="btn btn-primary" target="_blank" href="https://fonts.google.com/?query=Nunito&selection.family=Nunito:400,600,700">View Family</a>
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
                                            <h4>Heading</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="row">
                                        <div class="col-xl-6 mx-auto">
                                            <div class="element-background">
                                                <h1>H1. Heading</h1>
                                                <h2>H2. Heading</h2>
                                                <h3>H3. Heading</h3>
                                                <h4>H4. Heading</h4>
                                                <h5>H5. Heading</h5>
                                                <h6>H6. Heading</h6>
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
                                            <h4>Heading Colored</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="row">
                                        <div class="col-xl-6 mx-auto">
                                            <div class="element-background">
                                                <h1 class="text-primary">H1. Heading</h1>
                                                <h2 class="text-info">H2. Heading</h2>
                                                <h3 class="text-success">H3. Heading</h3>
                                                <h4 class="text-warning">H4. Heading</h4>
                                                <h5 class="text-danger">H5. Heading</h5>
                                                <h6 class="text-secondary">H6. Heading</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="typographyInline-elements" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4> Inline text elements</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="row">
                                        <div class="col-xl-9 mx-auto">
                                            <div class="element-background">
                                                <p>You can use the mark tag to <mark>highlight</mark> text. ( <code>mark</code> tag )</p>
                                                <p>You can use the mark tag to <mark class="bg-primary br-6">highlight</mark> text. ( <span><code>mark</code> tag with <code>.bg-primary</code></span> )</p>
                                                <p><del>This line of text is meant to be treated as deleted text.</del> ( <code>del</code> tag ) </p>
                                                <p><s>This line of text is meant to be treated as no longer accurate.</s> ( <code>s</code> tag ) </p>
                                                <p><ins>This line of text is meant to be treated as an addition to the document.</ins> ( <code>ins</code> tag ) </p>
                                                <p><u>This line of text will render as underlined</u> ( <code>u</code> tag ) </p>
                                                <p><small>This line of text is meant to be treated as fine print.</small> ( <code>small</code> tag ) </p>
                                                <p><strong>This line rendered as bold text.</strong> ( <code>strong</code> tag ) </p>
                                                <p><em>This line rendered as italicized text.</em> ( <code>em</code> tag ) </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="typographyLists" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4> Icon List </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">

                                    <div class="row">
                                        <div class="col-xl-6 mx-auto">
                                            <div class="element-background">
                                                <ul class="list-icon">
                                                    <li>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                                                        <span class="list-text">Aliquam et eros vehicula.</span>
                                                    </li>
                                                    <li>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                                                        <span class="list-text">Vivamus lacus suscipit.</span>
                                                    </li>
                                                    <li>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                                                        <span class="list-text">Morbi luctus tincidunt.</span>
                                                    </li>
                                                    <li>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                                                        <span class="list-text">Nulla metus dolor.</span>
                                                    </li>
                                                </ul>
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
                                            <h4>Unordered list</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="row">
                                        <div class="col-xl-6 mx-auto">
                                            <div class="element-background">
                                                <ul>
                                                    <li class="mb-1">Consectetur adipiscing elit</li>
                                                    <li class="mb-1">Integer molestie lorem at massa</li>
                                                    <li class="mb-1">Facilisis in pretium nisl aliquet</li>
                                                    <li>
                                                        <ul>
                                                            <li class="mb-1 mt-1">Phasellus iaculis neque</li>
                                                            <li class="mb-1">Purus sodales ultricies</li>
                                                            <li class="mb-1">Ac tristique libero volutpat at</li>
                                                        </ul>
                                                    </li>
                                                    <li class="mb-1 mt-1">Faucibus porta lacus fringilla vel</li>
                                                    <li class="mb-1">Aenean sit amet erat nunc</li>
                                                    <li class="mb-1">Eget porttitor lorem</li>
                                                </ul>
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
                                            <h4>Ordered list</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="row">
                                        <div class="col-xl-6 mx-auto">
                                            <div class="element-background">
                                                <ol>
                                                    <li class="mb-1">Lorem ipsum dolor sit amet</li>
                                                    <li class="mb-1">Consectetur adipiscing elit</li>
                                                    <li class="mb-1">Integer molestie lorem at massa
                                                        <ol>
                                                            <li class="mb-1">Purus sodales ultricies</li>
                                                            <li class="mb-1">Vestibulum laoreet porttitor sem</li>
                                                            <li class="mb-1 mt-1">Phasellus iaculis neque</li>
                                                        </ol>
                                                    </li>
                                                    <li class="mb-1">Aenean sit amet erat nunc</li>
                                                    <li class="mb-1">Eget porttitor lorem</li>
                                                    <li class="mb-1 mt-1">Faucibus porta lacus fringilla vel</li>
                                                </ol>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                        </div>

                        <div id="typographyBlockquotes" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4> Blockquote</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="row">
                                        <div class="col-xl-9 mx-auto">
                                            <blockquote class="blockquote">
                                               <p class="d-inline">Nulla et metus venenatis, ornare ante quis, condimentum dolor.</p>
                                                <small>Someone famous <cite title="Source Title">Source Title</cite></small>
                                            </blockquote>
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
                                            <h4>Blockquote with profile</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="row">
                                        <div class="col-xl-9 mx-auto">
                                            <blockquote class="blockquote media-object">
                                                <div class="media">
                                                    <div class="usr-img mr-2">
                                                        <img alt="avatar" src="{{asset('storage/img/90x90.jpg')}}" class="br-30">
                                                    </div>
                                                    <div class="media-body align-self-center">
                                                       <p class="d-inline">Morbi luctus elit eu sem euismod, at elementum odio tincidunt.</p>
                                                    </div>
                                                </div>
                                                <small class="text-right">Someone famous <cite title="Source Title">Source Title</cite></small>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
@endsection