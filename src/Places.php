<?php
/**
 * Places.php file.
 *
 * @author Trung Nguyen <t.nguyen@spacedealer.de>
 * @author Dirk Adler <adler@spacedealer.de>
 * @link http://www.spacedealer.de
 * @copyright Copyright &copy; 2014 spacedealer GmbH
 */

namespace spacedealer\here\api;

use GuzzleHttp\Client;
use GuzzleHttp\Command\CommandInterface;
use GuzzleHttp\Command\Guzzle\Description;
use GuzzleHttp\Command\Guzzle\GuzzleClient;

/**
 * Class Places
 *
 * @method PlacesResponse search() search(array $params)
 * @method PlacesResponse suggest() suggest(array $params)
 * @method PlacesResponse explore() explore(array $params)
 * @method PlacesResponse around() around(array $params)
 * @method PlacesResponse here() here(array $params)
 * @method PlacesResponse lookup() lookup(array $params)
 * @method PlacesResponse categories() categories(array $params)
 * @method PlacesResponse tiles() tiles(array $params)
 * @package spacedealer\here\api
 */
class Places extends GuzzleClient
{

    /**
     * @param string $appId
     * @param string $appCode
     * @param string $apiVersion
     * @param bool $demo Whether to use demo or production endpoints
     * @param string|null $baseUrl Overwrites default demo or production base url
     */
    public function __construct($appId, $appCode, $apiVersion = "v1", $demo = false, $baseUrl = null)
    {
        $client = new Client();

        // load description config file
        $filename = __DIR__ . '/resources/places-' . $apiVersion . '.php';

        if (!file_exists($filename)) {
            throw new \RuntimeException("API version " . $apiVersion . " not supported.");
        }

        $descriptionConfig = require($filename);

        // set demo base url
        if ($demo) {
            $descriptionConfig['baseUrl'] = $descriptionConfig['baseDemoUrl'];
        }

        // overwrite default base url
        if ($baseUrl) {
            $descriptionConfig['baseUrl'] = $baseUrl;
        }

        // create description
        $description = new Description($descriptionConfig);

        // init client and set default values
        parent::__construct($client, $description, [
            'defaults' => [
                'app_id' => $appId,
                'app_code' => $appCode,
            ]
        ]);
    }

    /**
     * @param CommandInterface $command
     * @return PlacesResponse
     */
    public function execute(CommandInterface $command)
    {
        $result = parent::execute($command);
        return new PlacesResponse($result ?: []);
    }
}
