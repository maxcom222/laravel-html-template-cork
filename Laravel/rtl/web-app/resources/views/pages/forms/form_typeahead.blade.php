@extends('layouts.app')

@section('content')

            <div class="container">
                <div class="container">
                    
                    <div id="navSection" data-spy="affix" class="nav  sidenav">
                        <div class="sidenav-content">
                            <a href="#ftFormArray" class="active nav-link">Form with Array</a>
                            <a href="#ftFormTwoArray" class="nav-link">Form with Two Array</a>
                            <a href="#ftSimpleAutocomplete" class="nav-link">Simple Autocomplete</a>
                            <a href="#ftCustomSuggestion" class="nav-link">Custom Suggestion</a>
                        </div>
                    </div>

                    <div class="row layout-top-spacing" id="cancel-row">
                        <div id="ftFormArray" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Form with array</h4> 
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area custom-autocomplete h-100">
                                    <form>
                                        <div class="form-group">
                                            <label for="email1">Email address</label>
                                            <input type="email" class="form-control" id="email1" aria-describedby="emailHelp1" placeholder="Enter email">
                                            <small id="emailHelp1" class="form-text text-muted mb-4">We'll never share your email with anyone else.</small>
                                        </div>

                                        <div class="form-group mb-4">
                                            <label for="country">Country</label>
                                            <input type="text" class="form-control" id="country" placeholder="Country">
                                        </div>

                                        <div id="selection-country"></div>

                                        <div class="form-check mb-4">
                                            <div class="custom-control custom-checkbox">
                                              <input type="checkbox" class="custom-control-input" id="customCheck1">
                                              <label class="custom-control-label" for="customCheck1">Check me out</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>

                                    <div class="code-section-container show-code">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
var countriesArray = $.map(countries, function (value, key) { return { value: value, data: key }; });

// Setup jQuery ajax mock:
$.mockjax({
    url: '*',
    responseTime: 2000,
    response: function (settings) {
        var query = settings.data.query,
            queryLowerCase = query.toLowerCase(),
            re = new RegExp('\\b' + $.Autocomplete.utils.escapeRegExChars(queryLowerCase), 'gi'),
            suggestions = $.grep(countriesArray, function (country) {
                 // return country.value.toLowerCase().indexOf(queryLowerCase) === 0;
                return re.test(country.value);
            }),
            response = {
                query: query,
                suggestions: suggestions
            };

        this.responseText = JSON.stringify(response);
    }
});

$('#country').autocomplete({
    lookup: countriesArray,
    minChars: 1,
    onSelect: function (suggestion) {
        $('#selection-country').html('You selected: ' + suggestion.value);
    },
    showNoSuggestionNotice: true,
    noSuggestionNotice: 'Sorry, no matching results',
    groupBy: 'category'
});
</pre>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="ftFormTwoArray" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Form with two array</h4> 
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area custom-autocomplete h-100">
                                    <form>
                                        <div class="form-group mb-4">
                                            <label for="email2">Email address</label>
                                            <input type="email" class="form-control" id="email2" aria-describedby="emailHelp" placeholder="Enter email">
                                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="city">City</label>
                                            <input type="text" class="form-control" id="city" placeholder="city">
                                        </div>
                                        <div id="selection"></div>
                                        <div class="form-check mb-4">
                                            <div class="custom-control custom-checkbox">
                                              <input type="checkbox" class="custom-control-input" id="customCheck2">
                                              <label class="custom-control-label" for="customCheck2">Check me out</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>

                                    <div class="code-section-container">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
var nhlTeams = ['Atlanta', 'Boston', 'Buffalo', 'Calgary', 'Carolina', 'Chicago', 'Colorado', 'Columbus', 'Dallas', 'Detroit', 'Edmonton', 'Florida', 'Los Angeles', 'Minnesota', 'Montreal', 'Nashville', ];
var nbaTeams = ['New Jersey', 'New Rork', 'New York', 'Ottawa', 'Philadelphia', 'Phoenix', 'Pittsburgh', 'Saint Louis', 'San Jose', 'Tampa Bay', 'Toronto Maple', 'Vancouver', 'Washington'];
var nhl = $.map(nhlTeams, function (team) { return { value: team, data: { category: 'Section A' }}; });
var nba = $.map(nbaTeams, function (team) { return { value: team, data: { category: 'Section B' } }; });
var teams = nhl.concat(nba);

// Initialize autocomplete with local lookup:
$('#city').autocomplete({
    lookup: teams,
    minChars: 1,
    onSelect: function (suggestion) {
        $('#selection').html('You selected: ' + suggestion.value);
    },
    showNoSuggestionNotice: true,
    noSuggestionNotice: 'Sorry, no matching results',
    groupBy: 'category'
});
</pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="ftSimpleAutocomplete" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Simple Autocomplete</h4> 
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area custom-autocomplete">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <form>
                                                <div class="form-group">
                                                    <label for="autocomplete-dynamic">Countries:</label>
                                                    <input type="text" name="country" class="form-control" id="autocomplete-dynamic">
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="code-section-container show-code">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
// Initialize autocomplete with custom appendTo:
$('#autocomplete-dynamic').autocomplete({
    lookup: countriesArray
});
</pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="ftCustomSuggestion" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">                                
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Custom Suggestion Container</h4> 
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area custom-autocomplete">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <form>
                                                <div class="form-group">
                                                    <label for="autocomplete-custom-append">Countries:</label>
                                                    <input type="text" name="country" class="form-control" id="autocomplete-custom-append">
                                                    <br/>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-lg-6">
                                            <div id="suggestions-container"></div>
                                        </div>
                                    </div>

                                    <div class="code-section-container show-code">
                                                
                                        <button class="btn toggle-code-snippet"><span>Code</span></button>

                                        <div class="code-section text-left">
                                            <pre>
// Initialize autocomplete with custom appendTo:
$('#autocomplete-custom-append').autocomplete({
    lookup: countriesArray,
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