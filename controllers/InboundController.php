<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Request;
use app\models\RegisterModel;


class InboundController extends Controller
{
    public  $productname;


    public  $productserial;


    public  $time;

    public function inbound(Request $request)
    {

        $registerModel = new RegisterModel();

        if($request->isPost()){

            $registerModel->loadData($request->getBody());

            if ($registerModel->validate() && $registerModel->inbound()){
                return 'Success';
            }

        }

        $this->setLayout('main');

        return $this->render('inbound', [
            'model' => $registerModel
        ]);
    }

    public function save_inbound(Request $request)
    {


//      $registerModel = new RegisterModel();

        $body = $request->getBody();
        //print_r($body);

        $this->productname = $body['product_name'];
        $this->productserial = $body['product_serial'];
        $this->time = time();
        //print $this->time;
        print $this->productname;

        if(isset($_POST['product_name'] ) && isset($_POST['product_serial'])){

                $this->dbmodel->queryExecute("INSERT into inbound_shipments (transaction_id,product_name,serial_number,timestamp,is_delete) VALUES (1, '$this->productname','$this->productserial','$this->time',false) ");
            }
        return json_encode($body);

    }


    public function viewInbound(Request $request)
    {
        $sql = "SELECT * FROM inbound_shipments";
        $body = $this->dbmodel->querySelect($sql);
        return $this->render('viewInbound',$body);
    }
}