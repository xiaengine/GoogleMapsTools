<?php
namespace GoogleMapsTools\Api;

use GoogleMapsTools\Api\RemoteCall;
use GoogleMapsTools\Point;

class Geocode extends RemoteCall
{
    protected $address;
    private $params = array();

    public function __construct($address,$params=array())
    {
        $this->params = $params;
        $this->params['address'] = $address;
    }

    public function execute()
    {
        $url = 'https://maps.googleapis.com/maps/api/geocode/';
        parent::__execute($url, $this->params);
    }

    public function getFirstPoint()
    {
        if (is_null($this->result)) {
            $this->execute();
        }

        $location = $this->result['results'][0]['geometry']['location'];
        return new Point($location['lat'], $location['lng']);
    }
}
