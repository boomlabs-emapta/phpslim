<?php

namespace App\Middleware;

use Interop\Container\ContainerInterface;

class AuthMiddleware{

    protected $router;

    public function __construct($router){
        $this->router = $router;
    }

    public function __invoke($request, $response, $next){
        //$response->getBody()->write('BEFORE');
        $response = $next($request, $response);
        //$response->getBody()->write('AFTER');

        return $response;
    }
}