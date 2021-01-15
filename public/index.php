<?php
require '../vendor/autoload.php';
session_start();
define("SRC",__DIR__.'/../src/');
define('VIEW',__DIR__.'/../src/Views/');
require SRC.'helper.php';
$router = new App\Router();
$router->run();