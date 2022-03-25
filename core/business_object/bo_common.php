<?php
namespace app\core\business_object;

use app\models\DbModel;

abstract class bo_common
{

    public $db;


    public function __construct()
    {
        $this->db = new DbModel();
    }
    
    
    abstract public function get();



    abstract public function save();



    abstract public function update();



    abstract public function delete();


}


?>