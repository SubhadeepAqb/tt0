<?php

namespace app\core\business_object\Transactions_line_item;

use app\core\Request;
use app\core\business_object\bo_common as bo;

class transactions_line_item_bo extends bo
{
    public $db;

    public $id;

    public $last_id;

    public $TransactionID;
    public $ProductId;
    public $OrderQuantity;
    //public $is_delete;
    public $TimeStamp = '';






    public function get()
    {
        $sql = "SELECT * FROM transactions_lines_items WHERE id='$this->id' ";
        return $this->db->querySelectSingle($sql);
    }










    public function save()
    {
        $sql = "INSERT INTO transactions_lines_items (transaction_id, product_id, order_quantity, is_delete, timestamp)
        VALUES ('$this->TransactionID', '$this->ProductId', '$this->OrderQuantity', false, '$this->TimeStamp')";
        //die('hello');

        //$last_id = $this->db->lastinsertid();
        if($this->db->queryExecute($sql))
            return $this->db->lastinsertid();
        
    }










    public function update()
    {
        $sql = "UPDATE transactions_lines_items SET  transaction_type='$this->order', trading_partner_id='$this->TradingPartnerID', status='$this->DeliveryStatus', delivery_address='$this->Deliveryaddress', is_delete=false, timestamp='$this->TimeStamp'
        WHERE id='$this->id'";
        //echo "abcd";
        //die();
        return $this->db->queryExecute($sql);
    }










    public function delete()
    {
        $sql = "UPDATE transactions_lines_items SET is_delete=true WHERE id='$this->id'";
        return $this->db->queryExecute($sql);
    }


}
?>