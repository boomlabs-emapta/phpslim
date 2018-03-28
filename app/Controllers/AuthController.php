<?php
namespace App\Controllers;

use App\Controllers\BaseController;

class AuthController extends BaseController
{
    protected $view;

    public function index($request, $response, $args){
        echo 'asdfas';

        $this->data['h1'] = 'Register';
        
        dump($this->container);

        return $this->container->view->render($response, 'register.twig', $this->data);
        
        //return $response;   
    }


}