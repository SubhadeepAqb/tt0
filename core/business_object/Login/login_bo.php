<?php
namespace app\core\business_object\Login;

use app\core\Request;
use app\models\DbModel;
use app\core\business_object\bo_common as bo;

class login_bo extends bo
{
    
    public $db;
    
    
    
    public $eamil = '';

    public $password = '';
    
    
    
    //public $is_delete = false;

    
    
    
    public function __construct()
    {
        $this->db= new DbModel();
    }

    









    public function get()
    {
       $sql= "SELECT * FROM users where email = '$this->email' AND password = '$this->password'";
       print $sql;
       
       $res = $this->db->querySelectSingle($sql);
       if($res['id'])
       {
       //print "Inserted Successfully";
           $response = [
               "success" => true,
               "msg" => "Successfully Found User  ".$res['id']
           ];
           return $response;
       }
       else
       {
           $response = [
               "success" => false,
               "msg" => "User Not Found"
           ];
                return $response;
       }

    }








    public function save()
    {
        // $sql = "INSERT INTO locations (location_name, is_delete) VALUES ('$this->name', false)";
        // $this->db->queryExecute($sql);
        // print "Inserted Successfully";
    }









    public function update()
    {
        
    }

    public function delete()
    {
        
    }
}

?>