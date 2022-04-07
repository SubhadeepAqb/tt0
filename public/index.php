<?php
require_once __DIR__ . "/../core/config.php";
require_once __DIR__ . "/../vendor/autoload.php";


use app\controllers\AuthController;
use app\controllers\SiteController;
use app\core\Application;
use app\controllers\RegisterController;
use app\controllers\LocationController;
use app\controllers\LoginController;
use app\controllers\TradingPartnerController;
use app\controllers\ProductController;
use app\controllers\InboundController;
use app\controllers\UserController;
use app\controllers\AddressController;
use app\controllers\StorageAreaController;
use app\controllers\StorageShelfController;
use app\controllers\AdjustmentController;
use app\controllers\CompositionController;
use app\controllers\TransactionController;
use app\controllers\TransactionLineItemController;


$app = new Application(dirname(__DIR__));


if(!isset($_COOKIE['loginTrue']) || $_COOKIE['loginTrue']=="undefined" || $_COOKIE['loginTrue'] ==null)
{
    $app->router->get('/', [AuthController::class , 'first']);

    //end points of Login and Logout
    $app->router->get('/login', [LoginController::class, 'formview']);
    $app->router->get('/logout', [LoginController::class, 'formview']);
    $app->router->post('/login', [LoginController::class, 'fetch']);

    $app->router->get('/viewUsers', [LoginController::class, 'formview']);


    //end points of Register
    $app->router->get('/register', [RegisterController::class, 'formview']);
    $app->router->post('/register', [RegisterController::class, 'insert']);


    //end points
    $app->router->get('/home', [LoginController::class, 'formview']);
    $app->router->get('/contact', [LoginController::class, 'formview']);
    $app->router->get('/location', [LoginController::class, 'formview']);
    $app->router->get('/tradingpartner', [LoginController::class, 'formview']);


    //end points of Product Module
    $app->router->get('/product', [LoginController::class, 'formview']);
    $app->router->post('/product', [LoginController::class, 'formview']);
    $app->router->get('/viewProducts', [LoginController::class, 'formview']);
    $app->router->get('/loadProduct', [LoginController::class, 'formview']);
    $app->router->post('/updateProduct', [LoginController::class, 'formview']);
    $app->router->post('/deleteProduct', [LoginController::class, 'formview']);
    

    //end points of Composition
    $app->router->post('/composition', [LoginController::class, 'formview']);


    //end points of Inbound//end points of Register


    //end point of Location Module
    $app->router->get('/location', [LoginController::class, 'formview']);
    $app->router->get('/viewUsers', [LoginController::class, 'formview']);
    $app->router->post('/insertlocation', [LoginController::class, 'formview']);
    $app->router->get('/locationdisplay', [LoginController::class, 'formview']);
    $app->router->get('/editlocations', [LoginController::class, 'formview']);
    $app->router->post('/updatelocation', [LoginController::class, 'formview']);
    $app->router->post('/deleterecordslocation', [LoginController::class, 'formview']);


    //end point of Address Module
    $app->router->get('/address', [LoginController::class, 'formview']);
    $app->router->post('/insertaddress', [LoginController::class, 'formview']);
    $app->router->get('/addressdisplay', [LoginController::class, 'formview']);
    $app->router->get('/editAddresses', [LoginController::class, 'formview']);
    $app->router->post('/updateAddress', [LoginController::class, 'formview']);
    $app->router->post('/deleterecordsaddress', [LoginController::class, 'formview']);


    //end point of Storage Area
    $app->router->get('/storagearea', [LoginController::class, 'formview']);
    $app->router->post('/insertarea', [LoginController::class, 'formview']);
    $app->router->get('/areadisplay', [LoginController::class, 'formview']);
    $app->router->get('/editStorageAreas', [LoginController::class, 'formview']);
    $app->router->post('/updateAreas', [LoginController::class, 'formview']);
    $app->router->post('/deleterecordssa', [LoginController::class, 'formview']);


    //end point of Storage Shelf
    $app->router->get('/storageshelf', [LoginController::class, 'formview']);
    $app->router->post('/insertshelf', [LoginController::class, 'formview']);
    $app->router->get('/shelfdisplay', [LoginController::class, 'formview']);
    $app->router->get('/editStorageShelves', [LoginController::class, 'formview']);
    $app->router->post('/updateShelf', [LoginController::class, 'formview']);
    $app->router->post('/deleterecordsshelf', [LoginController::class, 'formview']);


    //end point of Trading Partner
    $app->router->get('/tradingpartner', [LoginController::class, 'formview']);
    $app->router->get('/addTradingpartner', [LoginController::class, 'formview']);
    $app->router->get('/viewtradingpartners', [LoginController::class, 'formview']);
    $app->router->get('/editTradingpartners', [LoginController::class, 'formview']);
    $app->router->post('/updateTradingpartner', [LoginController::class, 'formview']);
    $app->router->get('/viewdeleteTradingpartners', [LoginController::class, 'formview']);
    $app->router->post('/deleteTradingpartner', [LoginController::class, 'formview']);
    $app->router->post('/tradingpartner', [LoginController::class, 'formview']);


    //end point of Transaction 
    $app->router->get('/transactions', [LoginController::class, 'formview']);
    $app->router->get('/displayTransactions', [LoginController::class, 'formview']);
    $app->router->post('/inserttransactions', [LoginController::class, 'formview']);
    $app->router->get('/tradingpartnerdisplay', [LoginController::class, 'formview']);
    $app->router->get('/deliverydisplay', [LoginController::class, 'formview']);
    $app->router->get('/editTransactions', [LoginController::class, 'formview']);
    $app->router->post('/updateTransactions', [LoginController::class, 'formview']);
    $app->router->post('/deleteTransactions', [LoginController::class, 'formview']);


    //end point of Transactions_line_item 
    $app->router->get('/transactionsli', [LoginController::class, 'formview']);
    $app->router->get('/displayTransactionLineItem', [LoginController::class, 'formview']);
    $app->router->post('/insertTransactionLineItem', [LoginController::class, 'formview']);
    $app->router->post('/inserttransactionsinline', [LoginController::class, 'formview']);
}



