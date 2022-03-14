<?php

namespace app\models;
use PDO;
use PDOException;

class DbModel
{
    protected $pdo;



    protected $dsn;



    protected $rows = [];



    protected $row;



    protected $res;



    protected $num_rows;






    // Constructor for establishing database connection //

    public function __construct() {

        try {
            $this->dsn = "pgsql:host=".DB_HOST.";port=5432;dbname=".DB_NAME.";";

            $this->pdo = new PDO($this->dsn, DB_USER, DB_PASS, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

            if ($this->pdo) {
//                echo "Connected to the ".DB_NAME." database successfully!";
            }

        }catch (PDOException $e) {
            echo $e->getMessage();
        }



    }


    /////  Fetching all rows /////////
    public function numRows($sql) {
        $this->res = $this->pdo->prepare($sql);
        $this->res->execute();
        $this->num_rows = $this->res->rowCount();


        return $this->num_rows;

    }









    /////  Fetching all rows /////////
    public function querySelect($sql) {
        $this->res = $this->pdo->prepare($sql);
        $this->res->execute();

        while ($this->row = $this->res->fetch()) {
            $this->rows[] = $this->row;
        }
        //$this->rows[].=$this->num_rows;
        return $this->rows;

    }












    /////  Fetching a single row /////////
    public function querySelectSingle($sql) {
        $this->res = $this->pdo->prepare($sql);
        $this->res->execute();

        return $this->res->fetch();

    }









    /////  INSERT , UPDATE , DELETE query executing method ////
    public function queryExecute($sql) {
        $this->res = $this->pdo->prepare($sql);
        $this->res->execute();
    }

}