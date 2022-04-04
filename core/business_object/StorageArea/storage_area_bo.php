<?php
namespace app\core\business_object\StorageArea;

use app\core\Request;
use app\core\business_object\bo_common as bo;

class storage_area_bo extends bo
{
    
    public $db;
    
    public $id = null;

    public $loc_id  = null;

    public $storage_area_name= '';

    public $is_delete='';

   
    








    public function get()
    {
        $sql = "SELECT * FROM storage_areas WHERE id='$this->id'";
        $result = $this->db->querySelectSingle($sql);
        return $result;
    }








    public function save()
    {
        $sql = "INSERT INTO storage_areas (location_id, storage_area_name, is_delete) VALUES ('$this->loc_id', '$this->storage_area_name', '$this->is_delete')";
        if($this->db->queryExecute($sql))
            return $this->db->lastinsertid();
        //print "Inserted Successfully";
            
    }









    public function update()
    {
        $sql = "UPDATE storage_areas SET location_id = '$this->loc_id', storage_area_name = '$this->storage_area_name' WHERE id = '$this->id'";
        return $this->db->queryExecute($sql);
    }











    public function delete()
    {
        $sql = "UPDATE storage_areas SET is_delete = '$this->is_delete' WHERE id = '$this->id'";
        return $this->db->queryExecute($sql);
    }
}

?>