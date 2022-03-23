<?php
require_once __DIR__ . "/../core/config.php";
require_once __DIR__ . "/../vendor/autoload.php";

use app\controllers\SiteController;
use app\core\Application;
use app\controllers\AuthController;
use app\controllers\LocationController;
use app\controllers\TradingPartnerController;
//print_r($_SERVER['REQUEST_URI']);
//exit;
$app = new Application(dirname(__DIR__));

$app->router->get('/', [SiteController::class , 'home']);

$app->router->get('/home', [SiteController::class , 'home']);

$app->router->get('/contact', [SiteController::class , 'Contact']);

$app->router->post('/contact', [SiteController::class , 'handleContact']);

$app->router->get('/login', [AuthController::class, 'login']);

$app->router->post('/login', [AuthController::class, 'login']);

$app->router->get('/register', [AuthController::class, 'register']);

//$app->router->post('/register', [AuthController::class, 'register']);


$app->router->get('/app', 'home');

$app->router->get('/location', [LocationController::class, 'formview']);

$app->router->post('/location', [LocationController::class, 'insert']);

//$app->router->get('/location', [LocationController::class, 'displayrecords']);

$app->router->get('/tradingpartner', [TradingPartnerController::class, 'formview']);

$app->router->post('/tradingpartner', [TradingPartnerController::class, 'insertrecords']);


$app->run();


?>