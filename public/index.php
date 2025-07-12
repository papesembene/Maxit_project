<?php
require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/../App/config/bootstrap.php';

use App\Core\Router;

$routes = require_once __DIR__.'/../routes/route.web.php';


Router::resolve($routes);