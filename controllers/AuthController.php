<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Request;
use app\models\RegisterModel;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if($request->isPost()){

            return 'Handle Submitted Data';
        }

        $this->setLayout('auth');
        return $this->render('login');
    }

    public function register(Request $request)
    {
//        phpinfo();
//        die();
        $registerModel = new RegisterModel();

        if($request->isPost()){

//
//            print '<pre>';
//            var_dump($request->getBody());
//            exit();
            $registerModel->loadData($request->getBody());


//            print '<pre>';
//            var_dump($registerModel);
//            exit;

            if ($registerModel->validate() && $registerModel->register()){
                return 'Success';
            }

//            print '<pre>';
//            var_dump($registerModel->errors);
//            exit;

//            return $this->render('register', [
//                'model' => $registerModel
//            ]);
        }

        $this->setLayout('auth');

        return $this->render('register', [
            'model' => $registerModel
        ]);
    }
}