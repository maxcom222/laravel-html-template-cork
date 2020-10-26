@extends('layouts.app')

@section('content')
            <div class="container">

                <div class="container">

                    <div id="navSection" data-spy="affix" class="nav sidenav">
                        <div class="sidenav-content">
                            <a href="#avatarBasic" class="active nav-link">Basic</a>
                            <a href="#avatarIndicators" class="nav-link">Indicators</a>
                            <a href="#avatarShapes" class="nav-link">Shapes</a>
                            <a href="#avatarInitials" class="nav-link">Initials</a>
                            <a href="#avatarGroup" class="nav-link">Group</a>
                            <a href="#avatarAnimate" class="nav-link">Animate</a>
                            <a href="#avatarTooltip" class="nav-link">Tooltip</a>
                        </div>
                    </div>

                    <div class="row layout-top-spacing">
                        <div id="avatarBasic" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Avatar</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area image-style-content text-center">

                                    <p class="mb-5">Use <code>.badge-collapsed-img</code> class on <code>ul</code> tag.</p>

                                    <div class="avatar avatar-xl">
                                        <img alt="avatar" src="{{asset('storage/img/90x90.jpg')}}" class="rounded-circle" />
                                    </div>
                                    <div class="avatar avatar-lg">
                                        <img alt="avatar" src="{{asset('storage/img/90x90.jpg')}}" class="rounded-circle" />
                                    </div>
                                    <div class="avatar">
                                        <img alt="avatar" src="{{asset('storage/img/90x90.jpg')}}" class="rounded-circle" />
                                    </div>
                                    <div class="avatar avatar-sm">
                                        <img alt="avatar" src="{{asset('storage/img/90x90.jpg')}}" class="rounded-circle" />
                                    </div>

                                    <div class="code-section-container show-code">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div class="avatar avatar-xl"&gt;
    &lt;img alt="avatar" src="{{asset('storage/img/90x90.jpg')}}" class="rounded-circle" /&gt;
&lt;/div&gt;
&lt;div class="avatar avatar-lg"&gt;
    &lt;img alt="avatar" src="{{asset('storage/img/90x90.jpg')}}" class="rounded-circle" /&gt;
&lt;/div&gt;
&lt;div class="avatar"&gt;
    &lt;img alt="avatar" src="{{asset('storage/img/90x90.jpg')}}" class="rounded-circle" /&gt;
&lt;/div&gt;
&lt;div class="avatar avatar-sm"&gt;
    &lt;img alt="avatar" src="{{asset('storage/img/90x90.jpg')}}" class="rounded-circle" /&gt;
&lt;/div&gt;
</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="avatarIndicators" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Indicators</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area image-style-content text-center">

                                    <p class="mb-5">Use <code>.avatar-indicators</code> class on <code> div.avatar</code> element</p>

                                    <div class="avatar avatar-xl avatar-indicators avatar-offline">
                                        <img alt="avatar" src="{{asset('storage/img/90x90.jpg')}}" class="rounded-circle" />
                                    </div>
                                    <div class="avatar avatar-lg avatar-indicators avatar-online">
                                        <img alt="avatar" src="{{asset('storage/img/90x90.jpg')}}" class="rounded-circle" />
                                    </div>
                                    <div class="avatar avatar-indicators avatar-offline">
                                        <img alt="avatar" src="{{asset('storage/img/90x90.jpg')}}" class="rounded-circle" />
                                    </div>
                                    <div class="avatar avatar-sm avatar-indicators avatar-online">
                                        <img alt="avatar" src="{{asset('storage/img/90x90.jpg')}}" class="rounded-circle" />
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div class="avatar avatar-xl avatar-indicators avatar-offline"&gt;
    &lt;img alt="avatar" src="{{asset('storage/img/90x90.jpg')}}" class="rounded-circle" /&gt;
