<?php

namespace app\models;

use app\core\business_object\Register\register_bo;
use app\models\DbModel;

class registerModel extends DbModel
{
    public $dbmodel  = null;
    public function __construct()
    {
        $this->dbmodel = new DbModel();
    }

    public function getAll(){
        $sql = "SELECT * FROM users";
        return $this->dbmodel->querySelect($sql);
    }

}