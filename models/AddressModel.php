<?php

namespace app\models;

use app\core\Model;

class AddressModel extends Model
{
   

    public function getall()
    {
        $sql = "SELECT * FROM addresses ORDER BY id";
        return $this->db->querySelect($sql);
    }
    

}