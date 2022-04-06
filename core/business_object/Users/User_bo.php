<?php
namespace app\core\business_object\Users;
use app\models\DbModel;
use app\core\business_object\bo_common as bo;

class User_bo extends bo
{
    public $db;

    public $id;
    public $name;
    public $email;
    public $password;
    public $user_type;
    public $is_delete;
    public $timestamp;
    public $status;



    public function __construct()
    {
        $this->db= new DbModel();
    }




    public function get()
    {
        // TODO: Implement get() method.
        $sql = "SELECT * FROM users WHERE id = $this->id ";
        return $this->db->querySelectSingle($sql);
    }





    public function save()
    {
        // TODO: Implement save() method.
        if(isset($_COOKIE['loginTrue']) && $_COOKIE['loginTrue']!='undefined' && $_COOKIE['loginTrue']!=null 
        && $_COOKIE['loginTrue']>=1647450336 && isset($_COOKIE['type']) && $_COOKIE['type']!='undefined' && $_COOKIE['type']!=null 
        && $_COOKIE['type']=='admin')
        {
        $sql = "INSERT INTO users 
                            (name,email,password,user_type,is_delete,timestamp,status) 
                     VALUES 
                            ('$this->name', '$this->email',md5('$this->password'),'$this->user_type',false,'$this->timestamp', 'Approved') ";
        }
        else
            {
            $sql = "INSERT INTO users 
                                 (name,email,password,user_type,is_delete,timestamp,status) 
                         VALUES 
                                 ('$this->name', '$this->email',md5('$this->password'),'$this->user_type',false,'$this->timestamp', 'Pending') ";
            }   
        if($this->db->queryExecute($sql)) {
            return $this->db->lastinsertid();
        }
    }





    public function update(): bool
    {
        // TODO: Implement update() method.
        $sql = "UPDATE public.users
                    SET  name      = '$this->name', 
                        email      = '$this->email', 
                        password   = md5('$this->password'), 
                        user_type  = '$this->user_type',
                        -- is_delete  =  false,
                        -- timestamp  = '$this->timestamp',
                        status     = '$this->status'
                    WHERE id = $this->id";
        
        return $this->db->queryExecute($sql);
    }





    public function delete()
    {
        // TODO: Implement delete() method.
        $sql = "UPDATE public.users SET is_delete=true WHERE id = $this->id";
        //$sql = "DELETE FROM public.users	WHERE id = $this->id";
        return $this->db->queryExecute($sql);
    }
}