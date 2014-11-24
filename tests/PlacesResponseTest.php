<?php

/**
 * PlacesResponseTest.php file.
 *
 * @author Trung Nguyen <t.nguyen@spacedealer.de>
 * @author Dirk Adler <adler@spacedealer.de>
 * @link http://www.spacedealer.de
 * @copyright Copyright &copy; 2014 spacedealer GmbH
 */
class PlacesResponseTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider dataProviderError
     */
    public function testIsNotOk($data)
    {
        $response = new \spacedealer\here\api\PlacesResponse($data);
        $this->assertFalse($response->isOk());
    }

    /**
     * @dataProvider dataProvider
     */
    public function testGetResult($data)
    {
        $response = new \spacedealer\here\api\PlacesResponse($data);
        $result = $response->getResultCount();
        $this->assertNotNull($result);
    }

    /**
     * @dataProvider dataProvider
     */
    public function testGetResultCount($data)
    {
        $response = new \spacedealer\here\api\PlacesResponse($data);
        $count = $response->getResultCount();
        $this->assertGreaterThan(0, $count);
    }

    /**
     * @todo add more test data
     * @return array
     */
    public function dataProviderError()
    {

        return [
            [
                [
                    'status' => 401,
                    'message' => 'Invalid app_id app_code combination',
                ],
            ],
            [
                [
                    'status' => 400,
                    'message' => 'At parameter is incorrectly formatted: badly formatted position Berlin'
                ],
            ]
        ];
    }

    /**
     * @todo add more result types
     * @return array
     */
    public function dataProvider()
    {
        return [
            // case #0 result type search

            // case #1 result type suggestions
            [
                [
                    'suggestions' =>
                        [
                            0 => 'Restaurant',
                            1 => 'Restaurant The New York Grill',
                            2 => 'Cascina Restelli, Limido Comasco, Italien',
                            3 => 'Restaurants',
                            4 => 'Indisches Restaurant Maharani Marianne',
                            5 => 'RoSa Restaurant Cafe Cocktailbar',
                            6 => 'Rest area',
                            7 => 'Restaurant Wiesental',
                            8 => 'Asien Restaurant Zur weißen Möwe',
                            9 => 'Hotel Restaurant Schwane',
                            10 => 'Alb Hotel Schalksburg Restaurant mit Biergarten',
                            11 => 'Flugplatz Restaurant',
                            12 => 'Cafe-Restaurant Catrina',
                            13 => 'Restaurant zum Hirschgulden',
                            14 => 'Siam Thailändisches Restaurant',
                        ],
                ]
            ],
            // case #2 result type lookup
            // case #3 result type categories

        ];
    }
}