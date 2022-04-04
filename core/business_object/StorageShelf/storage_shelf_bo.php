<?php
namespace app\core\business_object\StorageShelf;

use app\core\Request;
use app\core\business_object\bo_common as bo;

class storage_shelf_bo extends bo
{
    
    public $db;
    
    public $id = null;

    public $sa_id  = null;

    public $shelf_name= '';

    public $is_delete='';

   
    








    public function get()
    {
        $sql = "SELECT * FROM storage_shelfs WHERE id='$this->id'";
        $result = $this->db->querySelectSingle($sql);
        return $result;
    }








    public function save()
    {
        $sql = "INSERT INTO storage_shelfs (storage_area_id, shelf_name, is_delete) VALUES ('$this->sa_id', '$this->shelf_name', '$this->is_delete')";
        if($this->db->queryExecute($sql))
            return $this->db->lastinsertid();
        //print "Inserted Successfully";
            
    }









    public function update()
    {
        $sql = "UPDATE storage_shelfs SET storage_area_id = '$this->sa_id', shelf_name = '$this->shelf_name' WHERE id = '$this->id'";
        return $this->db->queryExecute($sql);
    }











    public function delete()
    {
        $sql = "UPDATE storage_shelfs SET is_delete = '$this->is_delete' WHERE id = '$this->id'";
        return $this->db->queryExecute($sql);
    }
}

?>