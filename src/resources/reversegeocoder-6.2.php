<?php
/**
 * reversegeocoder.php file.
 *
 * @author Trung Nguyen <t.nguyen@spacedealer.de>
 * @author Dirk Adler <adler@spacedealer.de>
 * @link http://www.spacedealer.de
 * @copyright Copyright &copy; 2014 spacedealer GmbH
 */
return [
    'baseUrl' => 'https://reverse.geocoder.api.here.com/6.2/',
    'baseDemoUrl' => 'https://reverse.geocoder.cit.api.here.com/6.2/',
    'apiVersion' => '6.2',
    'operations' => [
        // Elevation - Aster Global Digital Elevation Model
        // Info: https://developer.here.com/rest-apis/documentation/geocoder/topics/resource-reverse-geocode.html
        // Expected Results: view-source: http://reverse.geocoder.cit.api.here.com/6.2/reversegeocode.json?app_id=E9hgIZ5YJ8I7FribD2yE&app_code=SNbNZHN6TSSO8nxqUOXmIw&gen=6&mode=retrieveAddresses&prox=48.2111588,9.0009298
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
        // Info: https://developer.here.com/rest-apis/documentation/geocoder/topics/resource-reverse-geocode.html
        // Expected Results: view-source: http://reverse.geocoder.cit.api.here.com/6.2/reversegeocode.json?app_id=E9hgIZ5YJ8I7FribD2yE&app_code=SNbNZHN6TSSO8nxqUOXmIw&gen=6&mode=retrieveAddresses&prox=48.2111588,9.0009298
        'reversegeocode' => [
            'extends' => '__auth',
            'httpMethod' => 'GET',
            'uri' => 'reversegeocode.json',
            'parameters' => [
                'additionaldata' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
                'addressattributes' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
                'gen' => [
                    'type' => 'integer',
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
                'level' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
                'locationattributes' => [
                    'type' => 'string',
                    'location' => 'query'
                ],
                'maxresults' => [
                    'type' => 'integer',
                    'location' => 'query'
                ],
                'minresults' => [
                    'type' => 'integer',
                    'location' => 'query'
                ],
                'mode' => [
                    'type' => 'string',
                    'location' => 'query',
                    'required' => true
                ],
                'pageinformation' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
                'pos' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
                'prox' => [
                    'type' => 'string',
                    'location' => 'query',
                    'required' => true
                ],
                'responseattributes' => [
                    'type' => 'string',
                    'location' => 'query',
                ],
                'sortby' => [
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