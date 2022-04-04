<?php
namespace app\core\business_object\Address;

use app\core\Request;
use app\core\business_object\bo_common as bo;

class address_bo extends bo
{
    
    
    public $db;

    public $id;
    
    public $tp_id;

    public $loc_id;

    public $type = '';

    public $add1 = '';

    public $add2 = '';

    public $pin = '';

    public $city = '';

    








    public function get()
    {
        $sql = "SELECT * FROM addresses WHERE id = '$this->id'";
        return $this->db->querySelectSingle($sql);
    }








    public function save()
    {
        if($this->tp_id)
        {
            // print "hello";
            // die();
            $sql = "INSERT INTO addresses (trading_partner_id, location_id,type, address_line1, address_line2, pincode, city, is_delete) VALUES ('$this->tp_id', null, '$this->type', '$this->add1', '$this->add2', '$this->pin', '$this->city', false)";
        }
        else if($this->loc_id)
        {
            // print "bye";
            // die();
            $sql = "INSERT INTO addresses (trading_partner_id, location_id, type, address_line1, address_line2, pincode, city, is_delete) VALUES (null, '$this->loc_id', '$this->type', '$this->add1', '$this->add2', '$this->pin', '$this->city', false)";
        }
        else
        {
            print "Error in query";
        }
            
        
        
        if($this->db->queryExecute($sql))
            return $this->db->lastinsertid();
        
    }









    public function update()
    {
        if($this->tp_id)
        {
            $sql = "UPDATE addresses SET trading_partner_id = '$this->tp_id', location_id = null, type = '$this->type', address_line1 = '$this->add1', address_line2 = '$this->add2', pincode = '$this->pin', city = '$this->city' WHERE id = '$this->id'";
        }
        else if($this->loc_id)
        {
            // print "bye";
            // die();
            $sql = "UPDATE addresses SET trading_partner_id = null, location_id = '$this->loc_id', type = '$this->type', address_line1 = '$this->add1', address_line2 = '$this->add2', pincode = '$this->pin', city = '$this->city' WHERE id = '$this->id'";
        }
        else
        {
            print "Error in query";
        }
        
        return $this->db->queryExecute($sql);
    }











    public function delete()
    {
        $sql = "UPDATE addresses SET is_delete = '$this->is_delete' WHERE id = '$this->id'";
        return $this->db->queryExecute($sql);
    }
}

?>