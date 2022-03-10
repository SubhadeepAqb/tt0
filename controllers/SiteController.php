<?php

namespace app\controllers;


use app\core\Application;
use app\core\Controller;
use app\core\Request;

class SiteController extends Controller
{
    public function Contact()
    {
        return $this->render('contact');
    }

    public function handleContact(Request $request)
    {
        $body = $request->getBody();
        return 'Handling submitted data';
    }

    public function home()
    {
        $params = [
            'name' => "Subhadeep"
        ];
        return $this->render('home', $params);
    }
}