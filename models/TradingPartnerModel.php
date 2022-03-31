<?php

namespace app\models;

use app\core\business_object\TradingPartner\trading_partner_bo;
use app\models\DbModel;
use app\core\Model;

class TradingPartnerModel extends Model
{
//    public $db = null ;
//
//    public function __construct()
//    {
//        $this->db = new DbModel();
//    }




    public function getALL()
    {
        $sql= "SELECT * FROM trading_partners ORDER BY id DESC";
        return $this->db->querySelect($sql);

    }
}
