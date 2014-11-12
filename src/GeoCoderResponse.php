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


class GeoCoderResponse extends \GuzzleHttp\Command\Model
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
        if (isset($this->data['GeoCoderResponse']['MetaInfo'])) {
            return $this->data['GeoCoderResponse']['MetaInfo'];
        }

        return null;
    }

    /**
     * @return null|array
     */
    public function getResult()
    {
        if (isset($this->data['GeoCoderResponse']['View'][0]['Result'])) {
            return $this->data['GeoCoderResponse']['View'][0]['Result'];
        }

        return null;
    }

    public function getException()
    {

        if (isset($this->data['type']) && strpos($this->data['type'], 'Error')) {
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