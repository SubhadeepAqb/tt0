<?php

namespace app\models;

class ProductModel extends DbModel
{

    public function __construct()
    {
        $this->dbmodel = new DbModel();
    }

    public function getAll(){
        $sql = "SELECT * FROM public.products WHERE is_delete = false ORDER BY id DESC";
        return $this->dbmodel->querySelect($sql);
    }

}