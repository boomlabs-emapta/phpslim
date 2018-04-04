<?php
namespace App\Controllers;

use App\Controllers\BaseController;

class AuthController extends BaseController
{
    protected $view;

    public function index($request, $response, $args){
        echo 'asdfas';

        $this->data['h1'] = 'Register';

        return $this->container->view->render($response, 'auth/register.twig', $this->data);
        
        //return $response;   
    }

    public function signin($request, $response, $args){

        $this->data['h1'] = 'signin';

        return $this->container->view->render($response, 'auth/signin.twig', $this->data);
        
        //return $response;   
    }

    public function forgotpassword($request, $response, $args){

        $this->data['h1'] = 'Register';

        return $this->container->view->render($response, 'auth/forgotpassword.twig', $this->data);
        
        //return $response;   
    }

    public function registerform($request, $response, $args){

        $this->data['h1'] = 'Register';

        return $this->container->view->render($response, 'auth/registerform.twig', $this->data);
        
        //return $response;   
    }

    public function registerfan($request, $response, $args){

        $this->data['h1'] = 'Register';

        return $this->container->view->render($response, 'auth/registerfan.twig', $this->data);
        
        //return $response;   
    }

}