&lt;/div&gt;
&lt;div class="avatar avatar-lg avatar-indicators avatar-online"&gt;
    &lt;img alt="avatar" src="{{asset('storage/img/90x90.jpg')}}" class="rounded-circle" /&gt;
&lt;/div&gt;
&lt;div class="avatar avatar-indicators avatar-offline"&gt;
    &lt;img alt="avatar" src="{{asset('storage/img/90x90.jpg')}}" class="rounded-circle" /&gt;
&lt;/div&gt;
&lt;div class="avatar avatar-sm avatar-indicators avatar-online"&gt;
    &lt;img alt="avatar" src="{{asset('storage/img/90x90.jpg')}}" class="rounded-circle" /&gt;
&lt;/div&gt;
</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="avatarShapes" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Shapes</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area image-style-content text-center">

                                    <p class="mb-5">Use <code>.rounded</code> and <code>.rounded-circle</code> class to make avatar rounded and circlular respectively.</p>

                                    <div class="avatar avatar-xl">
                                        <img alt="avatar" src="{{asset('storage/img/90x90.jpg')}}" class="rounded" />
                                    </div>
                                    <div class="avatar avatar-xl">
                                        <img alt="avatar" src="{{asset('storage/img/90x90.jpg')}}" class="rounded-circle" />
                                    </div>

                                    <div class="avatar avatar-lg">
                                        <img alt="avatar" src="{{asset('storage/img/90x90.jpg')}}" class="rounded" />
                                    </div>
                                    <div class="avatar avatar-lg">
                                        <img alt="avatar" src="{{asset('storage/img/90x90.jpg')}}" class="rounded-circle" />
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div class="avatar avatar-xl"&gt;
    &lt;img alt="avatar" src="{{asset('storage/img/90x90.jpg')}}" class="rounded" /&gt;
&lt;/div&gt;
&lt;div class="avatar avatar-xl"&gt;
    &lt;img alt="avatar" src="{{asset('storage/img/90x90.jpg')}}" class="rounded-circle" /&gt;
&lt;/div&gt;

&lt;div class="avatar avatar-lg"&gt;
    &lt;img alt="avatar" src="{{asset('storage/img/90x90.jpg')}}" class="rounded" /&gt;
&lt;/div&gt;
&lt;div class="avatar avatar-lg"&gt;
    &lt;img alt="avatar" src="{{asset('storage/img/90x90.jpg')}}" class="rounded-circle" /&gt;
&lt;/div&gt;
</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="avatarInitials" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Initials</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area image-style-content text-center">
                                    <p class="mb-5">Use <code>span</code> with <code>.avatar-title</code> class to make user name tags.</p>

                                    <div class="avatar avatar-xl">
                                        <span class="avatar-title rounded-circle">AG</span>
                                    </div>
                                    <div class="avatar avatar-lg">
                                        <span class="avatar-title rounded-circle">AG</span>
                                    </div>
                                    <div class="avatar">
                                        <span class="avatar-title rounded-circle">AG</span>
                                    </div>
                                    <div class="avatar avatar-sm">
                                        <span class="avatar-title rounded-circle">AG</span>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div class="avatar avatar-xl"&gt;
    &lt;span class="avatar-title rounded-circle"&gt;AG&lt;/span&gt;
&lt;/div&gt;
&lt;div class="avatar avatar-lg"&gt;
    &lt;span class="avatar-title rounded-circle"&gt;AG&lt;/span&gt;
&lt;/div&gt;
&lt;div class="avatar"&gt;
    &lt;span class="avatar-title rounded-circle"&gt;AG&lt;/span&gt;
&lt;/div&gt;
&lt;div class="avatar avatar-sm"&gt;
    &lt;span class="avatar-title rounded-circle"&gt;AG&lt;/span&gt;
