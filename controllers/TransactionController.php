<?php

namespace app\controllers;

use app\core\Application;
use app\core\Request;
use app\core\Controller;
use app\core\business_object\Transactions\transactions_bo;
use app\models\TransactionsModel;

class TransactionController extends Controller
{
    public function formview(Request $request)
    {
        $body = $request->getBody();

        return $this->render('viewTransactions');
    }




    public function displayTransaction()
    {
        $transactionsModel = new TransactionsModel();
        $result = $transactionsModel->getAll();
        return json_encode($result);
        //return $this->render('viewtransactions', json_encode($result));
    }





    public function tradingpartnerDisplay()
    {
        $tradingpartnerModel = new TradingPartnerModel();
        $res = $tradingpartnerModel->getAll();
        return json_encode($res);
    }




    public function deliveryDisplay()
    {
        $addressesModel = new AddressesModel();
        $res = $addressesModel->getAll();
        return json_encode($res);
    }



    public function inserttransaction(Request $request)
    {
        $body = $request->getBody();
        //die('abcd');
        $transactions_obj = new transactions_bo();

        $transactions_obj->order            = $body['order'];
        $transactions_obj->TradingPartnerID = $body['TradingPartnerID'];
        $transactions_obj->DeliveryStatus   = $body['DeliveryStatus'];
        $transactions_obj->Deliveryaddress  = $body['Deliveryaddress'];
        //$transactions_obj->is_delete        = false;
        $transactions_obj->TimeStamp        = time();
  
        $last_id = $transactions_obj->save();
        
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




    public function editTransaction()
    {
        $id = $_GET['id'];
        $transactions_obj = new transactions_bo();
        $transactions_obj->id = $id;
        $result = $transactions_obj->get();
        return json_encode($result);
    }



    public function updateTransaction(Request $request)
    {       
       
           //die('abcd');
       // $id = $_GET['id'];
        $body = $request->getBody();
        // var_dump($body);
        // die();
        //die('abcd');
        $transactions_obj = new transactions_bo();
        $transactions_obj->id               = $body['id'];
        $transactions_obj->order            = $body['orders'];
        $transactions_obj->TradingPartnerID = $body['TPID'];
        $transactions_obj->DeliveryStatus   = $body['DS'];
        $transactions_obj->Deliveryaddress  = $body['Daddress'];
        //$transactions_obj->is_delete        = false;
        //die('abcdefgh');
        $transactions_obj->TimeStamp        = time();
        

        if($transactions_obj->update())
        {
         $response = [
            "success" => true,
            "msg" => "Updated Successfully =>" 
        ];
        //return $response;
        }
        else
        {
        $response = [
            "success" => false,
            "msg" => "Cannot be updated"
        ];
        //return $response;
        }
        return json_encode($response);
    }









    public function deleteTransaction(Request $request)
    {
        $body = $request->getBody();
        //var_dump($body);
        //die();
        $transactions_obj = new transactions_bo();
        $transactions_obj->id = $body['del_id'];
        //var_dump($body);
        //die();
        $result = $transactions_obj->delete();
        if($result)
        {
            $response = [
                "success" => true,
                "msg"     => "Deleted Successfully",
            ];
        }
        else
        {
            $response = [
                "success" => false,
                "msg"     => "Cannot be deleted",
            ];
        }
        echo json_encode($response);
    }



    
}
?>
