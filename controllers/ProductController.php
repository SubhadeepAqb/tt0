<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Request;
use app\core\business_object\Product\Product_bo;
use app\models\ProductModel;

class ProductController extends Controller
{

    public function renderViewProducts(Request $request)
    {
        $body = $request->getBody();
        return $this->render('viewProducts');
    }



    public function loadParticularProduct(Request $request)
    {
        //$body = $request->getBody();
        $product_obj = new Product_bo();
        $product_obj->id = $_GET['id'];
        return json_encode($product_obj->get());
    }


    public function deleteProduct(Request $request)
    {
        $body =$request->getBody();
        $product_obj = new Product_bo();
        $product_obj->id = $body['id'];
        if($product_obj->delete() ) {
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

        $product_obj = new Product_bo();
        $product_obj->name = $body['name'];
        $product_obj->description = $body['description'];
        $product_obj->quantity = $body['quantity'];
        $product_obj->type = $body['type'];
        $product_obj->time = time();
        $lastInsertId = $product_obj->save();
        if($lastInsertId ) {
            $response = [
                "success" => true,
                "msg" => "Inserted Successfully => ". $lastInsertId
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


    public function viewProducts()
    {
        $productModel = new ProductModel();
        $result = $productModel->getAll();
        return json_encode($result);
        //return $this->render('viewProducts', json_encode($result));
    }




    public function updateProduct(Request $request)
    {
        $body =$request->getBody();
        $product_obj = new Product_bo();
        $product_obj->id = $body['product_id'];
        $product_obj->name = $body['name'];
        $product_obj->description = $body['description'];
        $product_obj->quantity = $body['quantity'];
        $product_obj->type = $body['type'];
        $product_obj->time = time();

        if($product_obj->update()) {
            $response = [
                "success" => true,
                "msg" => "updated Successfully  "
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