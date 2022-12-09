<?php

use core\Database;
use core\Router;



require "vendor/autoload.php";

$routes = require "routes.php";
$db = new Database([
    'host' => 'localhost',
    'dbname' => 'test',
    'charset' => 'utf8'
]);

define('DB', $db);



//routring 
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];


$route = new Router(
    uri:  $uri,
    routes: $routes
);



$route->reslove();

