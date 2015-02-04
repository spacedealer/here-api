<?php
/**
 * PlacesResponse.php file.
 *
 * @author Trung Nguyen <t.nguyen@spacedealer.de>
 * @author Dirk Adler <adler@spacedealer.de>
 * @link http://www.spacedealer.de
 * @copyright Copyright &copy; 2014 spacedealer GmbH
 */

namespace spacedealer\here\api;

use GuzzleHttp\Ring\Future\CompletedFutureArray;

/**
 * Class PlacesResponse
 *
 * @package spacedealer\here\api
 */
class PlacesResponse extends CompletedFutureArray
{
    /**
     * @var bool
     */
    protected $ok = true;
    protected $status = null;
    protected $message = null;

    public function __construct(array $result)
    {

        // error responses hold status && message properties
        if (isset($result['status']) && isset($result['message'])) {
            $this->ok = false;

            $this->status = $result['status'];
            unset($result['status']);

            $this->message = $result['message'];
            unset($result['message']);
        }

        parent::__construct($result);
    }

    /**
     * @return int
     */
    public function getResultCount()
    {
        $result = $this->getResult();
        return $result ? count($result) : 0;
    }

    /**
     * Supported result types: search items, suggestions, lookup, categories or tiles
     *
     * @return null|array
     */
    public function getResult()
    {
        if (isset($this->result['results']['items'])) {
            return $this->result['results']['items'];
        } else if (isset($this->result['suggestions'])) {
            return $this->result['suggestions'];
        } else if (isset($this->result['href'])) {
            return $this->result['href'];
        } else if (isset($this->result['items'])) {
            return $this->result['items'];
        } else if (isset($this->result['tiles'])) {
            return $this->result['tiles'];
        }

        return null;
    }

    /**
     * Status message
     *
     * @return null|string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Status code of message.
     *
     * Supported status codes:
     * https://developer.here.com/rest-apis/documentation/places/topics/http-status-codes.html
     *
     * @return null|int
     */
    public function getStatus()
    {
        $this->status;
    }

    /**
     * @return bool
     */
    public function isOk()
    {
        return $this->ok;
    }
}
