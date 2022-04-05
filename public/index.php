<?php
require_once __DIR__ . "/../core/config.php";
require_once __DIR__ . "/../vendor/autoload.php";

use app\controllers\AdjustmentController;
use app\controllers\SiteController;
use app\core\Application;
use app\controllers\AuthController;
use app\controllers\LocationController;
use app\controllers\TradingPartnerController;
use app\controllers\LoginController;
use app\controllers\InboundController;
use app\controllers\ProductController;
use app\controllers\CompositionController;

$app = new Application(dirname(__DIR__));

$app->router->get('/login', [LoginController::class, 'formview']);
$app->router->post('/login', [LoginController::class, 'fetch']);


$app->router->get('/', [SiteController::class , 'home']);

$app->router->get('/home', [SiteController::class , 'home']);

$app->router->get('/contact', [SiteController::class , 'Contact']);

$app->router->post('/contact', [SiteController::class , 'handleContact']);


$app->router->get('/register', [AuthController::class, 'register']);

//$app->router->post('/register', [AuthController::class, 'register']);


$app->router->get('/app', 'home');

$app->router->get('/location', [LocationController::class, 'formview']);

$app->router->post('/location', [LocationController::class, 'insert']);

//$app->router->get('/location', [LocationController::class, 'displayrecords']);






$app->router->get('/inbound', [InboundController::class, 'allInbounds']);
$app->router->post('/addInbound', [InboundController::class, 'insert']);
$app->router->get('/addInbound', [InboundController::class, 'addInbound']);
$app->router->get('/viewInbounds', [InboundController::class, 'viewInbounds']);


//end points of Product Module
$app->router->get('/product', [ProductController::class, 'renderViewProducts']);
$app->router->post('/product', [ProductController::class, 'insert']);
$app->router->get('/viewProducts', [ProductController::class, 'viewProducts']);
$app->router->get('/loadProduct', [ProductController::class, 'loadParticularProduct']);
$app->router->post('/updateProduct', [ProductController::class, 'updateProduct']);
$app->router->post('/deleteProduct', [ProductController::class, 'deleteProduct']);



//end points of composition
$app->router->post('/composition', [CompositionController::class, 'insertCompositions']);


$app->router->get('/adjustment', [AdjustmentController::class, 'renderAdjustment']);
$app->router->get('/viewadjustedProducts', [AdjustmentController::class, 'viewadjustedProducts']);

//////////////////////      TRADING PARTNER ROUTER        ////////////////////////////


$app->router->get('/tradingpartner', [TradingPartnerController::class, 'formview']);
$app->router->get('/addTradingpartner', [TradingPartnerController::class, 'addTradingpartner']);
$app->router->get('/viewtradingpartners', [TradingPartnerController::class, 'viewTradingpartners']);

$app->router->get('/editTradingpartners', [TradingPartnerController::class, 'editTradingpartners']);

$app->router->post('/updateTradingpartner', [TradingPartnerController::class, 'updateTradingpartners']);

$app->router->get('/viewdeleteTradingpartners', [TradingPartnerController::class, 'viewdeleteTradingpartners']);
$app->router->post('/deleteTradingpartner', [TradingPartnerController::class, 'deleteTradingpartners']);

//$app->router->get('/deletetradingpartners', [TradingPartnerController::class, 'deleteTradingpartners']);

$app->router->post('/tradingpartner', [TradingPartnerController::class, 'insertTradingpartner']);



//////////////////////////////////  END TRADING PARTNER ROUTER    /////////////////////////



$app->run();


?>
