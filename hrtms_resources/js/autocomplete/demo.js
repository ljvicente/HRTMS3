/*jslint  browser: true, white: true, plusplus: true */
/*global $z: true */
$z=jQuery.noConflict();
$z(function () {
    'use strict';

    // Load countries then initialize plugin:
    $z.ajax({
        url: '<?php echo base_url();?>scripts/content/countries.txt',
        dataType: 'json'
    }).done(function (source) {

        var countriesArray = $z.map(source, function (value, key) { return { value: value, data: key }; }),
            countries = $z.map(source, function (value) { return value; });

        // Setup jQuery ajax mock:
        $z.mockjax({
            url: '*',
            responseTime:  200,
            response: function (settings) {
                var query = settings.data.query,
                    queryLowerCase = query.toLowerCase(),
                    suggestions = $z.grep(countries, function(country) {
                         return country.toLowerCase().indexOf(queryLowerCase) !== -1;
                    }),
                    response = {
                        query: query,
                        suggestions: suggestions
                    };

                this.responseText = JSON.stringify(response);
            }
        });

        // Initialize autocomplete with local lookup:
        $z('.autocomplete').autocomplete({
            lookup: countriesArray,
            onSelect: function (suggestion) {
                $z('#selection').html('You selected: ' + suggestion.value + ', ' + suggestion.data);
            }
            });      
        });
    

});
