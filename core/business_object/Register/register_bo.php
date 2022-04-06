<?php
namespace app\core\business_object\Register;
use app\models\DbModel;
use app\core\business_object\bo_common as bo;

class register_bo extends bo
{
    
    public $db;
    
    
    public $reg_type;
    public $reg_fname;
    public $reg_lname;
    public $reg_email;
    public $reg_pass;
    public $reg_conpass;
    public $reg_time;
    
    
    
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

        if(isset($_COOKIE['loginTrue']) && $_COOKIE['loginTrue']!='undefined' && $_COOKIE['loginTrue']!=null 
        && $_COOKIE['loginTrue']>=1647450336 )
        {
        $sql = "INSERT INTO public.users (name, email, password, user_type, is_delete, timestamp, status) 
                VALUES ('$this->reg_fname $this->reg_lname', '$this->reg_email', md5('$this->reg_pass'), '$this->reg_type', false, '$this->reg_time', 'Approved')";
        }
        else 
            {
         $sql = "INSERT INTO public.users (name, email, password, user_type, is_delete, timestamp, status) 
                 VALUES ('$this->reg_fname $this->reg_lname', '$this->reg_email', md5('$this->reg_pass'), '$this->reg_type', false, '$this->reg_time', 'Pending')";

        }
        
        $res = $this->db->queryExecute($sql);
        
    

        if($res)
        {
        //print "Inserted Successfully";
            $response = [
                "msg" => "Successfully Inserted User",
                "success" => true,
                "id" => "$res"
            ];
            
            return $response;
            
        }
        else
        {
            $response = [
                "msg" => "Cannot be inserted",
                "success" => false
                
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