&lt;/div&gt;
</pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="avatarGroup" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Group</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area image-style-content text-center">

                                    <p class="mb-5">Use <code>div</code> with <code>.avatar--group</code> class and put <code>div.avatar</code> inside it.</p>

                                    <div class="avatar--group">
                                        <div class="avatar avatar-lg">
                                            <img alt="avatar" src="{{asset('storage/img/90x90.jpg')}}" class="rounded-circle" />
                                        </div>
                                        <div class="avatar avatar-lg">
                                            <img alt="avatar" src="{{asset('storage/img/90x90.jpg')}}" class="rounded-circle" />
                                        </div>
                                        <div class="avatar avatar-lg">
                                            <img alt="avatar" src="{{asset('storage/img/90x90.jpg')}}" class="rounded-circle" />
                                        </div>
                                        <div class="avatar avatar-lg">
                                            <span class="avatar-title rounded-circle">AG</span>
                                        </div>
                                    </div>

                                    <div class="avatar--group">
                                        <div class="avatar avatar-md">
                                            <img alt="avatar" src="{{asset('storage/img/90x90.jpg')}}" class="rounded-circle" />
                                        </div>
                                        <div class="avatar avatar-md">
                                            <img alt="avatar" src="{{asset('storage/img/90x90.jpg')}}" class="rounded-circle" />
                                        </div>
                                        <div class="avatar avatar-md">
                                            <img alt="avatar" src="{{asset('storage/img/90x90.jpg')}}" class="rounded-circle" />
                                        </div>
                                        <div class="avatar avatar-md">
                                            <span class="avatar-title rounded-circle">AG</span>
                                        </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div class="avatar--group"&gt;
    &lt;div class="avatar avatar-md"&gt;
        &lt;img alt="avatar" src="{{asset('storage/img/90x90.jpg')}}" class="rounded-circle" /&gt;
    &lt;/div&gt;
    &lt;div class="avatar avatar-md"&gt;
        &lt;img alt="avatar" src="{{asset('storage/img/90x90.jpg')}}" class="rounded-circle" /&gt;
    &lt;/div&gt;
    &lt;div class="avatar avatar-md"&gt;
        &lt;img alt="avatar" src="{{asset('storage/img/90x90.jpg')}}" class="rounded-circle" /&gt;
    &lt;/div&gt;
    &lt;div class="avatar avatar-md"&gt;
        &lt;span class="avatar-title rounded-circle"&gt;AG&lt;/span&gt;
    &lt;/div&gt;
