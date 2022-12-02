<?php
require "vendor/autoload.php";
use core\Router;


$uri = parse_url($_SERVER['REQUEST_URI'])['path'];



$route = new Router(
    uri:  $uri,
    routes: [
        $uri.""=>"Controller/HomeController.php",
        $uri."Home"=>"Controller/HomeController.php",
]);


$route->reslove();

