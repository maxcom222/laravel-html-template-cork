@extends('layouts.app')

@section('content')

            <div class="container">
                <div class="container">

                    <div id="navSection" data-spy="affix" class="nav sidenav">
                        <div class="sidenav-content">
                            <a href="#mapWorld" class="active nav-link">World</a>
                            <a href="#mapContinents" class="nav-link">Continents</a>
                            <a href="#mapAfrica" class="nav-link">Africa</a>
                            <a href="#mapAsia" class="nav-link">Asia</a>
                            <a href="#mapNorthAmerica" class="nav-link">North America</a>
                            <a href="#mapOceania" class="nav-link">Oceania</a>
                            <a href="#mapEurope" class="nav-link">Europe</a>
                            <a href="#mapSouthAmerica" class="nav-link">South America</a>
                        </div>
                    </div>
                
                    <div class="row">
                        <div id="mapWorld" class="col-lg-12 layout-top-spacing layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>World</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div id="world-map" style="height: 400px"></div>

                                    <div class="code-section-container show-code">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                                <pre>
$('#world-map').vectorMap({
    map: 'world_mill_en',
    backgroundColor: '#5c1ac3',
    borderColor: '#818181',
    borderOpacity: 0.25,
    borderWidth: 1,
    color: '#f4f3f0',
    regionStyle: {
        initial: {
            fill: '#fff'
        }
    },
    markerStyle: {
        initial: {
            r: 9,
            'fill': '#fff',
            'fill-opacity': 1,
            'stroke': '#000',
            'stroke-width': 5,
            'stroke-opacity': 0.4
        },
    },
    enableZoom: true,
    hoverColor: '#060818',
    hoverOpacity: null,
    normalizeFunction: 'linear',
    scaleColors: ['#b6d6ff', '#005ace'],
    selectedColor: '#c9dfaf',
    selectedRegions: [],
    showTooltip: true,
});</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="mapContinents" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Continents</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div id="continents-map" style="height: 400px"></div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                                <pre>
$('#continents-map').vectorMap({
    map: 'continents_mill',
    backgroundColor: '#25d5e4',
    regionStyle: {
        initial: {
            fill: '#fff'
        }
    }
});</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="mapAfrica" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Africa</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div id="africa-map" style="height: 400px"></div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
$('#africa-map').vectorMap({
    map: 'africa_mill',
    backgroundColor: '#f8538d',
    regionStyle: {
        initial: {
            fill: '#fff'
        }
    }

});</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="mapAsia" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Asia</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div id="asia-map" style="height: 400px"></div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
$('#asia-map').vectorMap({
    map: 'asia_mill',
    backgroundColor: '#2196f3',
    regionStyle: {
        initial: {
            fill: '#fff'
        }
    }
});</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="mapNorthAmerica" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>North America</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div id="north_america-map" style="height: 400px"></div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                                <pre>
$('#north_america-map').vectorMap({
    map: 'north_america_mill',
    backgroundColor: '#ffbb44',
    regionStyle: {
        initial: {
            fill: '#fff'
        }
    }
});</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="mapOceania" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Oceania</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div id="oceanina-map" class="mx-sm-5" style="height: 400px;"></div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                                <pre>
$('#oceanina-map').vectorMap({
    map: 'oceania_mill',
    backgroundColor: '#e95f2b',
    regionStyle: {
        initial: {
            fill: '#fff'
        }
    }
});</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="mapEurope" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Europe</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div id="europe-map" style="height: 400px"></div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                                <pre>
$('#europe-map').vectorMap({
    map: 'europe_mill',
    backgroundColor: '#3b3f5c',
    regionStyle: {
        initial: {
            fill: '#fff'
        }
    }
});</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="mapSouthAmerica" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>South America</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div id="south-america-map" style="height: 400px"></div>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                                <pre>
$('#south-america-map').vectorMap({
    map: 'south_america_mill',
    backgroundColor: '#25d5e4',
    regionStyle: {
        initial: {
            fill: '#fff'
        }
    }
});</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
@endsection