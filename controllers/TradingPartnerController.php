<?php

namespace app\controllers;


use app\core\Application;
use app\core\Controller;
use app\core\Request;
use app\core\business_object\TradingPartner\trading_partner_bo;
use app\models\TradingPartnerModel;

class TradingPartnerController extends Controller
{
   



    public function formview(Request $request)
    {
        $body = $request->getBody();
       
        return $this->render('viewtradingpartners');
    }

    public function addTradingpartner(Request $request)
    {
        $body = $request->getBody();

        return $this->render('tradingpartner');
    }

//    INSERT VALUES //
    
    public function insertTradingpartner(Request $request)
    {
        $body = $request->getBody();

        $tradingpartner_obj  = new trading_partner_bo();
        $tradingpartner_obj->tp_name   = $body['tp_name'];
        $tradingpartner_obj->bu_name   = $body['bu_name'];
        $tradingpartner_obj->mobile    = $body['mobile'];
        $tradingpartner_obj->email     = $body['email'];
        $tradingpartner_obj->is_delete = 'false';
        $tradingpartner_obj->ts        = time();

        $lastInsertId = $tradingpartner_obj->save();
        if($lastInsertId)
            {
                $response = [
                    "msg" => "Inserted",
                    "success" => true,
                    "id" => $lastInsertId


                ];
            }
        else
            {
                $response=[
                    "success"=>false,
                    "msg"=> "Not inserted"

                ];
            }
        return json_encode($response);
    }

//    END INSERT VALUES//


    public function viewTradingpartners()
    {
        $TpModel= new TradingPartnerModel();
        $result = $TpModel->getALL();
        return json_encode($result);
    }


//   start Fetch values

    public function editTradingpartners()
    {
        $id = $_GET['id'];
        $tradingpartner_obj = new trading_partner_bo();
        $tradingpartner_obj->id = $id;
        $result = $tradingpartner_obj->get();
        return json_encode($result);
    }

//    END  //


//START UPDATE EXISTING VALUES//

    public function updateTradingpartners(Request $request)
    {
        $body=$request->getBody();
//        var_dump($body);
//        die;
        $tradingpartner_obj= new trading_partner_bo();
        $tradingpartner_obj->id        = $body['edit_id'];
        $tradingpartner_obj->tp_name   = $body['tp_name1'];
        $tradingpartner_obj->bu_name   = $body['bu_name1'];
        $tradingpartner_obj->mobile    = $body['mobile1'];
        $tradingpartner_obj->email     = $body['email1'];
        $tradingpartner_obj->is_delete = 'false';
        $tradingpartner_obj->ts        = time();
        if($tradingpartner_obj->update())
        {
            $response = [

                "msg"     => "Updated Successfully" ,
                "success" => true


            ];
            //return $response;
        }
        else
        {
            $response = [
                "msg"     => "Cannot be updated",
                "success" => false

            ];
            //return $response;
        }

        return json_encode($response);



    }





//END /////


    public function viewdeleteTradingpartners()
        {
            $id = $_GET['id'];
            $tradingpartner_obj = new trading_partner_bo();
            $tradingpartner_obj->id = $id;
            $result = $tradingpartner_obj->get();
            return json_encode($result);

        }



    public function deleteTradingpartners(Request $request){
         $body=$request->getBody();
        $tradingpartner_obj= new trading_partner_bo();
        $tradingpartner_obj->id =  $body['del_id'];
        if( $tradingpartner_obj->delete())
        {
            $response = [

                "msg" => "Delete Successfully",
                "success" => true

            ];

        }
        else
        {
            $response = [
            "msg"     => "Cannot be delete",
            "success" => false

            ];


        }
        return json_encode($response);
    }


}

?>