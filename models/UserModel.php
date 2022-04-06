<?php

namespace app\models;

use app\core\business_object\Users\User_bo;
use app\models\DbModel;

class UserModel extends DbModel
{
    public $dbmodel  = null;
    
    public function __construct()
    {
        $this->dbmodel = new DbModel();
    }

    public function getAll(){
        $sql = "SELECT * FROM public.users WHERE is_delete = false ORDER BY id DESC";
        return $this->dbmodel->querySelect($sql);
    }


    }
    

