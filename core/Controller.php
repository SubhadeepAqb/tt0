<?php

namespace app\core;

use app\models\DbModel;
use app\core\business_object\Location\location_bo;

class Controller
{

    ////    Object variable of DB_model Class ///
    //protected $dbmodel;
    //public $bo;

    /////    Creating an instance of DBModel Class  //////

    public function __construct(){
        // echo phpinfo();
        // die();

        //$this->dbmodel = new DbModel();
        //



    }
    public string $layout = 'main';

    public function setLayout($layout)
    {
        $this->layout = $layout;
    }
    public function render($view, $params = [])
    {
        return Application::$app->router->renderView($view, $params);
    }

}