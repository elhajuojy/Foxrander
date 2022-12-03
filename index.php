<?php

use core\Database;
use core\Router;



require "vendor/autoload.php";


//database Configuration 
$config = require ("config.php");
$db = new Database($config['database']);
$notes = $db->query("select * from notes")->findOrFail();



//routring 
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];


$route = new Router(
    uri:  $uri,
    routes: [
        "/"=>"Controller/HomeController.php",
        "/Home"=>"Controller/HomeController.php",
]);



$route->reslove();

