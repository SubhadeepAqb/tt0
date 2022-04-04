<?php
namespace app\core\business_object\Location;

use app\core\Request;
use app\core\business_object\bo_common as bo;

class location_bo extends bo
{
    
    public $db;
    
    
    
    public $name = '';

    
    
    public $id = null;


    
    public $is_delete='';








    public function get()
    {
        
        $sql = "SELECT * FROM locations WHERE id='$this->id'";
        $result = $this->db->querySelectSingle($sql);
        return $result;
    }








    public function save()
    {
        $sql = "INSERT INTO locations (location_name, is_delete) VALUES ('$this->name', '$this->is_delete')";
        if($this->db->queryExecute($sql))
        {
            return $this->db->lastinsertid();
        }    
    }
    









    public function update()
    {
        $sql = "UPDATE locations SET location_name = '$this->name' WHERE id = '$this->id'";
        return $this->db->queryExecute($sql);
    
    }











    public function delete()
    {
        $sql = "UPDATE locations SET is_delete = true WHERE id = '$this->id'";
        return $this->db->queryExecute($sql);
        
    }
}

?>