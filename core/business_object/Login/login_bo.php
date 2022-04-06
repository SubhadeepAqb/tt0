<?php
namespace app\core\business_object\Login;

use app\models\DbModel;
use app\core\business_object\bo_common as bo;

class login_bo extends bo
{
    
    public $db;    
    
    
    public $email = '';
    public $password = '';
    public $user_type ='';


    
    /**
     * @var mixed
     */


    public function __construct()
    {
        $this->db= new DbModel();
    }


    public function get()
    {
       $sql= "SELECT * FROM users where email = '$this->email' AND password = md5('$this->password')
            AND status = 'Approved'";
              
       $res = $this->db->querySelectSingle($sql);
       if($res['id'])
       {
       //print "Inserted Successfully";
           $response = [
              "msg" => "Successfully Found User",
              "success" => true,
              "id" =>  $res['id'],
              "timestamp" => $res['timestamp'],
              "type" => $res['user_type'] 
           ];
        //    setcookie("loginTrue", $res['timestamp'], time()+60);
        //    echo '<script>alert("Cookie Set")</script>';

       }
       else
       {
           $response = [
               "msg" => "User Not Found",
               "success" => false,
               
           ];
       }
        return $response;

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