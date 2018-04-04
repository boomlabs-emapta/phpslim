<?php
namespace App\Controllers;

use App\Controllers\BaseController;

class MusicController extends BaseController
{
    protected $view;

    public function index($request, $response, $args){

        $this->data['h1'] = 'Register';

        return $this->container->view->render($response, 'music/radios.twig', $this->data);
        
        //return $response;   
    }

    public function radio($request, $response, $args){

        $this->data['h1'] = 'Register';

        return $this->container->view->render($response, 'music/radio.twig', $this->data);
        
        //return $response;   
    }
}