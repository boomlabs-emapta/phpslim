<?php
namespace App\Controllers;

use App\Controllers\BaseController;

class HomepageController extends BaseController
{
    protected $view;

    public function __construct(\Slim\Views\Twig $view) {
        $this->view = $view;

        //dump($view);
    }

    public function index($request, $response, $args){
        echo 'asdfas';

        $this->data['h1'] = 'Dashboard';
        
        dump($this->container);

        return $this->view->render($response, 'home.twig', $this->data);
        
        //return $response;   
    }


}