else{
    $app->router->get('/', [SiteController::class , 'home']);


    //end points of Login  
    $app->router->get('/login', [SiteController::class , 'home']);
    $app->router->post('/', [SiteController::class , 'home']);
    $app->router->get('/home', [SiteController::class , 'home']);


    //end points of Register Controller    
    $app->router->get('/register', [RegisterController::class, 'formview']);
    $app->router->post('/register', [RegisterController::class, 'insert']);


    //end points 
    $app->router->get('/contact', [SiteController::class , 'Contact']);
    $app->router->post('/contact', [SiteController::class , 'handleContact']);

    // $app->router->get('/location', [LocationController::class, 'formview']);
    // $app->router->post('/location', [LocationController::class, 'insert']);

    // $app->router->get('/tradingpartner', [TradingPartnerController::class, 'formview']);
    // $app->router->post('/tradingpartner', [TradingPartnerController::class, 'insertrecords']);


    //end points Inbound Module
    $app->router->get('/inbound', [InboundController::class, 'allInbounds']);
    $app->router->post('/addInbound', [InboundController::class, 'insert']);
    $app->router->get('/addInbound', [InboundController::class, 'addInbound']);
    $app->router->get('/viewInbounds', [InboundController::class, 'viewInbounds']);


    //end points User Module
    $app->router->get('/viewUsers', [UserController::class, 'renderViewUsers']);
    $app->router->get('/users', [UserController::class, 'viewUsers']);
    $app->router->post('/deleteUser', [UserController::class, 'deleteUser']);
    $app->router->post('/addUser', [UserController::class, 'insert']);
    $app->router->get('/loadUser', [UserController::class, 'loadPerticularUser']);
    $app->router->post('/updateUser', [UserController::class, 'updateUser']);
    
    // $app->router->post('/addInbound', [InboundController::class, 'insert']);
    // $app->router->get('/addInbound', [InboundController::class, 'addInbound']);
    // $app->router->get('/viewInbounds', [InboundController::class, 'viewInbounds']);

    
    //end point of Location Module
    $app->router->get('/location', [LocationController::class, 'formview']);
    $app->router->post('/insertlocation', [LocationController::class, 'insert']);
    $app->router->get('/locationdisplay', [LocationController::class, 'displayrecords']);
    $app->router->get('/editlocations', [LocationController::class, 'editlocations']);
    $app->router->post('/updatelocation', [LocationController::class, 'updaterecord']);
    $app->router->post('/deleterecordslocation', [LocationController::class, 'deleterecord']);


    //end point of Address Module
    $app->router->get('/address', [AddressController::class, 'formview']);
    $app->router->post('/insertaddress', [AddressController::class, 'insert']);
    $app->router->get('/addressdisplay', [AddressController::class, 'displayrecords']);
    $app->router->get('/editAddresses', [AddressController::class, 'editAddress']);
    $app->router->post('/updateAddress', [AddressController::class, 'updaterecord']);
    $app->router->post('/deleterecordsaddress', [AddressController::class, 'deleterecord']);


    //end point of Storage Area
    $app->router->get('/storagearea', [StorageAreaController::class, 'formview']);
    $app->router->post('/insertarea', [StorageAreaController::class, 'insert']);
    $app->router->get('/areadisplay', [StorageAreaController::class, 'displayrecords']);
    $app->router->get('/editStorageAreas', [StorageAreaController::class, 'editAreas']);
    $app->router->post('/updateAreas', [StorageAreaController::class, 'updaterecord']);
    $app->router->post('/deleterecordssa', [StorageAreaController::class, 'deleterecord']);


    //end point of Storage Shelf
    $app->router->get('/storageshelf', [StorageShelfController::class, 'formview']);
    $app->router->post('/insertshelf', [StorageShelfController::class, 'insert']);
    $app->router->get('/shelfdisplay', [StorageShelfController::class, 'displayrecords']);
    $app->router->get('/editStorageShelves', [StorageShelfController::class, 'editShelfs']);
    $app->router->post('/updateShelf', [StorageShelfController::class, 'updaterecord']);
    $app->router->post('/deleterecordsshelf', [StorageShelfController::class, 'deleterecord']);


    //end points of Product Module
    $app->router->get('/product', [ProductController::class, 'renderViewProducts']);
    $app->router->post('/product', [ProductController::class, 'insert']);
    $app->router->get('/viewProducts', [ProductController::class, 'viewProducts']);
    $app->router->get('/loadProduct', [ProductController::class, 'loadParticularProduct']);
    $app->router->post('/updateProduct', [ProductController::class, 'updateProduct']);
    $app->router->post('/deleteProduct', [ProductController::class, 'deleteProduct']);


    //end points of composition
    $app->router->post('/composition', [CompositionController::class, 'insertCompositions']);


    //end point of Trading Partner
    $app->router->get('/tradingpartner', [TradingPartnerController::class, 'formview']);
    //$app->router->get('/addTradingpartner', [TradingPartnerController::class, 'addTradingpartner']);
    $app->router->get('/viewtradingpartners', [TradingPartnerController::class, 'viewTradingpartners']);
    $app->router->get('/editTradingpartners', [TradingPartnerController::class, 'editTradingpartners']);
    $app->router->post('/updateTradingpartner', [TradingPartnerController::class, 'updateTradingpartners']);
    $app->router->get('/viewdeleteTradingpartners', [TradingPartnerController::class, 'viewdeleteTradingpartners']);
    $app->router->post('/deleteTradingpartner', [TradingPartnerController::class, 'deleteTradingpartners']);
    $app->router->post('/tradingpartner', [TradingPartnerController::class, 'insertTradingpartner']);


    //end point of Transaction
    $app->router->get('/transactions', [TransactionController::class, 'formview']);
    $app->router->get('/displayTransactions', [TransactionController::class, 'displayTransaction']);
    $app->router->post('/inserttransactions', [TransactionController::class, 'inserttransaction']);
    $app->router->get('/viewtradingpartners', [TransactionController::class, 'viewTradingpartners']);
    $app->router->get('/deliverydisplay', [TransactionController::class, 'deliveryDisplay']);
    $app->router->get('/editTransactions', [TransactionController::class, 'editTransaction']);
    $app->router->post('/updateTransactions', [TransactionController::class, 'updateTransaction']);
    $app->router->post('/deleteTransactions', [TransactionController::class, 'deleteTransaction']);


    //end point of Transactions_line_item 
    $app->router->get('/transactionsli', [TransactionLineItemController::class, 'tliview']);
    $app->router->get('/displayTransactionLineItem', [TransactionLineItemController::class, 'displaytransactionlineitem']);
    $app->router->post('/insertTransactionLineItem', [TransactionLineItemController::class, 'inserttransactionlineitem']);
    // $app->router->get('/viewProducts', [TransactionLineItemController::class, 'viewProductsName']);
    $app->router->post('/inserttransactionsinline', [TransactionLineItemController::class, 'inserttransactionlineitem']);
    

    //end points of Logout 
    $app->router->get('/logout', [LoginController::class, 'logout']);
}


$app->run();


?>
