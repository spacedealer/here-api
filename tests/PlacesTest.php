<?php
/**
 * PlacesTest.php file.
 *
 * @author Trung Nguyen <t.nguyen@spacedealer.de>
 * @author Dirk Adler <adler@spacedealer.de>
 * @link http://www.spacedealer.de
 * @copyright Copyright &copy; 2014 spacedealer GmbH
 */

namespace spacedealer\tests\here\api;

use GuzzleHttp\Subscriber\Mock;
use spacedealer\here\api\Places;

/**
 * Class PlacesTest
 */
class PlacesTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var string Official demo credentials
     */
    public $appCode = 'AJKnXv84fjrb0KIHawS0Tg';
    public $appId = 'DemoAppId01082013GAL';
    public $apiVersion = 'v1';
    public $baseUrl = 'http://places.cit.api.here.com/places/v1/';

    /**
     * @param string $command
     * @param array $params
     * @param string|null $responseFile
     * @dataProvider dataProvider
     */
    public function testCommands($command, $params, $responseFile = null)
    {
        // init api client class
        $client = new Places(
            $this->appId,
            $this->appCode,
            $this->apiVersion,
            true,
            $this->baseUrl
        );

        // load mock response data
        if (!$responseFile) {
            $responseFile = 'place-' . $command . '.txt';
        }
        $mockResponse = file_get_contents(__DIR__ . '/responses/' . $responseFile);

        // create mock response
        $mock = new Mock([
            $mockResponse,
        ]);

        // add the mock subscriber to the client
        $client->getHttpClient()->getEmitter()->attach($mock);

        // execute request
        /** @var \spacedealer\here\api\PlacesResponse $response */
        $response = $client->$command($params);

        $this->assertTrue($response->isOk());
    }

    /**
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
                'categories',
                [
                    'at' => '48.2111588,9.0009298',
                ]
            ],
            [
                'categories',
                [
                    'type' => 'cuisines',
                    'at' => '48.2111588,9.0009298',
                ],
                'place-categories-cuisines.txt'
            ],
        ];
    }
}
