<?php

namespace app\controllers;

use app\core\Application;
use app\core\Request;
use app\core\Controller;
use app\core\business_object\Transactions_line_item\transactions_line_item_bo;
use app\models\TransactionLineItemModel;

class TransactionLineItemController extends Controller
{










    public function tliview(Request $request)
    {
        $body = $request->getBody();

        return $this->render('viewTransactions');
    }










    public function displaytransactionlineitem()
    {
        $transactionlineitemModel = new TransactionLineItemModel();
        $result = $transactionlineitemModel->getAll();
        return json_encode($result);
    }




    public function inserttransactionlineitem(Request $request)
    {
        $body = $request->getBody();
        //die('abcd');
        $transactionlineitem = new transactions_line_item_bo();

        
        $transactionlineitem->TransactionID      = $body['transactionid'];
        $transactionlineitem->ProductId          = $body['productid'];
        $transactionlineitem->OrderQuantity      = $body['orderQuantity'];
        // $transactionlineitem->OrderQuantityLeft  = $body['orderQuantityLeft'];
        //$transactions_obj->is_delete        = false;
        $transactionlineitem->TimeStamp          = time();
  
        $last_id = $transactionlineitem->save();
        
        if($last_id)
        {
            $response = [
                "success" => true,
                "msg" => "Inserted Successfully =>",
                "id"  => $last_id
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