<?php

/**
 * ResponseReverseGeoCoderTest.php file.
 *
 * @author Trung Nguyen <t.nguyen@spacedealer.de>
 * @link http://www.spacedealer.de
 * @copyright Copyright &copy; 2014 spacedealer GmbH
 */
class ResponseReverseGeoCoderTest extends PHPUnit_Framework_TestCase
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
                ]
        ];

//        $data = json_decode('{"Response":{"MetaInfo":{"Timestamp":"2014-10-27T16:03:13.246+0000","NextPageInformation":"2"},"View":[{"_type":"SearchResultsViewType","ViewId":0,"Result":[{"Relevance":1.0,"Distance":0.1,"MatchLevel":"houseNumber","MatchQuality":{"Country":1.0,"State":1.0,"County":1.0,"City":1.0,"District":1.0,"Street":[1.0],"HouseNumber":1.0,"PostalCode":1.0},"MatchType":"interpolated","Location":{"LocationId":"LINK_791204997_L_PA_160907596_S","LocationType":"point","DisplayPosition":{"Latitude":48.21116,"Longitude":9.00093},"MapView":{"TopLeft":{"Latitude":48.2122842,"Longitude":8.9992431},"BottomRight":{"Latitude":48.2100358,"Longitude":9.0026169}},"Address":{"Label":"Kientenstraße 50, 72458 Albstadt, Deutschland","Country":"DEU","State":"Baden-Württemberg","County":"Zollernalbkreis","City":"Albstadt","District":"Ebingen","Street":"Kientenstraße","HouseNumber":"50","PostalCode":"72458","AdditionalData":[{"value":"Deutschland","key":"CountryName"},{"value":"Baden-Württemberg","key":"StateName"}]},"MapReference":{"ReferenceId":"791204997","Spot":0.57,"SideOfStreet":"left","CountryId":"20147700","StateId":"20171489","CountyId":"20176095","CityId":"20176225","DistrictId":"20176229"}}},{"Relevance":1.0,"Distance":48.1,"MatchLevel":"street","MatchQuality":{"Country":1.0,"State":1.0,"County":1.0,"City":1.0,"District":1.0,"Street":[1.0],"PostalCode":1.0},"Location":{"LocationId":"LINK_78607001_R","LocationType":"point","DisplayPosition":{"Latitude":48.21157,"Longitude":9.00073},"MapView":{"TopLeft":{"Latitude":48.21219,"Longitude":9.00025},"BottomRight":{"Latitude":48.21157,"Longitude":9.00076}},"Address":{"Label":"Olgastraße, 72458 Albstadt, Deutschland","Country":"DEU","State":"Baden-Württemberg","County":"Zollernalbkreis","City":"Albstadt","District":"Ebingen","Street":"Olgastraße","PostalCode":"72458","AdditionalData":[{"value":"Deutschland","key":"CountryName"},{"value":"Baden-Württemberg","key":"StateName"}]},"MapReference":{"ReferenceId":"78607001","Spot":0.0,"SideOfStreet":"right","CountryId":"20147700","StateId":"20171489","CountyId":"20176095","CityId":"20176225","DistrictId":"20176229"}}},{"Relevance":1.0,"Distance":48.1,"MatchLevel":"street","MatchQuality":{"Country":1.0,"State":1.0,"County":1.0,"City":1.0,"District":1.0,"Street":[1.0],"PostalCode":1.0},"Location":{"LocationId":"LINK_78607003_L","LocationType":"point","DisplayPosition":{"Latitude":48.21157,"Longitude":9.00073},"MapView":{"TopLeft":{"Latitude":48.21162,"Longitude":8.99964},"BottomRight":{"Latitude":48.21157,"Longitude":9.00073}},"Address":{"Label":"Olgastraße, 72458 Albstadt, Deutschland","Country":"DEU","State":"Baden-Württemberg","County":"Zollernalbkreis","City":"Albstadt","District":"Ebingen","Street":"Olgastraße","PostalCode":"72458","AdditionalData":[{"value":"Deutschland","key":"CountryName"},{"value":"Baden-Württemberg","key":"StateName"}]},"MapReference":{"ReferenceId":"78607003","Spot":0.0,"SideOfStreet":"left","CountryId":"20147700","StateId":"20171489","CountyId":"20176095","CityId":"20176225","DistrictId":"20176229"}}},{"Relevance":1.0,"Distance":59.8,"MatchLevel":"houseNumber","MatchQuality":{"Country":1.0,"State":1.0,"County":1.0,"City":1.0,"District":1.0,"Street":[1.0],"HouseNumber":1.0,"PostalCode":1.0},"MatchType":"interpolated","Location":{"LocationId":"LINK_78607002_R_PA_162148211_S","LocationType":"point","DisplayPosition":{"Latitude":48.21154,"Longitude":9.0015},"MapView":{"TopLeft":{"Latitude":48.2126642,"Longitude":8.9998131},"BottomRight":{"Latitude":48.2104158,"Longitude":9.0031869}},"Address":{"Label":"Olgastraße 82, 72458 Albstadt, Deutschland","Country":"DEU","State":"Baden-Württemberg","County":"Zollernalbkreis","City":"Albstadt","District":"Ebingen","Street":"Olgastraße","HouseNumber":"82","PostalCode":"72458","AdditionalData":[{"value":"Deutschland","key":"CountryName"},{"value":"Baden-Württemberg","key":"StateName"}]},"MapReference":{"ReferenceId":"78607002","Spot":0.55,"SideOfStreet":"right","CountryId":"20147700","StateId":"20171489","CountyId":"20176095","CityId":"20176225","DistrictId":"20176229"}}},{"Relevance":1.0,"Distance":110.7,"MatchLevel":"houseNumber","MatchQuality":{"Country":1.0,"State":1.0,"County":1.0,"City":1.0,"District":1.0,"Street":[1.0],"HouseNumber":1.0,"PostalCode":1.0},"MatchType":"interpolated","Location":{"LocationId":"LINK_78606997_L_PA_162613236_S","LocationType":"point","DisplayPosition":{"Latitude":48.21205,"Longitude":9.00243},"MapView":{"TopLeft":{"Latitude":48.2131742,"Longitude":9.000743},"BottomRight":{"Latitude":48.2109258,"Longitude":9.004117}},"Address":{"Label":"Drosselweg 4, 72458 Albstadt, Deutschland","Country":"DEU","State":"Baden-Württemberg","County":"Zollernalbkreis","City":"Albstadt","District":"Ebingen","Street":"Drosselweg","HouseNumber":"4","PostalCode":"72458","AdditionalData":[{"value":"Deutschland","key":"CountryName"},{"value":"Baden-Württemberg","key":"StateName"}]},"MapReference":{"ReferenceId":"78606997","Spot":0.02,"SideOfStreet":"left","CountryId":"20147700","StateId":"20171489","CountyId":"20176095","CityId":"20176225","DistrictId":"20176229"}}},{"Relevance":1.0,"Distance":113.5,"MatchLevel":"houseNumber","MatchQuality":{"Country":1.0,"State":1.0,"County":1.0,"City":1.0,"District":1.0,"Street":[1.0],"HouseNumber":1.0,"PostalCode":1.0},"MatchType":"interpolated","Location":{"LocationId":"LINK_78606998_L_PA_160527620_S","LocationType":"point","DisplayPosition":{"Latitude":48.21164,"Longitude":9.00243},"MapView":{"TopLeft":{"Latitude":48.2127642,"Longitude":9.000743},"BottomRight":{"Latitude":48.2105158,"Longitude":9.004117}},"Address":{"Label":"Drosselweg 6, 72458 Albstadt, Deutschland","Country":"DEU","State":"Baden-Württemberg","County":"Zollernalbkreis","City":"Albstadt","District":"Ebingen","Street":"Drosselweg","HouseNumber":"6","PostalCode":"72458","AdditionalData":[{"value":"Deutschland","key":"CountryName"},{"value":"Baden-Württemberg","key":"StateName"}]},"MapReference":{"ReferenceId":"78606998","Spot":0.26,"SideOfStreet":"left","CountryId":"20147700","StateId":"20171489","CountyId":"20176095","CityId":"20176225","DistrictId":"20176229"}}},{"Relevance":1.0,"Distance":124.8,"MatchLevel":"street","MatchQuality":{"Country":1.0,"State":1.0,"County":1.0,"City":1.0,"District":1.0,"Street":[1.0],"PostalCode":1.0},"Location":{"LocationId":"LINK_589234521_R","LocationType":"point","DisplayPosition":{"Latitude":48.2100367,"Longitude":9.0009215},"MapView":{"TopLeft":{"Latitude":48.2102,"Longitude":8.99591},"BottomRight":{"Latitude":48.21002,"Longitude":9.00872}},"Address":{"Label":"Berliner Straße, 72458 Albstadt, Deutschland","Country":"DEU","State":"Baden-Württemberg","County":"Zollernalbkreis","City":"Albstadt","District":"Ebingen","Street":"Berliner Straße","PostalCode":"72458","AdditionalData":[{"value":"Deutschland","key":"CountryName"},{"value":"Baden-Württemberg","key":"StateName"}]},"MapReference":{"ReferenceId":"589234521","Spot":0.61,"SideOfStreet":"right","CountryId":"20147700","StateId":"20171489","CountyId":"20176095","CityId":"20176225","DistrictId":"20176229"}}},{"Relevance":1.0,"Distance":125.2,"MatchLevel":"street","MatchQuality":{"Country":1.0,"State":1.0,"County":1.0,"City":1.0,"District":1.0,"Street":[1.0],"PostalCode":1.0},"Location":{"LocationId":"LINK_78607000_R","LocationType":"point","DisplayPosition":{"Latitude":48.21219,"Longitude":9.00025},"MapView":{"TopLeft":{"Latitude":48.2122,"Longitude":8.99964},"BottomRight":{"Latitude":48.21162,"Longitude":9.00025}},"Address":{"Label":"Olgastraße, 72458 Albstadt, Deutschland","Country":"DEU","State":"Baden-Württemberg","County":"Zollernalbkreis","City":"Albstadt","District":"Ebingen","Street":"Olgastraße","PostalCode":"72458","AdditionalData":[{"value":"Deutschland","key":"CountryName"},{"value":"Baden-Württemberg","key":"StateName"}]},"MapReference":{"ReferenceId":"78607000","Spot":1.0,"SideOfStreet":"right","CountryId":"20147700","StateId":"20171489","CountyId":"20176095","CityId":"20176225","DistrictId":"20176229"}}},{"Relevance":1.0,"Distance":126.0,"MatchLevel":"houseNumber","MatchQuality":{"Country":1.0,"State":1.0,"County":1.0,"City":1.0,"District":1.0,"Street":[1.0],"HouseNumber":1.0,"PostalCode":1.0},"MatchType":"interpolated","Location":{"LocationId":"LINK_78607021_L_PA_162476166_S","LocationType":"point","DisplayPosition":{"Latitude":48.21165,"Longitude":8.99936},"MapView":{"TopLeft":{"Latitude":48.2127742,"Longitude":8.997673},"BottomRight":{"Latitude":48.2105258,"Longitude":9.001047}},"Address":{"Label":"Olgastraße 93, 72458 Albstadt, Deutschland","Country":"DEU","State":"Baden-Württemberg","County":"Zollernalbkreis","City":"Albstadt","District":"Ebingen","Street":"Olgastraße","HouseNumber":"93","PostalCode":"72458","AdditionalData":[{"value":"Deutschland","key":"CountryName"},{"value":"Baden-Württemberg","key":"StateName"}]},"MapReference":{"ReferenceId":"78607021","Spot":0.42,"SideOfStreet":"left","CountryId":"20147700","StateId":"20171489","CountyId":"20176095","CityId":"20176225","DistrictId":"20176229"}}},{"Relevance":1.0,"Distance":150.8,"MatchLevel":"street","MatchQuality":{"Country":1.0,"State":1.0,"County":1.0,"City":1.0,"District":1.0,"Street":[1.0],"PostalCode":1.0},"Location":{"LocationId":"LINK_78607476_L","LocationType":"point","DisplayPosition":{"Latitude":48.2125145,"Longitude":9.0009643},"MapView":{"TopLeft":{"Latitude":48.21254,"Longitude":8.99996},"BottomRight":{"Latitude":48.2125,"Longitude":9.00247}},"Address":{"Label":"Lautlinger Straße, 72458 Albstadt, Deutschland","Country":"DEU","State":"Baden-Württemberg","County":"Zollernalbkreis","City":"Albstadt","District":"Ebingen","Street":"Lautlinger Straße","PostalCode":"72458","AdditionalData":[{"value":"Deutschland","key":"CountryName"},{"value":"Baden-Württemberg","key":"StateName"}]},"MapReference":{"ReferenceId":"78607476","Spot":0.6,"SideOfStreet":"left","CountryId":"20147700","StateId":"20171489","CountyId":"20176095","CityId":"20176225","DistrictId":"20176229"}}}]}]}}',true);
//        var_export($data);

        $response = new \spacedealer\here\api\Response($data);
        $metaInfo = $response->getMetaInfo();
        $this->assertEquals(['Timestamp' => '2014-10-22T12:23:11.006+0000'], $metaInfo);

        $resultInfo = $response->getResult();
        $this->assertEquals(null, $resultInfo);
    }

    public function testHasExceptionError()
    {

        $data = [
            "Details" => "Request is not valid! (Input parameter validation failed. RevGeo: missing spatial filter parameters ('prox' or 'bbox'))",
            "AdditionalData" => [],
            "type" => "ApplicationError",
            "subtype" => "InvalidInputData"
        ];
        $response = new \spacedealer\here\api\Response($data);

        $this->assertTrue($response->getException());
    }

    public function testHasResult()
    {
        $data =
            [
                'Response' =>
                    [
                        'MetaInfo' =>
                            [
                                'Timestamp' => '2014-10-27T16:03:13.246+0000',
                                'NextPageInformation' => '2',
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
                                                        'Distance' => 0.1000000000000000055511151231257827021181583404541015625,
                                                        'MatchLevel' => 'houseNumber',
                                                        'MatchQuality' =>
                                                            [
                                                                'Country' => 1,
                                                                'State' => 1,
                                                                'County' => 1,
                                                                'City' => 1,
                                                                'District' => 1,
                                                                'Street' =>
                                                                    [
                                                                        0 => 1,
                                                                    ],
                                                                'HouseNumber' => 1,
                                                                'PostalCode' => 1,
                                                            ],
                                                        'MatchType' => 'interpolated',
                                                        'Location' =>
                                                            [
                                                                'LocationId' => 'LINK_791204997_L_PA_160907596_S',
                                                                'LocationType' => 'point',
                                                                'DisplayPosition' =>
                                                                    [
                                                                        'Latitude' => 48.21115999999999957026375341229140758514404296875,
                                                                        'Longitude' => 9.000930000000000319460013997741043567657470703125,
                                                                    ],
                                                                'MapView' =>
                                                                    [
                                                                        'TopLeft' =>
                                                                            [
                                                                                'Latitude' => 48.2122841999999991458025760948657989501953125,
                                                                                'Longitude' => 8.9992430999999992735638443264178931713104248046875,
                                                                            ],
                                                                        'BottomRight' =>
                                                                            [
                                                                                'Latitude' => 48.2100357999999999947249307297170162200927734375,
                                                                                'Longitude' => 9.00261689999999958899934426881372928619384765625,
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
                                                                'MapReference' =>
                                                                    [
                                                                        'ReferenceId' => '791204997',
                                                                        'Spot' => 0.56999999999999995115018691649311222136020660400390625,
                                                                        'SideOfStreet' => 'left',
                                                                        'CountryId' => '20147700',
                                                                        'StateId' => '20171489',
                                                                        'CountyId' => '20176095',
                                                                        'CityId' => '20176225',
                                                                        'DistrictId' => '20176229',
                                                                    ],
                                                            ],
                                                    ],
                                                1 =>
                                                    [
                                                        'Relevance' => 1,
                                                        'Distance' => 48.10000000000000142108547152020037174224853515625,
                                                        'MatchLevel' => 'street',
                                                        'MatchQuality' =>
                                                            [
                                                                'Country' => 1,
                                                                'State' => 1,
                                                                'County' => 1,
                                                                'City' => 1,
                                                                'District' => 1,
                                                                'Street' =>
                                                                    [
                                                                        0 => 1,
                                                                    ],
                                                                'PostalCode' => 1,
                                                            ],
                                                        'Location' =>
                                                            [
                                                                'LocationId' => 'LINK_78607001_R',
                                                                'LocationType' => 'point',
                                                                'DisplayPosition' =>
                                                                    [
                                                                        'Latitude' => 48.21157000000000181216819328255951404571533203125,
                                                                        'Longitude' => 9.000730000000000785576048656366765499114990234375,
                                                                    ],
                                                                'MapView' =>
                                                                    [
                                                                        'TopLeft' =>
                                                                            [
                                                                                'Latitude' => 48.21218999999999965666575008071959018707275390625,
                                                                                'Longitude' => 9.0002499999999994173549566767178475856781005859375,
                                                                            ],
                                                                        'BottomRight' =>
                                                                            [
                                                                                'Latitude' => 48.21157000000000181216819328255951404571533203125,
                                                                                'Longitude' => 9.0007599999999996498445398174226284027099609375,
                                                                            ],
                                                                    ],
                                                                'Address' =>
                                                                    [
                                                                        'Label' => 'Olgastraße, 72458 Albstadt, Deutschland',
                                                                        'Country' => 'DEU',
                                                                        'State' => 'Baden-Württemberg',
                                                                        'County' => 'Zollernalbkreis',
                                                                        'City' => 'Albstadt',
                                                                        'District' => 'Ebingen',
                                                                        'Street' => 'Olgastraße',
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
                                                                'MapReference' =>
                                                                    [
                                                                        'ReferenceId' => '78607001',
                                                                        'Spot' => 0,
                                                                        'SideOfStreet' => 'right',
                                                                        'CountryId' => '20147700',
                                                                        'StateId' => '20171489',
                                                                        'CountyId' => '20176095',
                                                                        'CityId' => '20176225',
                                                                        'DistrictId' => '20176229',
                                                                    ],
                                                            ],
                                                    ],
                                                2 =>
                                                    [
                                                        'Relevance' => 1,
                                                        'Distance' => 48.10000000000000142108547152020037174224853515625,
                                                        'MatchLevel' => 'street',
                                                        'MatchQuality' =>
                                                            [
                                                                'Country' => 1,
                                                                'State' => 1,
                                                                'County' => 1,
                                                                'City' => 1,
                                                                'District' => 1,
                                                                'Street' =>
                                                                    [
                                                                        0 => 1,
                                                                    ],
                                                                'PostalCode' => 1,
                                                            ],
                                                        'Location' =>
                                                            [
                                                                'LocationId' => 'LINK_78607003_L',
                                                                'LocationType' => 'point',
                                                                'DisplayPosition' =>
                                                                    [
                                                                        'Latitude' => 48.21157000000000181216819328255951404571533203125,
                                                                        'Longitude' => 9.000730000000000785576048656366765499114990234375,
                                                                    ],
                                                                'MapView' =>
                                                                    [
                                                                        'TopLeft' =>
                                                                            [
                                                                                'Latitude' => 48.21162000000000347199602401815354824066162109375,
                                                                                'Longitude' => 8.999639999999999417923390865325927734375,
                                                                            ],
                                                                        'BottomRight' =>
                                                                            [
                                                                                'Latitude' => 48.21157000000000181216819328255951404571533203125,
                                                                                'Longitude' => 9.000730000000000785576048656366765499114990234375,
                                                                            ],
                                                                    ],
                                                                'Address' =>
                                                                    [
                                                                        'Label' => 'Olgastraße, 72458 Albstadt, Deutschland',
                                                                        'Country' => 'DEU',
                                                                        'State' => 'Baden-Württemberg',
                                                                        'County' => 'Zollernalbkreis',
                                                                        'City' => 'Albstadt',
                                                                        'District' => 'Ebingen',
                                                                        'Street' => 'Olgastraße',
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
                                                                'MapReference' =>
                                                                    [
                                                                        'ReferenceId' => '78607003',
                                                                        'Spot' => 0,
                                                                        'SideOfStreet' => 'left',
                                                                        'CountryId' => '20147700',
                                                                        'StateId' => '20171489',
                                                                        'CountyId' => '20176095',
                                                                        'CityId' => '20176225',
                                                                        'DistrictId' => '20176229',
                                                                    ],
                                                            ],
                                                    ],
                                                3 =>
                                                    [
                                                        'Relevance' => 1,
                                                        'Distance' => 59.7999999999999971578290569595992565155029296875,
                                                        'MatchLevel' => 'houseNumber',
                                                        'MatchQuality' =>
                                                            [
                                                                'Country' => 1,
                                                                'State' => 1,
                                                                'County' => 1,
                                                                'City' => 1,
                                                                'District' => 1,
                                                                'Street' =>
                                                                    [
                                                                        0 => 1,
                                                                    ],
                                                                'HouseNumber' => 1,
                                                                'PostalCode' => 1,
                                                            ],
                                                        'MatchType' => 'interpolated',
                                                        'Location' =>
                                                            [
                                                                'LocationId' => 'LINK_78607002_R_PA_162148211_S',
                                                                'LocationType' => 'point',
                                                                'DisplayPosition' =>
                                                                    [
                                                                        'Latitude' => 48.2115399999999993951860233210027217864990234375,
                                                                        'Longitude' => 9.00150000000000005684341886080801486968994140625,
                                                                    ],
                                                                'MapView' =>
                                                                    [
                                                                        'TopLeft' =>
                                                                            [
                                                                                'Latitude' => 48.21266419999999897072484600357711315155029296875,
                                                                                'Longitude' => 8.999813100000000787304088589735329151153564453125,
                                                                            ],
                                                                        'BottomRight' =>
                                                                            [
                                                                                'Latitude' => 48.21041579999999981964720063842833042144775390625,
                                                                                'Longitude' => 9.003186899999999326382749131880700588226318359375,
                                                                            ],
                                                                    ],
                                                                'Address' =>
                                                                    [
                                                                        'Label' => 'Olgastraße 82, 72458 Albstadt, Deutschland',
                                                                        'Country' => 'DEU',
                                                                        'State' => 'Baden-Württemberg',
                                                                        'County' => 'Zollernalbkreis',
                                                                        'City' => 'Albstadt',
                                                                        'District' => 'Ebingen',
                                                                        'Street' => 'Olgastraße',
                                                                        'HouseNumber' => '82',
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
                                                                'MapReference' =>
                                                                    [
                                                                        'ReferenceId' => '78607002',
                                                                        'Spot' => 0.5500000000000000444089209850062616169452667236328125,
                                                                        'SideOfStreet' => 'right',
                                                                        'CountryId' => '20147700',
                                                                        'StateId' => '20171489',
                                                                        'CountyId' => '20176095',
                                                                        'CityId' => '20176225',
                                                                        'DistrictId' => '20176229',
                                                                    ],
                                                            ],
                                                    ],
                                                4 =>
                                                    [
                                                        'Relevance' => 1,
                                                        'Distance' => 110.7000000000000028421709430404007434844970703125,
                                                        'MatchLevel' => 'houseNumber',
                                                        'MatchQuality' =>
                                                            [
                                                                'Country' => 1,
                                                                'State' => 1,
                                                                'County' => 1,
                                                                'City' => 1,
                                                                'District' => 1,
                                                                'Street' =>
                                                                    [
                                                                        0 => 1,
                                                                    ],
                                                                'HouseNumber' => 1,
                                                                'PostalCode' => 1,
                                                            ],
                                                        'MatchType' => 'interpolated',
                                                        'Location' =>
                                                            [
                                                                'LocationId' => 'LINK_78606997_L_PA_162613236_S',
                                                                'LocationType' => 'point',
                                                                'DisplayPosition' =>
                                                                    [
                                                                        'Latitude' => 48.21204999999999785131876706145703792572021484375,
                                                                        'Longitude' => 9.002430000000000376303432858549058437347412109375,
                                                                    ],
                                                                'MapView' =>
                                                                    [
                                                                        'TopLeft' =>
                                                                            [
                                                                                'Latitude' => 48.213174199999997426857589744031429290771484375,
                                                                                'Longitude' => 9.00074299999999993815436027944087982177734375,
                                                                            ],
                                                                        'BottomRight' =>
                                                                            [
                                                                                'Latitude' => 48.2109257999999982757799443788826465606689453125,
                                                                                'Longitude' => 9.00411700000000081445250543765723705291748046875,
                                                                            ],
                                                                    ],
                                                                'Address' =>
                                                                    [
                                                                        'Label' => 'Drosselweg 4, 72458 Albstadt, Deutschland',
                                                                        'Country' => 'DEU',
                                                                        'State' => 'Baden-Württemberg',
                                                                        'County' => 'Zollernalbkreis',
                                                                        'City' => 'Albstadt',
                                                                        'District' => 'Ebingen',
                                                                        'Street' => 'Drosselweg',
                                                                        'HouseNumber' => '4',
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
                                                                'MapReference' =>
                                                                    [
                                                                        'ReferenceId' => '78606997',
                                                                        'Spot' => 0.0200000000000000004163336342344337026588618755340576171875,
                                                                        'SideOfStreet' => 'left',
                                                                        'CountryId' => '20147700',
                                                                        'StateId' => '20171489',
                                                                        'CountyId' => '20176095',
                                                                        'CityId' => '20176225',
                                                                        'DistrictId' => '20176229',
                                                                    ],
                                                            ],
                                                    ],
                                                5 =>
                                                    [
                                                        'Relevance' => 1,
                                                        'Distance' => 113.5,
                                                        'MatchLevel' => 'houseNumber',
                                                        'MatchQuality' =>
                                                            [
                                                                'Country' => 1,
                                                                'State' => 1,
                                                                'County' => 1,
                                                                'City' => 1,
                                                                'District' => 1,
                                                                'Street' =>
                                                                    [
                                                                        0 => 1,
                                                                    ],
                                                                'HouseNumber' => 1,
                                                                'PostalCode' => 1,
                                                            ],
                                                        'MatchType' => 'interpolated',
                                                        'Location' =>
                                                            [
                                                                'LocationId' => 'LINK_78606998_L_PA_160527620_S',
                                                                'LocationType' => 'point',
                                                                'DisplayPosition' =>
                                                                    [
                                                                        'Latitude' => 48.2116400000000027148416847921907901763916015625,
                                                                        'Longitude' => 9.002430000000000376303432858549058437347412109375,
                                                                    ],
                                                                'MapView' =>
                                                                    [
                                                                        'TopLeft' =>
                                                                            [
                                                                                'Latitude' => 48.21276420000000229038050747476518154144287109375,
                                                                                'Longitude' => 9.00074299999999993815436027944087982177734375,
                                                                            ],
                                                                        'BottomRight' =>
                                                                            [
                                                                                'Latitude' => 48.21051580000000313930286210961639881134033203125,
                                                                                'Longitude' => 9.00411700000000081445250543765723705291748046875,
                                                                            ],
                                                                    ],
                                                                'Address' =>
                                                                    [
                                                                        'Label' => 'Drosselweg 6, 72458 Albstadt, Deutschland',
                                                                        'Country' => 'DEU',
                                                                        'State' => 'Baden-Württemberg',
                                                                        'County' => 'Zollernalbkreis',
                                                                        'City' => 'Albstadt',
                                                                        'District' => 'Ebingen',
                                                                        'Street' => 'Drosselweg',
                                                                        'HouseNumber' => '6',
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
                                                                'MapReference' =>
                                                                    [
                                                                        'ReferenceId' => '78606998',
                                                                        'Spot' => 0.2600000000000000088817841970012523233890533447265625,
                                                                        'SideOfStreet' => 'left',
                                                                        'CountryId' => '20147700',
                                                                        'StateId' => '20171489',
                                                                        'CountyId' => '20176095',
                                                                        'CityId' => '20176225',
                                                                        'DistrictId' => '20176229',
                                                                    ],
                                                            ],
                                                    ],
                                                6 =>
                                                    [
                                                        'Relevance' => 1,
                                                        'Distance' => 124.7999999999999971578290569595992565155029296875,
                                                        'MatchLevel' => 'street',
                                                        'MatchQuality' =>
                                                            [
                                                                'Country' => 1,
                                                                'State' => 1,
                                                                'County' => 1,
                                                                'City' => 1,
                                                                'District' => 1,
                                                                'Street' =>
                                                                    [
                                                                        0 => 1,
                                                                    ],
                                                                'PostalCode' => 1,
                                                            ],
                                                        'Location' =>
                                                            [
                                                                'LocationId' => 'LINK_589234521_R',
                                                                'LocationType' => 'point',
                                                                'DisplayPosition' =>
                                                                    [
                                                                        'Latitude' => 48.2100367000000034067852539010345935821533203125,
                                                                        'Longitude' => 9.000921500000000463614924228750169277191162109375,
                                                                    ],
                                                                'MapView' =>
                                                                    [
                                                                        'TopLeft' =>
                                                                            [
                                                                                'Latitude' => 48.2102000000000003865352482534945011138916015625,
                                                                                'Longitude' => 8.9959100000000002950173438875935971736907958984375,
                                                                            ],
                                                                        'BottomRight' =>
                                                                            [
                                                                                'Latitude' => 48.2100200000000000954969436861574649810791015625,
                                                                                'Longitude' => 9.008720000000000283080225926823914051055908203125,
                                                                            ],
                                                                    ],
                                                                'Address' =>
                                                                    [
                                                                        'Label' => 'Berliner Straße, 72458 Albstadt, Deutschland',
                                                                        'Country' => 'DEU',
                                                                        'State' => 'Baden-Württemberg',
                                                                        'County' => 'Zollernalbkreis',
                                                                        'City' => 'Albstadt',
                                                                        'District' => 'Ebingen',
                                                                        'Street' => 'Berliner Straße',
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
                                                                'MapReference' =>
                                                                    [
                                                                        'ReferenceId' => '589234521',
                                                                        'Spot' => 0.60999999999999998667732370449812151491641998291015625,
                                                                        'SideOfStreet' => 'right',
                                                                        'CountryId' => '20147700',
                                                                        'StateId' => '20171489',
                                                                        'CountyId' => '20176095',
                                                                        'CityId' => '20176225',
                                                                        'DistrictId' => '20176229',
                                                                    ],
                                                            ],
                                                    ],
                                                7 =>
                                                    [
                                                        'Relevance' => 1,
                                                        'Distance' => 125.2000000000000028421709430404007434844970703125,
                                                        'MatchLevel' => 'street',
                                                        'MatchQuality' =>
                                                            [
                                                                'Country' => 1,
                                                                'State' => 1,
                                                                'County' => 1,
                                                                'City' => 1,
                                                                'District' => 1,
                                                                'Street' =>
                                                                    [
                                                                        0 => 1,
                                                                    ],
                                                                'PostalCode' => 1,
                                                            ],
                                                        'Location' =>
                                                            [
                                                                'LocationId' => 'LINK_78607000_R',
                                                                'LocationType' => 'point',
                                                                'DisplayPosition' =>
                                                                    [
                                                                        'Latitude' => 48.21218999999999965666575008071959018707275390625,
                                                                        'Longitude' => 9.0002499999999994173549566767178475856781005859375,
                                                                    ],
                                                                'MapView' =>
                                                                    [
                                                                        'TopLeft' =>
                                                                            [
                                                                                'Latitude' => 48.21220000000000283080225926823914051055908203125,
                                                                                'Longitude' => 8.999639999999999417923390865325927734375,
                                                                            ],
                                                                        'BottomRight' =>
                                                                            [
                                                                                'Latitude' => 48.21162000000000347199602401815354824066162109375,
                                                                                'Longitude' => 9.0002499999999994173549566767178475856781005859375,
                                                                            ],
                                                                    ],
                                                                'Address' =>
                                                                    [
                                                                        'Label' => 'Olgastraße, 72458 Albstadt, Deutschland',
                                                                        'Country' => 'DEU',
                                                                        'State' => 'Baden-Württemberg',
                                                                        'County' => 'Zollernalbkreis',
                                                                        'City' => 'Albstadt',
                                                                        'District' => 'Ebingen',
                                                                        'Street' => 'Olgastraße',
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
                                                                'MapReference' =>
                                                                    [
                                                                        'ReferenceId' => '78607000',
                                                                        'Spot' => 1,
                                                                        'SideOfStreet' => 'right',
                                                                        'CountryId' => '20147700',
                                                                        'StateId' => '20171489',
                                                                        'CountyId' => '20176095',
                                                                        'CityId' => '20176225',
                                                                        'DistrictId' => '20176229',
                                                                    ],
                                                            ],
                                                    ],
                                                8 =>
                                                    [
                                                        'Relevance' => 1,
                                                        'Distance' => 126,
                                                        'MatchLevel' => 'houseNumber',
                                                        'MatchQuality' =>
                                                            [
                                                                'Country' => 1,
                                                                'State' => 1,
                                                                'County' => 1,
                                                                'City' => 1,
                                                                'District' => 1,
                                                                'Street' =>
                                                                    [
                                                                        0 => 1,
                                                                    ],
                                                                'HouseNumber' => 1,
                                                                'PostalCode' => 1,
                                                            ],
                                                        'MatchType' => 'interpolated',
                                                        'Location' =>
                                                            [
                                                                'LocationId' => 'LINK_78607021_L_PA_162476166_S',
                                                                'LocationType' => 'point',
                                                                'DisplayPosition' =>
                                                                    [
                                                                        'Latitude' => 48.21164999999999878355083637870848178863525390625,
                                                                        'Longitude' => 8.999359999999999359943103627301752567291259765625,
                                                                    ],
                                                                'MapView' =>
                                                                    [
                                                                        'TopLeft' =>
                                                                            [
                                                                                'Latitude' => 48.2127741999999983590896590612828731536865234375,
                                                                                'Longitude' => 8.9976730000000006981508704484440386295318603515625,
                                                                            ],
                                                                        'BottomRight' =>
                                                                            [
                                                                                'Latitude' => 48.210525799999999208012013696134090423583984375,
                                                                                'Longitude' => 9.001046999999999798092176206409931182861328125,
                                                                            ],
                                                                    ],
                                                                'Address' =>
                                                                    [
                                                                        'Label' => 'Olgastraße 93, 72458 Albstadt, Deutschland',
                                                                        'Country' => 'DEU',
                                                                        'State' => 'Baden-Württemberg',
                                                                        'County' => 'Zollernalbkreis',
                                                                        'City' => 'Albstadt',
                                                                        'District' => 'Ebingen',
                                                                        'Street' => 'Olgastraße',
                                                                        'HouseNumber' => '93',
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
                                                                'MapReference' =>
                                                                    [
                                                                        'ReferenceId' => '78607021',
                                                                        'Spot' => 0.419999999999999984456877655247808434069156646728515625,
                                                                        'SideOfStreet' => 'left',
                                                                        'CountryId' => '20147700',
                                                                        'StateId' => '20171489',
                                                                        'CountyId' => '20176095',
                                                                        'CityId' => '20176225',
                                                                        'DistrictId' => '20176229',
                                                                    ],
                                                            ],
                                                    ],
                                                9 =>
                                                    [
                                                        'Relevance' => 1,
                                                        'Distance' => 150.80000000000001136868377216160297393798828125,
                                                        'MatchLevel' => 'street',
                                                        'MatchQuality' =>
                                                            [
                                                                'Country' => 1,
                                                                'State' => 1,
                                                                'County' => 1,
                                                                'City' => 1,
                                                                'District' => 1,
                                                                'Street' =>
                                                                    [
                                                                        0 => 1,
                                                                    ],
                                                                'PostalCode' => 1,
                                                            ],
                                                        'Location' =>
                                                            [
                                                                'LocationId' => 'LINK_78607476_L',
                                                                'LocationType' => 'point',
                                                                'DisplayPosition' =>
                                                                    [
                                                                        'Latitude' => 48.2125144999999974970705807209014892578125,
                                                                        'Longitude' => 9.00096429999999969595592119731009006500244140625,
                                                                    ],
                                                                'MapView' =>
                                                                    [
                                                                        'TopLeft' =>
                                                                            [
                                                                                'Latitude' => 48.21253999999999706460585002787411212921142578125,
                                                                                'Longitude' => 8.9999599999999997379518390516750514507293701171875,
                                                                            ],
                                                                        'BottomRight' =>
                                                                            [
                                                                                'Latitude' => 48.21249999999999857891452847979962825775146484375,
                                                                                'Longitude' => 9.0024700000000006383515938068740069866180419921875,
                                                                            ],
                                                                    ],
                                                                'Address' =>
                                                                    [
                                                                        'Label' => 'Lautlinger Straße, 72458 Albstadt, Deutschland',
                                                                        'Country' => 'DEU',
                                                                        'State' => 'Baden-Württemberg',
                                                                        'County' => 'Zollernalbkreis',
                                                                        'City' => 'Albstadt',
                                                                        'District' => 'Ebingen',
                                                                        'Street' => 'Lautlinger Straße',
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
                                                                'MapReference' =>
                                                                    [
                                                                        'ReferenceId' => '78607476',
                                                                        'Spot' => 0.59999999999999997779553950749686919152736663818359375,
                                                                        'SideOfStreet' => 'left',
                                                                        'CountryId' => '20147700',
                                                                        'StateId' => '20171489',
                                                                        'CountyId' => '20176095',
                                                                        'CityId' => '20176225',
                                                                        'DistrictId' => '20176229',
                                                                    ],
                                                            ],
                                                    ],
                                            ],
                                    ],
                            ],
                    ]
            ];

        $resultExpected = [
            0 =>
                [
                    'Relevance' => 1,
                    'Distance' => 0.1000000000000000055511151231257827021181583404541015625,
                    'MatchLevel' => 'houseNumber',
                    'MatchQuality' =>
                        [
                            'Country' => 1,
                            'State' => 1,
                            'County' => 1,
                            'City' => 1,
                            'District' => 1,
                            'Street' =>
                                [
                                    0 => 1,
                                ],
                            'HouseNumber' => 1,
                            'PostalCode' => 1,
                        ],
                    'MatchType' => 'interpolated',
                    'Location' =>
                        [
                            'LocationId' => 'LINK_791204997_L_PA_160907596_S',
                            'LocationType' => 'point',
                            'DisplayPosition' =>
                                [
                                    'Latitude' => 48.21115999999999957026375341229140758514404296875,
                                    'Longitude' => 9.000930000000000319460013997741043567657470703125,
                                ],
                            'MapView' =>
                                [
                                    'TopLeft' =>
                                        [
                                            'Latitude' => 48.2122841999999991458025760948657989501953125,
                                            'Longitude' => 8.9992430999999992735638443264178931713104248046875,
                                        ],
                                    'BottomRight' =>
                                        [
                                            'Latitude' => 48.2100357999999999947249307297170162200927734375,
                                            'Longitude' => 9.00261689999999958899934426881372928619384765625,
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
                            'MapReference' =>
                                [
                                    'ReferenceId' => '791204997',
                                    'Spot' => 0.56999999999999995115018691649311222136020660400390625,
                                    'SideOfStreet' => 'left',
                                    'CountryId' => '20147700',
                                    'StateId' => '20171489',
                                    'CountyId' => '20176095',
                                    'CityId' => '20176225',
                                    'DistrictId' => '20176229',
                                ],
                        ],
                ],
            1 =>
                [
                    'Relevance' => 1,
                    'Distance' => 48.10000000000000142108547152020037174224853515625,
                    'MatchLevel' => 'street',
                    'MatchQuality' =>
                        [
                            'Country' => 1,
                            'State' => 1,
                            'County' => 1,
                            'City' => 1,
                            'District' => 1,
                            'Street' =>
                                [
                                    0 => 1,
                                ],
                            'PostalCode' => 1,
                        ],
                    'Location' =>
                        [
                            'LocationId' => 'LINK_78607001_R',
                            'LocationType' => 'point',
                            'DisplayPosition' =>
                                [
                                    'Latitude' => 48.21157000000000181216819328255951404571533203125,
                                    'Longitude' => 9.000730000000000785576048656366765499114990234375,
                                ],
                            'MapView' =>
                                [
                                    'TopLeft' =>
                                        [
                                            'Latitude' => 48.21218999999999965666575008071959018707275390625,
                                            'Longitude' => 9.0002499999999994173549566767178475856781005859375,
                                        ],
                                    'BottomRight' =>
                                        [
                                            'Latitude' => 48.21157000000000181216819328255951404571533203125,
                                            'Longitude' => 9.0007599999999996498445398174226284027099609375,
                                        ],
                                ],
                            'Address' =>
                                [
                                    'Label' => 'Olgastraße, 72458 Albstadt, Deutschland',
                                    'Country' => 'DEU',
                                    'State' => 'Baden-Württemberg',
                                    'County' => 'Zollernalbkreis',
                                    'City' => 'Albstadt',
                                    'District' => 'Ebingen',
                                    'Street' => 'Olgastraße',
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
                            'MapReference' =>
                                [
                                    'ReferenceId' => '78607001',
                                    'Spot' => 0,
                                    'SideOfStreet' => 'right',
                                    'CountryId' => '20147700',
                                    'StateId' => '20171489',
                                    'CountyId' => '20176095',
                                    'CityId' => '20176225',
                                    'DistrictId' => '20176229',
                                ],
                        ],
                ],
            2 =>
                [
                    'Relevance' => 1,
                    'Distance' => 48.10000000000000142108547152020037174224853515625,
                    'MatchLevel' => 'street',
                    'MatchQuality' =>
                        [
                            'Country' => 1,
                            'State' => 1,
                            'County' => 1,
                            'City' => 1,
                            'District' => 1,
                            'Street' =>
                                [
                                    0 => 1,
                                ],
                            'PostalCode' => 1,
                        ],
                    'Location' =>
                        [
                            'LocationId' => 'LINK_78607003_L',
                            'LocationType' => 'point',
                            'DisplayPosition' =>
                                [
                                    'Latitude' => 48.21157000000000181216819328255951404571533203125,
                                    'Longitude' => 9.000730000000000785576048656366765499114990234375,
                                ],
                            'MapView' =>
                                [
                                    'TopLeft' =>
                                        [
                                            'Latitude' => 48.21162000000000347199602401815354824066162109375,
                                            'Longitude' => 8.999639999999999417923390865325927734375,
                                        ],
                                    'BottomRight' =>
                                        [
                                            'Latitude' => 48.21157000000000181216819328255951404571533203125,
                                            'Longitude' => 9.000730000000000785576048656366765499114990234375,
                                        ],
                                ],
                            'Address' =>
                                [
                                    'Label' => 'Olgastraße, 72458 Albstadt, Deutschland',
                                    'Country' => 'DEU',
                                    'State' => 'Baden-Württemberg',
                                    'County' => 'Zollernalbkreis',
                                    'City' => 'Albstadt',
                                    'District' => 'Ebingen',
                                    'Street' => 'Olgastraße',
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
                            'MapReference' =>
                                [
                                    'ReferenceId' => '78607003',
                                    'Spot' => 0,
                                    'SideOfStreet' => 'left',
                                    'CountryId' => '20147700',
                                    'StateId' => '20171489',
                                    'CountyId' => '20176095',
                                    'CityId' => '20176225',
                                    'DistrictId' => '20176229',
                                ],
                        ],
                ],
            3 =>
                [
                    'Relevance' => 1,
                    'Distance' => 59.7999999999999971578290569595992565155029296875,
                    'MatchLevel' => 'houseNumber',
                    'MatchQuality' =>
                        [
                            'Country' => 1,
                            'State' => 1,
                            'County' => 1,
                            'City' => 1,
                            'District' => 1,
                            'Street' =>
                                [
                                    0 => 1,
                                ],
                            'HouseNumber' => 1,
                            'PostalCode' => 1,
                        ],
                    'MatchType' => 'interpolated',
                    'Location' =>
                        [
                            'LocationId' => 'LINK_78607002_R_PA_162148211_S',
                            'LocationType' => 'point',
                            'DisplayPosition' =>
                                [
                                    'Latitude' => 48.2115399999999993951860233210027217864990234375,
                                    'Longitude' => 9.00150000000000005684341886080801486968994140625,
                                ],
                            'MapView' =>
                                [
                                    'TopLeft' =>
                                        [
                                            'Latitude' => 48.21266419999999897072484600357711315155029296875,
                                            'Longitude' => 8.999813100000000787304088589735329151153564453125,
                                        ],
                                    'BottomRight' =>
                                        [
                                            'Latitude' => 48.21041579999999981964720063842833042144775390625,
                                            'Longitude' => 9.003186899999999326382749131880700588226318359375,
                                        ],
                                ],
                            'Address' =>
                                [
                                    'Label' => 'Olgastraße 82, 72458 Albstadt, Deutschland',
                                    'Country' => 'DEU',
                                    'State' => 'Baden-Württemberg',
                                    'County' => 'Zollernalbkreis',
                                    'City' => 'Albstadt',
                                    'District' => 'Ebingen',
                                    'Street' => 'Olgastraße',
                                    'HouseNumber' => '82',
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
                            'MapReference' =>
                                [
                                    'ReferenceId' => '78607002',
                                    'Spot' => 0.5500000000000000444089209850062616169452667236328125,
                                    'SideOfStreet' => 'right',
                                    'CountryId' => '20147700',
                                    'StateId' => '20171489',
                                    'CountyId' => '20176095',
                                    'CityId' => '20176225',
                                    'DistrictId' => '20176229',
                                ],
                        ],
                ],
            4 =>
                [
                    'Relevance' => 1,
                    'Distance' => 110.7000000000000028421709430404007434844970703125,
                    'MatchLevel' => 'houseNumber',
                    'MatchQuality' =>
                        [
                            'Country' => 1,
                            'State' => 1,
                            'County' => 1,
                            'City' => 1,
                            'District' => 1,
                            'Street' =>
                                [
                                    0 => 1,
                                ],
                            'HouseNumber' => 1,
                            'PostalCode' => 1,
                        ],
                    'MatchType' => 'interpolated',
                    'Location' =>
                        [
                            'LocationId' => 'LINK_78606997_L_PA_162613236_S',
                            'LocationType' => 'point',
                            'DisplayPosition' =>
                                [
                                    'Latitude' => 48.21204999999999785131876706145703792572021484375,
                                    'Longitude' => 9.002430000000000376303432858549058437347412109375,
                                ],
                            'MapView' =>
                                [
                                    'TopLeft' =>
                                        [
                                            'Latitude' => 48.213174199999997426857589744031429290771484375,
                                            'Longitude' => 9.00074299999999993815436027944087982177734375,
                                        ],
                                    'BottomRight' =>
                                        [
                                            'Latitude' => 48.2109257999999982757799443788826465606689453125,
                                            'Longitude' => 9.00411700000000081445250543765723705291748046875,
                                        ],
                                ],
                            'Address' =>
                                [
                                    'Label' => 'Drosselweg 4, 72458 Albstadt, Deutschland',
                                    'Country' => 'DEU',
                                    'State' => 'Baden-Württemberg',
                                    'County' => 'Zollernalbkreis',
                                    'City' => 'Albstadt',
                                    'District' => 'Ebingen',
                                    'Street' => 'Drosselweg',
                                    'HouseNumber' => '4',
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
                            'MapReference' =>
                                [
                                    'ReferenceId' => '78606997',
                                    'Spot' => 0.0200000000000000004163336342344337026588618755340576171875,
                                    'SideOfStreet' => 'left',
                                    'CountryId' => '20147700',
                                    'StateId' => '20171489',
                                    'CountyId' => '20176095',
                                    'CityId' => '20176225',
                                    'DistrictId' => '20176229',
                                ],
                        ],
                ],
            5 =>
                [
                    'Relevance' => 1,
                    'Distance' => 113.5,
                    'MatchLevel' => 'houseNumber',
                    'MatchQuality' =>
                        [
                            'Country' => 1,
                            'State' => 1,
                            'County' => 1,
                            'City' => 1,
                            'District' => 1,
                            'Street' =>
                                [
                                    0 => 1,
                                ],
                            'HouseNumber' => 1,
                            'PostalCode' => 1,
                        ],
                    'MatchType' => 'interpolated',
                    'Location' =>
                        [
                            'LocationId' => 'LINK_78606998_L_PA_160527620_S',
                            'LocationType' => 'point',
                            'DisplayPosition' =>
                                [
                                    'Latitude' => 48.2116400000000027148416847921907901763916015625,
                                    'Longitude' => 9.002430000000000376303432858549058437347412109375,
                                ],
                            'MapView' =>
                                [
                                    'TopLeft' =>
                                        [
                                            'Latitude' => 48.21276420000000229038050747476518154144287109375,
                                            'Longitude' => 9.00074299999999993815436027944087982177734375,
                                        ],
                                    'BottomRight' =>
                                        [
                                            'Latitude' => 48.21051580000000313930286210961639881134033203125,
                                            'Longitude' => 9.00411700000000081445250543765723705291748046875,
                                        ],
                                ],
                            'Address' =>
                                [
                                    'Label' => 'Drosselweg 6, 72458 Albstadt, Deutschland',
                                    'Country' => 'DEU',
                                    'State' => 'Baden-Württemberg',
                                    'County' => 'Zollernalbkreis',
                                    'City' => 'Albstadt',
                                    'District' => 'Ebingen',
                                    'Street' => 'Drosselweg',
                                    'HouseNumber' => '6',
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
                            'MapReference' =>
                                [
                                    'ReferenceId' => '78606998',
                                    'Spot' => 0.2600000000000000088817841970012523233890533447265625,
                                    'SideOfStreet' => 'left',
                                    'CountryId' => '20147700',
                                    'StateId' => '20171489',
                                    'CountyId' => '20176095',
                                    'CityId' => '20176225',
                                    'DistrictId' => '20176229',
                                ],
                        ],
                ],
            6 =>
                [
                    'Relevance' => 1,
                    'Distance' => 124.7999999999999971578290569595992565155029296875,
                    'MatchLevel' => 'street',
                    'MatchQuality' =>
                        [
                            'Country' => 1,
                            'State' => 1,
                            'County' => 1,
                            'City' => 1,
                            'District' => 1,
                            'Street' =>
                                [
                                    0 => 1,
                                ],
                            'PostalCode' => 1,
                        ],
                    'Location' =>
                        [
                            'LocationId' => 'LINK_589234521_R',
                            'LocationType' => 'point',
                            'DisplayPosition' =>
                                [
                                    'Latitude' => 48.2100367000000034067852539010345935821533203125,
                                    'Longitude' => 9.000921500000000463614924228750169277191162109375,
                                ],
                            'MapView' =>
                                [
                                    'TopLeft' =>
                                        [
                                            'Latitude' => 48.2102000000000003865352482534945011138916015625,
                                            'Longitude' => 8.9959100000000002950173438875935971736907958984375,
                                        ],
                                    'BottomRight' =>
                                        [
                                            'Latitude' => 48.2100200000000000954969436861574649810791015625,
                                            'Longitude' => 9.008720000000000283080225926823914051055908203125,
                                        ],
                                ],
                            'Address' =>
                                [
                                    'Label' => 'Berliner Straße, 72458 Albstadt, Deutschland',
                                    'Country' => 'DEU',
                                    'State' => 'Baden-Württemberg',
                                    'County' => 'Zollernalbkreis',
                                    'City' => 'Albstadt',
                                    'District' => 'Ebingen',
                                    'Street' => 'Berliner Straße',
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
                            'MapReference' =>
                                [
                                    'ReferenceId' => '589234521',
                                    'Spot' => 0.60999999999999998667732370449812151491641998291015625,
                                    'SideOfStreet' => 'right',
                                    'CountryId' => '20147700',
                                    'StateId' => '20171489',
                                    'CountyId' => '20176095',
                                    'CityId' => '20176225',
                                    'DistrictId' => '20176229',
                                ],
                        ],
                ],
            7 =>
                [
                    'Relevance' => 1,
                    'Distance' => 125.2000000000000028421709430404007434844970703125,
                    'MatchLevel' => 'street',
                    'MatchQuality' =>
                        [
                            'Country' => 1,
                            'State' => 1,
                            'County' => 1,
                            'City' => 1,
                            'District' => 1,
                            'Street' =>
                                [
                                    0 => 1,
                                ],
                            'PostalCode' => 1,
                        ],
                    'Location' =>
                        [
                            'LocationId' => 'LINK_78607000_R',
                            'LocationType' => 'point',
                            'DisplayPosition' =>
                                [
                                    'Latitude' => 48.21218999999999965666575008071959018707275390625,
                                    'Longitude' => 9.0002499999999994173549566767178475856781005859375,
                                ],
                            'MapView' =>
                                [
                                    'TopLeft' =>
                                        [
                                            'Latitude' => 48.21220000000000283080225926823914051055908203125,
                                            'Longitude' => 8.999639999999999417923390865325927734375,
                                        ],
                                    'BottomRight' =>
                                        [
                                            'Latitude' => 48.21162000000000347199602401815354824066162109375,
                                            'Longitude' => 9.0002499999999994173549566767178475856781005859375,
                                        ],
                                ],
                            'Address' =>
                                [
                                    'Label' => 'Olgastraße, 72458 Albstadt, Deutschland',
                                    'Country' => 'DEU',
                                    'State' => 'Baden-Württemberg',
                                    'County' => 'Zollernalbkreis',
                                    'City' => 'Albstadt',
                                    'District' => 'Ebingen',
                                    'Street' => 'Olgastraße',
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
                            'MapReference' =>
                                [
                                    'ReferenceId' => '78607000',
                                    'Spot' => 1,
                                    'SideOfStreet' => 'right',
                                    'CountryId' => '20147700',
                                    'StateId' => '20171489',
                                    'CountyId' => '20176095',
                                    'CityId' => '20176225',
                                    'DistrictId' => '20176229',
                                ],
                        ],
                ],
            8 =>
                [
                    'Relevance' => 1,
                    'Distance' => 126,
                    'MatchLevel' => 'houseNumber',
                    'MatchQuality' =>
                        [
                            'Country' => 1,
                            'State' => 1,
                            'County' => 1,
                            'City' => 1,
                            'District' => 1,
                            'Street' =>
                                [
                                    0 => 1,
                                ],
                            'HouseNumber' => 1,
                            'PostalCode' => 1,
                        ],
                    'MatchType' => 'interpolated',
                    'Location' =>
                        [
                            'LocationId' => 'LINK_78607021_L_PA_162476166_S',
                            'LocationType' => 'point',
                            'DisplayPosition' =>
                                [
                                    'Latitude' => 48.21164999999999878355083637870848178863525390625,
                                    'Longitude' => 8.999359999999999359943103627301752567291259765625,
                                ],
                            'MapView' =>
                                [
                                    'TopLeft' =>
                                        [
                                            'Latitude' => 48.2127741999999983590896590612828731536865234375,
                                            'Longitude' => 8.9976730000000006981508704484440386295318603515625,
                                        ],
                                    'BottomRight' =>
                                        [
                                            'Latitude' => 48.210525799999999208012013696134090423583984375,
                                            'Longitude' => 9.001046999999999798092176206409931182861328125,
                                        ],
                                ],
                            'Address' =>
                                [
                                    'Label' => 'Olgastraße 93, 72458 Albstadt, Deutschland',
                                    'Country' => 'DEU',
                                    'State' => 'Baden-Württemberg',
                                    'County' => 'Zollernalbkreis',
                                    'City' => 'Albstadt',
                                    'District' => 'Ebingen',
                                    'Street' => 'Olgastraße',
                                    'HouseNumber' => '93',
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
                            'MapReference' =>
                                [
                                    'ReferenceId' => '78607021',
                                    'Spot' => 0.419999999999999984456877655247808434069156646728515625,
                                    'SideOfStreet' => 'left',
                                    'CountryId' => '20147700',
                                    'StateId' => '20171489',
                                    'CountyId' => '20176095',
                                    'CityId' => '20176225',
                                    'DistrictId' => '20176229',
                                ],
                        ],
                ],
            9 =>
                [
                    'Relevance' => 1,
                    'Distance' => 150.80000000000001136868377216160297393798828125,
                    'MatchLevel' => 'street',
                    'MatchQuality' =>
                        [
                            'Country' => 1,
                            'State' => 1,
                            'County' => 1,
                            'City' => 1,
                            'District' => 1,
                            'Street' =>
                                [
                                    0 => 1,
                                ],
                            'PostalCode' => 1,
                        ],
                    'Location' =>
                        [
                            'LocationId' => 'LINK_78607476_L',
                            'LocationType' => 'point',
                            'DisplayPosition' =>
                                [
                                    'Latitude' => 48.2125144999999974970705807209014892578125,
                                    'Longitude' => 9.00096429999999969595592119731009006500244140625,
                                ],
                            'MapView' =>
                                [
                                    'TopLeft' =>
                                        [
                                            'Latitude' => 48.21253999999999706460585002787411212921142578125,
                                            'Longitude' => 8.9999599999999997379518390516750514507293701171875,
                                        ],
                                    'BottomRight' =>
                                        [
                                            'Latitude' => 48.21249999999999857891452847979962825775146484375,
                                            'Longitude' => 9.0024700000000006383515938068740069866180419921875,
                                        ],
                                ],
                            'Address' =>
                                [
                                    'Label' => 'Lautlinger Straße, 72458 Albstadt, Deutschland',
                                    'Country' => 'DEU',
                                    'State' => 'Baden-Württemberg',
                                    'County' => 'Zollernalbkreis',
                                    'City' => 'Albstadt',
                                    'District' => 'Ebingen',
                                    'Street' => 'Lautlinger Straße',
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
                            'MapReference' =>
                                [
                                    'ReferenceId' => '78607476',
                                    'Spot' => 0.59999999999999997779553950749686919152736663818359375,
                                    'SideOfStreet' => 'left',
                                    'CountryId' => '20147700',
                                    'StateId' => '20171489',
                                    'CountyId' => '20176095',
                                    'CityId' => '20176225',
                                    'DistrictId' => '20176229',
                                ],
                        ],
                ],
        ];

        $response = new \spacedealer\here\api\Response($data);
        $metaInfo = $response->getMetaInfo();
        $this->assertEquals(['Timestamp' => '2014-10-27T16:03:13.246+0000', 'NextPageInformation' => '2'], $metaInfo);
        $resultInfo = $response->getResult();
        $this->assertEquals($resultExpected, $resultInfo);
    }
}