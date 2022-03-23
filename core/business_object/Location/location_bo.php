<?php
namespace app\core\business_object\Location;

use app\core\Request;
use app\models\DbModel;
use app\core\business_object\bo_common as bo;

class location_bo extends bo
{
    
    public $db;
    
    
    
    public $name = '';
    
    
    
    //public $is_delete = false;

    
    
    
    public function __construct()
    {
        $this->db= new DbModel();
    }

    









    public function get()
    {

    }








    public function save()
    {
        $sql = "INSERT INTO locations (location_name, is_delete) VALUES ('$this->name', false)";
        $this->db->queryExecute($sql);
        print "Inserted Successfully";
    }









    public function update()
    {
        
    }

    public function delete()
    {
        
    }
}

?>