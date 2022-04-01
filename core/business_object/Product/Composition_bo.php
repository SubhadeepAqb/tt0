<?php

namespace app\core\business_object\Product;

use app\core\business_object\bo_common as bo;

class Composition_bo extends bo
{

    public $product_id = null ;
    public $composition_product_id = null;
    public $quantity = null;
    public $time;


    public function get()
    {
        // TODO: Implement get() method.
    }

    public function save()
    {
        // TODO: Implement save() method.
        $sql = "INSERT INTO public.compositions(product_id, content_id, quantity, is_delete, timestamp)	VALUES ('$this->product_id','$this->composition_product_id', '$this->quantity', false, '$this->time')";

        if($this->db->queryExecute($sql)) {
            return $this->db->lastinsertid();
        }
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