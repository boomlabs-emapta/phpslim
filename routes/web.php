<?php

use Slim\Http\Request;
use Slim\Http\Response;
use App\Middleware\AuthMiddleware;

// Routes

$app->group('/auth', function() {

    $this->get('/register','AuthController:index')->setName('auth.reg');
    $this->get('/registerform','AuthController:registerform')->setName('auth.regf');
    $this->get('/registerfan','AuthController:registerfan')->setName('auth.regfan');
    $this->get('/signin','AuthController:signin')->setName('auth.signin');
    $this->get('/forgotpassword','AuthController:forgotpassword')->setName('auth.forgotpw');

});


$app->group('', function() {

    $this->get('/','HomepageController:index')->setName('homepage');

    
    $this->group('/music', function() {
        $this->get('/radios','MusicController:index')->setName('radios');
        $this->get('/radio','MusicController:radio')->setName('radio');
    });

    
    $this->group('/event', function() {
        $this->get('/latest','EventController:latest')->setName('latest');
        $this->get('/channels','EventController:channels')->setName('channels');
        $this->get('/channel','EventController:channel')->setName('channel');
        $this->get('/categories','EventController:categories')->setName('categories');
        $this->get('/events','EventController:events')->setName('events');
        $this->get('/video','EventController:video')->setName('video');
        $this->get('/ondemand','EventController:ondemand')->setName('ondemand');
    });

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