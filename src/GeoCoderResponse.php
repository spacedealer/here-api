<?php
/**
 * GeoCoderResponse.php file.
 *
 * @author Trung Nguyen <t.nguyen@spacedealer.de>
 * @author Dirk Adler <adler@spacedealer.de>
 * @link http://www.spacedealer.de
 * @copyright Copyright &copy; 2014 spacedealer GmbH
 */

namespace spacedealer\here\api;

use GuzzleHttp\Ring\Future\CompletedFutureArray;

/**
 * Class GeoCoderResponse
 *
 * @package spacedealer\here\api
 */
class GeoCoderResponse extends CompletedFutureArray
{
    /**
     * @var bool
     */
    protected $ok = true;

    /**
     * @return null|array
     */
    public function getMetaInfo()
    {
        if (isset($this->result['Response']['MetaInfo'])) {
            return $this->result['Response']['MetaInfo'];
        }

        return null;
    }

    /**
     * @return null|array
     */
    public function getResult()
    {
        if (isset($this->result['Response']['View'][0]['Result'])) {
            return $this->result['Response']['View'][0]['Result'];
        }

        return null;
    }

    public function getException()
    {
        if (isset($this->result['type']) && strpos($this->result['type'], 'Error')) {
            return true;
        }
        return null;
    }

    /**
     * @return bool
     */
    public function isOk()
    {
        return $this->ok;
    }
}
