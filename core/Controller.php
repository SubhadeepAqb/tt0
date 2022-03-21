<?php

namespace app\core;

use app\models\DbModel;

class Controller
{

    ////    Object variable of DB_model Class ///
    protected $dbmodel;

    /////    Creating an instance of DBModel Class  //////

    public function __construct(){
        // echo phpinfo();
        // die();

        $this->dbmodel = new DbModel();

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