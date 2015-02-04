<?php
/**
 * ReverseGeoCoderTest.php file.
 *
 * @author Trung Nguyen <t.nguyen@spacedealer.de>
 * @author Dirk Adler <adler@spacedealer.de>
 * @link http://www.spacedealer.de
 * @copyright Copyright &copy; 2014 spacedealer GmbH
 */

namespace spacedealer\tests\here\api;

use GuzzleHttp\Subscriber\History;
use GuzzleHttp\Subscriber\Mock;
use spacedealer\here\api\ReverseGeoCoder;

/**
 * Class ReverseGeoCoderTest
 */
class ReverseGeoCoderTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var string  Official demo credentials
     */
    public $appCode = 'AJKnXv84fjrb0KIHawS0Tg';
    public $appId = 'DemoAppId01082013GAL';
    public $apiVersion = '6.2';
    public $baseUrl = 'http://reverse.geocoder.cit.api.here.com/6.2/';


    /**
     * @dataProvider dataProvider
     * @internal \spacedealer\here\api\GeoCoderResponse $response
     */
    public function testCommands($command, $params, $responseFile = null)
    {
        $client = new ReverseGeoCoder($this->appId, $this->appCode, $this->apiVersion, true, $this->baseUrl);

        // load mock response data
        if (!$responseFile) {
            $responseFile = 'reversegeocoder-' . $command . '.txt';
        }
        $mockResponse = file_get_contents(__DIR__ . '/responses/' . $responseFile);

        // create mock response
        $mock = new Mock([
            $mockResponse,
        ]);

        // add the mock subscriber to the client
        $client->getHttpClient()->getEmitter()->attach($mock);

        // add history to track request & response handling
        $client->getHttpClient()->getEmitter()->attach($history = new History());

        // execute request
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
                'reversegeocode',
                [
                    'prox' => '48.2111588,9.0009298',
                    'mode' => 'retrieveAddresses'
                ]
            ]
        ];
    }
}
