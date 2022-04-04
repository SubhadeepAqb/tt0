<?php

namespace app\models;
use app\core\Model;

class StorageAreaModel extends Model
{
   


    public function getall()
    {
        $sql = "SELECT * FROM storage_areas ORDER BY id";
        return $this->db->querySelect($sql);
    }
    

}