<?php

namespace app\core;

use app\models\DbModel;
use app\core\business_object\Location\location_bo;

class Controller
{

    
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