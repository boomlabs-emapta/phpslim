<?php

namespace App\Controllers;

class BaseController
{
    protected $container;

    public function __construct($container)
    {
        
        dump($container);
        echo"vvvvv";

        $this->container = $container;

    }

}

