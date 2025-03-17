<?php
namespace GoogleMapsTools\Api;

class ApiException extends \Exception
{
    protected $status;
    protected $message;

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setMessage($msg)
    {
        $this->message = $msg;
    }

    public function getErrorMessage()
    {
        return $this->message;
    }
}
