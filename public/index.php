
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
//print_r($_SERVER['REQUEST_URI']);
//exit;
$app = new Application(dirname(__DIR__));


//$app->router->get('/', [AuthController::class , 'first']);

if(!isset($_COOKIE['loginTrue']) || $_COOKIE['loginTrue']=="undefined" || $_COOKIE['loginTrue'] ==null){
    $app->router->get('/', [AuthController::class , 'first']);
    $app->router->get('/login', [LoginController::class, 'formview']);
    $app->router->get('/logout', [LoginController::class, 'formview']);
    $app->router->post('/login', [LoginController::class, 'fetch']);

    $app->router->get('/register', [RegisterController::class, 'formview']);
    $app->router->post('/register', [RegisterController::class, 'insert']);

    $app->router->get('/home', [LoginController::class, 'formview']);
    $app->router->get('/contact', [LoginController::class, 'formview']);
    $app->router->get('/location', [LoginController::class, 'formview']);
    $app->router->get('/tradingpartner', [LoginController::class, 'formview']);
    $app->router->get('/product', [LoginController::class, 'formview']);
    $app->router->get('/addProduct', [LoginController::class, 'formview']);
    $app->router->get('/viewProducts', [LoginController::class, 'formview']);
    $app->router->get('/inbound', [LoginController::class, 'formview']);
    $app->router->get('/addInbound', [LoginController::class, 'formview']);
    $app->router->get('/viewInbounds', [LoginController::class, 'formview']);

    $app->router->get('/viewUsers', [LoginController::class, 'formview']);



}
else{
    $app->router->get('/', [SiteController::class , 'home']);
    $app->router->get('/login', [SiteController::class , 'home']);
    $app->router->post('/', [SiteController::class , 'home']);
    $app->router->get('/home', [SiteController::class , 'home']);

    $app->router->get('/contact', [SiteController::class , 'Contact']);

    $app->router->post('/contact', [SiteController::class , 'handleContact']);

    $app->router->get('/location', [LocationController::class, 'formview']);

    $app->router->post('/location', [LocationController::class, 'insert']);

    //$app->router->get('/location', [LocationController::class, 'displayrecords']);

    $app->router->get('/tradingpartner', [TradingPartnerController::class, 'formview']);
    $app->router->post('/tradingpartner', [TradingPartnerController::class, 'insertrecords']);

    $app->router->get('/product', [ProductController::class, 'formview']);
    $app->router->get('/addProduct', [ProductController::class, 'addProduct']);
    $app->router->get('/viewProducts', [ProductController::class, 'viewProducts']);
    $app->router->post('/product', [ProductController::class, 'insert']);

    $app->router->get('/inbound', [InboundController::class, 'allInbounds']);
    $app->router->post('/addInbound', [InboundController::class, 'insert']);
    $app->router->get('/addInbound', [InboundController::class, 'addInbound']);
    $app->router->get('/viewInbounds', [InboundController::class, 'viewInbounds']);

    $app->router->get('/viewUsers', [UserController::class, 'renderViewUsers']);
    $app->router->get('/users', [UserController::class, 'viewUsers']);
    $app->router->post('/deleteUser', [UserController::class, 'deleteUser']);
    $app->router->post('/addUser', [UserController::class, 'insert']);
    $app->router->get('/loadUser', [UserController::class, 'loadPerticularUser']);
    $app->router->post('/updateUser', [UserController::class, 'updateUser']);
    
    // $app->router->post('/addInbound', [InboundController::class, 'insert']);
    // $app->router->get('/addInbound', [InboundController::class, 'addInbound']);
    // $app->router->get('/viewInbounds', [InboundController::class, 'viewInbounds']);

    
    $app->router->get('/register', [RegisterController::class, 'formview']);
    $app->router->post('/register', [RegisterController::class, 'insert']);
    
    $app->router->get('/logout', [LoginController::class, 'logout']);
}







$app->run();


?>
