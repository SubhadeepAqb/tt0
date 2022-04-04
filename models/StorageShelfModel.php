<?php

namespace app\models;
use app\core\Model;

class StorageShelfModel extends Model
{
   


    public function getall()
    {
        $sql = "SELECT * FROM storage_shelfs ORDER BY id";
        return $this->db->querySelect($sql);
    }
    

}