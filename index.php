<?php

use app\core\Route\Route;

if (!isset($_GET['url'])) {
    $_GET['url'] = 'index';
}

// Use DIRECTORY_SEPERATOR for different OS
$path = __DIR__ . DIRECTORY_SEPARATOR;

include $path . 'app' . DIRECTORY_SEPARATOR . 'core' . DIRECTORY_SEPARATOR . 'Route.php';

/*spl_autoload_register(function ($class) {

});*/

$x = ['url' => 'index', 'controller' => false];
$y = ['url' => 'index/test', 'controller' => false];

$route = new Route();

