<?php
/**
 * places-v1.php file.
 *
 * @author Trung Nguyen <t.nguyen@spacedealer.de>
 * @author Dirk Adler <adler@spacedealer.de>
 * @link http://www.spacedealer.de
 * @copyright Copyright &copy; 2014 spacedealer GmbH
 */
return [
    'baseUrl' => 'https://places.api.here.com/places/v1/',
    'baseDemoUrl' => 'https://places.cit.api.here.com/places/v1/',
    'apiVersion' => 'v1',
    'operations' => [
        // Elevation - Aster Global Digital Elevation Model
        // Info: https://developer.here.com/rest-apis/documentation/places/topics_api/resource-search.html
        // Expected Results: view-source: http://places.cit.api.here.com/places/v1/discover/search?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg&at=48.2111588,9.0009298&q=restaurant&pretty
        '__auth' => [
            'httpMethod' => 'GET',
            'responseModel' => 'default',
            'parameters' => [
                'app_id' => [
                    'type' => 'string',
                    'location' => 'query',
                    'required' => true
                ],
                'app_code' => [
                    'type' => 'string',
                    'location' => 'query',
                    'required' => true
                ]
            ]
        ],
        // Returns the sets of places that match a user's search term in a specific location context (such as near a given location, around a user's current position or on the currently visible map).
        // Info: https://developer.here.com/rest-apis/documentation/places/topics_api/resource-search.html
        // Expected Results: view-source: http://places.cit.api.here.com/places/v1/discover/search?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg&at=48.2111588,9.0009298&q=restaurant&pretty
        'search' => [
            'extends' => '__auth',
            'httpMethod' => 'GET',
            'uri' => 'discover/search',
            'parameters' => [
                'at' => [
                    'type' => 'string',
                    'location' => 'query',
                    'required' => true
                ],
                'q' => [
                    'type' => 'string',
                    'location' => 'query',
                    'required' => true
                ],
                'result_types' => [
                    'type' => 'string',
                    'location' => 'query'
                ],
                'size' => [
                    'type' => 'integer',
                    'location' => 'query',

                ],
                'tf' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
                'show_refs' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
            ]
        ],
        // Returns the lists of suggested search terms related to a given (partial) search term and location context. This entrypoint is used to help users to provide suggested search terms to the user while typing.
        // Info: https://developer.here.com/rest-apis/documentation/places/topics_api/resource-suggest.html
        // Expected Results: view-source: http://places.cit.api.here.com/places/v1/suggest?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg&at=48.2111588,9.0009298&q=rest&pretty
        'suggest' => [
            'extends' => '__auth',
            'httpMethod' => 'GET',
            'uri' => 'suggest',
            'parameters' => [
                'at' => [
                    'type' => 'string',
                    'location' => 'query',
                    'required' => true
                ],
                'q' => [
                    'type' => 'string',
                    'location' => 'query',
                    'required' => true
                ],
                'size' => [
                    'type' => 'integer',
                    'location' => 'query',

                ],
            ]
        ],
        // Returns a list of relevant places nearby a given position or area. It answers the question "What interesting places are in the viewport of the map?" The results presented to the user are confined to those located in the current map view or search area and are ordered by popularity
        // Info: https://developer.here.com/rest-apis/documentation/places/topics_api/resource-explore.html
        // Expected Results: view-source: http://places.cit.api.here.com/places/v1/discover/explore?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg&at=48.2111588,9.0009298&pretty
        'explore' => [
            'extends' => '__auth',
            'httpMethod' => 'GET',
            'uri' => 'discover/explore',
            'parameters' => [
                'at' => [
                    'type' => 'string',
                    'location' => 'query',
                    'required' => true
                ],
                'in' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
                'cat' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
                'result_types' => [
                    'type' => 'string',
                    'location' => 'query',

                ],
                'size' => [
                    'type' => 'integer',
                    'location' => 'query',

                ],
                'tf' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
                'show_refs' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
            ]
        ],
        // Returns a list of relevant places nearby a given position or area. It answers the question "What interesting places are in the viewport of the map?" The results presented to the user are confined to those located in the current map view or search area and are ordered by popularity
        // Info: https://developer.here.com/rest-apis/documentation/places/topics_api/resource-around.html
        // Expected Results: view-source: http://places.cit.api.here.com/places/v1/discover/around?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg&at=48.2111588,9.0009298&pretty
        'around' => [
            'extends' => '__auth',
            'httpMethod' => 'GET',
            'uri' => 'discover/around',
            'parameters' => [
                'at' => [
                    'type' => 'string',
                    'location' => 'query',
                    'required' => true
                ],
                'in' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
                'cat' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
                'result_types' => [
                    'type' => 'string',
                    'location' => 'query',

                ],
                'size' => [
                    'type' => 'integer',
                    'location' => 'query',

                ],
                'tf' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
                'show_refs' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
            ]
        ],
        // Returns a list of places with addresses that lie within the vicinity of the search location. The feature is typically used by applications that include "check-in" or "click on map to get more information" options.
        // Info: https://developer.here.com/rest-apis/documentation/places/topics_api/resource-here.html
        // Expected Results: view-source: http://places.cit.api.here.com/places/v1/discover/here?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg&at=52.50449,13.39091&pretty
        'here' => [
            'extends' => '__auth',
            'httpMethod' => 'GET',
            'uri' => 'discover/here',
            'parameters' => [
                'at' => [
                    'type' => 'string',
                    'location' => 'query',
                    'required' => true
                ],
                'in' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
                'cat' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
                'result_types' => [
                    'type' => 'string',
                    'location' => 'query',

                ],
                'size' => [
                    'type' => 'integer',
                    'location' => 'query',

                ],
                'tf' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
                'show_refs' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
            ]
        ],
        // Returns a place resource with context added by its foreign-ID
        // Info: https://developer.here.com/rest-apis/documentation/places/topics_api/resource-lookup.html
        // Expected Results: view-source: http://places.cit.api.here.com/places/v1/places/lookup?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg&source=pvid&id=1115664033
        'lookup' => [
            'extends' => '__auth',
            'httpMethod' => 'GET',
            'uri' => 'places/lookup',
            'parameters' => [
                'source' => [
                    'type' => 'string',
                    'location' => 'query',
                    'required' => true
                ],
                'id' => [
                    'type' => 'string',
                    'location' => 'query',
                    'required' => true
                ],
            ]
        ],
        // Returns the place or cuisines categories available for a given location
        // Info: https://developer.here.com/rest-apis/documentation/places/topics_api/resource-place-categories.html
        // Expected Results: view-source: http://places.cit.api.here.com/places/v1/categories/places?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg&at=52.50449,13.39091&pretty
        'categories' => [
            'extends' => '__auth',
            'httpMethod' => 'GET',
            'uri' => 'categories/{type}',
            'parameters' => [
                'type' => [
                    'type' => 'string',
                    'location' => 'uri',
                    'default' => 'places',
                    'required' => true
                ],
                'at' => [
                    'type' => 'string',
                    'location' => 'query',
                    'required' => true
                ],
                'in' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
            ]
        ],
        // Retrieves a list tiles base URLs for the given criteria
        // Info: http://places.cit.api.here.com/places/static/doc/internal/#topics/resource-tiles.html
        // Expected Results: view-source: http://places.cit.api.here.com/places/v1/tiles?app_id=DemoAppId01082013GAL&app_code=AJKnXv84fjrb0KIHawS0Tg
        'tiles' => [
            'extends' => '__auth',
            'httpMethod' => 'GET',
            'uri' => 'suggest',
            'parameters' => [
                'cat' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
                'tf' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
                'size' => [
                    'type' => 'integer',
                    'location' => 'query',
                ],
                'teasers' => [
                    'type' => 'integer',
                    'location' => 'query',
                ],
                'image_dimensions' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
                'show_refs' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
                'cs' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
            ]
        ],
    ],
    'models' => [
        'default' => [
            'type' => 'object',
            'additionalProperties' => [
                'location' => 'json'
            ],
        ],
    ],
];
