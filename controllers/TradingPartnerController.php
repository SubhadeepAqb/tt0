<?php

namespace app\controllers;


use app\core\Application;
use app\core\Controller;
use app\core\Request;

class TradingPartnerController extends Controller
{
   
    public $tpname = '';
    public $bname = '';
    public $mobile = '';
    public $email = '';
    public $is_delete = '';
    public $ts = '';


    public function formview(Request $request)
    {
        $body = $request->getBody();
       
        return $this->render('tradingpartner');
    }
    
    public function insertrecords(Request $request)
    {
        $body = $request->getBody();
        //return json_encode($body);
        $this->tpname = $body['tpname'];
        $this->bname = $body['bname'];
        $this->mobile = $body['mobile'];
        $this->email = $body['email'];
        $this->is_delete = 'false';
        $this->ts = time();
        $sql = "INSERT INTO trading_partners (trading_partner_name, business_name, mobile, email, is_delete, timestamp) VALUES ('$this->tpname', '$this->bname', '$this->mobile', '$this->email', '$this->is_delete', '$this->ts')";
        $this->dbmodel->queryExecute($sql);
        print "Inserted Successfully";
    }    
}

?>