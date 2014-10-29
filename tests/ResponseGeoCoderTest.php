<?php

/**
 * ResponseGeoCoderTest.php file.
 *
 * @author Trung Nguyen <t.nguyen@spacedealer.de>
 * @link http://www.spacedealer.de
 * @copyright Copyright &copy; 2014 spacedealer GmbH
 */
class ResponseGeoCoderTest extends PHPUnit_Framework_TestCase
{
    /**
     * Test for correct status response handling
     */
    public function testEmptyResult()
    {
        $data = [
            'Response' =>
                [
                    'MetaInfo' =>
                        [
                            'Timestamp' => '2014-10-22T12:23:11.006+0000',
                        ],
                    'View' => [],
                ],
        ];

//        $data = json_decode('{"Response":{"MetaInfo":{"Timestamp":"2014-10-22T15:03:15.853+0000"},"View":[]}}',true);
//        var_dump($data);

        $response = new \spacedealer\here\api\Response($data);
        $metaInfo = $response->getMetaInfo();
        $this->assertEquals(['Timestamp' => '2014-10-22T12:23:11.006+0000'], $metaInfo);

        $resultInfo = $response->getResult();
        $this->assertEquals(null, $resultInfo);
    }

    public function testHasExceptionError()
    {

        $data = [
            'Details' => 'Request is not valid! (Input parameter validation failed. Geocoder: missing mandatory parameters (at least one of \'country, state, county, city, district, street, housenumber, postalCode\' or \'searchtext\'))',
            'AdditionalData' =>
                [
                ],
            'type' => 'ApplicationError',
            'subtype' => 'InvalidInputData',
        ];
        $response = new \spacedealer\here\api\Response($data);

        $this->assertTrue($response->getException());
    }

    public function testHasResult()
    {
        $data = [
            'Response' =>
                [
                    'MetaInfo' =>
                        [
                            'Timestamp' => '2014-10-22T09:51:07.327+0000',
                        ],
                    'View' =>
                        [
                            0 =>
                                [
                                    '_type' => 'SearchResultsViewType',
                                    'ViewId' => 0,
                                    'Result' =>
                                        [
                                            0 =>
                                                [
                                                    'Relevance' => 1,
                                                    'MatchLevel' => 'houseNumber',
                                                    'MatchQuality' =>
                                                        [
                                                            'City' => 1,
                                                            'Street' =>
                                                                [
                                                                    0 => 1,
                                                                ],
                                                            'HouseNumber' => 1,
                                                            'PostalCode' => 1,
                                                        ],
                                                    'MatchType' => 'pointAddress',
                                                    'Location' =>
                                                        [
                                                            'LocationId' => 'NT_oRmNPt9yCrCG4xv1JsisuA_50',
                                                            'LocationType' => 'address',
                                                            'DisplayPosition' =>
                                                                [
                                                                    'Latitude' => 48.21089169999999768378984299488365650177001953125,
                                                                    'Longitude' => 9.0009098000000005157517080078832805156707763671875,
                                                                ],
                                                            'NavigationPosition' =>
                                                                [
                                                                    0 =>
                                                                        [
                                                                            'Latitude' => 48.21115879999999975780156091786921024322509765625,
                                                                            'Longitude' => 9.0009297999999997585973687819205224514007568359375,
                                                                        ],
                                                                ],
                                                            'MapView' =>
                                                                [
                                                                    'TopLeft' =>
                                                                        [
                                                                            'Latitude' => 48.2120158999999972593286656774580478668212890625,
                                                                            'Longitude' => 8.99922289999999946985553833656013011932373046875,
                                                                        ],
                                                                    'BottomRight' =>
                                                                        [
                                                                            'Latitude' => 48.20976759999999927686076262034475803375244140625,
                                                                            'Longitude' => 9.0025966999999997852910382789559662342071533203125,
                                                                        ],
                                                                ],
                                                            'Address' =>
                                                                [
                                                                    'Label' => 'Kientenstraße 50, 72458 Albstadt, Deutschland',
                                                                    'Country' => 'DEU',
                                                                    'State' => 'Baden-Württemberg',
                                                                    'County' => 'Zollernalbkreis',
                                                                    'City' => 'Albstadt',
                                                                    'District' => 'Ebingen',
                                                                    'Street' => 'Kientenstraße',
                                                                    'HouseNumber' => '50',
                                                                    'PostalCode' => '72458',
                                                                    'AdditionalData' =>
                                                                        [
                                                                            0 =>
                                                                                [
                                                                                    'value' => 'Deutschland',
                                                                                    'key' => 'CountryName',
                                                                                ],
                                                                            1 =>
                                                                                [
                                                                                    'value' => 'Baden-Württemberg',
                                                                                    'key' => 'StateName',
                                                                                ],
                                                                        ],
                                                                ],
                                                        ],
                                                ],
                                        ],
                                ],
                        ],
                ],
        ];

        $resultExpected = [
            0 =>
                [
                    'Relevance' => 1,
                    'MatchLevel' => 'houseNumber',
                    'MatchQuality' =>
                        [
                            'City' => 1,
                            'Street' =>
                                [
                                    0 => 1,
                                ],
                            'HouseNumber' => 1,
                            'PostalCode' => 1,
                        ],
                    'MatchType' => 'pointAddress',
                    'Location' =>
                        [
                            'LocationId' => 'NT_oRmNPt9yCrCG4xv1JsisuA_50',
                            'LocationType' => 'address',
                            'DisplayPosition' =>
                                [
                                    'Latitude' => 48.21089169999999768378984299488365650177001953125,
                                    'Longitude' => 9.0009098000000005157517080078832805156707763671875,
                                ],
                            'NavigationPosition' =>
                                [
                                    0 =>
                                        [
                                            'Latitude' => 48.21115879999999975780156091786921024322509765625,
                                            'Longitude' => 9.0009297999999997585973687819205224514007568359375,
                                        ],
                                ],
                            'MapView' =>
                                [
                                    'TopLeft' =>
                                        [
                                            'Latitude' => 48.2120158999999972593286656774580478668212890625,
                                            'Longitude' => 8.99922289999999946985553833656013011932373046875,
                                        ],
                                    'BottomRight' =>
                                        [
                                            'Latitude' => 48.20976759999999927686076262034475803375244140625,
                                            'Longitude' => 9.0025966999999997852910382789559662342071533203125,
                                        ],
                                ],
                            'Address' =>
                                [
                                    'Label' => 'Kientenstraße 50, 72458 Albstadt, Deutschland',
                                    'Country' => 'DEU',
                                    'State' => 'Baden-Württemberg',
                                    'County' => 'Zollernalbkreis',
                                    'City' => 'Albstadt',
                                    'District' => 'Ebingen',
                                    'Street' => 'Kientenstraße',
                                    'HouseNumber' => '50',
                                    'PostalCode' => '72458',
                                    'AdditionalData' =>
                                        [
                                            0 =>
                                                [
                                                    'value' => 'Deutschland',
                                                    'key' => 'CountryName',
                                                ],
                                            1 =>
                                                [
                                                    'value' => 'Baden-Württemberg',
                                                    'key' => 'StateName',
                                                ],
                                        ],
                                ],
                        ],
                ],
        ];

        $response = new \spacedealer\here\api\Response($data);
        $this->assertEquals( ['Timestamp' => '2014-10-22T09:51:07.327+0000'], $response->getMetaInfo());
        $this->assertEquals($resultExpected,$response->getResult());
    }
}