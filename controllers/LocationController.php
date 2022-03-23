<?php

namespace app\controllers;


use app\core\Application;
use app\core\Controller;
use app\core\Request;
use app\core\business_object\Location\location_bo;

class LocationController extends Controller
{


    public function formview(Request $request)
    {
        $body = $request->getBody();
       
        return $this->render('location');
    }
    
    // public function displayrecords()
    // {
    //     $sql = "SELECT * FROM locations ORDER BY id asc";
    //     $this->rows = $this->dbmodel->querySelect($sql);
    //     //print "Inserted Successfully";
    //     return $this->render('showlocation',$this->rows);
    // }

    public function insert(Request $request)
    {
        $body =$request->getBody();
        $location_obj = new location_bo();
        $location_obj->name = $body['lname'];
        $location_obj->save();
    }
}

?>