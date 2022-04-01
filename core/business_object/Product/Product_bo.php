<?php
namespace app\core\business_object\Product;

use app\core\business_object\bo_common as bo;

class Product_bo extends bo
{
    public $id;
    public $name;
    public $description;
    public $quantity;
    public $type;
    public $time;




    public function get()
    {
        // TODO: Implement get() method.
        $sql = "SELECT * FROM products WHERE id = $this->id ";
        return $this->db->querySelectSingle($sql);
    }





    public function save()
    {
        // TODO: Implement save() method.
        $sql = "INSERT INTO products 
                            (product_name,description,quantity,type,is_delete,timestamp) 
                     VALUES 
                            ('$this->name', '$this->description','$this->quantity','$this->type',false,'$this->time') ";
        if($this->db->queryExecute($sql)) {
            return $this->db->lastinsertid();
        }
    }





    public function update(): bool
    {
        // TODO: Implement update() method.
        $sql = "UPDATE public.products
                    SET  product_name='$this->name', 
                        description='$this->description', 
                        quantity='$this->quantity', 
                        type='$this->type', 
                        is_delete=false,
                        timestamp=$this->time
                    WHERE id = $this->id";
        return $this->db->queryExecute($sql);
    }





    public function delete()
    {
        // TODO: Implement delete() method.
       // $sql = "UPDATE public.products SET is_delete=true WHERE id = $this->id";
        $sql = "DELETE FROM public.products	WHERE id = $this->id";
        return $this->db->queryExecute($sql);
    }
}