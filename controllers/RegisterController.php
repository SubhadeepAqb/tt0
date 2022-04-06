<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Request;
use app\core\business_object\Register\register_bo;
use app\models\registerModel;

class RegisterController extends Controller
{

    

    public function addUser(Request $request)
    {
        $body = $request->getBody();
        return $this->render('register');
    }

    public function insert(Request $request)
    {
        $body =$request->getBody();

        $register_obj = new register_bo();
        $register_obj->reg_type = $body['reg_type'];
        $register_obj->reg_fname = $body['reg_fname'];
        $register_obj->reg_lname = $body['reg_lname'];
        $register_obj->reg_email = $body['reg_email'];
        $register_obj->reg_pass = $body['reg_pass'];
        $register_obj->reg_conpass = $body['reg_conpass'];
        $register_obj->reg_time = time();

        //if($product_obj->get()) {
        return  json_encode($register_obj->save());
        
          
        
        //}
    }

    public function formview(Request $request)
    {
        $body = $request->getBody();
        return $this->render('register');
    }





    public function viewUsers()
    {
        $registerModel = new registerModel();
        $result = $registerModel->getAll();
        return json_encode($result);
        //return $this->render('viewProducts', json_encode($result));

    }

}