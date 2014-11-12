<?php

/**
 * ReverseGeoCoderTest.php file.
 *
 * @author Trung Nguyen <t.nguyen@spacedealer.de>
 * @author Dirk Adler <adler@spacedealer.de>
 * @link http://www.spacedealer.de
 * @copyright Copyright &copy; 2014 spacedealer GmbH
 */
class ReverseGeoCoderTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var string you may use your own registered username for testing - demo user is often over the daily usage limit :-0
     */
    public $appCode = 'AJKnXv84fjrb0KIHawS0Tg';
    public $appId = 'DemoAppId01082013GAL';
    public $apiVersion = '6.2';
    public $baseUrl = 'http://reverse.geocoder.cit.api.here.com/6.2/';


    /**
     * @dataProvider dataProvider
     */
    public function testCommands($command, $params)
    {
        $client = new spacedealer\here\api\ReverseGeoCoder($this->appId, $this->appCode, $this->apiVersion, true, $this->baseUrl);

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
                'reversegeocode',
                [
                    'prox' => '48.2111588,9.0009298',
                    'mode' => 'retrieveAddresses'
                ]
            ]
        ];
    }
}