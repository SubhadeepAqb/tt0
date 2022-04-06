<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Request;
use app\core\business_object\Users\User_bo;
use app\models\UserModel;

class UserController extends Controller
{

    public function renderViewUsers(Request $request)
    {
        $body = $request->getBody();
        //echo '<script>alert("Render View User Function")</script>';
        return $this->render('viewUsers');
        
    }



    public function loadPerticularUser(Request $request)
    {
        //$body = $request->getBody();
        $user_obj = new User_bo();
        $user_obj->id = $_GET['id'];
        return json_encode($user_obj->get());
    }


    public function deleteUser(Request $request)
    {
        $body =$request->getBody();
        $user_obj = new User_bo();
        $user_obj->id = $body['id'];
        // var_dump($user_obj->id);
        // die;
        if($user_obj->delete() ) {
            $response = [
                "success" => true,
                "msg" => "Deleted Successfully "
            ];
        }
        else
        {
            $response = [
                "success" => false,
                "msg" => "Cannot be deleted"
            ];
        }
        return  json_encode($response);
    }


    public function insert(Request $request)
    {
        $body =$request->getBody();

        $user_obj = new User_bo();
        $user_obj->name = $body['name'];
        $user_obj->email = $body['email'];
        $user_obj->password = $body['password'];
        $user_obj->user_type = $body['user_type'];
        $user_obj->timestamp = time();
        $lastInsertId = $user_obj->save();
        if($lastInsertId ) {
            $response = [
                "success" => true,
                "msg" => "Inserted Successfully",
                "id"  => $lastInsertId
            ];
        }
        else
        {
            $response = [
                "success" => false,
                "msg" => "Cannot be inserted"
            ];
        }

        return json_encode($response);
    }


    public function viewUsers()
    {
        $userModel = new UserModel();
        $result = $userModel->getAll();
        return json_encode($result);
        // return $this->render('viewUsers', json_encode($result));
    }




    public function updateUser(Request $request)
    {
        $body =$request->getBody();
        $user_obj = new User_bo();
        $user_obj->id = $body['edit_id'];
        $user_obj->name = $body['edit_name'];
        $user_obj->email = $body['edit_email'];
        $user_obj->password = $body['edit_password'];
        $user_obj->user_type = $body['edit_user_type'];
        //$user_obj->timestamp = time();
        $user_obj->status = $body['edit_status'];

        if($user_obj->update()) {
            $response = [
                "success" => true,
                "msg" => "updated Successfully"
            ];
        }
        else
        {
            $response = [
                "success" => false,
                "msg" => "Cannot be updated"
            ];
        }
        return json_encode($response);
    }


}