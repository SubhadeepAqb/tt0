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






    // Constructor for establishing database connection 

    public function __construct() {

        try {
            $this->dsn = "pgsql:host=".DB_HOST.";port=5432;dbname=".DB_NAME.";";

            $this->pdo = new PDO($this->dsn, DB_USER, DB_PASS, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

            if (!$this->pdo) {

              echo "Not Connected to the ".DB_NAME." database successfully!";
            }
        }
        catch (PDOException $e) {

            echo $e->getMessage();
        }
    }










    /*
     * @desc Fetching number of rows
     *
     * @param string        $sql
     *
     * return int
     */
    public function numRows( String $sql ) : int
    {
        $this->res = $this->pdo->prepare( $sql );
        $this->res->execute();
        $this->num_rows = $this->res->rowCount();

        return $this->num_rows;
    }










    /*
     * @desc Fetching all rows
     *
     * @param string        $sql
     *
     * return array
     */
    public function querySelect( String $sql ) : array
    {

        $this->res = $this->pdo->query( $sql );

        return $this->res->fetchAll( PDO::FETCH_ASSOC );

    }











    /*
     * @desc Fetching single row
     *
     * @param string        $sql
     *
     * return array
     */
    public function querySelectSingle( $sql ) : array
    {

        $this->res = $this->pdo->query( $sql );

        return $this->res->fetch( PDO::FETCH_ASSOC );

    }










    /*
     * @desc INSERT , UPDATE , DELETE query executing method ////
     *
     * @param string        $sql
     *
     * return boolean
     */
    public function queryExecute($sql) : bool
    {
        $this->res = $this->pdo->prepare($sql);

        return $this->res->execute();

    } 










    /*
     * @desc fatching last inserted id ////
     *
     * @param 
     *
     * return int
     */
    public function lastInsertId() : int{

        return $this->pdo->lastInsertId();

    }

}
