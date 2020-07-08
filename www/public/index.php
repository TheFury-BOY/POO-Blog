<?php

require '../config/dbconfig.php';

require '../src/Core/Autoloader.php';

App\Core\Autoloader::register();

$router = new \App\Core\Router();
$router->run();