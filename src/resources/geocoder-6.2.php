<?php
/**
 * config.php file.
 *
 * @author Dirk Adler <adler@spacedealer.de>
 * @link http://www.spacedealer.de
 * @copyright Copyright &copy; 2014 spacedealer GmbH
 * @todo finish description
 */
return [
    'baseUrl' => 'http://geocoder.api.here.com/6.2/',
    'apiVersion' => '6.2',
    'operations' => [
        // Elevation - Aster Global Digital Elevation Model
        // Info: http://www.geonames.org/export/web-services.html#astergdem
        // Expected Results: view-source:http://api.geonames.org/astergdemJSON?lat=50.01&lng=10.2&username=demo
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
        // Info: http://www.geonames.org/export/place-hierarchy.html#children
        // Expected Results: view-source:http://api.geonames.org/children?geonameId=3175395&username=demo
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