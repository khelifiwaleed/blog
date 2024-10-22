<?php

namespace App\Event;

use Symfony\Contracts\EventDispatcher\Event;


class MyCustomEvent extends Event
{

    public const NAME = 'kernel.custom_event';

    private $data;

    private $request;

    public function __construct($data, $request)
    {
        $this->data = $data;
        $this->request = $request;
    }

    public function getData()
    {
        return $this->data;
    }

    public function getRequest()
    {
        return $this->request;
    }
}