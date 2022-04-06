<?php

namespace app\models;

use app\core\Model;
use app\core\business_object\Transactions_line_item\transactions_line_item_bo;


class TransactionLineItemModel extends Model
{

    public function getAll()
    {
        $sql = "SELECT tli.id,t.transaction_type,t.trading_partner_id,t.status,t.delivery_address,
        tli.is_delete,tli.timestamp,tli.product_id,tli.transaction_id,tli.order_quantity
        FROM transactions_lines_items AS tli JOIN transactions AS t ON t.id=tli.transaction_id ORDER BY id DESC";

        //$sql = "SELECT * FROM transactions_lines_items ORDER BY id DESC";
        return $this->db->querySelect($sql);
    }



}
?>