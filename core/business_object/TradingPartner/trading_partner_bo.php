<?php
namespace app\core\business_object\TradingPartner;

use app\core\Request;
use app\models\DbModel;
use app\core\business_object\bo_common as bo;



class trading_partner_bo extends bo
{
    //public $db;
    public $id;

    public $tp_name   = '';
    public $bu_name   = '';
    public $mobile    = '';
    public $email     = '';
    public $is_delete = '';
    public $ts        = '';

//    public function __construct()
//    {
//
//        $this->db = new DbModel();
//
//    }



    public function get()
    {
        // TODO: Implement get() method.

        $sql= "SELECT * FROM trading_partners WHERE id = '$this->id' ";
        return $this->db->querySelectSingle($sql);

    }




    public function save()
    {
        // TODO: Implement save() method.

        $sql= "INSERT INTO trading_partners (trading_partner_name,business_name,mobile,email,is_delete,timestamp)
                VALUES ('$this->tp_name','$this->bu_name','$this->mobile','$this->email','$this->is_delete','$this->ts')";

        if( $this->db->queryExecute($sql)) {
            return $this->db->lastInsertId();
        }

    }




    public function update()
    {
        // TODO: Implement update() method.

        $sql="UPDATE trading_partners
	SET trading_partner_name='$this->tp_name', business_name='$this->bu_name', mobile='$this->mobile', email='$this->email', is_delete='$this->is_delete', timestamp='$this->ts'
	WHERE id = '$this->id' ";

        return $this->db->queryExecute($sql);
    }





    public function delete()
    {
        // TODO: Implement delete() method.
        $sql= "UPDATE trading_partners SET is_delete=true  WHERE id ='$this->id' ";
        return $this->db->queryExecute($sql);
    }

//    public function lastinsertid()
//    {
//        return $this->PDO->lastInsertId();
//    }

}
//"success"=>true,
//                "msg"=> "Inserted =>".$last_id