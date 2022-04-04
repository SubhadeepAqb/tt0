<?php

namespace app\controllers;


use app\core\Application;
use app\core\Controller;
use app\core\Request;
use app\core\business_object\StorageShelf\storage_shelf_bo;
use app\models\StorageShelfModel;

class StorageShelfController extends Controller
{

    public function formview(Request $request)
    {
        $body = $request->getBody();
       
        return $this->render('viewshelf');
    }

    public function displayrecords()
    {
        $shelf_model_obj = new StorageShelfModel();
        $rows = $shelf_model_obj->getall();
        return json_encode($rows);
    }

    public function insert(Request $request)
    {
        $body =$request->getBody();
        $shelf_obj = new storage_shelf_bo();
        $shelf_obj->sa_id = $body['sa_id'];
        $shelf_obj->shelf_name = $body['shelf_name'];
        $shelf_obj->is_delete = 'false';
        $result= $shelf_obj->save();
        if($result)
        {
                $response = [
                    "success" => true,
                    "msg" => "Inserted Successfully",
                    "id" => $result
                ];
            }
            else
            {
                $response = [
                    "success" => false,
                    "msg" => "Cannot be inserted"
                ];
            }
        //header('Content-Type: application/json; charset=utf-8');
        return json_encode($response);
    }

    public function editShelfs()
    {
        $id = $_GET['id'];
        $shelf_obj = new storage_shelf_bo();
        $shelf_obj->id = $id;
        $row = $shelf_obj->get();
        return json_encode($row);
    }

    public function updaterecord(Request $r)
    {
        $content =$r->getBody();
        $shelf_obj = new storage_shelf_bo();
        $shelf_obj->id = $content['edit_id'];
        $shelf_obj->sa_id = $content['edit_sa_id'];
        $shelf_obj->shelf_name = $content['edit_shelf_name'];
        $result= $shelf_obj->update();
        if($result)
        {
            //print "Inserted Successfully";
                $response = [
                    "success" => true,
                    "msg" => "Updated Successfully"
                ];
        }
        else
        {
            $response = [
                "success" => false,
                "msg" => "Cannot be updated"
            ];
        }
        echo json_encode($response);
    }



    public function deleterecord(Request $r)
    {
        $content =$r->getBody();
        $shelf_obj = new storage_shelf_bo();
        $shelf_obj->id = $content['del_id'];
        $shelf_obj->is_delete = true;
        $result= $shelf_obj->delete();
        if($result)
        {
            $response = [
                "success" => true,
                "msg" => "Deleted Successfully",
            ];
        }
        else{
            $response = [
                "success" => false,
                "msg" => "Not deleted"
            ];
        }
        echo json_encode($response);
    }
   
}

?>