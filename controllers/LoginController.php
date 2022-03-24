<?php

namespace app\controllers;


use app\core\Application;
use app\core\Controller;
use app\core\Request;
use app\core\business_object\Login\login_bo;

class LoginController extends Controller
{


    public function formview(Request $request)
    {
        $body = $request->getBody();
       
        return $this->render('login');
    }
    
    // public function displayrecords()
    // {
    //     $sql = "SELECT * FROM locations ORDER BY id asc";
    //     $this->rows = $this->dbmodel->querySelect($sql);
    //     //print "Inserted Successfully";
    //     return $this->render('showlocation',$this->rows);
    // }

    public function fetch(Request $request)
    {
        $body =$request->getBody();
        $login_obj = new login_bo();
        $login_obj->email = $body['email'];
        $login_obj->password = $body['password'];
        $response= $login_obj->get();
        //header('Content-Type: application/json; charset=utf-8');
        echo json_encode($response);
    }
}

?>