&lt;/div&gt;
</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>


                        <div id="avatarAnimate" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Animate Y-axis</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area image-style-content text-center">

                                    <p class="mb-5">Use <code>.translateY-axis</code> class to make animate profile on Y-axis.</p>

                                    <div class="avatar--group">
                                        <div class="avatar translateY-axis">
                                            <img alt="avatar" src="{{asset('storage/img/90x90.jpg')}}" class="rounded-circle" />
                                        </div>
                                        <div class="avatar translateY-axis">
                                            <img alt="avatar" src="{{asset('storage/img/90x90.jpg')}}" class="rounded-circle" />
                                        </div>
                                        <div class="avatar translateY-axis">
                                            <img alt="avatar" src="{{asset('storage/img/90x90.jpg')}}" class="rounded-circle" />
                                        </div>
                                        <div class="avatar translateY-axis">
                                            <span class="avatar-title rounded-circle">AG</span>
                                        </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div class="avatar--group"&gt;
    &lt;div class="avatar translateY-axis"&gt;
        &lt;img alt="avatar" src="{{asset('storage/img/90x90.jpg')}}" class="rounded-circle" /&gt;
    &lt;/div&gt;
    &lt;div class="avatar translateY-axis"&gt;
        &lt;img alt="avatar" src="{{asset('storage/img/90x90.jpg')}}" class="rounded-circle" /&gt;
    &lt;/div&gt;
    &lt;div class="avatar translateY-axis"&gt;
        &lt;img alt="avatar" src="{{asset('storage/img/90x90.jpg')}}" class="rounded-circle" /&gt;
    &lt;/div&gt;
    &lt;div class="avatar translateY-axis"&gt;
        &lt;span class="avatar-title rounded-circle"&gt;AG&lt;/span&gt;
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
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Animate X-axis</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area image-style-content text-center">

                                    <p class="mb-5">Use <code>.translateX-axis</code> class to make animate profile on X-axis.</p>

                                    <div class="avatar--group">
                                        <div class="avatar translateX-axis">
                                            <img alt="avatar" src="{{asset('storage/img/90x90.jpg')}}" class="rounded-circle" />
                                        </div>
                                        <div class="avatar translateX-axis">
                                            <img alt="avatar" src="{{asset('storage/img/90x90.jpg')}}" class="rounded-circle" />
                                        </div>
                                        <div class="avatar translateX-axis">
                                            <img alt="avatar" src="{{asset('storage/img/90x90.jpg')}}" class="rounded-circle" />
                                        </div>
                                        <div class="avatar translateX-axis">
                                            <span class="avatar-title rounded-circle">AG</span>
                                        </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div class="avatar--group"&gt;
    &lt;div class="avatar translateX-axis"&gt;
        &lt;img alt="avatar" src="{{asset('storage/img/90x90.jpg')}}" class="rounded-circle" /&gt;
    &lt;/div&gt;
    &lt;div class="avatar translateX-axis"&gt;
        &lt;img alt="avatar" src="{{asset('storage/img/90x90.jpg')}}" class="rounded-circle" /&gt;
    &lt;/div&gt;
    &lt;div class="avatar translateX-axis"&gt;
        &lt;img alt="avatar" src="{{asset('storage/img/90x90.jpg')}}" class="rounded-circle" /&gt;
    &lt;/div&gt;
    &lt;div class="avatar translateX-axis"&gt;
        &lt;span class="avatar-title rounded-circle"&gt;AG&lt;/span&gt;
    &lt;/div&gt;
&lt;/div&gt;
</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>


                        <div id="avatarTooltip" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Tooltip</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area image-style-content text-center">

                                    <p class="mb-5">Use Bootstrap Tooltip on <code>img</code> tag and <code>span.avatar-title</code> tag</p>

                                    <div class="avatar--group">
                                        <div class="avatar">
                                            <img alt="avatar" src="{{asset('storage/img/90x90.jpg')}}" class="rounded-circle  bs-tooltip" data-original-title="Judy Holmes" />
                                        </div>
                                        <div class="avatar">
                                            <img alt="avatar" src="{{asset('storage/img/90x90.jpg')}}" class="rounded-circle  bs-tooltip" data-original-title="Judy Holmes" />
                                        </div>
                                        <div class="avatar">
                                            <img alt="avatar" src="{{asset('storage/img/90x90.jpg')}}" class="rounded-circle  bs-tooltip" data-original-title="Judy Holmes" />
                                        </div>
                                        <div class="avatar">
                                            <span class="avatar-title rounded-circle  bs-tooltip" data-original-title="Alan Green">AG</span>
                                        </div>
                                    </div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
&lt;div class="avatar--group"&gt;
    &lt;div class="avatar"&gt;
        &lt;img alt="avatar" src="{{asset('storage/img/90x90.jpg')}}" class="rounded-circle  bs-tooltip" data-original-title="Judy Holmes" /&gt;
    &lt;/div&gt;
    &lt;div class="avatar"&gt;
        &lt;img alt="avatar" src="{{asset('storage/img/90x90.jpg')}}" class="rounded-circle  bs-tooltip" data-original-title="Judy Holmes" /&gt;
    &lt;/div&gt;
    &lt;div class="avatar"&gt;
        &lt;img alt="avatar" src="{{asset('storage/img/90x90.jpg')}}" class="rounded-circle  bs-tooltip" data-original-title="Judy Holmes" /&gt;
    &lt;/div&gt;
    &lt;div class="avatar"&gt;
        &lt;span class="avatar-title rounded-circle  bs-tooltip" data-original-title="Alan Green"&gt;AG&lt;/span&gt;
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