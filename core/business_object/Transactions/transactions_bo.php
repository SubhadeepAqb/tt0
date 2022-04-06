<?php

namespace app\core\business_object\Transactions;

//use app\models\DbModel;
use app\core\Request;
use app\core\business_object\bo_common as bo;

class transactions_bo extends bo
{
    public $db;

    public $id = '';

    public $last_id;

    public $order = '';
    public $TradingPartnerID;
    public $DeliveryStatus = '';
    public $Deliveryaddress;
    //public $is_delete;
    public $TimeStamp = '';






    public function get()
    {
        $sql = "SELECT * FROM transactions WHERE id='$this->id' ";
        return $this->db->querySelectSingle($sql);
    }



    public function save()
    {
        $sql = "INSERT INTO transactions (transaction_type, trading_partner_id, status, delivery_address, is_delete, timestamp)
        VALUES ('$this->order', '$this->TradingPartnerID', '$this->DeliveryStatus', '$this->Deliveryaddress', false, '$this->TimeStamp')";
        //die('hello');

        //$last_id = $this->db->lastinsertid();
        if($this->db->queryExecute($sql))
            return $this->db->lastinsertid();
        

        
    }



    public function update()
    {
        $sql = "UPDATE transactions SET  transaction_type='$this->order', trading_partner_id='$this->TradingPartnerID', status='$this->DeliveryStatus', delivery_address='$this->Deliveryaddress', is_delete=false, timestamp='$this->TimeStamp'
        WHERE id='$this->id'";
        //echo "abcd";
        //die();
        return $this->db->queryExecute($sql);
    }



    public function delete()
    {
        $sql = "UPDATE transactions SET is_delete=true WHERE id='$this->id'";
        return $this->db->queryExecute($sql);
    }



}
//'$this->TradingPartnerID',
?>

