<?php

namespace app\controllers;


use app\core\Application;
use app\core\Controller;
use app\core\Request;
use app\core\business_object\Location\location_bo;
use app\models\LocationModel;

class LocationController extends Controller
{


    public function formview(Request $request)
    {
        $body = $request->getBody();
       
        return $this->render('viewlocation');
    }
    





    public function displayrecords()
    {
        $location_model_obj = new LocationModel();
        $rows = $location_model_obj->getall();
        return json_encode($rows);
    }




    public function singledisplayrecord()
    {
        $id= $_GET['id'];
        $location_model_obj = new LocationModel();
        $row = $location_model_obj->getsingle($id);
        return json_encode($row);
    }




    public function insert(Request $request)
    {
        $body =$request->getBody();
        $location_obj = new location_bo();
        $location_obj->name = $body['lname'];
        $location_obj->is_delete = 'false';
        $last_id = $location_obj->save();
        if($last_id)
        {
                $response = [
                    "success" => true,
                    "msg" => "Inserted Successfully",
                    "id" => $last_id
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






    public function editlocations()
    {
        $id = $_GET['id'];
        $location_obj = new location_bo();
        $location_obj->id = $id;
        $row = $location_obj->get();
        return json_encode($row);
    }






    public function updaterecord(Request $r)
    {
        $content =$r->getBody();
        $location_obj = new location_bo();
        $location_obj->name = $content['new_lname'];
        $location_obj->id = $content['id'];
        $result= $location_obj->update();
        if($result)
        {
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
        return json_encode($response);

    }





    
    public function deleterecord(Request $request)
    {
        $body = $request->getBody();
        $location_obj = new location_bo();
        $location_obj->id = $body['id'];
        $result= $location_obj->delete();
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
        return json_encode($response);

    }
}

?>