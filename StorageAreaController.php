<?php

namespace app\controllers;


use app\core\Application;
use app\core\Controller;
use app\core\Request;
use app\core\business_object\StorageArea\storage_area_bo;
use app\models\StorageAreaModel;

class StorageAreaController extends Controller
{
    public function formview(Request $request)
    {
        $body = $request->getBody();
       
        return $this->render('viewarea');
    }

    public function displayrecords()
    {
        $area_model_obj = new StorageAreaModel();
        $rows = $area_model_obj->getall();
        return json_encode($rows);
    }

    public function insert(Request $request)
    {
        $body =$request->getBody();
        $area_obj = new storage_area_bo();
        $area_obj->loc_id = $body['loc_id'];
        $area_obj->storage_area_name = $body['storage_area_name'];
        $area_obj->is_delete = 'false';
        $result= $area_obj->save();
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

    public function editAreas()
    {
        $id = $_GET['id'];
        $area_obj = new storage_area_bo();
        $area_obj->id = $id;
        $row = $area_obj->get();
        return json_encode($row);
    }

    public function updaterecord(Request $r)
    {
        $content =$r->getBody();
        $area_obj = new storage_area_bo();
        $area_obj->id = $content['edit_id'];
        $area_obj->loc_id = $content['edit_loc_id'];
        $area_obj->storage_area_name = $content['edit_storage_area_name'];
        $result= $area_obj->update();
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
        $area_obj = new storage_area_bo();
        $area_obj->id = $content['del_id'];
        $area_obj->is_delete = true;
        $result= $area_obj->delete();
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