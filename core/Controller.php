<?php

namespace app\core;

use app\models\DbModel;
use app\core\InboundController;
use app\core\business_object\Location\location_bo;

class Controller
{

    
    public string $layout;

    public function __construct()
    {
        if(isset($_COOKIE['loginTrue']) && $_COOKIE['loginTrue']!='undefined' && $_COOKIE['loginTrue']!=null 
             && $_COOKIE['loginTrue']>=1647450336 ){

            $this->layout='main';
        }

        else{
            $this->layout='auth';
        }
    }



    public function setLayout($layout)
    {
        $this->layout = $layout;
    }
    public function render($view, $params = [])
    {
        return Application::$app->router->renderView($view, $params);
    }

}
