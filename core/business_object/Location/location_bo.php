<?php
namespace app\core\business_object\Location;

use app\core\Request;
use app\models\DbModel;
use app\core\business_object\bo_common as bo;

class location_bo extends bo
{
    
    public $db;
    
    
    
    public $name = '';
    
    
    
    public $is_delete = '';

    
    
    
    public function __construct()
    {
        $this->db= new DbModel();
    }

    









    public function get()
    {
        
    }








    public function save()
    {
        $this->is_delete = 'false';
        $sql = "INSERT INTO locations (location_name, is_delete) VALUES ('$this->name', '$this->is_delete')";
        if($last_id = $this->db->queryExecute($sql))
        {
        //print "Inserted Successfully";
            $response = [
                "success" => true,
                "msg" => "Inserted Successfully =>".$last_id
            ];
            return $response;
        }
        else
        {
            $response = [
                "success" => false,
                "msg" => "Cannot be inserted"
            ];
            return $response;
        }
    }









    public function update()
    {
        
    }











    public function delete()
    {
        
    }
}

?>