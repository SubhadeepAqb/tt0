<?php

namespace app\controllers;


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
        return $this->render('home');
    }
}
