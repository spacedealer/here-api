<?php
/**
 * geococder-6.2.php file.
 *
 * @author Trung Nguyen <t.nguyen@spacedealer.de>
 * @author Dirk Adler <adler@spacedealer.de>
 * @link http://www.spacedealer.de
 * @copyright Copyright &copy; 2014 spacedealer GmbH
 */
return [
    'baseUrl' => 'https://geocoder.api.here.com/6.2/',
    'baseDemoUrl' => 'https://geocoder.cit.api.here.com/6.2/',
    'apiVersion' => '6.2',
    'operations' => [
        // Elevation - Aster Global Digital Elevation Model
        // Info: https://developer.here.com/rest-apis/documentation/geocoder/topics/overview.html
        // Expected Results: view-source: http://geocoder.cit.api.here.com/6.2/geocode.json?app_id=E9hgIZ5YJ8I7FribD2yE&app_code=SNbNZHN6TSSO8nxqUOXmIw&gen=6&houseNumber=50&street=Kienten+Str.&postalcode=72458&city=Albstadt
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
        // Returns the children (admin divisions and populated places) for a given geonameId
        // Info: https://developer.here.com/rest-apis/documentation/geocoder/topics/resource-geocode.html
        // Expected Results: view-source: http://geocoder.cit.api.here.com/6.2/geocode.json?app_id=E9hgIZ5YJ8I7FribD2yE&app_code=SNbNZHN6TSSO8nxqUOXmIw&gen=6&houseNumber=50&street=Kienten+Str.&postalcode=72458&city=Albstadt
        'geocode' => [
            'extends' => '__auth',
            'httpMethod' => 'GET',
            'uri' => 'geocode.json',
            'parameters' => [
                'additionaldata' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
                'addressattributes' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
                'bbox' => [
                    'type' => 'string',
                    'location' => 'query'
                ],
                'city' => [
                    'type' => 'string',
                    'location' => 'query',
                    'required' => true,
                ],
                'country' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
                'countryfocus' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
                'county' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
                'district' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
                'gen' => [
                    'type' => 'integer',
                    'location' => 'query',
                ],
                'housenumber' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
//                'jsonattributes' => [
//                    'type' => 'integer',
//                    'location' => 'query',
//                ],
//                'jsoncallback' => [
//                    'type' => 'string',
//                    'location' => 'query',
//                ],
                'language' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
                'locationattributes' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
                'locationid' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
                'mapview' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
                'maxresults' => [
                    'type' => 'integer',
                    'location' => 'query',
                ],
                'pageinformation' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
                'postalcode' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
                'prox' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
                'responseattributes' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
                'searchtext' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
                'state' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
                'street' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
                'strictlanguagemode' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
                'token' => [
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

