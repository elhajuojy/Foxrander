<?php

use core\Router;

require "vendor/autoload.php";




$uri = parse_url($_SERVER['REQUEST_URI'])['path'];


$route = new Router(
    uri:  $uri,
    routes: [
        "/"=>"Controller/HomeController.php",
        "/Home"=>"Controller/HomeController.php",
]);



$route->reslove();

