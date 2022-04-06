<?php

namespace app\controllers;

use app\core\business_object\Adjustment\Adjustment_bo;
use app\core\Controller;
use app\core\Request;
use app\models\AdjustmentModal;

class AdjustmentController extends Controller
{


    public function renderAdjustment()
    {
        return $this->render('adjustment');
    }



    public function loadParticulardata(Request $request)
    {
        //$body = $request->getBody();
        $adjustment_bo = new Adjustment_bo();
        $adjustment_bo->id = $_GET['id'];
        var_dump($_GET['id']);
        return json_encode($adjustment_bo->get());
    }


    public function viewadjustedProducts(){
        $adjustmentModal = new AdjustmentModal();
        $result = $adjustmentModal->getAll();
        return json_encode($result);
    }


    public function adjustProduct(Request $request){

    }
}