<?php

use core\App;
use core\Container;
use core\Database;
use Dotenv\Dotenv;

$dotenv = Dotenv::createUnsafeImmutable(BASE_PATH);
$dotenv->safeload();

$container = new Container();


$container->bind('core\Database', function(){
    $config = require_once  base_path('config.php');
    return new Database($config['database']);
});







App::getInstance()->setContainer($container);
