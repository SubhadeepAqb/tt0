<?php

namespace app\models;

use app\core\Model;
use app\core\business_object\Transactions\transactions_bo;


class TransactionsModel extends Model
{
  

    public function getAll()
    {
        $sql = "SELECT t.id,tp.trading_partner_name,a.city,t.transaction_type,t.status,t.is_delete,t.timestamp
                FROM transactions AS t left join trading_partners AS tp ON tp.id=t.trading_partner_id left join 
                addresses AS a ON a.id=t.delivery_address  ORDER BY id DESC";
        return $this->db->querySelect($sql);
    }
}
?>