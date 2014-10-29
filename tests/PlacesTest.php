<?php

/**
 * PlacesTest.php file.
 *
 * @author Dirk Adler <adler@spacedealer.de>
 * @author Trung Nguyen <t.nguyen@spacedealer.de>
 * @link http://www.spacedealer.de
 * @copyright Copyright &copy; 2014 spacedealer GmbH
 */
class PlacesTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var string you may use your own registered username for testing - demo user is often over the daily usage limit :-0
     */
    public $appCode = 'AJKnXv84fjrb0KIHawS0Tg';
    public $appId = 'DemoAppId01082013GAL';
    public $apiVersion = 'v1';
    public $baseUrl = 'http://places.cit.api.here.com/places/v1/';

    /**
     * @dataProvider dataProvider
     */
    public function testCommands($command, $params)
    {
        $client = new spacedealer\here\api\Places($this->appId, $this->appCode, $this->apiVersion, $this->baseUrl);

        /** @var \spacedealer\here\api\Response $response */
        $response = $client->$command($params);
        $this->assertTrue($response->isOk());
    }

    /**
     * @todo add more test data
     * @return array
     */
    public function dataProvider()
    {
        return [
            [
                'search',
                [
                    'at' => '48.2111588,9.0009298',
                    'q' => 'Restaurant',
                ]
            ],
            [
                'suggest',
                [
                    'at' => '48.2111588,9.0009298',
                    'q' => 'Res',
                ]
            ],
            [
                'explore',
                [
                    'at' => '48.2111588,9.0009298',
                ]
            ],
            [
                'around',
                [
                    'at' => '48.2111588,9.0009298',
                    'q' => 'Restaurant',
                ]
            ],
            [
                'here',
                [
                    'at' => '48.2111588,9.0009298',
                    'q' => 'Restaurant',
                ]
            ],
            [
                'lookup',
                [
                    'source' => 'pvid',
                    'id' => '1115664033',
                ]
            ],
            [
                'places',
                [
                    'at' => '48.2111588,9.0009298',
                ]
            ],
        ];
    }
}