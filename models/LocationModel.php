<?php

namespace app\models;

use app\core\Model;

class LocationModel extends Model
{
   

    public function getall()
    {
        $sql = "SELECT * FROM locations ORDER BY id";
        return $this->db->querySelect($sql);
    }
    
    public function getsingle($id)
    {
        $sql = "SELECT * FROM locations WHERE id = $id";
        return $this->db->querySelect($sql);
    }

}