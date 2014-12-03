<?php
/**
 * GeoCoderTest.php file.
 *
 * @author Trung Nguyen <t.nguyen@spacedealer.de>
 * @author Dirk Adler <adler@spacedealer.de>
 * @link http://www.spacedealer.de
 * @copyright Copyright &copy; 2014 spacedealer GmbH
 */

namespace spacedealer\tests\here\api;

use spacedealer\here\api\GeoCoder;

/**
 * Class GeoCoderTest
 */
class GeoCoderTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var string you may use your own registered username for testing - demo user is often over the daily usage limit :-0
     */
    public $appCode = 'AJKnXv84fjrb0KIHawS0Tg';
    public $appId = 'DemoAppId01082013GAL';
    public $apiVersion = '6.2';
    public $baseUrl = 'http://geocoder.cit.api.here.com/6.2/';


    /**
     * @dataProvider dataProvider
     */
    public function testCommands($command, $params)
    {
        $client = new GeoCoder($this->appId, $this->appCode, $this->apiVersion, true, $this->baseUrl);

        /** @var \spacedealer\here\api\GeoCoderResponse $response */
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
                'geocode',
                [
                    'city' => 'Berlin',
                    'postalCode' => '10997',
                    'street' => 'Schlessische Str.',
                    'housenumber' => '28',
                ]
            ]
        ];
    }
}
