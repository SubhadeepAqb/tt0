<?php

namespace app\core\business_object\Adjustment;
use app\core\business_object\bo_common as bo;


class Adjustment_bo extends bo
{

    public $id;
    public $p_id;
    public $l_id;
    public $sa_id;
    public $ss_id;
    public $i_serial_no;
    public $status;
    public $time;


    public function get()
    {
        // TODO: Implement get() method.
        $sql = "SELECT a.id,p.id as product_id,p.product_name,l.id as location_id, l.location_name,sa.id as sa_id, sa.storage_area_name,ss.id as ss_id, ss.shelf_name,i.id as i_id, i.serial_number as i_sa,a.status,a.timestamp FROM adjustments_modules AS a 
                LEFT JOIN products AS p  
                ON a.product_id=p.id  
                LEFT JOIN locations AS l 
                ON a.location_id = l.id  
                LEFT JOIN storage_areas AS sa
                ON a.storage_area_id = sa.id 
                LEFT JOIN storage_shelfs as ss
                ON a.shelf_id = ss.id
                LEFT JOIN inbound_shipments as i
                ON a.inbound_id = i.id where a.id = $this->id";
        //var_dump($sql);

        return $this->db->querySelectSingle($sql);
    }


    public function save()
    {
        // TODO: Implement save() method.
    }

    public function update()
    {
        // TODO: Implement update() method.
    }

    public function delete()
    {
        // TODO: Implement delete() method.
    }
}