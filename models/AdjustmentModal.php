<?php

namespace app\models;

class AdjustmentModal extends DbModel
{
    public function __construct()
    {
        $this->dbmodel = new DbModel();
    }

    public function getAll(){
        //$sql = "SELECT id, product_id, location_id, storage_area_id, shelf_id, product_serial, status, is_delete, timestamp
	//FROM public.adjustments_modules";
        $sql = "SELECT p.id,p.product_name, l.id,l.location_name, sa.id, sa.storage_area_name, ss.id,ss.shelf_name,i.id, i.serial_number,a.status,a.timestamp FROM adjustments_modules AS a 
                LEFT JOIN products AS p  
                ON p.id=a.product_id  
                LEFT JOIN locations AS l 
                ON a.location_id = l.id  
                LEFT JOIN storage_areas AS sa
                ON a.storage_area_id = sa.id 
                LEFT JOIN storage_shelfs as ss
                ON a.shelf_id = ss.id
                LEFT JOIN inbound_shipments as i
                ON a.inbound_id = i.id";
        return $this->dbmodel->querySelect($sql);
    }

}