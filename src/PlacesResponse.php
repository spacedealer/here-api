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

/**
 * Class PlacesResponse
 *
 * @package spacedealer\here\api
 */
class PlacesResponse extends \GuzzleHttp\Command\Model
{
    /**
     * @var bool
     */
    protected $ok = true;
    protected $status = null;
    protected $message = null;

    public function __construct(array $data)
    {

        // error responses hold status && message properties
        if (isset($data['status']) && isset($data['message'])) {
            $this->ok = false;

            $this->status = $data['status'];
            unset($data['status']);

            $this->message = $data['message'];
            unset($data['message']);
        }

        parent::__construct($data);
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
        if (isset($this->data['results']['items'])) {
            return $this->data['results']['items'];
        } else if (isset($this->data['suggestions'])) {
            return $this->data['suggestions'];
        } else if (isset($this->data['href'])) {
            return $this->data['href'];
        } else if (isset($this->data['items'])) {
            return $this->data['items'];
        } else if (isset($this->data['tiles'])) {
            return $this->data['tiles'];
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
