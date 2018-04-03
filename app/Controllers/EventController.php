<?php
namespace App\Controllers;

use App\Controllers\BaseController;

class EventController extends BaseController
{
    protected $view;

    public function index($request, $response, $args){
        echo 'asdfas';

        $this->data['h1'] = 'Register';
        
        dump($this->container);

        return $this->container->view->render($response, '/event/latest.twig', $this->data);
        
        //return $response;   
    }

    public function latest($request, $response, $args){
        echo 'asdfas';

        $this->data['h1'] = 'Register';
        
        dump($this->container);

        return $this->container->view->render($response, '/event/latest.twig', $this->data);
        
        //return $response;   
    }

    public function channels($request, $response, $args){
        echo 'asdfas';

        $this->data['h1'] = 'Register';
        
        dump($this->container);

        return $this->container->view->render($response, '/event/channels.twig', $this->data);
        
        //return $response;   
    }

    public function channel($request, $response, $args){
        echo 'asdfas';

        $this->data['h1'] = 'Register';
        
        dump($this->container);

        return $this->container->view->render($response, '/event/channel.twig', $this->data);
        
        //return $response;   
    }

    public function categories($request, $response, $args){
        echo 'asdfas';

        $this->data['h1'] = 'Register';
        
        dump($this->container);

        return $this->container->view->render($response, '/event/categories.twig', $this->data);
        
        //return $response;   
    }

    public function events($request, $response, $args){
        echo 'asdfas';

        $this->data['h1'] = 'Register';
        
        dump($this->container);

        return $this->container->view->render($response, '/event/events.twig', $this->data);
        
        //return $response;   
    }

    public function video($request, $response, $args){
        echo 'asdfas';

        $this->data['h1'] = 'Register';
        
        dump($this->container);

        return $this->container->view->render($response, '/event/video.twig', $this->data);
        
        //return $response;   
    }

    public function ondemand($request, $response, $args){
        echo 'asdfas';

        $this->data['h1'] = 'Register';
        
        dump($this->container);

        return $this->container->view->render($response, '/event/ondemand.twig', $this->data);
        
        //return $response;   
    }
}