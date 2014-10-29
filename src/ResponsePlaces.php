<?php
/**
 * ResponsePlaces.php file.
 *
 * @author Trung Nguyen <t.nguyen@spacedealer.de>
 * @link http://www.spacedealer.de
 * @copyright Copyright &copy; 2014 spacedealer GmbH
 */

namespace spacedealer\here\api;


class ResponsePlaces extends \GuzzleHttp\Command\Model
{
    /**
     * @var bool
     */
    protected $ok = true;

    /**
     * @return null|array
     */
    public function getPlacesResult()
    {
        if (isset($this->data['items'])) {
            return $this->data['items'];
        }
        return null;
    }

    public function getResultCount($array=null)
    {
        return count($array);
    }
    /**
     * @return null|array
     */
    public function getResult()
    {
        if (isset($this->data['Response']['View'][0]['Result'])) {
            return $this->data['Response']['View'][0]['Result'];
        }

        return null;
    }

    public function getException()
    {

        if (isset($this->data['status']) && in_array($this->data['status'], array(400,401))) {
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