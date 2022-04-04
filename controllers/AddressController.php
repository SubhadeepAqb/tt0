<?php

namespace app\controllers;


use app\core\Application;
use app\core\Controller;
use app\core\Request;
use app\core\business_object\Address\address_bo;
use app\models\AddressModel;

class AddressController extends Controller
{

    public function formview(Request $request)
    {
        $body = $request->getBody();
       
        return $this->render('viewaddress');
    }

    public function displayrecords()
    {
        $address_model_obj = new AddressModel();
        $rows = $address_model_obj->getall();
        return json_encode($rows);
    }

    public function insert(Request $request)
    {
        $body =$request->getBody();
        $address_obj = new address_bo();
        $address_obj->tp_id = $body['tp_id'];
        $address_obj->loc_id = $body['loc_id'];
        $address_obj->type = $body['type'];
        $address_obj->add1 = $body['add1'];
        $address_obj->add2 = $body['add2'];
        $address_obj->pin = $body['pin'];
        $address_obj->city = $body['city'];
        $result= $address_obj->save();
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

    public function editAddress()
    {
        $id = $_GET['id'];
        $address_bo_obj = new address_bo();
        $address_bo_obj->id = $id;
        $row = $address_bo_obj->get();
        return json_encode($row);
    }

    public function updaterecord(Request $r)
    {
        $content =$r->getBody();
        $address_bo_obj = new address_bo();
        $address_bo_obj->id = $content['edit_id'];
        $address_bo_obj->tp_id = $content['tp_id_edit'];
        $address_bo_obj->loc_id = $content['loc_id_edit'];
        $address_bo_obj->type = $content['selectType_edit'];
        $address_bo_obj->add1 = $content['add1_edit'];
        $address_bo_obj->add2 = $content['add2_edit'];
        $address_bo_obj->pin = $content['pin_edit'];
        $address_bo_obj->city = $content['city_edit'];
        $result= $address_bo_obj->update();
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
        $address_bo_obj = new address_bo();
        $address_bo_obj->id = $content['del_id'];
        $address_bo_obj->is_delete = true;
        $result= $address_bo_obj->delete();
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