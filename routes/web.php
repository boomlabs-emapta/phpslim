<?php

use Slim\Http\Request;
use Slim\Http\Response;
use App\Middleware\AuthMiddleware;

// Routes


$app->group('', function() {

    $this->get('/auth/register','AuthController:index');

    $this->get('/','HomepageController:index')->setName('homepage');

    // $this->get('/', function ($request, $response, $args) {
    //     // Route for /billing


	// 	return $this->view->render($response, 'home.twig',[
    //         'user' => 'hello'
    //     ]); 
        
    // });

    $this->get('/invoice/{id:[0-9]+}', function ($request, $response, $args) {
        // Route for /invoice/{id:[0-9]+}
    });

})->add( new AuthMiddleware($container['router']) );