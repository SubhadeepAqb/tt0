<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Request;
use app\models\RegisterModel;


class AuthController extends Controller
{
    // public function login(Request $request)
    // {
        
    //     $msg= $request->getBody();

    //     $loginModel = new LoginModel();
    //     if($request->isPost()){

    //         // return 'Handle Submitted Data';
    //         if($loginModel->login($request->getBody())){

    //             //$_SESSION['login']=false;
    //           //  print $_SESSION['login'];
                
    //             $this->setLayout('main');
    //             return $this->render('home');
    //             //return "Success";
                
                
    //         }

    //         else{
    //             $this->setLayout('auth');
    //             echo "<script>alert('Hi $msg[email], It Seems Invalid User Id or Password. Please Try Again!')</script>";
    //             return $this->render('login');
    //         }
            
    //     }

    //     $this->setLayout('auth');
    //     return $this->render('login');
        
    // }

//     public function register(Request $request)
//     {
// //        phpinfo();
// //        die();

//         $checkpass=$request->getBody();
//         $registerModel = new RegisterModel();

//         if($request->isPost()){

// //
// //            
//             if($checkpass['reg_pass']!==$checkpass['reg_conpass']){

//                 echo "<script>alert('Please re-type password carefully. Confirm Password does not matched!')</script>";
                
//                 $this->setLayout('auth');
//                 return $this->render('register');
                
//             }
//             if ($registerModel->register($request->getBody())){
//                 //print_r($request->getBody());
//                  return true;
                 
//             }


// //            print '<pre>';
// //            var_dump($registerModel);
// //            exit;

// //             if ($registerModel->validate() && $registerModel->register()){
// //                 return 'Success';
// //             }

// // //            print '<pre>';
// // //            var_dump($registerModel->errors);
// // //            exit;

// // //            return $this->render('register', [
// // //                'model' => $registerModel
// // //            ]);
//         }

//         $this->setLayout('auth');

//         return $this->render('register');
//     }


//     public function viewUsers()
//     {
//         return $this->render('viewUsers');
//     }

public function first()
{
    $params = [
        'name' => "User"
    ];
    return $this->render('first', $params);
}


}
