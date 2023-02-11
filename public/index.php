<?php

use core\App;
use core\Database;



session_start();

const BASE_PATH = __DIR__ . './../';



require_once BASE_PATH . 'vendor/autoload.php';
require_once BASE_PATH . 'functions.php';


require base_path('bootstrap.php');





$router = new core\Router();
$routes = require_once base_path('routes.php');



$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method =  $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);


