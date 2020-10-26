@extends('layouts.app')

@section('content')

            <div class="container">
                <div class="container">

                    <div id="navSection" data-spy="affix" class="nav  sidenav">
                        <div class="sidenav-content">
                            <a href="#wizards_pills" class="active nav-link">Pills</a>
                            <a href="#wizards_circle" class="nav-link">Circle</a>
                        </div>
                    </div>

                    <div class="row layout-top-spacing" id="cancel-row">

                        <div id="wizards_pills" class="col-lg-12">
                            <div class="seperator-header">
                                <h4 class="">Pills</h4>
                            </div>
                        </div>

                        <div class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Default</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div id="example-basic">
                                        <h3>Home</h3>
                                        <section> <p>Try the keyboard navigation by clicking arrow left or right!</p> </section>
                                        <h3>About</h3>
                                        <section> <p>Wonderful transition effects.</p> </section>
                                        <h3>Settings</h3>
                                        <section> <p>The next and previous buttons help you to navigate through your content.</p> </section>
                                    </div>

                                    <div class="code-section-container show-code">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
$("selector").steps({
    cssClass: 'pill wizard'
});
</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12  layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Vertical</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div id="pill-vertical">
                                        <h3>Keyboard</h3>
                                        <section>
                                            <p>Try the keyboard navigation by clicking arrow left or right!</p>
                                        </section>
                                        <h3>Effects</h3>
                                        <section>
                                            <p>Wonderful transition effects.</p>
                                        </section>
                                        <h3>Pager</h3>
                                        <section>
                                            <p>The next and previous buttons help you to navigate through your content.</p>
                                        </section>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
$("selector").steps({
    cssClass: 'pills wizard',
    stepsOrientation: "vertical"
});
</pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="wizards_circle" class="col-lg-12">
                            <div class="seperator-header">
                                <h4 class="">Circle</h4>
                            </div>
                        </div>

                        <div class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Default</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div id="circle-basic" class="">
                                        <h3>Keyboard</h3>
                                        <section>
                                            <p>Try the keyboard navigation by clicking arrow left or right!</p>
                                        </section>
                                        <h3>Effects</h3>
                                        <section>
                                            <p>Wonderful transition effects.</p>
                                        </section>
                                        <h3>Pager</h3>
                                        <section>
                                            <p>The next and previous buttons help you to navigate through your content.</p>
                                        </section>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
$("selector").steps({
    cssClass: 'circle wizard'
});
</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12  layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Vertical</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div id="example-vertical">
                                        <h3>Keyboard</h3>
                                        <section>
                                            <p>Try the keyboard navigation by clicking arrow left or right!</p>
                                        </section>
                                        <h3>Effects</h3>
                                        <section>
                                            <p>Wonderful transition effects.</p>
                                        </section>
                                        <h3>Pager</h3>
                                        <section>
                                            <p>The next and previous buttons help you to navigate through your content.</p>
                                        </section>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
$("selector").steps({
    cssClass: 'circle wizard',
    stepsOrientation: "vertical"
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