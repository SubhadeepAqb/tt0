<?php

namespace app\controllers;

use app\core\business_object\Product\Composition_bo;
use app\core\Controller;
use app\core\Request;


class CompositionController extends Controller
{
    public function insertCompositions(Request $request)
    {
        $body =$request->getBody();
        $composition_obj = new Composition_bo();
        $composition_obj->product_id = $body['product_id'];
        $composition_obj->composition_product_id = $body['content_id'];
        $composition_obj->quantity = $body['quantity'];
        $composition_obj->time = time();
        $lastId = $composition_obj->save();

        if($lastId ) {
            $response = [
                "success" => true,
                "msg" => "Inserted Successfully => ". $lastId
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
}