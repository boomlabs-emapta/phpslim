<?php
namespace App\Controllers;

use App\Controllers\BaseController;

class HomepageController extends BaseController
{
    protected $view;

    public function index($request, $response, $args){
        echo 'asdfas';

        $this->data['h1'] = 'Dashboard';

        return $this->container->view->render($response, 'home.twig', $this->data);
        
        //return $response;   
    }


}